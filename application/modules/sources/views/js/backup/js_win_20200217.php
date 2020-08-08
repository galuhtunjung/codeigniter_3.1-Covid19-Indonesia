	<script>
	$(document).ready(function() {


		$(document).on('click', '#btnBackModal2', function() {
			var id_customer = $("#id_customer").val();

			if (id_customer != ""){
		    $("#myModal2").hide();
			$("#myModalskp").modal('toggle');
			} else {
			$("#myModal2").hide();
			$("#myModalskp").modal('toggle');
			}

		});


		$(document).on('click', '#btnBackModal3', function() {
	  
	       // $("#modal-back").show();
	       $("#myModal3").hide();


		});


		$(document).on('click', '#buttonmail', function() {
        $("#modal-back").show();
	    $("#myModal3").show()
		
		
		});


	$(document).on('click', '#edit_win', function() {

	    $("#myModal7").modal('toggle');
	    var id_oppstage = $(this).attr('data_win');
	    var nm_prod = $(this).attr('data_prod');
	    var price = $(this).attr('data_price');
	    var price_adm = $(this).attr('data_price_adm');
	    var price_vat = $(this).attr('data_price_vat');
	    var pax = $(this).attr('data_pax');
	    var total = $(this).attr('data_total');
	    var disc = $(this).attr('data_disc');
	    var disc_code = $(this).attr('data_disc_code');

	   

	      $("#product_name").val(nm_prod);
	        $("#product_price_a").val(price);
	          $("#price_discount").val(disc);
	          $("#price_discount_code").val(disc_code);
	            $("#price_adm").val(price_adm);
	              $("#pax_cart").val(pax);
	                $("#price_vat").val(price_vat );
	                  $("#price_total").val(total);
	                    $("#id_oppstage_cart").val(id_oppstage);











	});


$("#product_checkout").submit(function(e) {
e.preventDefault();


var id_oppstage=$('#id_oppstage_cart').val();
var disc=$('#price_discount_code').val();
var pax=$('#pax_cart').val();

swal({
				title : "Edit Data Confirm",
				text : "Are You Sure Change Win Data Deals?",
				icon : "info",
				buttons : true,
				dangerMode : true,
				buttons : ['No', 'Yes!'],

			}).then((willDelete) => {
				if (willDelete) {

					var url = "<?= site_url('maxcrm/win/save_opp') ?>";
			$.ajax({
				url     : url,
				type    : "POST",
				data    : { id_oppstage : id_oppstage, data_disc : disc, data_pax : pax   } ,
				dataType: "json",
				success : function(data) {
					
					$("#myModal7").modal("hide");
					$(".modal-backdrop").remove();
					$("#pesan").show();
					$(".pesan").html(data.pesan);
					var pesanbox   = data.pesanbox;

					if (pesanbox =='1'){

        			document.getElementById("pesanbox").className = "alert alert-success";

					}else{

					document.getElementById("pesanbox").className = "alert alert-danger";

					}

					$("#pesanbox").fadeTo(2500, 1200).slideUp(1200, function() {
                    $("#pesanbox").slideUp(1200);
                  });


					table.ajax.reload();


					  }

			});


				}



			});
		
	});


$(document).on('change', '#pax_cart', function() {

var disc_type 	= $("#price_discount").val();
var ttotal_1 	= $("#price_total").val();
var price_a 	= $("#product_price_a").val();
var price_vat 	= $("#price_vat").val();
var price_adm	= $("#price_adm").val();
var pax			= $("#pax_cart").val();

var price_a_convert = price_a.replace(/[,]/g,'');
var price_vat_convert = price_vat.replace(/[,]/g,'');
var price_adm_convert = price_adm.replace(/[,]/g,'');
var price_discount_convert = disc_type.replace(/[,]/g,'');

var ttotal_2 =(parseInt(price_a_convert)+parseInt(price_adm_convert))*pax;
var ttotal_4;


var disc 		= price_discount_convert.length;
var discnet     =(ttotal_2 * price_discount_convert/100);

if(disc > 2){
ttotal_4=parseInt(ttotal_2)-parseInt(price_discount_convert);
$("#disc_code").text(" 2 Digit For % And More For IDR");


}else{
ttotal_4=parseInt(ttotal_2)-parseInt(discnet);
var ttotal_5b=ttotal_4.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

var ttotal_6b=discnet.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

if(price_discount_convert > 0){
$("#disc_code").text(" " + "Discount = IDR " + ttotal_6b);
$("#price_discount_code").val(ttotal_6b);
}else{
$("#disc_code").text(" " + "Discount = IDR " + 0);	
$("#price_discount_code").val('0');
}
}

if(price_vat != ""){
var vat_a = (parseInt(ttotal_4)*10)/100;
var ttotal_4b   = parseInt(ttotal_4)+parseInt(vat_a);
var vat_b=vat_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
}else{
var vat   = 0;
var ttotal_4b   = ttotal_4;
var vat_b  = 0;
}

$("#price_vat").val(vat_b);

var ttotal_5=ttotal_4b.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
$("#price_total").val(ttotal_5);
document.getElementById("price_discount").focus();


});




$(document).on('change', '#price_discount', function() {

var disc_type 	= $("#price_discount").val();
var ttotal_1 	= $("#price_total").val();
var price_a 	= $("#product_price_a").val();
var price_vat 	= $("#price_vat").val();
var price_adm	= $("#price_adm").val();
var pax			= $("#pax_cart").val();

var price_a_convert = price_a.replace(/[,]/g,'');
var price_vat_convert = price_vat.replace(/[,]/g,'');
var price_adm_convert = price_adm.replace(/[,]/g,'');
var price_discount_convert = disc_type.replace(/[,]/g,'');

var ttotal_2 =(parseInt(price_a_convert)+parseInt(price_adm_convert))*pax;
var ttotal_4;

var disc 		= price_discount_convert.length;
var discnet     =(ttotal_2 * price_discount_convert/100);

if(disc > 2){
ttotal_4=parseInt(ttotal_2)-parseInt(price_discount_convert);
$("#disc_code").text(" 2 Digit For % And More For IDR");
}else{
ttotal_4=parseInt(ttotal_2)-parseInt(discnet);
var ttotal_5b=ttotal_4.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
var ttotal_6b=discnet.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

if(price_discount_convert > 0){
$("#disc_code").text(" " + "Discount = IDR " + ttotal_6b);
$("#price_discount_code").val(ttotal_6b);
}else{
$("#disc_code").text(" " + "Discount = IDR " + 0);
$("#price_discount_code").val('0');
}
}

if(price_vat != ""){
	var vat_a = (parseInt(ttotal_4)*10)/100;
	var ttotal_4b   = parseInt(ttotal_4)+parseInt(vat_a);
	var vat_b=vat_a.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
}else{
	var vat   = 0;
	var ttotal_4b   =ttotal_4;
	var vat_b  = 0;
}

$("#price_vat").val(vat_b);

var ttotal_5=ttotal_4b.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
$("#price_total").val(ttotal_5);
document.getElementById("price_discount").focus();

});


		

// Bind `input` event on both the inputs

		$(document).on('change', '#contact_category_2', function() {

		var category_2 = $("#contact_category_2").val();
		if(category_2 == 2){
		document.getElementById("f_update_2").hidden=false;
		document.getElementById("f_update_1").hidden=false;
		document.getElementById("f_age_1").hidden=true;
		document.getElementById("f_age_2").hidden=true;
		}else{
		document.getElementById("f_update_1").hidden=true;
		document.getElementById("f_update_2").hidden=true;
		document.getElementById("f_age_1").hidden=false;
		document.getElementById("f_age_2").hidden=false;
		}

		

		});


		$("#frm_select_table_2").submit(function(e) {
			e.preventDefault();

		var category = $("#contact_category").val();
		var category_2 = $("#contact_category_2").val();

		var update_1 = $("#update_cust_1").val();
		var update_2 = $("#update_cust_2").val();
		var age_1    = $("#age_cust_1").val();
		var age_2    = $("#age_cust_2").val();


		if(category == 1){

			$('#dataTable tfoot th').each( function () {
				var title = $(this).text();
				$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
			} );


			document.getElementById("dataTable").className = "table table-hover table-bordered table-striped display";
			var table = $("#dataTable").DataTable({
				'processing' : true,
				"scrollY": 320,
				"scrollX": false,
				'paging': false,
				'info'	: true,
				'destroy'	: true,
				"columnDefs": [
				{ "width": "50%", "targets": 2 }
				],
				"dom": '<"top"l>rt<"bottom"i><"clear">',
				"language": {
					"decimal": ",",
					"thousands": "."
				},
				"lengthMenu": [[5,25,50,100], [5,25,50,100]],
				'ajax' : {
					'url' : "<?= site_url('maxcrm/win/get_list_data') ?>",
					'type' : "POST",
					'data' : { contact_category : category, contact_category_2 : category_2, update_cust_1 : update_1, update_cust_2 : update_2, age_cust_1 : age_1, age_cust_2 : age_2 }

				},  "columnDefs": [
				{
					"targets": [ 16,12,13,14,15],
					"visible": false,
					"searching": false
				},
				{
					"targets": [ 0 ],
					"searching": false
				}
				],
				"footerCallback": function ( row, data, start, end, display ) {
					var api = this.api(), data;
							// Remove the formatting to get integer data for summation
							var intVal = function ( i ) {
								return typeof i === 'string' ?
								i.replace(/[\$,]/g, '')*1 :
								typeof i === 'number' ?
								i : 0;
							};

							var total = api
							.column( 9, {  page:   'all' } )
							.data()
							.reduce( function (a,b) {
								return intVal(a) + intVal(b);
							}, 0 );

							 // Total over this page
							 var pageTotal = api
							 .column( 9, { page: 'current'} )
							 .data()
							 .reduce( function (a, b) {
							 	return intVal(a) + intVal(b);
							 }, 0 );
							 
							// Update footer
							var numFormat = $.fn.dataTable.render.number( '\,', '.', 0,  ).display;
							$( api.column( 9 ).footer() ).html(
								numFormat(pageTotal)
								);

							// Update footer
							
						}

					});


			table.on( 'order.dt search.dt', function () {
				table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					cell.innerHTML = i+1;
				} );
			} ).draw();


						// Apply the search
						table.columns().every( function () {
							var that = this;

							$( 'input', this.footer() ).on( 'keyup change clear', function () {
								if ( that.search() !== this.value ) {
									that
									.search( this.value )
									.draw();
								}
							} );
						} );


		}else{

			$('#dataTable tfoot th').each( function () {
				var title = $(this).text();
				$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
			} );


			document.getElementById("dataTable").className = "table table-hover table-bordered table-striped display nowrap";
			$("#dataTable").DataTable().destroy();
			var table = $("#dataTable").DataTable({
				'processing' : true,
				"scrollY": 320,
				"scrollX": true,
				'paging': false,
				'info'	: true,
				'destroy'	: true,
				"columnDefs": [
				{ "width": "50%", "targets": 2 }
				],
				"dom": '<"top"l>rt<"bottom"i><"clear">',
				"language": {
					"decimal": ",",
					"thousands": "."
				},
				"lengthMenu": [[5,25,50,100], [5,25,50,100]],
				'ajax' : {
					'url' : "<?= site_url('maxcrm/win/get_list_data') ?>",
					'type' : "POST",
					'data' : { contact_category : category, contact_category_2 : category_2, update_cust_1 : update_1, update_cust_2 : update_2, age_cust_1 : age_1, age_cust_2 : age_2 }

				},  "columnDefs": [
				{
					"targets": [ 1 ],
					"visible": true,
					"searching": false
				},
				{
					"targets": [ 0 ],
					"searching": false
				}
				],
				"footerCallback": function ( row, data, start, end, display ) {
					var api = this.api(), data;
							// Remove the formatting to get integer data for summation
							var intVal = function ( i ) {
								return typeof i === 'string' ?
								i.replace(/[\$,]/g, '')*1 :
								typeof i === 'number' ?
								i : 0;
							};

							var total = api
							.column( 8, {  page:   'all' } )
							.data()
							.reduce( function (a,b) {
								return intVal(a) + intVal(b);
							}, 0 );

							 // Total over this page
							 var pageTotal = api
							 .column( 8, { page: 'current'} )
							 .data()
							 .reduce( function (a, b) {
							 	return intVal(a) + intVal(b);
							 }, 0 );
							 
							// Update footer
							var numFormat = $.fn.dataTable.render.number( '\,', '.', 0,  ).display;
							$( api.column( 8 ).footer() ).html(
								numFormat(pageTotal)
								);

							// Update footer
							
						}




					});


			table.on( 'order.dt search.dt', function () {
				table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
					cell.innerHTML = i+1;
				} );
			} ).draw();


						// Apply the search
						table.columns().every( function () {
							var that = this;

							$( 'input', this.footer() ).on( 'keyup change clear', function () {
								if ( that.search() !== this.value ) {
									that
									.search( this.value )
									.draw();
								}
							} );
						} );

	// $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');



		}

		


		});



	$(document).on('change', '#contact_category', function() {

		 var category = $("#contact_category").val();
		 if (category == 2){

		 $('#dataTable tfoot th').each( function () {
		var title = $(this).text();
		$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
	} );


	document.getElementById("dataTable").className = "table table-hover table-bordered table-striped display nowrap";
	$("#dataTable").DataTable().destroy();
	var table = $("#dataTable").DataTable({
		'processing' : true,
		"scrollY": 320,
		"scrollX": true,
		'paging': false,
		'info'	: true,
		'destroy'	: true,
		"columnDefs": [
		{ "width": "50%", "targets": 2 }
		],
		"dom": '<"top"l>rt<"bottom"i><"clear">',
		"language": {
			"decimal": ",",
			"thousands": "."
		},
		"lengthMenu": [[5,25,50,100], [5,25,50,100]],
		'ajax' : {
			'url' : "<?= site_url('maxcrm/win/get_list_data') ?>",
			'type' : "POST",

		},  "columnDefs": [
		{
			"targets": [ 1 ],
			"visible": true,
			"searching": false
		},
		{
			"targets": [ 0 ],
			"searching": false
		}
		],
		"footerCallback": function ( row, data, start, end, display ) {
			var api = this.api(), data;
							// Remove the formatting to get integer data for summation
							var intVal = function ( i ) {
								return typeof i === 'string' ?
								i.replace(/[\$,]/g, '')*1 :
								typeof i === 'number' ?
								i : 0;
							};

							var total = api
							.column( 8, {  page:   'all' } )
							.data()
							.reduce( function (a,b) {
								return intVal(a) + intVal(b);
							}, 0 );

							 // Total over this page
							 var pageTotal = api
							 .column( 8, { page: 'current'} )
							 .data()
							 .reduce( function (a, b) {
							 	return intVal(a) + intVal(b);
							 }, 0 );
							 
							// Update footer
							var numFormat = $.fn.dataTable.render.number( '\,', '.', 0,  ).display;
							$( api.column( 8 ).footer() ).html(
								 numFormat(pageTotal)
								);

							// Update footer
							
						},




					});


	table.on( 'order.dt search.dt', function () {
		table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			cell.innerHTML = i+1;
		} );
	} ).draw();


						// Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

	// $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');


		 }else{

		 $('#dataTable tfoot th').each( function () {
		var title = $(this).text();
		$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
	} );


	document.getElementById("dataTable").className = "table table-hover table-bordered table-striped display";
	$("#dataTable").DataTable().destroy();
	var table = $("#dataTable").DataTable({
		'processing' : true,
		"scrollY": 320,
		"scrollX": false,
		'paging': false,
		'info'	: true,
		'destroy'	: true,
		"columnDefs": [
		{ "width": "50%", "targets": 2 }
		],
		"dom": '<"top"l>rt<"bottom"i><"clear">',
		"language": {
			"decimal": ",",
			"thousands": "."
		},
		"lengthMenu": [[5,25,50,100], [5,25,50,100]],
		'ajax' : {
			'url' : "<?= site_url('maxcrm/win/get_list_data') ?>",
			'type' : "POST",

		},  "columnDefs": [
		{
			"targets": [ 16,12,13,14,15],
			"visible": false,
			"searching": false
		},
		{
			"targets": [ 0 ],
			"searching": false
		}
		],
		"footerCallback": function ( row, data, start, end, display ) {
			var api = this.api(), data;
							// Remove the formatting to get integer data for summation
							var intVal = function ( i ) {
								return typeof i === 'string' ?
								i.replace(/[\$,]/g, '')*1 :
								typeof i === 'number' ?
								i : 0;
							};

							var total = api
							.column( 9, {  page:   'all' } )
							.data()
							.reduce( function (a,b) {
								return intVal(a) + intVal(b);
							}, 0 );

							 // Total over this page
							 var pageTotal = api
							 .column( 9, { page: 'current'} )
							 .data()
							 .reduce( function (a, b) {
							 	return intVal(a) + intVal(b);
							 }, 0 );
							 
							// Update footer
							var numFormat = $.fn.dataTable.render.number( '\,', '.', 0,  ).display;
							$( api.column( 9 ).footer() ).html(
								 numFormat(pageTotal)
								);

							// Update footer
							
						},

					});


	table.on( 'order.dt search.dt', function () {
		table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			cell.innerHTML = i+1;
		} );
	} ).draw();


						// Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );





		 } // End If Category

		



	});

