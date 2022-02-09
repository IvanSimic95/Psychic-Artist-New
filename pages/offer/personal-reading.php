<?php
include $_SERVER['DOCUMENT_ROOT'].'/templates/noskip.php';

$title = "Special Offer! Personal Psychic Reading! "; 
$title2 = "YOU UNLOCKED A SPECIAL SERVICE!";
$sdescription = "Customize your order";
$description = "Hey ".$_SESSION['orderFName']."! Here's an exclusive offer to complement your order!";
?>
<div class="container-fluid" data-layout="container" style="padding:0!important;padding-top:20px!important;">
    <section class="py-0 light" id="banner">
        <div class="container p-0 p-xl-4">


<div class="card mb-3 col-12 offset-0 col-xl-8 offset-xl-2">
            <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(/assets/img/icons/spot-illustrations/corner-4.png);"></div>
            <!--/.bg-holder-->
            <div class="card-header bg-light rounded-3" style="text-align:center;">
            <h3 class="gradient mb-0"><?php echo $title2; ?></h3>
                </div>
            <div class="card-body position-relative p-2 p-xl-3" style="text-align:center;">
              <div class="row">
                <div class="col-lg-12">
                
                  
               

                  <div class="progress mt-3 col-12 offset-0 col-xl-10 offset-xl-1 mb-3" style="height: 40px; max-width:100%;margin:0 auto;">
                            <div class="progress-bar bg-warning progress-bar-striped fw-bold fs-1 progress-bar-animated" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" title="Step 2">Step 2 of 3</div>
                        </div>

                        <div class="alert alert-info border-2 d-flex align-items-center col-12 offset-0 col-xl-10 offset-xl-1" role="alert">
                    <div class="bg-info me-3 icon-item"><span class="fas fa-info-circle text-white fs-3"></span></div>
                    <p class="mb-0 flex-1" style="font-weight:600;"><?php echo $description; ?></p>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
       
            <div class="col-12 offset-0 col-xl-8 offset-xl-2">
              <div class="card mb-3">
                <div class="card-header bg-light" style="text-align:center;">
                <h3 class="gradient  mb-0">PERSONAL PSYCHIC READING </h3>
                </div>
                  <div class="card-body col-12 offset-0 col-xl-10 offset-xl-1" style="text-align:center;">
                  <img class="img-fluid rounded img-thumbnail" src="/assets/img/psychic.jpg" alt="upsell">

                  <form class="readings" action="/order/order-reading" method="get" style="text-align:left;">
 
      <ul class="list-group list-group-flush">
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input" id="general" name="general" value="general" checked="">
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">General Reading</span>
		      </label>
					</li>
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input" id="love" name="love" value="love">
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">Love Reading</span>
		      </label>
					</li>
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input" id="career" name="career" value="career">
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">Career Reading</span>
		      </label>
					</li>
          <li class="list-group-control">
					<label class="custom-control fill-checkbox">
			    <input type="checkbox" class="fill-control-input" id="health" name="health" value="health">
			    <span class="fill-control-indicator"></span>
			    <span class="fill-control-description">Health Reading</span>
		      </label>
					</li>
          
				</ul>
        <input class="cookie" type="hidden" name="cookie_id" value="<?php echo $_SESSION['user_cookie_id']; ?>">
        <input class="cookie" type="hidden" name="landingpage" value="PersonalUpsell#1">

      <div class="meta_part">

       
       
          <div class="gradient mt-3 mb-3">Woudn't it be great to just know the truth instead of cunsumming yourself with constant thoughts?</div>
          <button class="btn btn-primary btn-shadow w-100 btn-add-to-cart mb-2 mt-2 fw-bold fs-1" style="display:block;" type="submit" name="form_submit">
          <i class="fa fa-basket-shopping"></i> Purchase - <span class="updated-price">$19.99</span>
          </button>

      
      </div>
     
      <a href="/order/order-reading?skip=yes">
      <div class="nothanks w-100 rounded-3">No, Thanks!</div>
      </a>

      </form>
                 
                  </div>
              </div>
            </div>
        
      
          </div>
          
          </div>
    </section>
</div>

<?php
$customCSSPreload = '<link rel="preload" href="/assets/css/readings.css" as="style">';
$customCSS = '<link href="/assets/css/readings.css" rel="stylesheet">';
$customJS = <<<EOT
<script>
      var checkboxes = $('.list-group-control input[type="checkbox"]');

      checkboxes.change(function() {
        var boxes = $('input:checked');
        var countCheckedCheckboxes = boxes.length;
        if (countCheckedCheckboxes == 1) {
          $('.updated-price').text('$19.99');
          $('.btn-add-to-cart').prop("disabled", false);
        }
        if (countCheckedCheckboxes == 2) {
          $('.updated-price').text('$29.99');
          $('.btn-add-to-cart').prop("disabled", false);
        }
        if (countCheckedCheckboxes == 3) {
          $('.updated-price').text('$39.99');
          $('.btn-add-to-cart').prop("disabled", false);
        }
        if (countCheckedCheckboxes == 4) {
          $('.updated-price').text('$49.99');
          $('.btn-add-to-cart').prop("disabled", false);
        }
        if (countCheckedCheckboxes == 0) {
            $('.updated-price').text('$0.00');
          $('.btn-add-to-cart').prop("disabled", true);
        }
      });
    </script>
EOT;
?>