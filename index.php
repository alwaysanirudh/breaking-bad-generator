<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="elements.css">

</head>
<body>
<?php 
  require_once("session_file.php");
    
?>
<strong>Test Form</strong>
<form action="" method="post">
<input type="text" name="name"/>
<input type="submit" name="Submit" value="Submit!" />
</form>
<?php



 if (isset($_POST['Submit'])) { 
 $_SESSION['name'] = $_POST['name'];
 } 

 $break = $_SESSION['name'];


$string = "$break";

$patterns = array();
$patterns[0] = '/a/';
$patterns[1] = '/b/';
$patterns[2] = '/c/';
$patterns[3] = '/d/';
$patterns[4] = '/e/';
$patterns[5] = '/f/';
$patterns[6] = '/g/';
$patterns[7] = '/h/';
$patterns[8] = '/i/';
$patterns[9] = '/j/';
$patterns[10] = '/k/';
$patterns[11] = '/l/';
$patterns[12] = '/m/';
$patterns[13] = '/n/';
$patterns[14] = '/o/';
$patterns[15] = '/p/';
$patterns[16] = '/q/';
$patterns[17] = '/r/';
$patterns[18] = '/s/';
$patterns[19] = '/t/';
$patterns[20] = '/u/';
$patterns[21] = '/v/';
$patterns[22] = '/w/';
$patterns[23] = '/x/';
$patterns[24] = '/y/';
$patterns[25] = '/z/';

$replacements = array();
$replacements[0] = 'a';
$replacements[1] = '<img src="images/elements/b.jpg">';
$replacements[2] = '<img src="images/elements/c.jpg">';
$replacements[3] = 'd';
$replacements[4] = 'e';
$replacements[5] = 'f';
$replacements[6] = 'g';
$replacements[7] = '<img src="images/elements/h.jpg">';
$replacements[8] = 'i';
$replacements[9] = 'j';
$replacements[10] = 'k';
$replacements[11] = 'l';
$replacements[12] = 'm';
$replacements[13] = '<img src="images/elements/n.jpg">';
$replacements[14] = '<img src="images/elements/o.jpg">';
$replacements[15] = 'p';
$replacements[16] = 'q';
$replacements[17] = 'r';
$replacements[18] = 's';
$replacements[19] = 't';
$replacements[20] = 'u';
$replacements[21] = 'v';
$replacements[22] = 'w';
$replacements[23] = 'x';
$replacements[24] = 'y';
$replacements[25] = 'z';

echo preg_replace($patterns, $replacements, $string);
?>
</body>
</html>