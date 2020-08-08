<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <!--<link rel="shortcut icon" href="<?= base_url('assets/image/logo.png') ?>">-->
  <title><?= $judul; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/bootstrap/select2//dist/css/select2.min.css') ?>">
<!-- JQVMap -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/jqvmap/jqvmap.min.css') ?>">
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.css') ?>">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/daterangepicker/daterangepicker.css') ?>">
<!-- summernote -->
<link rel="stylesheet" href="<?= base_url('assets/plugins/summernote/summernote-bs4.css') ?>">
<!-- Jquery Core Js -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
  
  <style>

    body {
      /*margin: 40px 10px;*/
      padding: 0;
      font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;
      font-size: 13px;
    }

    .btn{
      font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;
      font-size: 14px;
    }

   .form-group{

    font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;
    font-size: 14px;

    }

    .todo-list{

    font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;
    font-size: 12px;

    }

    @media (min-width: 768px) {
      .sidebar-mini.sidebar-collapse .main-header .logo {
        width: 230px;
        z-index: 1001;
        position: relative;
        color: white;
      }
    }

    @media (min-width: 768px) {
     .sidebar-mini.sidebar-collapse .main-header .logo>.logo-mini {
       display: none;
     }
   }

   @media (min-width: 768px) {
     .sidebar-mini.sidebar-collapse .main-header .logo>.logo-lg {
       display: block;
     }
   }


    #nama_cus {
    font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;
    font-size: 18px;
    font-weight: bold;

    }

    #assign_source_cus
    {
      font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;
      font-size: 16px;
    }

    thead { text-align: center;}
 /*   thead { text-align: center; background-color:  #ffc107; color: #391313;}*/


    #calendar {
      /*max-width: 900px;*/
      margin: 0 auto;
    }

    .modal-lg{
      min-width: 70%;
    }


    .modal-md{
      min-width: 60%;
    }


  </style>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed sidebar-collapse">
  <div class="wrapper">
    <!-- Navbar -->
    <?php $this->load->view('templates/navbar'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php $this->load->view('templates/aside'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header"></section>

      <!-- Main content -->
      <?php $this->load->view($konten); ?>
      <!-- /.content -->

 <!--        <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top" style="opacity: .1;">
          <i class="fas fa-chevron-up"></i>
        </a>
 -->
    </div>
    <!-- /.content-wrapper -->


  <footer class="main-footer p-0" style="text-align: center;">

  <strong>Powered &copy; 2020 <a style="color: #000000; opacity: .6;" href="https://maxproitsolution.com">maxproitsolution.com</a></strong>
    
  </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->




  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Sparkline -->
  <script src="<?= base_url('assets/plugins/sparklines/sparkline.js') ?>"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>

    <!-- Datatable -->
   <?php if (($this->uri->segment(1) != 'donasi') ): ?> 
    <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js') ?>"></script> 
    <?php endif ?> 
    <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.js') ?>"></script>
  <!-- Sweetalert -->
  <script src="<?= base_url('assets/sweetalert.min.js') ?>"></script>

  <!-- daterangepicker -->
  <script src="<?= base_url('assets/plugins/moment/moment.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>

  <script src="<?= base_url('assets/bootstrap/select2//dist/js/select2.min.js') ?>"></script>

  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
  <!-- Summernote -->
  <script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/dist/js/adminlte.js') ?>"></script>


  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>

  <script>
    $(function() {
        
      $('.tanggalWaktu').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale : {
          format : 'YYYY-MM-DD'
        }
      });
// Galuh Tanggal Waktu 2
      $('.tanggalWaktu2').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        timePicker: true,
        timePickerIncrement: 30,
        locale : {
          format : 'YYYY-MM-DD HH:mm:ss'
        }
      });

      

    });
  </script>
</body>
</html>
