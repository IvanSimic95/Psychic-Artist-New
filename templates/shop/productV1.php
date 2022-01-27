<?php
/*
$title          = $v['p'.$productID.'-title'];
$shorttitle     = $v['p'.$productID.'-short-title'];
$subtitle       = $v['p'.$productID.'-subtitle'];
$description    = $v['p'.$productID.'-description'];
$sdescription   = $v['p'.$productID.'-short-description'];
$image          = $v['p'.$productID.'-image'];
$price          = $v['p'.$productID.'-price'];
$reviews        = $v['p'.$productID.'-reviews'];
$avgrating      = $v['p'.$productID.'-avg-rating'];
$url            = $v['p'.$productID.'-url'];
$button         = $v['p'.$productID.'-button'];
$pimage = $image;
include $_SERVER['DOCUMENT_ROOT'].'/templates/schema.php'; 
*/



$sql = "SELECT * FROM products WHERE id = '".$productID."'";
$result = $conn->query($sql);
$row = $result -> fetch_array(MYSQLI_NUM);


$title          = $row[1];
$shorttitle     = $row[2];
$subtitle       = $row[3];
$description    = $row[4];
$sdescription   = $row[5];
$image          = $row[6];
$price          = $row[7];
$url            = $row[8];
$button         = $row[9];

include $_SERVER['DOCUMENT_ROOT'].'/templates/rating/rating-total.php'; 

$reviews        = $count;
$avgrating      = $avg;

$pimage = $image;
include $_SERVER['DOCUMENT_ROOT'].'/templates/schema.php'; 


?>

<div class="container product-container container-bg" data-layout="container">

    <section class="py-4 light" id="banner">
        <!-- PRODUCT START -->
        <div class="card mb-3 rounded-3">
            <div class="card-body rounded-3" style="padding:0!important;">
                <div class="row row ms-auto w-100">
                    <!-- Content-->
                    <div class="col-lg-6 mb-4 mb-lg-0 p-0 p-md-2 p-lg-4">
                        
                            <!-- Product Gallery -->
                            <img class="rounded-3" src="/assets/img/products/soulmate-1.jpg" style="width:100%;">
                            <!-- END Product Gallery -->
                        
                    </div>
                    <!-- Sidebar-->
                    <div class="col-lg-6 border-start rounded-3 px-3 px-md-4 px-lg-4 py-3 position-relative">

                    <div class="d-flex flex-column justify-content-start flex-fill">
                                

                                <h1 class="mb-0 product-title text-grad-1 mt-2"><?php echo $title; ?></h1>
                                <div class="under-title"><a href="#reviews">
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <span class="fa fa-star"></span>
                                  <?php if($avgrating < 4.51){ ?>
                                  <span class="fa fa-star-half"></span>
                                  <?php } else { ?>
                                  <span class="fa fa-star"></span>
                                  <?php } ?>
                                  
                                  (<?php echo $reviews; ?>) </a></div>
                                <hr class="m-2">
                                <h2 class="d-flex flex-row flex-wrap align-items-center position-relative">
                                    <span class="badge me-0 new_prce" style="background: #FF4F81;color:#fff;">$<?php echo $price; ?></span>
                                    <span class="me-1 fs--1 text-500 old_price"><del class="me-1">$<?php echo $price * 10; ?></del></span>
                                    <div class="price-side">
                                     You save: <span class="saveda text-success">$<?php echo round($price * 9); ?> </span>(90%)<span class="product-loop-down-arrow-wrap d-inline-block"></span> </div>
                                </h2>

                                <?php  include $_SERVER['DOCUMENT_ROOT'].'/templates/form.php'; ?>

                                <hr> <?php  include $_SERVER['DOCUMENT_ROOT'].'/templates/badges.php'; ?>
                                <?php  //include $_SERVER['DOCUMENT_ROOT'].'/templates/product-discounts.php'; ?>

                    </div>

                    </div>
                    <!-- END SIDEBAR -->
                </div>
            </div>
        </div>
        <!-- PRODUCT END -->
        <!-- DESCRIPTION START -->
        <div class="card mb-3 p-0">
            <div class="card-header bg-light py-3">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1"> Description </h3>
                </div>
            </div>
            <div class="card-body px-3 px-md-4 px-lg-4 py-3">
                
                <?php echo $description; ?>
             
            </div>
        </div>
        <!-- DESCRIPTION END -->
        <!-- Review List START -->
        <div class="card mb-3 p-0" id="reviews">
            <div class="card-header bg-light py-3">
                <div class="d-flex flex-between-center">
                    <h3 class="mb-0 fw-semibold fs-1"> Reviews - <?php echo $reviews; ?> </h3>
                </div>
            </div>
            <div class="card-body p-2">
               <?php include("templates/rating/rating-product.php"); ?>
            </div>
        </div>
        <!-- Review List END -->
    </section>