// Main

$('#dataTable tfoot th').each( function () {
	var title = $(this).text();
	$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
} );


	document.getElementById("dataTable").className = "table table-hover table-bordered table-striped display";
	$("#dataTable").DataTable().destroy();
	var table = $("#dataTable").DataTable({
		'processing' : true,
		"scrollY": 320,
		"scrollX": false,
		'paging': false,
		'info'	: true,
		'destroy'	: true,
		"columnDefs": [
		{ "width": "50%", "targets": 2 }
		],
		"dom": '<"top"l>rt<"bottom"i><"clear">',
		"language": {
			"decimal": ",",
			"thousands": "."
		},
		"lengthMenu": [[5,25,50,100], [5,25,50,100]],
		'ajax' : {
			'url' : "<?= site_url('maxcrm/win/get_list_data') ?>",
			'type' : "POST",

		},  "columnDefs": [
		{
			"targets": [ 16,12,13,14,15],
			"visible": false,
			"searching": false
		},
		{
			"targets": [ 0 ],
			"searching": false
		}
		],
		"footerCallback": function ( row, data, start, end, display ) {
			var api = this.api(), data;
							// Remove the formatting to get integer data for summation
							var intVal = function ( i ) {
								return typeof i === 'string' ?
								i.replace(/[\$,]/g, '')*1 :
								typeof i === 'number' ?
								i : 0;
							};

							var total = api
							.column( 9, {  page:   'all' } )
							.data()
							.reduce( function (a,b) {
								return intVal(a) + intVal(b);
							}, 0 );

							 // Total over this page
							 var pageTotal = api
							 .column( 9, { page: 'current'} )
							 .data()
							 .reduce( function (a, b) {
							 	return intVal(a) + intVal(b);
							 }, 0 );
							 
							// Update footer
							var numFormat = $.fn.dataTable.render.number( '\,', '.', 0,  ).display;
							$( api.column( 9 ).footer() ).html(
								 numFormat(pageTotal)
								);

							// Update footer
							
						},

					});


	table.on( 'order.dt search.dt', function () {
		table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			cell.innerHTML = i+1;
		} );
	} ).draw();


						// Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );

