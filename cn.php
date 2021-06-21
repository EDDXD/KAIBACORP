<?php

	$user="nonxxorg_godxd";
	$pass="Walpurg1z$$";
	$server="localhost";
	$db="nonxxorg_YUGICORP";

	$con=mysqli_connect($server,$user,$pass,$db);

	if (!$con) {
		die(' Error papi'.mysqli_error($con));
	}


?>