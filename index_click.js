//CLICKING FUNCTIONS
function toggleDrawer(clicked) {
	$(clicked).next().slideToggle(600, "easeOutQuint");
	  //alert($(this));
};

function toggleConsoleDrawer(clicked) {
	if ($('#console').is(':hidden')) {
		$('#interface').css("margin-bottom", "320px");
	} else {
		$('#interface').css("margin-bottom", "0px");
	}
	$('#console').slideToggle(600, "easeOutQuint");
};


function flight_entry_redirect(row_no, flight_no) {
	toggleDrawer($('#'+flight_no+'_inv_drawer'));
	// alert('#'+row_no+'.'+flight_no+'.header');
	display_flight_console (row_no, flight_no);
};

function base_header_clicked(clicked) {
	if ($('#console_base').is(':hidden')) {
		$('#console_base').removeClass('hidden');
		$('#console_flight').addClass('hidden')
	} 
	if ($('#console').is(':hidden')) {
		toggleConsoleDrawer();
	}

	//DISPLAY TITLE
	$('#console_display_title').html($(clicked).html());
	var arr = clicked.id.split(".");
	var base_no = parseInt(arr[0]);
	console_base_no = base_no;

	//REFRESH FLIGHT STRIPS
	display_console_flight_strip(base_no);

	//REPLACE DATA VALUES
	$('span.console.data').each(function(){
		var arr2 = this.id.split(".");
		if (arr2[arr2.length - 1] == 'console_limit') {
			var base_limit = base_no + 1;
			this.id = base_limit + '.' + arr2[arr2.length - 2] + '.' + arr2[arr2.length - 1];
		} else {
			this.id = base_no + '.' + arr2[arr2.length - 2] + '.' + arr2[arr2.length - 1];
		}
	});
	
}

function flight_header_clicked(clicked) {
	var arr = clicked.id.split(".");
	var id_no = parseInt(arr[0]);
	display_flight_console(id_no, $(clicked).html());
}
function display_flight_console (id_no, title) {
	if ($('#console_flight').is(':hidden')) {
		$('#console_flight').removeClass('hidden');
		$('#console_base').addClass('hidden')
	}
	if ($('#console').is(':hidden')) {
		toggleConsoleDrawer();
	}
	console_flight_no = id_no;

	//DISPLAY TITLE
	$('#console_flight_display_title').html(title);

	//REPLACE DATA VALUES
	$('span.console.data').each(function(){
		var arr2 = this.id.split(".");
		this.id = id_no + '.' + arr2[arr2.length - 2] + '.' + arr2[arr2.length - 1];
	});

	//DISPLAY FLIGHT STATUS
	var flight_array = multi_dim_data[id_no - 1];
	if (flight_array.location == 'airborne') {
		$('#console_flight_location').html('CURRENTLY EN ROUTE TO: <span class="emph incoming">'
			+ flight_array.flight_destination + '</span>');
		$('#console_flight_path').html('ORIGIN: <span class="emph outgoing">'
			+ flight_array.flight_origin + '</span>');
	} else if (flight_array.location !== 'airborne' && flight_array.flight_destination !== 'nil') {
		$('#console_flight_location').html('PREPARING FOR TAKE OFF FROM: <span class="emph outgoing">'
			+ flight_array.flight_origin + '</span>');
		$('#console_flight_path').html('DESTINATION: <span class="emph incoming">'
			+ flight_array.flight_destination + '</span>');
	} else {
		$('#console_flight_location').html('CURRENTLY PARKED AT: <span class="emph">'
			+ flight_array.location + '</span>');
		$('#console_flight_path').html('');
	}

	// $('#console_flight_path').html(
	// 	'FLYING FROM:  '
	// 	+ flight_array.flight_origin
	// 	+ ' TO '
	// 	+ flight_array.flight_destination);
}

