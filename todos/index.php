<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Meta Tags -->
    <title>John's Todo List</title>
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

    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
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
    <?php include "../nav.html" ?>
  
    <main>
      <!-- Todo List Form -->
      <div class="pt-1 my-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <div class="row">
          <h3>My Todo List</h3>
          <div class="col my-1 mx-5">
            <form action="../cgi-bin/todos.cgi" method="POST">
              <div class="pb-2 form-group">
                <label for="message">Edit Todos:</label>
                <!-- Use PHP to read contents of todos.txt into a textarea -->
                <?php include "./todos.php" ?>
              </div>
              <?php include './.todo_key.php' ?>
              <button type="submit" class="btn btn-primary mb-3" style="float: right;">Save</button>
            </form>
            <br>
          </div>
        </div>
      </div>
    </main>

    <!-- Nice Bootstrap Footer -->
    <?php include "../footer.html" ?>
  
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
