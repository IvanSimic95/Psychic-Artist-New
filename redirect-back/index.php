<?php
$product = $email = $order_id = $total = $pars = "";


if(isset($_GET['emailaddress'])) {$email = $_GET['emailaddress'];}else{$email = $_GET['autoemail'];}
if(isset($_GET['subid'])) {$product = $_GET['subid'];}else{$product = "soulmate";}
if(isset($_GET['subid2'])) {$order_id = $_GET['subid2'];}
if(isset($_GET['subid3'])) {$user_id = $_GET['subid3'];}
if(isset($_GET['total'])) {$total = $_GET['total'];}else{$total = $_GET['amount'];}
if(isset($_GET['order_id'])) {$order_id = $_GET['order_id'];}
if(isset($_GET['product_codename'])) {$product = $_GET['product_codename'];}

if(isset($_GET['payment_method'])){ //If paypal get prodcut name from paypal
    
    if ($_GET['payment_method']=="paypal"){//If paypal get prodcut name from paypal
    if(isset($_GET['product_codename'])) {$product = $_GET['product_codename'];}
    if(isset($_GET['order_id'])) {$order_id = $_GET['order_id'];}
    if(isset($_GET['total'])) {$total = $_GET['total'];}

    }

}

$cookie_product = "product";
$cookie_productv = $product;
setcookie($cookie_product, $cookie_productv, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_email = "email";
$cookie_emailv = $email;
setcookie($cookie_email, $cookie_emailv, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_total = "total";
$cookie_totalv = $total;
setcookie($cookie_total, $cookie_totalv, time() + (86400 * 30), "/"); // 86400 = 1 day

$cookie_orderid = "orderid";
$cookie_orderidv = $_GET['order_id'];
setcookie($cookie_orderid, $cookie_orderidv, time() + (86400 * 30), "/"); // 86400 = 1 day

/*
echo $cookie_productv."<br>";

echo $cookie_emailv."<br>";

echo $cookie_totalv."<br>";

echo $cookie_orderidv."<br>";
*/

header("Location: https://psychic-artist.com/special-offer");
die();
?>