<!-- <?php
	include('dbt2_updater.php');
?> -->

<html>

<head>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="jquery.easing.1.3.js"></script>
	<script src="jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>
<div id="content">
	<div id="taskbar">
		<img id="img_logo" src="SIA_logo.jpg" alt="SIA logo">
		<div id="title">Inventory Management System</div>
		<!-- <div class="printbox">Printbox1</div> -->
			<div id="title_holder">
				<div id="username_display">User 1</div>
				<div id="job_title_display">Inventory Manager</div>
			</div>
			<img id="portrait" src="portrait_placeholder.png">
		
	</div>
	<div id="interface">
		<div class="interface_cell">
			<div class="box" id="base_cont">
				<div class="header mid">Bases</div>

				</div>
		</div>
		<div class="interface_cell">
			<div class="box" id="incoming_cont">
				<div class="header mid">Ongoing Flights</div>
				
			</div>
			<div class="box" id="outgoing_cont">
				<div class="header mid">Preparing for Take Off</div>
				
			</div>
		</div>
	</div>
</div>

<div id="console" class="hidden">
	<div id="console_base" class="hidden" onclick="">
		<div id="console_dropper" class="small_button clickable_2" onclick="toggleConsoleDrawer()">X</div>
		<div class="console_top_info_wrapper">
			<div id="console_display_title" class="console_display_title">TEST</div>
			<div id="console_flight_strip_wrapper">
				
				<div id="inc_flight_strip" class="console_flight_strip">
					<div class="console_flight_strip_name">Incoming Flights</div>
					<div class="console_flight_div_wrapper" id="inc_flight_div_wrapper"></div>
				</div>
				
				<div id="base_flight_strip" class="console_flight_strip">
					<div class="console_flight_strip_name">Planes at Base</div>
					<div class="console_flight_div_wrapper" id="base_flight_div_wrapper"></div>
				</div>

				<div id="out_flight_strip" class="console_flight_strip">
					<div class="console_flight_strip_name">Outgoing Flights</div>
					<div class="console_flight_div_wrapper" id="out_flight_div_wrapper"></div>
				</div>	

			</div>
		</div>
		<div class="console_inv_table">
			<div class="console_inv_category">
				<div class="console header">Crockery</div>
				<div class="console entry">Item Name
					<div class="limit_div">Warning Limit</div>
					<div class="qty">Amount</div>
				</div>
				<div class="console_inv_col_grp">
					<div class="console entry">Size A Plates
						
						<div class="qty limit_div">
							<span id="2.size_a_plates.console_limit" class="console data qty" ondblclick="change_val(this)" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.size_a_plates.console" class="console data qty" ondblclick="change_val(this)">
							test
						</span>
						
					</div>
			
					<div class="console entry">Size B Plates
						<div class="qty limit_div">
							<span id="1.size_b_plates.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.size_b_plates.console" class="console data qty" ondblclick="change_val(this)">
							test2
						</span>
					</div>
			
					<div class="console entry">Size A Bowls
						<div class="qty limit_div">
							<span id="1.size_a_bowls.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
							
						</div>
						<span id="1.size_a_bowls.console" class="console data qty" ondblclick="change_val(this)">
							test3
						</span>
					</div>
					<div style="background-color: rgb(249, 159, 28); width: 100%; text-align: center; color:black; line-height:1.5vw; border: dashed 1.5px black">Double-click the numbers above to change it!</div>
				</div>
			</div>
			<div class="console_inv_category">
				<div class="console header">Cutlery</div>
				<div class="console entry">Item Name
					<div class="limit_div">Warning Limit</div>
					<div class="qty">Amount</div>
				</div>
				<div class="console_inv_col_grp">
					<div class="console entry">Spoons
						<div class="qty limit_div">
							<span id="1.spoons.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.spoons.console" class="console data qty" ondblclick="change_val(this)">
							test
						</span>
					</div>
			
					<div class="console entry">Forks
						<div class="qty limit_div">
							<span id="1.forks.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.forks.console" class="console data qty" ondblclick="change_val(this)">
							test2
						</span>
					</div>
			
					<div class="console entry">Knives
						<div class="qty limit_div">
							<span id="1.knives.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.knives.console" class="console data qty" ondblclick="change_val(this)">
							test3
						</span>
					</div>
					<div class="console entry">Dessert Spoons
						<div class="qty limit_div">
							<span id="1.dessert_spoons.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.dessert_spoons.console" class="console data qty" ondblclick="change_val(this)">
							test4
						</span>
					</div>
				</div>
			</div>
			<div class="console_inv_category">
				<div class="console header">Food Sets</div>
				<div class="console entry">Item Name
					<div class="limit_div">Warning Limit</div>
					<div class="qty">Amount</div>
				</div>
				<div class="console_inv_col_grp">
					<div class="console entry">Business Class - Chicken
						<div class="qty limit_div">
							<span id="1.busi_chicken.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.busi_chicken.console" class="console data qty" ondblclick="change_val(this)">
							test
						</span>
					</div>
			
					<div class="console entry">Business Class - Beef
						<div class="qty limit_div">
							<span id="1.busi_beef.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.busi_beef.console" class="console data qty" ondblclick="change_val(this)">
							test2
						</span>
					</div>
			
					<div class="console entry">Economy Class - Chicken
						<div class="qty limit_div">
							<span id="1.econ_chicken.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.econ_chicken.console" class="console data qty" ondblclick="change_val(this)">
							test3
						</span>
					</div>
					<div class="console entry">Economy Class - Fish
						<div class="qty limit_div">
							<span id="1.econ_fish.console_limit" class="console data qty" ondblclick="change_val(this)">
								test2
							</span>
						</div>
						<span id="1.econ_fish.console" class="console data qty" ondblclick="change_val(this)">
							test4
						</span>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<div id="console_flight" class="hidden">
		<div class="console_top_info_wrapper">
			<div id="console_dropper" class="small_button clickable_2" onclick="toggleConsoleDrawer()">X</div>
			<div id="console_flight_display_title" class="console_display_title">TEST</div>
			<div id="console_flight_status_wrapper">
				<div id="console_flight_location" class="">Currently At</div>
				<div id="console_flight_path" class=""> Flying from: </div>	
			</div>
			<div id="console_flight_status_change_btn" class="big_button clickable_2">Change Status</div>
			
		</div>
		<div class="console_inv_table">
			<div class="console_inv_category">
				<div class="console header">Crockery</div>
				<div class="console entry">Item Name
					<div class="qty">Amount</div>
				</div>
				<div class="console_inv_col_grp">
					<div class="console entry">Size A Plates
						<span id="1.size_a_plates.console" class="console data qty" ondblclick="change_val(this)">
							test
						</span>
						
					</div>
			
					<div class="console entry">Size B Plates
						<span id="1.size_b_plates.console" class="console data qty" ondblclick="change_val(this)">
							test2
						</span>
					</div>
			
					<div class="console entry">Size A Bowls
						<span id="1.size_a_bowls.console" class="console data qty" ondblclick="change_val(this)">
							test3
						</span>
					</div>
					<div style="background-color: rgb(249, 159, 28); width: 100%; text-align: center; color:black; line-height:1.5vw; border: dashed 1.5px black">Double-click the numbers above to change it!</div>
				</div>
			</div>
			<div class="console_inv_category">
				<div class="console header">Cutlery</div>
				<div class="console entry">Item Name
					<div class="qty">Amount</div>
				</div>
				<div class="console_inv_col_grp">
					<div class="console entry">Spoons
						<span id="1.spoons.console" class="console data qty" ondblclick="change_val(this)">
							test
						</span>
					</div>
			
					<div class="console entry">Forks
						<span id="1.forks.console" class="console data qty" ondblclick="change_val(this)">
							test2
						</span>
					</div>
			
					<div class="console entry">Knives
						<span id="1.knives.console" class="console data qty" ondblclick="change_val(this)">
							test3
						</span>
					</div>
					<div class="console entry">Dessert Spoons
						<span id="1.dessert_spoons.console" class="console data qty" ondblclick="change_val(this)">
							test4
						</span>
					</div>
				</div>
			</div>
			<div class="console_inv_category">
				<div class="console header">Food Sets</div>
				<div class="console entry">Item Name
					<div class="qty">Amount</div>
				</div>
				<div class="console_inv_col_grp">
					<div class="console entry">Business Class - Chicken
						<span id="1.busi_chicken.console" class="console data qty" ondblclick="change_val(this)">
							test
						</span>
					</div>
			
					<div class="console entry">Business Class - Beef
						<span id="1.busi_beef.console" class="console data qty" ondblclick="change_val(this)">
							test2
						</span>
					</div>
			
					<div class="console entry">Economy Class - Chicken
						<span id="1.econ_chicken.console" class="console data qty" ondblclick="change_val(this)">
							test3
						</span>
					</div>
					<div class="console entry">Economy Class - Fish
						<span id="1.econ_fish.console" class="console data qty" ondblclick="change_val(this)">
							test4
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="footer">
	<p>Inventory Management System - Proposed by YOND</p>
	<div id="loader"></div>