</div>

<?php

$customJS = <<<EOT
<script src="/vendors/countup/countUp.umd.js"></script>
<script src="/assets/js/lazyload.js"></script>
<script src="/assets/js/jquery.mask.js"></script>
<script src="/assets/js/jquery.star-rating-svg.js"></script>
<script src="https://unpkg.com/@webcreate/infinite-ajax-scroll/dist/infinite-ajax-scroll.min.js"></script>
<script>
$(".my-rating1").starRating({
    starSize: 30,
    strokeWidth: 9,
    readOnly: true,
    strokeColor: 'black',
    initialRating: '$avgrating',
    starGradient: {
      start: '#d130eb',
      end: '#2b216c'
    }
  });
</script>

<script>
let ias = new InfiniteAjaxScroll('.contents', {
  item: '.item',
  next: '.next',
  pagination: '.pagination',
  trigger: '.load-more',
  logger: false
});

$(document).ready(function(){

    $("input#userEmail").verimail({
      messageElement: "#errorEmail"
  });
  
    const instance0 =  new TypeIt(".type-it-zero", {
      strings: ["<span class='fw-bold'>$subtitle</span><br>", "Psychic Artist (通灵艺术家) is a master of astrology famous in China for being able to draw anyone's soulmate. Thousands of people have found love thanks to Artist's gift.<br>", "Answer just a few simple questions and Psychic Artist will draw you a picture of your $shorttitle."],
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
  
    const instance =  new TypeIt(".type-it", {
      strings: ["<strong>Great!</strong> All you need to do now is answer 3 easy questions", "<hr>#1 - <b>What is your Name & Email?</b>"],
      waitUntilVisible: true,
      lifeLike: true,
      loop: false,
      html: true,
      breakLines: true,
      speed: 5,
      afterComplete: function (instance) {
        instance.destroy();
        $(".userNameWrapper").slideToggle();
        $("#name-confirm-btn").slideToggle();
  
      }
    })
  
  
    
  
  
  
  
  
  
  
  
    const instance3 =  new TypeIt(".type-it-three", {
      strings: ["<strong>Almost There</strong>, only 1 more step to go!", "<hr>#3 - <b>What Order Delivery Priority do you wish?</b>"],
      waitUntilVisible: true,
      lifeLike: true,
      loop: false,
      html: true,
      breakLines: true,
      speed: 5,
      afterComplete: function (instance) {
        instance.destroy();
        $(".userDeliveryWrapper").slideToggle();
        $('#deliveryCollapse').collapse('show');
   
      }
    })
  
    const instance4 =  new TypeIt(".type-it-four", {
      strings: ["<div class=\"alert alert-success mb-0\" role=\"alert\"><strong>Well Done!</strong> We saved your data & prepared an order for you.<hr> You can continue to payment page by clicking button below.</div>"],
      waitUntilVisible: true,
      lifeLike: true,
      loop: false,
      html: true,
      breakLines: true,
      speed: 5,
      afterComplete: function (instance) {
        instance.destroy();
  
      }
    })
  
    instance0.go();
  
  var scrollSpy = new bootstrap.ScrollSpy(document.body, {
      target: '#product-nav'
    })
  
    $("#start-form-btn").click(function(){
      $('.type-it-zero').fadeToggle();//Hide Start Message
      $('.pr-avail-wrap').fadeToggle();//Hide Side badge
      $("#start-form-btn").fadeToggle(); //Hide Start Button
      $("#welcome-form-msg").slideToggle();//Show Welcome message after starting Form
      instance.go(); //Start next part of text
      bar.animate(0.25); 
  
  
    });
  
    $(document).ready(function(){
      var regexname=/^([A-Za-z\s]{3,24})$/;
      $('#userName').on('keypress keydown keyup',function(){
               if (!$(this).val().match(regexname)) {
            // If username is too long
            $("#error").html("<div class='alert alert-danger border-2 d-flex align-items-center' role='alert'><p class='mb-0 flex-1'>Your name is invalid, make sure to use only letters and spaces!</p></div>");
            $("#userName").addClass("is-invalid");
            $("#userName").removeClass("is-valid");
            $("#name-confirm-btn").prop("disabled", true);
               }
             else{
  
              if($("#userEmail").getVerimailStatus() < 0){
                $("#name-confirm-btn").prop("disabled", true);
                $("#userEmail").removeClass("is-valid");
                $("#userEmail").addClass("is-invalid");
            }else{
              $("#name-confirm-btn").prop("disabled", false);
              $("#userEmail").addClass("is-valid");
              $("#userEmail").removeClass("is-invalid");
              
              
            }
  
            if($("#userEmail").val().length == 0)
            {
              $("#name-confirm-btn").prop("disabled", true);
              $("#userEmail").removeClass("is-valid");
              $("#userEmail").addClass("is-invalid");
            }else   {
  
  
            $("#name-confirm-btn").prop("disabled", false);
            $("#userEmail").removeClass("is-invalid");
            $("#userEmail").addClass("is-valid");
          }
  
          $("#name-confirm-btn").prop("disabled", false);
          $("#error").html("");
          $("#userName").addClass("is-valid");
          $("#userName").removeClass("is-invalid");
  
                 }
           });
  });
  
  $(document).ready(function(){
    $('#userEmail').on('keypress keydown keyup',function(){
  
      if($("#userEmail").getVerimailStatus() < 0){
        $("#name-confirm-btn").prop("disabled", true);
        $("#userEmail").removeClass("is-valid");
        $("#userEmail").addClass("is-invalid");
    }else{
      $("#name-confirm-btn").prop("disabled", false);
      $("#userEmail").removeClass("is-invalid");
      $("#userEmail").addClass("is-valid");
  }
  });
  
  });
  
  $("#name-confirm-btn").click(function(){
    
    
            const userName = $("#userName").val();
             const instance2 =  new TypeIt(".type-it-two", {
               strings: ["Nice to meet you <span style='text-transform:capitalize';>"+ userName + "</span>!", "<hr>#2 - <b>What is your Date of Birth?</b>"],
               waitUntilVisible: true,
               lifeLike: true,
               loop: false,
               html: true,
               breakLines: true,
               speed: 35,
               afterComplete: function (instance) {
                 instance.destroy();
                 $(".userDobWrapper").slideToggle();
                 $("#dob-confirm-btn").slideToggle();
                 
               }
             })
            
   $("#welcome-form-msg").fadeToggle();//Show Welcome message after starting Form
   $(".userNameWrapper").fadeToggle();//Show Welcome message after starting Form
   $("#name-confirm-btn").fadeToggle();//Show Welcome message after starting Form
  
    $("#dob-form-msg").slideToggle(); //Hide Start Button
    
    instance2.go(); //Start next part of text
    bar.animate(0.50); 
  
  });
    
    $('.show-offer').on('click', function(e) {
      $(".offer-sider").slideToggle();
      $(".more-offer").fadeToggle();
      $(".less-offer").fadeToggle();   
    });
  
  jQuery('input[name="priority"]').change(function(){
      if (this.value == '12') {
      jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$44.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price del').html('$449.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$400 (90%)').animate({'opacity': 1}, 400);});	
      }
      if (this.value == '24') {
          jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$39.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price del').html('$399.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$360 (90%)').animate({'opacity': 1}, 400);});
      }
      if (this.value == '48') {
          jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$29.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price del').html('$299.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$270 (90%)').animate({'opacity': 1}, 400);});
      }
  })
  
  $("#dob-confirm-btn").click(function(){
    
    $("#dob-form-msg").fadeToggle(); //Hide Start Button
    $("#dob-confirm-btn").fadeToggle(); //Hide Start Button
    $(".userDobWrapper").fadeToggle();
     $("#delivery-form-msg").slideToggle(); //Hide Start Button
     instance3.go(); //Start next part of text
     bar.animate(0.75); 
  });
  
  $("#helper-delivery-express").click(function(){
      $("#prio12").prop("checked", true);
      jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$44.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price del').html('$449.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$400 (90%)').animate({'opacity': 1}, 400);});	
  });
  
  $("#helper-delivery-fast").click(function(){
      $("#prio24").prop("checked", true);
      jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$39.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price del').html('$399.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$360 (90%)').animate({'opacity': 1}, 400);});
  });
  
  $("#helper-delivery-standard").click(function(){
      $("#prio48").prop("checked", true);
      jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$29.99').animate({'opacity': 1}, 200);});
          jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price del').html('$299.99').animate({'opacity': 1}, 300);});
          jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$270 (90%)').animate({'opacity': 1}, 400);});
  });
  
  
  $("#close-deliveryCollapse").click(function(){
    $('#deliveryCollapse').collapse('hide');
  });
  
  
  $(document).ready(function() {
    $('#delivery-speed').one('click', function(e){
      $('#deliveryCollapse').collapse('hide');
      $("#delivery-form-msg").fadeToggle();
      $("#form-type-wrapper").fadeToggle();
      $("#final-form-msg").slideToggle();
      $(".btn-submit-form").slideToggle();
      $(".btn-submit-form").addClass("add-to-cart-flash");
      bar.animate(1.0); 
      instance4.go();
  
    });
  });
  
  
  
  $('#userDobUS').mask('00/00/0000', {onComplete: function(cepUS) {
    
    var dateFrom = "01/01/1930";
    var dateTo = "12/31/2008";
    var dateCheck = cepUS;
    
    var d1 = dateFrom.split("/");
    var d2 = dateTo.split("/");
    var c = dateCheck.split("/");
    
    var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
    var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
    var check = new Date(c[2], parseInt(c[1])-1, c[0]);
    
    var final = check > from && check < to;
    if (final)
    {
        $("#errorDob").html("");
        $("#userDobUS").addClass("is-valid");
        $("#userDobUS").removeClass("is-invalid");
    
        var userval = $("#userName").hasClass("is-valid");
        var dateval = $("#userDobUS").hasClass("is-valid");
        if(userval && dateval){
            $(".form-order").addClass("is-validated");
            $(".form-order").removeClass("needs-validation");
        }
  
        $("#dob-confirm-btn").prop("disabled", false);
  
       
    }else{
        $("#errorDobUS").html("<div class='alert alert-danger border-2 d-flex align-items-center' role='alert'><p class='mb-0 flex-1'><b>Invalid Date:</b> Make sure to enter your Date in MM/DD/YYYY Format!</p></div>");  
        $("#userDobUS").addClass("is-invalid");
        $("#userDobUS").removeClass("is-valid");
        $("#dob-confirm-btn").prop("disabled", true);
    }
              },
               onKeyPress: function(cepUS, event, currentField, options){
                
              },
              onInvalid: function(val, e, field, invalid, options){
                $("#errorDob").html("You can only enter numbers for your Date of Birth");  
              }
});
  
   
  $('#userDob').mask('00-00-0000', {onComplete: function(cep) {
    
    var dateFrom = "01-01-1930";
    var dateTo = "31-12-2008";
    var dateCheck = cep;
    
    var d1 = dateFrom.split("-");
    var d2 = dateTo.split("-");
    var c = dateCheck.split("-");
    
    var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]);  // -1 because months are from 0 to 11
    var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
    var check = new Date(c[2], parseInt(c[1])-1, c[0]);
    
    var final = check > from && check < to;
    if (final)
    {
        $("#errorDob").html("");
        $("#userDob").addClass("is-valid");
        $("#userDob").removeClass("is-invalid");
    
        var userval = $("#userName").hasClass("is-valid");
        var dateval = $("#userDob").hasClass("is-valid");
        if(userval && dateval){
            $(".form-order").addClass("is-validated");
            $(".form-order").removeClass("needs-validation");
        }
  
        $("#dob-confirm-btn").prop("disabled", false);
  
       
    }else{
        $("#errorDob").html("<div class='alert alert-danger border-2 d-flex align-items-center' role='alert'><p class='mb-0 flex-1'><b>Invalid Date:</b> Make sure to enter your Date in DD-MM-YYYY Format!</p></div>");  
        $("#userDob").addClass("is-invalid");
        $("#userDob").removeClass("is-valid");
        $("#dob-confirm-btn").prop("disabled", true);
    }
              },
               onKeyPress: function(cep, event, currentField, options){
                
              },
              onInvalid: function(val, e, field, invalid, options){
                $("#errorDob").html("You can only enter numbers for your Date of Birth");  
              }
            });
  
    
  
  
  });
</script>
<script>
var bar = new ProgressBar.Line("#form-progressbar", {
    strokeWidth: 4,
    easing: 'easeInOut',
    duration: 1400,
    color: 'rgba(255, 105, 180, 1)',
    trailColor: 'none',
    trailWidth: 10,
    svgStyle: {width: '100%', height: '6px', position:'absolute', top:'0', left: '0'}
});

</script>
EOT;


$customCSS = '
<link href="/assets/css/lazyload.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/assets/css/star-rating-svg.css">
<link rel="stylesheet" type="text/css" href="/assets/css/review.css">
';
?>