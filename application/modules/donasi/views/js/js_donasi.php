
<script>
$(document).ready(function() {

	$('#dataTable tfoot th').each( function () {
	var title = $(this).text();
	$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
} );

	document.getElementById("dataTable").className = "table table-hover table-bordered table-striped";
	$("#dataTable").DataTable().destroy();
	var table = $("#dataTable").DataTable({
		'processing' : true,
		"scrollY": 500,
		"scrollX": false,
		'paging': false,
		'info'	: true,
		'destroy'	: true,
		"columnDefs": [
		{ "width": "50%", "targets": 2 }
		],
		'columnDefs': [
		{
      "targets": 0, // your case first column
      "className": "text-center",
      "width": "4%"
  		},
  		{
  	"targets": 2,
  	"className": "text-right",
  		}],
		
		"dom": '<"top"Bl>rt<"bottom"i><"clear">',
		"language": {
			"decimal": ",",
			"thousands": "."
		},
		"lengthMenu": [[5,25,50,100], [5,25,50,100]],
		'ajax' : {
			'url' : "<?= site_url('donasi/get_list_data') ?>",
			'type' : "POST",

		},      

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
							.column( 2, {  page:   'all' } )
							.data()
							.reduce( function (a,b) {
								return intVal(a) + intVal(b);
							}, 0 );

							 // Total over this page
							 var pageTotal = api
							 .column( 2, { page: 'current'} )
							 .data()
							 .reduce( function (a, b) {
							 	return intVal(a) + intVal(b);
							 }, 0 );
							 
							// Update footer
							var numFormat = $.fn.dataTable.render.number( '\,', '.', 0,  ).display;
							$( api.column( 2 ).footer() ).html("Rp. "+numFormat(pageTotal) + ",-");

							// Update footer
							
						},buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]

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

	// $("#dataTable").DataTable().destroy();
	// 	 var table = $("#dataTable").DataTable({
	// 	 	'processing' : true,
	// 	 	'scrollY': '300px',
	// 	 	"scrollX": true,
	// 	 	'autoWidth' : false,
	// 	 	'info'	: true,
	// 	 	'destroy'	: true,
	// 	 	"pagingType": "simple_numbers",
	// 	 	"dom": '<"top"l>rt<"bottom"ip><"clear">',
	// 	 	"lengthChange": true,
	// 	 	"language": {
	// 	 		"decimal": ",",
	// 	 		"thousands": "."
	// 	 	},
	// 	 	'fixedColumns':   {
	// 	 		'heightMatch': 'none'
	// 	 	},
	// 	 	"lengthMenu": [[10,30,50,100], [10,30,50,100]],
	// 	 	'ajax' : {
	// 	 		'url' : "<?= site_url('donasi/get_list_data') ?>",
	// 	 		'type' : "POST",
	// 	 	},

	// 	 });

	// 	 $.fn.DataTable.ext.pager.numbers_length = 5;
	// 	 table.on( 'order.dt search.dt', function () {
	// 	 	table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
	// 	 		cell.innerHTML = i+1;
	// 	 	} );
	// 	 } ).draw();

	// 					// Apply the search
	// 	table.columns().every( function () {
	// 		var that = this;
			
	// 		$( 'input', this.footer() ).on( 'keyup change clear', function () {
	// 			if ( that.search() !== this.value ) {
	// 				that
	// 				.search( this.value )
	// 				.draw();
	// 			}
	// 		} );
	// 	} );

		$("#donasi_trans_method").select2({ placeholder : "- SELECT ONE -" });

		$("#Frm").submit(function(e) {
			e.preventDefault();

			var donasi_id = $("#donasi_id").val();

			if (donasi_id == '') {
				var url = "<?= site_url('donasi/save_data') ?>";
			} else {
				var url = "<?= site_url('donasi/update_data') ?>";
			}

			$.ajax({
				url     : url,
				type    : "POST",
				data    : $(this).serialize(),
				dataType: "json",
				success : function(output) {
					
					$("#donasi_id").val('');
					$("#Frm").trigger('reset');
					$("#Frm select2").trigger('change');
					$("#msg").hide();
					$("#modal_create_update").modal('toggle');
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
				}

			});

		});

		$('#button').on('click', function() {
			$("#modal-title-add").html("<span class='fa fa-plus'></span> Add Data");
			$('input[name="donasi_status"]').attr('checked', false);
			$("#modal-back").hide();
			$('#donasi_id').val('');
			$('#Frm').trigger('reset');
			$("#Frm select2").trigger('change');
		});

		$(document).on('click', '#edit', function() {
			$("#modal-title-add").html("<span class='fa fa-edit'></span> Edit Data");
			$("#modal_create_update").modal('toggle');
			$.ajax({
				url : "<?= base_url('donasi/get_data_edit') ?>",
				type : "POST",
				data : { donasi_id : $(this).attr('data') },
				dataType : "json",
				success : function(data) {
					$('#donasi_id').val(data.donasi_id);
					$('#donasi_nama').val(data.donasi_nama);
					$('#donasi_jumlah').val(data.donasi_jumlah);
					$('#donasi_trans_method').val(data.donasi_trans_method);
					$('#donasi_note').val(data.donasi_note);
					$('#donasi_status').val(data.donasi_status);

					if (data.donasi_status == 1) {
						$('#donasi_status1').attr('checked', 'checked');
					} else {
						$('#donasi_status0').attr('checked', 'checked');
					}
				}

			});

		});

$(document).on('click', '#delete', function() {

			swal({
				title : "Confirm",
				text : "Are you sure Delete This Data ?",
				icon : "warning",
				buttons : true,
				dangerMode : true,
				buttons : ['No', 'Yes!'],

			}).then((willDelete) => {
				if (willDelete) {
					$.ajax({
						url : "<?= site_url('donasi/delete') ?>",
						type : "POST",
						data : { donasi_id : $(this).attr('data') },
						success : function(data) {

							swal("Your data has been deleted!", {
								icon : "success",
							});

							table.ajax.reload();

						}

					});

				}
			});

		});



	});

</script>