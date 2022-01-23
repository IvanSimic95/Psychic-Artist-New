$(document).ready(function(){

  $("input#userEmail").verimail({
    messageElement: "#errorEmail"
});

  const instance0 =  new TypeIt(".type-it-zero", {
    strings: ["<span class='fw-bold'>Ready to meet your soulmate?</span><br>", "<span class='fw-bold pulseNew animated' style=';color:red;'>WARNING: You Will Feel Strong Emotions</span><br>", "Psychic Artist (通灵艺术家) is a master of astrology famous in China for being able to draw anyone's soulmate. <br><br><b>Thousands</b> of people have found love thanks to Artist's gift.<br>", "Answer just a few simple questions and Psychic Artist will draw you a picture of your soulmate."],
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
    strings: ["Great! All you got to do now is answer 3 questions to provide us with information required to perform this task.<br>", "What should we introduce you as to Psychic Artist?<br>", "After you enter your name & email click the confirm button to save it!"],
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
    strings: ["Almost There!", "Only 1 step to go! Choose your desired delivery time!"],
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
    strings: ["Well Done!<br>", "We got all the information we need from you!<br>", "You can continue to payment page by clicking 'Place an Order' Button below."],
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
    $("#start-form-btn").fadeToggle(); //Hide Start Button
    $("#welcome-form-msg").slideToggle();//Show Welcome message after starting Form
    instance.go(); //Start next part of text


    console.log("Removed first message and starting button, added welcome form msg and started instance #1");
  });

  $(document).ready(function(){
    var $regexname=/^([A-Za-z\s]{3,24})$/;
    $('#userName').on('keypress keydown keyup',function(){
             if (!$(this).val().match($regexname)) {
          // If username is too long
          $("#error").html("<div class='alert alert-danger border-2 d-flex align-items-center' role='alert'><p class='mb-0 flex-1'>Your name is invalid, make sure to use only letters and spaces!</p></div>");
          $("#userName").addClass("is-invalid");
          $("#userName").removeClass("is-valid");
          $("#name-confirm-btn").prop("disabled", true);
             }
           else{

            if($("input#email-address").getVerimailStatus() < 0){
              $("#name-confirm-btn").prop("disabled", true);
          }else{
            $("#name-confirm-btn").prop("disabled", false);
            
          }
          $("#error").html("");
          $("#userName").addClass("is-valid");
          $("#userName").removeClass("is-invalid");


               }
         });
});

$("#name-confirm-btn").click(function(){
  
  
          const userName = $("#userName").val();
           const instance2 =  new TypeIt(".type-it-two", {
             strings: ["Nice to meet you <span style='text-transform:capitalize';>"+ userName + "</span>!", "Next thing I need from you is your day of birth, please provide it below."],
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

});
  
  $('.show-offer').on('click', function(e) {
    $(".offer-sider").slideToggle();
    $(".more-offer").fadeToggle();
    $(".less-offer").fadeToggle();   
  });

jQuery('input[name="priority"]').change(function(){
    if (this.value == '12') {
    jQuery('.new_prce').animate({'opacity' : 0}, 200, function(){jQuery('.new_prce').html('$49.99').animate({'opacity': 1}, 200);});
		jQuery('.old_price del').animate({'opacity' : 0}, 300, function(){jQuery('.old_price del').html('$499.99').animate({'opacity': 1}, 300);});
		jQuery('.saveda').animate({'opacity' : 0}, 400, function(){jQuery('.saveda').html('$450 (90%)').animate({'opacity': 1}, 400);});	
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
});

$("#helper-delivery-express").click(function(){
    $("#prio12").prop("checked", true);
});

$("#helper-delivery-fast").click(function(){
    $("#prio24").prop("checked", true);
});

$("#helper-delivery-standard").click(function(){
    $("#prio48").prop("checked", true);
});


$("#close-deliveryCollapse").click(function(){
  $('#deliveryCollapse').collapse('hide');
});


$(document).ready(function() {
  $('#delivery-speed').one('click', function(e){
    $('#deliveryCollapse').collapse('hide');
    $("#delivery-form-msg").fadeToggle();
    $("#final-form-msg").slideToggle();
    $(".btn-submit-form").slideToggle();
    $(".btn-submit-form").addClass("add-to-cart-flash");
    instance4.go();

  });
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