<?php
debug_backtrace() || include_once $_SERVER['DOCUMENT_ROOT'].'/templates/error/403.php';

$customJS = $customCSS = "";

//Variables used globally
$v = include $_SERVER['DOCUMENT_ROOT'].'/templates/vars.php';
#file_put_contents($_SERVER['DOCUMENT_ROOT'].'/templates/vars.php', '<?php return ' . var_export($v, true) . ';');  //Code for saving variables to vars.php


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