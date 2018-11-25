<?php 
	//@TODO Add logout code
	
	session_start();
	session_destroy();
	session_abort();
	header('Location:index.php');

?>