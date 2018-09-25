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
	var base_no = parseInt(arr[0]);

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

	if ($('#console').is(':hidden')) {
		toggleConsoleDrawer();
	};
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
			//if flight destination is target base
			if (multi_dim_data[i].flight_destination == base_code) {

				$('#inc_flight_div_wrapper').append(
					'<div class="console flight">'
					+multi_dim_data[i].flight_no
					+'</div>')
			//if flight location is in base w/ NO destination
			} else if (multi_dim_data[i].location == base_code && multi_dim_data[i].flight_destination == 'nil') {
				$('#base_flight_div_wrapper').append(
					'<div class="console flight">'
					+multi_dim_data[i].flight_no
					+'</div>')
			//if flight location is in base but has destination
			} else if (multi_dim_data[i].location == base_code && multi_dim_data[i].flight_destination !== 'nil') {
				$('#out_flight_div_wrapper').append(
					'<div class="console flight">'
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