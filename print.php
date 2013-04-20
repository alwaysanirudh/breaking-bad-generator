<?php

session_start();
$string = str_split($_SESSION['name']);

$singleLetter = array('B','C','F','H','I','K','N','O','P','S','U','V','W','Y');

$dblLetter = array(
	'Ac','Ag','Al','Am','Ar','As','At','Au','Ba','Be','Bh','Bi',
	'Bk','Br','Ca','Cd','Ce','Cf','Cl','Cm','Cn','Co','Cr','Cs',
	'Cu','Db','Ds','Dy','Er','Es','Eu','Fe','Fm','Fr','Ga','Gd',
	'Ge','He','Hf','Hg','Ho','Hs','In','Ir','Kr','La','Li','Lr',
	'Lu','Md','Mg','Mn','Mo','Mt','Na','Nb','Nd','Ne','Ni','No',
	'Np','Os','Pa','Pb','Pd','Pm','Po','Pr','Pt','Pu','Ra','Rb',
	'Re','Rf','Rg','Rh','Rn','Ru','Sb','Sc','Se','Sg','Si','Sm',
	'Sn','Sr','Ta','Tb','Tc','Te','Th','Ti','Tl','Tm','Xe','Yb'
	'Zn','Zr');

$triLetter = array(
	'Ubb','Ube','Ubh','Ubn','Ubo','Ubp','Ubq','Ubs','Ubt','Ubu',
	'Upb','Upn','Upt','Upu','Uqb','Uqe','Uqh','Uqn','Uqo','Uqp',
	'Uqq','Uqs','Uqt','Uqu','Utb','Ute','Uth','Utn','Uto','Utp',
	'Utq','Uts','Utt','Utu','Uue','Uuh','Uuo','Uup','Uuq','Uus',
	'Uut');

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
 $j++;
 }else{ 
 //If double letter combo doesnt exist put the i'th letter (first one from the combo) in the i'th
 //position in the array
   $newString[$j] = $string[$i];
   $i++;
   $j++;	
 }
}

//Triple letters
$j=0;

for ($i=0; $i<$length;) { 
	 
// concatanation
$tmpStr = $string[$i] . $string[$i+1] . $string[$i+2];

//if $tmpStr is in array put the double letter combo into the first element or $newString array 
 if (in_array($tmpStr, $triLetter)) {
 
 $newString[$j] = $tmpStr; 
 $i = $i+3;
 $j++;
 }else{ 
 //If double letter combo doesnt exist put the i'th letter (first one from the combo) in the i'th
 //position in the array
   $newString[$j] = $string[$i];
   $i++;
   $j++;
 }
}

$hasImage = array_merge($singleLetter, $dblLetter, $triLetter);

//Go through elements of array, search for letter with pic, if exists print pic, if doesnt print letter
foreach ($newString as $value){
 if (in_array($value, $hasImage)){
   echo '<img src="http://localhost:8888/apps/breaking-bad-generator/images/elements/';
   echo $value;
   echo '.jpg" >';
 }else{
   echo $value;
 }
}

session_destroy();

?>