// End Main


  
	$("#contact_category_2").select2({ placeholder : "" });
	$("#id_room").select2({ placeholder : "" });
	$("#id_pic_stats").select2({ placeholder : "" });
	$("#contact_category").select2({ placeholder : "- Contact Group -" });
	$("#id_event").select2({ placeholder : "- Contact Source Option -" });

		$.ajax({

			url     : "<?= site_url('event/select2') ?>",
			type    : "POST",
			dataType: "json",
			success : function(data) {
				$.each(data, function(key, value) {
					$("#id_event").append("<option value='" + value.id +"'> " + value.value +" </option>");
				});
			}

		});

		$("#salutation_name").select2({ placeholder : "- Choose One -" });

		$("#citizenship").select2({ placeholder : "-" });

		$(document).on('blur', '#phone_customer', function() {

			$("#msg").html('check phone number...');

			var phone = $("#phone_customer").val();
			var id_customer = $("#id_customer").val();

			if (id_customer != '') {
				var data = { phone_customer : phone, id_customer : id_customer };
			} else {
				var data = { phone_customer : phone };
			}

			$.ajax({

				url     : "<?= site_url('maxcrm/contact_list/checkPhone') ?>",
				type    : "POST",
				data    : data,
				dataType: "json",
				success : function(result) {

					if (phone.length < 11){
						$("#msg").show();
						$("#msg").html('This not a valid phone number');
					} else {
						$("#msg").show();
						$("#msg").html(result);
					}

				}

			});

		});

		$(document).on('click', "#modsource", function() {

			$('#FrmSource').trigger('reset');
			$("#FrmSource select").trigger('change');

			$('#myModal1').modal('toggle');
			$('#myModal2').modal('toggle');

		});

		$("#id_catevent").select2({ placeholder : "- Choose One -" });

		$.ajax({

			url     : "<?= site_url('maxcrm/sources/select2') ?>",
			type    : "POST",
			dataType: "json",
			success : function(data) {
				$.each(data, function(key, value) {
					$("#id_catevent").append("<option value='" + value.id +"'> " + value.value +" </option>");
				});
			}

		});

		$("#Frm").submit(function(e) {
			e.preventDefault();

			var id_customer = $("#id_customer").val();

			if (id_customer == '') {
				var url = "<?= site_url('maxcrm/contact_list/save_data') ?>";
			} else {
				var url = "<?= site_url('maxcrm/contact_list/update_data') ?>";
			}

			$.ajax({

				url     : url,
				type    : "POST",
				data    : $(this).serialize(),
				dataType: "json",
				success : function(output) {

					$("#id_customer").val('');
					$("#Frm").trigger('reset');
					$("#Frm select").trigger('change');

					$("#msg").hide();
					$("#myModal2").modal('toggle');

					$("#pesan").show();
					$(".pesan").html(output.pesan);
					var pesanbox = output.pesanbox;

					if (pesanbox =='1'){

						document.getElementById("pesanbox").className = "alert alert-success";

					}else{

						document.getElementById("pesanbox").className = "alert alert-danger";

					}

					$("#pesanbox").fadeTo(2500, 1000).slideUp(1000, function() {
						$("#pesanbox").slideUp(1000);
					});

					table.ajax.reload();
					setTimeout(function(){
					           location.reload(); // then reload the page.(3)
					       }, 2000); 

				}

			});

			$('#Frmmodedit').trigger('reset');

		});



		$("#FrmSource").submit(function(e) {
			e.preventDefault();

			var id_event = $("#id_event").val();

			if (id_event == '') {
				var url = "<?= site_url('maxcrm/sources/save_data') ?>";
			} else {
				var url = "<?= site_url('maxcrm/sources/update_data') ?>";
			}


			$.ajax({
				url     : url,
				type    : "POST",
				data    : $(this).serialize(),
				dataType: "json",
				success : function(output) {

					$("#id_event").val('');
					$("#Frm").trigger('reset');
					$("#Frm select").trigger('change');
					$("#msg").hide();
					$("#myModal1").modal('toggle');
					$("#pesan").show();
					$(".pesan").html(output.pesan);
					var pesanbox = output.pesanbox;

					if (pesanbox =='1'){
                     
						document.getElementById("pesanbox").className = "alert alert-success";

					}else{

						document.getElementById("pesanbox").className = "alert alert-danger";

					}

					$("#pesanbox").fadeTo(2500, 1000).slideUp(1000, function() {
						$("#pesanbox").slideUp(1000);
					});

					table.ajax.reload();
					setTimeout(location.reload.bind(location), 4000);

				}

			});

		});



