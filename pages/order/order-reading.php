<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';

$logArray = array();
$errorDisplay = "";
$logArray['1'] = date("d-m-Y H:i:s");
$logArray['2'] = $_SERVER['REMOTE_ADDR'];


if(isset($_GET['skip'])){ 
    if($_GET['skip']=="yes"){ 
    $_SESSION['funnel_page'] = "future-baby";
    header('Location: /offer/future-baby.php');
    die();
    }
}
  
$_SESSION['funnel_page'] = "future-baby";


$cookie_id = $_GET['cookie_id'];

$user_name = $_SESSION['orderName'];
$user_email = $_SESSION['orderEmail'];
$user_age = $_SESSION['orderAge'];

// set parameters and execute
if(isset($_GET['general'])) {$general = $_GET['general'];}else{$general = "";}
if(isset($_GET['love'])) {$love = $_GET['love'];}else{$love = "";}
if(isset($_GET['career'])) {$career = $_GET['career'];}else{$career = "";}
if(isset($_GET['health'])) {$health = $_GET['health'];}else{$health = "";}

$order_product = $general . " " .  $love . " " . $career . " " . $health;
$order_priority = "24";

$landing = $_GET['landingpage'];

$partnerGender = "male";

$fName = $_SESSION['orderFName'];
$lName = $_SESSION['orderLName'];

//Find User Gender
function findGender($name) {
$apiKey = 'Whc29bSnvP3zrQG3hYCwXKMoYu5h4ZQukS6n'; //Your API Key
$getGender = json_decode(file_get_contents('https://gender-api.com/get?key=' . $apiKey . '&name=' . urlencode($name)));
$data = [[
        "gender" => $getGender->gender,
        "accuracy"  => $getGender->accuracy
        ]];
return $data;
}

    
$findGenderFunc = findGender($fName);
$userGender = $findGenderFunc['0']['gender'];
$userGenderAcc = $findGenderFunc['0']['accuracy'];

if($userGender=="male"){$partnerGender = "female";}
if($userGender=="female"){$partnerGender = "male";}

$order_date = date('Y-m-d H:i:s');

$baseRedirect = base64_encode("https://".$domain."/order/success");

empty($errorDisplay) ?  $testError = FALSE :  $testError = TRUE;
if($testError == TRUE){
$errorID  = md5($errorDisplay.$order_date);
$logArray['3'] = $errorID;
$logArray['4'] = $errorDisplay;
include $_SERVER['DOCUMENT_ROOT'].'/templates/error/order.php';
formErrorLog($logArray);
die();
}else{
  $logArray['4'] = $cookie_id;
  $logArray['4'] = $user_name;
  $logArray['5'] = $user_email;
  $logArray['6'] = $user_dob;
  $logArray['7'] = $order_product;
  $logArray['8'] = $order_priority;
}

if($user_name ) {
    
    $sql = "INSERT INTO orders (cookie_id, user_age, first_name, last_name, user_name, order_status, order_date, order_email, order_product, order_priority, order_price, buygoods_order_id, user_sex, genderAcc, pick_sex)
    VALUES ('$cookie_id', '$user_age', '$fName', '$lName', '$user_name', 'pending', '$order_date', '', '$order_product', '$order_priority', '', '', '$userGender', '$userGenderAcc', '$partnerGender')";
  
    if ($conn->query($sql) === TRUE) {
    $logArray['9'] = "Success"; 
    } else {
    $logArray['9'] = "Error: " . $sql . "<br>" . $conn->error;; 
    }

    $lastRowInsert = mysqli_insert_id($conn);
    unset($_SESSION['user_cookie_id']);
    $conn->close();
    formLog($logArray);
?>


<div class="container-fluid" data-layout="container" style="padding:0!important;padding-top:20px!important;">
    <section class="py-0 light" id="banner">
        <div class="container">


            <div class="card mb-3">
                <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(/assets/img/icons/spot-illustrations/corner-4.png);"></div>
                    <div class="card-body position-relative">
                    <div class="row">
                    <div class="col-lg-12">
                    <div class="table-responsive scrollbar">
                    <h1>You will be redirected to the Payment Processor. Please dont close this page</h1>
  </div>
</div>
                    </div>
              </div>
            </div>


        </div>
    </section>
</div>


<script>
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};
var nr_total = 0;
if (getUrlParameter('general')) {
  nr_total++;
}
if (getUrlParameter('love')) {
  nr_total++;
}
if (getUrlParameter('career')) {
  nr_total++;
}
if (getUrlParameter('health')) {
  nr_total++;
}

 window.location.href = "https://www.buygoods.com/secure/upsell?account_id=6490&product_codename=" + nr_total + "xreadings&subid=<?php echo $cookie_id; ?>&subid2=<?php echo $lastRowInsert; ?>&redirect=<?php echo $baseRedirect; ?>";
</script>


<?php
}else{
header('Location: /');
}
?>