<nav class="bg-light p-2 px-3 rounded-3 <?php if($path == "/home") echo "d-none"; ?>" style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
<div class="container">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i> Home</a></li>
<?php
$fullLink = "https://".$domain;
$crumbs = explode('/' , $path);
foreach($crumbs as $i =>$key) {

if (array_key_last($crumbs) > 1){ //Start If path has multiple pages/links

    if ($i === array_key_first($crumbs)) {
    //Skip first from array

    }elseif ($i === array_key_last($crumbs)) {
    //add active class naem if alst
    $fullLink .= "/".$key;
    $keySlash = str_replace("-"," ",$key);
    if($key == "soulmate" OR $key == "twin-flame" OR $key == "future-spouse")$keySlash = $keySlash." Drawing";
    echo '<li class="breadcrumb-item active" aria-current="page"><a class="icon icon-light dropdown-item-'.$key.'" href="'.$fullLink.'"> '.$keySlash.'</a></li>';
    

    }elseif ($i == "1") {
    $fullLink .= "/".$key;


    //Function to find all files in this folder
    $d = $_SERVER['DOCUMENT_ROOT']."/pages/".$key."/";
    $dir = scandir($d);
    foreach($dir as $index => &$item)
    {
        if(is_dir($dirPath. '/' . $item)){ unset($dir[$index]); } }$dir = array_values($dir);
    //End find all files function

    echo '
    <li class="breadcrumb-item">
    <div class="btn-group">
    <button class="btn btn-link breadcrumb-dropdown dropdown-toggle icon dropdown-item-'.$key.'" type="button" id="'.$key.'MenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> '.$key.'</button>
    </button>

    <div class="dropdown-menu breadcrumbs-dropdown-menu py-2" aria-labelledby="'.$key.'MenuButton">
    <a class="dropdown-item icon dropdown-item-'.$key.'" href="'.$fullLink.'"> '.$key.'</a>
    <div class="dropdown-divider"></div>';

    foreach($dir as $ii =>$kkey) {
    $realKey = str_replace(".php","",$kkey);
    $realKeySlash = str_replace("-"," ",$realKey);
    
    if($key == "shop") $realKeySlash = $realKeySlash." Drawing";

    $pfullLink = "https://".$domain."/".$key;
    $pfullLink .= "/".$realKey;
    
    echo '<a class="dropdown-item icon dropdown-item-'.$realKey.'" href="'.$pfullLink.'"> '.$realKeySlash.'</a>'; 

    }
    echo '
    </div></div>
    </li>
    ';


    }else {
    $fullLink .= "/".$key;
    $keySlash = str_replace("-"," ",$key);
    echo '<li class="breadcrumb-item"><a href="'.$fullLink.'">'.$keySlash.'</a></li>';
    }
     //END If path has multiple pages/links
}else{
    if ($i === array_key_first($crumbs)) {
        //Skip first from array
    
        }elseif ($i === array_key_last($crumbs)) {
        //add active class naem if alst
        $fullLink .= "/".$key;
        $keySlash = str_replace("-"," ",$key);
        echo '<li class="breadcrumb-item active" aria-current="page"><a href="'.$fullLink.'">'.$keySlash.'</a></li>';
    
        }else {
        $fullLink .= "/".$key;
        $keySlash = str_replace("-"," ",$key);
        echo '<li class="breadcrumb-item"><a href="'.$fullLink.'">'.$keySlash.'</a></li>';
        }
} 

}
?>
    
  </ol>
</nav>


<?php
if($path != "/home"){
 echo '
 <!-- BREADCRUMBS SCHEMA -->
 <script type="application/ld+json">
 {
   "@context": "https://schema.org",
   "@type": "BreadcrumbList",
   "itemListElement": [';
foreach($crumbs as $i =>$key) {
    $fullLink = "https://".$domain;
    if ($i === array_key_first($crumbs)) {
        echo '{
            "@type": "ListItem",
            "position": "0",
            "name": "Home",
            "item": "https://pa.test"
          }';
        
    }elseif ($i === array_key_last($crumbs)) {
    //add active class naem if alst
        $fullLink .= "/".$key;
        echo ',{
            "@type": "ListItem",
            "position": '.$i.',
            "name": "'.$key.'",
            "item": "'.$fullLink.'"
          }';
         
    
    }else {
    $fullLink .= "/".$key;
    echo ',{
        "@type": "ListItem",
        "position": '.$i.',
        "name": "'.$key.'",
        "item": "'.$fullLink.'"
      }';
    }



} 
echo '
] }
</script>
';

}
?>
</div>
</nav>