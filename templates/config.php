<?php
include $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
debug_backtrace() || include $_SERVER['DOCUMENT_ROOT'].'/templates/error/403.php';

$customJS = $customCSS = "";

//Variables used globally
$v = include $_SERVER['DOCUMENT_ROOT'].'/templates/vars.php';
#file_put_contents($_SERVER['DOCUMENT_ROOT'].'/templates/vars.php', '<?php return ' . var_export($v, true) . ';');  //Code for saving variables to vars.php

//Define Main Variables
$webTitle = $v['web-title'];
$webDescription = $v['web-description'];
$webLogo = $v['web-logo'];
$webVersion = $v['web-version'];

$firephp = FirePHP::getInstance(true);

//$firephp->fb('Hello World'); /* Defaults to FirePHP::LOG */

//$firephp->fb('Log message'  ,FirePHP::LOG);
//$firephp->fb('Info message' ,FirePHP::INFO);
//$firephp->fb('Warn message' ,FirePHP::WARN);
//$firephp->fb('Error message',FirePHP::ERROR);


$title = $webTitle;
$sdescription = $webDescription;
$pimage = $webLogo;


//Check if server is localhost or guru and save DB info
$domain = $_SERVER['SERVER_NAME'];
if($domain == "pa.test"){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "pa";
}else{
	$servername = "localhost";
	$username = "psychic_newpanel";
	$password = "Jepang123Iva";
	$db = "psychic_newpanel";
}


if($domain == "pa.test"){
  // testing
  $min_allowDebugFlag = true;
  $min_errorLogger    = true;
  $min_enableBuilder  = true;
  $min_cachePath      = '/tmp';
  $min_serveOptions['maxAge'] = 0; // see changes immediately
} else {
  // production
  $min_allowDebugFlag = false;
  $min_errorLogger    = false;
  $min_enableBuilder  = false;
  $min_cachePath      = '/tmp';
  $min_serveOptions['maxAge'] = 86400;
}


//Error Reporting - None
#error_reporting(0); //Disable Error Reporting
#ini_set('display_errors', FALSE); //Hide all errors on frontend

//Error Reporting - All
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Error Log Path
ini_set("log_errors", TRUE); //Log errors to file
ini_set("error_log", $_SERVER['DOCUMENT_ROOT']."/logs/php-error.log");//Path to php error log

//Check if session is set, if not set a new one
if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
  session_start();
  }
  
  //Check if user cookie ID is set, if not set a new one
  $randomNumber = rand(155654654,955654654);
  if(!isset($_SESSION['user_cookie_id'])) {
  $_SESSION['user_cookie_id'] = $randomNumber;
  }
  
  //Check if funnel page is set, if not set a new one
  if(!isset($_SESSION['funnel_page'])) {
  $_SESSION['funnel_page'] = "main";
  }
  
  if(isset($_GET['logout'])){
  $_SESSION = array();
  session_destroy();
  header("Location: /dashboard");
  die();
  }

//Save to order log function
function formLog($array) {
  $dataToLog = $array;
  $data = implode(" | ", $dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT']."/logs/order.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE){
    //echo "log saved";
  }
}

//Save to order log function
function formErrorLog($array) {
  $dataToLog = $array;
  $data = implode(" | ", $dataToLog);
  $data .= PHP_EOL;
  $pathToFile = $_SERVER['DOCUMENT_ROOT']."/logs/order-error.log";
  $success = file_put_contents($pathToFile, $data, FILE_APPEND);
  if ($success === TRUE){
    //echo "log saved";
  }
}

//Function to check if user is from US
$formDate = "";
    $langs = array();
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        // break up string into pieces (languages and q factors)
        preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);
        if (count($lang_parse[1])) {
            // create a list like "en" => 0.8
            $langs = array_combine($lang_parse[1], $lang_parse[4]);
            // set default to 1 for any without q factor
            foreach ($langs as $lang => $val) {
                if ($val === '') $langs[$lang] = 1;
            }
            // sort list based on value	
            arsort($langs, SORT_NUMERIC);
        }
    }
    if (array_key_first($langs)=="en-US")$formDate = "US";





//Disable notifications in menu
$notificationsOn = "no";


//START Order Messages
$processingWelcome = "We are now processing your *Order #%ORDERID%*\n\nYour order will be delivered to your email in %PRIORITY% hours or less.\n\nIf this is your first order your new account will be created automatically\n\nIn order to automatically login to your account just <%EMAILLINK%|Click Here!>\n\n_With Love!_\n*Melissa*";


