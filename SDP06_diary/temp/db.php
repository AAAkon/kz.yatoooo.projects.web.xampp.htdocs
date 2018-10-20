<?php
	$connection = new mysqli("localhost","root","","sdp06diary");
	if($connection->connect_error){
		echo "<br>Connection error!<br>";
		echo "Please, check your DataBase connection!<br>";
	}
?>