$("#Frmmailing").submit(function(e) {
	e.preventDefault();
	var url   = "<?= site_url('maxcrm/win/savemailing') ?>";
			$.ajax({
				url     : url,
				type    : "POST",
				data    : $(this).serialize(),
				dataType: "json",
				success : function(output) {

					$("#Frmmailing").trigger('reset');
					$("#Frmmailing select").trigger('change');
					$("#msg").hide();
					$("#myModal3").hide();
					$("#modal-back").hide();
		
					$("#pesan").show();
					$(".pesan").html(output.pesan);
					var pesanbox = output.pesanbox;
					if (pesanbox =='1'){

						document.getElementById("pesanbox").className = "alert alert-success";

					}else{

						document.getElementById("pesanbox").className = "alert alert-danger";

					}

					$("#pesanbox").fadeTo(2500, 1000).slideUp(1000, function() {
						$("#pesanbox").slideUp(1000);
					});

					setTimeout(function(){
					           location.reload(); // then reload the page.(3)
					       }, 2000); 

				}


	});

});










		$("#print_preview").submit(function(e) {
			e.preventDefault();

			var id_skp = $("#id_skp_print").val();
			var url   = "<?= site_url('maxcrm/win/printskp') ?>";
			$.ajax({

				url     : url,
				type    : "POST",
				data    : { id_skp : id_skp },
				dataType: "json",

				success : function(data) {



					$('#id_skp_printout').text(data.id_skp);
					$('#date_create_printout').text(data.date_create);
					$('#member_name').text(data.member_name);
					$('#member_name_sign').text(data.member_name);
					$('#member_idcard').text(data.member_idcard);

					$('#member_address').text(data.member_address);
					$('#member_telp').text(data.member_telp);
					$('#member_wa').text(data.member_wa);
					$('#email_customer').text(data.email_customer);
					$('#letter_name').text(data.letter_name);
					$('#letter_address').text(data.letter_address);
					$('#letter_phone').text(data.letter_phone);

					$('#letter_whatsapp').text(data.letter_whatsapp);
					$('#letter_email').text(data.letter_email);
					$('#letter_trigger').text(data.letter_trigger);

					$('#curel_trigger').text(data.member_idcard);
					// $('#curel_fullname').text(data.curel_fullname);
					$('#curel_fullname_sign').text(data.curel_fullname);
					// $('#curel_office').text(data.curel_office);
					// $('#curel_address').text(data.curel_address);
					$('#curel_phone').text(data.curel_phone);
					$('#curel_whatsapp').text(data.curel_whatsapp);
					$('#curel_email').text(data.curel_email);
					$('#curel_relation').text(data.curel_relation);

	
					// $('#mbr_type').text(data.mbr_type);
					// ini ntar diganti ya
					if((data.mbr_type == "Annually" ) || (data.mbr_type == "Golden Promo Annually" ) || (data.mbr_type == "Timesharing-30" ) || (data.mbr_type == "Timesharing-60" ) ) {    
						
						$('#mbr_type_1').html('<label class="container">Annually<input type="checkbox" id="mbr1" checked><span class="checkmark"></span>');
						$('#mbr_type_2').html('<label class="container">Monthly<input type="checkbox" id="mbr2" ><span class="checkmark"></span>');
						$('#mbr_type_3').html('<label class="container">Daily<input type="checkbox" id="mbr3" ><span class="checkmark"></span>');

					}else if( (data.mbr_type == "Monthly" ) || (data.mbr_type == "Golden Promo Monthly" )) {    
						$('#mbr_type_1').html('<label class="container">Annually<input type="checkbox" id="mbr1" ><span class="checkmark"></span>');
						$('#mbr_type_2').html('<label class="container">Monthly<input type="checkbox" id="mbr2" checked><span class="checkmark"></span>');
						$('#mbr_type_3').html('<label class="container">Daily<input type="checkbox" id="mbr3" ><span class="checkmark"></span>');
					}else{
						$('#mbr_type_1').html('<label class="container">Annually<input type="checkbox" id="mbr1" ><span class="checkmark"></span>');
						$('#mbr_type_2').html('<label class="container">Monthly<input type="checkbox" id="mbr2" ><span class="checkmark"></span>');
						$('#mbr_type_3').html('<label class="container">Daily<input type="checkbox" id="mbr3" checked><span class="checkmark"></span>');
					}


					// <label class="container">Unit Apartement
					// <input type="checkbox">
					// <span class="checkmark"></span>

					if(data.mbr_unit_a == "Apartement Deluxe" ) {

					$('#akm1').html('<label class="container"> Apartement<input type="checkbox"  checked><span class="checkmark"></span>');
					$('#akm2').html('<label class="container"> Villa<input type="checkbox" ><span class="checkmark"></span>');
				    $('#akmb1').html('<label class="container"> Type Deluxe<input type="checkbox" checked><span class="checkmark"></span>');
					$('#akmb2').html('<label class="container"> Type Executive<input type="checkbox"><span class="checkmark"></span>');
					$('#akmc1').html('<label class="container"> Type Abiko<input type="checkbox"><span class="checkmark"></span>');
					$('#akmc2').html('<label class="container"> Type Aisai<input type="checkbox"><span class="checkmark"></span>');


					}else if(data.mbr_unit_a == "Apartement Executive" ) {

						$('#akm1').html('<label class="container"> Apartement<input type="checkbox"  checked><span class="checkmark"></span>');
						$('#akm2').html('<label class="container"> Villa<input type="checkbox" ><span class="checkmark"></span>');
						$('#akmb1').html('<label class="container"> Type Deluxe<input type="checkbox"><span class="checkmark"></span>');
						$('#akmb2').html('<label class="container"> Type Executive<input type="checkbox" checked><span class="checkmark"></span>');
						$('#akmc1').html('<label class="container"> Type Abiko<input type="checkbox"><span class="checkmark"></span>');
						$('#akmc2').html('<label class="container"> Type Aisai<input type="checkbox"><span class="checkmark"></span>');

				


					}else if(data.mbr_unit_a == "Villa Abiko" ) {

						$('#akm1').html('<label class="container"> Apartement<input type="checkbox" ><span class="checkmark"></span>');
						$('#akm2').html('<label class="container"> Villa<input type="checkbox"  checked><span class="checkmark"></span>');
						$('#akmb1').html('<label class="container"> Type Deluxe<input type="checkbox"><span class="checkmark"></span>');
						$('#akmb2').html('<label class="container"> Type Executive<input type="checkbox"><span class="checkmark"></span>');
						$('#akmc1').html('<label class="container"> Type Abiko<input type="checkbox" checked><span class="checkmark"></span>');
						$('#akmc2').html('<label class="container"> Type Aisai<input type="checkbox"><span class="checkmark"></span>');

				


					}else if(data.mbr_unit_a == "Villa Aisai" ) {

						$('#akm1').html('<label class="container"> Apartement<input type="checkbox"  ><span class="checkmark"></span>');
						$('#akm2').html('<label class="container"> Villa<input type="checkbox" checked><span class="checkmark"></span>');
						$('#akmb1').html('<label class="container"> Type Deluxe<input type="checkbox" ><span class="checkmark"></span>');
						$('#akmb2').html('<label class="container"> Type Executive<input type="checkbox" ><span class="checkmark"></span>');
						$('#akmc1').html('<label class="container"> Type Abiko<input type="checkbox"><span class="checkmark"></span>');
						$('#akmc2').html('<label class="container"> Type Aisai<input type="checkbox" checked><span class="checkmark"></span>');

				


					}else{

						$('#akm1').html('<label class="container"> Apartement<input type="checkbox"  ><span class="checkmark"></span>');
						$('#akm2').html('<label class="container"> Villa<input type="checkbox" ><span class="checkmark"></span>');
						$('#akmb1').html('<label class="container"> Type Deluxe<input type="checkbox" ><span class="checkmark"></span>');
						$('#akmb2').html('<label class="container"> Type Executive<input type="checkbox" ><span class="checkmark"></span>');
						$('#akmc1').html('<label class="container"> Type Abiko<input type="checkbox"><span class="checkmark"></span>');
						$('#akmc2').html('<label class="container"> Type Aisai<input type="checkbox"><span class="checkmark"></span>');




					}


					if(data.mbr_unit_b == "High Care" ) {

						$('#typesl1').html('<label class="container"> High Care<input type="checkbox"  checked><span class="checkmark"></span>');
						$('#typesl2').html('<label class="container"> Low Care<input type="checkbox" ><span class="checkmark"></span>');
						$('#typesl3').html('<label class="container"> Independent <input type="checkbox" ><span class="checkmark"></span>');
			


					}else if(data.mbr_unit_b == "Low Care" ) {

						$('#typesl1').html('<label class="container"> High Care<input type="checkbox"  ><span class="checkmark"></span>');
						$('#typesl2').html('<label class="container"> Low Care<input type="checkbox" checked><span class="checkmark"></span>');
						$('#typesl3').html('<label class="container"> Independent <input type="checkbox" ><span class="checkmark"></span>');
			





					}else{
						$('#typesl1').html('<label class="container"> High Care<input type="checkbox"><span class="checkmark"></span>');
						$('#typesl2').html('<label class="container"> Low Care<input type="checkbox" ><span class="checkmark"></span>');
						$('#typesl3').html('<label class="container"> Independent <input type="checkbox" checked><span class="checkmark"></span>');
			




					}


					if(data.curel_trigger == 0){

					document.getElementById("pic_sign").hidden=true;

					}else{

					document.getElementById("pic_sign").hidden=false;

					$('#curel_value').html('<td align="left" style="width:25%; margin-top:20px;"> 5. Nama Penanggung Jawab</td><td style="width:75%; margin-top:20px; word-break: break-all;">: ' + data.curel_fullname + ' ' + data.curel_office  +' <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div> </td> ');

					$('#curel_note_1').html('  <td align="left" style="width:25%; margin-top:20px;"> 6. Alamat Penanggung Jawab </td> <td style="width:75%; margin-top:20px; word-break: break-all;"> :' +  data.curel_address   +'<div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div></td> ');

					$('#curel_note_2').html('<td><table border="0" width="100%" style="font-size: 12px;font-family: Arial, Helvetica, sans-serif; "><tr><td width="15%">Telp.</td><td width="32%">: '  +  data.curel_phone   +   '<div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div></td><td width="15%" align="center">Hp</td><td width="38%">:'  +  data.curel_whatsapp   +   '<div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div></td></tr></table></td> ');

					$('#curel_note_3').html('<td><table border="0" width="100%" style="font-size: 12px;font-family: Arial, Helvetica, sans-serif; "> <tr><td width="15%"> Email</td><td width="85%">:'  +  data.curel_email   +   '<div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div></td></tr></table></td> ');

					}

					if(data.discount_trigger == 0){

					document.getElementById("mbr_disc_tr").hidden=true;
					document.getElementById("mbr_disc_tr_2").hidden=true;

					}else{

					document.getElementById("mbr_disc_tr").hidden=false;
					document.getElementById("mbr_disc_tr_2").hidden=true;

					}


				
					$('#mbr_unit_no').text(data.mbr_unit_no);
					$('#mbr_unit_lt').text(data.mbr_unit_lt);
					$('#mbr_unit_lb').text(data.mbr_unit_lb);
					$('#crm_checkin').text(data.crm_checkin);
					$('#crm_checkout').text(data.crm_checkout);

					$('#name_trans').text(data.name_trans);
					$('#rule_trans').text(data.rule_trans);
					$('#price_transsl').text(data.price_transsl);
					$('#discount').text(data.discount);
					$('#subtotal').text(data.subtotal);
					$('#ppn').text(data.ppn);
					$('#total').text(data.total);
					$('#totaltr').text(data.total);
					$('#consultant').text(data.consultant);


					$("#pesan").show();
					$(".pesan").html(data.pesan);
					var pesanbox = data.pesanbox;
					if (pesanbox =='0'){
						document.getElementById("pesanbox").className = "alert alert-danger";
						$("#pesanbox").fadeTo(2500, 1000).slideUp(1000, function() {
							$("#pesanbox").slideUp(1000);
						});

						setTimeout(function(){
					           location.reload(); // then reload the page.(3)
					       }, 2000); 

					}


					if(data.service_trigger == 0){
					document.getElementById("mbr_break").hidden=true;
					document.getElementById("mbr_break_2").hidden=false;
					document.getElementById("pay_mbr_1").style.marginTop = "15px";
					document.getElementById("pay_mbr_2").style.marginTop = "90px";



					}else{
					document.getElementById("mbr_break").hidden=false;
					document.getElementById("mbr_break_2").hidden=true;
					document.getElementById("pay_mbr_1").style.marginTop = "90px";
					document.getElementById("pay_mbr_2").style.marginTop = "15px";


					}



					if(data.cat_trigger == 1){    
					$('#tittle_skp').html('SURAT KONFIRMASI PEMESANAN MEMBERSHIP <p> JABABEKA SENIOR LIVING </p>');
					document.getElementById("tr_office").hidden=true;
					document.getElementById("tr_mbr_2").hidden=false;
					document.getElementById("sl_lampiran").hidden=false;

					$('#tr_mbr_tittle_3').text('3. Akomodasi');
					$('#tr_mbr_tittle_4').text('4. Fasilitas Yang Tersedia');
					$('#tr_mbr_tittle_5').text('5. Tanggal Periode Membership');


					}else if(data.cat_trigger == 2){     ///Service Apartement
					$('#tittle_skp').html('SURAT KONFIRMASI PEMESANAN SERVICE APARTMENT <br>');
					document.getElementById("tr_office").hidden=false;

					document.getElementById("tr_mbr_2").hidden=true;
					$('#office_name').text(data.office_customer);
					document.getElementById("sl_lampiran").hidden=true;


					$('#tr_mbr_tittle_3').text('2. Akomodasi');
					$('#tr_mbr_tittle_4').text('3. Fasilitas Yang Tersedia');
					$('#tr_mbr_tittle_5').text('4. Tanggal Periode Membership');

					}else{
					$('#tittle_skp').html('SURAT KONFIRMASI PEMESANAN MEMBERSHIP <p> JABABEKA SENIOR LIVING </p>');
					document.getElementById("tr_false").hidden=true;
					document.getElementById("tr_mbr_2").hidden=false;
					document.getElementById("sl_lampiran").hidden=false;
					$('#tr_mbr_tittle_3').text('3. Akomodasi');
					$('#tr_mbr_tittle_4').text('4. Fasilitas Yang Tersedia');
					$('#tr_mbr_tittle_5').text('5. Tanggal Periode Membership');
					}





				

					var divToPrint = document.getElementById("body_print");
					var myWindow=window.open('',''); 
					myWindow.document.write('<html>' + '<body style="width:210mm;">'+ divToPrint.innerHTML +'</body></html>');

					myWindow.document.close();
					myWindow.focus();
					myWindow.print();
					myWindow.close();








				
				}

			});






		});


		$("#skp_form").submit(function(e) {
        e.preventDefault();
			var url = "<?= site_url('maxcrm/win/save_skp') ?>";
			$.ajax({

				url     : url,
				type    : "POST",
				data    : $(this).serialize(),
				dataType: "json",
				success : function(output) {

			
					$("#skp_form").trigger('reset');
					$("#skp_form select").trigger('change');
					$("#msg").hide();
					$("#myModalskp").modal('toggle');
					$("#pesan").show();
					$(".pesan").html(output.pesan);
					var pesanbox = output.pesanbox;
					var productbox = output.productbox;

					if (pesanbox =='0'){

						document.getElementById("pesanbox").className = "alert alert-danger";
						table.ajax.reload();

						location.reload();

					}

					$("#pesanbox").fadeTo(2500, 1000).slideUp(1000, function() {
						$("#pesanbox").slideUp(1000);
					});
					table.ajax.reload();

				


				if(productbox != ''){ 

			swal({
				title : "Print Confirm",
				text : "Are you want print out now?",
				icon : "success",
				buttons : true,
				dangerMode : true,
				buttons : ['No', 'Yes!'],

			}).then((willDelete) => {
				if (willDelete) {


				$("#skp_form").trigger('reset');
				$("#skp_form select").trigger('change');
				$("#msg").hide();
				$("#myModalskp").modal('hide');
				$("#myModalprint").modal('toggle');

				$("#modal_print_tittle").text(' SKP Print Preview');
				$("#id_skp_print").val(productbox);
				$("#print_language").select2({ placeholder : "" });

				var urla   = "<?= site_url('maxcrm/win/dataterm') ?>";
				$.ajax({
					url : urla ,
					type : 'POST',
					data    : { id_skp : productbox },
					datatype : 'JSON',
					cache: false,
					success : function(data){
						var d = $.parseJSON(data);
						var output;
						$.each(d,function(i,e) {
							output += '<tr><th>'+e.stats+'</th><th>'+e.due+'</th><th>'+e.sumpost+'</th></tr>';

						});

						$('#myTable').append(output); 


					}
				});

				var urlb   = "<?= site_url('maxcrm/win/dataservice') ?>";
				$.ajax({
					url : urlb ,
					type : 'POST',
					data    : { id_skp : productbox },
					datatype : 'JSON',
					cache: false,
					success : function(data){
						var d = $.parseJSON(data);
						var output;

						$.each(d,function(i,e) {



							output += '<tr><td style="vertical-align: text-top; width: 30%;"></td><td style="padding-left: 6px;"><li>' + e.nameservice + '  ' + e.noteservice + '  ' +'<div style="margin-left:0px; border-bottom: 1px solid black;"></div>'+ '</li></td></tr>';

						});

						$('#myTable2').append(output); 


					}
				});


				}else{

				location.reload();


				}
			});
		}









				}

			});


		});


		$(document).on('click', '#editskp', function() {

			$('#Frm').trigger('reset');
			document.getElementById("skp_form").reset();

			var id_customer = $(this).attr('data');
			var id_oppstage = $(this).attr('data_opp');
			var id_opp      = $(this).attr('data_opp_1');
			var id_direct   = $(this).attr('data_direct');
			var data_skp    = $(this).attr('data_skp');

			if(id_direct == 0 ){
		
			$("#skp_manager").html(" SKP Verification");
			$("#myModalskp").modal('toggle');

			$.ajax({

				url : "<?= base_url('maxcrm/contact_list/get_data_edit') ?>",
				type : "POST",
				data : { id_customer : $(this).attr('data') },
				dataType : "json",
				success : function(data) {

						$('#id_customer_skp').val(data.id_customer);
						$('#id_oppstage').val(id_oppstage);
						$('#id_customer_mail').val(data.id_customer);
					
						// Profile

				        $("#small_skptittle").html('<span class="fa fa-address-card"></span>  <span class="text" id=""></span>' + data.salutation_name + " " + data.first_name + ' ' + data.last_name +  ' <span class="fab fa-whatsapp"> ' + data.whatsapp_customer);
						$("#id_cus").text(" " + data.id_customer + " - " + data.created_customer);
						$("#nama_cus").text(" " + data.salutation_name + " " + data.first_name + " " + data.last_name);
						$("#phone_wa").text(" " + data.phone_customer + " - " + data.whatsapp_customer);
						$("#email_cus").text(" " + data.email_customer);
						$("#id_card_cus").text(" " + data.id_cardcustomer);
						$("#born_cus").text(" " + data.age_customer);
						$("#address_street_cus").text(" " + data.address_street);
						$("#address_detail_cus").text(" " + data.address_city + " | " + data.address_state + " | " + data.address_country + " | " + data.address_postalcode);
						$("#assign_source_cus").text(" " + data.assigned_customer + " | " + data.nama_event);


						var gen = data.salutation_name;
						var profile;

						if (gen === "Mr."){
						profile="<?= base_url() ?>assets/dist/img/avatar04.png";

						}else if(gen === "Ms." || gen ==="Mrs."){

						profile="<?= base_url() ?>assets/dist/img/avatar2.png";

						}else{

						profile="<?= base_url() ?>assets/dist/img/AdminLTELogo.png";

						}

						document.getElementById("profile_image").src=profile;

						var gmapscity = data.address_city;
						var gmapsadd = data.address_street;
						var officeadd = data.office_customer;

						$.each(data, function(key, value) {

							var inputan = $('[name=' + key + ']');
							var select = $('select#' + key);

							if (inputan.prop('type') == 'select-one') select.val(value).trigger('change');
							else inputan.val(value);

						});


						// Verification Data Customer Account Full

						var nm_1   = data.first_name;
						var no_1   = data.phone_customer;
						var no_2   = data.whatsapp_customer;
						var idcard = data.id_cardcustomer;


						if(nm_1 != ""){
					    document.getElementById("cn_1").checked=true;
						}
						if((no_2 != "") || (no_1 != "") ){
						document.getElementById("cn_2").checked=true;
						}

						if(idcard != ""){
						document.getElementById("cn_3").checked=true;
						}


						//

						var id_customer =data.id_customer;
						
						$('#dataTable8 tfoot th').each( function () {
							var title = $(this).text();
							$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
						} );

						$('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
							$($.fn.dataTable.tables( true ) ).css('width', '100%');
							$($.fn.dataTable.tables( true ) ).DataTable().columns.adjust().draw();
						} );

						var table = $("#dataTable8").DataTable({

							'processing' : true,
							"scrollY": 280,
							'autoWidth' : false,
							'info'	: true,
							'paging'	: false,
							'destroy'	: true,
							"dom": '<"top"l>rt<"bottom"i><"clear">',
							"lengthChange": false,
							"lengthMenu": [[5,25,50,100], [5,25,50,100]],
							'ajax' : {
								'url' : "<?= site_url('maxcrm/win/get_package_list') ?>",
								'type' : "POST",
								'data' : { id_oppstage : id_oppstage  },
								'dataType' : "json",

							},
							"columnDefs": [
							{
								"targets": [1],
								"searching": false,
								"ordering" : false
							},
							{
								"targets": [ 0 ],
								"searching": false
							}
							],







						});


						// Apply the search
						table.columns().every( function () {
							var that = this;

							$( 'input', this.footer() ).on( 'keyup change clear', function () {
								if ( that.search() !== this.value ) {
									that
									.search( this.value )
									.draw();
								}
							} );
						} );

						 // $("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');

						 table.on( 'order.dt search.dt', function () {
						 	table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
						 		cell.innerHTML = i+1;
						 	} );
						 } ).draw();





						 $.ajax({

						 	url : "<?= base_url('maxcrm/activity/get_data_cart_2') ?>",
						 	type : "POST",
						 	data : { id_oppstage : id_opp },
						 	dataType : "json",
						 	success : function(data) {

						 	//Term Of Payment

						 	var satuan = data.id_satuan;
						 	if ((satuan == 2) || (satuan == 3)){
						 		document.getElementById("per_1").checked=true;
						 	}else{
						 		document.getElementById("per_3").checked=true;
						 	}


						 	$('#nmproduct').text(data.product_name);
						 	$('#paxproduct').text(data.pax_cart + ' X ' + data.pax_product);
						 	$('#nmprice').text( ' IDR ' + data.product_price_a);
						 	$('#admprice').text( ' IDR ' + data.price_adm);
						 	$('#discprice').text( ' IDR ' + data.price_discount);
						 	$('#subprice').text( ' IDR ' + data.price_subtotal);
						 	$('#vatprice').text( ' IDR ' + data.price_vat);
						 	$('#totalprice').text( ' IDR ' + data.price_total);

						 	$('#clcash').text( ' IDR ' + data.price_total);

						 	var nmprice_convert_a    = data.product_price_a;
						 	var admprice_convert_a   = data.price_adm;
						 	var discprice_convert_a  = data.price_discount;
						 	var vatprice_convert_a   = data.price_vat;
						 	var totalprice_convert_a = data.price_total;

						 	var nmprice_convert_b    = nmprice_convert_a.replace(/[,]/g,'');
						 	var admprice_convert_b   = admprice_convert_a.replace(/[,]/g,'');
						 	var discprice_convert_b  = discprice_convert_a.replace(/[,]/g,'');
						 	var vatprice_convert_b   = vatprice_convert_a.replace(/[,]/g,'');
						 	var totalprice_convert_b = totalprice_convert_a.replace(/[,]/g,'');


						 	$('#inprice').val(nmprice_convert_b);
						 	$('#indisc').val(discprice_convert_b);
						 	$('#invat').val(vatprice_convert_b);
						 	$('#inpax').val(data.pax_cart);
						 	$('#inadm').val(admprice_convert_b);


						 	$('#incash').val(totalprice_convert_b);


						 	$('#mbrproduct').text(data.product_name + " ( " + data.pax_cart + ' X ' + data.pax_product + " ) ");

						 

						 	var  mbra = data.stsocc_product;
						 	var  mbrb = data.stsmember_product;
						 	var  mbrc = data.stsunit_product;
						 	var  mbrd = data.stsrefund_product;

						 	var stsa;
						 	var stsb;
						 	var stsc;
						 	var stsd;

						 	if(mbra=='1'){  stsa="Single"; } else if(mbra=='2'){ stsa="Couple";}else{stsa="General";   }
						 	if(mbrb=='1'){  stsb="Independent"; } else if(mbrb=='2'){ stsb="High Care";   } else if (mbrb=='3'){ stsb="Low Care"; }else{  stsb="General Membership";   }


						 	if(mbrc=='1'){  stsc="Apartement Deluxe"; document.getElementById("room_card").hidden=false;
						 	} else if (mbrc=='2'){ stsc="Apartement Executive";  document.getElementById("room_card").hidden=false; 
						 	} else if (mbrc=='3'){ stsc="Villa Abiko"; document.getElementById("room_card").hidden=false; 
						 	} else if (mbrc=='4'){ stsc="Villa Aisai";  document.getElementById("room_card").hidden=false;  
						 	}else{  stsc="Non-Room";  $('#id_room').val(''); 
						 	document.getElementById("room_card").hidden=true; }


						 	if(mbrd=='1'){  stsd="Refundable"; }else{  stsd="Non-Refundable";   }

	                        $('#mbrtype').text(" " +data.nm_membership + " ( " + stsa + " - " + stsd + ")"); // input
	                        $('#mbrctg').text(" " + stsb); // input
	                        $('#mbrunit').text(" " + stsc); // input

	                        $('#stsa').val(stsa);
	                        $('#stsb').val(stsb);
	                        $('#stsc').val(stsc);
	                        $('#stsd').val(stsa);
	                        $('#mbre').val(data.nm_membership);
	                        $('#mbrf').val(data.id_satuan);
	                        $('#paxtriger').val(data.id_satuan);

	                        $('#payment_due_start').text(' Payment Due');


	                        $.ajax({

	                        	url : "<?= site_url('maxcrm/win/selectroom') ?>",
	                        	type : "POST",
	                        	data : { id_room : mbrc },
	                        	dataType : "json",
	                        	success : function(data){

	                        		$.each(data, function(key, value) {
	                        			$("#id_room").append("<option value='" + value.id + "'> " + value.name + " </option>");
	                        		});

	                        	}

	                        });






						 	}


						 });















					}

				});

			}else{

			


				$("#skp_form").trigger('reset');
				$("#skp_form select").trigger('change');
				$("#msg").hide();
				$("#myModalskp").modal('hide');
				$("#myModalprint").modal('toggle');

				$("#modal_print_tittle").text(' SKP Print Preview');
				$("#id_skp_print").val(data_skp);
				$("#print_language").select2({ placeholder : "" });

		
				var urla   = "<?= site_url('maxcrm/win/dataterm') ?>";
				$.ajax({
					url : urla ,
					type : 'POST',
					data    : { id_skp : data_skp },
					datatype : 'JSON',
					cache: false,
					success : function(data){
						var d = $.parseJSON(data);
						var output;
						$.each(d,function(i,e) {
							output += '<tr><th>'+e.stats+'</th><th>'+e.due+'</th><th>'+e.sumpost+'</th></tr>';

						});

						$('#myTable').append(output); 


					}
				});

				var urlb   = "<?= site_url('maxcrm/win/dataservice') ?>";
				$.ajax({
					url : urlb ,
					type : 'POST',
					data    : { id_skp : data_skp },
					datatype : 'JSON',
					cache: false,
					success : function(data){
						var d= $.parseJSON(data);

						var output;
						$.each(d,function(i,e) {
							output += '<tr><td style="vertical-align: text-top; width: 30%;"></td><td style="padding-left: 6px;"><li>' + e.nameservice + '  ' + e.noteservice + '  ' +'<div style="margin-left:0px; border-bottom: 1px solid black;"></div>'+ '</li></td></tr>';

						});

						$('#myTable2').append(output); 


					}
				});





			
			}

		});



