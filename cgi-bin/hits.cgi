#!/usr/bin/env perl
# John's SuperDuper Hit Counter CGI!

use strict;
use warnings;
 
use CGI;
my $q = CGI->new;
print $q->header;

my $hits_file = '../hits.txt';

unless (-e $hits_file) {
    open(FH, '>', $hits_file)
        or die("Couldn't open file '$hits_file': $!");
    
    print FH "1";
    close FH;

    print "1";
    exit;
}

open(FH, '<', $hits_file)
    or die("Couldn't open file '$hits_file': $!");

my $hits = <FH>;
close FH;

$hits++;

open(FH, '>', $hits_file)
    or die("Couldn't open file '$hits_file': $!");

print FH $hits;
close FH;

print $hits;
