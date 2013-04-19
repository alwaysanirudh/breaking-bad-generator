<?php

session_start();
$string = str_split($_SESSION['name']);

//Array of images, must contain all characters and double characters
$hasImage = array("br","n");

//Array of double letter combinations
$dblLetter = array('br');

$length = count($string);

//Loop through string and search for double letters
// setting counter
$j = 0;

for ($i=0; $i<$length;) { 
	 
// concatanation
$tmpStr = $string[$i] . $string[$i+1];

//if $tmpStr is in array put the double letter combo into the first element or $newString array 
 if (in_array($tmpStr, $dblLetter)) {
 
 $newString[$j] = $tmpStr; 
 $i = $i+2;
 $j = $j+1;
 } 
 else { 
 //If double letter combo doesnt exist put the i'th letter (first one from the combo) in the i'th
 //position in the array
   $newString[$j] = $string[$i];
   $i = $i+1;
   $j = $j+1;	
 }
}
//Go through elements of array, search for letter with pic, if exists print pic, if doesnt print letter
foreach ($newString as $value){
 if (in_array($value, $hasImage)){
   echo '<img src="http://localhost:8888/apps/breaking-bad-generator/images/elements/';
   echo $value;
   echo '.jpg" >';
 }
 else {
   echo $value;
 }
}

?>