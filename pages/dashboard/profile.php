<?php
$title = "User Dashboard"; 

if(isset($_SESSION['email'])){//if logged in already retrieve the email
$order_email = $_SESSION['email'];
}else{

// set parameters and execute
if(isset($_GET['check_email'])) {
$order_email = $_GET['check_email'];
}
    
if(isset($_POST['email'])) {
$order_email = $_POST['email'];
}

}

$sql = "SELECT * FROM orders WHERE order_email = '$order_email'";

$result = $conn->query($sql);

if( ($result->num_rows == 0 || $order_email == "") ) {

if($order_email==""){$error = "";}else{$error = "<div class='alert alert-danger  mb-0' role='alert'>Email is not valid, account not found!</div>";}

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
}
?>
<style>
.breadcrumbs-nav{
display:none!important;
}
</style>

<div class="container-fluid py-0 px-0 px-md-3 py-md-3" data-layout="container">
    <section class="py-0 overflow-hidden light" id="banner">
        <div class="container p-0">

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