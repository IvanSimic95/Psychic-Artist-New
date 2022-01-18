<?php
debug_backtrace() || include_once $_SERVER['DOCUMENT_ROOT'].'/templates/error/403.php';

//Variables used globally
$v = include $_SERVER['DOCUMENT_ROOT'].'/templates/vars.php';
file_put_contents($_SERVER['DOCUMENT_ROOT'].'/templates/vars.php', '<?php return ' . var_export($v, true) . ';');

//Error Reporting - None
#error_reporting(0); //Disable Error Reporting
#ini_set('display_errors', FALSE); //Hide all errors on frontend

//Error Reporting - All
error_reporting(E_ALL);
ini_set('display_errors', TRUE);

//Error Log Path
ini_set("log_errors", TRUE); //Log errors to file
ini_set("error_log", $_SERVER['DOCUMENT_ROOT']."/logs/php-error.log");//Path to php error log








/////////////////////////////////////////////////////////////////////////////
////////////////////////FUNCTIONS - DO NOT EDIT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

// A user-defined error handler function
function myError($errno, $errstr, $errfile, $errline) {
global $ERROR;
$GLOBALS['ERROR'] = "<b>PHP Error:</b> <i>[$errno]</i> <b>$errstr</b><br> Error on line <b>$errline</b> in <b>$errfile</b><br>";}
	  
// Set user-defined error handler function
set_error_handler("myError");

//Connect to Database
$servername = "localhost";
$username = "root";
$password = "";
$db = "pa";
try {$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	  echo "Connection failed: " . $e->getMessage();
	}

/////////////////////////////////////////////////////////////////////////////
////////////////////////FUNCTIONS - DO NOT EDIT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
?>