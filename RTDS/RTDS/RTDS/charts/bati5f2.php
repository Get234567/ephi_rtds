
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
<script src="code/highcharts.js"></script>
<script src="code/modules/series-label.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>



<script src="/code/modules/accessibility.js"></script>
<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
min-width: 310px;
max-width: 800px;
margin: 1em auto;
}

.highcharts-data-table table {
font-family: Verdana, sans-serif;
border-collapse: collapse;
border: 1px solid #EBEBEB;
margin: 50px auto;
text-align: center;
width: 200%;
max-width: 500px;
}
.highcharts-data-table caption {
padding: 1em 0;
font-size: 1.2em;
color: #555;
}
.highcharts-data-table th {
font-weight: 600;
padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
background: #f8f8f8;
}
.highcharts-data-table tr:hover {
background: #f1f7ff;
}
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 20px auto;
	text-align: center;
	width: 200%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

#button-bar {
    min-width: 310px;
    max-width: 800px;
    margin: 0 auto;
}
</style>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div class="col-12" id="container21">>
          <div class="card card-primary">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Wah Dashboard year 2 </h3>

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

                      <figure class="highcharts-figure">
                          <div id="container21" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                          <p class="highcharts-description">


                          </p>
                      </figure>
                      <div id="button-bar">
                          <button id="small">Small</button>
                          <button id="large">Large</button>
                          <button id="auto">Auto</button>
                      </div>


                </div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Proportion % of Health care facilities with access to a Basic drinking water  </h3>
            </div>
            <!-- /.card-header -->
            <?php
                  include('conn.php');
                  $mm="";
                  $nn="";
                  $oo=0;
                  $data = array();
                  $data1 = array();
                  $json=[];
                    $json1=[];
                  $result = $db->prepare("SELECT proportion_hc_bdws.id,Woreda_name,AVG(basicwateraccess) as galo FROM woredas, proportion_hc_bdws where woredas.Woreda_id=proportion_hc_bdws.Woreda_id;");
                  $result->execute();

                  for($i=0; $row = $result->fetch(); $i++){
                $mm=$row['id'];
                $nn=$row['Woreda_name'];
                $oo=$row['galo'];


                  ?>

            <div class="row">
              <div class="col-6 col-md-3 text-center">
                <input type="text" class="knob" value="<?php echo $oo; ?>" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                <div class="knob-label"><?php echo $nn;  ?></div><?php } ?>
              </div>
              <!-- ./col -->

                            <?php
                                  include('conn.php');
                                  $mm1="";
                                  $nn1="";
                                  $ooo=0;
                                  $result = $db->prepare("SELECT proportion_hc_bdws.id,Woreda_name,AVG(basicwateraccess) as galo FROM woredas, proportion_hc_bdws where woredas.Woreda_id=proportion_hc_bdws.Woreda_id and Woreda_name='Damot Sore'");
                                  $result->execute();

                                  for($i=0; $row = $result->fetch(); $i++){
                                $mm1=$row['id'];
                                $nn1=$row['Woreda_name'];
                                $ooo=$row['galo'];

                                  ?>
              <div class="col-6 col-md-3 text-center">
                <input type="text" class="knob" value="<?php echo $ooo; ?>" data-width="90" data-height="90" data-fgColor="#f56954">

                <div class="knob-label"><?php echo $nn1;  ?></div><?php } ?>
              </div>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>woredas</th>
                  <th>Progress</th>
                  <th>Coverage</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                        include('conn.php');
                        $yy="";
                        $zz="";
                        $vv=0;
                        $data = array();
                        $data2 = array();
                        $json=[];
                          $json1=[];
                        $result = $db->prepare("SELECT proportion_hc_bdws.id,Woreda_name,basicwateraccess FROM woredas, proportion_hc_bdws where woredas.Woreda_id=proportion_hc_bdws.Woreda_id;");
                        $result->execute();

                        for($i=0; $row = $result->fetch(); $i++){
                      $yy=$row['id'];
                      $zz=$row['Woreda_name'];
                      $vv=$row['basicwateraccess'];
                      $data2=$row['basicwateraccess'];
                      $data=$row['Woreda_name'];

                        $json1[]=(int)$data2;
                        $json[]=$data;
                        ?>

                        <?php $wored= json_encode($json); ?>
                          <?php $galokk= json_encode($json1); ?>

                      <tr>
                        <td><?php echo $yy; ?></td>
                        <td><?php echo $zz; ?>
                        </td>
                        <td>
                          <div class="progress progress-xs progress-striped active">
                            <?php
                            $yh="";
                             if($vv>=50){
                               $yh="progress-bar bg-info";
                             }
                             else if($vv>=30){
                               $yh="progress-bar bg-info";
                             }
                             else{
                               $yh="progress-bar bg-info";
                             }

                            ?>
                            <div class="<?php echo $yh; ?>" style="width: <?php echo $vv; ?>%"></div>    </div>
                        </td>
                        <td><?php echo $vv; ?></td>

                      </tr>
                      <?php
                          }
                          ?>


                </tbody>
              </table>
            </div>
          </div>
            <!-- /.card-body -->


