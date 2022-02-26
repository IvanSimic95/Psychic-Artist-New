<div id="form-progressbar" class=""></div>
<form id="normalproduct" class="form-order needs-validation display-block" name="order_form" action="/order/order" method="get">


        <div class="form-floating form-floating-icon mb-2">
        <input class="form-control" id="userName" type="text" name="userName" placeholder="Your Full Name" required="" value="<?php echo $_SESSION['name']; ?>">
        <span class="icon-inside"><i class="fas fa-user"></i> </span>
        <label for="userName">First & Last Name</label>
        </div>
        
        
       
        

        <div class="form-floating mb-2 form-floating-icon mb-3">
        <?php if($formDate == "US"){ ?>
        <input class="form-control" id="userDobUS" name="userDobUS" placeholder="MM/DD/YYYY" required value="<?php echo $_SESSION['dobUS']; ?>"/>
        <span class="icon-inside"><i class="fa fa-clock"></i> </span>
        <label for="userDobUS">Date of Birth</label>
        <?php }else{ ?>
        <input class="form-control " id="userDob" name="userDob" placeholder="DD-MM-YYYY" required value="<?php echo $_SESSION['dob']; ?>"/>
        <span class="icon-inside"><i class="fa fa-clock"></i> </span>
        <label for="userDob">Date of Birth</label>
        <?php } ?>
        </div>


  <hr class="mb-3">

        <div class="form-floating form-floating-icon">
        <input class="form-control" id="userEmail" type="email" name="userEmail" placeholder="email@gmail.com" required="" value="<?php echo $_SESSION['email']; ?>">
        <span class="icon-inside"><i class="fas fa-envelope"></i> </span>
        <label for="userEmail">E-mail Address</label>
        </div>


        <hr class="mb-3">

        <div class="mb-2 mt-2 userDeliveryWrapper" style="display:block;">
    <div class="position-relative">
        <label class="fs-1 fw-semi-bold">Delivery Priority </label> 
        <div class="product-badge product-available delivery-options mt-n1 dropdown-toggle" data-bs-toggle="collapse" href="#deliveryCollapse" role="button" aria-expanded="false" aria-controls="deliveryCollapse">
            <i class="fas fa-question-circle"></i><span class="delivery-full-text">Delivery Options</span> <span class="delivery-partial-text">Options</span>
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
    </div></div>
</div>


      
            <div class="collapse multi-collapse mb-3 mb-sm-0 show" id="deliveryCollapse">
                <div class="accordion mb-4" id="productPanels">
                    <div class="accordion-item">
                        <div class="accordion-header bg-light">
                        <div class="d-flex flex-between-center">
                        <h3 class="mb-0 fw-bold delivery-title"><i class="fas fa-shipping-fast" style="margin-right:15px;margin-left:20px;font-size:120%;"></i> <span class="title-text">Delivery Options</span> </h3>
                        <a id="close-deliveryCollapse" class="btn btn-link btn-sm px-2" href="#!"><span class="fas fa-times" style="font-size: 200%!important;color: #000;"></span></a>
                        </div>
                           
                        </div>
                        <div class="accordion-collapse collapse show" id="shippingOptions" data-bs-parent="#productPanels">
                            <div class="accordion-body fs-sm">
                                <div id="helper-delivery-express" class="d-flex justify-content-start border-bottom pb-2 align-items-center" style="cursor:pointer;">
                                    <div class="px-3"><i class="fas fa-bolt"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Express <span class="delivery">Delivery</span></div>
                                        <div class="fs-sm text-muted">8 - 12 <span class="hours">Hours</span><span class="h">H</span></div>
                                    </div>
                                    <div class="fw-bold badge bg-success">$14.99</div>
                                </div>


                                <div id="helper-delivery-fast" class="d-flex justify-content-start border-bottom py-2 align-items-center" style="cursor:pointer;">
                                <div class="px-3"><i class="fas fa-stopwatch"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Fast <span class="delivery">Delivery</span></div>
                                        <div class="fs-sm text-muted">18 - 24 <span class="hours">Hours</span><span class="h">H</span></div>
                                    </div>
                                    <div class="fw-bold badge bg-success">$9.99</div>
                                </div>


                                <div id="helper-delivery-standard" class="d-flex justify-content-start pt-2 align-items-center" style="cursor:pointer;">
                                <div class="px-3"><i class="fas fa-clock"></i></div>
                                <div class="flex-grow-1">
                                        <div class="fw-bold text-dark">Standard <span class="delivery">Delivery</span></div>
                                        <div class="fs-sm text-muted">36 - 48 <span class="hours">Hours</span><span class="h">H</span></div>
                                    </div>
                                    <div class="fw-bold badge bg-success">$0.00</div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mb-3">

