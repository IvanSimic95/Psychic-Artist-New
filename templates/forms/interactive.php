<div id="form-progressbar" class="mb-2"></div>
<form class="form-order row g-0 flex-grow-2" name="order_form" action="/order/order" method="get" novalidate>
<div id="form-type-wrapper" class="alert alert-info mb-0" role="alert" style="min-height:100px;">
<span class="type-it-zero" style="min-height:200px;"></span>

<div id="welcome-form-msg">
<span class="type-it"></span>
</div>

<div id="dob-form-msg">
<span class="type-it-two"></span>
</div>

<div id="delivery-form-msg">
<span class="type-it-three"></span>
</div>

</div>
<button type="button" id="start-form-btn" class="btn btn-primary btn-shadow w-100 btn-add-to-cart mb-2 mt-2 fw-bold fs-1"> <?php echo $button; ?> </button>


<div id="final-form-msg">
<span class="type-it-four"></span>
</div>











    <div class="mb-2 mt-2 userNameWrapper">
       
        <div class="form-floating form-floating-icon mb-2">
        <input class="form-control" id="userName" type="text" name="userName" placeholder="Your Full Name" required value="<?php if(isset($_SESSION['name']))echo $_SESSION['name']; ?>"/>
        <span class="icon-inside"><i class="fas fa-user"></i></span>
        <label for="userName">Your Full Name</label>
        </div>
        <div class="form-floating form-floating-icon mb-2">
        <input class="form-control" id="userEmail" type="email" name="userEmail" placeholder="email@gmail.com" required value="<?php if(isset($_SESSION['email']))echo $_SESSION['email']; ?>"/>
        <span class="icon-inside"><i class="fas fa-envelope"></i></span>
        <label for="userEmail">Your E-mail</label>
        </div>
        <div id="error" class="mb-2"></div>
        <div id="errorEmail" class="mb-2"></div>
    </div>
    <button type="button" id="name-confirm-btn" class="btn btn-primary btn-shadow w-100 btn-add-to-cart mb-2 mt-2 fw-bold fs-1" <?php if(!isset($_SESSION['email'])){ ?>disabled<?php } ?>> Confirm!</button>

    <div class="mb-2 mt-2 userDobWrapper">
        <?php if($formDate == "US"){ ?>
        <input class="form-control" id="userDobUS" name="userDobUS" placeholder="MM/DD/YYYY" inputmode="numeric" pattern="[0-9]*" type="text" required value="<?php if(isset($_SESSION['dobUS']))echo $_SESSION['dobUS']; ?>"/>
        <div id="errorDobUS" class="mb-2"></div>
        <?php }else{ ?>
        <input class="form-control " id="userDob" name="userDob" placeholder="DD-MM-YYYY" inputmode="numeric" pattern="[0-9]*" type="text" required value="<?php if(isset($_SESSION['dob']))echo $_SESSION['dob']; ?>"/>
        <div id="errorDob" class="mb-2"></div>
        <?php } ?>
        

    </div>
    <button type="button" id="dob-confirm-btn" class="btn btn-primary btn-shadow w-100 btn-add-to-cart mb-2 mt-2 fw-bold fs-1" <?php if(!isset($_SESSION['dob'])){ ?>disabled<?php } ?>> Confirm!</button>


    <div class="mb-2 mt-2 userDeliveryWrapper">
    <div class="position-relative">
        <label class="fs-1 fw-bold">Delivery Priority </label> 
        <div class="product-badge product-available mt-n1 dropdown-toggle" data-bs-toggle="collapse" href="#deliveryCollapse" role="button" aria-expanded="false" aria-controls="deliveryCollapse">
            <i class="fas fa-question-circle"></i> Delivery Options
        </div>
    </div>


<div id="delivery-speed" class="delivery-speed-clicked">
    <div class="btn-group d-flex delivery-speed-flex" style="width:100%;" role="group" aria-label="Delivery Speed">
    
    <div class="mb-111">
    <input type="radio" class="btn-check" name="priority" id="prio12" value="12">
    <label class="btn btn-outline-oran prio12" for="prio12"><span><i class="fas fa-bolt"></i> Express</span></label>
    </div>

    <div class="mb-111">
    <input type="radio" class="btn-check" name="priority" id="prio24" value="24">
    <label class="btn btn-outline-oran prio24" for="prio24"><span><i class="fas fa-stopwatch"></i> Fast</span></label>
    </div>

    <div class="mb-111">
    <input type="radio" class="btn-check" name="priority" id="prio48" value="48" checked>
    <label class="btn btn-outline-oran prio48" for="prio48"><span><i class="fas fa-clock"></i> Standard</span></label>
    </div>
