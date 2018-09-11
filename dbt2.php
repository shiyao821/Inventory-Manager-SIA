<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
	die("Error connecting to database");
} else {
	echo "Connection a SUCCESS!<br>";
}
//SELECT location, quantity FROM inv_mgmt WHERE location_type = flight

$query = "SELECT `location` FROM `inv_mgmt2` WHERE `location_type` = 'base'";
$query2 = "SELECT `spoons` FROM `inv_mgmt2` WHERE `id` = 1";
$result = mysqli_query($link, $query);

$location_array = array();
while ($row = mysqli_fetch_array($result)) {
	$location_array[] = $row['location'];
};
$location_array  = array_unique($location_array);
print_r($location_array);

?>