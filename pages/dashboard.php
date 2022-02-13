<?php
$title = "User Dashboard"; 


?>

<div class="container-fluid py-0 px-0 px-md-3 py-md-3" data-layout="container">
    <section class="py-0 overflow-hidden light" id="banner">
        <div class="container p-0">

    <?php 
    $_SESSION['loggedIn'] = "yes";

    if(isset($_SESSION['loggedIn'])){ 
        if($_SESSION['loggedIn']=="yes"){ //Check if user is logged in

        include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/user.php';
        }
    }else{ //Not logged in
    include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/login.php'; 
    }
     
    
    
    
    ?>
            
        </div>
    </section>
</div>