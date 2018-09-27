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

		$('#incoming_cont').append('<div id="air_flight_'
			+ id_array.flight_no
			+ '_unit" class="flight_unit">'
			+ '<div class="clickable header mid" id="'
			+ id_array.id + '.' + id_array.flight_no + '.header"'
			+ 'onclick="flight_header_clicked(this)">'
			+ id_array['flight_no']
			+ '</div>' 
			+ destination_panel 
			+ flight_inv_menu 
			+ '</div>')

	} else if (id_array['location_type'] == 'flight' && id_array['location'] !== 'airborne' && id_array['flight_origin'] !== 'nil') {
		//for flights preparing to take off

		var flight_inv_menu = '<div class="dropdown_wrapper"> <div id="'+ id_array.flight_no+'_inv_drawer" class="header clickable" onclick="toggleDrawer(this)"><span>Flight Inventory</span> </div><div class="wrapper hidden">'+
				crockery_menu+
				cutlery_menu+
				food_menu+
			'</div></div>';

		$('#outgoing_cont').append('<div id="gnd_flight_'
			+ id_array.flight_no
			+ '_unit" class="flight_unit">'
			+ '<div class="clickable header mid" id="'
			+ id_array.id + '.' + id_array.flight_no + '.header"'
			+ 'onclick="flight_header_clicked(this)">' 
			+ id_array['flight_no'] 
			+ '</div>' 
			+ destination_panel 
			+ flight_inv_menu 
			+ '</div>')

	} else if ((id_array['location_type'] == 'flight' && id_array['location'] !== 'airborne' && id_array['flight_origin'] == 'nil')) {
		//grounded flights, not gonna be displayed
	}
};
