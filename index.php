<?php 
/* Reverse a String, Using strrev() */

$num = "vinay";
$count = 0;
while(isset($num[$count])){
$count++;
}
$reverse = [];
for($i=$count-1;  $i>=0;  $i--){
	$reverse[] = $num[$i];
}
echo "<pre>";
print_r($reverse);



?>