
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
margin: 10px auto;
text-align: center;
width: 100%;
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

</style>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">

            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The treatment coverage of Albendazole over year</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
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

                  </div>
                </div>

                <!-- /.card-body -->
              </div>
            </div><br><br>
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The treatment coverage of ALB/PZQ for year 1 </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">

                        <figure class="highcharts-figure">
                            <div id="container5" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                            <p class="highcharts-description">


                            </p>
                        </figure>

                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              </div><br><br>
              <div class="card card-info collapsed-card">
              <div class="card-header">
                <h3 class="card-title">The treatment coverage of praziquantel for year 2</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kebele</th>
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
                          $pzqc=array();
                          $pzqk=array();
                          $vv=0;
                          $json=[];
                          $json1=[];
                          $result = $db->prepare("SELECT pzq_coverage_kebeles.id,kebele_name,coverage FROM kebeles, pzq_coverage_kebeles where kebeles.Kebele_id=pzq_coverage_kebeles.Kebele_id and coverage>80 or coverage<40;");
                          $result->execute();

                          for($i=0; $row = $result->fetch(); $i++){
                        $yy=$row['id'];
                        $zz=$row['kebele_name'];
                        $vv=$row['coverage'];
                        $pzqc=$row['coverage'];
                           $pzqk=$row['kebele_name'];
                           $json[]=(int)$pzqc;
                           $json1[]=$pzqk;
                          ?>
                          <?php $pzcov2= json_encode($json); ?>
                            <?php $pzkeb2= json_encode($json1); ?>
                        <tr>
                          <td><?php echo $yy; ?></td>
                          <td><?php echo $zz; ?>
                          </td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar bg-info" style="width: <?php echo $vv; ?>%"></div>
                            </div>
                          </td>
                          <td><?php echo $vv; ?></td>

                        </tr>
                        <?php
                            }
                            ?>


                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->

            </div><br><br>

                          <div class="card card-info collapsed-card">
                          <div class="card-header">
                            <h3 class="card-title">The treatment coverage of praziquantel for year 1</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-plus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>#</th>
                                <th>Kebele</th>
                                <th>Progress</th>
                                <th>Coverage</th>
                              </tr>
                              </thead>
                              <tbody>

                                <?php
                                      include('conn.php');
                                      $yy="";
                                      $zz="";
                                      $pzqc=array();
                                      $pzqk=array();
                                      $vv=0;
                                      $json=[];
                                      $json1=[];

                                      $result = $db->prepare("SELECT treatment_cov_year.id,kebele_name,PZQ_coverage FROM kebeles, treatment_cov_year where kebeles.Kebele_id=treatment_cov_year.Kebele_id and PZQ_coverage>95;");
                                      $result->execute();

                                      for($i=0; $row = $result->fetch(); $i++){
                                    $yy=$row['id'];
                                    $zz=$row['kebele_name'];
                                    $vv=$row['PZQ_coverage'];
                                    $pzqc=$row['PZQ_coverage'];
                                       $pzqk=$row['kebele_name'];
                                       $json[]=(int)$pzqc;
                                       $json1[]=$pzqk;
                                      ?>
                                      <?php $pzcov= json_encode($json); ?>
                                        <?php $pzkeb= json_encode($json1); ?>

                                    <tr>
                                      <td><?php echo $yy; ?></td>
                                      <td><?php echo $zz; ?>
                                      </td>
                                      <td>
                                        <div class="progress progress-xs progress-striped active">
                                          <div class="progress-bar bg-info" style="width: <?php echo $vv; ?>%"></div>
                                        </div>
                                      </td>
                                      <td><?php echo $vv; ?></td>

                                    </tr>
                                    <?php
                                        }
                                        ?>


                              </tbody>
                            </table>
                          </div>

                          <!-- /.card-body -->

                        </div><br><br>
                        <div class="card card-info collapsed-card">
                        <div class="card-header">
                          <h3 class="card-title">Treatment coverage Albendazole year 1</h3>
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-plus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>#</th>
                              <th>Kebele</th>
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
                                    $alcc=array();
                                    $alck=array();
                                     $json=[];
                                    $json1=[];
                                    $result = $db->prepare("SELECT treatment_cov_year.id,kebele_name,ALB_coverage FROM kebeles, treatment_cov_year where kebeles.Kebele_id=treatment_cov_year.Kebele_id and ALB_coverage>95 or ALB_coverage<58;");
                                    $result->execute();

                                    for($i=0; $row = $result->fetch(); $i++){
                                  $yy=$row['id'];
                                  $zz=$row['kebele_name'];
                                  $vv=$row['ALB_coverage'];

                                  $alcc=$row['ALB_coverage'];
                                     $albk=$row['kebele_name'];
                                     $json[]=(int)$alcc;
                                     $json1[]=$albk;
                                    ?>
                                    <?php $albcov= json_encode($json); ?>
                                      <?php $albkeb= json_encode($json1); ?>

                                  <tr>
                                    <td><?php echo $yy; ?></td>
                                    <td><?php echo $zz; ?>
                                    </td>
                                    <td>
                                      <div class="progress progress-xs progress-striped active">
                                        <div class="progress-bar bg-info" style="width: <?php echo $vv; ?>%"></div>
                                      </div>
                                    </td>
                                    <td><?php echo $vv; ?></td>

                                  </tr>
                                  <?php
                                      }
                                      ?>


                            </tbody>
                          </table>
                        </div>

                        <!-- /.card-body -->

                        </div><br><br>

            <div class="card card-info collapsed-card">
            <div class="card-header">
              <h3 class="card-title">Treatment coverage albendazole year 2</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Kebele</th>
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
                        $alcc=array();
                        $alck=array();
                         $json=[];
                        $json1=[];
                        $result = $db->prepare("SELECT treatment_coverage_kebeles.id,kebele_name,coverage FROM kebeles, treatment_coverage_kebeles where kebeles.Kebele_id=treatment_coverage_kebeles.Kebele_id and coverage>80 or coverage<35;");
                        $result->execute();

                        for($i=0; $row = $result->fetch(); $i++){
                      $yy=$row['id'];
                      $zz=$row['kebele_name'];
                      $vv=$row['coverage'];

                      $alcc=$row['coverage'];
                         $albk=$row['kebele_name'];
                         $json[]=(int)$alcc;
                         $json1[]=$albk;
                        ?>
                        <?php $albcov2= json_encode($json); ?>
                          <?php $albkeb2= json_encode($json1); ?>
                      <tr>
                        <td><?php echo $yy; ?></td>
                        <td><?php echo $zz; ?>
                        </td>
                        <td>
                          <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-info" style="width: <?php echo $vv; ?>%"></div>
                          </div>
                        </td>
                        <td><?php echo $vv; ?></td>

                      </tr>
                      <?php
                          }
                          ?>


                </tbody>
              </table>
            </div>

            <!-- /.card-body -->

          </div>


            <!-- AREA CHART -->

            <!-- /.card -->



            <!-- PIE CHART -->

            <!-- /.card -->

          </div><br><br><br><br>


          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->


            <!-- /.card -->

            <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The treatment coverage of praziquantel over year </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">

                        <figure class="highcharts-figure">
                            <div id="container44" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                            <p class="highcharts-description">


                            </p>
                        </figure>

                  </div>
                </div>

                <!-- /.card-body -->
              </div>
              </div><br><br>
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The treatment coverage by age group for year 2 </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">

                        <figure class="highcharts-figure">
                            <div id="container" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                            <p class="highcharts-description">


                            </p>
                        </figure>

                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              </div><br><br>
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The treatment coverage by age group for Year 2</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart">
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
Age intervals
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              </div><br><br>

              <!-- /.card-body -->

                <div class="card card-primary">
                  <div class="card card-info collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title"> The treatment coverage by age group year1 </h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart">

                            <figure class="highcharts-figure">
                                <div id="container3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                                <p class="highcharts-description">


                                </p>
                            </figure>

                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  </div><br><br>
                <div class="card card-primary">
                  <div class="card card-info collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title"> The treatment coverage of ALB/PZQ for year 2</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="chart">

                            <figure class="highcharts-figure">
                                <div id="container6" style="min-height: 500px; height: 500px; max-height: 500px; max-width: 500%;"></div>
                                <p class="highcharts-description">


                                </p>
                            </figure>

                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  </div>


            <!-- /.card -->



                          <div class="card-body">
                            <div class="chart">
                              <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                          </div>


            <!-- STACKED BAR CHART -->

            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->
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

            $jsonb[]=(int)$data19a;
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

                $json[]=(int)$data29a;
                }
                ?>
                <?php $abb= json_encode($json); ?>
                <?php
                      include('conn.php');
                      $result = $db->prepare("SELECT year1_treatment_age.id, intervals.age_group as galo , avg(value_ALB) as ALB, avg(value_PZQ) as PZQ FROM intervals, year1_treatment_age where year1_treatment_age.i_id=intervals.i_id group by year1_treatment_age.i_id;");
                      $result->execute();

                      $data29a = array();
                      $data29b = array();
                      $datainter1 = 0;
                      $json=[];
                      $json1=[];
                      $json3=[];
                      for($i=0; $row = $result->fetch(); $i++){
                          $data29a = $row['PZQ'];
                          $data29b = $row['ALB'];
                          $datainter1= $row['galo'];
                    $json[]=(int)$data29a;
                    $json1[]=(int)$data29b;
                    $json3[]=$datainter1;
                    }
                    ?>
                    <?php $newpzq= json_encode($json); ?>
                    <?php $newalb= json_encode($json1); ?>
                      <?php $datainter= json_encode($json3); ?>




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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->