$('.addr').click(function() {
   if($('#add_2').is(':checked')) { 
   	document.getElementById("mailing_check").hidden=false;
   	document.getElementById("mailing_btn_check").hidden=false;
   	var id_customer = $('#id_customer_skp').val();
   	$("#id_mailing").select2({ placeholder : "" });
   	$.ajax({

		url : "<?= site_url('maxcrm/win/selectaddr') ?>",
		type : "POST",
		data : { id_customer : id_customer },
		dataType : "json",
		success : function(data){

			$.each(data, function(key, value) {
				$("#id_mailing").append("<option value='" + value.id + "'> " + value.name  + " </option>");
			});

		}

	});






   } else if ($('#add_1').is(':checked')){
   	document.getElementById("mailing_check").hidden=true;
   	document.getElementById("mailing_btn_check").hidden=true;
    $('#id_mailing').val('');
   	}

});






$('.term').click(function() {
   if($('#term_2').is(':checked')) { 
   	document.getElementById("tr_term_pay_ins").hidden=false;
   	document.getElementById("tr_term_pay_dp").hidden=false;
   	document.getElementById("tr_clins").hidden=false;
   	document.getElementById("tr_cldp").hidden=false;
   	document.getElementById("code_dp").hidden=false;
   	document.getElementById("tr_clcash").hidden=true;
   	document.getElementById("term_pay_per").hidden=true;
   	$('#payment_due_start').text(' Payment Start');
   	document.getElementById("term_pay_end_tr").hidden=false;


var cash=$('#incash').val();
var dpa= parseInt(cash)/2;
var dpround = Math.round(dpa);
var dp  = parseInt(dpround);
var ins = parseInt(cash)-parseInt(dpround);

var dpidr=dp.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
var insidr=ins.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");


$('#clins').text( ' IDR ' + dpidr + ' X 1');
$('#cldp').text( ' IDR ' + insidr);
$('#inins').val(dp);
$('#indp').val(ins);
$('#term_pay_dp').val(dpidr);




   } else if ($('#term_1').is(':checked')){
   	document.getElementById("tr_term_pay_ins").hidden=true;
   	document.getElementById("tr_term_pay_dp").hidden=true;
   	document.getElementById("tr_clins").hidden=true;
   	document.getElementById("tr_cldp").hidden=true;
   	document.getElementById("code_dp").hidden=true;
   	document.getElementById("tr_clcash").hidden=false;
   	document.getElementById("term_pay_per").hidden=true;
   	$('#payment_due_start').text(' Payment Due');
   	document.getElementById("term_pay_end_tr").hidden=true;


   	$('#clins').text( ' IDR ' + '0');
   	$('#cldp').text( ' IDR ' + '0');
   	$('#inins').val('');
   	$('#indp').val('');

   	}

});

