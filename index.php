<?php
ob_start();
$customJSPreload = $customCSS = "";
include $_SERVER['DOCUMENT_ROOT'].'/templates/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/templates/header.php'; 

//Do a check of file from URL, if it doesn't exist switch back to default
if (!file_exists($template)) {
    include $_SERVER['DOCUMENT_ROOT'].'/templates/error/404.php';
}else{
    include $_SERVER['DOCUMENT_ROOT'].'/pages/'.$path.'.php'; 
}
$buffer=ob_get_contents();
ob_end_clean();

$buffer=str_replace("<!--CUSTOMJSPRELOAD-->",$customJSPreload,$buffer);
$buffer=str_replace("<!--CUSTOMCSS-->",$customCSS,$buffer);
$buffer=str_replace("%TITLE%",$title,$buffer);
$buffer=str_replace("%DESCRIPTION%",$sdescription,$buffer);
$buffer=str_replace("%LOGO%",$webLogo,$buffer);
$buffer=str_replace("%PIMAGE%",$pimage,$buffer);
echo $buffer;


include $_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'; 
// Start loop
for($i = 1; $i <=1000; $i++)
{
    $a++;
}
?>