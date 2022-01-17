<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$r = $id = "";

$r = rand(1, 10);

if($r <= 0){
$id = "amanda";
}else{
$id = "bella";
}

?>


<html>
<head>
<script type="application/javascript">
  (function(b,o,n,g,s,r,c){if(b[s])return;b[s]={};b[s].scriptToken="XzE2MTE0MzM1MDE";b[s].callsQueue=[];b[s].api=function(){b[s].callsQueue.push(arguments);};r=o.createElement(n);c=o.getElementsByTagName(n)[0];r.async=1;r.src=g;r.id=s+n;c.parentNode.insertBefore(r,c);})(window,document,"script","https://cdn.oribi.io/XzE2MTE0MzM1MDE/oribi.js","ORIBI");
</script>

<script type="application/javascript">
ORIBI.api('track', 'chat_redirect');
</script>

<meta http-equiv="refresh" content="3;url=https://psychic-artist.com/redirect/go.php?id=<?php echo $id; ?>" />

</head>

<body>
<h1>Loading...</h1>
</body>