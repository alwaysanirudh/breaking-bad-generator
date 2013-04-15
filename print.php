<?php
   session_start();


//split string into an array
$arr1 = str_split($_SESSION['name']);
//support double letters, working when just 'ki' is entered but not with other letters
if ($_SESSION['name'] == 'ki') {
 	$ki = 'This is ki <br>';
 }
echo "$ki";

//$arr = array(1,2,3,4);
foreach ($arr1 as $value) {
	if ("$value" === 'l') {
		echo 'its a L';
	}
	else {
		
    echo '<img src="http://localhost:8888/apps/breaking-bad-generator/images/elements/';
    echo "$value";
    echo '.jpg" >';
}
}

?>