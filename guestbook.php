      <div class="pt-1 my-3 container-lg bg-dark text-white border border-secondary border-2 rounded">
        <div class="row">
          <div class="col my-1">
            <h3>Sign My Guestbook!</h3>
            <form action="./cgi-bin/guestbook.cgi" method="POST">
              <div class="form-group">
                <label for="fullname">Your Name:</label>
                <input class="form-control" type="text" id="fullname" name="fullname" maxlength="50" required>
              </div>
              <div class="pb-2 form-group">
                <label for="message">Type Your Message Here!</label>
                <span id="char_count" class="float-end">500/500</span>
                <textarea class="form-control" id="message" name="message" rows="4" cols="50" maxlength="500" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary mb-3 float-end">Sign Here</button>
              <!-- ReCAPTCHA -->
              <div class="g-recaptcha mb-3" data-sitekey="6Ld48YInAAAAAP_rjAzv6yiXrC79Zrk1VerB9GL7"></div> 
            </form>
            <br>
          </div>
          <div class="col my-1">
            <h3>Previous Signatures:</h3>
            <!-- Use PHP to read contents of guestbook.txt into a textarea -->
            <?php include "./read_in_guestbook.php" ?>
          </div>
        </div>
      </div>
