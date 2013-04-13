

<?php

//get url

$url = $_SERVER['REQUEST_URI']; 

$end = end((explode('/breakbad.php?fname=', $url)));


$letters = array('A','B','C','D','E','F','G','H','I','J','K',' ');

$replace = $letters;
$word  = $end;

$chars = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g','h', 'i', 'j', 'k', '+' );

$word  = str_replace( $chars, $replace, $word );

echo $word; 




?>



