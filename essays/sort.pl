#!/usr/bin/perl
use strict;
use warnings;
use Getopt::Long;

# Parse command line arguments
my $num_years = 10;
my $filename = 'all';
GetOptions('year=i' => \$num_years) or die "Usage: $0 [--year NUMBER]\n";

# Set default if not provided or invalid
$num_years = 10 if !defined $num_years || $num_years <= 0;

# Get current year (dynamic)
my ($sec,$min,$hour,$mday,$mon,$year,$wday,$yday,$isdst) = localtime(time);
my $current_year = $year + 1900;

# Calculate cutoff year
my $cutoff_year = $current_year - $num_years;

# Read and parse the data from file
my %top_films_by_year;

open my $fh, '<', $filename or die "Cannot open file '$filename': $!";
while (my $line = <$fh>) {
    # Skip header lines and empty lines
    next if $line =~ /^(all|Rank\s+Title)/ || $line =~ /^\s*$/;
    
    # Parse the line: rank, title, gross, year
    if ($line =~ /^(\d+)\s+(.+?)\s+\$([\d,]+)\s+(\d{4})$/) {
        my ($rank, $title, $gross_str, $year) = ($1, $2, $3, $4);
        
        # Skip films older than the cutoff
        next if $year < $cutoff_year;
        
        # Convert gross to numeric value (remove commas)
        my $gross = $gross_str;
        $gross =~ s/,//g;
        
        # Store only the highest grossing film for each year
        if (!exists $top_films_by_year{$year} || $gross > $top_films_by_year{$year}{gross}) {
            $top_films_by_year{$year} = {
                title => $title,
                gross => $gross,
                formatted_gross => '$' . $gross_str,
                rank => $rank
            };
        }
    }
}
close $fh;

# Sort years by gross (descending)
my @sorted_years = sort { $top_films_by_year{$b}{gross} <=> $top_films_by_year{$a}{gross} } keys %top_films_by_year;

# Display results as markdown table
print "Top Highest Grossing Films from the Last $num_years Years ($cutoff_year - $current_year)\n\n";

if (scalar @sorted_years == 0) {
    print "No films found in the specified time period.\n";
    exit;
}

print "| Year | Film Title | Lifetime Gross | Overall Rank |\n";
print "|------|------------|----------------|--------------|\n";

foreach my $year (@sorted_years) {
    my $film = $top_films_by_year{$year};
    printf "| %-4s | %-40s | %-14s | %-12s |\n", 
           $year, 
           $film->{title},
           $film->{formatted_gross},
           "#" . $film->{rank};
}

print "\nTotal years with films: " . scalar @sorted_years . "\n";
