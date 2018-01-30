<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<?php wp_footer(); ?>

    <!-- SIGNUP SECTION -->
    <section id="signup" data-type="background" data-speed="4">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
            <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
          </div><!-- col-sm-6 -->
        </div><!-- row -->
      </div><!-- container -->
    </section><!-- signup -->

    <!-- FOOTER -->
    <footer>
      <div class="container">
        <div class="col-sm-3">
          <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a></p>
        </div><!-- col-sm-3 -->
        <div class="col-sm-6">
          <nav>
            <ul class="list-unstyled list-inline">
              <li><a href="">Home</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="">Resources</a></li>
              <li><a href="">Contact</a></li>
              <li class="signup-link"><a href="">Sign up now</a></li>
            </ul>
          </nav>
        </div><!-- col-sm-6 -->
        <div class="col-sm-3">
          <p class="pull-right">&copy; 2017 Roxanne Allard</p>
        </div><!-- col-sm-3 -->
      </div><!-- container -->
    </footer>

    <!-- MODAL -->
      <div class="modal" id="myModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our mailing list.</h4>
            </div><!-- modal-header -->
            <div class="modal-body">
              <p>Simply enter your name and Email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>
              <form class-"form-inline" role="form">
                <div class="form-group">
                  <label class="sr-only" for="subscribe-name">Your first name</label>
                  <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                </div><!-- form-group -->
                <div class="form-group">
                  <label class="sr-only" for="subscribe-email">Your email</label>
                  <input type="text" class="form-control" id="subscribe-email" placeholder="Your email">
                </div><!-- form-group -->
                <input type="submit" class="btn btn-danger" value="Subscribe!">
              </form>
              <hr>
              <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br> No spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
            </div><!-- modal-body -->
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal fade -->

     <!-- BOOTSTRAP CORE JAVASCRIPT -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
