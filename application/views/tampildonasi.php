  <!-- bootstrap wysihtml5 - text editor galuh -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<style>
tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
    }

#dataTables tbody tr {
max-height: 5px; /* or whatever height you need to make them all consistent */
}

#datatable > tbody > tr > td {
    word-break: break-all;
}

th { height: 10px;  font-size: 10px; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}
td { height: 10px; font-size: 10px; text-align: left; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}
</style>

<!-- Main content -->
<section class="content">
  <div class="row">

<div class="col-md-12 p-0" style="text-align: center;">
        <span class=" " style="font-weight: bold; font-size: 9px; text-align: : justify;" id="">
          M&nbspA&nbspX&nbspP&nbspR&nbspO&nbspI&nbspT&nbspS&nbspO&nbspL&nbspU&nbspT&nbspI&nbspO&nbspN
        </span>
      </div>
       <div class="col-md-12 p-0" style="text-align: center;">
          <span class="" style="margin-top: 0px; font-weight: bold; font-size: 26px; color:  #ff0040;" id="">
            D&nbspO&nbspN&nbspA&nbspS&nbspI&nbsp <i class="fas fa-handshake"></i> &nbspR&nbspO&nbspX&nbspY<sup></sup>
          </span>
         </div>
         <div class="col-md-12 mt-1" style="text-align: center;">
            <span class="" style="font-weight: bold; font-size: 9px; text-align: : justify;" id="">
             <!--  &copy; 2019  --><a href="#" style="font-weight: bold; font-size: 11px; color: #000000;"> Bakti Sosial Untuk Masyarakat Mekarmukti </a> 
            </span>
        </div>
         <div class="col-md-12 mt-1" style="text-align: center; font-weight: bold; font-size: 11px; color: #000000;">
          <span id="date-full-part"></span>
         </div>

<!--         <div class="col-md-3">
         <div class="info-box" style="margin-top: 15px;">
          <span class="info-box-icon bg-navy elevation-2" ><span style="font-size: 32px; font-weight: bold;" id="date1-part"></span> </span>

          <div class="info-box-content">
           <span class="info-box-number" style=" font-size: 12px;" id="date3-part"></span>
           <span class="info-box-number" style="font-weight: bold; font-size: 16px; color:  #ff0040;" id="date2-part"></span>
           <span class="info-box-number" style="font-weight: bold; font-size: 16px;" id="time-part">

           </span>
         </div>
       </div>
     </div>
 -->






    <div class="col-12 col-lg-12 col-md-12">

     <div id="pesan" style="display: none;">
      <div  id="pesanbox" class=""> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <h7><div class="pesan"></div> </h7>
     </div>
   </div>

   <div class="card mt-1">
    <div class="card-header">
      <h3 class="card-title">
        <button class="btn bg-yellow" type="button">
          <span class="fa fa-address-card"></span>
         DATA DONASI
        </button>
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="dataTable" class="table table-hover table-bordered table-striped nowrap" style="width: 100%;" cellpadding="0" cellspacing="0">
        <thead class="bg-yellow">
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tfoot>
          <th>No.</th>
          <th>Name</th>
          <th>Jumlah</th>
        </tfoot>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->


</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

<?php $this->load->view('js/js_tampildonasi'); ?>