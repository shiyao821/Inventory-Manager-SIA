<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
	die("Error connecting to database");
} else {
	//echo "Connection a SUCCESS!<br>";
}
//SELECT location, quantity FROM inv_mgmt WHERE location_type = flight

$query = "SELECT `location` FROM `inv_mgmt` WHERE `location_type` = 'base'";
$result = mysqli_query($link, $query);
$location_array = array();
while ($row = mysqli_fetch_array($result)) {
	$location_array[] = $row['location'];
};
$location_array  = array_unique($location_array);
//print_r($location_array);


/*
<div class="base">
						<div class="header mid">Singapore</div>
						<div class="incoming dropdown_wrapper">
							<div class="header" onclick="toggleDrawer('inc-flight-menu')">
								<span>Incoming Flights</span>
							</div>
							<div id="inc-flight-menu" class="wrapper hidden">
								<div class="flight entry">SQ979<span class="qty">12345</span></div>
								<div class="flight entry">SQ990<span class="qty">1235</span></div>
								<div class="flight entry">SQ981<span class="qty">145</span></div>
							</div>
						</div>
						<div class="outgoing dropdown_wrapper">
							<div class="header" onclick="toggleDrawer('out-flight-menu')">
								<span>Outgoing Flights</span>
							</div>
							<div id="out-flight-menu" class="wrapper hidden">
								<div class="flight entry">SQ979</div>
								<div class="flight entry">SQ990</div>
								<div class="flight entry">SQ981</div>
							</div>
						</div>
						<div class="dropdown_wrapper">
							<div class="header">
								<span>Base Inventory</span>
							</div>
							
							<div class="dropdown_wrapper">
								<div class="header" onclick="toggleDrawer('crockery-menu')">
									<span>Crockery</span>
								</div>
								<div id="crockery-menu" class="wrapper hidden">
									<div class="entry">Size A Plates</div>
									<div class="entry">Size B Plates</div>
									<div class="entry">Size A Bowls</div>
								</div>
							</div>
							<div class="dropdown_wrapper">
								<div class="header" onclick="toggleDrawer('cutlery-menu')">
									<span>Cutlery</span>
								</div>
								<div id="cutlery-menu" class="wrapper hidden">
									<div class="entry">Spoons<span class="qty">12345</span></div>
									<div class="entry">Forks<span class="qty">12345</span></div>
									<div class="entry">Knives<span class="qty">12345</span></div>
									<div class="entry">Dessert Spoons<span class="qty">12345</span></div>
								</div>
							</div>
							<div class="dropdown_wrapper">
								<div class="header" onclick="toggleDrawer('foodset-menu')">
									<span>Food Sets</span>
								</div>
								<div id="foodset-menu" class="wrapper hidden">
									<div class="entry">Business Cl - Chicken</div>
									<div class="entry">Business Cl - Beef</div>
									<div class="entry">Economy Cl - Chicken</div>
									<div class="entry">Economy Cl - Fish</div>
								</div>
							</div>
							
						</div>
					</div>

*/
?>