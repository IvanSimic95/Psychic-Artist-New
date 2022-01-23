<?php 
include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; 


//Check URL Path to figure out what template to use
if (isset($_SERVER['PATH_INFO'])) {

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

//Do a check of file from URL, if it doesn't exist switch back to default
if (!file_exists($template)) {
    include_once $_SERVER['DOCUMENT_ROOT'].'/templates/error/404.php';
    die();
}

include $_SERVER['DOCUMENT_ROOT'].'/pages/'.$path.'.php'; 
include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; 
?>