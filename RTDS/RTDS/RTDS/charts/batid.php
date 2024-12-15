
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
<br><br>
<body>
<section class="content">
  <div class="container-fluid">
    <div class="row">
  <div class="col-12" id="container_log">
      <div class="card card-primary">
        <div class="card card-info collapsed-card">
          <div class="card-header">
                    <h3 class="card-title"> The chart below describes the results from household observation on presence of latrines and handwashing facilities in the 12 kebeles surveyed. Although all the kebeles had over 90% of households with latrine, there was presence of faeces around some of the households. Adama Mino and Dachi Gofara were the kebeles with the lowest proportion of households with handwashing facilities near/close to latrines, 22.45 and 36.45% respectively. (year 1)</h3>

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
                                              <div id="container99"></div>
                                          </figure>


                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                </div>
                                </div>

              <div class="col-12" >
                <div class="card card-primary">
                  <div class="card card-info collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"> The chart below is a list of kebeles with evidence of open defecation, number of recorded instances of open defecation and the location. Majority of the recorded open defecation instances were in Afama Mino and Gara Goda. Overall, the location of these stool encounters was by the road side. (year 1)</h3>

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
                              <div id="container21" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 500%;"></div>
                          </figure>




                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    </div>
                  </div>
                  <div class="col-12">
                      <div class="card card-primary">
                        <div class="card card-info  collapsed-card">
                          <div class="card-header">
                            <h3 class="card-title">Overall, 39.1% of HH in DP and 29.5% in DS reported open defecation practice. This was defined as a HH with latrine, HH with handwashing facilities (although neither the distance nor presence of soap and water was criteria for this), all HH members reporting using the latrine (excluding children less than 5 years), and a reported proper disposal of child faeces (where children were less than 5). (year 2)  </h3>

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
                                  <div id="container31"></div>
                              </figure>



                            </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        </div>
                      </div>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card card-info  collapsed-card">
                <div class="card-header">
                <h3 class="card-title">Proportion of households meeting ODF targets</h3>

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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Woreda</th>
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
                          $result = $db->prepare("SELECT proportion_hh_odfs.id,Woreda_name, odfcriteria FROM woredas, proportion_hh_odfs where woredas.Woreda_id=proportion_hh_odfs.Woreda_id;");
                          $result->execute();

                          for($i=0; $row = $result->fetch(); $i++){
                        $yy=$row['id'];
                        $zz=$row['Woreda_name'];
                        $vv=$row['odfcriteria'];

                          ?>

                        <tr>
                          <td><?php echo $yy; ?></td>
                          <td><?php echo $zz; ?>
                          </td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <?php
                              $yh="";
                               if($vv>=50){
                                 $yh="progress-bar bg-success";
                               }
                               else if($vv>=30){
                                 $yh="progress-bar bg-warning";
                               }
                               else{
                                 $yh="progress-bar bg-info";
                               }

                              ?>
                              <div class="<?php echo $yh; ?>" style="width: <?php echo $vv; ?>%"></div>
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

          </div></div>

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





            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->

        <!-- /.row -->

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
        var ranges = [
        [2000, 14.3, 27.7],
        [2001, 14.5, 27.8],
        [2002, 15.5, 29.6],
        [2003, 16.7, 30.7],
        [2004, 16.5, 25.0],
        [2005, 17.8, 25.7],
        [2006, 13.5, 24.8]
    ],
    averages_u5mr = [
        [2000, 21.5],
        [2001, 22.1],
        [2002, 23],
        [2003, 23.8],
        [2004, 21.4],
        [2005, 21.3],
        [2006, 18.3]
    ],averages_sdg = [
        [2000, 15],
        [2001, 15],
        [2002, 15],
        [2003, 15],
        [2004, 15],
        [2005, 15],
        [2006, 15]
    ];


Highcharts.chart('container99', {

    chart: {
        type: 'column'
    },

    title: {
        text: ''
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
        categories: ["Korke doge","Afama Mino","Basa gofrara","Dachi gofara","Gara gofara","Gara goda","Admancho Arfita","Tiyo hembecho","Wormuma","Achura Mazegaja","Gurmo Koysha mazefaja","Dola","Dubbo"],
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
        name: 'With latrine',
        data: [99.41,100,95.9,95.11,95.07,98.23,94.9,98.11,95.58,96.92,100,99.35]
    }, {
        name: 'Without latrine',
        data: [0.59,0,4.26,5.14,5.17,1.79,5.36,1.93,4.62,3.17,0,0.64]
    }
    , {
        name: 'Latrines with facilities',
        data: [63.5,22.45,69.82,36.45,45.78,62.56,54.15,59.67,43.93,76.19,85.42,50.32]
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
</script>
<script type="text/javascript">
var chart = Highcharts.chart('container31', {
chart: {
    type: 'column'
},

title: {
    text: ' '
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
    categories: ["golo shanto","Galcha suke","Pulassa bakala","Zamine wulisho","Olola","waribira suke","Wasedo","Busha","Zemba zamine","Dogie shakiso","Dogie hamchicho","Sunkale","Sore mashdo","Bololla","Zamine nare"],
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
    name: 'A HH w/ latrine',
    data: [93.6,98.5,100,92.8,94.5,100,95.1,93.2,91,97,94.7,94.8,98.3,100,93.5]
}, {
    name: 'HH w/ HW facilities',
    data: [17.9,53.8,53.2,16.8,49.5,31.5,53.7,50,25.4,68,8.9,20.2,14.8,27.2,51.6]
}
, {
    name: 'All HH members use latrine',
    data: [92.1,98.5,95.7,85.6,91.2,91.7,94.5,93.2,87.3,95.3,92.3,92.2,95.7,100,91.1]
}, {
    name: 'Proper disposal of child faeces',
    data: [79.5,93.8,98.8,80.5,93.3,100,83.2,91.7,87.2,100,85.1,79.5,90.5,93.6,93]
}
, {
    name: '% HH meet ODF criteria',
    data: [17.1,53.8,48.7,16,42.9,30.6,53.7,47.5,24.3,66.9,8.9,17.6,14.8,27.2,48.4]
} ],

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
</script>
<script type="text/javascript">
var chart = Highcharts.chart('container21', {
chart: {
    type: 'column'
},

title: {
    text: ' '
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
    categories: ["Korke doge","Afama Mino","Basa gofrara","Dachi gofara","Gara gofara","Gara goda","Admancho Arfita","Tiyo hembecho","Wormuma","Achura Mazegaja","Gurmo Koysha mazefaja","Dubbo"],
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
    name: 'By the road',
    data: [3,22,1,7,7,5,2,1,2,5,3]
}, {
    name: 'Community field',
    data: [3,23,0,3,4,1,0,0,0,0,1]
}
, {
    name: 'Around school property',
    data: [0,0,0,0,2,0,0,0,0,1,0]
}, {
    name: 'BY the river',
    data: [0,3,0,2,2,0,0,2,0,0,0]
}
, {
    name: 'Sport field',
    data: [1,0,0,0,0,0,0,0,0,0,0]
}
, {
    name: 'Around markets',
    data: [1,0,0,0,0,0,0,0,0,0,0]
}
, {
    name: 'other',
    data: [0,0,0,1,1,0,0,0,0,0,0]
}
],

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


    </script>
<script type="text/javascript">
var chart = Highcharts.chart('container1111', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'The chart below describes the results from household observation on presence of latrines and handwashing facilities in the 12 kebeles surveyed. Although all the kebeles had over 90% of households with latrine, there was presence of faeces around some of the households. Adama Mino and Dachi Gofara were the kebeles with the lowest proportion of households with handwashing facilities near/close to latrines, 22.45 and 36.45% respectively. (year 1)'
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
        categories: ["Korke doge","Afama Mino","Basa gofrara","Dachi gofara","Gara gofara","Gara goda","Admancho Arfita","Tiyo hembecho","Wormuma","Achura Mazegaja","Gurmo Koysha mazefaja","Dola","Dubbo"],
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
        name: 'With latrine',
        data: [99.41,100,95.9,95.11,95.07,98.23,94.9,98.11,95.58,96.92,100,99.35]
    }, {
        name: 'Without latrine',
        data: [0.59,0,4.26,5.14,5.17,1.79,5.36,1.93,4.62,3.17,0,0.64]
    }
    , {
        name: 'Latrines with facilities',
        data: [63.5,22.45,69.82,36.45,45.78,62.56,54.15,59.67,43.93,76.19,85.42,50.32]
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
var chart = Highcharts.chart('container551', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'The chart below is a list of kebeles with evidence of open defecation, number of recorded instances of open defecation and the location. Majority of the recorded open defecation instances were in Afama Mino and Gara Goda. Overall, the location of these stool encounters was by the road side. (year 1) '
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
        categories: ["Korke doge","Afama Mino","Basa gofrara","Dachi gofara","Gara gofara","Gara goda","Admancho Arfita","Tiyo hembecho","Wormuma","Achura Mazegaja","Gurmo Koysha mazefaja","Dubbo"],
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
        name: 'By the road',
        data: [3,22,1,7,7,5,2,1,2,5,3]
    }, {
        name: 'Community field',
        data: [3,23,0,3,4,1,0,0,0,0,1]
    }
    , {
        name: 'Around school property',
        data: [0,0,0,0,2,0,0,0,0,1,0]
    }, {
        name: 'BY the river',
        data: [0,3,0,2,2,0,0,2,0,0,0]
    }
    , {
        name: 'Sport field',
        data: [1,0,0,0,0,0,0,0,0,0,0]
    }
    , {
        name: 'Around markets',
        data: [1,0,0,0,0,0,0,0,0,0,0]
    }
    , {
        name: 'other',
        data: [0,0,0,1,1,0,0,0,0,0,0]
    }
    ],

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
var chart = Highcharts.chart('container91', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Overall, 39.1% of HH in DP and 29.5% in DS reported open defecation practice. This was defined as a HH with latrine, HH with handwashing facilities (although neither the distance nor presence of soap and water was criteria for this), all HH members reporting using the latrine (excluding children less than 5 years), and a reported proper disposal of child faeces (where children were less than 5). (year 2)  '
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
        categories: ["golo shanto","Galcha suke","Pulassa bakala","Zamine wulisho","Olola","waribira suke","Wasedo","Busha","Zemba zamine","Dogie shakiso","Dogie hamchicho","Sunkale","Sore mashdo","Bololla","Zamine nare"],
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
        name: 'A HH w/ latrine',
        data: [93.6,98.5,100,92.8,94.5,100,95.1,93.2,91,97,94.7,94.8,98.3,100,93.5]
    }, {
        name: 'HH w/ HW facilities',
        data: [17.9,53.8,53.2,16.8,49.5,31.5,53.7,50,25.4,68,8.9,20.2,14.8,27.2,51.6]
    }
    , {
        name: 'All HH members use latrine',
        data: [92.1,98.5,95.7,85.6,91.2,91.7,94.5,93.2,87.3,95.3,92.3,92.2,95.7,100,91.1]
    }, {
        name: 'Proper disposal of child faeces',
        data: [79.5,93.8,98.8,80.5,93.3,100,83.2,91.7,87.2,100,85.1,79.5,90.5,93.6,93]
    }
    , {
        name: '% HH meet ODF criteria',
        data: [17.1,53.8,48.7,16,42.9,30.6,53.7,47.5,24.3,66.9,8.9,17.6,14.8,27.2,48.4]
    } ],

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
