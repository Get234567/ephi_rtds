
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Senitenal site</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Senitenal site</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-5">
            <div class="card card-primary">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title"> Prevalence % of intensity over time by site (Ascaris) </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="bartChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              </div>
          <!-- /.card -->
          <div class="card card-primary">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"> Prevalence % of intensity over time by site (mansoni) </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barhChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>

            <!-- AREA CHART -->

            <!-- /.card -->



            <!-- PIE CHART -->

            <!-- /.card -->

          </div>


          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->

            <!-- /.card -->

            <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title"> Prevalence % of intensity over time by site (trichuris)</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              </div>
              <div class="card card-primary">
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Prevalence % of intensity over time by site (hookworm)</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="chart">
                      <canvas id="ramChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                </div>


          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <?php
    			include('conn.php');
    			$result = $db->prepare("SELECT kebele_name FROM kebeles, prevalence_intensities where kebeles.Kebele_id=prevalence_intensities.Kebele_id;");
    			$result->execute();
    			$data1888 = array();
    			$jsonc=[];
    			for($i=0; $row = $result->fetch(); $i++){
    				$data1888 = $row['kebele_name'];
    		$jsonc[]=$data1888;
    		}
    		?>
    		<?php $pp= json_encode($jsonc); ?>
        <?php
              include('conn.php');
              $result = $db->prepare("SELECT Year_1_ascaris_mean_epg FROM prevalence_intensities;");
              $result->execute();
              $data1999 = array();
              $data19aa = array();
              $data19bb = array();
              $jsonb=[];
              for($i=0; $row = $result->fetch(); $i++){
                $data1999 = "year 1";
                  $data19aa = $row['Year_1_ascaris_mean_epg'];

            $jsonb[]=$data19aa;
            }
            ?>
            <?php $albb= json_encode($jsonb); ?>
            <?php
                  include('conn.php');
                  $result = $db->prepare("SELECT Year_2_ascaris_mean_epg FROM prevalence_intensities;");
                  $result->execute();
                  $data2999 = array();
                  $data29aa = array();
                  $data29bb = array();
                  $json=[];
                  for($i=0; $row = $result->fetch(); $i++){
                    $data2999 = "year 2";
                      $data29aa = $row['Year_2_ascaris_mean_epg'];

                $json[]=$data29aa;
                }
                ?>
                <?php $abbb= json_encode($json); ?>
                <?php
                      include('conn.php');
                      $result = $db->prepare("SELECT Year_1_mansoni_mean_epg FROM prevalence_intensities;");
                      $result->execute();
                      $dataggg = array();
                      $dataggaa = array();
                      $dataggbb = array();
                      $jsonb=[];
                      for($i=0; $row = $result->fetch(); $i++){
                        $data1999 = "year 1";
                          $dataggaa = $row['Year_1_mansoni_mean_epg'];

                    $jsonb[]=$dataggaa;
                    }
                    ?>
                    <?php $albaa= json_encode($jsonb); ?>
                    <?php
                          include('conn.php');
                          $result = $db->prepare("SELECT Year_2_mansoni_mean_epg FROM prevalence_intensities;");
                          $result->execute();
                          $datagg99 = array();
                          $datagggg = array();
                          $data29bb = array();
                          $json=[];
                          for($i=0; $row = $result->fetch(); $i++){
                            $datagg9 = "year 2";
                              $datagggg = $row['Year_2_mansoni_mean_epg'];

                        $json[]=$datagggg;
                        }
                        ?>
                        <?php $abbaa= json_encode($json); ?>
                        <?php
                              include('conn.php');
                              $result = $db->prepare("SELECT Year_1_trichuris_mean_epg FROM prevalence_intensities;");
                              $result->execute();
                              $datattt = array();
                              $datattaa = array();
                              $datattbb = array();
                              $jsonb=[];
                              for($i=0; $row = $result->fetch(); $i++){
                                $data1999 = "year 1";
                                  $datattaa = $row['Year_1_trichuris_mean_epg'];

                            $jsonb[]=$datattaa;
                            }
                            ?>
                            <?php $albatt= json_encode($jsonb); ?>
                            <?php
                                  include('conn.php');
                                  $result = $db->prepare("SELECT Year_2_trichuris_mean_epg FROM prevalence_intensities;");
                                  $result->execute();
                                  $datatt99 = array();
                                  $datatttt = array();
                                  $datattbb = array();
                                  $json=[];
                                  for($i=0; $row = $result->fetch(); $i++){
                                    $datatt9 = "year 2";
                                      $datatttt = $row['Year_2_trichuris_mean_epg'];

                                $json[]=$datatttt;
                                }
                                ?>
                                <?php $abbatt= json_encode($json); ?>
                                <?php
                                      include('conn.php');
                                      $result = $db->prepare("SELECT Year_1_hookworm_mean_epg FROM prevalence_intensities;");
                                      $result->execute();
                                      $datahhh = array();
                                      $datahhaa = array();
                                      $datahhbb = array();
                                      $jsonb=[];
                                      for($i=0; $row = $result->fetch(); $i++){
                                        $data1999 = "year 1";
                                          $datahhaa = $row['Year_1_hookworm_mean_epg'];

                                    $jsonb[]=$datahhaa;
                                    }
                                    ?>
                                    <?php $albahh= json_encode($jsonb); ?>
                                    <?php
                                          include('conn.php');
                                          $result = $db->prepare("SELECT Year_2_hookworm_mean_epg FROM prevalence_intensities;");
                                          $result->execute();
                                          $datahh99 = array();
                                          $datahhhh = array();
                                          $datahhbh = array();
                                          $json=[];
                                          for($i=0; $row = $result->fetch(); $i++){
                                            $datahh99 = "year 2";
                                              $datahhhh = $row['Year_2_hookworm_mean_epg'];

                                        $json[]=$datahhhh;
                                        }
                                        ?>
                                        <?php $abbahh= json_encode($json); ?>
                                        <?php
                                              include('conn.php');
                                              $result = $db->prepare("SELECT kebele_name FROM kebeles, prevalence_sth_infections where kebeles.Kebele_id=prevalence_sth_infections.Kebele_id;");
                                              $result->execute();
                                              $data188 = array();
                                              $jsonc=[];
                                              for($i=0; $row = $result->fetch(); $i++){
                                                $data188 = $row['kebele_name'];
                                            $jsonc[]=$data188;
                                            }
                                            ?>
                                            <?php $p= json_encode($jsonc); ?>
                                            <?php
                                                  include('conn.php');
                                                  $result = $db->prepare("SELECT any_sth_year_1 FROM prevalence_sth_infections;");
                                                  $result->execute();
                                                  $data199 = array();
                                                  $data19a = array();
                                                  $data19b = array();
                                                  $jsonb=[];
                                                  for($i=0; $row = $result->fetch(); $i++){
                                                    $data199 = "year 1";
                                                      $data19a = $row['any_sth_year_1'];

                                                $jsonb[]=$data19a;
                                                }
                                                ?>
                                                <?php $alb= json_encode($jsonb); ?>
                                                <?php
                                                      include('conn.php');
                                                      $result = $db->prepare("SELECT any_sth_year_2 FROM prevalence_sth_infections;");
                                                      $result->execute();
                                                      $data299 = array();
                                                      $data29a = array();
                                                      $data29b = array();
                                                      $json=[];
                                                      for($i=0; $row = $result->fetch(); $i++){
                                                        $data299 = "year 2";
                                                          $data29a = $row['any_sth_year_2'];

                                                    $json[]=$data29a;
                                                    }
                                                    ?>
                                                    <?php $abb= json_encode($json); ?>
                                                    <?php
                                                          include('conn.php');
                                                          $result = $db->prepare("SELECT Ascaris_year_1 FROM prevalence_sth_infections;");
                                                          $result->execute();
                                                          $datagg = array();
                                                          $datagga = array();
                                                          $dataggb = array();
                                                          $jsonb=[];
                                                          for($i=0; $row = $result->fetch(); $i++){
                                                            $data199 = "year 1";
                                                              $datagga = $row['Ascaris_year_1'];

                                                        $jsonb[]=$datagga;
                                                        }
                                                        ?>
                                                        <?php $alba= json_encode($jsonb); ?>
                                                        <?php
                                                              include('conn.php');
                                                              $result = $db->prepare("SELECT Ascaris_year_2 FROM prevalence_sth_infections;");
                                                              $result->execute();
                                                              $datagg9 = array();
                                                              $dataggg = array();
                                                              $data29b = array();
                                                              $json=[];
                                                              for($i=0; $row = $result->fetch(); $i++){
                                                                $datagg9 = "year 2";
                                                                  $dataggg = $row['Ascaris_year_2'];

                                                            $json[]=$dataggg;
                                                            }
                                                            ?>
                                                            <?php $abba= json_encode($json); ?>
                                                            <?php
                                                                  include('conn.php');
                                                                  $result = $db->prepare("SELECT Trichuris_year_1 FROM prevalence_sth_infections;");
                                                                  $result->execute();
                                                                  $datatt = array();
                                                                  $datatta = array();
                                                                  $datattb = array();
                                                                  $jsonb=[];
                                                                  for($i=0; $row = $result->fetch(); $i++){
                                                                    $data199 = "year 1";
                                                                      $datatta = $row['Trichuris_year_1'];

                                                                $jsonb[]=$datatta;
                                                                }
                                                                ?>
                                                                <?php $albat= json_encode($jsonb); ?>
                                                                <?php
                                                                      include('conn.php');
                                                                      $result = $db->prepare("SELECT Trichuris_year_2 FROM prevalence_sth_infections;");
                                                                      $result->execute();
                                                                      $datatt9 = array();
                                                                      $datattt = array();
                                                                      $datattb = array();
                                                                      $json=[];
                                                                      for($i=0; $row = $result->fetch(); $i++){
                                                                        $datatt9 = "year 2";
                                                                          $datattt = $row['Trichuris_year_2'];

                                                                    $json[]=$datattt;
                                                                    }
                                                                    ?>
                                                                    <?php $abbat= json_encode($json); ?>
                                                                    <?php
                                                                          include('conn.php');
                                                                          $result = $db->prepare("SELECT hookworm_year_1 FROM prevalence_sth_infections;");
                                                                          $result->execute();
                                                                          $datahh = array();
                                                                          $datahha = array();
                                                                          $datahhb = array();
                                                                          $jsonb=[];
                                                                          for($i=0; $row = $result->fetch(); $i++){
                                                                            $data199 = "year 1";
                                                                              $datahha = $row['hookworm_year_1'];

                                                                        $jsonb[]=$datahha;
                                                                        }
                                                                        ?>
                                                                        <?php $albah= json_encode($jsonb); ?>
                                                                        <?php
                                                                              include('conn.php');
                                                                              $result = $db->prepare("SELECT hookworm_year_2 FROM prevalence_sth_infections;");
                                                                              $result->execute();
                                                                              $datahh9 = array();
                                                                              $datahhh = array();
                                                                              $datahhb = array();
                                                                              $json=[];
                                                                              for($i=0; $row = $result->fetch(); $i++){
                                                                                $datahh9 = "year 2";
                                                                                  $datahhh = $row['hookworm_year_2'];

                                                                            $json[]=$datahhh;
                                                                            }
                                                                            ?>
                                                                            <?php $abbah= json_encode($json); ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Add Content Here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->

