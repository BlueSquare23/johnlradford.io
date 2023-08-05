<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Meta Tags -->
    <title>John's Homepage</title>
    <meta name="description" content="John's a dude who does computer stuff! Programming, Hacking, and Kicking it Old School since 94'.">
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://johnlradford.io">
    <meta property="og:type" content="website">
    <meta property="og:title" content="John's Homepage">
    <meta property="og:description" content="John's a dude who does computer stuff! Programming, Hacking, and Kicking it Old School since 94'.">
    <meta property="og:image" content="https://johnlradford.io/static/img/BlueSquare600x315.jpg">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="johnlradford.io">
    <meta property="twitter:url" content="https://johnlradford.io">
    <meta name="twitter:title" content="John's Homepage">
    <meta name="twitter:description" content="John's a dude who does computer stuff! Programming, Hacking, and Kicking it Old School since 94'.">
    <meta name="twitter:image" content="https://johnlradford.io/static/img/BlueSquare600x315.jpg">

    <link rel="stylesheet" type="text/css" href="static/css/main.css">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
    <!-- Google Fonts VT323 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <!-- ReCAPTCHA v2 -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  
  <body style="background-color:black;">
    <!-- Nice Bootstrap Navbar -->
    <?php include "./nav.html" ?>
  
    <main>
      <!-- My Bio -->
      <div class="mt-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <div class="row">
          <div class="col">
            <h3 class="pt-1">About Me</h3>
            <a href="https://youtu.be/Gmp1o9pkync?t=168"
              target="_blank" rel="noopener noreferrer">
              <img class="mb-1" src="./static/img/goodbing.png" alt="I have been a good bing :)">
            </a>
            <br>
            <p>I'm a junior computer heretic, IT professional, web guy, tinkerer, bad
               programmer, and aspiring mad sea captain. <i>Aargh, computers are but a
               fallback til me vessle's seaworthy again!</i></p>
            <p>I'm a big fan of the Unix / Linux world and spend a lot of my time
               inside of a terminal window. As a compulsive scriptor I enjoy automating
               computing tasks of all shapes and sizes.</p>
            <p>My professional experience is primarily in support, security, and
               systems administration for web and email hosting services. Although, I also
               dabble with front and back end web development and offensive cyber
               security.
            </p>
            <hr style="color: white;">
            <h4>My PGP Public Key:
              <a
                href="pgp_key.txt" id="pgp-key-icon" title="John's PGP Key" target="_blank" rel="noopener noreferrer" 
                style="text-decoration: none;">
                <img src="./static/img/key.png" alt="pgp key icon">
              </a>
              <a href="pgp_key.txt" download="johns_pgp_key.txt" style="text-decoration: none;" title="Download Key">
                <img src="./static/img/download-icon.png" alt="download icon">
              </a>
            </h4>
          </div>
        </div>
      </div>

      <!-- Hit Counter -->
      <div class="pt-1 my-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <div class="row">
          <div class="col">
            <?php
              $hits = file_get_contents("https://johnlradford.io/cgi-bin/hits.cgi",0);
              // just in case...
              $hits = escapeshellcmd($hits);
              $hits = htmlspecialchars($hits);
              echo "<h3>Hit Counter: $hits</h3>";
            ?>
          </div>
        </div>
      </div>
  
      <!-- Perl Quote -->
      <div class="pt-1 mb-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <blockquote class="blockquote">
          <h4>> Perl is like a thermos, it keeps cold things cold and warm things not impossible.</h4>
        </blockquote>
        <div class="credit" style="text-align:right;">
          <cite>
            <a href="https://ashidakim.com/zenkoans/57thegatesofparadise.html">- Anchient Perl Koan</a>
          </cite>
        </div>
      </div>
  
      <!-- Technical Expierence -->
      <div class="pt-1 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <h3>Technologies I'm Familiar With</h3>
        <ul>
          <li>
            Operating Systems: Linux, FreeBSD, Android
          </li>
          <li>
            Server Technologies: Apache, Nginx, Postfix, Dovecot, MySQL
          </li>
          <li>
            Protocols: TCP/IP, HTTP(S), FTP, SMTP, IMAP, POP3, NTP, SSH, Telnet
          </li>
          <li>
            Programming Languages: C, Python, Perl, Bash, Java, PHP, JavaScript, TypeScript
          </li>
          <li>
            Data Languages: SQL, JSON, YAML
          </li>
          <li>
            Markup Languages: HTML, Markdown, <span class="texhtml" style="font-family: &#39;CMU Serif&#39;, cmr10, LMRoman10-Regular, &#39;Latin Modern Math&#39;, &#39;Nimbus Roman No9 L&#39;, &#39;Times New Roman&#39;, Times, serif;">L<span style="text-transform: uppercase; font-size: 0.75em; vertical-align: 0.25em; margin-left: -0.36em; margin-right: -0.15em; line-height: 1ex;">a</span>T<span style="text-transform: uppercase; vertical-align: -0.25em; margin-left: -0.1667em; margin-right: -0.125em; line-height: 1ex;">e</span>X</span>, Mediawiki Markdown
          </li>
          <li>
            Web Frameworks: Flask, Bootstrap, Hugo, NodeJS
          </li>
          <li>
            CMS's: WordPress, MediaWiki, Joomla, Drupal
          </li>
          <li>
            Virtualization / Containerization: Docker, QEMU/KVM, VirtualBox
          </li>
      	  <li>
      	    Deployment: Ansible, Puppet
      	  </li>
          <li>
            Game Servers: Gmod - TTT, Minecraft, Anything LGSM
          </li>
        </ul>
      </div>
  
      <!-- Badges, probably not needed -->
      <div class="pt-1 my-3 container container-lg bg-dark text-white border border-secondary border-2 rounded">
        <div class="row">
          <h3>Badges</h3>
          <div class="col">
            <script src="https://www.hackthebox.eu/badge/381749"></script>
          </div>
          <div class="col">
            <script src="./static/js/hrbadge.js"></script>
            <br>
          </div>
        </div>
      </div>

      <!-- My FTP Site -->
      <div class="pt-1 my-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <div class="row">
          <div class="col">
            <h3>My FTP Site
              <a href="ftp://anonymous:@ftp.bluesquare23.sh">
                <img style="float:right;" src="./static/img/ftp.png" alt="FTP icon">
              </a>
            </h3>
            <h4>FTP Settings</h4>
            <ul>
              <li>
                HOSTNAME: ftp.bluesquare23.sh
              </li>
              <li>
                USERNAME: anonymous
              </li>
              <li>
                PASSWORD: (none, leave empty)
              </li>
              <li>
                PORT: 21
              </li>
            </ul>
            <p>
              Feel free to browse my files there! You can also upload files to the write-only
              <i>incoming</i> directory in order to send them to me. Useful for files larger
              than what can normlly be sent via Email. If the <i>incoming</i> dir is missing
              you'll need to follow the steps in the <i>reload.txt</i> file to manually
              reload it. The <i>incoming</i> dir will be automatically archived shortly after
              anything is uploaded to it. 
            </p>
            <p>
              If you use FTPS you'll need to ignore the certificate warning when connecting.
              The ProFTPd server is using a certificate issued under a different domain name
              than ftp.bluesquare23.sh. However, your connection should still be encrypted.

              You can use my public PGP key to encrypt any files before sending them if for
              some reason you're limited to only using plain old FTP and you'd like to
              maintain encryption.
            </p>
          </div>
        </div>
      </div>
  
      <!-- Sample Projects -->
      <div class="pt-1 my-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <h3>Sample Projects</h3>
  
        <div class="container px-4">
          <div class="row gx-5">
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img 
                  style="max-height: 200px; min-height: 200px;" 
                  loading="lazy" class="rounded card-img-top" 
                  alt="LGSM Logo"
                  src="./static/img/lgsm.jpg"
                >
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">Web-LGSM</h5>
                  <p class="card-text">
                    A simple web interface for any Linux Game Server Manager (LGSM)
                    game written in Python using Flask.
                  </p>
                  <a 
                    href="https://github.com/BlueSquare23/web-lgsm" 
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Graph of SSH KeyAuth Connected Nodes"
                  src="./static/img/ssh-map.png"
                >
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">SSH Key Network Mapper</h5>
                  <p class="card-text">
                    This project helps enumerate and visualize ssh key networks
                    using Python3 and SQLite.
                  </p>
                  <a
                    href="https://github.com/BlueSquare23/ssh-map"
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container px-4">
          <div class="row gx-5">
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img 
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Plex Logo"
                  src="./static/img/plex.png">
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">Plex CLI Perl Script</h5>
                  <p class="card-text">
                    A perl script for interacting with your plex server from the command line. 
                    Options: refresh, list-libraries, and list-playing.
                  </p>
                  <a target="_blank" rel="noopener noreferrer" class="btn btn-primary"
                    href="https://github.com/BlueSquare23/Learning_Perl/blob/master/MiscPerlScripts/plex-cli.pl">Source
                  </a>
                </div>
              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Rshell.sh Favicon"
                  src="https://rshell.sh/static/img/favicon.ico"
                >
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">Rshell.sh</h5>
                  <p class="card-text">
                    Reverse shell payload generator microservice. Quickly fetch a
                    variety of reverse shell payloads from the cloud to your terminal.
                  </p>
                  <a
                    href="https://rshell.sh/" target="_blank" rel="noopener noreferrer" 
                    class="btn btn-primary">Live Site
                  </a>
                  <a
                    href="https://github.com/BlueSquare23/Rshell.sh"
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container px-4">
          <div class="row gx-5">
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Aum Logo"
                  src="./static/img/aum.png"
                >
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">Ātman Webmail Client</h5>
                  <p class="card-text">
                    A web-based Email client written using python flask. Provides a
                    simple web portal where users can login to send and receive Emails.
                  </p>
                  <a
                    href="https://github.com/BlueSquare23/Atman_Mail"
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Picture of Custom Server Monitor Dashboard"
                  src="./static/img/servermonitor200px.png"
                >
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">Homemade Server Monitor</h5>
                  <p class="card-text">
                    An internal server monitoring tool used to easily keep track of
                    the status of a few home servers. Written using Python flask.
                  </p>
                  <a 
                    href="https://monitor.bluesquare23.sh/" target="_blank"
                    rel="noopener noreferrer" class="btn btn-primary">Live Demo
                  </a>
                  <a
                    href="https://github.com/BlueSquare23/ServerMonitor"
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container px-4">
          <div class="row gx-5">
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Good Doggo!" src="./static/img/doggo.jpg"
                >
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">Random Doggo Flask App</h5>
                  <p class="card-text">
                    A python Flask application that pulls random doggo URLs from
                    the random.dog/woof.json API and displays them.
                  </p>
                  <a
                    href="https://doggo.thefamu.net/" target="_blank"
                    rel="noopener noreferrer" class="btn btn-primary">Live Site
                  </a>
                  <a 
                    href="https://github.com/BlueSquare23/doggo.thefamu.net"
                    class="btn btn-primary">Source
                  </a>
                 </div>
              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Write & Run Anything Video Thumbnail"
                  src="./static/img/writeandrunthumb.jpg"
                >
                <div class="card-body text-white bg-secondary" >
                  <h5 class="card-title">Write & Run Any Lang</h5>
                  <p class="card-text">
                    A blank textbox that allows the user to enter and then execute
                    arbitrary code from a number of different programming languages.
                  </p>
                  <a 
                    href="https://youtu.be/1vbKLqb0Lsw" target="_blank"
                    rel="noopener noreferrer" class="btn btn-primary">Video Demo
                  </a>
                  <a 
                    href="https://github.com/BlueSquare23/WriteAndRun"
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container px-4">
          <div class="row gx-5">
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Perl Logo" src="./static/img/perl.jpg"
                >
                <div class="card-body text-white bg-secondary">
                  <h5 class="card-title">Binary Search Perl</h5>
                  <p class="card-text">
                    My attempt at implementing a binary search algorithm in Perl.
                    Yes, I'm sure it could be shorter.
                  </p>
                  <a
                    href="https://github.com/BlueSquare23/Learning_Perl/blob/master/Exercises/binary_search.pl"
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
            <div class="col d-flex align-items-stretch">
              <div class="card my-2" style="width: 15rem;">
                <img
                  style="max-height: 200px; min-height: 200px;"
                  loading="lazy" class="rounded card-img-top"
                  alt="Pandoc Logo" src="./static/img/pandoc.jpg"
                >
                <div class="card-body text-white bg-secondary" >
                  <h5 class="card-title">Pandoc Templating</h5>
                  <p class="card-text">
                    Its easy to make html pages with the help of 
                    <a href="https://pandoc.org/">pandoc</a> 
                    templates. Checkout the workflow here.
                  </p>
                  <a
                    href="https://github.com/BlueSquare23/Learning_Markdown/blob/master/md2html_pandoc.md"
                    class="btn btn-primary">Source
                  </a>
                </div>
              </div>
            </div>
          </div>
          <br>
        </div>
      </div>

      <!-- Guestbook -->
      <div class="pt-1 my-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <div class="row">
          <div class="col my-1">
            <h3>Sign My Guestbook!</h3>
            <form action="./cgi-bin/guestbook.cgi" method="POST">
              <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input class="form-control" type="text" id="fullname" name="fullname" required>
              </div>
              <div class="pb-2 form-group">
                <label for="message">Type Your Message Here!</label>
                <textarea class="form-control" id="message" name="message" rows="4" cols="50" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary mb-3" style="float: right;">Sign Here</button>
              <!-- ReCAPTCHA -->
              <div class="g-recaptcha mb-3" data-sitekey="6Ld48YInAAAAAP_rjAzv6yiXrC79Zrk1VerB9GL7"></div>
            </form>
            <br>
          </div>
          <div class="col my-1">
            <h3>Previous Signatures:</h3>
            <!-- Use PHP to read contents of guestbook.txt into a textarea -->
            <?php include "./guestbook.php" ?>
          </div>
        </div>
      </div>
    </main>

    <script>
      const textarea = document.getElementById('guestbook');
      textarea.scrollTop = textarea.scrollHeight;
    </script>

    <!-- By Me A Coffee Script -->
    <script 
      data-name="BMC-Widget" data-cfasync="false"
      src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js"
      data-id="bluesquare23" data-description="Support me on Buy me a coffee!"
      data-message="Wanna buy me a coffee?" data-color="#5F7FFF"
      data-position="Right" data-x_margin="18" data-y_margin="18">
    </script>
  
    <button 
      id="topBtn" type="button" class="btn btn-primary" 
      style="color: white; text-decoration:underline;"
      onclick="window.scrollTo(0, 0);">/\ Top /\
    </button>
  
    <!-- Nice Bootstrap Footer -->
    <?php include "./footer.html" ?>
  
    <script src="./static/js/pgp-key-hovertext.js"></script>

    <!-- Bootstrap JS & Popper Bundle -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous">
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous">
    </script>
  </body>
</html>
