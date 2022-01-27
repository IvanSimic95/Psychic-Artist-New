<?php
$title = "CHOOSE YOUR SEXUAL ORIENTATION!";
// set parameters and execute
$order_email = $_GET['emailaddress'];
$order_price = $_GET['total'];
$order_buygoods = $_GET['order_id'];
$cookie_id = $_SESSION['user_cookie_id'];
// echo $cookie_id;
if($order_email) {



    $sql = "UPDATE `orders` SET `order_status`='paid',`order_email`='$order_email',`order_price`='$order_price',`buygoods_order_id`='$order_buygoods' WHERE cookie_id='$cookie_id'" ;


    if ($conn->query($sql) === TRUE) {
       echo "Update successfully";

      //unset($_COOKIE['user_cookie_id']);
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}
?>

<style>
.breadcrumbs-nav{
display:none!important;
}
</style>

<div class="container-fluid" data-layout="container" style="padding:0!important;padding-top:20px!important;">
    <section class="py-0 light" id="banner">
        <div class="container">
            <div class="card mb-3 col-lg-8 offset-2">
                <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(/assets/img/icons/spot-illustrations/corner-4.png);"></div>
                    <div class="card-body position-relative">
                        <div class="row">
                        <div class="col-lg-12">

                            <h3 class="text-center"><?php echo $title; ?></h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>