//Complete Soulmate, Twin Flame & Future Spouse Text added Before and After Order Text
$generalOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I’ve seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$generalOrderFooter = "\n\n It was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Melissa*";

//Complete Future Baby Text added Before and After Order Text
$babyOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I’ve seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$babyOrderFooter = "\n\n It was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Melissa*";

//Complete Reading Text added Before and After Order Text
$readingOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I’ve seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$readingOrderFooter = "\n\n It was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Melissa*";

//Complete Past Life Text added Before and After Order Text
$pastOrderHeader = "Dear %FIRSTNAME%\n\nFirst of all, thank you so much for giving me the opportunity to create a meaningful connection with you! As we continue, please make yourself comfortable and feel wholeheartedly everything I’ve seen while connecting with your aura and energy. I hope that sharing this with you will kindle a light of joy in your heart, and let you know that beautiful things are on the way.\n\n";
$pastOrderFooter = "\n\n It was such a pleasure doing your reading, my dear. I hope that you enjoy it as much as I enjoyed connecting with your beautiful soul energy!\n\nWith Love,\n*Melissa*";


//Order Processing & Order Complete Notifications
$OrderProcessingMessage = "Your Order status is now set to *Processing*!";

$OrderCompleteMessage = "Your Order status is now set to *Complete*!";
$ContinueConvoMsg = "If you want to chat with Melissa, simply reply to this conversation!";
//END Order Messages



//SESSION DATA FOR TESTING ONLY, REMOVE LATER
//$_SESSION['id'] = "1";
//$_SESSION['name'] = "Ivan Simic";
//$_SESSION['fname'] = "Ivan";
//$_SESSION['email'] = "ivan.simic2903@gmail.com";
//$_SESSION['orders'] = "14";
//$_SESSION['weekly'] = "1643100349";
//$_SESSION['loggedIn'] = "yes";
//SESSION DATA FOR TESTING ONLY, REMOVE LATER


//Check if user logged in, if yes save variables
if(isset($_SESSION['id'])){
$userId = $_SESSION['id'];
$userName = $_SESSION['name'];
$userFName = $_SESSION['fname'];
$userEmail = $_SESSION['email'];
$userOrders = $_SESSION['orders'];
$userWeekly = $_SESSION['weekly'];
}else{ //If not logged in make those variables empty
$userId = "";
$userName = "";
$userEmail = "";
$userOrders = "0";
$userWeekly = "0";
} 


//START FUNCTION FOR INDEX.PHP
if (isset($_SERVER['PATH_INFO'])) {//Check URL Path to figure out what template to use
    //Check if URL Ends with "/"
    if (str_ends_with($_SERVER['PATH_INFO'], '/')) {
    $path = substr($_SERVER['PATH_INFO'], 0, -1); //If / is found at the end remove it and then Map the URL to variable $path
    }else{ 
    $path = $_SERVER['PATH_INFO']; //Map the URL to variable $path
    }
}else{
$path = "/home";//Default URL is pointing to home template
}
$splitURL = explode('/',$path);
$template = $_SERVER['DOCUMENT_ROOT'].'/pages/'.$path.'.php';
//END FUNCTION FOR INDEX.PHP

//START FUNCTION FOR INDEX.PHP ADDON FOR VIEW ORDERS
if(isset($splitURL[1])){//If variable is set proceed
    if($splitURL[1]=="dashboard"){
        if(isset($splitURL[2])){
           if($splitURL[2]=="order"){
            $path="dashboard/order";
            $template = $_SERVER['DOCUMENT_ROOT'].'/pages/'.$path.'.php';
              if(isset($splitURL[3])){
              $viewOrder = $splitURL[3];
              }
           }
        }
    }
}
//END FUNCTION FOR INDEX.PHP ADDON FOR VIEW ORDERS


/////////////////////////////////////////////////////////////////////////////
////////////////////////FUNCTIONS - DO NOT EDIT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

// A user-defined error handler function
function myError($errno, $errstr, $errfile, $errline) {
global $ERROR;
$GLOBALS['ERROR'] = "<b>PHP Error:</b> <i>[$errno]</i> <b>$errstr</b><br> Error on line <b>$errline</b> in <b>$errfile</b><br>";}
	  
// Set user-defined error handler function
set_error_handler("myError");

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
$conn->query('set character_set_client=utf8');
$conn->query('set character_set_connection=utf8');
$conn->query('set character_set_results=utf8');
$conn->query('set character_set_server=utf8');
$conn->set_charset('utf8mb4');


// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }

/////////////////////////////////////////////////////////////////////////////
////////////////////////FUNCTIONS - DO NOT EDIT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
?>