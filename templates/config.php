<?php
include $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
include $_SERVER['DOCUMENT_ROOT'].'/compressor.php';
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

function time_ago($timestamp)  
 {  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
     return "Just Now";  
   }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "one minute ago";  
     }  
     else  
           {  
       return "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "an hour ago";  
     }  
           else  
           {  
       return "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "yesterday";  
     }  
           else  
           {  
       return "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "a week ago";  
     }  
           else  
           {  
       return "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "a month ago";  
     }  
           else  
           {  
       return "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       return "one year ago";  
     }  
           else  
           {  
       return "$years years ago";  
     }  
   }  
 }  

//Check if server is localhost or guru and save DB info
$domain = $_SERVER['SERVER_NAME'];
if($domain == "pa.test"){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "pa";
}else{
	$servername = "localhost";
	$username = "psychic_newuser";
	$password = "Jepang123Iva";
	$db = "psychic_web";
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

//Check for session and start if none exists
if (session_status() === PHP_SESSION_NONE) {session_start();}

//Generate Random Session Cookie
$randomNumber = rand(155654654,955654654);
$cookie_name = "user_cookie_id";
$cookie_value = $randomNumber;

//Set cookie if it doesn't exist already
if(!isset($_COOKIE[$cookie_name])) {
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

//If cookies are working set session cookie value to real cookie value
if(count($_COOKIE) > 0) {
  $_SESSION['user_cookie_id'] = $_COOKIE[$cookie_name];
} else { //If cookies aren't working & session cookie isn't set create new one
  if(!isset($_SESSION['user_cookie_id'])) {
  $_SESSION['user_cookie_id'] = $cookie_value;
  }
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




//SESSION DATA FOR TESTING ONLY, REMOVE LATER
$_SESSION['id'] = "1";
$_SESSION['name'] = "Ivan Simic";
$_SESSION['email'] = "email@isimic.com";
$_SESSION['orders'] = "14";
$_SESSION['weekly'] = "1643100349";
//SESSION DATA FOR TESTING ONLY, REMOVE LATER


//Check if user logged in, if yes save variables
if(isset($_SESSION['id'])){
$userId = $_SESSION['id'];
$userName = $_SESSION['name'];
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
$template = $_SERVER['DOCUMENT_ROOT'].'/pages/'.$path.'.php';
//END FUNCTION FOR INDEX.PHP



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