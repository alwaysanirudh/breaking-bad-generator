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

?>
<?php
$string = "$break";
$patterns = array();
$patterns[0] = '/a/';
$patterns[1] = '/s/';
$patterns[2] = '/h/';
$replacements = array();
$replacements[2] = '<div id="no-element-wrapper"><div id="no-element-inner">a</div></div>';
$replacements[1] = '<div id="no-element-wrapper"><div id="no-element-inner">s</div></div>';
$replacements[0] = '<div class="element-wrapper"><div class="element-top-left">1.008</div><div class="element-top-right">-1</div><div class="element-name">H</div><div class="element-bottom-one">1</div><div class="element-bottom-two">1</div></div>';
echo preg_replace($patterns, $replacements, $string);
?>
</body>
</html>