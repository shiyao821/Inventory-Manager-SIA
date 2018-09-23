<!-- <?php
	include('dbt2_updater.php');
?> -->

<html>

<head>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="jquery.easing.1.3.js"></script>
	<script src="jquery-ui.min.js"></script>
	<!-- <script src="angular.min.js"></script> -->
<style>

body{
	margin:0px;
	padding:0px;
	background-color:rgb(0, 38, 107);
	overflow-x:hidden;
	font-family: Helvetica;
}
p{
	margin:0px;
}

#content{
	width:100vw;
}

#taskbar{);
	color:rgb(235, 238, 244);
	width:100vw;
	height:70px;
	top:0vh;
}

#interface{
	position: absolute;
	background-color:grey;
	width:100vw;
	min-height:85vh;
	display: table-row;
}

.interface_cell{
	display: table-cell;
	background-color: rgb(70, 70, 70);
	padding-bottom: 30px;
}

.box{
	background-color:rgb(70, 70, 70);
	padding-bottom: 30px;
	/*border-left: solid 1px rgb(249, 159, 28);*/
}

#base_cont{
	min-height:80vh;
	width:62vw;
}

#incoming_cont{
	min-height:35vh;
	left: 63vw;
	width:37vw;
	overflow: auto;
}
#outgoing_cont{
	min-height:35vh;
	left:63vw;
	width:37vw;
	overflow:auto;
}
.header{
	/*border-bottom: solid 1px rgb(249, 159, 28);*/
	line-height:2vw;
	text-align:center;
}
.dropdown_wrapper > .header:after{
	content: "";
	display: block;
	margin: 0 auto;
	width: 95%;
	border-bottom: solid 1px rgb(249, 159, 28);
}
.box > .header{
	background-color: white;
}

.dropdown_wrapper{
	position: relative;
	display:block;
}
.subheader{
	line-height: 1.5vw;
	text-align: center;
	/*border-bottom: solid 1px rgb(187, 129, 48);*/
	font-size: 14px;
}
.subheader:after{
	content: "";
	display: block;
	margin: 0 auto;
	width: 85%;
	border-bottom: solid 1px rgb(187, 129, 48);
}
.mid {
	text-align:center;
}

.dest_display{
	line-height:2vw;
	text-align: center;
	border-bottom: solid 1px rgb(249, 159, 28);
}
.base_unit{
	background-color:rgb(55, 55, 55);
	margin: 0.4vw;
	padding: 0.3vw;
	width: 14vw;
	min-height: 10vh;
	float: left;
	color: rgb(240, 240, 240);
}
.base_unit > .header{
	color: rgb(249, 159, 28);
	border: solid 1.5px rgb(249, 159, 28);
	font-size: 120%;
}

.flight_unit > .header{
	color: rgb(249, 159, 28);
	border: solid 1.5px rgb(249, 159, 28);
	font-size: 120%;
}

.flight_unit{
	background-color:rgb(55, 55, 55);
	margin: 0.4vw;
	padding: 0.4vw;
	width: 10vw;
	min-height: 10vh;
	float: left;
	color: rgb(240, 240, 240);
	font-size: 14px;
}

.base_divider{
	background-color: rgb(50, 50, 50);
	width:90%;
	height: 2px;
	float:left;
	margin-left: 5%;
}

.flight_divider{
	background-color: rgb(50, 50, 50);
	width:90%;
	height: 2px;
	float:left;
	margin-left: 5%
}

.entry {
	min-height: 1.5vw;
	padding-left:8px;
	display:block;
	border-bottom: 1px dashed gray;
	font-size: 12px;
	line-height: 1.5vw;
}

.flight {
	background-color:rgb(80, 80, 80);
	line-height:1.5vw;
}

.incoming{
	/*background-color:rgb(100, 238, 200);*/
	color:rgb(230, 200, 200);
}
.outgoing{
	/*background-color:rgb(238, 100, 200);*/
	color:rgb(218, 200, 150);
}

