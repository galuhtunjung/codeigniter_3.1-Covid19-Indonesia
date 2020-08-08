<script>
	$(document).ready(function() {

			$('#dataTable tfoot th').each( function () {
			var title = $(this).text();
			$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
		} );

		$("#dataTable").DataTable().destroy();
		var table = $("#dataTable").DataTable({
			'processing' : true,
			"scrollY": 360,
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

  "dom": '<"top"l>rt<"bottom"i><"clear">',
  "language": {
  	"decimal": ",",
  	"thousands": "."
  },
  "lengthMenu": [[5,25,50,100], [5,25,50,100]],
  'ajax' : {
  	'url' : "<?= site_url('tampildonasi/get_list_data') ?>",
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

	var interval = setInterval(function() {
        var momentNow = moment();
        $('#date-part').html( momentNow.format('dddd').substring(0,3) +' , ' + momentNow.format('D MMM Y ') 
          );
        $('#date1-part').html(momentNow.format('D') 
          );
         $('#date2-part').html( momentNow.format('MMMM Y ') 
          );
          $('#date3-part').html( momentNow.format('dddd ') 
          );
        $('#time-part').html(momentNow.format('hh:mm:ss')+' WIB');
        $('#date-full-part').html(momentNow.format('dddd')+' , '+momentNow.format('D MMMM Y ') + ' '+momentNow.format('HH:mm:ss')+ ' WIB'
          );
      }, 100);
	


});
</script>