 <script type="text/javascript" src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<style >
tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }

div.dataTables_wrapper {
        width: 100%;
        margin: 0 auto;
    }
th { font-size: 12px; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}
td { font-size: 11px; text-align: left; font-family:  Helvetica, Helvetica Neue, Arial, sans-serif;}


.badge1 {
  -webkit-border-radius: 1px;
  border-radius: 5px;
  border: none;
  color: #fffff;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 12px;
  padding: 2px 4px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 2000ms infinite;
  -moz-animation: glowing 2000ms infinite;
  -o-animation: glowing 2000ms infinite;
  animation: glowing 2000ms infinite;
}

@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 5px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 2px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 5px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 2px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 5px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 2px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 1px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 5px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 2px #B20000; }
}

.badge2 {
  -webkit-border-radius: 1px;
  border-radius: 5px;
  border: none;
  color: #fffff;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 12px;
  padding: 2px 4px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowingb 2000ms infinite;
  -moz-animation: glowingb 2000ms infinite;
  -o-animation: glowingb 2000ms infinite;
  animation: glowingb 2000ms infinite;
}

@-webkit-keyframes glowingb {
  0% { background-color: #ffd633; -webkit-box-shadow: 0 0 1px #ffd633; }
  50% { background-color:  #ffcc00; -webkit-box-shadow: 0 0 5px #ffcc00; }
  100% { background-color: #ffd633; -webkit-box-shadow: 0 0 2px #ffd633; }
}

@-moz-keyframes glowingb {
  0% { background-color: #ffd633; -moz-box-shadow: 0 0 1px #ffd633; }
  50% { background-color: #ffcc00; -moz-box-shadow: 0 0 5px #ffcc00; }
  100% { background-color: #ffd633; -moz-box-shadow: 0 0 2px #ffd633; }
}

@-o-keyframes glowingb {
  0% { background-color: #ffd633; box-shadow: 0 0 1px #ffd633; }
  50% { background-color: #ffcc00; box-shadow: 0 0 5px #ffcc00; }
  100% { background-color: #ffd633; box-shadow: 0 0 2px #ffd633; }
}

@keyframes glowingb {
  0% { background-color: #ffd633; box-shadow: 0 0 1px #ffd633; }
  50% { background-color: #ffcc00; box-shadow: 0 0 5px #ffcc00; }
  100% { background-color: #ffd633; box-shadow: 0 0 2px #ffd633; }
}

.badge3 {
  -webkit-border-radius: 1px;
  border-radius: 5px;
  border: none;
  color: #fffff;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 12px;
  padding: 2px 4px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowingc 2000ms infinite;
  -moz-animation: glowingc 2000ms infinite;
  -o-animation: glowingc 2000ms infinite;
  animation: glowingc 2000ms infinite;
}

@-webkit-keyframes glowingc {
  0% { background-color: #47d147; -webkit-box-shadow: 0 0 1px #47d147; }
  50% { background-color:  #2eb82e; -webkit-box-shadow: 0 0 5px #2eb82e; }
  100% { background-color: #47d147; -webkit-box-shadow: 0 0 2px #47d147; }
}

@-moz-keyframes glowingc {
  0% { background-color: #47d147; -moz-box-shadow: 0 0 1px #47d147; }
  50% { background-color: #2eb82e; -moz-box-shadow: 0 0 5px #2eb82e; }
  100% { background-color: #47d147; -moz-box-shadow: 0 0 2px #47d147; }
}

@-o-keyframes glowingc {
  0% { background-color: #47d147; box-shadow: 0 0 1px #47d147; }
  50% { background-color: #2eb82e; box-shadow: 0 0 5px #2eb82e; }
  100% { background-color: #47d147; box-shadow: 0 0 2px #47d147; }
}

@keyframes glowingc {
  0% { background-color: #47d147; box-shadow: 0 0 1px #47d147; }
  50% { background-color: #2eb82e; box-shadow: 0 0 5px #2eb82e; }
  100% { background-color: #47d147; box-shadow: 0 0 2px #47d147; }
}





</style>



<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">


      <div class="col-md-12 p-0" style="text-align: center;">
        <span class=" " style="font-weight: bold; font-size: 9px; text-align: : justify;" id="">
          M&nbspA&nbspX&nbspP&nbspR&nbspO&nbspI&nbspT&nbspS&nbspO&nbspL&nbspU&nbspT&nbspI&nbspO&nbspN
        </span>
      </div>
       <div class="col-md-12 p-0" style="text-align: center;">
          <span class="" style="margin-top: 0px; font-weight: bold; font-size: 26px; color:  #ff0040;" id="">
            M&nbspA&nbspX&nbsp&nbspC&nbspO&nbspV&nbspI&nbspD&nbsp1&nbsp9&nbsp<sup><i class="fas fa-briefcase-medical"></i></sup>
          </span>
         </div>
         <div class="col-md-12 mt-1" style="text-align: center;">
            <span class="" style="font-weight: bold; font-size: 9px; text-align: : justify;" id="">
             <!--  &copy; 2019  --><a href="#" style="font-weight: bold; font-size: 11px; color: #000000;">Sumber data :  kawalcorona.com - covid19.go.id   </a> 
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

 <div class="col-md-12 p-0 ml-2 mt-3" style="text-align: left;">

  <span class=" " style="font-weight: bold; font-size: 12px; text-align: : justify;" id="">
  DATA COVID-19 NEGARA INDONESIA
  </span>
</div>
 <div class="col-md-4">
   <div class="info-box" style="margin-top: 5px;">
    <span class="info-box-icon bg-danger elevation-2 badge1" ><i class="fas fa-medkit"></i></span>

    <div class="info-box-content">
     <span class="info-box-number" style="font-weight: bold; font-size: 30px; color:  #ff0040;" id="positif_id">..........</span>
     <span class="info-box-number" style=" font-size: 11px;" id="dirawat_id">ORANG POSITIF</span>
   </div>
 </div>
</div>
 <div class="col-md-4">
   <div class="info-box" style="margin-top: 5px;">
    <span class="info-box-icon bg-success elevation-2 badge3" ><i class="fas fa-user-shield"></i></span>

    <div class="info-box-content">
     <span class="info-box-number" style="font-weight: bold; font-size: 30px; color:  #ff0040;" id="sembuh_id">..........</span>
     <span class="info-box-number" style=" font-size: 11px;" id="">ORANG SEMBUH</span>
   </div>
 </div>
</div>
<div class="col-md-4">
 <div class="info-box" style="margin-top: 5px;">
  <span class="info-box-icon bg-warning elevation-2 badge2" ><i class="fas fa-heartbeat" style="color: #ffffff;"></i></span>

  <div class="info-box-content">
   <span class="info-box-number" style="font-weight: bold; font-size: 30px; color:  #ff0040;" id="meninggal_id">..........</span>
   <span class="info-box-number" style=" font-size: 11px;" id="">ORANG MENINGGAL</span>
 </div>
</div>
</div>

<div class="col-md-12 p-0 ml-2" style="text-align: left;">
<span class=" " style="font-weight: bold; font-size: 12px; text-align: : justify;" id="">
  DATA COVID-19 DI SELURUH DUNIA
</span>
</div>

<div class="col-md-12 mt-1">
   <table id="table" class="table table-hover table-bordered table-striped nowrap" style="width: 100%;">
          <thead>
           <tr>
             <th class="bg-danger text-white" width="35%">POSITIF</th>
             <th class="bg-success text-white" width="30%">SEMBUH</th>
             <th class="bg-warning" width="30%" style="color: #000000">MENINGGAL</th>
         </tr>
       </thead>
       <tbody id="">
        <td class="text-center" id="positif_global" style="font-weight: bold;"><b>..........</b></td>
        <td class="text-center" id="sembuh_global" style="font-weight: bold;"><b>..........</b></td>
        <td class="text-center" id="md_global" style="font-weight: bold;"><b>..........</b></td>

       </tbody>
     </table>

</div>

<div class="col-6 mt-2 mb-2">
 <button type="button" class="btn btn-block bg-gradient-success btn-flat" id="btn_provinsi">PROVINSI</button>
</div>
<div class="col-6 mt-2 mb-2">
 <button type="button" class="btn btn-block bg-gradient-danger btn-flat">PORTAL</button>
</div>

<div class="col-md-4 mt-2 mb-2">
  <div class="card h-100">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        REALTIME NASIONAL
      </h3>

      <?php
       foreach($pie_indo as $pie){
        $positif_numb=str_replace(",","",$pie->positif);
        $sembuh_numb=str_replace(",","",$pie->sembuh);
        $death_numb=str_replace(",","",$pie->meninggal);
        $dirawat_numb=(($positif_numb-$sembuh_numb)-$death_numb);

        $positif_note=$pie->positif;

        $dirawat_note= floor(($dirawat_numb/$positif_numb)*100);
        $md_note= floor(($death_numb/$positif_numb)*100);
        $sembuh_note= ceil(100-($dirawat_note+$md_note));
       }

      ?>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-8">
          <div class="chart-responsive">
            <canvas id="pieChart" height="150"></canvas>
          </div>
          <!-- ./chart-responsive -->
        </div>
        <!-- /.col -->
        <div class="col-md-4">
          <ul class="chart-legend clearfix">
            <li><i class="far fa-circle text-info"></i> DIRAWAT</li>
            <li><i class="far fa-circle text-success"></i> SEMBUH</li>
            <li><i class="far fa-circle text-warning"></i> MENINGGAL</li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer bg-white p-0">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link">
            TERKONFIRMASI POSITIF
            <span class="float-right text-danger">
              <span><?php echo $positif_note ?></span>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            DIRAWAT
            <span class="float-right text-info">
              <?php echo $dirawat_note ?> %
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            SEMBUH
            <span class="float-right text-success">
                <?php echo $sembuh_note ?> %
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            MENINGGAL DUNIA
            <span class="float-right text-warning">
              <?php echo $md_note ?> %
            </span>
          </a>
        </li>
        <li class="nav-item mt-2">
          <a href="#" class="nav-link" style="font-size: 10px; font-weight: bold; color: red;">
            % HASIL KASUS BERBANDING DATA POSITIF REALTIME
          </a>
        </li>
      </ul>
    </div>
    <!-- /.footer -->
  </div>
</div>
<!-- /.card -->

<div class="col-md-8 mt-2 mb-2">
  <div class="card h-100">
    <div class="card-header border-0">
      <h3 class="card-title">
        <i class="fas fa-th mr-1"></i>
        TREN NASIONAL
      </h3>

      <?php
      $x=0;
      $y=$indonesia_rows-15;
      foreach($indonesia as $data){
         if (++$x > $y){ 
        $label[] = date('M d', strtotime($data->date_covid_19_id));
        $positif [] = $data->positif_covid_19_id;
        $sembuh  [] = $data->sembuh_covid_19_id;
        $meninggal [] = $data->meninggal_covid_19_id;
      }else{


      }
    }
      ?>

      <div class="card-tools">
        <button type="button" class="btn  btn-sm" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="overflow-auto">
    <div class="card-body" style="min-width: 900px;">
      <canvas id="canvas" style="min-height: 250px; height: 250px; max-height: 250px; width: 100%;"></canvas>
    </div>
    <!-- /.card-body -->
    </div>
    <div class="card-footer bg-transparent">
     <span class=" " style="font-weight: bold; font-size: 9px; text-align:  left;" id="">
      <i class="fas fa-stop" style="color: red;"> </i> Positif &nbsp; <i class="fas fa-stop" style="color: #47d147;"> </i> Sembuh &nbsp;   <i class="fas fa-stop" style="color: #ffcc00;"> </i> Meninggal &nbsp; 
     </span>
    

  </div>
</div>
</div>






<div class="modal" id="modal_provinsi">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-gradient-navy">
        <h5 class="modal-title" id="modal-title-add"></h5>
        <button type="button" class="close" data-dismiss="modal"><span class="fa fa-times"></span></button>
      </div>

      <div class="modal-body">
        <div class="col-md-12">
      <table id="dataTable" class="table table-hover table-bordered table-striped dt-responsive nowrap" style="width: 100%;" cellpadding="0" cellspacing="0">
        <thead class="bg-yellow">
          <tr>
            <th width="2%">No.</th>
            <th width="62%">Provinsi</th>
            <th width="12%" style="text-align: center"><i class="fas fa-medkit"></i></th>
            <th width="12%" style="text-align: center white-space: pre;"><i class="fas fa-user-shield"> </i></th>
            <th width="12%" style="text-align: center"><i class="fas fa-heartbeat"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($provinsi as $row): ?>
          <tr>
          <td></td>
          <td><?= $row['attributes']['Provinsi']; ?></td>
          <td style="text-align: center; white-space: pre;"><?= $row['attributes']['Kasus_Posi']; ?></td>
          <td><?= $row['attributes']['Kasus_Semb']; ?></td>
          <td><?= $row['attributes']['Kasus_Meni']; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
   
    <!-- /.card-body -->
           
        </div>
        <div class="col-12 mt-2 ml-2" style="text-align: left;">
          <span class=" " style="font-weight: bold; font-size: 9px; text-align:  left;" id="">
           <i class="fas fa-plus-circle"> Data Lainnya &nbsp;&nbsp;</i> <i class="fas fa-medkit"> Positif &nbsp;</i>  <i class="fas fa-user-shield"> Sembuh &nbsp;</i> <i class="fas fa-heartbeat"> Meninggal &nbsp;</i>
          </span>
        </div>
  
      </div>
    </div>
  </div>
</div>


<div class="modal" id="modal_promo">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header bg-red">
        <progress class=""  value="0" max="5" id="progressBar"></progress>
        <button type="button" class="close" style="color: #ffffffff;" data-dismiss="modal"><span class="fa fa-times"></span></button>
      </div>

      <div class="modal-body">
        <div class="col-md-12 text-center">
          <span  id=""> <a href="https://api.whatsapp.com/send?phone=628129117079&text=Saya%20tertarik%20dengan%20lokasi%20tanah%20yang%20di%20Cikarang"> <img src="<?= base_url('assets/dist/img/FLYER_1.png') ?>" alt="User Image" width="280px" height="460px" class="img elevation-2"></a></span>

        </div>
      </div>
    </div>
  </div>
</div>






    </div>
    <!-- /.row -->
  </div>
  <!--/. container-fluid -->
</section>
    <!-- /.content -->
  <!-- ChartJS -->

  <script>
  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'Dirawat', 
          'Sembuh',
          'Meninggal', 
      ],
      datasets: [
        {
          data: [<?php echo ($dirawat_numb);?>,<?php echo ($sembuh_numb);?>,<?php echo ($death_numb);?>],
          backgroundColor : ['#4d88ff', '#00a65a', '#ffff00'],
        }
      ]
    }
    var pieOptions     = {
      legend: {
        display: false
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions      
    })
  //-----------------
  //- END PIE CHART -
  //-----------------

           // Sales graph chart
  var salesGraphChartCanvas = $('#canvas').get(0).getContext('2d');
  //$('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels  : <?php echo json_encode($label);?>,
    datasets: [
      {
        label               : 'Positif',
        fill                : false,
        borderWidth         : 4,
        lineTension         : 0,
        spanGaps : true,
        borderColor         : '#ff0000',
        pointRadius         : 4,
        pointHoverRadius    : 10,
        pointColor          : '#ff0000',
        pointBackgroundColor: '#ff6666',
        strokeColor: "rgba(151,137,200,0.8)",
        highlightStroke: "rgba(151,137,200,1)",
        data                : <?php echo json_encode($positif);?>
      },
      {
        label               : 'Sembuh',
        fill                : false,
        borderWidth         : 4,
        lineTension         : 0,
        spanGaps            : true,
        borderColor         : '#00e639',
        pointRadius         : 4,
        pointHoverRadius    : 10,
        pointColor          : '#00e639',
        pointBackgroundColor: '#00e639',
        strokeColor: "rgba(151,137,200,0.8)",
        highlightStroke: "rgba(151,137,200,1)",
        data                : <?php echo json_encode($sembuh);?>
      },
      {
        label               : 'Meninggal',
        fill                : false,
        borderWidth         : 4,
        lineTension         : 0,
        spanGaps            : true,
        borderColor         : '#ffff00',
        pointRadius         : 4,
        pointHoverRadius    : 10,
        pointColor          : '#ffff00',
        pointBackgroundColor: '#ffff00',
        strokeColor: "rgba(151,137,200,0.8)",
        highlightStroke: "rgba(151,137,200,1)",
        data                : <?php echo json_encode($meninggal);?>
      }

    ],

  }

  var salesGraphChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [{
        ticks : {
          fontColor: '#000000',
        },
        gridLines : {
          display : false,
          color: '#efefef',
          drawBorder: false,
        }
      }],
      yAxes: [{
        ticks : {
          stepSize: 1000,
          fontColor: '#000000',
        },
        gridLines : {
          display : true,
          color: '#efefef',
          drawBorder: false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesGraphChart = new Chart(salesGraphChartCanvas, { 
      type: 'line', 
      data: salesGraphChartData, 
      options: salesGraphChartOptions
    }
  )
        
    </script>
<?php $this->load->view('js/js_portal'); ?>