.hidden{
  display: none;
}
.row_container_base{
	width:100%;
	overflow: hidden;
}
.printbox{
	float:right;
	height:100%;
	border: dashed 1px white;
}
.qty{
	padding-right: 5px;
	float:right;
}

.warning{
	color: rgb(250, 50, 50);
	border-bottom-color: rgb(250, 80, 50);
}

#img_logo{
	height: 100%;
	margin-left: 50px;
	float: left;
}

#title{
	float:left;
	margin-left: 30px;
	line-height: 70px;
	font-size: 30px;
}

#footer{
	position:fixed;
	height: 20px;
	bottom:0px;
	background-color:rgb(0, 38, 107);
	width: 100%;
	text-align:center;
	color:rgb(235, 238, 244);
	font-family: Times New Roman;
}

#console{
	background-color:rgb(0, 38, 107);
	color:rgb(235, 238, 244);
	padding-top: 20px;
	width:100%;
	height:300px;
	position:fixed;
	z-index:1;
	bottom: 20px;
}

#console_display_title{
	width: 12vw;
	font-size: 70px;
	font-weight: bold;
	margin-left: 6vw;
	float: left;
}

#console_flight_strip_wrapper{
	margin-left: 6vw;
	float: left;
	margin-bottom: 20px;
}

.console_flight_strip{
	width: 70vw;
	line-height: 25px;
	border: dashed 1px gray;
}

#console_inv_table{
	display: table;
	height: 180px;
	border: dashed 1px gray;
	width: 90%;
	margin: auto;
}
.console_inv_category{
	display: table-cell;
	border: dashed 1px gray;
}
.console_inv_col_grp{
	height: 100%;
}

#console_dropper {
	height:30px;
	width: 30px;
	margin-right: 20px;
	background-color: rgb(249, 159, 28);
	float: right;
}

.clickable:hover{
	color: rgb(100, 138, 207);
	cursor: pointer;
	border-color: rgb(100, 138, 207);
}

</style>

</head>

<body>
<div id="content">
	<div id="taskbar">
		<img id="img_logo" src="SIA_logo.jpg" alt="SIA logo">
		<div id="title">Inventory Management System</div>
		<div class="printbox">Printbox1</div>
	</div>
	<div id="interface">
		<div class="interface_cell">
			<div class="box" id="base_cont">
				<div class="header mid" onclick="toggleConsoleDrawer()">Bases</div>

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
	<div id="console_dropper" class="clickable" onclick="toggleConsoleDrawer()"> </div>
	<div id="console_display_title">TEST</div>
	<div id="console_flight_strip_wrapper">
		<div class="console_flight_strip">Incoming Flights</div>
		<div class="console_flight_strip">Planes at Base</div>
		<div class="console_flight_strip">Outgoing Flights</div>
	</div>
	<div id="console_inv_table">
		<div class="console_inv_category">
			<div class="header">Crockery</div>
			<div class="console_inv_col_grp">
				<div class="entry">Size A Plates
					<span id="size_a_plates" class="console data qty">
						test
					</span>
				</div>
		
				<div class="entry">Size B Plates
					<span id="size_b_plates" class="console data qty">
						test2
					</span>
				</div>
		
				<div class="entry">Size A Bowls
					<span id="size_a_bowls" class="console data qty">
						test3
					</span>
				</div>
			</div>
		</div>
		<div class="console_inv_category">
			<div class="header">Cutlery</div>
			<div class="console_inv_col_grp">
				<div class="entry">Spoons
					<span id="spoons" class="console data qty">
						test
					</span>
				</div>
		
				<div class="entry">Forks
					<span id="forks" class="console data qty">
						test2
					</span>
				</div>
		
				<div class="entry">Knives
					<span id="knives" class="console data qty">
						test3
					</span>
				</div>
				<div class="entry">Dessert Spoons
					<span id="dessert_spoons" class="console data qty">
						test4
					</span>
				</div>
			</div>
		</div>
		<div class="console_inv_category">
			<div class="header">Food Sets</div>
			<div class="console_inv_col_grp">
				<div class="entry">Business Class - Chicken
					<span id="busi_chicken" class="console data qty">
						test
					</span>
				</div>
		
				<div class="entry">Business Class - Beef
					<span id="busi_beef" class="console data qty">
						test2
					</span>
				</div>
		
				<div class="entry">Economy Class - Chicken
					<span id="econ_chicken" class="console data qty">
						test3
					</span>
				</div>
				<div class="entry">Economy Class - Fish
					<span id="econ_fish" class="console data qty">
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


