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

<div id="console" class="hidden" onclick="">
	<div id="console_dropper" class="clickable" onclick="toggleConsoleDrawer()">X</div>
	<div id="console_display_title">TEST</div>
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
	<div id="console_inv_table">
		<div class="console_inv_category">
			<div class="console header">Crockery</div>
			<div class="console entry">Item Name
				<div class="limit_div">Warning Limit</div>
				<div class="qty">Amount</div>
			</div>
			<div class="console_inv_col_grp">
				<div class="console entry">Size A Plates
					
					<div class="qty limit_div">
						<!--<div id="2.size_a_plates.console_limit.edit_btn" class="console edit_btn" onclick="change_val_btn_clicked(this)"></div>-->

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

<div id="footer">
	<p>Inventory Management System - Proposed by YOND</p>
	<div id="loader"></div>
</div>


<!-- <script type="text/javascript" src="index_js.php">
	//TEST PLACEHOLDER
	// <?php include('index_js.php'); ?>
</script> -->


<script src="index_click.js"></script>
<script src="index_constructor.js"></script>

<script type="text/javascript">
// $(document).ready(function() {


alert('javascript working');


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

function update_flight_status(old_multi_dim_data, new_multi_dim_data) {
	//Check length
	//some code

	//same length:
	for (var i = 0; i < new_multi_dim_data.length; i++) {
		
		if (new_multi_dim_data[i].location_type == 'flight') {
			//Get flight status
			var old_status = get_flight_status(old_multi_dim_data[i]);
			var new_status = get_flight_status(new_multi_dim_data[i]);
			
			//check if flight status is equal
			if (!arrays_equal(old_status, new_status)) {
				//REMOVE ALL FLIGHT DIVS

				//INSERT NEW FLIGHT DIVS
			}
		}
		// if (check_flight_status(old_multi_dim_data[i]) !== check_flight_status(new_multi_dim_data[i])) {

		// 	// alert('changed');

		// 	if (check_flight_status(old_multi_dim_data[i]) == 1 && check_flight_status(new_multi_dim_data[i]) == 2) {
		// 		//flight has new destination
		// 		//execute
				
		// 		constructor(new_multi_dim_data[i]);
		// 		insert_flight_divs(new_multi_dim_data[i]);
		// 		alert('1 to 2');

		// 	} else if (check_flight_status(old_multi_dim_data[i]) == 2 && check_flight_status(new_multi_dim_data[i]) == 3) {
		// 		//flight has just taken off
		// 		//execute

		// 		constructor(new_multi_dim_data[i]);
		// 		var id = '#flight_2_'+new_multi_dim_data[i].flight_no+'_cont';
		// 		alert(id);
		// 		$(id).remove();
				
		// 	} else if (check_flight_status(old_multi_dim_data[i]) == 3 && check_flight_status(new_multi_dim_data[i]) == 1) {
		// 		//flight has just landed
		// 		//execute
		// 		alert('3 to 1');

		// 		var id = '#flight_3_'+old_multi_dim_data[i].flight_no+'_cont';
		// 		$(id).remove();
		// 		remove_flight_divs(new_multi_dim_data[i]);

		// 	} else {
		// 		// alert('illegal');
		// 	}
		// 	update_flight_dividers();
		// }
	}
};

//FLIGHT CHECKS & UPDATING 
function insert_flight_divs(id_array) {
	var f_no = id_array.flight_no;
	var destin = id_array.flight_destination;
	var origin = id_array.flight_origin;
	var target_inc_flight_wrapper = '#'+destin+'_inc_flight_wrapper'
	var target_out_flight_wrapper = '#'+origin+'_out_flight_wrapper';
	
	//insert destination div
	if ($(target_inc_flight_wrapper).html() == default_inc_flight_div) {
		$(target_inc_flight_wrapper).html('<div id="'+f_no+'_inc_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">FROM : '+origin+'</span></div>')
	} else {
		$(target_inc_flight_wrapper).append('<div id="'+f_no+'_inc_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">FROM : '+origin+'</span></div>')
	};

	//IF the flight is not yet airborne
	if (id_array.location !== 'airborne') {
		//insert origin div
		if ($(target_out_flight_wrapper).html() == default_out_flight_div) {
			$(target_out_flight_wrapper).html('<div id="'+f_no+'_out_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">TO   : '+destin+'</span></div>')
		} else {
			$(target_out_flight_wrapper).append('<div id="'+f_no+'_out_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">TO   : '+destin+'</span></div>')
		};
	}
};

function remove_flight_divs(id_array) {
	var f_no = id_array.flight_no;
	var destin = id_array.flight_destination;
	var origin = id_array.flight_origin;
	var target_inc_flight_wrapper = '#'+destin+'_inc_flight_wrapper'
	var target_out_flight_wrapper = '#'+origin+'_out_flight_wrapper';

	//remove destination div
	$('#'+f_no+'_inc_flight_div').remove();
	if (target_inc_flight_wrapper.html() == "") {
		target_inc_flight_wrapper.html(default_inc_flight_div);
	}

	//remove origin div
	$('#'+f_no+'_out_flight_div').remove();
	if (target_out_flight_wrapper.html() == "") {
		target_out_flight_wrapper.html(default_out_flight_div);
	}
};

function update_flight_dividers() {
	$('.flight_divider').remove();
	var inc_count = 0;
	$('#incoming_cont').children('.flight_unit').each(function(){
		inc_count++;
		if (inc_count % 3 == 0) {
			$(this).after('<div class="flight_divider"></div>');
		}
	});
	var out_count = 0;
	$('#outgoing_cont').children('.flight_unit').each(function(){
		out_count++;
		if (out_count % 3 == 0) {
			$(this).after('<div class="flight_divider"></div>');
		}
	});
}


// function check_flight_status(id_array) {
// 	if (id_array.location_type == 'flight') {
// 		if (id_array.flight_destination == 'nil') {
// 			//no destination
// 			$('#pbfs'+id_array.id).html("F.S."+id_array.id+":  <br>1");
// 			return 1;
// 		} else if (id_array.location !== 'airborne') {
// 			//has destination, not airborne

// 			$('#pbfs'+id_array.id).html("F.S."+id_array.id+":  <br>2");
// 			return 2;
// 		} else {
// 			//airborne
// 			$('#pbfs'+id_array.id).html("F.S."+id_array.id+":  <br>3");
// 			return 3;
// 		} 
// 	}
// }

//RETURN ASSOCIATIVE ARRAY of flight location, origin & destination
function get_flight_status(id_array) {
	if (id_array.location_type == 'flight') {
		var arr = [ id_array.location, id_array.flight_origin, id_array.flight_destination ];
		return arr;
	}
}

	let multi_dim_data = <?php echo json_encode($nested_array); ?>;
	
	// $('#taskbar').append("<div id='multi_dim_data_printbox' class='printbox'>Retrieved from dbt2: <br>"+multi_dim_data[multi_dim_data.length - 1]['location']+"<br>"+
	// 	multi_dim_data[3].location+"<br>"+
	// 	multi_dim_data.length+
	// 	"</div>");

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
		}

		//ASSUMING BASES are all constructed before flights
		if (get_flight_status(multi_dim_data[i]) !== 1) {
			insert_flight_divs(multi_dim_data[i]);
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


// });

</script>

</body>

</html>