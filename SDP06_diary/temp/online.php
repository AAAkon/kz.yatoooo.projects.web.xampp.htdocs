<?php 
	$online = false;
	session_start();

	if(isset($_SESSION['user_id']) && isset($_SESSION['user_password'])){
		$online = true;
	}
?>