$('#term_pay_dp').change(function() {

	var cash = $('#incash').val();
	var dp   = $('#term_pay_dp').val();
	var ins  = $('#term_pay_ins').val();

	var dp_long		= dp.length;
	var dp_convert  = dp.replace(/[,]/g,'');
	
	if(dp_long > 2){
	var dp_get = dp_convert;
	}else{
	var dp_geta = (parseInt(cash)*dp)/100;
	var dp_getab = Math.round(dp_geta);
    var dp_get = parseInt(dp_getab);
	}

	var searchins = (parseInt(cash)-parseInt(dp_get))/parseInt(ins);
	var ins_get = Math.round(searchins);
	var ins_check = (parseInt(ins_get)*ins)+parseInt(dp_get);
	var dp_check  = parseInt(ins_check)-parseInt(cash);
	var dp_fix    = parseInt(dp_get)-parseInt(dp_check);
    

	var ins_new = parseInt(ins);

	var dp_fixidr = dp_fix.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	var ins_idr   = ins_get.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

    $('#clins').text(' IDR ' + ins_idr + ' X ' + ins_new);
    $('#cldp').text(' IDR ' + dp_fixidr);
    $('#inins').val(ins_get);
    $('#indp').val(dp_fix);

});


$('#term_pay_ins').change(function() {

	var cash = $('#incash').val();
	var dp   = $('#term_pay_dp').val();
	var ins  = $('#term_pay_ins').val();

	var dp_long		= dp.length;
	var dp_convert  = dp.replace(/[,]/g,'');
	
	if(dp_long > 2){
	var dp_get = dp_convert;
	}else{
	var dp_geta = (parseInt(cash)*dp)/100;
	var dp_getab = Math.round(dp_geta);
    var dp_get = parseInt(dp_getab);
	}

	var searchins = (parseInt(cash)-parseInt(dp_get))/parseInt(ins);
	var ins_get = Math.round(searchins);
	var ins_check = (parseInt(ins_get)*ins)+parseInt(dp_get);
	var dp_check  = parseInt(ins_check)-parseInt(cash);
	var dp_fix    = parseInt(dp_get)-parseInt(dp_check);
    

	var dp_fixidr = dp_fix.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	var ins_idr   = ins_get.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");

    $('#clins').text(' IDR ' + ins_idr + ' X ' + ins);
    $('#cldp').text(' IDR ' + dp_fixidr);
    $('#inins').val(ins_get);
    $('#indp').val(dp_fix);

});

