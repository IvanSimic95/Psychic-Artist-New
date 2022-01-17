<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//FB Page za vidu, Psychic Amanda
$vidaLink = "https://www.facebook.com/PsychicAmandaStudio";

//FB Page za ljubicu, Mystic Bella
$ljubicaLink = "https://www.facebook.com/Mystic-Bella-107853381515090";


$id = $_GET['id'];

if($id == "amanda"){
	$name = "Psychic Amanda";
}elseif($id == "bella"){
	$name = "Mystic Bella";
}

?>

<html>
<head>
<script type="application/javascript">
  (function(b,o,n,g,s,r,c){if(b[s])return;b[s]={};b[s].scriptToken="XzE2MTE0MzM1MDE";b[s].callsQueue=[];b[s].api=function(){b[s].callsQueue.push(arguments);};r=o.createElement(n);c=o.getElementsByTagName(n)[0];r.async=1;r.src=g;r.id=s+n;c.parentNode.insertBefore(r,c);})(window,document,"script","https://cdn.oribi.io/XzE2MTE0MzM1MDE/oribi.js","ORIBI");
</script>

<?php
if($id == "amanda"){?>
	
<script type="application/javascript">
ORIBI.api('track', 'chat_amanda');
</script>

<meta http-equiv="refresh" content="3;url=<?php echo $vidaLink; ?>" />
<?php 
}elseif($id == "bella"){?>

<script type="application/javascript">
ORIBI.api('track', 'chat_bella');
</script>

<meta http-equiv="refresh" content="3;url=<?php echo $ljubicaLink; ?>" />
<?php
}?>



</head>

<body>
<h1>Redirecting you to <?php echo $name; ?>'s Facebook Page...</h1>
</body>