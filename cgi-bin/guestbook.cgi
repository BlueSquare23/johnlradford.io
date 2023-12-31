#!/usr/bin/env perl
# John's Awesome Guestbook CGI!
# Written by John R., August 2023.

use strict;
use warnings;
 
use CGI;
# For Debuging.
#use CGI::Carp qw(fatalsToBrowser);
use HTML::Tiny;
use Captcha::reCAPTCHA;
use lib '../../../perl5/lib/perl5/';
use Dotenv -load => '../.env';
use Net::Akismet;
 
my $query = CGI->new;
print $query->header;
my $document = HTML::Tiny->new;
my $captcha = Captcha::reCAPTCHA->new;
my $akismet = Net::Akismet->new(
                KEY => $ENV{AKISMET_SECRET_KEY},
                URL => 'https://johnlradford.io/',
        ) or &js_redirect_home('Key verification failure!');

# Only accept POST requests.
&js_redirect_home("Bad Request Method!") unless ($query->request_method eq 'POST');

my $guestbook_file = '../guestbook.txt';
&check_and_create_guestbook($guestbook_file);

# If parameters are supplied, run the main logic.
if ($query->param()) {
    my $fullname = $query->param('fullname') || &js_redirect_home("Missing Full Name!");
    my $message  = $query->param('message') || &js_redirect_home("Missing Message Text!");
    my $captcha_response = $query->param('g-recaptcha-response') || &js_redirect_home("Missing reCAPTCHA Verification Token!");

    &verify_captcha($captcha_response);

    &js_redirect_home("Name exceeds 50 characters!") if ( length $fullname > 50 );
    &js_redirect_home("Message exceeds 1000 characters!") if ( length $message > 500 );

    &akismet_check($fullname, $message);

    # Strip out bad chars.
    $fullname =~ s/[\$<>#@~&*()\[\];:^`\\\/]+//g;
    $message =~ s/[\$<>#@~&*()\[\];:^`\\\/]+//g;

    # Writing to guestbook file.
    open(FH, '>>', $guestbook_file)
        or die("Couldn't open file '$guestbook_file': $!");
    
    my $date_time = localtime();
    print FH "Date: $date_time\n";
    print FH "Name: $fullname\n";
    print FH "Message: $message\n";
    print FH "---\n";
    close FH;
    &js_redirect_home("Message Written to Guestbook!");
}

exit 0;

## Subs.

sub check_and_create_guestbook {
    my $gb_file = shift;  
    # If guestbook file doesn't already exist create it.
    unless (-e $gb_file) {
        open(FH, '>', $gb_file)
            or die("Couldn't open file '$gb_file': $!");
        close FH;
    }
}

sub js_redirect_home {
    my $message = shift;  
    my $js_redirect_code = 'window.setTimeout(function(){ window.location.href = "/" } , 500);';
    print $document->html(
        [
            $document->head( $document->title( 'Guestbook CGI Redirect' ) ),
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

sub verify_captcha {
    my $response = shift;
    # Verify submission.
    my $result = $captcha->check_answer_v2(
        $ENV{'CAPTCHA_SECRET_KEY'}, $response, $ENV{'REMOTE_ADDR'},
    );

    # For Debug, in case problems with captcha.
    #print "$result->{error}\n";

    unless( $result->{is_valid} ){
        &js_redirect_home("Captcha Verification Failed!");
    }
}

sub akismet_check {
    my ($name, $message) = @_;
    my $verdict = $akismet->check(
                    USER_IP                 => $ENV{REMOTE_ADDR},
                    COMMENT_USER_AGENT      => $ENV{HTTP_USER_AGENT},
                    COMMENT_CONTENT         => $message,
                    COMMENT_AUTHOR          => $name,
                    REFERRER                => $ENV{HTTP_REFERER},
            ) or die('Is the server here?');

    if ('true' eq $verdict) {
        &js_redirect_home('Spam Detected!');
    }
}

