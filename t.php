<?php
$file = file($_SERVER['DOCUMENT_ROOT'].'logs/order.log');
$a = array();
foreach($file as $log){
    $a[] = explode ('|', $log);
}


// Recursively traverses a multi-dimensional array.
function traverseArray($array)
{ 
	// Loops through each element. If element again is array, function is recalled. If not, result is echoed.
	foreach($array as $key=>$value)
	{ 
		if(is_array($value))
		{ 
			traverseArray($value); 
            echo '<tr class="align-middle">';
		}else{
            echo '<td class="text-nowrap">'.$value.'</td>';
		} 
	}
}
traverseArray($a);
?>