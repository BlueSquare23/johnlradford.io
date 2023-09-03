#!/usr/bin/env perl
# John's Awesome Contact CGI!
# Written by John R., September 2023.

use strict;
use warnings;
 
use CGI;
# For Debuging.
#use CGI::Carp qw(fatalsToBrowser);
use HTML::Tiny;
use Captcha::reCAPTCHA;
use lib '../../../perl5/lib/perl5/';
use Dotenv -load => '../.env';
 
my $query = CGI->new;
print $query->header;
my $document = HTML::Tiny->new;
my $captcha = Captcha::reCAPTCHA->new;

# Only accept POST requests.
&redirect("Bad Request Method!") unless ($query->request_method eq 'POST');

# Mail details must be specified in .env file.
&redirect("Contact Form Requires To Address") unless (defined $ENV{'TO_ADDRESS'});
&redirect("Contact Form Requires From Address") unless (defined $ENV{'FROM_ADDRESS'});

# If parameters are supplied, run the main logic.
if ($query->param()) {
    my $fullname = $query->param('fullname') || &redirect("Missing Full Name!");
    my $message  = $query->param('message') || &redirect("Missing Message Text!");
    my $captcha_response = $query->param('g-recaptcha-response') || &redirect("Missing reCAPTCHA Verification Token!");

    &verify_captcha($captcha_response);

    &redirect("Name exceeds 50 characters!") if (length $fullname > 50);
    &redirect("Message exceeds 500 characters!") if (length $message > 500);

    # Strip out bad chars.
    $fullname =~ s/[\$<>#@~&*()\[\];:^`\\\/]+//g;
    $message =~ s/[\$<>#@~&*()\[\];:^`\\\/]+//g;

    open(MAIL, "|/usr/sbin/sendmail -t -r $ENV{'FROM_ADDRESS'}");
    my $date_time = localtime();
    print MAIL "To: $ENV{'TO_ADDRESS'}\n";
    print MAIL "From: $ENV{'FROM_ADDRESS'}\n";
    print MAIL "Subject: Contact Form Submission From - $fullname\n";
    print MAIL "Date: $date_time\n";
    print MAIL "$fullname" . "'s Message\n";
    print MAIL "---\n";
    print MAIL "$message\n";
    print MAIL "---\n";
    close MAIL;
    &redirect("Message Sent!");
}

exit 0;

## Subs.

sub redirect {
    my $message = shift;  
    my $js_redirect_code = 'window.setTimeout(function(){ window.location.href = "/" } , 500);';
    print $document->html(
        [
            $document->head( $document->title( 'Contact CGI Redirect' ) ),
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
        &redirect("Captcha Verification Failed!");
    }
}