<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->

<!-- Page specific script -->

<script type="text/javascript">
Highcharts.chart('container', {
chart: {
    type: 'spline'
},
title: {
    text: 'Year 2'
},
subtitle: {
    text: 'Albendazole and praziquantel treatment coverage by Age group'
},
xAxis: {
    categories: <?php echo $p; ?>
},
yAxis: {
    title: {
        text: 'Treatment'
    },
    labels: {
        formatter: function () {
            return this.value;
        }
    }
},
tooltip: {
    crosshairs: true,
    shared: true
},
plotOptions: {
    spline: {
        marker: {
            radius: 4,
            lineColor: '#666666',
            lineWidth: 1
        }
    }
},
series: [{
    name: '<?php echo $data299; ?>',
    marker: {
        symbol: 'square'
    },
    data: <?php echo $abb; ?>

}, {
    name: '<?php echo $data199; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $alb; ?>
}]
});
Highcharts.chart('container3', {
chart: {
    type: 'spline'
},
title: {
    text: 'Year 1'
},
subtitle: {
    text: 'Albendazole and praziquantel treatment coverage by Age group'
},
xAxis: {
    categories: <?php echo $datainter; ?>
},
yAxis: {
    title: {
        text: 'Treatment'
    },
    labels: {
        formatter: function () {
            return this.value;
        }
    }
},
tooltip: {
    crosshairs: true,
    shared: true
},
plotOptions: {
    spline: {
        marker: {
            radius: 4,
            lineColor: '#666666',
            lineWidth: 1
        }
    }
},
series: [{
    name: '<?php echo $data199; ?>',
    marker: {
        symbol: 'square'
    },
    data: <?php echo $newalb; ?>

}, {
    name: '<?php echo $data299; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $newpzq; ?>
}]
});
Highcharts.chart('container5', {
chart: {
    type: 'spline'
},
title: {
    text: 'Year 1'
},
subtitle: {
    text: 'Albendazole and praziquantel treatment coverage by Age group'
},
xAxis: {
    categories: <?php echo $pzkeb; ?>
},
yAxis: {
    title: {
        text: 'Treatment'
    },
    labels: {
        formatter: function () {
            return this.value;
        }
    }
},
tooltip: {
    crosshairs: true,
    shared: true
},
plotOptions: {
    spline: {
        marker: {
            radius: 4,
            lineColor: '#666666',
            lineWidth: 1
        }
    }
},
series: [{
    name: '<?php echo $data199; ?>',
    marker: {
        symbol: 'square'
    },
    data: <?php echo $albcov; ?>

}, {
    name: '<?php echo $data299; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $pzcov; ?>
}]
});
Highcharts.chart('container6', {
chart: {
    type: 'spline'
},
title: {
    text: 'Year 2'
},
subtitle: {
    text: 'Albendazole and praziquantel treatment coverage'
},
xAxis: {
    categories: <?php echo $pzkeb; ?>
},
yAxis: {
    title: {
        text: 'Treatment'
    },
    labels: {
        formatter: function () {
            return this.value;
        }
    }
},
tooltip: {
    crosshairs: true,
    shared: true
},
plotOptions: {
    spline: {
        marker: {
            radius: 4,
            lineColor: '#666666',
            lineWidth: 1
        }
    }
},
series: [{
    name: '<?php echo $data199; ?>',
    marker: {
        symbol: 'square'
    },
    data: <?php echo $albcov2; ?>

}, {
    name: '<?php echo $data299; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $pzcov2; ?>
}]
});
Highcharts.chart('container21', {

    title: {
        text: 'Bolosso sore kebeles'

    },

    subtitle: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'Percentage'
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: '2019,2020'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2019
        }
    },

    series: [{
        name: 'Achura mazegaja',
        data: [67, 56.7]
    }, {
        name: 'Admancho Arifata',
        data: [100, 52.4]
    }, {
        name: 'Afama Adila',
        data: [79, 69.9]
    }, {
        name: 'Afama Garo',
        data: [86, 70.7]
    }
    , {
        name: 'Chambo hembecho',
        data: [99, 49.2]
    }, {
        name: 'Metala hembecho',
        data: [66, 81.7]
    }, {
        name: 'Hajo salata',
        data: [59, 72.9]
    }, {
        name: 'Dola',
        data: [101, 62.5]
    }, {
        name: 'Dangara salata',
        data: [58, 62.4]
    }, {
        name: 'shuye homba',
        data: [58, 62.3]
    }, {
        name: 'woybo woga',
        data: [62, 90.1]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
Highcharts.chart('container44', {

    title: {
        text: 'Bolosso sore kebeles'
    },

    subtitle: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'Percentage'
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: '2019,2020'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2019
        }
    },

    series: [{
        name: 'Achura mazegaja',
        data: [73, 58.4]
    }, {
        name: 'Admancho Arifata',
        data: [106, 53.2]
    }, {
        name: 'Afama Adila',
        data: [84, 67.9]
    }, {
        name: 'Afama Garo',
        data: [89, 71.8]
    }
    , {
        name: 'Chambo hembecho',
        data: [99, 49]
    }, {
        name: 'Metala hembecho',
        data: [71, 81.1]
    }, {
        name: 'Hajo salata',
        data: [61, 73.1]
    }, {
        name: 'Dola',
        data: [107, 61.8]
    }, {
        name: 'Dangara salata',
        data: [60, 62]
    }, {
        name: 'shuye homba',
        data: [61, 62.5]
    }, {
        name: 'woybo woga',
        data: [63, 88.1]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
Highcharts.chart('container1', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Snow depth at Vikjafjellet, Norway'
    },
    subtitle: {
        text: 'Irregular time data in Highcharts JS'
    },
    xAxis: {
        type: 'datetime',
        dateTimeLabelFormats: { // don't display the dummy year
            month: '%e. %b',
            year: '%b'
        },
        title: {
            text: 'Date'
        }
    },
    yAxis: {
        title: {
            text: 'Snow depth (m)'
        },
        min: 0
    },
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
    },

    plotOptions: {
        series: {
            marker: {
                enabled: true
            }
        }
    },

    colors: ['#6CF', '#39F', '#06C', '#036', '#000'],

    // Define the data points. All series have a dummy year
    // of 1970/71 in order to be compared on the same x axis. Note
    // that in JavaScript, months start at 0 for January, 1 for February etc.
    series: [{
        name: "Winter 2014-2015",
        data: [
            [Date.UTC(1970, 10, 25), 0],
            [Date.UTC(1970, 11,  6), 0.25],
            [Date.UTC(1970, 11, 20), 1.41],
            [Date.UTC(1970, 11, 25), 1.64],
            [Date.UTC(1971, 0,  4), 1.6],
            [Date.UTC(1971, 0, 17), 2.55],
            [Date.UTC(1971, 0, 24), 2.62],
            [Date.UTC(1971, 1,  4), 2.5],
            [Date.UTC(1971, 1, 14), 2.42],
            [Date.UTC(1971, 2,  6), 2.74],
            [Date.UTC(1971, 2, 14), 2.62],
            [Date.UTC(1971, 2, 24), 2.6],
            [Date.UTC(1971, 3,  1), 2.81],
            [Date.UTC(1971, 3, 11), 2.63],
            [Date.UTC(1971, 3, 27), 2.77],
            [Date.UTC(1971, 4,  4), 2.68],
            [Date.UTC(1971, 4,  9), 2.56],
            [Date.UTC(1971, 4, 14), 2.39],
            [Date.UTC(1971, 4, 19), 2.3],
            [Date.UTC(1971, 5,  4), 2],
            [Date.UTC(1971, 5,  9), 1.85],
            [Date.UTC(1971, 5, 14), 1.49],
            [Date.UTC(1971, 5, 19), 1.27],
            [Date.UTC(1971, 5, 24), 0.99],
            [Date.UTC(1971, 5, 29), 0.67],
            [Date.UTC(1971, 6,  3), 0.18],
            [Date.UTC(1971, 6,  4), 0]
        ]
    }, {
        name: "Winter 2015-2016",
        data: [
            [Date.UTC(1970, 10,  9), 0],
            [Date.UTC(1970, 10, 15), 0.23],
            [Date.UTC(1970, 10, 20), 0.25],
            [Date.UTC(1970, 10, 25), 0.23],
            [Date.UTC(1970, 10, 30), 0.39],
            [Date.UTC(1970, 11,  5), 0.41],
            [Date.UTC(1970, 11, 10), 0.59],
            [Date.UTC(1970, 11, 15), 0.73],
            [Date.UTC(1970, 11, 20), 0.41],
            [Date.UTC(1970, 11, 25), 1.07],
            [Date.UTC(1970, 11, 30), 0.88],
            [Date.UTC(1971, 0,  5), 0.85],
            [Date.UTC(1971, 0, 11), 0.89],
            [Date.UTC(1971, 0, 17), 1.04],
            [Date.UTC(1971, 0, 20), 1.02],
            [Date.UTC(1971, 0, 25), 1.03],
            [Date.UTC(1971, 0, 30), 1.39],
            [Date.UTC(1971, 1,  5), 1.77],
            [Date.UTC(1971, 1, 26), 2.12],
            [Date.UTC(1971, 3, 19), 2.1],
            [Date.UTC(1971, 4,  9), 1.7],
            [Date.UTC(1971, 4, 29), 0.85],
            [Date.UTC(1971, 5,  7), 0]
        ]
    }, {
        name: "Winter 2016-2017",
        data: [
            [Date.UTC(1970, 9, 15), 0],
            [Date.UTC(1970, 9, 31), 0.09],
            [Date.UTC(1970, 10,  7), 0.17],
            [Date.UTC(1970, 10, 10), 0.1],
            [Date.UTC(1970, 11, 10), 0.1],
            [Date.UTC(1970, 11, 13), 0.1],
            [Date.UTC(1970, 11, 16), 0.11],
            [Date.UTC(1970, 11, 19), 0.11],
            [Date.UTC(1970, 11, 22), 0.08],
            [Date.UTC(1970, 11, 25), 0.23],
            [Date.UTC(1970, 11, 28), 0.37],
            [Date.UTC(1971, 0, 16), 0.68],
            [Date.UTC(1971, 0, 19), 0.55],
            [Date.UTC(1971, 0, 22), 0.4],
            [Date.UTC(1971, 0, 25), 0.4],
            [Date.UTC(1971, 0, 28), 0.37],
            [Date.UTC(1971, 0, 31), 0.43],
            [Date.UTC(1971, 1,  4), 0.42],
            [Date.UTC(1971, 1,  7), 0.39],
            [Date.UTC(1971, 1, 10), 0.39],
            [Date.UTC(1971, 1, 13), 0.39],
            [Date.UTC(1971, 1, 16), 0.39],
            [Date.UTC(1971, 1, 19), 0.35],
            [Date.UTC(1971, 1, 22), 0.45],
            [Date.UTC(1971, 1, 25), 0.62],
            [Date.UTC(1971, 1, 28), 0.68],
            [Date.UTC(1971, 2,  4), 0.68],
            [Date.UTC(1971, 2,  7), 0.65],
            [Date.UTC(1971, 2, 10), 0.65],
            [Date.UTC(1971, 2, 13), 0.75],
            [Date.UTC(1971, 2, 16), 0.86],
            [Date.UTC(1971, 2, 19), 1.14],
            [Date.UTC(1971, 2, 22), 1.2],
            [Date.UTC(1971, 2, 25), 1.27],
            [Date.UTC(1971, 2, 27), 1.12],
            [Date.UTC(1971, 2, 30), 0.98],
            [Date.UTC(1971, 3,  3), 0.85],
            [Date.UTC(1971, 3,  6), 1.04],
            [Date.UTC(1971, 3,  9), 0.92],
            [Date.UTC(1971, 3, 12), 0.96],
            [Date.UTC(1971, 3, 15), 0.94],
            [Date.UTC(1971, 3, 18), 0.99],
            [Date.UTC(1971, 3, 21), 0.96],
            [Date.UTC(1971, 3, 24), 1.15],
            [Date.UTC(1971, 3, 27), 1.18],
            [Date.UTC(1971, 3, 30), 1.12],
            [Date.UTC(1971, 4,  3), 1.06],
            [Date.UTC(1971, 4,  6), 0.96],
            [Date.UTC(1971, 4,  9), 0.87],
            [Date.UTC(1971, 4, 12), 0.88],
            [Date.UTC(1971, 4, 15), 0.79],
            [Date.UTC(1971, 4, 18), 0.54],
            [Date.UTC(1971, 4, 21), 0.34],
            [Date.UTC(1971, 4, 25), 0]
        ]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                plotOptions: {
                    series: {
                        marker: {
                            radius: 2.5
                        }
                    }
                }
            }
        }]
    }
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

</script>