</div>

            <!-- AREA CHART -->

            <!-- /.card -->



            <!-- PIE CHART -->

            <!-- /.card -->



          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->

            <!-- /.card -->

            <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Proportion % of Health care facilities with access to a Basic sanitation on premises  </h3>
            </div>
            <!-- /.card-header -->
            <?php
                  include('conn.php');
                  $mm="";
                  $nn="";
                  $oo=0;
                  $result = $db->prepare("SELECT proportion_hc_bsanitations.id,Woreda_name,AVG(basicsanitation) as galo FROM woredas, proportion_hc_bsanitations where woredas.Woreda_id=proportion_hc_bsanitations.Woreda_id;");
                  $result->execute();

                  for($i=0; $row = $result->fetch(); $i++){
                $mm=$row['id'];
                $nn=$row['Woreda_name'];
                $oo=$row['galo'];

                  ?>
            <div class="row">
              <div class="col-6 col-md-3 text-center">
                <input type="text" class="knob" value="<?php echo $oo; ?>" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                <div class="knob-label"><?php echo $nn;  ?></div><?php } ?>
              </div>
              <!-- ./col -->

                            <?php
                                  include('conn.php');
                                  $mm1="";
                                  $nn1="";
                                  $ooo=0;
                                  $result = $db->prepare("SELECT proportion_hc_bsanitations.id,Woreda_name,AVG(basicsanitation) as galo FROM woredas, proportion_hc_bsanitations where woredas.Woreda_id=proportion_hc_bsanitations.Woreda_id and Woreda_name='Damot Sore'");
                                  $result->execute();

                                  for($i=0; $row = $result->fetch(); $i++){
                                $mm1=$row['id'];
                                $nn1=$row['Woreda_name'];
                                $ooo=$row['galo'];

                                  ?>
              <div class="col-6 col-md-3 text-center">
                <input type="text" class="knob" value="<?php echo $ooo; ?>" data-width="90" data-height="90" data-fgColor="#f56954">

                <div class="knob-label"><?php echo $nn1;  ?></div><?php } ?>
              </div>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>woredas</th>
                  <th>Progress</th>
                  <th>Coverage</th>
                </tr>
                </thead>
                <tbody>

                  <?php
                        include('conn.php');
                        $yy="";
                        $zz="";
                        $vv=0;
                        $data = array();
                        $data1 = array();
                        $json=[];
                          $json1=[];
                        $result = $db->prepare("SELECT proportion_hc_bsanitations.id,Woreda_name,basicsanitation FROM woredas, proportion_hc_bsanitations where woredas.Woreda_id=proportion_hc_bsanitations.Woreda_id;");
                        $result->execute();

                        for($i=0; $row = $result->fetch(); $i++){
                      $yy=$row['id'];
                      $zz=$row['Woreda_name'];
                      $vv=$row['basicsanitation'];
                      $data=$row['Woreda_name'];
                      $json[]=$data;
                      $data1=$row['basicsanitation'];
                        $json1[]=(int)$data1;

                      ?>
                      <?php $woreda= json_encode($json); ?>
                        <?php $galok= json_encode($json1); ?>
                      <tr>
                        <td><?php echo $yy; ?></td>
                        <td><?php echo $zz; ?>
                        </td>
                        <td>
                          <div class="progress progress-xs progress-striped active">
                            <?php
                            $yh="";
                             if($vv>=50){
                               $yh="progress-bar bg-info";
                             }
                             else if($vv>=30){
                               $yh="progress-bar bg-info";
                             }
                             else{
                               $yh="progress-bar bg-info";
                             }

                            ?>
                            <div class="<?php echo $yh; ?>" style="width: <?php echo $vv; ?>%"></div>    </div>
                        </td>
                        <td><?php echo $vv; ?></td>

                      </tr>
                      <?php
                          }
                          ?>


                </tbody>
              </table>
            </div>
          </div>
              <!-- /.card-body -->

            <!-- /.card -->


            <!-- STACKED BAR CHART -->



            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->
          <div class="col-12" id="container11">>
              <div class="card card-primary">
                <div class="card card-info">
                  <div class="card-header">
                    <h3 class="card-title"> Wah Dashboard year 2 </h3>

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

                          <figure class="highcharts-figure">
                              <div id="container11" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                              <p class="highcharts-description">


                              </p>
                          </figure>
                          <div id="button-bar">
                              <button id="small">Small</button>
                              <button id="large">Large</button>
                              <button id="auto">Auto</button>
                          </div>


                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                </div>
              </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <?php
    			include('conn.php');
    			$result = $db->prepare("SELECT age_group FROM intervals");
    			$result->execute();
    			$data188 = array();
    			$jsonc=[];
    			for($i=0; $row = $result->fetch(); $i++){
    				$data188 = $row['age_group'];
    		$jsonc[]=$data188;
    		}
    		?>
    		<?php $p= json_encode($jsonc); ?>
        <?php
              include('conn.php');
              $result = $db->prepare("SELECT Drug_name,treatment FROM drugs, age_interval_treatments where drugs.Drug_id=age_interval_treatments.Drug_id and age_interval_treatments.Drug_id=1;");
              $result->execute();
              $data199 = array();
              $data19a = array();
              $data19b = array();
              $jsonb=[];
              for($i=0; $row = $result->fetch(); $i++){
                $data199 = $row['Drug_name'];
                  $data19a = $row['treatment'];

            $jsonb[]=$data19a;
            }
            ?>
            <?php $alb= json_encode($jsonb); ?>
            <?php
                  include('conn.php');
                  $result = $db->prepare("SELECT Drug_name,treatment FROM drugs, age_interval_treatments where drugs.Drug_id=age_interval_treatments.Drug_id and age_interval_treatments.Drug_id=2;");
                  $result->execute();
                  $data299 = array();
                  $data29a = array();
                  $data29b = array();
                  $json=[];
                  for($i=0; $row = $result->fetch(); $i++){
                    $data299 = $row['Drug_name'];
                      $data29a = $row['treatment'];

                $json[]=$data29a;
                }
                ?>
                <?php $abb= json_encode($json); ?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="#">Geshiaro Project</a>.</strong> All rights reserved.
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
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Bootstrap 4 -->

