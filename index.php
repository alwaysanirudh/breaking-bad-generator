<?php
   session_start();

 if (isset($_POST['Submit'])) { 
 $_SESSION['name'] = $_POST['name'];
 header("Location: print.php"); /* Redirect browser */

}
?>
<style type="text/css">
	.element-wrapper {
		background: #000;
		color: #fff;
		float: left;
		margin:0px 10px 0px 0px;

	}
</style>
<form action="" method="post">
<input type="text" name="name"/>
<input type="submit" name="Submit" value="Submit!" />
</form>


