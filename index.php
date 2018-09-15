<!-- <?php
	include('dbt2.php');
//	print_r($nested_array);
?> -->

<html>

<head>
	<script src="jquery-3.1.1.min.js"></script>
	<script src="jquery.easing.1.3.js"></script>
	<script src="jquery-ui.min.js"></script>
	<script src="angular.min.js"></script>
<style>
#footer{
	position:fixed;
	height: 20px;
	bottom:0px;
	background-color:rgb(65, 79, 104);
	width: 100%;
	text-align:center;
	color:rgb(235, 238, 244);
}

body{
	margin:0px;
	padding:0px;
	background-color:rgb(65, 79, 104);
	overflow-x:hidden;
}
p{
	margin:0px;
}

#logPnl{
	background-color:rgb(65, 79, 104);
	color:rgb(235, 238, 244);
	width:300px;
	height:100vh;
	margin:0px;
	position:fixed;
	z-index:-1;
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
	background-color: white;
	padding-bottom: 30px;
}

.box{
	background-color:white;
	top:16vh;
	padding-bottom: 30px;
}

#base_cont{
	min-height:80vh;
	width:62vw;
}

#incoming_cont{
	min-height:35vh;
	left: 63vw;
	width:37vw;
}
#outgoing_cont{
	min-height:35vh;
	left:63vw;
	top: 50%;
	width:37vw;
}
.header{
	border: solid 1px gray;
	line-height:2vw;
	text-align:center;
}
.mid {
	text-align:center;
}

.dest_display{
	line-height:2vw;
	text-align: center;
	border: solid 1px gray;
}
.base{
	background-color:rgb(235, 238, 244);
	margin: 0.5vw;
	width: 14vw;
	min-height: 10vh;
	float: left;
}
.dropdown_wrapper{
	min-height: 2vw;
	position: relative;
	display:block;
}

.entry {
	min-height: 1.5vw;
	padding-left:8px;
	display:block;
	border-bottom: 1px dashed gray;
}


.flight {
	background-color:rgb(200, 238, 230);
	line-height:2vw;
}
.incoming{
	background-color:rgb(100, 238, 200);
}
.outgoing{
	background-color:rgb(238, 100, 200);
}

.hidden{
  display: none;
}
.row_container_base{
	width:100%;
	overflow: hidden;
}
.printbox{
	float:left;
	height:100%;
	border: dashed 1px white;
}
.qty{
	padding-right: 5px;
	float:right;
}

</style>

</head>

<body>
<!--
<div id="logPnl">
<h3>Console</h3>
<p id="console"></p>
</div>
-->
<div id="content">
	<div id="taskbar">
	<div class="printbox">Printbox1</div>
	</div>
	<div id="interface">
		<div class="interface_cell">
			<div class="box" id="base_cont">
				<div class="header mid">Bases</div>
					<div class="row_container_base">
					<?php echo construct_bases() ?>
					</div>
				</div>
		</div>
		<div class="interface_cell">
			<div class="box" id="incoming_cont">
				<div class="header mid">Ongoing Flights</div>
				<?php echo construct_airborne() ?>
			</div>
			<div class="box" id="outgoing_cont">
				<div class="header mid">Preparing for Take Off</div>
				<?php echo construct_landed() ?>
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

function toggleDrawer(clicked) {
	$(clicked).next().slideToggle(600, "easeOutQuint");
	  //alert($(this));
};

function flight_entry_redirect(flight_no) {
	toggleDrawer($('#'+flight_no+'_inv_drawer'));
	//alert('clicked');
};

//Constructor
function constructor(id_array){
	if (id_array['location_type'] == 'base') {
		//for bases
	} else if (id_array['location_type'] == 'flight' && id_array['location'] == 'airborne'){
		//for airborne flights
	} else if (id_array['location_type'] == 'flight' && id_array['location'] !== 'airborne' && id_array['flight_origin'] !== 'nil') {
		//for flights preparing to take off
	} else if ((id_array['location_type'] == 'flight' && id_array['location'] !== 'airborne' && id_array['flight_origin'] == 'nil')) {
		//grounded flights, not gonna be displayed
	}
};

$(document).ready(function() {
	//printbox2
	$.get("dbt2.php", function(data, status){
		$('#taskbar').append("<div class='printbox'>Retrieved from dbt2: <br>"+data+"</div>");
	});

	var multi_dim_data = <?php echo json_encode($nested_array); ?>;


	
	$('#taskbar').append("<div id='multi_dim_data_printbox' class='printbox'>Retrieved from dbt2: <br>"+multi_dim_data[multi_dim_data.length - 1]['location']+"<br>"+
		multi_dim_data[3].location+"<br>"+
		multi_dim_data.length+
		"</div>");

	setInterval (function(){
		$("#loader").load("dbt2_updater.php", function(responseText){
			multi_dim_data = JSON.parse(responseText);
		//alert("updated");
		});
		$("#multi_dim_data_printbox").html("Retrieved from dbt2: <br>"+multi_dim_data[multi_dim_data.length - 1]['location']+"<br>"+
		multi_dim_data.length+
		"</div>");

		// for (var id in multi_dim_data) {
		// 	if 
		// }
	}, 1000);



	
});
</script>

</body>

</html>