<script type="text/javascript">
alert('javascript working');

//CLICKING FUNCTIONS
function toggleDrawer(clicked) {
	$(clicked).next().slideToggle(600, "easeOutQuint");
	  //alert($(this));
};

function toggleConsoleDrawer(clicked) {
	$('#console').slideToggle(600, "easeOutQuint");
	  //alert($(this));
};


function flight_entry_redirect(flight_no) {
	toggleDrawer($('#'+flight_no+'_inv_drawer'));
	//alert('clicked');
};

function base_header_clicked(clicked) {
	$('#console_display_title').html($(clicked).html());
	var arr = clicked.id.split(".");
	var base_no = arr[0];
	$('span.console.data').each(function(){
		var arr2 = this.id.split(".");
		if ($.isNumeric(arr2[0])) {
			this.id = base_no + '.' + arr2[arr2.length - 2] + '.' + arr2[arr2.length - 1];			
		} else {
			this.id = base_no + '.' + this.id + '.' + 'console';
		}
	});
	if ($('#console').is(':hidden')) {
		toggleConsoleDrawer();
	};
}


//Constructor
var default_inc_flight_div = '<div class="flight entry mid">No Incoming Flights</div>';
var default_out_flight_div = '<div class="flight entry mid">No Outgoing Flights</div>';

