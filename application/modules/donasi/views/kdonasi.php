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

th { height: 10px;  font-size: 13px; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}
td { height: 10px; font-size: 12px; text-align: left; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}
</style>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12 col-lg-12 col-md-12">

     <div id="pesan" style="display: none;">
      <div  id="pesanbox" class=""> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
       <h7><div class="pesan"></div> </h7>
     </div>
   </div>

   <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        <button class="btn bg-yellow" type="button">
          <span class="fa fa-address-card"></span>
         COVID 19
        </button>
      </h3>

      <h3 class="card-title float-right">
        <button class="btn btn-success" id="button" data-toggle="modal" data-target="#modal_create_update" type="button">
          <span class="fa fa-plus"></span>
          MANUAL INPUT
        </button>
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="dataTable" class="table table-hover table-bordered table-striped nowrap" style="width: 100%;" cellpadding="0" cellspacing="0">
        <thead class="bg-yellow">
          <tr>
            <th width="5%">No.</th>
            <th width="40%">Name</th>
            <th width="15%">Donation Amount</th>
            <th width="15%">Transaction Method</th>
            <th width="15%">Note</th>
            <th width="5%" class="text-center" style="text-align: center;">
              <span class="fa fa-edit"></span>
            </th>
            <th width="5%" class="text-center" style="text-align: center;">
              <span class="fa fa-trash"></span>
            </th>
          </tr>
        </thead>
        <tfoot>
          <th width="5%">No.</th>
          <th width="40%">Name</th>
          <th width="15%">Donation Amount</th>
          <th width="15%">Transaction Method</th>
          <th width="15%">Note</th>
          <th width="5%" class="text-center" style="text-align: center;">
            <span class="fa fa-edit"></span>
          </th>
          <th width="5%" class="text-center" style="text-align: center;">
            <span class="fa fa-trash"></span>
          </th>
        </tfoot>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->



  <div class="modal" id="modal_create_update">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header bg-success">
          <h4 class="modal-title" id="modal-title-add"></h4>
          <button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></span></button>
        </div>

        <div class="modal-body">
          <div class="col-12 col-lg-12 col-md-12">
            <div class="card">
              <div class="card-body">
                <?= form_open('', array('id' => 'Frm')); ?>
                <div class="row">
                  <?php

                  $data = array(
                    'id'           => 'donasi_id',
                    'name'         => 'donasi_id',
                    'class'        => 'form-control',
                    'type'         => 'hidden',
                    'autocomplete' => 'off',
                    'required'     => 'required',
                    'style'        => 'width:100%;'
                  );
                  echo form_input($data);
                  ?>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Name*</label>
                      <?php

                      $data = array(
                        'id'           => 'donasi_nama',
                        'name'         => 'donasi_nama',
                        'class'        => 'form-control',
                        'type'         => 'text',
                        'autocomplete' => 'off',
                        'required'     => 'required',
                        'style'        => 'width:100%;'
                      );
                      echo form_input($data);

                      ?>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Donation Amount*</label>
                      <?php

                      $data = array(
                        'id'           => 'donasi_jumlah',
                        'name'         => 'donasi_jumlah',
                        'class'        => 'form-control',
                        'type'         => 'number',
                        'autocomplete' => 'off',
                        'required'     => 'required',
                        'style'        => 'width:100%;'
                      );
                      echo form_input($data);

                      ?>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Transaction Method*</label>
                      <?php

                      $data = array(
                        'id'           => 'donasi_trans_method',
                        'name'         => 'donasi_trans_method',
                        'class'        => 'form-control',
                        'type'         => 'text',
                        'autocomplete' => 'off',
                        'required'     => 'required',
                        'style'        => 'width:100%;'
                      );

                      $options = array(
                        ''         => '',
                        'Cash'     => 'Cash',
                        'Transfer' => 'Transfer',
                        'Proposal' => 'Proposal'
                      );

                      echo form_dropdown($data, $options);

                      ?>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Note*</label>
                      <?php

                      $data = array(
                        'id'           => 'donasi_note',
                        'name'         => 'donasi_note',
                        'class'        => 'form-control',
                        'type'         => 'text',
                        'autocomplete' => 'off',
                        'rows'         => '3',
                        'style'        => 'width:100%;'
                      );

                      echo form_textarea($data);

                      ?>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="" class="d-block">Display name as Anonymous*</label>
                      <input type="radio" required="required" name="donasi_status" id="donasi_status1" value="1"> Yes
                      <input type="radio" required="required" name="donasi_status" id="donasi_status0" value="0" class="ml-4"> No
                    </div>
                  </div>

                </div>
              </div>
            </div>

          
            <div class="form-group float-right">
     
              <button type="submit" class="btn btn-success">
                <span class="fa fa-check"></span>
                Save
              </button>
            </div>

            <button type="button" class="btn btn-danger" data-toggle="modal" data-dismiss="modal">
              <span class="fas fa-times-circle"></span>
              Close
            </button>

            <?= form_close(); ?>

          </div>  
        </div>
      </div>
    </div>
  </div>


</div>
<!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->

<?php $this->load->view('js/js_donasi'); ?>