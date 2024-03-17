#!/usr/bin/env perl
# This script is used to view other CGI scripts with sytax highlighting and
# line numbering. Why? Github uses to much js, fucks with my copy paste buffer.
# I hate looking at source on github. I want just raw source with line number
# and sytax highlighting, nothing else. This script uses Codemirror to do the
# numbering and syntax highlighting.

use strict;
use warnings;
 
use CGI;
# For Debuging.
use CGI::Carp qw(fatalsToBrowser);
use HTML::Tiny;
use LWP::Simple;
use File::Slurp;

my $CGI_BIN_URL = 'https://raw.githubusercontent.com/BlueSquare23/johnlradford.io/master/cgi-bin/';
my %ALLOWED_CGIS = (
    'contact.cgi' => 1,
    'guestbook.cgi' => 1,
    'hits.cgi' => 1,
);

my $query = CGI->new;
print $query->header;
my $document = HTML::Tiny->new;

# If parameters are supplied, run the main logic.
if ($query->param()) {
    my $cgi_name = $query->param('cgi_name') || &redirect("Missing CGI Name!");
    &redirect("Invalid CGI Name!") unless exists $ALLOWED_CGIS{$cgi_name};

    my $script_url = $CGI_BIN_URL . $cgi_name;
    my $contents = get($CGI_BIN_URL . $cgi_name);
    &redirect("Couldn't fetch CGI source URL!") unless defined $contents;

    my $nav_html = read_file('../nav.html');
    my $footer_html = read_file('../footer.html');

    my $js_style_textarea = "var ta = CodeMirror.fromTextArea(document.getElementById('text-area')," .
        "{ lineNumbers: true, mode: 'text/x-perl', theme: 'the-matrix', readOnly: 'nocursor' }); ta.setSize(null, 1000);";

    print "<!DOCTYPE html>\n" . $document->html(
        [
            "\n" . $document->head(
                [ 
                    "\n" . $document->title( 'View CGI\'s Page' ),
                    "\n" . $document->script ( { crossorigin => 'anonymous', language => 'javascript', type => 'text/javascript', src => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js'} ),
                    "\n" . $document->script ( { crossorigin => 'anonymous', language => 'javascript', type => 'text/javascript', src => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/mode/perl/perl.min.js'} ),
                    "\n" . $document->link   ( { crossorigin => 'anonymous', rel => 'stylesheet', type => 'text/css', href => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css'} ),
                    "\n" . $document->link   ( { crossorigin => 'anonymous', rel => 'stylesheet', type => 'text/css', href => 'https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/theme/the-matrix.css'} ),
                    "\n" . $document->link   ( { crossorigin => 'anonymous', rel => 'stylesheet', type => 'text/css', href => '/static/css/main.css'} ),
                    "\n" . $document->link   ( { crossorigin => 'anonymous', rel => 'stylesheet', type => 'text/css',  integrity => 'sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC', href => 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'} ),
                    "\n" . '<link rel="preconnect" href="https://fonts.googleapis.com">' .
                    "\n" . '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' .
                    "\n" . '<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">' .
                    "\n"
                ]
            ),
            "\n" . $document->body(
                [
                    "\n" . $nav_html .
                    "\n" . $document->h1     ( { class => 'main', style => 'color:white' }, "CGI Script: <a href='$script_url'>$cgi_name</a>" ),
                    "\n" . $document->textarea ( { id => 'text-area', cols => 120, rows => 100 }, "\n" . $contents . "\n"),
                    "\n" . $document->script ( { type => 'text/javascript' }, $js_style_textarea ),
                    "\n" . $footer_html .
                    "\n" . $document->script ( { language => 'javascript', type => 'text/javascript', src => 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', integrity => 'sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF', crossorigin => 'anonymous' } ),
                ]
            )
        ]
    );

}

exit 0;

## Subs.

sub redirect {
    my $message = shift;  
    my $js_redirect_code = 'window.setTimeout(function(){ window.location.href = "/" } , 500);';
    print $document->html(
        [
            $document->head( $document->title( 'View CGI\'s Redirect' ) ),
            $document->body(
                [
                    $document->h1     ( { class => 'main' }, $message ),
                    $document->script ( { type => 'text/javascript' }, $js_redirect_code ),
                    $document->p      ( 'You should be redirected shortly, if not click the link below.' ),
                    $document->a      ( { href => '/' }, 'Redirect Home' )
                ]
            )
        ]
    );
    exit 0;
}

