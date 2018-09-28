<?php 

	if (isset($_POST['row_no'])) {
		$row_no = $_POST['row_no'];
		$new_loc = $_POST['location'];
		$new_origin = $_POST['origin'];
		$new_destin = $_POST['destin'];
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$link = mysqli_connect($servername, $username, $password, $dbname);

	if (mysqli_connect_error()) {
		die("Error connecting to database" . mysqli_connect_error());
	} else {
		echo "Connection a SUCCESS!";
	}

	$sql2 = 'UPDATE `inv_mgmt2` SET `location`= "'.$new_loc.'", `flight_origin` = "'.$new_origin.'",	`flight_destination` = "'.$new_destin.'" WHERE `id` ='.$row_no;

	$result = mysqli_query($link, $sql2);
	echo $row_no .$new_loc . $new_origin . 	$new_destin;
?>