function constructor(id_array){
	//templates
	var templateholder = 0;
		var crockery_menu = '<div class="dropdown_wrapper"> <div class="subheader clickable" onclick="toggleDrawer(this)">'+
		'<span>Crockery</span> </div>'+
		'<div class="wrapper hidden">'+
		'<div class="entry">Size A Plates'+
		
		'<span id="'+id_array.id+'.size_a_plates" class="data qty">'+
		id_array['size_a_plates']+
		'</span></div>'+
		
		'<div class="entry">Size B Plates'+
		'<span id="'+id_array.id+'.size_b_plates" class="data qty">'+
		id_array['size_b_plates']+
		'</span></div>'+
		
		'<div class="entry">Size A Bowls'+
		'<span id="'+id_array.id+'.size_a_bowls" class="data qty">'+
		id_array['size_a_bowls']+
		'</span></div>'+
		'</div> </div>';

		var cutlery_menu = '<div class="dropdown_wrapper"> <div class="subheader clickable" onclick="toggleDrawer(this)">'+
		'<span>Cutlery</span></div>'+
		'<div class="wrapper hidden">'+

		'<div class="entry">Spoons'+
		'<span id="'+id_array.id+'.spoons" class="data qty">'+
		id_array['spoons']+
		'</span></div>'+

		'<div class="entry">Forks'+
		'<span id="'+id_array.id+'.forks" class="data qty">'+
		id_array['forks']+
		'</span></div>'+

		'<div class="entry">Knives'+
		'<span id="'+id_array.id+'.knives" class="data qty">'+
		id_array['knives']+
		'</span></div>'+
		'<div class="entry">Dessert Spoons'+
		'<span id="'+id_array.id+'.dessert_spoons" class="data qty">'+
		id_array['dessert_spoons']+
		'</span></div>'+
		'</div> </div>';

		var food_menu = '<div class="dropdown_wrapper"> <div class="subheader clickable" onclick="toggleDrawer(this)">'+
		'<span>Food Sets</span> </div>'+
		'<div class="wrapper hidden">'+
		
		'<div class="entry">BusnCl - Chic'+
		'<span id="'+id_array.id+'.busi_chicken" class="data qty">'+
		id_array['busi_chicken']+
		'</span></div>'+
		
		'<div class="entry">BusnCl - Beef'+
		'<span id="'+id_array.id+'.busi_beef" class="data qty">'+
		id_array['busi_beef']+
		'</span></div>'+

		'<div class="entry">EconCl - Chic'+
		'<span id="'+id_array.id+'.econ_chicken" class="data qty">'+
		id_array['econ_chicken']+
		'</span></div>'+

		'<div class="entry">EconCl - Fish'+
		'<span id="'+id_array.id+'.econ_fish" class="data qty">'+id_array['econ_fish']+
		'</span></div>'+
		'</div></div>';

		var destination_panel = '<div class="dest_display"><span>' +
		id_array['flight_origin'] +
		'</span> to <span>' +
		id_array['flight_destination'] +
		'</span></div>';

	//Check type
	if (id_array['location_type'] == 'base') {
		//for bases

		var inc_flight_div = default_inc_flight_div;

		var out_flight_div = default_out_flight_div;
		
		var out_flight_menu = '<div class="outgoing dropdown_wrapper"> <div class="header clickable" onclick="toggleDrawer(this)"> <span>Outgoing Flights</span> </div> <div id="'+id_array.location+'_out_flight_wrapper" class="wrapper hidden">' +out_flight_div + '</div> </div>';

		var inc_flight_menu = '<div class="incoming dropdown_wrapper"><div class="header clickable" onclick="toggleDrawer(this)"><span>Incoming Flights</span></div><div id="'+id_array.location+'_inc_flight_wrapper" class="wrapper hidden">'+inc_flight_div+'</div></div>';

		var base_inv_menu = '<div class="dropdown_wrapper"> <div class="header"> <span>Base Inventory</span> </div>'+
				crockery_menu+
				cutlery_menu+
				food_menu+
			'</div>';


		$('#base_cont').append('<div id="'+
			id_array.id + '.' + id_array.location +
			'"class="base_unit"> <div class="header mid clickable" id="'+
			id_array.id + '.' + id_array.location + '.header' +
			'" onclick="base_header_clicked(this)">'+ 
			id_array['location'] + '</div>' + 
			inc_flight_menu + 
			out_flight_menu + 
			base_inv_menu + 
			'</div>');

	} else if (id_array['location_type'] == 'flight' && id_array['location'] == 'airborne'){
		//for airborne flights
		
		var flight_inv_menu = '<div class="dropdown_wrapper"> <div id="'+ id_array.flight_no+'_inv_drawer" class="header clickable" onclick="toggleDrawer(this)"><span>Flight Inventory</span> </div><div class="wrapper hidden">'+
				crockery_menu+
				cutlery_menu+
				food_menu+
			'</div></div>';

		$('#incoming_cont').append('<div id="flight_3_'+id_array.flight_no+'_cont" class="flight_unit"> <div class="header mid">' + id_array['flight_no'] + '</div>' + destination_panel + flight_inv_menu + '</div>')

	} else if (id_array['location_type'] == 'flight' && id_array['location'] !== 'airborne' && id_array['flight_origin'] !== 'nil') {
		//for flights preparing to take off

		var flight_inv_menu = '<div class="dropdown_wrapper"> <div id="' + id_array.flight_no+'_inv_drawer" class="header clickable" onclick="toggleDrawer(this)"><span>Flight Inventory</span> </div><div class="wrapper hidden">'+
				crockery_menu+
				cutlery_menu+
				food_menu+
			'</div></div>';

		$('#outgoing_cont').append('<div id="flight_2_'+id_array.flight_no+'_cont" class="flight_unit"> <div class="header mid">' + id_array['flight_no'] + '</div>' + destination_panel + flight_inv_menu + '</div>')

	} else if ((id_array['location_type'] == 'flight' && id_array['location'] !== 'airborne' && id_array['flight_origin'] == 'nil')) {
		//grounded flights, not gonna be displayed
	}
};

