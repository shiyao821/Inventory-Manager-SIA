<?php 

	if (isset($_POST['row_no'])) {
		$row_no = $_POST['row_no'];
		$col = $_POST['col'];
		$new_qty = $_POST['new_qty'];
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$link = mysqli_connect($servername, $username, $password, $dbname);

	if (mysqli_connect_error()) {
		die("Error connecting to database" . mysqli_connect_error());
	} else {
		echo "Connection a SUCCESS!<br>";
	}

	$sql = 'UPDATE `inv_mgmt2` SET `'.$col.'`='.$new_qty.' WHERE `id` ='.$row_no;

	$result = mysqli_query($link, $sql);
?>