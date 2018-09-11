<?php
include('dbt2.php');
?>

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
}
p{
	margin:0px;
}x-fast

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
	height:15vh;
	top:0vh;
}

#interface{
	background-color:grey;
	width:100vw;
	height:85vh;
}
.box{
	background-color:white;
	position: absolute;
	top:16vh;
	width:49vw;
	border:solid 1px black;
}

#base_cont{
	height:80vh;
}
#incoming_cont{
	height:40vh;
	left: 50vw;
}
#outgoing_cont{
	height:40vh;
	left:50vw;
	top: 56vh;
}
.header{
	display: block;
	margin:auto;
	border: solid 1px gray;
	line-height:2vw;
	
}
.mid {
	text-align:center;
}
.base{
	background-color:rgb(235, 238, 244);
	margin: 0.5vw;
	width: 15vw;
	min-height: 20vh;
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

.dropdown_wrapper > .dropdown_wrapper > .header{
	padding-left: 8px;
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
ul {
	margin: 0;
	list-style-type: none;
	padding: 0;
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
		<div class="box" id="base_cont">
			<div class="header mid">Bases</div>
				<div class="row_container_base">
				
					<div class="base">
						<div class="header mid">Singapore</div>
						<div class="incoming dropdown_wrapper">
							<div class="header" onclick="toggleDrawer(this)">
								<span>Incoming Flights</span>
							</div>
							<div class="inc_flight_menu wrapper hidden">
								<div class="flight entry">SQ979<span class="qty">12345</span></div>
								<div class="flight entry">SQ990<span class="qty">1235</span></div>
								<div class="flight entry">SQ981<span class="qty">145</span></div>
							</div>
						</div>
						<div class="outgoing dropdown_wrapper">
							<div class="header" onclick="toggleDrawer(this)">
								<span>Outgoing Flights</span>
							</div>
							<div class="wrapper hidden">
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
								<div class="header" onclick="toggleDrawer(this)">
									<span>Crockery</span>
								</div>
								<div class="wrapper hidden">
									<div class="entry">Size A Plates</div>
									<div class="entry">Size B Plates</div>
									<div class="entry">Size A Bowls</div>
								</div>
							</div>
							<div class="dropdown_wrapper">
								<div class="header" onclick="toggleDrawer(this)">
									<span>Cutlery</span>
								</div>
								<div class="wrapper hidden">
									<div class="entry">Spoons<span class="qty">12345</span></div>
									<div class="entry">Forks<span class="qty">12345</span></div>
									<div class="entry">Knives<span class="qty">12345</span></div>
									<div class="entry">Dessert Spoons<span class="qty">12345</span></div>
								</div>
							</div>
							<div class="dropdown_wrapper">
								<div class="header" onclick="toggleDrawer(this)">
									<span>Food Sets</span>
								</div>
								<div class="wrapper hidden">
									<div class="entry">Business Cl - Chicken</div>
									<div class="entry">Business Cl - Beef</div>
									<div class="entry">Economy Cl - Chicken</div>
									<div class="entry">Economy Cl - Fish</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
		</div>
		<div class="box" id="incoming_cont">
			<div class="header mid">Ongoing Flights</div>

		</div>
		<div class="box" id="outgoing_cont">
			<div class="header mid">Preparing for Take Off</div>

		</div>
	</div>
</div>
<div id="footer">
	<p>Inventory Management System - Proposed by YOND</p>


<script type="text/javascript">
// function toggleDrawer(id) {
// 	  $("#"+id).slideToggle(600, "easeOutQuint");
// };

function toggleDrawer(clicked) {
	$(clicked).next().slideToggle(600, "easeOutQuint");
	  //alert($(this));
};

$(document).ready(function() {
	//printbox2
	$.get("ajaxtest.php", function(responseTxt, statusTxt, xhr){
		$('#taskbar').append("<div class='printbox'>respondTxt: <br>"+ responseTxt + "<br>statusTxt: " + statusTxt+ "</div>");
	});
	
	//printbox3
	$.get("dbt2.php", function(data, status){
		$('#taskbar').append("<div class='printbox'>Retrieved from dbt2: <br>"+data+"</div>");
	});

	//load base names into javascript array
	var location_array = [<?php echo '"'.implode('","', $location_array).'"' ?>];
	
	//Constructor for bases
	for (var i = 0; i <location_array.length; i++) {

		var data = <?php echo mysqli_query($link, $query2);?>
		alert(data);

		var out_flight_menu = '<div class="outgoing dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Outgoing Flights</span> </div> <div class="wrapper hidden"> <div class="flight entry">SQ979</div> <div class="flight entry">SQ990</div> <div class="flight entry">SQ981</div> </div> </div>'
		var inc_flight_menu = '<div class="incoming dropdown_wrapper"><div class="header" onclick="toggleDrawer(this)"><span>Incoming Flights</span></div><div class="wrapper hidden"><div class="flight entry">SQ979<span class="qty">12345</span></div><div class="flight entry">SQ990<span class="qty">1235</span></div><div class="flight entry">SQ981<span class="qty">145</span></div></div></div>';

		var crockery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Crockery</span> </div> <div class="wrapper hidden"> <div class="entry">Size A Plates</div> <div class="entry">Size B Plates</div> <div class="entry">Size A Bowls</div> </div> </div>';

		var cutlery_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Cutlery</span> </div> <div class="wrapper hidden"> <div class="entry">Spoons<span class="qty">12345</span></div> <div class="entry">Forks<span class="qty">12345</span></div> <div class="entry">Knives<span class="qty">12345</span></div> <div class="entry">Dessert Spoons<span class="qty">12345</span></div> </div> </div>';

		var food_menu = '<div class="dropdown_wrapper"> <div class="header" onclick="toggleDrawer(this)"> <span>Food Sets</span> </div> <div  class="wrapper hidden"> <div class="entry">Business Cl - Chicken</div> <div class="entry">Business Cl - Beef</div> <div class="entry">Economy Cl - Chicken</div> <div class="entry">Economy Cl - Fish</div> </div> </div>';

		var base_inv_menu = '<div class="dropdown_wrapper"> <div class="header"> <span>Base Inventory</span> </div>'+ crockery_menu+cutlery_menu + food_menu+'</div>';

		var html_base = '<div class="base"><div class="header mid">'+location_array[i]+'</div>'+inc_flight_menu+out_flight_menu+base_inv_menu+'</div>';

		$('#base_cont').append(html_base);
	};
	
	
});
</script>

</body>

</html>
