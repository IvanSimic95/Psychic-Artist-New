<?php
include $_SERVER['DOCUMENT_ROOT'].'/templates/noskip.php';

$title = "Order complete! | Psychic Artist"; 
$sdescription = "You can now proceed to your user dashboard by clicking the button below!";
?>
<style>
.breadcrumbs-nav{
display:none!important;
}
</style>
<div class="container-fluid" data-layout="container" style="padding:0!important;padding-top:20px!important;">
    <section class="py-0 light" id="banner">
        <div class="container p-0 p-xl-4">

          <div class="row g-0">
       
            <div class="col-12 offset-0 col-xl-8 offset-xl-2">
              <div class="card mb-3">
                <div class="card-header bg-light" style="text-align:center;">
                <h3 class="gradient  mb-0">Order complete! </h3>
                </div>
                  <div class="card-body col-12 offset-0 col-xl-10 offset-xl-1 mt-4" style="text-align:center; min-height:35vh;">
                You can now proceed to your user dashboard by clicking the button below!
                <a href="/dashboard?login=yes&check_email=<?php echo $_SESSION['orderEmail']; ?>" class="btn btn-dark text-uppercase w-100 mt-6">Sign in!</a>
                 
                  </div>
              </div>
            </div>
        
      
          </div>
          
          </div>
    </section>
</div>

<?php
//$customCSSPreload = '<link rel="preload" href="/assets/css/baby.css" as="style">';
//$customCSS = '<link href="/assets/css/baby.css" rel="stylesheet">';
//$customJS = <<<EOT
//EOT;
?>