//BASE CLICKS
function display_console_flight_strip(base_no) {
	//ERASE PREV FLIGHT STRIPS
	$('.console_flight_div_wrapper').each(function(){
		$(this).children().remove();
	})

	//CONSTRUCT NEW FLIGHT STRIPS
	for (var i = 0; i < multi_dim_data.length; i++) {
		var base_code = multi_dim_data[base_no].location;
		if (multi_dim_data[i].location_type == 'flight') {
			//if flight is airborne & flight destination is target base
			if (multi_dim_data[i].flight_destination == base_code && multi_dim_data[i].location == 'airborne') {

				$('#inc_flight_div_wrapper').append(
					'<div id="'
					+ (i + 1) + '.' + multi_dim_data[i].flight_no + '.console_div'
					+'" class="console flight clickable" onclick="flight_entry_redirect('+(i + 1)+', \''
					+multi_dim_data[i].flight_no
					+ '\')">'
					+multi_dim_data[i].flight_no
					+'</div>')
			//if flight location is in base w/ NO destination
			} else if (multi_dim_data[i].location == base_code && multi_dim_data[i].flight_destination == 'nil') {
				$('#base_flight_div_wrapper').append(
					'<div id="'
					+ (i + 1) + '.' + multi_dim_data[i].flight_no + '.console_div'
					+'" class="console flight clickable" onclick="flight_entry_redirect('+(i + 1)+', \''
					+multi_dim_data[i].flight_no
					+ '\')">'
					+multi_dim_data[i].flight_no
					+'</div>')
			//if flight location is in base but has destination
			} else if (multi_dim_data[i].location == base_code && multi_dim_data[i].flight_destination !== 'nil') {
				$('#out_flight_div_wrapper').append(
					'<div id="'
					+ (i + 1) + '.' + multi_dim_data[i].flight_no + '.console_div'
					+'" class="console flight clickable" onclick="flight_entry_redirect('+(i + 1)+', \''
					+multi_dim_data[i].flight_no
					+ '\')">'
					+multi_dim_data[i].flight_no
					+'</div>')
			}
		}
	}	
}

function change_val_btn_clicked(clicked){
	var next_elem_id = $('#'+clicked.id).next();
	change_val(next_elem_id);
	// change_val($(clicked).next().html(clicked.id));
}

function change_flight_status(clicked) {
	var status = get_flight_status(multi_dim_data[console_flight_no - 1]);
	var f_no = status[0];
	var loc = status[1];
	var origin = status[2];
	var destin = status[3];

	var holder = $('#console_flight_status_wrapper').html();
	var replacement = '<div class="changebox">'
	+ '<div class="input_strip_wrapper">'
	+ '<div class="input_strip">'
	+ '<div class="input_name">New Location : </div>'
	+ '<input id="input_loc" class="input_box" type="text" placeholder="IATA code or \'airborne\'" />'
	+ '<span class="show_current">Currently : ' + loc + '</span>'
	+ '</div>'
	+ '<div class="input_strip">'
	+ '<div class="input_name">New Origin : </div>'
	+ '<input id="input_origin" class="input_box" type="text" placeholder="IATA code or \'nil\'" />'
	+ '<span class="show_current">Currently : ' + origin + '</span>'
	+ '</div>'
	+ '<div class="input_strip">'
	+ '<div class="input_name">New Destination : </div>'
	+ '<input id="input_destin" class="input_box" type="text" placeholder="IATA code or \'nil\'" />'	
	+ '<span class="show_current">Currently : ' + destin + '</span>'
	+ '</div>'
	+ '</div>'
	+ '<div id="cancel_button" class="big_button clickable_2">CANCEL</div>'
	+ '</div>';
	$('#console_flight_status_wrapper').html(replacement);

	$(clicked).replaceWith('<div id="submit_button" class="big_button clickable_2">CONFIRM</div>');
	// $('.input_box').focus();\
	$('#cancel_button').click(function(event){
		$('#console_flight_status_wrapper').html(holder);
		$('#submit_button').replaceWith(clicked);
	})

	$('#submit_button').click(function(event) {
		// alert($('.input_box').val());
		var new_loc = $('#input_loc').val().trim();
		var new_origin = $('#input_origin').val().trim();
		var new_destin = $('#input_destin').val().trim();
		$('#console_flight_status_wrapper').html(holder);
		$('#submit_button').replaceWith(clicked);

		//Change Database Data
		$.post("dbt2_edit_flight.php", {
				row_no: console_flight_no,
				location: new_loc,
				origin: new_origin,
				destin: new_destin
			}, function(data, status) {
				// alert(data + status);
			//redisplay everything again:
			toggleConsoleDrawer();
		});
	})
}
	