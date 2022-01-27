<?php debug_backtrace() || include $_SERVER['DOCUMENT_ROOT'].'/templates/error/403.php'; ?>

<?php // include $_SERVER['DOCUMENT_ROOT'].'/templates/chat.php'; ?>
<?php // include $_SERVER['DOCUMENT_ROOT'].'/templates/bublbes.php'; ?>
</main>
<?php  //  include $_SERVER['DOCUMENT_ROOT'].'/templates/navbar/phone-navbar.php'; ?>
<footer class="footer bg-dark pt-1">

      <section class="pt-4 pb-4 light">
        <div class="container">
        
          <div class="row">
            <div class="col-lg-4">
              <div data-v-5c7d699b="" class="logo-footer"><?php include $_SERVER['DOCUMENT_ROOT'].'/templates/logo.php'; ?></div>
              <p class="text-white">Born psychic with an extrasensory perception capable of uniting with your energy and reading the hidden meanings and upcoming events predestined by the Universe. In the process, I will find out a lot about your soulmate, good and bad, his nature, his inner willingness to finally meet you.</p>
              
            </div>
            <div class="col ps-lg-6 ps-xl-8">
              <div class="row mt-5 mt-lg-0">
                <div class="col-6 col-md-4">
                  <h5 class="text-uppercase text-white opacity-85 mb-3">Quick Links</h5>
                  <ul class="list-unstyled">
                    <li class="mb-1"><a class="link-white" href="/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="mb-1"><a class="link-white" href="/shop"><i class="fas fa-shopping-basket"></i> Shop</a></li>
                    <li class="mb-1"><a class="link-white" href="/faq"><i class="far fa-question-circle"></i> FAQ</a></li>
                    <li class="mb-1"><a class="link-white" href="/contact"><i class="far fa-life-ring"></i> Contact Us</a></li>
                    <li class="mb-1"><a class="link-white" href="/order-status"><i class="fas fa-shipping-fast"></i> Order Status</a></li>
                    
                    
                  </ul>
                </div>
                <div class="col-6 col-md-4">
                  <h5 class="text-uppercase text-white opacity-85 mb-3">Legal</h5>
                  <ul class="list-unstyled">
                  <li class="mb-1"><a class="link-white" href="/tos">Terms of Service</a>
                  <li class="mb-1"><a class="link-white" href="/privacy">Order Status</a>
                  <li class="mb-1"><a class="link-white" href="/dmca">DMCA</a>
                  <li class="mb-1"><a class="link-white" href="/refund">Refund Policy</a>
                  <li class="mb-1"><a class="link-white" href="/facebook-policy">Facebook Policy</a>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>

      <section class="bg-dark-two py-0 light">
        <div>
          <hr class="my-0 text-white opacity-25">
          <div class="container py-3">
            <div class="row justify-content-between fs--1">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-white opacity-85">© 2022 Psychic Artist All Rights Reserved</p>
              </div>
              <div class="col-12 col-sm-auto text-center d-none	d-sm-none d-md-block">
                <p class="mb-0 text-white opacity-85">v<?php echo $v['web-version']; ?></p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
               
          </footer>              
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    
    <script src="/vendors/popper/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/vendors/anchorjs/anchor.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script data-search-pseudo-elements src="/assets/js/all.min.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/vendors/list.js/list.min.js"></script>
    <link href="/vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet" />
    <script src="/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="/assets/js/type-it.js"></script>
    <script src="/assets/js/progressbar.js"></script>
    <script src="/assets/js/verimail.jquery.js"></script>
    <script src="/assets/js/particles.min.js"></script>
    <script src="/assets/js/new-menu.js"></script>
  

    <?php echo $customCSS; ?>
    <?php echo $customJS; ?>
    <script>
      
  $.fn.extend({
    toggleText: function(a, b){
        return this.text(this.text() == b ? a : b);
    }
});

$('.sidebar-toggle').click(showSidebar);

function showSidebar(){
  $('.sidebar').toggleClass("show-sidebar"); //Display Sidebar
  $('.open-sidebar-menu').toggleClass("active"); //Put Active Class in phone menu sidebar toggle
  $('html').toggleClass("body-no-scroll"); //Remove scrolling
  $('.insert-backdrop').toggleClass("modal-backdrop show"); //Add backdrop to darken the rest of website
  $('.sidebar-toggle > .phone-menu-icon > svg').toggleClass("fa-times"); //Switch toggle menu icon to X
  $('.sidebar-toggle > .phone-menu-icon > svg').toggleClass("fa-bars"); //Switch toggle menu icon to X

  $('.sidebar-toggle > .phone-menu-icon > .phone-menu-text').toggleText('Menu', 'Close'); //Switch toggle menu text
}

$('.insert-backdrop').click(backdropClick);

function backdropClick(){
  $('.sidebar').removeClass("show-sidebar"); //Hide Sidebar
  $('.open-sidebar-menu').toggleClass("active"); //Put Active Class in phone menu sidebar toggle
  $('html').toggleClass("body-no-scroll"); //Remove scrolling
  $('.insert-backdrop').toggleClass("modal-backdrop show"); //Add backdrop to darken the rest of website
  $('.sidebar-toggle > .phone-menu-icon > svg').toggleClass("fa-times"); //Switch toggle menu icon to X
  $('.sidebar-toggle > .phone-menu-icon > svg').toggleClass("fa-bars"); //Switch toggle menu icon to X

  $('.sidebar-toggle > .phone-menu-icon > .phone-menu-text').toggleText('Menu', 'Close'); //Switch toggle menu text
}
</script>
 
    <?php #include $_SERVER['DOCUMENT_ROOT'].'/templates/rating/rating-home.php'; ?>
  </body>

</html>