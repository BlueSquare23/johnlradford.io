      <div class="panel container-lg">
        <div class="row">
          <div class="col">
            <center>
            <img style="width:100%;" class="img-fluid" src="./static/img/underconstruction.gif" alt="">
            <hr>
              <?php
                ini_set('allow_url_fopen','1');
                $hits = file_get_contents("https://johnlradford.io/cgi-bin/hits.cgi",0);
                // just in case...
                $hits = escapeshellcmd($hits);
                $hits = htmlspecialchars($hits);
                echo "<h3>Hit Counter: $hits</h3>";
              ?>
            </center>
          </div>
        </div>
      </div>
