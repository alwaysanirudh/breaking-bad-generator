<?php
/*
$hasImage = array("a", "b", "c", "d", "e");

//$arr = array(1,2,3,4);
foreach ($arr1 as $value) {
if (in_array("$value", $hasImage) {
     echo '<img src="http://localhost:8888/apps/breaking-bad-generator/images/elements/';
     echo "$value";
     echo '.jpg">';

}else{
     echo '$value';
}
}
*/
?>

<?php

$hasimage = array("a", "b", "c", "d", "e");

$arr = array(1,2,3,4);

foreach ($arr as $value) {
	if (in_array($value, $hasimage)){
		echo '<img src="http://localhost:8888/apps/breaking-bad-generator/images/elements/';
		echo "$value";
        echo '.jpg">';
	}
	else echo "$value";
}

?>