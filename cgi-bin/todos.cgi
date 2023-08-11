#!/usr/bin/env perl
# John's Todo list CGI!
# Written by John R., August 2023.

use strict;
use warnings;
 
use CGI;
# For Debuging.
use CGI::Carp qw(fatalsToBrowser);
use HTML::Tiny;
use File::Copy;
use lib '../../../perl5/lib/perl5/';
use Dotenv -load => '../.env';
use Crypt::PBKDF2;
 
my $query = CGI->new;
my $document = HTML::Tiny->new;

# Only accept POST requests.
&redirect("Bad Request Method!", "/", "200") unless ($query->request_method eq 'POST');

my $todos_file = '../todos/todos.txt';
&check_and_create_todos($todos_file);

# If parameters are supplied, run the main logic.
if ($query->param()) {
    my $todo_text = $query->param('todo_text') || &redirect("Missing Todo Text!", "/", "200");
    my $todo_key  = $query->param('todo_key') || &redirect("Missing Required Auth Key!", "/", "200");

    &check_todo_key($todo_key);

    # Backup todo file before editing.
    my $epoc = time();
    copy($todos_file, "../todos/backup/todos.txt.$epoc") || die "cannot copy file";

    # Always overwrite.
    open(FH, '>', $todos_file)
        or die("Couldn't open file '$todos_file': $!");

    print FH "$todo_text\n";
    close FH;

    &redirect("Todo List Updated!", "/todos/", "200");
}

exit 0;

## Subs.

sub check_and_create_todos {
    my $td_file = shift;
    # If todos file doesn't already exist create it.
    unless (-e $td_file) {
        open(FH, '>', $td_file)
            or die("Couldn't open file '$td_file': $!");
        close FH;
    }
}

sub redirect {
    my ($message, $location, $status) = @_;
    if ( $status eq "403" ) {
        print $query->header('-Status'        => $status,
                             '-Type'          => 'text/html; charset=utf-8',
                             '-Cache-Control' => 'private, no-cache, no-store, must-revalidate, max-age=0',
                             '-Pragma'        => 'no-cache');
        print $document->html( [ $document->body( [$document->h1     ( { class => 'main' }, $message ) ] ) ] );
        exit 0;
    }

    my $js_redirect_code = "window.setTimeout(function(){ window.location.href = '$location' } , 500);";

    print $query->header;
    print $document->html(
        [
            $document->head( $document->title( 'Todo List Redirect' ) ),
            $document->body(
                [
                    $document->h1     ( { class => 'main' }, $message ),
                    $document->script ( { type => 'text/javascript' }, $js_redirect_code ),
                    $document->p      ( 'You should be redirected shortly, if not click the link below.' ),
                    $document->a      ( { href => "$location" }, 'Click to Redirect' )
                ]
            )
        ]
    );
    exit 0;
}

sub check_todo_key {
    my $supplied_key = shift;
    my $pbkdf2 = Crypt::PBKDF2->new;
    unless ( $pbkdf2->validate($ENV{'TODO_PASS_HASH'}, $supplied_key) ) {
        &redirect("Invalid Key!", "/", "403");
    }
}
