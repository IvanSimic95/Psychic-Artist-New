<?php
$title = "User Dashboard"; 


?>

<div class="container-fluid" data-layout="container" style="padding:0!important;padding-top:50px!important;">
    <section class="py-0 overflow-hidden light" id="banner">
        <div class="container pb-8 pt-4">

    <?php 
    $_SESSION['loggedIn'] = 1;
    if(isset($_SESSION['loggedIn'])){ //Check if user is logged in
    include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/user.php';
    }else{ //Not logged in
    include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/login.php'; 
    }
     
    
    
    
    ?>
            
        </div>
    </section>
</div>