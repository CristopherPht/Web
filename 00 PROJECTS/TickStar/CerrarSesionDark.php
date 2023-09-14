<?php 
	session_start();
	session_destroy();
	header("Location:indexDark.php");
?>