$('#mbrcheckin').on('change', function() {

  var checkin_date = $("#mbrcheckin").val();
  var period = $("#mbrf").val();
  var pax = $("#inpax").val();

  $.ajax({

  	url : "<?= site_url('maxcrm/win/searchco') ?>",
  	type : "POST",
  	data : { dtcheckin: checkin_date, period : period, pax : pax  },
  	dataType : "json",
  	success : function(data){

  		$('#mbrcheckout').val(data.dtco);
  		$('#term_pay_due').val(data.dtci);
  		$('#term_pay_end').val(data.dtco);
  		$('#selisih').val(data.selisih);

  	}

  });

});


$('#term_pay_due').on('change', function() {

  var checkin_date =  $("#term_pay_due").val();
  var checkout_date = $("#term_pay_end").val();

  $.ajax({

  	url : "<?= site_url('maxcrm/win/searchdiff') ?>",
  	type : "POST",
  	data : { dtcheckin: checkin_date, dtcheckout : checkout_date  },
  	dataType : "json",
  	success : function(data){
  		$('#term_pay_due').val(data.dtci);
  		$('#term_pay_end').val(data.dtco);
  		$('#selisih').val(data.selisih);

  	}

  });

});


$('#term_pay_end').on('change', function() {

  var checkin_date =  $("#term_pay_due").val();
  var checkout_date = $("#term_pay_end").val();

  $.ajax({

  	url : "<?= site_url('maxcrm/win/searchdiff') ?>",
  	type : "POST",
  	data : { dtcheckin: checkin_date, dtcheckout : checkout_date  },
  	dataType : "json",
  	success : function(data){
  		$('#term_pay_due').val(data.dtci);
  		$('#term_pay_end').val(data.dtco);
  		$('#selisih').val(data.selisih);

  	}

  });

});




