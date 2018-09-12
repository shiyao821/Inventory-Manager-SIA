<?php

$link = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
	die("Error connecting to database" . mysqli_connect_error());
} else {
	echo "Connection a SUCCESS!<br>";
}


//constructing using PHP
function construct_bases() {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$link = mysqli_connect($servername, $username, $password, $dbname);
	$query2 = "SELECT * FROM `inv_mgmt2`";

	if ($result = mysqli_query($link, $query2)) {
		while ($row = mysqli_fetch_array($result)) {
			$out_flight_menu = '<div class="outgoing dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Outgoing Flights</span> </div> <div class="wrapper hidden"> <div class="flight entry">SQ979</div> <div class="flight entry">SQ990</div> <div class="flight entry">SQ981</div> </div> </div>';

			$inc_flight_menu = '<div class="incoming dropdown_wrapper"><div class="header" onclick="toggleDrawer(this)"><span>Incoming Flights</span></div><div class="wrapper hidden"><div class="flight entry">SQ979<span class="qty">12345</span></div><div class="flight entry">SQ990<span class="qty">1235</span></div><div class="flight entry">SQ981<span class="qty">145</span></div></div></div>';

			$crockery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Crockery</span> </div> <div class="wrapper hidden"> <div class="entry">Size A Plates<span class="qty">'.$row['size_a_plates'].'</span></div> <div class="entry">Size B Plates<span class="qty">'.$row['size_b_plates'].'</span></div> <div class="entry">Size A Bowls<span class="qty">'.$row['size_a_bowls'].'</span></div> </div> </div>';

			$cutlery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Cutlery</span> </div> <div class="wrapper hidden"> <div class="entry">Spoons<span class="qty">'.$row['spoons'].'</span></div> <div class="entry">Forks<span class="qty">'.$row['forks'].'</span></div> <div class="entry">Knives<span class="qty">'.$row['knives'].'</span></div> <div class="entry">Dessert Spoons<span class="qty">'.$row['dessert_spoons'].'</span></div> </div> </div>';

			$food_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Food Sets</span> </div> <div  class="wrapper hidden"> <div class="entry">Business Cl - Chicken<span class="qty">'.$row['busi_chicken'].'</span></div> <div class="entry">Business Cl - Beef<span class="qty">'.$row['busi_beef'].'</span></div> <div class="entry">Economy Cl - Chicken<span class="qty">'.$row['econ_chicken'].'</span></div> <div class="entry">Economy Cl - Fish<span class="qty">'.$row['econ_fish'].'</span></div> </div> </div>';

			$base_inv_menu = '<div class="dropdown_wrapper"> <div class="header"> <span>Base Inventory</span> </div>'.
					$crockery_menu.$cutlery_menu.$food_menu.
				'</div>';


			echo '<div class="base">
				<div class="header mid">'.$row['location'].'</div>'.
					$inc_flight_menu.
					$out_flight_menu.
					$base_inv_menu.
			'</div>'
				;
		}
	}
};


?>