<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->

<!-- Page specific script -->
<script type="text/javascript">
var chart = Highcharts.chart('container11', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Overall, 7 out of 15 health centres reported access to an improved water source, of these three reported the water source less than 500m from the health centre. In total 11 health centres reported access to a functional latrine for outpatients, of which 9 had access to an improved latrine. In total 13 health centres reported access to a functional latrine for staff, of which 9 was an improved latrine. No health centres had access to functional handwashing facilities. '
    },

    subtitle: {
        text: ''
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: <?php echo $woreda; ?>,
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Percentage'
        }
    },

    series: [{
        name: 'Health care facilities with access to a Basic sanitation on premises',
        data: <?php echo $galok; ?>
    }, {
        name: 'Proportion % of Health care facilities with access to a Basic drinking water',
        data: <?php echo $galokk; ?>
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

document.getElementById('small').addEventListener('click', function () {
    chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
    chart.setSize(800);
});

document.getElementById('auto').addEventListener('click', function () {
    chart.setSize(null);
});
var chart = Highcharts.chart('container21', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Overall, 7 out of 15 health centres reported access to an improved water source, of these three reported the water source less than 500m from the health centre. In total 11 health centres reported access to a functional latrine for outpatients, of which 9 had access to an improved latrine. In total 13 health centres reported access to a functional latrine for staff, of which 9 was an improved latrine. No health centres had access to functional handwashing facilities. '
    },

    subtitle: {
        text: ''
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ["Damot Pulasa","Damot sore"],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Number'
        }
    },

    series: [{
        name: 'n Health Facility',
        data: [9,6]
    }
    , {
        name: 'Improved Water Source',
        data: [33.3,66.7]
    }, {
        name: 'On Premises',
        data: [77.8,16.7]
    }, {
        name: 'Currently Available',
        data: [22.22,40]
    }, {
        name: '% With Basic Water Access',
        data: [11.1,20]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

document.getElementById('small').addEventListener('click', function () {
    chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
    chart.setSize(800);
});

document.getElementById('auto').addEventListener('click', function () {
    chart.setSize(null);
});
</script>
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
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

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
    var barChartData = $.extend(true, {}, areaChartData)
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
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })

</script>
