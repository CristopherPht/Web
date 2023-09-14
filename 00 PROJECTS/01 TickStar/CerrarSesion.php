<?php 
	session_start();
	session_destroy();
	header("Location:indexV2.php");
?>