<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->

<!-- Page specific script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
     $("#example1").DataTable({
       "responsive": true,
       "autoWidth": false,
     });
     $('#example2').DataTable({
       "paging": true,
       "lengthChange": false,
       "searching": false,
       "ordering": true,
       "info": true,
       "autoWidth": false,
       "responsive": true,
     });

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#barChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : <?php echo $p; ?>,
      datasets: [
        {
          label               : '<?php echo $data299; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $abb; ?>
        },
        {
          label               : '<?php echo $data199; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $alb; ?>
        },
      ]

    }


    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var galoData = {
      labels  : <?php echo $p; ?>,
      datasets: [
        {
          label               : '<?php echo $data299; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $abba; ?>
        },
        {
          label               : '<?php echo $data199; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $alba; ?>
        },
      ]

    }
    var galoOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var galotData = {
      labels  : <?php echo $p; ?>,
      datasets: [
        {
          label               : '<?php echo $data299; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $abbat; ?>
        },
        {
          label               : '<?php echo $data199; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $albat; ?>
        },
      ]

    }
    var galotOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
    var galohData = {
      labels  : <?php echo $p; ?>,
      datasets: [
        {
          label               : '<?php echo $data299; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $abbah; ?>
        },
        {
          label               : '<?php echo $data199; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $albah; ?>
        },
      ]

    }
    var galohOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    var raData = {
      labels  : <?php echo $pp; ?>,
      datasets: [
        {
          label               : '<?php echo $data1999; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $albb; ?>
        },
        {
          label               : '<?php echo $data2999; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $abbb; ?>
        },
      ]

    }
    var raOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
    var ramData = {
      labels  : <?php echo $pp; ?>,
      datasets: [
        {
          label               : '<?php echo $data1999; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $albaa; ?>
        },
        {
          label               : '<?php echo $data2999; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $abbaa; ?>
        },
      ]

    }
    var ramOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
    var ramaData = {
      labels  : <?php echo $pp; ?>,
      datasets: [
        {
          label               : '<?php echo $data1999; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $albatt; ?>
        },
        {
          label               : '<?php echo $data2999; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $abbatt; ?>
        },
      ]

    }
    var ramaOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
    var ramatData = {
      labels  : <?php echo $pp; ?>,
      datasets: [
        {
          label               : '<?php echo $data1999; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $albahh; ?>
        },
        {
          label               : '<?php echo $data2999; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : <?php echo $abbahh; ?>
        },
      ]

    }
    var ramatOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }
    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------


    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, galoData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })
    var bar1ChartCanvas = $('#bar1Chart').get(0).getContext('2d')
    var bar1ChartData = $.extend(true, {}, galoData)
    var temp0 = galoData.datasets[0]
    var temp1 = galoData.datasets[1]
    bar1ChartData.datasets[0] = temp1
    bar1ChartData.datasets[1] = temp0

    var bar1ChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var bar1Chart = new Chart(bar1ChartCanvas, {
      type: 'bar',
      data: bar1ChartData,
      options: bar1ChartOptions
    })
    var bartChartCanvas = $('#bartChart').get(0).getContext('2d')
    var bar1ChartData = $.extend(true, {}, galotData)
    var temp0 = galotData.datasets[0]
    var temp1 = galotData.datasets[1]
    bar1ChartData.datasets[0] = temp1
    bar1ChartData.datasets[1] = temp0

    var bartChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var bartChart = new Chart(bartChartCanvas, {
      type: 'bar',
      data: bar1ChartData,
      options: bartChartOptions
    })
    var barhChartCanvas = $('#barhChart').get(0).getContext('2d')
    var barhChartData = $.extend(true, {}, galotData)
    var temp0 = galohData.datasets[0]
    var temp1 = galohData.datasets[1]
    barhChartData.datasets[0] = temp1
    barhChartData.datasets[1] = temp0

    var barhChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barhhart = new Chart(barhChartCanvas, {
      type: 'bar',
      data: barhChartData,
      options: barhChartOptions
    })
    var raChartCanvas = $('#raChart').get(0).getContext('2d')
    var raChartData = $.extend(true, {}, raData)
    var temp0 = raData.datasets[0]
    var temp1 = raData.datasets[1]
    raChartData.datasets[0] = temp1
    raChartData.datasets[1] = temp0

    var raChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var rachart = new Chart(raChartCanvas, {
      type: 'bar',
      data: raChartData,
      options: raChartOptions
    })
    var ramChartCanvas = $('#ramChart').get(0).getContext('2d')
    var ramChartData = $.extend(true, {}, ramData)
    var temp0 = ramData.datasets[0]
    var temp1 = ramData.datasets[1]
    ramChartData.datasets[0] = temp1
    ramChartData.datasets[1] = temp0

    var ramChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var ramchart = new Chart(ramChartCanvas, {
      type: 'bar',
      data: ramChartData,
      options: ramChartOptions
    })
    var ramaChartCanvas = $('#ramaChart').get(0).getContext('2d')
    var ramaChartData = $.extend(true, {}, ramaData)
    var temp0 = ramaData.datasets[0]
    var temp1 = ramaData.datasets[1]
    ramaChartData.datasets[0] = temp1
    ramaChartData.datasets[1] = temp0

    var ramaChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var ramachart = new Chart(ramaChartCanvas, {
      type: 'bar',
      data: ramaChartData,
      options: ramaChartOptions
    })
    var ramatChartCanvas = $('#ramatChart').get(0).getContext('2d')
    var ramatChartData = $.extend(true, {}, ramatData)
    var temp0 = ramatData.datasets[0]
    var temp1 = ramatData.datasets[1]
    ramatChartData.datasets[0] = temp1
    ramatChartData.datasets[1] = temp0

    var ramatChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var ramatchart = new Chart(ramatChartCanvas, {
      type: 'bar',
      data: ramatChartData,
      options: ramatChartOptions
    })
    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
