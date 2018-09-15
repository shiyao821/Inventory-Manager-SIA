<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$link = mysqli_connect($servername, $username, $password, $dbname);

		if (mysqli_connect_error()) {
			die("Error connecting to database" . mysqli_connect_error());
		} else {
			//echo "Connection a SUCCESS!<br>";
		}
	
	$query = "SELECT * FROM `inv_mgmt2`";

	if ($result = mysqli_query($link, $query)) {

		while ($row = mysqli_fetch_array($result)) {
			$nested_array[] = $row;
		}
	}
	
//echo "printbox test";
echo json_encode($nested_array);


//IMPORTANT!!! NEVER EVER rearrange the order of the bases/flights of the database. only add new rows!. NEver delete any! put 'nil' if flightno is retired.

?>