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
$replacements[2] = 'a';
$replacements[1] = 's';
$replacements[0] = '<img src="images/elements/h.jpg">';
echo preg_replace($patterns, $replacements, $string);
?>