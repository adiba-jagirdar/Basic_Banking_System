<?php

	$conn = mysqli_connect('localhost','id16065385_repent','Database@123','id16065385_adiba');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>