<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>John's Homepage</title>
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
</head>

<body style="background-color:black;">
  <!-- Nice Bootstrap Navbar -->
  <?php include "./nav.html" ?>

  <div class="py-2"></div>

  <div class="container-lg bg-dark text-white">
    <h3 class="pt-1">About Me</h3>
    <a href="https://www.youtube.com/watch?v=MS5_cIwzkII"
      target="_blank" rel="noopener noreferrer">
      <img src="./static/img/goodbing.png" alt="I have been a good bing :)">
    </a>
    <br>
    <p>I'm a junior computer heretic, IT professional, web guy, tinkerer, bad
       programmer, and aspiring mad sea captain. <i>Aargh, computers are but a
       fallback til me vessle's seaworthy again!</i></p>
    <p>I'm a big fan of the Unix / Linux world. I spend a lot of my time
       inside of a terminal window. I'm prolific scriptor who enjoys automating
       computing tasks of all shapes and sizes.</p>
    <p>My professional experience is primarily in support and security for web and
       email hosting services. Although, I also like to dabble with front and back end
       web development and offensive cyber security.
    </p>
  </div>

  <div class="pt-1 container-lg bg-dark text-white">
    <blockquote class="blockquote">
      <p>> Perl is like a thermos, it keeps cold things cold and warm things not impossible.</p>
    </blockquote>
    <div class="credit" style="text-align:right;">
      <cite>
        <a href="https://ashidakim.com/zenkoans/57thegatesofparadise.html">- Anchient Perl Koan</a>
      </cite>
    </div>
  </div>
  <br>

  <div class="pt-1 container-lg bg-dark text-white">
    <h3>Technologies I'm Familiar With</h3>
    <ul>
      <li>
        Operating Systems: Linux, FreeBSD, Android
      </li>
      <li>
        Server Technologies: Apache, Nginx, Postfix, Dovecot, MySQL
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

  <div class="pt-1 container container-lg bg-dark text-white">
    <div class="row">
      <!-- Probably not needed -->
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
  <br>

  <div class="pt-1 container-lg bg-dark text-white">
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
                A very basic perl script for interacting with your plex server from the command line.
              </p>
              <a
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
