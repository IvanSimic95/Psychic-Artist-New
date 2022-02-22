<?php
$cookie_name = "loggedIn";
$cookie_name2 = "orderID";
$cookie_name3 = "userEmail";

if(isset($_COOKIE[$cookie_name])) {
$order_email = $_COOKIE[$cookie_name3];
} else {


if(isset($_SESSION['email'])){//if logged in already retrieve the email
$order_email = $_SESSION['email'];
}else{

// set parameters and execute
if(isset($_POST['check_email'])) {
$order_email = $_POST['check_email'];
}
    
if(isset($_POST['email'])) {
$order_email = $_POST['email'];
}
}
}
if(isset($_POST['remember'])) {
    $cookie = "1";
}else{
    $cookie = "0";
}

$LoginError = "";

if(isset($_SESSION['loggedIn']) OR isset($order_email)){ 
$sql = "SELECT * FROM orders WHERE order_email = '$order_email'";
$result = $conn->query($sql);


if($result->num_rows == 0) {
if($order_email==""){
$LoginError = "<div class='alert alert-danger  mb-0' role='alert'>Email not provided!</div>";
}else{
$LoginError = "<div class='alert alert-danger  mb-0' role='alert'>Email is not valid, account not found!</div>";
}
$LoginError = "<div class='alert alert-danger  mb-0' role='alert'>Email is not valid, account not found!</div>";

} else {
$row = mysqli_fetch_assoc($result);

$_SESSION['id'] = $row['order_id'];
$_SESSION['name'] = $row['user_name'];
$_SESSION['fname'] = $row['first_name'];
$_SESSION['lname'] = $row['last_name'];
$_SESSION['email'] = $row['order_email'];
$_SESSION['orders'] = $result->num_rows;
$_SESSION['weekly'] = "1643100349";
$_SESSION['loggedIn'] = "yes";

if($cookie == 1) {
$cookie_name = "loggedIn";
$cookie_value = "yes";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$cookie_name2 = "orderID";
$cookie_value2 = $_SESSION['id'];
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");

$cookie_name3 = "userEmail";
$cookie_value3 = $_SESSION['email'];
setcookie($cookie_name3, $cookie_value3, time() + (86400 * 30), "/");
}

if(isset($_GET['login'])) {
$redirect = '<script>window.location.replace("https://psychic-artist.com/dashboard?loggedin=success");</script>';
echo $redirect;
}
}
}
?>
<style>
.breadcrumbs-nav{
display:none!important;
}
</style>

<div class="container-fluid py-0 px-0 px-md-3 py-md-3" data-layout="container">
    <section class="py-0 overflow-hidden light" id="banner">
        <div class="container p-4 pt-md-5">

    <?php 


    if(isset($_SESSION['loggedIn'])){ 
        if($_SESSION['loggedIn']=="yes"){ //Check if user is logged in

        include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/overview.php';
        }
    }else{ //Not logged in
    include $_SERVER['DOCUMENT_ROOT'].'/templates/dashboard/login.php'; 
    }
     
    
    
    
    ?>
            
        </div>
    </section>
</div>