</div>

<script src="index_click.js"></script>
<script src="index_constructor.js"></script>
<script src="index_flight.js"></script>

<script type="text/javascript">
// $(document).ready(function() {
var console_base_no = 1;
var console_flight_no = 1;

// alert('javascript working');

function change_val(clicked){
	var elem_id = clicked.id;
	var arr = elem_id.split(".");
	var row_no = arr[0];
	var col = arr[1];
	var value = $(clicked).html();
	$(clicked).replaceWith('<input id="changing" type="text" value="' + value + '" />');
	$('#changing').focus();
	$('#changing').keyup(function(event) {
		if (event.which == 13) {
			var new_qty = $('#changing').val().trim();
			$('#changing').replaceWith(clicked);
			$(clicked).html(new_qty);

			//Change Database Data
			$.post("dbt2_edit.php", {
				row_no: row_no,
				col: col,
				new_qty: new_qty
			}, function(data, status) {
				//alert('Requesst sent!');
			})
		}
	})
}

//UPDATING ALL DATA VALUES
function update_data(bigdata) {
	//HIGHLIGHT PARENT SUBHEADER if data under it is highlighted
	function subheader_check() {
		$('.subheader').each(function(i, element){
			if ($(this).next().children().hasClass('warning')) {
				$(this).addClass('warning');
			} else {
				$(this).removeClass('warning');
			}
		})
	}

	$('span.data').each(function(i, element){
		var arr = this.id.split(".");
		var id = arr[0] - 1;
		var col = arr[1];
		var new_qty = bigdata[id][col];
		$(this).html(new_qty);
		
		//check for base inv limit
		if (bigdata[id]['location_type'] == 'base') {
			if (parseInt(new_qty) <= bigdata[id + 1][col]) {
				$(this).parent().addClass('warning');
			} else {
				$(this).parent().removeClass('warning');
			}
			subheader_check();
		}
	});
};

