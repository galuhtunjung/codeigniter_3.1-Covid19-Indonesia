
<script>
$(document).ready(function() {

	$('#dataTable tfoot th').each( function () {
		var title = $(this).text();
		$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
	} );

	$("#dataTable").DataTable().destroy();
		 var table = $("#dataTable").DataTable({
		 	'processing' : true,
		 	'scrollY': '300px',
		 	"scrollX": true,
		 	'autoWidth' : false,
		 	'info'	: true,
		 	'destroy'	: true,
		 	"pagingType": "simple_numbers",
		 	"dom": '<"top"l>rt<"bottom"ip><"clear">',
		 	"lengthChange": true,
		 	"language": {
		 		"decimal": ",",
		 		"thousands": "."
		 	},
		 	'fixedColumns':   {
		 		'heightMatch': 'none'
		 	},
		 	"lengthMenu": [[10,30,50,100], [10,30,50,100]],
		 	'ajax' : {
		 		'url' : "<?= site_url('sources/get_list_data') ?>",
		 		'type' : "POST",
		 	},

		 });

		 $.fn.DataTable.ext.pager.numbers_length = 5;
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



		$("#frm_create_update").submit(function(e) {
			e.preventDefault();

			var id_source = $("#id_source").val();

			if (id_source == '') {
				var url = "<?= site_url('sources/save_data') ?>";
			} else {
				var url = "<?= site_url('sources/update_data') ?>";
			}

			$.ajax({
				url     : url,
				type    : "POST",
				data    : $(this).serialize(),
				dataType: "json",
				success : function(output) {
					
					$("#id_source").val('');
					$("#frm_create_update").trigger('reset');
					$("#frm_create_update select2").trigger('change');
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
			$("#modal-title-add").html("<span class='fa fa-plus'></span> Update Data Covid");
			$("#modal-back").hide();
			$('#id_source').val('');
			$('#frm_create_update').trigger('reset');
			$("#frm_create_update select2").trigger('change');
		});

		$(document).on('click', '#edit', function() {
			$("#modal-title-add").html("<span class='fa fa-edit'></span> Edit Data Covid");
			$("#modal_create_update").modal('toggle');
			$.ajax({
				url : "<?= base_url('sources/get_data_edit') ?>",
				type : "POST",
				data : { id_source : $(this).attr('data') },
				dataType : "json",
				success : function(data) {
					$('#id_source').val(data.id_source);
					$('#date_source').val(data.date_source);
					$('#positif_covid').val(data.positif_covid);
					$('#rec_covid').val(data.rec_covid);
					$('#death_covid').val(data.death_covid);
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
						url : "<?= site_url('sources/delete') ?>",
						type : "POST",
						data : { id_source : $(this).attr('data') },
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