<?php

	$conn = mysqli_connect('localhost','root','','BBS1');

	if(!$conn){
		die("Error --> ".mysqli_connect_error());
	}

?>