$(document).on('click', '#pic_2', function() {
	document.getElementById("pic_check").hidden=false;
	document.getElementById("pic_check_stats").hidden=false;
	document.getElementById("pic_btn_check").hidden=false;
	$("#id_pic").select2({ placeholder : "" });
	$.ajax({

		url : "<?= site_url('customers/select2') ?>",
		type : "POST",
		dataType : "json",
		success : function(data){

			$.each(data, function(key, value) {
				$("#id_pic").append("<option value='" + value.id + "'> " + value.sal + ' ' + value.f_name + ' ' + value.l_name + " </option>");
			});

		}

	});

});


$(document).on('click', '#pic_1', function() {
document.getElementById("pic_check").hidden=true;
document.getElementById("pic_check_stats").hidden=true;
document.getElementById("pic_btn_check").hidden=true;
$('#id_pic').val('');
});

$('#buttonskp').on('click', function() {
	$("#modal-title-add").html("<span class='fa fa-plus'></span> Create New Contact");
	$("#modal-back").hide(); 
	$("#myModalskp").hide();
	$('#id_customer').val('');
	$('#Frm').trigger('reset');
	$('#Frmmodedit').trigger('reset');
	$("#Frm select").trigger('change');
});

		$(document).on('click', '#delete', function() {

			swal({
				title : "Confirm",
				text : "Are you sure ?",
				icon : "warning",
				buttons : true,
				dangerMode : true,
				buttons : ['No', 'Yes!'],

			}).then((willDelete) => {
				if (willDelete) {

					$.ajax({

						url : "<?= site_url('maxcrm/contact_list/delete') ?>",
						type : "POST",
						data : { id_customer : $(this).attr('data') },
						success : function(data) {

							swal("Your data has been deleted!", {
								icon : "success",
							});

							table.ajax.reload();

						}

					});

				}
			});
			$('#Frmmodedit').trigger('reset');

		});

		$(document).on('change', '#phone_customer', function() {

			var phone= document.getElementById("phone_customer").value;
			document.getElementById("whatsapp_customer").value=phone; 
		});


		

		$('#btnBackModalprint').on('click', function() {
			$("#print_preview").trigger('reset');
			location.reload();	
		});




		$('#buttonskp').on('click', function() {
			$("#modal-title-add").html("<span class='fa fa-plus'></span> Create New Contact");
			$("#modal-back").hide();
			$('#id_customer').val('');
			document.getElementById("Frm").reset();
			$("#Frm select").trigger('change');
		});

		$('#btn_skip').on('click', function() {
			location.reload();	
		});

			$("#modal-btn-edit").on('click', function() {
				$("#modal-back").show();
			});

		});

	</script>