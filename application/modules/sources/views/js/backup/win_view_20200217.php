<!-- Main content -->
<!-- iCheck for checkboxes and radio inputs Galuh-->
<link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/normalize/normalize.css') ?>">
  <!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

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

#datatable > tbody > tr > td {
    word-break: break-all;
}

th { font-size: 13px; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}
td { font-size: 12px; text-align: left; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}


li{
    margin: 0;
    padding: 0;
    list-style-type:none;
}

.button {
  -webkit-border-radius: 2px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 2000ms infinite;
  -moz-animation: glowing 2000ms infinite;
  -o-animation: glowing 2000ms infinite;
  animation: glowing 2000ms infinite;
}

@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 2px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 2px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 2px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 2px #B20000; }
}

.button2 {
  -webkit-border-radius: 2px;
  border-radius: 10px;
  border: none;
  color: #ffcc00;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowingb 2000ms infinite;
  -moz-animation: glowingb 2000ms infinite;
  -o-animation: glowingb 2000ms infinite;
  animation: glowingb 2000ms infinite;
}

@-webkit-keyframes glowingb {
  0% { background-color: #ffd633; -webkit-box-shadow: 0 0 1px #ffd633; }
  50% { background-color:  #ffcc00; -webkit-box-shadow: 0 0 10px #ffcc00; }
  100% { background-color: #ffd633; -webkit-box-shadow: 0 0 2px #ffd633; }
}

@-moz-keyframes glowingb {
  0% { background-color: #ffd633; -moz-box-shadow: 0 0 1px #ffd633; }
  50% { background-color: #ffcc00; -moz-box-shadow: 0 0 10px #ffcc00; }
  100% { background-color: #ffd633; -moz-box-shadow: 0 0 2px #ffd633; }
}

@-o-keyframes glowingb {
  0% { background-color: #ffd633; box-shadow: 0 0 1px #ffd633; }
  50% { background-color: #ffcc00; box-shadow: 0 0 10px #ffcc00; }
  100% { background-color: #ffd633; box-shadow: 0 0 2px #ffd633; }
}

@keyframes glowingb {
  0% { background-color: #ffd633; box-shadow: 0 0 1px #ffd633; }
  50% { background-color: #ffcc00; box-shadow: 0 0 10px #ffcc00; }
  100% { background-color: #ffd633; box-shadow: 0 0 2px #ffd633; }
}

.button3 {
  -webkit-border-radius: 2px;
  border-radius: 10px;
  border: none;
  color: #2eb82e;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowingc 2000ms infinite;
  -moz-animation: glowingc 2000ms infinite;
  -o-animation: glowingc 2000ms infinite;
  animation: glowingc 2000ms infinite;
}

@-webkit-keyframes glowingc {
  0% { background-color: #47d147; -webkit-box-shadow: 0 0 1px #47d147; }
  50% { background-color:  #2eb82e; -webkit-box-shadow: 0 0 10px #2eb82e; }
  100% { background-color: #47d147; -webkit-box-shadow: 0 0 2px #47d147; }
}

@-moz-keyframes glowingc {
  0% { background-color: #47d147; -moz-box-shadow: 0 0 1px #47d147; }
  50% { background-color: #2eb82e; -moz-box-shadow: 0 0 10px #2eb82e; }
  100% { background-color: #47d147; -moz-box-shadow: 0 0 2px #47d147; }
}

@-o-keyframes glowingc {
  0% { background-color: #47d147; box-shadow: 0 0 1px #47d147; }
  50% { background-color: #2eb82e; box-shadow: 0 0 10px #2eb82e; }
  100% { background-color: #47d147; box-shadow: 0 0 2px #47d147; }
}

@keyframes glowingc {
  0% { background-color: #47d147; box-shadow: 0 0 1px #47d147; }
  50% { background-color: #2eb82e; box-shadow: 0 0 10px #2eb82e; }
  100% { background-color: #47d147; box-shadow: 0 0 2px #47d147; }
}



</style>


<section class="content">
  <div class="row">
    <div class="col-12">
 <div id="pesan" style="display: none;">
  <div  id="pesanbox" class=""> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h7><div class="pesan"></div> </h7>
  </div>
</div>

  <div class="card">
    
    <div class="card-header">
      <h3 class="card-title mr-1">
        <button class="btn  bg-navy #001F3F" type="button">
          <span class="fa fa-address-card"></span>
            <span id="clabel">Win Result</span>
        </button>
      </h3>


 <?= form_open('', array('id' => 'frm_select_table_2')); ?>
       <h3 class="card-title col-md-1 float-right mr-1">
        <div class="form-group">
          <button type="submit" class="btn bg-yellow btn-block">
          <span class="fa fa-search"></span>
          Search
        </button>

        </div>
      </h3>

        <h3 class="card-title col-md-2 float-right mr-1" id="f_update_2" hidden="true">
          <div class="form-group">
          <?php

              $data = array(
                'id'           => 'update_cust_2',
                'name'         => 'update_cust_2',
                'class'        => 'form-control tanggalWaktu2',
                'type'         => 'text',
                'autocomplete' => 'off',
                'placeholder'  => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>

          </div>
        </h3>


          <h3 class="card-title col-md-1 float-right mr-1" id="f_age_2" >
          <div class="form-group">
          <?php

          $data = array(
            'id'           => 'age_cust_2',
            'name'         => 'age_cust_2',
            'class'        => 'form-control',
            'type'         => 'number',
            'min'          => '1',
            'value'        => '100',
            'autocomplete' => 'off',
            'placeholder'  => 'off',
            'style'        => 'width:100%;'
          );
              echo form_input($data);

              ?>

          </div>
        </h3>

          <h3 class="card-title col-md-2 float-right mr-1" id="f_update_1" hidden="true">
          <div class="form-group">
        
          <?php

              $data = array(
                'id'           => 'update_cust_1',
                'name'         => 'update_cust_1',
                'class'        => 'form-control tanggalWaktu2',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
          </div>
        </h3>

        <h3 class="card-title col-md-1 float-right mr-1" id="f_age_1" >
          <div class="form-group">
            <?php

            $data = array(
              'id'           => 'age_cust_1',
              'name'         => 'age_cust_1',
              'class'        => 'form-control',
              'type'         => 'number',
              'min'          => '1',
              'value'        => '1',
              'autocomplete' => 'off',
              'placeholder'  => 'off',
              'style'        => 'width:100%;'
            );
            echo form_input($data);
            ?>

          </div>
        </h3>


        <h3 class="card-title col-md-2 float-right mr-1" >
          <div class="form-group">
            <?php

            $data = array(
              'id'           => 'contact_category_2',
              'name'         => 'contact_category_2',
              'class'        => 'form-control',
              'type'         => 'text',
              'required'     => 'required',
              'style'        => 'width:100%;'
            );

            $options = array(
              '1' => 'Filtered By Age',
              '2' => 'Filtered By Create',
            );
            echo form_dropdown($data, $options);

            ?>

          </div>
        </h3>

         <h3 class="card-title col-md-2 float-right mr-1">
          <span> </span>
        </h3>


      </h3>


        <h3 class="card-title col-md-2" id="dcategory">
          <div class="form-group">

            <?php

            $data = array(
              'id'           => 'contact_category',
              'name'         => 'contact_category',
              'class'        => 'form-control',
              'type'         => 'text',
              'required'     => 'required',
              'style'        => 'width:100%;'
            );

            $options = array(
              '1' => 'Simple Datatable',
              '2' => 'Detail Datatable'
            );
            echo form_dropdown($data, $options);

            ?>
          </div>
          <?= form_close(); ?>

        </h3>
  

        </div>
        <!-- /.card-header -->

        <div class="card-body" id="dtable">
           <table id="dataTable" class="" style="width: 100%;" cellpadding="0" cellspacing="0">
             <thead>
               <tr>
                 <th width="2%">No.</th>
                 <th width="15%">Name</th>
                 <th width="2%">Age</th>
                 <th width="20%">Product</th>
                 <th width="15%">Source</th>
                 <th width="13%">Sign Lead</th>
                 <th width="13%">Sign Opp</th>
                 <th width="10%">Mark Won</th>
                 <th width="10%">Pax</th>
                 <th width="13%">Amount</th>
                 <th width="2%"class="text-center">
                <span class="fas fa-calculator"></span>
                 </th>
                 <th width="2%"class="text-center">
                 <span class="fa fa-print"></span>
                 </th>
                 <th>City</th>
                 <th>Price/U</th>
                 <th>Price Adm</th>
                 <th>Discount</th>
                 <th>Vat</th>
               </tr>
             </thead>
     <tfoot>
               <th width="2%">No.</th>
               <th width="15%">Name</th>
               <th width="2%">Age</th>
               <th width="20%">Product</th>
               <th width="15%">Source</th>
               <th width="13%">Sign Lead</th>
               <th width="13%">Sign Opp</th>
               <th width="10%">Mark Won</th>
               <th width="10%">Pax</th>
               <th width="13%">Amount</th>
               <th width="2%"class="text-center">
              <span class="fas fa-calculator"></span>
               </th>
               <th width="2%"class="text-center">
                 <span class="fa fa-edit"></span>
               </th>
               <th>City</th>
               <th>Price/U</th>
               <th>Price Adm</th>
               <th>Discount</th>
               <th>Vat</th>
     </tfoot>

           </table>
         
        </div>


      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->


<div class="modal" id="myModalprint">

 <?= form_open('', array('id' => 'print_preview')); ?>
  <div class="modal-dialog modal-md-8">
    <div class="modal-content">
      <div class="modal-header bg-navy #001F3F">
        <h4 class="modal-title">
          <span class="fa fa-print" id="modal_print_tittle">        </span>
        </h4>
      </div>
      
      <div class="modal-body">
        <div class="card">


          <div class="card-body" id="body_triger" >

           <div class="col-md-12">
            <div class="form-group">
              <label for="">
                ID SKP
              </label>

             <?php
             $data = array(
              'id'           => 'id_skp_print',
              'name'         => 'id_skp_print',
              'class'        => 'form-control',
              'type'         => 'text',
              'autocomplete' => 'off',
              'readonly'     => 'true',
              'style'        => 'width:100%;'
            );
             echo form_input($data);

             ?>


            </div>
          </div>

             <div class="col-md-12">
                <div class="form-group">
                  <label for="">
                    Form Language
                  </label>
                  <?php

                  $data = array(

                    'id'       => 'print_language',
                    'name'     => 'print_language',
                    'class'    => 'form-control',
                    'type'     => 'text',
                    'style'    => 'width:100%;'

                  );

                  $options = array(
                  '1'       => 'Bahasa Indonesia',
                  '2'       => 'English ( US )'
                );

                  echo form_dropdown($data, $options);

                  ?>

                </div>
              </div>


          </div>




          <div class="card-body" id="body_print" hidden="true">

<!--            Start Print -->

<style>
/* The container */
.wrapper_print {
 background: rgb(204,204,204); 
 font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;
}



h3 {
  font-weight: bold;
  font-size: 14px;
}

page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.10cm;
  margin-top: 0.5cm;
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
@media print {
  .wrapper_print, page {
    margin-top: 100px;
 /*   margin-bottom: 80px;*/
    box-shadow: 0;
  }
}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 12px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;

  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
      border: 1px;
  border-style: solid;
  height: 18px;
  width: 18px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #66cc00
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;

}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 7px;
  top: 3px;
  width: 3px;
  height: 7px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


#iv_sign {
  position: static;
  bottom: 40px;
  width: 100%;
}
</style>



<div class="wrapper_print">
<page size="A4">

<h3 style="margin-top: 0px; margin-bottom: 5px;">
  <center id="tittle_skp"></center>
</h3>


<div class="" style="height:1px; width:100%; background-color:black; margin-bottom: 2px;"></div>
<div class="" style="height:1px; width:100%; background-color:black; margin-bottom: 5px;"></div>

<center>
<h7 style="margin-top: 5px; margin-bottom: 0px;">
    <table border="0" style="font-size: 14px;
 font-family: Arial, Helvetica, sans-serif;">
      <tr>
        <th>No. Skp</th>
        <td> : <span id="id_skp_printout"></span>  </td>
      </tr>
      <tr>
        <th>Tanggal </th>
        <td> : <span id="date_create_printout"></span> </td>
      </tr>
    </table>
 </h7>      
</center> 

<br>

<h3 style="margin-bottom: 0px; margin-top:0px;">I. DATA MEMBER</h3>

<table border="0" width="100%" style="margin-left: 5px; margin-top:5px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;" >
  <tr>
    <td align="left" style="width:30%;">
      1. Nama Member
    </td>
    <td>
      : <span id="member_name"></span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>
    <tr id="tr_office">
    <td align="left" style="width:30%;">
    <span style="margin-left:13px;">Nama Perusahaan</span> 
    </td>
    <td>
      : <span id="office_name"></span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>
  <tr>
    <td align="left" style="width:30%;">
      2. No. KTP/Passport
    </td>
    <td>
      : <span id="member_idcard"></span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>

   <tr>
    <td align="left" style="width:25%; margin-top:20px;">
      3. Alamat
    </td>
    <td style="width:75%; margin-top:20px; word-break: break-all;">
      : <span id="member_address"></span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>
  <tr>

    <td rowspan="4" align="left" style="width:25%;">
    
    </td>
  </tr>
  <tr>
    
  </tr>
    
  <tr >
    <td>
      <table border="0" width="100%" style="font-size: 12px;
 font-family: Arial, Helvetica, sans-serif; ">
        <tr>
          <td width="15%">

            Telp.

          </td>
          <td width="32%">
            : <span id="member_telp"></span>  <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
          </td>
          <td width="15%" align="center">
            Hp
          </td>
          <td width="38%">
            :  <span id="member_wa"></span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
    
    
    
  <tr>
    <td>
      <table border="0" width="100%" style="font-size: 12px;
 font-family: Arial, Helvetica, sans-serif; ">
        <tr>
          <td width="15%">
            Email
          </td>
          <td width="85%">
            : <span id="email_customer"></span>  <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
    
  <tr>
    <td align="left" style="width:25%; margin-top:20px;">
      4. Alamat Surat Menyurat
    </td>
    <td style="width:75%; margin-top:20px; word-break: break-all;">
      : <span id="letter_name"></span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>
  <tr>

      <tr>
    <td align="left" style="width:25%; margin-top:20px;">
    
    </td>
    <td style="width:75%; margin-top:20px; word-break: break-all;">
      : <span id="letter_address"></span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>
  <tr>

    <td rowspan="4" align="left" style="width:25%;">
    
    </td>
  </tr>
  <tr>
    
  </tr>








    
  <tr>
    <td>
      <table border="0" width="100%" style="font-size: 12px;
 font-family: Arial, Helvetica, sans-serif; ">
        <tr>
          <td width="15%">

            Telp.

          </td>
          <td width="32%">
            : <span id="letter_phone"></span><div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
          </td>
          <td width="15%" align="center">
            Hp
          </td>
          <td width="38%">
            : <span id="letter_whatsapp"></span><div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
    
    
    
  <tr>
    <td>
      <table border="0" width="100%" style="font-size: 12px;
 font-family: Arial, Helvetica, sans-serif; ">
        <tr>
          <td width="15%">
            Email
          </td>
          <td width="85%">
            : <span id="letter_email"></span><div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>


  <tr id="curel_value">
  
  </tr>

     <tr id="curel_note_1">
  
  </tr>
  <tr>

    <td rowspan="4" align="left" style="width:25%;">
    
    </td>
  </tr>
  <tr>
    
  </tr>
    
  <tr id="curel_note_2">
  
  </tr>
    
    
    
  <tr id="curel_note_3">
   
  </tr>
    
    




</table>



<h3 style="margin-bottom: 0px; margin-top:0px;">II. DATA MEMBERSHIP </h3>


<table border="0" width="100%" style="margin-left: 5px; margin-top: 5px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">

  <tr>
    <td rowspan="5" style="vertical-align: text-top; width: 30%;" >1. Membership Type</td>
    <td style=" width:25%;  height: 15px; padding-bottom: 2px; " id="mbr_type_1">

    </td>
    <td style="width:25%; height: 15px; padding-bottom: 2px;" id="mbr_type_2">

    </td>
     <td style=" width:25%;  height: 15px; padding-bottom: 2px;" id="mbr_type_3">

    </td>
    <td style="width:25%; height: 15px; padding-bottom: 2px;" >

    </td>
  </tr>

  <tr>

  </tr>

  
</table>


<table border="0" width="100%" style="margin-left: 5px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">

  <tr id="tr_mbr_2">
    <td rowspan="5" style="vertical-align: text-top; width: 30%;">2. Product Type</td>
    <td style=" width:25%;  height: 15px; padding-bottom: 2px;" id="typesl1">

    </td>
    <td style="width:25%; height: 15px; padding-bottom: 2px;" id="typesl2">

    </td>
     <td style=" width:25%;  height: 15px; padding-bottom: 2px;" id="typesl3">

    </td>
    <td style="width:25%; height: 15px; padding-bottom: 2px;" >

    </td>
  </tr>
 

  <tr>

  </tr>

  
</table>


<table border="0" width="100%" style="margin-left: 5px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">

  <tr>
    <td rowspan="5" style="vertical-align: text-top; width: 30%;" id="tr_mbr_tittle_3"></td>
    <td style=" width:25%;  height: 15px; padding-bottom: 2px;" id="akm1">
    
      </td>
      <td style="width:25%; height: 15px; padding-bottom: 2px;" id="akmb1">
      
        </td>
        <td style="width:25%; height: 15px; padding-bottom: 2px;" id="akmb2">

        </td>
        <td style="width:25%; height: 15px; padding-bottom: 2px;" >

        </td>
    </tr>

      <tr>
        <td colspan="5" style=" width:100%;  height: 5px; padding-bottom: 5px;">

          <div style="margin-left:0px; border-bottom: 1px solid black; border-width: thin;"></div>
        </td>

      </tr>
    <tr>
      <td style=" width:25%;  height: 15px; padding-bottom: 2px;" id="akm2">

      </td>
      <td style="width:25%; height: 15px; padding-bottom: 2px;" id="akmc1">

      </td>
      <td style="width:25%; height: 15px; padding-bottom: 2px;" id="akmc2">

      </td>
      <td style="width:25%; height: 15px; padding-bottom: 2px;" >

      </td>
    </tr>

  <tr>

    </tr>

  
</table>

<table border="0" width="100%" style="margin-left: 5px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">
  <tr>
    <td width="15%">
      &nbsp;&nbsp; Suite No.
    </td>
    <td width="30%">
      : <span id="mbr_unit_no"> </span><div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
    <td width="18%" align="center">
      Luas Bangunan
    </td>
    <td width="10%">
      :  <span id="mbr_unit_lb"> </span><div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
    <td width="18%" align="center">
      Luas Tanah
    </td>
    <td width="10%">
      :  <span id="mbr_unit_lt"> </span><div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>
</table>

<table border="0" width="100%" style="margin-left: 5px; margin-top: 10px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;" id='myTable2'>
  <tr>
    <td style="vertical-align: text-top; width: 30%;" id="tr_mbr_tittle_4"></td>
    <td style="padding-left: 6px;" >
    </td>
  </tr>
</table>


<table border="0" width="100%" style="margin-left: 5px; margin-top: 20px;  font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">
  <tr>
    <td style="vertical-align: text-top; width: 30%;" id="tr_mbr_tittle_5"></td>
  
    <td style="padding-left: 6px;">
      : <b> <span id="crm_checkin"> </span> - <span id="crm_checkout"> </span> </b><div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>
    </td>
  </tr>
  
</table>



<div style="page-break-after:always;" id="mbr_break" hidden="true"></div>

<h3 style="" id="pay_mbr_1">III. HARGA MEMBERSHIP & CARA PEMBAYARAN</h3>

<table border="0" width="100%" style="margin-left: 5px; margin-top:20px; margin-bottom:20px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">
  <tr>
    <td width="30%">
      1. Harga Membership
    </td>
    <td>
      : <span id="price_transsl"> </span> <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin; margin-right: 300px;"></div>

    </td>
  </tr>
  <tr id="mbr_disc_tr">
    <td width="30%">
      &nbsp;&nbsp;&nbsp;&nbsp;Discount
    </td>
    <td>
      : <span id="discount"> </span>   <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin; margin-right: 300px;"></div>
    </td>
  </tr>
  <tr id="mbr_disc_tr_2">
    <td width="30%">
      &nbsp;&nbsp;&nbsp;&nbsp;Harga Total Setelah Discount
    </td>
    <td>
      : <span id="subtotal"> </span>   <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin; margin-right: 300px;"></div>
    </td>
  </tr>
  <tr>
    <td width="30%">
      &nbsp;&nbsp;&nbsp;&nbsp;PPN 10%
    </td>
    <td>
      : <span id="ppn"> </span>   <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin; margin-right: 300px;"></div>
    </td>
  </tr>
  <tr>
    <td width="30%">
      &nbsp;&nbsp;&nbsp;&nbsp;Total Harga + PPN 10%
    </td>
    <td>
      : <span id="crm_checkin"> </span> <span id="total"> </span>   <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin; margin-right: 300px;"></div>
    </td>
  </tr>

</table>

<div style="page-break-after:always;" id="mbr_break_2" hidden="true"></div>


<div style="" id="pay_mbr_2">&nbsp;&nbsp;2.  Cara Pembayaran :</div> 


<table border="1" width="95%" cellpadding="8" cellspacing="0" style="margin-left: 3%; margin-top: 20px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;"  class="table table-responsive" >
  <thead>
  <tr>
    <th>
      Termin <br> <i>Term of Payment</i>
    </th>
    <th>
      Jatuh Tempo <br> <i>Due Date</i>
    </th>
    <th>
      Nominal (Rp) <br> <i>Amount</i>
    </th>
  </tr>
</thead>

<tbody id="myTable">
  


</tbody>

<tfoo>
  <tr>
    <th colspan="2">
      Total Pembayaran
    </th>
    <th>
    <b><span id="totaltr"> </span>  </b>

    </th>
  </tr>

</table>
</tfoo>
    

<table border="0" width="100%" style="margin-left: 20px; margin-top:20px; margin-bottom:20px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">
  <tr>
    <td width="30%">
      &nbsp;<b>Pembayaran dilakukan ke </b>
    </td>
    <td>
      : PT. Jababeka Longlife City
    </td>
  </tr>
  <tr>
    <td width="30%">
      &nbsp;<b>No. Rekening</b>
    </td>
    <td>
      : 156-00-9910010-1
    </td>
  </tr>
  <tr>
    <td width="30%">
      &nbsp;<b>Bank</b>
    </td>
    <td>
      : BANK MANDIRI, KCP Cikarang Jababeka
    </td>
  </tr>
  <tr>
    <td width="30%">
      &nbsp;<b>Alamat</b>
    </td>
    <td>
      : Ruko Commercial Center Blok B7 & B21, Jababeka
    </td>
  </tr>
  <tr>
    <td width="30%">
      &nbsp;<b>Swift Code</b>
    </td>
    <td>
      : BMR11DJA
    </td>
  </tr>

</table>

&nbsp;3. Seluruh ketentuan pada point IV & V pada halaman setelah ini,<p>
&nbsp;&nbsp;&nbsp;&nbsp; menjadi satu kesatuan yang tidak dapat terpisahkan 
dengan Pemesanan Ini : 

<table border="0" width="100%" style="margin-left: 5px; margin-top:20px; margin-bottom:20px; font-size: 12px;
 font-family: Arial, Helvetica, sans-serif;">
  <tr>
    <td width="31%">
      4. Referensi
    </td>
    <td>
      : <span id="consultant"> </span>  <div style="margin-left:5px; border-bottom: 1px solid black; border-width: thin;"></div>

    </td>
  </tr>
</table>




<div id="div_sign" style=" margin-top: 220px; bottom: 40px">
<table border="0"  width="100%" style="">
  <tr>
    <th colspan="2">
     PT. Jababeka Longlife City,
    </th>
    <th colspan="2">
      Pemesan,
    </th>
  </tr>
  <tr>
    <td colspan="4" style="height: 90px;"></td>
  </tr>
  <tr>
    <th>
      <u>Trisno Muldani</u>
      <br style="margin-top:0px;">
      Manager
    </th>
    <th>
      <u>Marlin Marpaung</u>
      <br style="margin-top:0px;">
      President Directore
    </th>
    <th id="pic_sign" hidden="true"> 
      <u><span id="curel_fullname_sign" > </span></u>
      <br style="margin-top:0px;">
      Penanggung Jawab
    </th>
    <th>
      <u><span id="member_name_sign"> </span></u>
      <br style="margin-top:0px;">
      Member
    </th>
  </tr>
</table>
</div>

<div style="page-break-after:always;"></div>


<div id="sl_lampiran">
<h3 style="margin-top:90px;">IV. KETENTUAN UMUM</h3>

<ol type="1" style="margin-right: 50px;">
  <li style="text-align: justify; margin-top:10px;">
    Jika   PIHAK   PEMESAN   tidak melunasi   pembayaran sesuai   pada   waktunya ,  maka    dengan   sendirinya PIHAK   PEMESAN   dianggap   membatalkan   pemesanan.  Sedangkan  untuk  pembayaran  tidak sesuai dengan  tanggal   jatuh  tempo, dikenakan   denda  sebesar   0,2 %  per  hari  keterlambatan  maksimum  30 hari , apabila lewat batas waktu tersebut pembeli dianggap membatalkan transaksi. (dengan pendekatan personal)
  </li>
  <li style="text-align: justify; margin-top:10px;">
    Setiap   pembatalan  oleh   PIHAK  PEMESAN , maka seluruh pembayaran yang telah diterima PT. Jababeka Longlife City tidak dapat dikembalikan. 
  </li>
  <li style="text-align: justify; margin-top:10px;">
    PIHAK   PEMESAN   tidak berhak  melakukan  pengalihan  Membership ini kepada  Pihak Lain.
  </li>
  <li style="text-align: justify; margin-top:10px;">
    Harga Membership di atas sudah termasuk Biaya pemeliharaan & penggunaan fasilitas dan Biaya layanan hidup untuk selama setahun untuk Member (sesuai standar perusahaan untuk Annually Membership).
  </li>
</ol>

<h3 style="margin-top: 20px;">V. LAMPIRAN</h3>

<ol type="1">
  <li style="padding-bottom: 10px;">
    <label class="container">  Copy Identitas  <input type="checkbox"  checked><span class="checkmark"></span>
  </li>
  <li style="padding-bottom: 10px;">
    <label class="container">  NPWP  <input type="checkbox"  checked><span class="checkmark"></span>
    
  </li>
</ol>

<h3 style="margin-top: 20px;">V. LAMPIRAN II</h3>

<ol type="1">
  <li style="padding-bottom: 10px;">
   <label class="container">   Brosure & Membership Agreement <input type="checkbox"  checked><span class="checkmark"></span>
  </li>
  
</ol>
</div>




</page>
</div>

</div>












        </div>
      </div>

      <div class="modal-footer">

        <div class="form-group float-right">
         <button type="button" id="btnBackModalprint" class="btn btn-danger" data-toggle="modal" data-target="#myModalprint">
          <span class="fas fa-times-circle"></span>
          Closed
        </button>
        
          <button type="submit" class="btn btn-success">
            <span class="fa fa-print"></span>
            Print
          </button>
        </div>

 


      </div>

       <?= form_close(); ?>
    </div>
  </div>
</div>













<div class="modal" id="myModalskp">

 <?= form_open('', array('id' => 'skp_form')); ?>
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header bg-navy #001F3F">
        <h4 class="modal-title">
          <span class="fa fa-address-card" id="skp_manager"></span>
        </h4>
      </div>
      
      <div class="modal-body">
        <div class="card">

          <div class="card-header bg-navy" id="small_skptittle">
          
       
          </div>

          <div class="card-body">

            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#profile"><span class="fa fa-address-card"> Customer Account</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#activity"><span class="fas fa-briefcase-medical"> Terms Of Service</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#checkin"><span class="fas fa-handshake"> Terms Of Membership </span></a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#product-history"><span class="fa fa-money-check "> Terms Of Payment</span></a>
              </li>




            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
<p>
             
              <div class="row">


                <div class="col-md-7">
                  <div class="box box-solid widget-user-2">
        
                    <div class="widget-user-header bg-yellow">
                      <div class="widget-user-image">
                        <img class="img-circle" id="profile_image" src="" alt="User Avatar">
                      </div>
                      <h3 class="widget-user-username" id="nama_cus"></h3>
                      <h5 class="widget-user-desc" id="assign_source_cus"></h5>
                    </div>

                    <div class="box-body no-padding">

                     <ul class="todo-list">
                      <li>
                        <!-- drag handle -->
                        <span class="handle">
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa fa-user"></i>
                        </span>
                        

                        <!-- todo text -->
                        <span class="text" id="id_cus"></span>

                        <!-- General tools such as edit or delete-->
                      </li>

                        <li>
                        <!-- drag handle -->
                        <span class="handle">
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa  fa-birthday-cake"></i>
                        </span>
                        

                        <!-- todo text -->
                        <span class="text" id="born_cus"></span>

                        <!-- General tools such as edit or delete-->
                      </li>

                       <li>
                        <!-- drag handle -->
                        <span class="handle">
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa  fa-envelope"></i>
                        </span>
                        
                        <!-- todo text -->
                        <span class="text" id="email_cus"></span>

                        <!-- General tools such as edit or delete-->
                      </li>

                       <li>
                        <!-- drag handle -->
                        <span class="handle">
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa  fa-mobile"></i>
                        </span>
                        
                        <span class="text" id="phone_wa"></span>

                      </li>
                       <li>
                        <!-- drag handle -->
                        <span class="handle">
                          <i class="fa fa-ellipsis-v"></i>
                          <i class="fa   fa-map-marker"></i>
                        </span>
                        
                        <!-- todo text -->
                        <span class="text" id="address_detail_cus"></span>

                      </li>

                                <li>
                        <!-- drag handle -->
                        <span class="handle">
                       
                        </span>
                        
                        <!-- todo text -->
                        <span class="text" id="address_street_cus"></span>
                

                        <!-- General tools such as edit or delete-->
                      </li>
                    </ul>

                  </div><!-- /.box-body -->

                 
                </div>
                <!-- /.widget-user -->
              </div>


              <div class="col-md-5">

         

            

              <?php

              $data = array(
                'id'           => 'id_oppstage',
                'name'         => 'id_oppstage',
                'class'        => 'form-control',
                'type'         => 'hidden',
                'autocomplete' => 'off',
                'required'     => 'required',
                'style'        => 'width:100%;'
              );
              echo form_input($data);
              ?>



                <div class="box box-widget widget-user-2">
                  <div class="card-header bg-navy" id="">
                  <i class="fas fa-file-signature"></i> PIC Confirmation
                  </div>

                  <div class="box-body">
                    <div class="card">
                    <div class="card-body">
                  
                    <div class="row">
                  
                      <div class="col-md-6">
                       <div class="form-group">
                        <div class="icheck-success d-inline">
                          <input type="radio" class="pic_skp" id="pic_1" name="pic_1" value="1" checked>
                          <label for="pic_1">
                          Own Reservation
                         </label>
                       </div>
                     </div>
                   </div>


                 <div class="col-md-6">
                   <div class="form-group">
                    <div class="icheck-danger d-inline">
                      <input type="radio" class="pic_skp" id="pic_2" name="pic_1" value="2">
                      <label for="pic_2">
                      With PIC
                     </label>
                   </div>
                 </div>
               </div>

               <div class="col-md-12" id="pic_check" hidden="true">
                <div class="form-group">
                      <?php

                        $data = array(

                          'id'       => 'id_pic',
                          'name'     => 'id_pic',
                          'class'    => 'form-control',
                          'type'     => 'text',
                          'style'    => 'width:100%;'

                        );

                        $options = array('' => '');

                        echo form_dropdown($data, $options);

                      ?>

                </div>
              </div>

              <div class="col-md-12" id="pic_check_stats" hidden="true">
                <div class="form-group">
                  <?php

                  $data = array(

                    'id'       => 'id_pic_stats',
                    'name'     => 'id_pic_stats',
                    'class'    => 'form-control',
                    'type'     => 'text',
                    'style'    => 'width:100%;'

                  );

                  $options = array(
                  'Husband' => 'Husband',
                  'Wife'    => 'Wife',
                  'Child'   => 'Child',
                  'Family'  => 'Family',
                  'Manager' => 'Manager',
                  'Directore' => 'Directore',
                  'President Directore' => 'President Directore',
                  'Chairman' => 'Chairman',
                  'Other'   => 'Other'
                );

                  echo form_dropdown($data, $options);

                  ?>

                </div>
              </div>




                   <div class="col-md-12" id="pic_btn_check" hidden="true">
                     <div class="form-group ">
                        <button class="btn bg-green btn-sm ml-1 btn-block" id="buttonskp" data-toggle="modal" data-target="#myModal2" type="button">
                        <span class="fab fa fa-edit"></span>
                        New PIC Record
                      </button>   
                    </div>
                  </div>
                </div> <!-- row -->
             
              </div> <!-- card-body -->
            </div> <!--  card -->
          </div>

              </div>

                <div class="box box-widget widget-user-2">
              
                  <div class="card-header bg-yellow" id="">
                   <i class="fa fa-address-card"></i> Mailing Address
                  </div>


                  <div class="box-body">
                    <div class="card">
                    <div class="card-body">


                    <div class="row">

                      <div class="col-md-6">
                       <div class="form-group">
                        <div class="icheck-danger d-inline">
                          <input type="radio" class="addr" id="add_1" name="add_1" value="1" checked="true">
                          <label for="add_1">
                          Embed 
                         </label>
                       </div>
                     </div>
                   </div>

                   <div class="col-md-6">
                     <div class="form-group">
                      <div class="icheck-warning d-inline">
                        <input type="radio" class="addr" id="add_2" name="add_1" value="2" >
                        <label for="add_2">
                         Additional
                       </label>
                     </div>
                   </div>
                 </div>



               <div class="col-md-12" id="mailing_check" hidden="true">
                <div class="form-group">
                      <?php

                        $data = array(

                          'id'       => 'id_mailing',
                          'name'     => 'id_mailing',
                          'class'    => 'form-control',
                          'type'     => 'text',
                          'style'    => 'width:100%;'

                        );

                        $options = array('' => '');

                        echo form_dropdown($data, $options);

                      ?>

                </div>
              </div>



                 <div class="col-md-12" id="mailing_btn_check" hidden="true">
                   <div class="form-group ">
                    <button  type="button" class="btn bg-green btn-sm ml-1 btn-block" data-toggle="modal" data-dismiss="modal" data-target="#myModal3" id="buttonmail">
                      <span class="fab fa fa-edit"></span>
                      New Mailing Address
                    </button>   
                  </div>
                </div>







                    </div>



                  </div>
                </div>
              </div>
            </div>





                <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->

                  <div class="card-header bg-navy" id="">
                  <i class="fa fa-address-card"></i> Customer Data Verification
                 </div>

                  <div class="box-body">
                    <div class="card">
                    <div class="card-body">
                  
                    <div class="row">
                      <?php

                      $data = array(
                        'id'           => 'id_customer_skp',
                        'name'         => 'id_customer_skp',
                        'class'        => 'form-control',
                        'type'         => 'hidden',
                        'autocomplete' => 'off',
                        'style'        => 'width:100%;'
                      );

                      echo form_input($data);

                      ?>

                      <div class="col-md-4">
                       <div class="form-group">
                        <div class="icheck-danger d-inline">
                          <input type="checkbox" class="" id="cn_1" name="cn_1" value="1" >
                          <label for="cn_1">
                           Name 
                         </label>
                       </div>
                     </div>
                   </div>

                   <div class="col-md-4">
                     <div class="form-group">
                      <div class="icheck-warning d-inline">
                        <input type="checkbox" class="" id="cn_2" name="cn_2" value="2" >
                        <label for="cn_2">
                         Contact
                       </label>
                     </div>
                   </div>
                 </div>

                 <div class="col-md-4">
                   <div class="form-group">
                    <div class="icheck-success d-inline">
                      <input type="checkbox" class="" id="cn_3" name="cn_3" value="3" >
                      <label for="cn_3">
                       IDcard
                     </label>
                   </div>
                 </div>
               </div>

                   <div class="col-md-12">
                     <div class="form-group ">
                      <button type="button" class="btn bg-yellow btn-sm ml-1 btn-block" data-toggle="modal" data-dismiss="modal" data-target="#myModal2" id="modal-btn-edit">
                        <span class="fab fa fa-edit"></span>
                        Complete It
                      </button>   
                    </div>
                  </div>
                </div> <!-- row -->
              </div> <!-- card-body -->
            </div> <!--  card -->
          </div>

              </div>


                 



            </div>


            </div>
            </div>

          
            <div class="tab-pane" id="activity">
             <p>       
               <div class="row">

                <div class="col-md-12">
                  <div class="card">
                      <div class="card-header bg-green border-transparent">
                        <h3 class="card-title">   <i class="fas fa-briefcase-medical"></i> Additional Service Term [ Min Check 2 Items ]</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div>
                      </div>

                    <div class="card-body">
                      <table id="dataTable8" class="table table-striped projects" style="width: 100%;" cellpadding="0" cellspacing="0">
                        <thead>
                          <tr>
                            <th width="2%">No.</th>
                            <th width=""></th>
                            <th width="35%">Service List</th>
                            <th width="3%"> <span class="fas fa-briefcase-medical"></span></th>
                            <th width="60%">Note</th>

                          </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                          <th width="2%">No.</th>
                          <th width="">Name Hide</th>
                          <th width="35%">Service List</th>
                          <th width="3%">Service List</th>
                          <th width="60%">Note</th>
                        </tfoot>
                      </table>
                    </div>


                  </div>
                </div>

              </div>  

            </div>  

           <div class="tab-pane" id="checkin">
            <p>
            <div class="row">



                <div class="col-md-6">
         
            <div class="card">
              <div class="card-header bg-navy border-transparent">
                <h3 class="card-title">   <i class="fas fa-handshake"></i> Membership Explain</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th width="35%">Item</th>
                      <th width="65%">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <i class="fas fa-handshake"></i> Product</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="mbrproduct"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-handshake"></i> Type Membership</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="mbrtype"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-handshake"></i> Category</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="mbrctg"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-handshake"></i> Unit Type</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="mbrunit"></div>
                        </td>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


        <!--   Input Data Membership -->

        <input type="hidden" class="" id="stsa" name="stsa" value="">
        <input type="hidden" class="" id="stsb" name="stsb" value="">
        <input type="hidden" class="" id="stsc" name="stsc" value="">
        <input type="hidden" class="" id="stsd" name="stsd" value="">
        <input type="hidden" class="" id="mbre" name="mbre" value="">
        <input type="hidden" class="" id="mbrf" name="mbrf" value="">

        <!-- End Input Data Membership -->


              <div class="col-md-6">

                    <div class="card">
                      <div class="card-header bg-green border-transparent">
                        <h3 class="card-title">   <i class="fas fa-cash-register"></i> Check In Confirmation</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <thead>
                              <tr>
                                <th width="35%"></th>
                                <th width="65%"></th>
                              </tr>
                            </thead>
                            <tbody>


                              <tr id="">

                                <?php
                                $data = array(
                                  'id'           => 'paxtriger',
                                  'name'         => 'paxtriger',
                                  'class'        => 'form-control',
                                  'type'         => 'hidden',
                                  'autocomplete' => 'off',
                                  'placeholder'  => '',
                                  'style'        => 'width:100%;'
                                );
                                echo form_input($data);

                                ?>

                                <td>
                                  <div class="sparkbar text-bold" data-color="#00a65a" data-height="20" id="">Checkin Date</div>
                                </td>
                                <td>
                                  <div class="sparkbar" data-color="#00a65a" data-height="20" id=""> 
                                    <?php
                                   $data = array(
                                    'id'           => 'mbrcheckin',
                                    'name'         => 'mbrcheckin',
                                    'class'        => 'form-control tanggalWaktu2',
                                    'type'         => 'text',
                                    'autocomplete' => 'off',
                                    'placeholder'  => '',
                                    'style'        => 'width:100%;'
                                  );
                                   echo form_input($data);

                                   ?>

                                 </div>
                               </td>
                             
                              </tr>

                              <tr>


                             </tr>

                              <tr id="">
                                <td>
                                  <div class="sparkbar text-bold" data-color="#00a65a" data-height="20" id="">Checkout Date</div>
                                </td>
                                <td>
                                  <div class="sparkbar" data-color="#00a65a" data-height="20" id=""> 
                                   <?php

                                   $data = array(
                                    'id'           => 'mbrcheckout',
                                    'name'         => 'mbrcheckout',
                                    'class'        => 'form-control tanggalWaktu2',
                                    'type'         => 'text',
                                    'autocomplete' => 'off',
                                    'placeholder'  => '',
                                    'style'        => 'width:100%;'
                                  );
                                   echo form_input($data);

                                   ?>

                                 </div>
                               </td>
                              </tr>

                            </tbody>
                          </table>
                        </div>
                        <!-- /.table-responsive -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">

                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->


                      <div class="card" id="room_card">
                      <div class="card-header bg-red border-transparent">
                        <h3 class="card-title">   <i class="fas fa-search"></i> Room Reference</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body p-0">
                        <div class="table-responsive">
                          <table class="table m-0">
                            <thead>
                              <tr>
                                <th width="35%"></th>
                                <th width="65%"></th>
                              </tr>
                            </thead>
                            <tbody>


                              <tr id="">

                              

                                <td>
                                  <div class="sparkbar text-bold" data-color="#00a65a" data-height="20" id="">Room Search</div>
                                </td>
                                <td>
                                  <div class="sparkbar" data-color="#00a65a" data-height="20" id=""> 
                                    <?php

                                    $data = array(
                                      'id'           => 'id_room',
                                      'name'         => 'id_room',
                                      'class'        => 'form-control',
                                      'type'         => 'text',
                                      'style'        => 'width:100%;'
                                    );

                                    $options = array(
                                      '' => ''
                                    );


                                    echo form_dropdown($data, $options);

                                    ?>

                                 </div>
                               </td>
                             
                              </tr>

                              <tr>


                             </tr>


                            </tbody>
                          </table>
                        </div>
                        <!-- /.table-responsive -->
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer clearfix">

                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
           

                </div>

            </div>
            </div>


          <div class="tab-pane" id="product-history">
            <p>
             
              <div class="row">


                <div class="col-md-6">
         
            <div class="card">
              <div class="card-header bg-navy border-transparent">
                <h3 class="card-title">   <i class="fas fa-shopping-cart"></i> Payment Do</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th width="35%">Item</th>
                      <th width="65%">Description</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <i class="fas fa-shopping-cart"></i> Product</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="nmproduct"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-shopping-cart"></i> Pax</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="paxproduct"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-shopping-cart"></i> Price/Pax</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="nmprice"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-shopping-cart"></i> Adm</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="admprice"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-shopping-cart"></i> Discount</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="discprice"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-shopping-cart"></i> Subtotal</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="subprice"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-shopping-cart"></i> Vat</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="vatprice"></div>
                        </td>
                      </tr>
                      <tr>
                        <td> <i class="fas fa-shopping-cart text-bold"></i> Total Amount</td>
                        <td>
                          <div class="sparkbar text-bold" data-color="#00a65a" data-height="20" id="totalprice"></div>
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


      

              <div class="col-md-6">

             <div class="col-md-12">
         
            <div class="card">
              <div class="card-header bg-yellow border-transparent">
                <h3 class="card-title">   <i class="fas fa-credit-card"></i> Payment Terms</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th width="35%">Item</th>
                      <th width="65%">Value</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> <i class="fas fa-handshake"></i> Payment Terms</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="">
                            <div class="icheck-success d-inline">
                              <input type="radio" class="term" id="term_1" name="term_1" value="1" checked="true">
                              <label for="term_1">
                                Cash
                              </label>
                            </div>
                            <div class="icheck-danger d-inline">
                              <input type="radio" class="term" id="term_2" name="term_1" value="2">
                              <label for="term_2">
                                Installment
                              </label>
                            </div>   
                          </div>
                        </td>
                      </tr>

                      <tr id="tr_term_pay_dp" hidden="true">
                        <td> <i class="fas fa-donate"></i> Down Payment</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="">
                            <?php

                            $data = array(
                              'id'           => 'term_pay_dp',
                              'name'         => 'term_pay_dp',
                              'class'        => 'form-control money',
                              'type'         => 'text',
                              'autocomplete' => 'off',
                              'placeholder'  => '',
                              'style'        => 'width:100%;'
                            );
                            echo form_input($data);


                            ?>
                             <code id="code_dp"  hidden="true">2 Digits = % And More = Currency</code>

                          </div>
                        </td>
                      </tr>
             
                      <tr id="tr_term_pay_ins" hidden="true">
                        <td> <i class="fab fa-algolia"></i> Installment</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="">

                   
                            <?php

                            $data = array(
                              'id'           => 'term_pay_ins',
                              'name'         => 'term_pay_ins',
                              'class'        => 'form-control money',
                              'type'         => 'number',
                              'autocomplete' => 'off',
                              'min'          => '1',
                              'value'        => '1',
                              'style'        => 'width:100%;'
                            );
                            echo form_input($data);


                            ?>

          
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td> <i class="fas fa-calendar-check"></i><span id="payment_due_start"> </span></td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id=""> 
                           <?php

                           $data = array(
                            'id'           => 'term_pay_due',
                            'name'         => 'term_pay_due',
                            'class'        => 'form-control tanggalWaktu2',
                            'type'         => 'text',
                            'autocomplete' => 'off',
                            'placeholder'  => '',
                            'style'        => 'width:100%;'
                          );
                           echo form_input($data);

                           ?>



                         </div>
                       </td>
                     </tr>


                     <tr id="term_pay_end_tr" hidden="true">
                      <td> <i class="fas fa-calendar-check"></i> Payment End </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" id=""> 
                         <?php

                         $data = array(
                          'id'           => 'term_pay_end',
                          'name'         => 'term_pay_end',
                          'class'        => 'form-control tanggalWaktu2',
                          'type'         => 'text',
                          'autocomplete' => 'off',
                          'placeholder'  => '',
                          'style'        => 'width:100%;'
                        );
                         echo form_input($data);

                         ?>

                       </div>
                     </td>
                   </tr>


                   <?php

                   $data = array(
                    'id'           => 'selisih',
                    'name'         => 'selisih',
                    'class'        => 'form-control',
                    'type'         => 'hidden',
                    'autocomplete' => 'off',
                    'placeholder'  => '',
                    'style'        => 'width:100%;'
                  );
                   echo form_input($data);

                   ?>



                        <tr id="term_pay_per" hidden="true">
                        <td> <i class="fab fa-algolia"></i> Payment Period</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="">
                            <div class="icheck-danger d-inline">
                              <input type="radio" class="per" id="per_1" name="per_1" value="1" >
                              <label for="per_1">
                               Monthly
                              </label>
                            </div>
                            <div class="icheck-info d-inline">
                              <input type="radio" class="per" id="per_2" name="per_1" value="2">
                              <label for="per_2">
                               Weekly
                              </label>
                            </div>  

                            <div class="icheck-success d-inline">
                              <input type="radio" class="per" id="per_3" name="per_1" value="3">
                              <label for="per_3">
                               Daily
                             </label>
                           </div>  

                          </div>
                        </td>
                      </tr>
                      <tr>
            
                    
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
             </div>
          <!-- /.col -->

<!-- Needed Value 1 --> 


<input type="hidden" class="" id="inprice" name="inprice" value="" readonly>
<input type="hidden" class="" id="indisc" name="indisc" value="" readonly>
<input type="hidden" class="" id="invat" name="invat" value="" readonly>
<input type="hidden" class="" id="inpax" name="inpax" value="" readonly>
<input type="hidden" class="" id="inadm" name="inadm" value="" readonly>

<input type="hidden" class="" id="incash" name="incash" value="">
<input type="hidden" class="" id="indp" name="indp" value="">
<input type="hidden" class="" id="inins" name="inins" value="">

<!--End Needed Value --> 

          <div class="col-md-12">

            <div class="card">
              <div class="card-header bg-green border-transparent">
                <h3 class="card-title">   <i class="fas fa-cash-register"></i> Cash Out</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th width="40%">Item Collected</th>
                        <th width="60%">Value</th>
                      </tr>
                    </thead>
                    <tbody>

                     
                      <tr id="tr_clcash">
                        <td> <i class="fas fa-donate"></i>On Cash</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="clcash"></div>
                        </td>
                      </tr>
                    
             
                      <tr id="tr_cldp" hidden="true">
                        <td> <i class="fas fa-donate"></i>On Down Payment</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="cldp">IDR 0</div>
                        </td>
                      </tr>
          

               
                      <tr id="tr_clins" hidden="true">
                        <td> <i class="fas fa-donate"></i>On Installment</td>
                        <td>
                          <div class="sparkbar" data-color="#00a65a" data-height="20" id="clins">IDR 0</div>
                        </td>
                      </tr>
               




                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">

                <div class="form-group float-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-envelope"></i> Posting</button>
                </div>
            <?= form_close(); ?>
            
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


          </div>
          <!-- /.col -->

       
            


            </div>     
          </div>



          </div>
          </div>

          <div class="card-footer">
            <button type="button" class="btn btn-danger ml-1" id="btn_skip" data-toggle="modal" data-dismiss="modal" > <span class="fas fa-times-circle"></span>
           Closed
          </button>

        </div>

      </div>
    </div>

  </div>
</div>
</div>




<div class="modal" id="myModal7">
  <div class="modal-dialog modal-md-7">
    <div class="modal-content">

      <div class="modal-header bg-navy #001F3F">
        <h4 class="modal-title">
          <span class="fa fa-edit"></span>
           EDIT WIN RESULT
        </h4>
      </div>
      
      <div class="modal-body">
        <div class="card">


                <div class="card-body">
                

               <?= form_open('', array(
                'id'    => 'product_checkout',
                'class' => ''
              ));?>

                 <div class="row">

      
              <input type="hidden" class="form-control" id="id_oppstage_cart" name="id_oppstage_cart" value="">

              <div class="col-md-12">
               <div class="form-group">
                <label for="product_des">Product Name</label>
                <textarea id="product_name" name="product_name" class="form-control" rows="3" disabled="disabled"></textarea>
              </div>
            </div>



            <div class="col-md-6">
              <div class="form-group">
                 <div class="input-group input-group-sm">
                  <label for="">Product Price</label>
                  <?php

                  $data = array(
                    'id'           => 'product_price_a',
                    'name'         => 'product_price_a',
                    'class'        => 'form-control',
                    'type'         => 'text',
                    'readonly'     => 'true',
                    'autocomplete' => 'off',
                    'value'        => '',
                    'style'        => 'width:100%;'
                  );

                  echo form_input($data);

                  ?>
                  <code>Price / Pax</code>
              
              </div>
            </div>
             </div>


              <div class="col-md-6">
            <div class="form-group">
              <div class="input-group input-group-sm">
                <label for="">Quantity</label>

                <?php

                $data = array(
                  'id'           => 'pax_cart',
                  'name'         => 'pax_cart',
                  'class'        => 'form-control',
                  'type'         => 'number',
                  'min'          => '1',
                  'autocomplete' => 'off',
                  'autofocus'    => 'on',
                  'value'        => '1',
                  'style'        => 'width:100%;'
                );

                echo form_input($data);

                ?>
              </div>
            </div>

          </div>




            <div class="col-md-6">
              <div class="form-group">
                 <div class="input-group input-group-sm">
                   <label for="">Adm Fee</label>
                <?php

                $data = array(
                  'id'           => 'price_adm',
                  'name'         => 'price_adm',
                  'class'        => 'form-control',
                  'type'         => 'text',
                  'readonly'     => 'true',
                  'autocomplete' => 'off',
                  'value'        => '',
                  'style'        => 'width:100%;'
                );

                echo form_input($data);

                ?>
                

            </div>
            </div>
          </div>


                        <div class="col-md-6">

            <div class="form-group">
              <div class="input-group input-group-sm">
                <label for="">Discount</label>
                <?php

                $data = array(
                  'id'           => 'price_discount',
                  'name'         => 'price_discount',
                  'class'        => 'form-control money',
                  'type'         => 'text',
                  'autocomplete' => 'off',
                  'autofocus'    => 'on',
                  'value'        => '0',
                  'style'        => 'width:100%;'
                );

                echo form_input($data);

                ?>
                <code id="disc_code">2 Digit For %</code>

                <?php

                $data = array(
                  'id'           => 'price_discount_code',
                  'name'         => 'price_discount_code',
                  'class'        => 'form-control money',
                  'type'         => 'hidden',
                  'autocomplete' => 'off',
                  'autofocus'    => 'on',
                  'disabled'     => 'true',
                  'value'        => '0',
                  'style'        => 'width:100%;'
                );

                echo form_input($data);

                ?>


              </div>
            </div>
          </div>

         

         

          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group input-group-sm">
                <label for="">Vat</label>
                <?php

                $data = array(
                  'id'           => 'price_vat',
                  'name'         => 'price_vat',
                  'class'        => 'form-control',
                  'type'         => 'text',
                  'readonly'     => 'true',
                  'autocomplete' => 'off',
                  'value'        => '',
                  'style'        => 'width:100%;'
                );

                echo form_input($data);
                ?>
               
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="form-group">
              <div class="input-group input-group-sm">
                <label for="">Total Price</label>
                <?php

                $data = array(
                  'id'           => 'price_total',
                  'name'         => 'price_total',
                  'class'        => 'form-control',
                  'readonly'     => 'true',
                  'type'         => 'text',
                  'value'        => '',
                  'autocomplete' => 'off',
                  'style'        => 'width:100%;'
                );

                echo form_input($data);

                ?>
              </div>
            </div>
          </div>

        </div>

        </div>
 

      <div class="card-footer ">
        <div class="form-group float-right">
        <button type="submit" class="btn btn-success">
          <span class="fa fa-check"></span>
          Save
        </button>
        </div>

           <?= form_close(); ?>

        <button type="button" class="btn btn-danger  ml-1" data-toggle="modal" data-dismiss="modal" > <span class="fa fa-times-circle"></span>
          Closed
        </button>
      </div>


     </div>
    </div>
    </div>
  </div>

</div>


<div class="modal" id="myModal2">
  <div class="modal-dialog modal-md">
    <div class="modal-content">

      <div class="modal-header bg-navy #001F3F">
        <h4 class="modal-title" id="modal-title-add"></h4>
      </div>
      
      <div class="modal-body">
        <?= form_open('', array('id' => 'Frm')); ?>
        <div class="row">
          <?php

          $data = array(
            'id'           => 'id_customer',
            'name'         => 'id_customer',
            'class'        => 'form-control',
            'type'         => 'hidden',
            'autocomplete' => 'off',
            'style'        => 'width:100%;'
          );

          echo form_input($data);

          ?>

          <div class="col-md-12">
            <div class="form-group">
            
              <label for="">Source Library | <button type="button" id="modsource" class="btn btn-success">New Source</button></label>
              
              
              <?php

              $data = array(
                'id'           => 'id_event',
                'name'         => 'id_event',
                'class'        => 'form-control',
                'type'         => 'text',
                'style'        => 'width:100%;'
              );

              $options = array(
                '' => ''
              );


              echo form_dropdown($data, $options);

              ?>
            
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="">Gen</label>

              <?php

              $data = array(
                'id'       => 'salutation_name',
                'name'     => 'salutation_name',
                'class'    => 'form-control',
                'type'     => 'text',
                'style'    => 'width:100%;'
              );

              $options = array(
                ''     => '',
                'Mr.'  => 'Mr.',
                'Ms.'  => 'Ms.',
                'Mrs.' => 'Mrs.',
                'Dr.'  => 'Dr.'
              );

              echo form_dropdown($data, $options);

              ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">First Name*</label>
              <?php

              $data = array(
                'id'           => 'first_name',
                'name'         => 'first_name',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label for="">Last Name</label>
              <?php

              $data = array(
                'id'           => 'last_name',
                'name'         => 'last_name',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

           <div class="col-md-3">
            <div class="form-group">
              <label for="">Date of birth</label>
              <?php

              $data = array(
                'id'           => 'born_customer',
                'name'         => 'born_customer',
                'class'        => 'form-control tanggalWaktu',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">
                Mobile Phone
                <small class="text-secondary" id="msg"></small>
              </label>
              <?php

              $data = array(
                'id'       => 'phone_customer',
                'name'     => 'phone_customer',
                'class'    => 'form-control',
                'type'     => 'number',
                'style'    => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">Whatsapp</label>
              <?php

              $data = array(
                'id'       => 'whatsapp_customer',
                'name'     => 'whatsapp_customer',
                'class'    => 'form-control',
                'type'     => 'number',
                'style'    => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">Email</label>
              <?php

              $data = array(
                'id'           => 'email_customer',
                'name'         => 'email_customer',
                'class'        => 'form-control',
                'type'         => 'email',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

        

          <div class="col-md-3">
            <div class="form-group">
              <label for="">ID Card</label>
              <?php

              $data = array(
                'id'           => 'id_cardcustomer',
                'name'         => 'id_cardcustomer',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>


 <div class="col-md-1">
            <div class="form-group">
              <label for="">Citizenship</label>
              <?php

              $data = array(
                'id'       => 'citizenship',
                'name'     => 'citizenship',
                'class'    => 'form-control',
                'type'     => 'text',
                'style'    => 'width:100%;'
              );

              $options = array(
                ''    => '',
                'WNI' => 'WNI',
                'WNA' => 'WNA'
              );

              echo form_dropdown($data, $options);

              ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">City</label>
              <?php

              $data = array(
                'id'           => 'address_city',
                'name'         => 'address_city',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">Province</label>
              <?php

              $data = array(
                'id'           => 'address_state',
                'name'         => 'address_state',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label for="">Country</label>
              <?php

              $data = array(
                'id'           => 'address_country',
                'name'         => 'address_country',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
              <label for="">Postal Code</label>
              <?php

              $data = array(
                'id'           => 'address_postalcode',
                'name'         => 'address_postalcode',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>



          <div class="col-md-4">
            <div class="form-group">
              <label for="">Office</label>
              <?php

              $data = array(
                'id'           => 'office_customer',
                'name'         => 'office_customer',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-8">
            <div class="form-group">
              <label for="">Address</label> | <a href="https://maps.google.com/?q=jakarta" id="gmapsdirref" onclick="window.open(this.href, '',
              'left=40,top=20,width=1200,height=720,toolbar=1,resizable=0'); return false;" >G-Maps Clipboard</a>

              <div>
                <textarea class="textarea" name="address_street" id="address_street" placeholder="Full Address" style="width: 100%; height: 60px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>

            </div>
          </div>

         

        </div>
  </div>

        <div class="modal-footer text-right">
          <button type="button" id="btnBackModal2" class="btn btn-secondary" data-toggle="modal" data-target="#myModal2">
            <span class="fa fa-arrow-left"></span>
            Back
          </button>
          <button type="submit" class="btn btn-success">
            <span class="fa fa-check"></span>
            Save
          </button>
        </div>
        <?= form_close(); ?>
    </div>
  </div>
</div>


<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-success">
        <h4 class="modal-title" id=""><span class='fa fa-plus'></span> Add New Mailing Address</h4>
        <button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></span></button>
      </div>
      
      <div class="modal-body">
        <?= form_open('', array('id' => 'Frmmailing')); ?>


        <div class="row">
          <?php

          $data = array(
            'id'           => 'id_customer_mail',
            'name'         => 'id_customer_mail',
            'class'        => 'form-control',
            'type'         => 'hidden',
            'autocomplete' => 'off',
            'style'        => 'width:100%;'
          );

          echo form_input($data);

          ?>

          <div class="col-md-12">
            <div class="form-group">
              <label for="">Name Mailing Address*</label>
              <?php

              $data = array(
                'id'           => 'nama_mailing',
                'name'         => 'nama_mailing',
                'class'        => 'form-control',
                'type'         => 'text',
                'autofocus'    => 'autofocus',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="">Telp</label>
              <?php

              $data = array(
                'id'           => 'phone_mailing',
                'name'         => 'phone_mailing',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="">Mobile</label>
              <?php

              $data = array(
                'id'           => 'mobile_mailing',
                'name'         => 'mobile_mailing',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>



          <div class="col-md-12">
            <div class="form-group">
              <label for="">Email</label>
              <?php

              $data = array(
                'id'           => 'email_mailing',
                'name'         => 'email_mailing',
                'class'        => 'form-control',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="">Full Address</label>
            <div>
                  <textarea class="textarea" name="address_mailing" id="address_mailing" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
          </div>

        </div>

      </div>

        <div class="modal-footer float-right">
           <button type="button" id="btnBackModal3" class="btn btn-secondary" data-toggle="modal" data-target="#myModalskp">
            <span class="fa fa-arrow-left"></span>
            Back
          </button>
          <button type="submit" class="btn btn-success">
            <span class="fa fa-check"></span>
            Save
          </button>
        </div>
        <?= form_close(); ?>
      </div>

    </div>
  </div>




<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-success">
        <h4 class="modal-title" id="modal-title-add"><span class='fa fa-plus'></span> Create New Source</h4>
        <button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></span></button>
      </div>
      
      <div class="modal-body">
        <?= form_open('', array('id' => 'FrmSource')); ?>


        <div class="row">
          <?php

          $data = array(
            'id'           => 'id_event',
            'name'         => 'id_event',
            'class'        => 'form-control',
            'type'         => 'hidden',
            'autocomplete' => 'off',
            'style'        => 'width:100%;'
          );

          echo form_input($data);

          ?>

          <div class="col-md-12">
            <div class="form-group">
              <label for="">Source Name*</label>
              <?php

              $data = array(
                'id'           => 'nama_event',
                'name'         => 'nama_event',
                'class'        => 'form-control',
                'type'         => 'text',
                'autofocus'    => 'autofocus',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);

              ?>
            </div>
          </div>


          <div class="col-md-12">
            <div class="form-group">
              <label for="">Source Contact D'Khayangan</label>
              <?php

              $data = array(
                'id'           => 'id_catevent',
                'name'         => 'id_catevent',
                'class'        => 'form-control',
                'type'         => 'text',
                'style'        => 'width:100%;'
              );

              $options = array(
                '' => ''
              );


              echo form_dropdown($data, $options);

              ?>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="">Date Start</label>
              <?php

              $data = array(
                'id'           => 'datestart_event',
                'name'         => 'datestart_event',
                'class'        => 'form-control tanggalWaktu',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);
              ?>
            </div>
          </div>

           <div class="col-md-6">
            <div class="form-group">
              <label for="">Date End</label>
              <?php

              $data = array(
                'id'           => 'dateend_event',
                'name'         => 'dateend_event',
                'class'        => 'form-control tanggalWaktu',
                'type'         => 'text',
                'autocomplete' => 'off',
                'style'        => 'width:100%;'
              );

              echo form_input($data);
              ?>
            </div>
          </div>

         

          <div class="col-md-12">
            <div class="form-group">
              <label for="">Note</label>
            <div>
                  <textarea class="textarea" name="note_event" id="note_event" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
          </div>

          </div>


        <div class="form-group float-right">
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-dismiss="modal">
            <span class="fa fa-arrow-left"></span>
            Back
          </button>
          <button type="submit" class="btn btn-success">
            <span class="fa fa-check"></span>
            Save
          </button>
        </div>
        <?= form_close(); ?>
      </div>

    </div>
  </div>

  </div>
 <!-- Bootstrap WYSIHTML5 ga;ij -->
  <script src="<?= base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>

<?php $this->load->view('js/js_win'); ?>