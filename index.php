<?php
session_start();
require_once('header.php');
?>

<form action="print.php" method="post">
<input type="text" name="name"/>
<input type="submit" name="Submit" value="Submit!" />
</form>

<?php require_once 'footer.php'; ?>
