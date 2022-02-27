<?php
$title = "Admin Support Chat"; 
$sdescription = "Help the customers!";
?>

<div class="container-fluid" data-layout="container" style="padding:0!important;padding-top:20px!important;">
    <section class="py-0 light" id="banner">
        <div class="container">

          <div class="row g-2 mb-4">

          <div class="col-9">
   
               
                    <div class="col-md-12" id="talkjs-container" style="height:600px;width:100%;"></div>
                 
        
          </div>

          <div class="col-3">
          <div class="card mb-3">
          <div class="card-body position-relative">
          <div id="result"></div>
          </div>
          </div>


          </div>

    </div>
  </section>
</div>

<?php if($formDate == "US"){ 
$ajaxDOB = <<<EOT
var dobUS = $("#userDobUS").val();
EOT;

$ajaxDOBB = <<<EOT
'&dobUS='+dobUS+'
EOT;

}else{
$ajaxDOB = <<<EOT
var dob = $("#userDob").val();
EOT;
  
$ajaxDOBB = <<<EOT
'&dob='+dob+'
EOT;
 }?>

<?php
$signature = hash_hmac('sha256', strval("PAadmin"), 'sk_test_dmh9xKYFEPiN2BxC0Z9GuAlrdEe6kRKL');
$customJS .= <<<EOT
<script>

$("#updateUser").click(function(e) {
  e.preventDefault();
  var name = $("#userName").val(); 
  $ajaxDOB
  var email = $("#userEmail").val();
  var gender = $("#SelectGender").val();
  var pgender = $("#SelectPGender").val();
  var userID = $("#userID").val();
  var dataString = 'name='+name+$ajaxDOBB&email='+email+'&gender='+gender+'&pgender='+pgender+'&userID='+userID;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'/templates/ajax/user-update.php',
    success:function(data) {
      alert(data);
    }
  });
});

</script>

<script>
$("#userName, #userDobUS, #userDob, #userEmail, #SelectGender, #SelectPGender").on("change keyup paste", function(){
  $('#SaveChanges').prop('disabled', false);
});

$(document).ready(function(){
  $('#userDobUS').mask('00/00/0000');
  $('#userDob').mask('00-00-0000');
});
</script>
<script>
Talk.ready.then(function() {
    var me = new Talk.User({
      id: 'PAadmin',
      role: 'PAadmin',
      name: 'Psychic Artist',
      email: 'contact@psychic-artist.com',
      photoUrl: 'https://psychic-artist.com/assets/img/logo-1.png',
      welcomeMessage: 'Hey, how can I help you?'
    });
      
    window.talkSession = new Talk.Session({
    appId: 't2X08S4H',
    me: me,
    signature: "$signature"
    });
    
    var inbox = window.talkSession.createInbox();
    inbox.mount(document.getElementById('talkjs-container'));

    inbox.on('conversationSelected', function (event) {
      if (event.conversation === null) {
        
      } else {



        // no need to specify document ready
        $(function() {
        
          // optional: don't cache ajax to force the content to be fresh
          $.ajaxSetup({
            cache: false
          });
        
          // specify loading spinner
          var spinner = "<img src='https://i.imgur.com/pKopwXp.gif' alt='loading...' />";
        
          // specify the server/url you want to load data from
          var url = "https://$domain/templates/ajax/info.php?id=";
          var convoID = event.conversation.id;
        
          var loadLink = url + convoID
          
          console.log(loadLink);


          $("#result").html(spinner).load(loadLink);
          
        
        });



      }
    });
    
window.talkSession.unreads.on('change', function (unreadConversations) {
    var amountOfUnreads = unreadConversations.length;
    $('#notifier-badge')
      .text(amountOfUnreads)
      .toggle(amountOfUnreads > 0);

      $('#notifier-badge-popup')
      .text(amountOfUnreads)
      .toggle(amountOfUnreads > 0);
  
    if (amountOfUnreads > 0) {
      document.title = '(' + amountOfUnreads + ') Psychic Artist';
      $('#chat-popup').removeClass('chat-hide');
    } else {
      document.title = 'Psychic Artist';
      $('#chat-popup').addClass('chat-hide');
    }
  });

  
});

</script>
</script>
EOT;
 ?>