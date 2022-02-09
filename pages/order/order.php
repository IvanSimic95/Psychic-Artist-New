<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';

$logArray = array();
$errorDisplay = "";
$logArray['1'] = date("d-m-Y H:i:s");
$logArray['2'] = $_SERVER['REMOTE_ADDR'];



isset($_GET['userName'])    ? $user_name=$_GET['userName']     : $errorDisplay .= " Missing User Name /";
isset($_GET['userEmail'])   ? $user_email=$_GET['userEmail']    : $errorDisplay .= " Missing User Email /";

isset($_GET['userDob']) OR isset($_GET['userDobUS']) ? $dob = "Yes"   : $errorDisplay .= " Missing User Date of Birth (Both US and EU Fields) /";
if(isset($_GET['userDob']))$user_dob = $_GET['userDob'];
if(isset($_GET['userDobUS']))$user_dob = $_GET['userDobUS'];


$today = date("d-m-Y");
$diff = date_diff(date_create($user_dob), date_create($today));
$user_age = $diff->format('%Y');

isset($_GET['product'])  ? $order_product = $_GET['product']   : $errorDisplay .= " Missing Product ID /";
isset($_GET['priority']) ? $order_priority = $_GET['priority'] : $errorDisplay .= " Missing Order Priority /";

isset($_GET['cookie_id']) ? $cookie_id = $_GET['cookie_id'] : $errorDisplay .= " Missing User Cookie ID /";
isset($_GET['landingpage']) ? $landing = $_GET['landingpage'] : $errorDisplay .= " Missing Landing Page ID /";

$_SESSION['funnel_page'] = "personal-reading";

$order_date = date('Y-m-d H:i:s');
$partnerGender = "male";

//Full name -> First and Last Name
$parser = new TheIconic\NameParser\Parser();
$name = $parser->parse($user_name);

$fName = $name->getFirstname();
$lName = $name->getLastname();

$_SESSION['orderName'] = $user_name;
$_SESSION['orderEmail'] = $user_email;

$_SESSION['orderFName'] = $fName;
$_SESSION['orderLName'] = $lName;

$_SESSION['orderAge'] = $user_age;

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

$baseRedirect = base64_encode("https://".$domain."/offer/personal-reading");

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

    unset($_SESSION['user_cookie_id']);
    $lastRowInsert = mysqli_insert_id($conn);

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
var prio = getUrlParameter('priority');
var product = getUrlParameter('product');

 window.location.href = "https://www.buygoods.com/secure/checkout.html?account_id=6490&product_codename=" + product + prio + "&subid=<?php echo $cookie_id; ?>&subid2=<?php echo $lastRowInsert; ?>&redirect=<?php echo $baseRedirect; ?>";
</script>


<?php
}else{
header('Location: /');
}
?>