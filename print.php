<?php
session_start();
require_once('header.php');

$tmpStr = strtolower($_POST['name']);

// perhaps meth as a magic word

$string = str_split($tmpStr);

$singleLetter = array('b','c','f','h','i','k','n','o','p','s','u','v','w','y');

$dblLetter = array(
	'ac','ag','al','am','ar','as','at','au','ba','be','bh','bi',
	'bk','br','ca','cd','ce','cf','cl','cm','cn','co','cr','cs',
	'cu','db','ds','dy','er','es','eu','fe','fm','fr','ga','gd',
	'ge','he','hf','hg','ho','hs','in','ir','kr','la','li','lr',
	'lu','md','mg','mn','mo','mt','na','nb','nd','ne','ni','no',
	'np','os','pa','pb','pd','pm','po','pr','pt','pu','ra','rb',
	're','rf','rg','rh','rn','ru','sb','sc','se','sg','si','sm',
	'sn','sr','ta','tb','tc','te','th','ti','tl','tm','xe','yb',
	'zn','zr');

$triLetter = array(
	'ubb','ube','ubh','ubn','ubo','ubp','ubq','ubs','ubt','ubu',
	'upb','upn','upt','upu','uqb','uqe','uqh','uqn','uqo','uqp',
	'uqq','uqs','uqt','uqu','utb','ute','uth','utn','uto','utp',
	'utq','uts','utt','utu','uue','uuh','uuo','uup','uuq','uus',
	'uut');

$length = count($string);

//Triple letters
$j=0;

for ($i=0; $i<$length;) { 
	 
	// concatanation
	$tmpStr1 = $string[$i] . $string[$i+1] . $string[$i+2];
	$tmpStr2 = $string[$i] . $string[$i+1];

	//if $tmpStr is in array put the double letter combo into the first element or $newString array 
	if (in_array($tmpStr1, $triLetter)) {

	 	$newString[$j] = $tmpStr1; 
	 	$i = $i+3;
	 	$j++;
 	
 	} elseif (in_array($tmpStr2, $dblLetter)) {
 
 		$newString[$j] = $tmpStr2; 
 		$i = $i+2;
 		$j++;

 	} else { 
 		
 		//if double letter combo doesnt exist put the i'th letter (first one from the combo) in the i'th
 		//position in the array
   		$newString[$j] = $string[$i];
   		$i++;
   		$j++;
 	}
}

$hasimage = array_merge($singleLetter, $dblLetter, $triLetter);

//go through elements of array, search for letter with pic, if exists print pic, if doesnt print letter
foreach ($newString as $value){
 if (in_array($value, $hasimage)){
   echo '<img src="images/elements/';
   echo $value;
   echo '.png" >';
 }else{
   echo $value;
 }
}

session_destroy();

?>
<?php require_once 'footer.php'; ?>
