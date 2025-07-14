#!/usr/bin/env perl
# John's SuperDuper Hit Counter CGI!

use strict;
use warnings;
 
use CGI;
use Fcntl qw(:flock);
use Math::BigInt;

my $q = CGI->new;
print $q->header;

my $hits_file = '../hits.txt';

my $fh;
open($fh, '+<', $hits_file) or do {
    # Create file if it doesn't exist.
    open($fh, '>', $hits_file) or die "Can't create file: $!";
    print $fh "0";
    seek($fh, 0, 0);
};

flock($fh, LOCK_EX) or die "Can't lock file: $!";
my $hits = Math::BigInt->new(<$fh> || 0);
# Increment with arbitrary precision.
$hits->binc();

seek($fh, 0, 0);
truncate($fh, 0);
print $fh $hits->bstr();
close $fh;

print $hits;
