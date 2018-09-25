//RETURN ASSOCIATIVE ARRAY of flight location, origin & destination
function get_flight_status(id_array) {
	if (id_array.location_type == 'flight') {
		var arr = [ id_array.flight_no, id_array.location, id_array.flight_origin, id_array.flight_destination ];
		return arr;
	}
}

//Compares new matrix with old matrix to update flight data presentation
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
				//REMOVE ALL FLIGHT DIVS ========================================
				var f_no = old_status[0];
				var loc = old_status[1];
				var origin = old_status[2];
				var destin = old_status[3];
				var target_inc_flight_wrapper = '#'+destin+'_inc_flight_wrapper'
				var target_out_flight_wrapper = '#'+origin+'_out_flight_wrapper';

				//remove div at destination base's incoming
				$('#'+f_no+'_inc_flight_div').remove();
				if ($(target_inc_flight_wrapper).html() == "") {
					$(target_inc_flight_wrapper).html(default_inc_flight_div);
				}

				//remove div at origin base's outgoing
				$('#'+f_no+'_out_flight_div').remove();
				if ($(target_out_flight_wrapper).html() == "") {
					$(target_out_flight_wrapper).html(default_out_flight_div);
				}

				//remove airborne flight unit div
				var air_id = '#air_flight_'+new_multi_dim_data[i].flight_no+'_unit';
				$(air_id).remove();
				//remove ground flight unit div (prep for take off)
				var gnd_id = '#gnd_flight_'+new_multi_dim_data[i].flight_no+'_unit';
				$(gnd_id).remove();

				//remove div from console
				var console_id = '#console_div_'+multi_dim_data[i].flight_no;
				$(console_id).remove();

				//INSERT NEW FLIGHT DIVS========================================

				var f_no = new_status[0];
				var loc = new_status[1];
				var origin = new_status[2];
				var destin = new_status[3];

				//Case 1
				if ( loc !== 'airborne' && destin == 'nil') {
					//alert('one new plane on the ground');
				
				//case 2
				} else if ( loc !== 'airborne' && destin !== 'nil') {
				
					//insert div at origin base's outgoing
					insert_base_outgoing_flight_div(new_multi_dim_data[i]);
					// alert('one new flight charted. plane ready for take off');
				
				//case 3
				} else if ( loc == 'airborne' && destin !== 'nil') {
				
					//insert div at destination base's incoming
					insert_base_incoming_flight_div(new_multi_dim_data[i]);
					// alert('one new flight airborne.');

				} else {
					alert('where the heck is the plane???');
				}
				
				//Construct new unit
				constructor(new_multi_dim_data[i]);
				//REFRESH FLIGHT STRIPS
				display_console_flight_strip(console_base_no);
				//REFRESH Flight dividers
				update_flight_dividers();

			}
		}
	}
};

//insert div at destination base's incoming
function insert_base_incoming_flight_div(id_array) {
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
}

//insert div at origin base's outgoing
function insert_base_outgoing_flight_div(id_array) {
	var f_no = id_array.flight_no;
	var destin = id_array.flight_destination;
	var origin = id_array.flight_origin;
	var target_inc_flight_wrapper = '#'+destin+'_inc_flight_wrapper'
	var target_out_flight_wrapper = '#'+origin+'_out_flight_wrapper';

	if ($(target_out_flight_wrapper).html() == default_out_flight_div) {
		$(target_out_flight_wrapper).html('<div id="'+f_no+'_out_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">TO   : '+destin+'</span></div>')
	} else {
		$(target_out_flight_wrapper).append('<div id="'+f_no+'_out_flight_div" class="clickable flight entry" onclick="flight_entry_redirect(\''+f_no+'\')">'+f_no+'<span class="qty">TO   : '+destin+'</span></div>')
	};
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