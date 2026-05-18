<?php 
/* Reverse a String, without using strrev() */

$num = "vinay";
$count = 0;
while(isset($num[$count])){
$count++;
}
$reverse = [];
for($i=$count-1;  $i>=0;  $i--){
	$reverse[] = $num[$i];
}
// echo "<pre>";
// print_r($reverse);


/* Palindrome Check using strrev() */ 
function palindrome($num){
	$rev_num = strrev($num);

	if ($num == $rev_num){
		return "String is palindrome";
	}else {
		return "String is not palindrome";
	}
}

// echo palindrome("sun");

/* Palindrome Check without using strrev() */ 
function palindrome($num){
	$count = 0;

	while(isset($num[$count])){
		$count++;
	}

	$rev_num = [];
	for($i=$count-1; $i>=0; $i--){
		$rev_num[] = $num[$i];
	}
	$rev_string = implode("", $rev_num);

	if ($num == $rev_string){
		return "String is palindrome";
	}else {
		return "String is not palindrome";
	}
}

// echo palindrome("sus");

?>