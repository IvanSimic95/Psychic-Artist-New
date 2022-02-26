<?php debug_backtrace() || include $_SERVER['DOCUMENT_ROOT'].'/templates/error/403.php'; ?>

<?php // include $_SERVER['DOCUMENT_ROOT'].'/templates/chat.php'; ?>
<?php // include $_SERVER['DOCUMENT_ROOT'].'/templates/bublbes.php'; ?>
</main>

<footer class="footer bg-dark pt-1">

      <section class="p-3 p-md-4 p-lg-5">
        <div class="container">
        
          <div class="row">
            <div class="col-lg-4">
              <div data-v-5c7d699b="" class="logo-footer"><?php include $_SERVER['DOCUMENT_ROOT'].'/templates/logo.php'; ?></div>
              <p class="text-white">Born psychic with an extrasensory perception capable of uniting with your energy and reading the hidden meanings and upcoming events predestined by the Universe. In the process, I will find out a lot about your soulmate, good and bad, his nature, his inner willingness to finally meet you.</p>
              
            </div>
            <div class="col ps-lg-6 ps-xl-8">
              <div class="row mt-5 mt-lg-0">
                <div class="col-6 col-md-4">
                  <p class="h5 text-uppercase text-white opacity-85 mb-3">Quick Links</p>
                  <ul class="list-unstyled">
                    <li class="mb-1"><a class="link-white" href="/"><i class="fas fa-home"></i> Home</a></li>
                    <li class="mb-1"><a class="link-white" href="/shop"><i class="fas fa-shopping-basket"></i> Shop</a></li>
                    <li class="mb-1"><a class="link-white" href="/support/faq"><i class="fas fa-question-circle"></i> FAQ</a></li>
                    <li class="mb-1"><a class="link-white" href="/support/contact"><i class="fas fa-life-ring"></i> Contact Us</a></li>
                    <li class="mb-1"><a class="link-white" href="/dashboard"><i class="fas fa-shipping-fast"></i> Order Status</a></li>
                    
                    
                  </ul>
                </div>
                <div class="col-6 col-md-4">
                  <p class="h5 text-uppercase text-white opacity-85 mb-3">Legal</p>
                  <ul class="list-unstyled">
                  <li class="mb-1"><a class="link-white" href="/legal/terms-of-service"><i class="fa fa-gavel"></i> Terms of Service</a>
                  <li class="mb-1"><a class="link-white" href="/legal/privacy-policy"><i class="fa fa-gavel"></i> Privacy Policy</a>
                  <li class="mb-1"><a class="link-white" href="/legal/dmca"><i class="fa fa-gavel"></i> DMCA</a>
                  <li class="mb-1"><a class="link-white" href="/legal/refund-policy"><i class="fa fa-gavel"></i> Refund Policy</a>
                  <li class="mb-1"><a class="link-white" href="/legal/facebook-policy"><i class="fa fa-gavel"></i> Facebook Policy</a>
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
              <div class="col-12 col-md-6 text-center text-md-start">
                <p class="mb-0 text-white opacity-85">© 2022 Psychic Artist All Rights Reserved</p>
              </div>
              <div class="col-12 col-md-6 text-end d-none	d-sm-none d-md-block">
                <p class="mb-0 text-white opacity-85">v<?php echo $webVersion; ?></p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section>
               
          </footer>              
    <!-- ===============================================-->
    <!--   Footer JavaScripts-->
    <!-- ===============================================-->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script defer="defer" src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/min/g=js"></script>
    <script defer="defer" src="/min/g=js2"></script>
    <script defer="defer" src="/min/g=fa-js"></script>
    <script src="/assets/js/new-menu.js"></script>

    <!-- ===============================================-->
    <!--   Elfsight jQuery Plugins -->
    <!-- ===============================================-->
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>

    <!--  Visitor Stats Widget -->
    <!--<div class="elfsight-app-e5581c30-8361-43d6-9323-37dd59142295"></div>-->

    <!-- ===============================================-->
    <!--   CrowdPower Script -->
    <!-- ===============================================-->
    <cp-root></cp-root>
    <script>
    window.cp=window.cp||function(){(cp.q=cp.q||[]).push(arguments)};
    window.cp('init', 'pk_2782ef32aba51e64d37df414a584e1ac15b1208be90e64395948c6a3f079255c');
    </script>
    <script src="https://tag.crowdpower.io/js/app.js"></script>
    


    <!-- ===============================================-->
    <!--   Custom Page JavaScripts & CSS -->
    <!-- ===============================================-->
    <?php echo $customJS; ?>

    <!-- ===============================================-->
    <!--   General Custom JS Scripts & Functions -->
    <!-- ===============================================-->
    <script>
    
    $(document).ready(function($) {
      var preloader = $('.preloader');
      preloader.addClass('loader-activate');
    });
      $(window).on('load', function(){
        window.cp('push');
      $('.preloader').fadeOut();
      $('.preloader').removeClass('loader-activate');
      $('.preloader').addClass('loader-deactivate');
    });
    </script>

<?php echo $CrowdPowerLogin; ?>
    
<?php #include $_SERVER['DOCUMENT_ROOT'].'/templates/rating/rating-home.php'; ?>
</body>
</html>