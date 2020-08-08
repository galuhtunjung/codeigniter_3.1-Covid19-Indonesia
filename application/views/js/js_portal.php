<script>
    $(document).ready(function() {

      $('#modal_promo').modal('show');

      setTimeout(function() {
        $('#modal_promo').modal('hide');
      }, 7000);

      var timeleft = 5;
      var downloadTimer = setInterval(function(){
        if(timeleft <= 0){
          clearInterval(downloadTimer);
        }
        document.getElementById("progressBar").value = 5 - timeleft;
        timeleft -= 1;
      }, 1000);

      $.ajax({

        url : "<?= base_url('portal/get_data_global') ?>",
        type : "POST",
        dataType : "json",
        success : function(data) {
        $('#positif_global').html(data.global_positif);
        $('#sembuh_global').html(data.global_sembuh);
        $('#md_global').html(data.global_md);

        $('#gb_data').text('Sembuh : '+ data.global_sembuh + ' - Meninggal : ' +data.global_md);



        }

      });

      $.ajax({
        url : "<?= base_url('portal/get_data_array_id') ?>" ,
        type : 'POST',
        datatype : 'JSON',
        cache: false,
        success : function(data){
          var d = $.parseJSON(data);
          var output='';
          var output2='';
          var output3='';
          var output4='';
          $.each(d,function(i,e) {
            output += e.positif;
            output2 += e.sembuh;
            output3 += e.meninggal;
            output4 += ' POSITIF'+' ( DIRAWAT : ' + e.dirawat + ' ) ';
          });

          $('#positif_id').html(output);
          $('#sembuh_id').html(output2);
          $('#meninggal_id').html(output3);
          $('#dirawat_id').html(output4);
        }
      });


    $(document).on('click', '#btn_provinsi', function() {

      $("#modal-title-add").html("<span class='fas fa-map-marked-alt'> COVID19 PER-PROVINSI</span>");
      $("#modal-back").hide();
      $("#modal_provinsi").modal('toggle');


    $("#dataTable").DataTable().destroy();
    var table = $("#dataTable").DataTable({
      'processing' : true,
      'scrollY' : '420',
      'autoWidth' : false,
      'info'  : true,
      'destroy' : true,
      "pagingType": "simple_numbers",
      "dom": '<"top"f>rt<"bottom"i><"clear">',
      "lengthChange": true,
      "language": {
        "decimal": ",",
        "thousands": "."
      },
      'fixedColumns':   {
        'heightMatch': 'none'
      },
      "lengthMenu": [[40], [40]],
       "aoColumnDefs": [
      {
        "aTargets":[2],
        "fnCreatedCell": function(nTd, sData, oData, iRow, iCol)
        {
          $(nTd).css('white-space', 'pre');
        }
      },

      ]

    });

    $.fn.DataTable.ext.pager.numbers_length = 5;
    table.on( 'order.dt search.dt', function () {
      table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
        cell.innerHTML = i+1;
      } );
    } ).draw();

  });





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