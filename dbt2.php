<?php

//constructing using PHP
function construct_bases() {
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

			if ($row['location_type'] == 'base')	{

				$inc_flight_query = "SELECT `flight_no`, `flight_origin` FROM `inv_mgmt2` WHERE `flight_destination` = '".$row['location']."'";
				$inc_flight_div = "";
				if ($inc_flight_result = mysqli_query($link, $inc_flight_query)) {
					//echo "query success";
					if (mysqli_num_rows($inc_flight_result) == 0) {
						$inc_flight_div = '<div class="flight entry mid">no incoming flights</div>';
					} else {
						while ($flight_row = mysqli_fetch_array($inc_flight_result)) {
							//print_r($flight_row);
							$inc_flight_div = $inc_flight_div.'<div class="flight entry" onclick="flight_entry_redirect(\''.$flight_row['flight_no'].'\')">'.$flight_row['flight_no'].'<span class="qty">'.$flight_row['flight_origin'].'</span></div>';
						}
					}
				}
				//echo $inc_flight_div;

				$out_flight_query = "SELECT `flight_no`, `flight_destination` FROM `inv_mgmt2` WHERE `flight_destination` != 'nil' AND `location` = '".$row['location']."'";
				$out_flight_div = "";
				if ($out_flight_result = mysqli_query($link, $out_flight_query)) {
					//echo "query success";
					if (mysqli_num_rows($out_flight_result) == 0) {
						$out_flight_div = '<div class="flight entry mid">no outgoing flights</div>';
					} else {
						while ($flight_row = mysqli_fetch_array($out_flight_result)) {
							//print_r($flight_row);
							$out_flight_div = $out_flight_div.'<div class="flight entry" onclick="flight_entry_redirect(\''.$flight_row['flight_no'].'\')">'.$flight_row['flight_no'].'<span class="qty">'.$flight_row['flight_destination'].'</span></div>';
						}
					}
				}

				$out_flight_menu = '<div class="outgoing dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Outgoing Flights</span> </div> <div class="wrapper hidden">'.$out_flight_div.'</div> </div>';

				$inc_flight_menu = '<div class="incoming dropdown_wrapper"><div class="header" onclick="toggleDrawer(this)"><span>Incoming Flights</span></div><div class="wrapper hidden">'.$inc_flight_div.'</div></div>';

				$crockery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Crockery</span> </div> <div class="wrapper hidden"> <div class="entry">Size A Plates<span class="qty">'.$row['size_a_plates'].'</span></div> <div class="entry">Size B Plates<span class="qty">'.$row['size_b_plates'].'</span></div> <div class="entry">Size A Bowls<span class="qty">'.$row['size_a_bowls'].'</span></div> </div> </div>';

				$cutlery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Cutlery</span> </div> <div class="wrapper hidden"> <div class="entry">Spoons<span class="qty">'.$row['spoons'].'</span></div> <div class="entry">Forks<span class="qty">'.$row['forks'].'</span></div> <div class="entry">Knives<span class="qty">'.$row['knives'].'</span></div> <div class="entry">Dessert Spoons<span class="qty">'.$row['dessert_spoons'].'</span></div> </div> </div>';

				$food_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Food Sets</span> </div> <div  class="wrapper hidden"> <div class="entry">Business Cl - Chicken<span class="qty">'.$row['busi_chicken'].'</span></div> <div class="entry">Business Cl - Beef<span class="qty">'.$row['busi_beef'].'</span></div> <div class="entry">Economy Cl - Chicken<span class="qty">'.$row['econ_chicken'].'</span></div> <div class="entry">Economy Cl - Fish<span class="qty">'.$row['econ_fish'].'</span></div> </div> </div>';

				$base_inv_menu = '<div class="dropdown_wrapper"> <div class="header"> <span>Base Inventory</span> </div>'.
						$crockery_menu.
						$cutlery_menu.
						$food_menu.
					'</div>';


				echo '<div class="base">
					<div class="header mid">'.$row['location'].'</div>'.
						$inc_flight_menu.
						$out_flight_menu.
						$base_inv_menu.
				'</div>'
					;
			};

		}
	}
};



