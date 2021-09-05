<?php
	$conn = new mysqli("localhost","root","","bquiet_supermart");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>