</div>

        <div class="col-sm-12">
            <div class="collapse multi-collapse mb-3 mb-sm-0" id="deliveryCollapse">
                <div class="accordion mb-4" id="productPanels">
                    <div class="accordion-item">
                        <div class="accordion-header bg-light p-3">
                        <div class="d-flex flex-between-center">
                        <h3 class="mb-0 fw-bold fs-1"><i class="fas fa-shipping-fast" style="margin-right:15px;margin-left:20px;font-size:130%;"></i> Delivery Options </h3>
                        <a id="close-deliveryCollapse" class="btn btn-link btn-sm px-2" href="#!"><span class="fas fa-times" style="font-size: 200%!important;color: #000;"></span></a>
                        </div>
                           
                        </div>
                        <div class="accordion-collapse collapse show" id="shippingOptions" data-bs-parent="#productPanels">
                            <div class="accordion-body fs-sm">
                                <div id="helper-delivery-express" class="d-flex justify-content-start border-bottom pb-2 align-items-center" style="cursor:pointer;">
                                    <div class="px-3"><i class="fas fa-clock" style="font-size:180%;font-weight:bold;color: #fe696a;"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Express Delivery</div>
                                        <div class="fs-sm text-muted">8 - 12 Hours</div>
                                    </div>
                                    <div class="fs-1 fw-bold badge bg-success">$14.99</div>
                                </div>


                                <div id="helper-delivery-fast" class="d-flex justify-content-start border-bottom py-2 align-items-center" style="cursor:pointer;">
                                <div class="px-3"><i class="fas fa-stopwatch" style="font-size:180%;font-weight:bold;color: #fe696a;"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Fast Delivery</div>
                                        <div class="fs-sm text-muted">18 - 24 Hours</div>
                                    </div>
                                    <div class="fs-1 fw-bold badge bg-success">$9.99</div>
                                </div>


                                <div id="helper-delivery-standard" class="d-flex justify-content-start pt-2 align-items-center" style="cursor:pointer;">
                                <div class="px-3"><i class="fas fa-bolt" style="font-size:180%;font-weight:bold;color: #fe696a;"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Standard Delivery</div>
                                        <div class="fs-sm text-muted">36 - 48 Hours</div>
                                    </div>
                                    <div class="fs-1 fw-bold badge bg-success">$0.00</div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

    </div>
    <input class="product" type="hidden" name="product" value="<?php echo $productID; ?>">
    <input class="cookie" type="hidden" name="cookie_id" value="<?php echo $_SESSION['cookie']; ?>">
    <input class="formused" type="hidden" name="formused" value="normal">
    <input class="btncolor" type="hidden" name="btncolor" value="<?php echo $btncolor; ?>">
    <input class="countdown" type="hidden" name="countdown" value="<?php echo $countdownRandom; ?>">
    <input class="landingpage" type="hidden" name="landingpage" value="LP1">
    <div class="mb-1 mt-1"> <input type="submit" name="form_submit" class="btn btn-submit-form btn-primary btn-shadow w-100 btn-add-to-cart mb-1 mt-1 fw-bold fs-1" value="Place an order"></div>



</form>
<?php
$customJSPreload = '
<link rel="preload" href="/assets/js/form-interactive.js" as="script">
<link rel="preload" href="/assets/js/verimail.jquery.min.js" as="script">
';
$customCSS = '<link href="/assets/css/form-interactive.css" rel="stylesheet">
<link href="/assets/css/lightslider.css" rel="stylesheet">';
$customJS = <<<EOT
<script src="/assets/js/verimail.jquery.min.js"></script>
<script defer="defer" src="/assets/js/form-interactive.js"></script>
<script src='/assets/js/lightslider.js'></script>
<script>

$(document).ready(function(){
    fbq('track', 'ViewContent', {
        content_name: '$shorttitle Drawing', 
        content_ids: ['$retailer'],
        content_type: 'product',
        value: $price,
        currency: 'USD' 
     });       
    
    var button = document.getElementById('start-form-btn');
    button.addEventListener(
      'click', 
      function() {
         fbq('track', 'AddToCart', {
           content_name: '$shorttitle Drawing', 
           content_ids: ['$retailer'],
           content_type: 'product',
           value: $price,
           currency: 'USD' 
        });          
      },
    false
    );

var width = $(window).width();

if(width < 750) {
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 500) {
            $('#phone-navbar').slideDown();
            $('.eapps-form-floating-button').slideUp();
        
        } else {
            $('#phone-navbar').slideUp();
            $('.eapps-form-floating-button').slideDown();
    
        }
      });
  }
$('#phone-navbar > .nav-link').click(function(){    
    var divId = $(this).attr('href');
     $('html, body').animate({
      scrollTop: $(divId).offset().top + 0
    }, 100);
  });

  


const instance0 =  new TypeIt(".type-it-zero", {
strings: ["<span class='fw-bold'>$subtitle<\/span><br>", "Psychic Artist (通灵艺术家) is a master of astrology famous in China for being able to draw anyone's soulmate. Thousands of people have found love thanks to Artist's gift.<br>", "Answer just a few simple questions and Psychic Artist will draw you a picture of your $shorttitle"],
waitUntilVisible: true,
lifeLike: true,
loop: false,
html: true,
breakLines: true,
speed: 5, 
afterComplete: function (instance) {
instance.destroy();
$("#start-form-btn").slideToggle();
}
})

instance0.go();
});


$(window).on("load", function() {
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 6,
      controls:true,
     
    });
  })
</script>
EOT;
?>