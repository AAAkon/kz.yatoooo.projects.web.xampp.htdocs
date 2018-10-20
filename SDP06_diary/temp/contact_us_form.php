<?php

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$connection->query("INSERT INTO contact_us(id,first_name,last_name,email,phone,message) VALUES(NULL,\"$first_name\",\"$last_name\",\"$email\",\"$phone\",\"$message\") ");

	
	header("Location:?page=contact_us&message");
?>