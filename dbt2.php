<?php

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
//SELECT location, quantity FROM inv_mgmt WHERE location_type = flight
//mysql_close();

$query = "SELECT `location` FROM `inv_mgmt2` WHERE `location_type` = 'base'";
$query2 = "SELECT * FROM `inv_mgmt2`";
$result = mysqli_query($link, $query2);

$location_array = array();
$location_details = array();
while ($row = mysqli_fetch_array($result)) {
	//print_r($row);
	$location_array[] = $row['location'];
	foreach ($row as $key => $field) {
		$location_details[$key] = $field;
	};
};

//print_r($location_details);
print "<br>Can this work as 
well as it should?";

function get_details($location) {
	//connection
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$link = mysqli_connect($servername, $username, $password, $dbname);

	//declare holder array
	$location_details = array();

	$query_detail = "SELECT * FROM `inv_mgmt2` WHERE `location` = '".mysqli_escape_string($link, $location)."'";
	//execute query
	$result = mysqli_query($link, $query_detail);
	$row = mysqli_fetch_array($result);
		//below gives an associated array
		//echo '$arr = array("'.implode('", "', $row).'");';
		// print_r ($row);
	print_r ($row);
};
//get_details('SIN');



// print <<<END 
// I'm told that this
// would work too as it uses 'here document' syntax.
// END;

?>