<?php
   session_start();


//split string into an array
$arr1 = str_split($_SESSION['name']);


//$arr = array(1,2,3,4);
foreach ($arr1 as $value) {
    echo '<img src="http://localhost:8888/apps/breaking-bad-generator/images/elements/';
    echo "$value";
    echo '.jpg" >';
}

?>