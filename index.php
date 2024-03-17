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

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>

    <!-- ReCAPTCHA v2 -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  
  <div class="snow">
  <body style="background-color:black;">
    <!-- Nice Bootstrap Navbar -->
    <?php include "./nav.html" ?>
  
    <main>
      <!-- My Bio -->
      <?php include "./about.html" ?>

      <!-- Hit Counter -->
      <?php include "./hit_counter.php" ?>
  
      <!-- Quote Carousel -->
      <?php include "./quotes.html" ?>
  
      <!-- Technical Expierence -->
      <?php include "./tech_experience.html" ?>
  
      <!-- Free CGI's -->
      <?php include "./free_cgis.html" ?>

      <!-- My FTP Site -->
      <?php include "./ftp_site.html" ?>
  
      <!-- Sample Projects -->
      <?php include "./sample_projects.html" ?>

      <!-- Guestbook -->
      <?php include "./guestbook.php" ?>

    </main>
    </div>
    <!-- Scroll to Bottom of Guestbook -->
    <script>
      const textarea = document.getElementById('guestbook');
      textarea.scrollTop = textarea.scrollHeight;
    </script>

    <!-- Guestbook word number script -->
    <script src="./static/js/char-count.js"></script>

    <!-- By Me A Coffee Script -->
    <script 
      data-name="BMC-Widget" data-cfasync="false"
      src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js"
      data-id="bluesquare23" data-description="Support me on Buy me a coffee!"
      data-message="Wanna buy me a coffee?" data-color="#5F7FFF"
      data-position="Right" data-x_margin="18" data-y_margin="18">
    </script>
  
    <button 
      id="topBtn" type="button" class="btn btn-primary d-none d-sm-block" 
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