//UPDATING ALL DATA VALUES
function update_data(bigdata) {
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

//FLIGHT CHECKS & UPDATING 
function insert_flight_divs(id_array) {
	var f_no = id_array.flight_no;
	var destin = id_array.flight_destination;
	var origin = id_array.flight_origin;
	var target_inc_flight_wrapper = '#'+destin+'_inc_flight_wrapper'
	var target_out_flight_wrapper = '#'+origin+'_out_flight_wrapper';
	
	//insert destination div
	if ($(target_inc_flight_wrapper).html() == default_inc_flight_div) {
		$(target_inc_flight_wrapper).html('<div id="'+f_no+'_inc_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">'+origin+'</span></div>')
	} else {
		$(target_inc_flight_wrapper).append('<div id="'+f_no+'_inc_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">'+origin+'</span></div>')
	};

	//insert origin div
	if ($(target_out_flight_wrapper).html() == default_out_flight_div) {
		$(target_out_flight_wrapper).html('<div id="'+f_no+'_out_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">'+destin+'</span></div>')
	} else {
		$(target_out_flight_wrapper).append('<div id="'+f_no+'_out_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">'+destin+'</span></div>')
	};
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

function update_flight_status(old_multi_dim_data, new_multi_dim_data) {
	//Check length
	//some code

	//same length:
	for (var i = 0; i < new_multi_dim_data.length; i++) {
		if (check_flight_status(old_multi_dim_data[i]) !== check_flight_status(new_multi_dim_data[i])) {

			// alert('changed');

			if (check_flight_status(old_multi_dim_data[i]) == 1 && check_flight_status(new_multi_dim_data[i]) == 2) {
				//flight has new destination
				//execute
				
				constructor(new_multi_dim_data[i]);
				insert_flight_divs(new_multi_dim_data[i]);
				alert('1 to 2');

			} else if (check_flight_status(old_multi_dim_data[i]) == 2 && check_flight_status(new_multi_dim_data[i]) == 3) {
				//flight has just taken off
				//execute

				constructor(new_multi_dim_data[i]);
				var id = '#flight_2_'+new_multi_dim_data[i].flight_no+'_cont';
				alert(id);
				$(id).remove();
				
			} else if (check_flight_status(old_multi_dim_data[i]) == 3 && check_flight_status(new_multi_dim_data[i]) == 1) {
				//flight has just landed
				//execute
				alert('3 to 1');

				var id = '#flight_3_'+old_multi_dim_data[i].flight_no+'_cont';
				$(id).remove();
				remove_flight_divs(new_multi_dim_data[i]);

			} else {
				alert('illegal');
			}
			update_flight_dividers();
		}

	}
};

function check_flight_status(id_array) {
	if (id_array.location_type == 'flight') {

		if (id_array.flight_destination == 'nil') {
			//no destination
			$('#pbfs'+id_array.id).html("F.S."+id_array.id+":  <br>1");
			return 1;
		} else if (id_array.location !== 'airborne') {
			//no destination, not airborne

			$('#pbfs'+id_array.id).html("F.S."+id_array.id+":  <br>2");
			return 2;
		} else {
			//airborne
			$('#pbfs'+id_array.id).html("F.S."+id_array.id+":  <br>3");
			return 3;
		} 
	}
}

$(document).ready(function() {

	let multi_dim_data = <?php echo json_encode($nested_array); ?>;
	
	$('#taskbar').append("<div id='multi_dim_data_printbox' class='printbox'>Retrieved from dbt2: <br>"+multi_dim_data[multi_dim_data.length - 1]['location']+"<br>"+
		multi_dim_data[3].location+"<br>"+
		multi_dim_data.length+
		"</div>");

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
			$('#taskbar').append("<div id='pbfs"+(i+1)+"' class='printbox'>F.S."+(i+1)+":  <br></div>");
		}

		//ASSUMING BASES are all constructed before flights
		if (check_flight_status(multi_dim_data[i]) !== 1) {
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


});
</script>

</body>

</html>