<div class="error-container">
<ol>
</ol>
</div>



    <input class="product" type="hidden" name="product" value="<?php echo $productID; ?>">
    <input class="cookie" type="hidden" name="cookie_id" value="<?php echo $_SESSION['cookie']; ?>">
    <input class="formused" type="hidden" name="formused" value="normal">
    <input class="countdown" type="hidden" name="countdown" value="<?php echo $countdownRandom; ?>">
    <input class="landingpage" type="hidden" name="landingpage" value="LP1">
    <div class="mb-2 mt-3"> <input type="submit" name="form_submit" class="btn btn-submit-form btn-primary btn-shadow w-100 btn-add-to-cart mb-1 mt-1 fw-bold fs-1" value="Place an order"></div>



</form>
<?php
if($formDate == "US"){
  $dobfield = "userDobUS";
  $dobmsg = "Make sure to enter your Date in MM/DD/YYYY Format!";
  $validDob = "validDOBus";
}else{ 
  $dobfield = "userDob";
  $dobmsg = "Make sure to enter your Date in DD-MM-YYYY Format!";
  $validDob = "validDOB";
} 
$customJSPreload = '
<link rel="preload" href="/assets/js/form-normal.js" as="script">
<link rel="preload" href="/assets/js/jquery.validate.min.js" as="script">
';
$customCSS = '<link href="/assets/css/form-normal.css" rel="stylesheet">
<link href="/assets/css/lightslider.css" rel="stylesheet">';
$customJS = <<<EOT
<script src="/assets/js/jquery.validate.min.js"></script>
<script defer="defer" src="/assets/js/form-normal.js"></script>
<script src='/assets/js/lightslider.js'></script>
<script>
var econtainer = $(".error-container");

$(document).ready(function(){
$('#userDobUS').mask('00/00/0000');
$('#userDob').mask('00-00-0000');

jQuery.validator.addMethod("validDOBus", function(value) {
    var parts = value.split(/[\/\-\.]/);

    var pmonth = parts[0];
    var pday   = parts[1];
    var pyear  = parts[2];
    
    if (parts.length < 3) {
      return false;
      console.log("invalid format");
    }


  if (pmonth < 1 || pmonth > 12){
    console.log("invalid format");
    return false;
    

  }else if (pday < 1 || pday > 31){
    console.log("day lower than 1 or higher than 31");
    return false;
    
    
  }else if ((pmonth == 4 || pmonth == 6 || pmonth == 9 || pmonth == 11) && pday == 31){
    console.log("there aren't 31 days in selected month");
    return false;
    
  }else if (pmonth == 2) {
    var isleap = (pyear % 4 == 0 && (pyear % 100 != 0 || pyear % 400 == 0));

    if (pday > 29 || (pday == 29 && !isleap)){
    console.log("leap year, that day doesn't exist in february");
    return false;
    }


  }else if (pyear < 1900 || pyear > 2010){
    console.log("too old or too young");
    return false;

  }else{
    console.log("all good");
    return true;
  }


}, "$dobmsg");


jQuery.validator.addMethod("validDOB", function(value) {
  var parts = value.split(/[\/\-\.]/);

 
  var pday   = parts[0];
  var pmonth = parts[1];
  var pyear  = parts[2];
  
  if (parts.length < 3) {
    return false;
    console.log("invalid format");
  }


if (pmonth < 1 || pmonth > 12){
  console.log("invalid format");
  return false;
  

}else if (pday < 1 || pday > 31){
  console.log("day lower than 1 or higher than 31");
  return false;
  
  
}else if ((pmonth == 4 || pmonth == 6 || pmonth == 9 || pmonth == 11) && pday == 31){
  console.log("there aren't 31 days in selected month");
  return false;
  
}else if (pmonth == 2) {
  var isleap = (pyear % 4 == 0 && (pyear % 100 != 0 || pyear % 400 == 0));

  if (pday > 29 || (pday == 29 && !isleap)){
  console.log("leap year, that day doesn't exist in february");
  return false;
  }


}else if (pyear < 1900 || pyear > 2010){
  console.log("too old or too young");
  return false;

}else{
  console.log("all good");
  return true;
}

   
}, "$dobmsg");



   $("#normalproduct").validate({
    submitHandler: function(form){
    form.submit();
    },

    rules: {
      userName: "required",

      userEmail: {
      required: true,
      email: true
      },

      $dobfield: {
        $validDob: "$dobmsg",
        }

    },
    messages: {
      userName: "Please enter your First & Last name!",

      userEmail: {
        required: "Please enter your email address!",
      },

      $dobfield: {
        required: "Please enter your Date of Birth!",
        $validDob: "$dobmsg",
      }
    },
  
    errorContainer: $(".error-container"),
		errorLabelContainer: $("ol", econtainer),
		wrapper: 'li'
  } );

var width = $(window).width();

if(width < 750) {
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 500) {
            $('#phone-navbar').slideDown();
        
        } else {
            $('#phone-navbar').slideUp();
    
        }
      });
  }
$('.nav-link').click(function(){    
    var divId = $(this).attr('href');
     $('html, body').animate({
      scrollTop: $(divId).offset().top + 0
    }, 100);
  });

  
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