function construct_airborne() {
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

			if ($row['location_type'] == 'flight' && $row['location'] == 'airborne') {

				$destination_panel = '<div class="dest_display"><span>'.$row['flight_origin'].'</span> to <span>'.$row['flight_destination'].'</span></div>';

				$crockery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Crockery</span> </div> <div class="wrapper hidden"> <div class="entry">Size A Plates<span class="qty">'.$row['size_a_plates'].'</span></div> <div class="entry">Size B Plates<span class="qty">'.$row['size_b_plates'].'</span></div> <div class="entry">Size A Bowls<span class="qty">'.$row['size_a_bowls'].'</span></div> </div> </div>';

				$cutlery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Cutlery</span> </div> <div class="wrapper hidden"> <div class="entry">Spoons<span class="qty">'.$row['spoons'].'</span></div> <div class="entry">Forks<span class="qty">'.$row['forks'].'</span></div> <div class="entry">Knives<span class="qty">'.$row['knives'].'</span></div> <div class="entry">Dessert Spoons<span class="qty">'.$row['dessert_spoons'].'</span></div> </div> </div>';

				$food_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Food Sets</span> </div> <div  class="wrapper hidden"> <div class="entry">Business Cl - Chicken<span class="qty">'.$row['busi_chicken'].'</span></div> <div class="entry">Business Cl - Beef<span class="qty">'.$row['busi_beef'].'</span></div> <div class="entry">Economy Cl - Chicken<span class="qty">'.$row['econ_chicken'].'</span></div> <div class="entry">Economy Cl - Fish<span class="qty">'.$row['econ_fish'].'</span></div> </div> </div>';

				$flight_inv_menu = '<div class="dropdown_wrapper"> <div id="'.$row['flight_no'].'_inv_drawer" class="header" onclick="toggleDrawer(this)"> <span>Flight Inventory</span></div><div class="wrapper hidden">'.
						$crockery_menu.
						$cutlery_menu.
						$food_menu.
					'</div></div>';

				echo '<div class="base">
					<div class="header mid">'.$row['flight_no'].'</div>'.
						$destination_panel.
						$flight_inv_menu.
				'</div>'
					;
						
			};
		}
	}

}

function construct_landed() {
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

			if ($row['location_type'] == 'flight' && $row['location'] !== 'airborne' && $row['flight_destination'] !== 'nil') {

				$destination_panel = '<div class="dest_display"><span>'.$row['flight_origin'].'</span> to <span>'.$row['flight_destination'].'</span></div>';

				$crockery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Crockery</span> </div> <div class="wrapper hidden"> <div class="entry">Size A Plates<span class="qty">'.$row['size_a_plates'].'</span></div> <div class="entry">Size B Plates<span class="qty">'.$row['size_b_plates'].'</span></div> <div class="entry">Size A Bowls<span class="qty">'.$row['size_a_bowls'].'</span></div> </div> </div>';

				$cutlery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Cutlery</span> </div> <div class="wrapper hidden"> <div class="entry">Spoons<span class="qty">'.$row['spoons'].'</span></div> <div class="entry">Forks<span class="qty">'.$row['forks'].'</span></div> <div class="entry">Knives<span class="qty">'.$row['knives'].'</span></div> <div class="entry">Dessert Spoons<span class="qty">'.$row['dessert_spoons'].'</span></div> </div> </div>';

				$food_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Food Sets</span> </div> <div  class="wrapper hidden"> <div class="entry">Business Cl - Chicken<span class="qty">'.$row['busi_chicken'].'</span></div> <div class="entry">Business Cl - Beef<span class="qty">'.$row['busi_beef'].'</span></div> <div class="entry">Economy Cl - Chicken<span class="qty">'.$row['econ_chicken'].'</span></div> <div class="entry">Economy Cl - Fish<span class="qty">'.$row['econ_fish'].'</span></div> </div> </div>';

				$flight_inv_menu = '<div class="dropdown_wrapper"> <div id="'.$row['flight_no'].'_inv_drawer" class="header" onclick="toggleDrawer(this)"> <span>Flight Inventory</span></div><div class="wrapper hidden">'.
						$crockery_menu.
						$cutlery_menu.
						$food_menu.
					'</div></div>';

				echo '<div class="base">
					<div class="header mid">'.$row['flight_no'].'</div>'.
						$destination_panel.
						$flight_inv_menu.
				'</div>'
					;

			}
		}
	}
};


echo "printbox test";

?>