function arrays_equal(array1, array2) {
	if (array1.length == array2.length) {
		var checker = true;
		for (var i = 0; i < array1.length; i++) {
			if (array1[i] == array2[i]) {
				checker = true;
			} else {
				return false;
			}
		}
		return true;
	} else {
		return false;
	}
}

let multi_dim_data = <?php echo json_encode($nested_array); ?>;


var old_multi_dim_data = "";

// INITIAL CONSTRUCT

for (var i = 0; i < multi_dim_data.length; i++) {
	//add divider for every 4 bases
	if (multi_dim_data[i].location_type !== 'flight') {
		if ((i + 1) % 8 == 0) {
			$('#base_cont').append('<div class="base_divider"></div>');
			constructor(multi_dim_data[i]);
		} else {
			constructor(multi_dim_data[i]);
		}
	} else {
		//construct for flights
		constructor(multi_dim_data[i]);
		
		//DISPLAY FLIGHT STATUS
		// $('#taskbar').append("<div id='pbfs"+(i+1)+"' class='printbox'>F.S."+(i+1)+":  <br></div>");

		//ASSUMING BASES are all constructed before flights
		if (multi_dim_data[i].location == 'airborne') {
			insert_base_incoming_flight_div(multi_dim_data[i]);
		} else if (multi_dim_data[i].flight_destination !== 'nil') {
			insert_base_outgoing_flight_div(multi_dim_data[i]);
		}
	}

	
}; 
update_flight_dividers();

// REAL TIME FUNCTIONS
setInterval (function(){
	
	$("#loader").load("dbt2_updater.php", function(responseText){
		old_multi_dim_data = multi_dim_data;
		multi_dim_data = JSON.parse(responseText);
		update_flight_status(old_multi_dim_data, multi_dim_data);
		update_data(multi_dim_data);
		
		//DISPLAY
		$("#multi_dim_data_printbox").html("multi_dim_data_printbox: <br>"+
		old_multi_dim_data[8].location+"<br>"+
		multi_dim_data[8].location+
		"</div>");
	});
	

}, 1000);


// $('#taskbar').append("<div id='multi_dim_data_printbox' class='printbox'>Retrieved from dbt2: <br>"+multi_dim_data[multi_dim_data.length - 1]['location']+"<br>"+
// 	multi_dim_data[3].location+"<br>"+
// 	multi_dim_data.length+
// 	"</div>");

// });

</script>

</body>

</html>