
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
<?php
      include('conn.php');
      $result = $db->prepare("SELECT distinct woredas.Woreda_name as woreda,Trichuris as Tr,no_individual_infected as inf FROM woredas, ss_woreda_preval1, mean_sthand_sm_woredas where ss_woreda_preval1.Woreda_id=woredas.Woreda_id and ss_woreda_preval1.Woreda_id=mean_sthand_sm_woredas.Woreda_id and mean_sthand_sm_woredas.I_id=3 order by woredas.Woreda_id;");
      $result->execute();
      $bush = array();
        $hh= array();
        $gg= array();
        $ii= array();


      $json=[];
      $json1=[];
      $json2=[];

      for($i=0; $row = $result->fetch(); $i++){
        $hh = $row['woreda'];
        $gg = $row['Tr'];
        $ii= $row['inf'];




    $json[]=$hh;
    $json1[]=(int)$gg;
    $json2[]=(int)$ii;


    }
    ?>
    <?php $wor1= json_encode($json); ?>
      <?php $atr= json_encode($json1); ?>
        <?php $inf= json_encode($json2); ?>
        <?php
              include('conn.php');
              $result = $db->prepare("SELECT distinct woredas.Woreda_name as woreda,Ascaris as st,no_individual_infected as inf FROM woredas, ss_woreda_preval1, mean_sthand_sm_woredas where ss_woreda_preval1.Woreda_id=woredas.Woreda_id and ss_woreda_preval1.Woreda_id=mean_sthand_sm_woredas.Woreda_id and mean_sthand_sm_woredas.I_id=4 order by woredas.Woreda_id;");
              $result->execute();
              $bush = array();
                $hh= array();
                $gg= array();
                $ii= array();


              $json=[];
              $json1=[];
              $json2=[];

              for($i=0; $row = $result->fetch(); $i++){
                $hh = $row['woreda'];
                $gg = $row['st'];
                $ii= $row['inf'];




            $json[]=$hh;
            $json1[]=(int)$gg;
            $json2[]=(int)$ii;


            }
            ?>
            <?php $wor2= json_encode($json); ?>
              <?php $st1= json_encode($json1); ?>
                <?php $inf1= json_encode($json2); ?>
                <?php
                      include('conn.php');
                      $result = $db->prepare("SELECT distinct woredas.Woreda_name as woreda,Hookworm as hm,no_individual_infected as inf FROM woredas, ss_woreda_preval1, mean_sthand_sm_woredas where ss_woreda_preval1.Woreda_id=woredas.Woreda_id and ss_woreda_preval1.Woreda_id=mean_sthand_sm_woredas.Woreda_id and mean_sthand_sm_woredas.I_id=2 order by woredas.Woreda_id;");
                      $result->execute();
                      $bush = array();
                        $hh= array();
                        $gg= array();
                        $ii= array();


                      $json=[];
                      $json1=[];
                      $json2=[];

                      for($i=0; $row = $result->fetch(); $i++){
                        $hh = $row['woreda'];
                        $gg = $row['hm'];
                        $ii= $row['inf'];




                    $json[]=$hh;
                    $json1[]=(int)$gg;
                    $json2[]=(int)$ii;


                    }
                    ?>
                    <?php $wor3= json_encode($json); ?>
                      <?php $hm1= json_encode($json1); ?>
                        <?php $inf2= json_encode($json2); ?>

<?php
      include('conn.php');
      $result = $db->prepare("SELECT DISTINCT woredas.Woreda_name as woreda FROM woredas, prevalence_sthandsm_woredas where prevalence_sthandsm_woredas.Woreda_id=woredas.Woreda_id;");
      $result->execute();
      $wored = array();
      $json=[];
      for($i=0; $row = $result->fetch(); $i++){
        $wored = $row['woreda'];

    $json[]=$wored;
    }
    ?>
    <?php $woreda= json_encode($json); ?>
    <?php
          include('conn.php');
          $result = $db->prepare("SELECT woredas.Woreda_name as woreda, Any_sth as any,Hookworm as hk, Trichuris as Tr, haematuria as hm, Ascaris as kb, poc as poc FROM woredas, ss_woreda_preval1 where ss_woreda_preval1.Woreda_id=woredas.Woreda_id;");
          $result->execute();
          $bush = array();
            $hh= array();
            $gg= array();
            $ii= array();
            $jj= array();
            $kk= array();
            $ll= array();
            $mm= array();

          $json=[];
          $json1=[];
          $json2=[];
          $json3=[];
          $json4=[];
          $json5=[];
            $json6=[];
            $json7=[];
          for($i=0; $row = $result->fetch(); $i++){
            $hh = $row['woreda'];
            $gg= $row['any'];
            $ii = $row['hk'];
            $jj = $row['Tr'];
            $kk= $row['hm'];
            $ll = $row['kb'];
              $mm = $row['poc'];



        $json[]=$hh;
        $json1[]=(int)$gg;
        $json2[]=(int)$ii;
        $json3[]=(int)$jj;
        $json4[]=(int)$kk;
        $json5[]=(int)$ll;
        $json7[]=(int)$mm;
          $json6[]=[$hh,(int)$gg];
        }
        ?>
        <?php $wor= json_encode($json); ?>
          <?php $any= json_encode($json1); ?>
            <?php $hk= json_encode($json2); ?>
            <?php $tr= json_encode($json3); ?>
              <?php $hm= json_encode($json4); ?>
                <?php $kb= json_encode($json5); ?>
                  <?php $nn= json_encode($json6); ?>
                    <?php $mm= json_encode($json7); ?>


<?php
      include('conn.php');
      $result = $db->prepare("SELECT woredas.Woreda_name as woreda, intensities.intensity as intensity, no_individual_infected as infection  FROM woredas, mean_sthand_sm_woredas, intensities where mean_sthand_sm_woredas.Woreda_id=woredas.Woreda_id and mean_sthand_sm_woredas.i_id=intensities.i_id;");
      $result->execute();
      $bush = array();
        $infected= array();
        $intensity= array();
      $json=[];
      $json1=[];
      $json2=[];
      for($i=0; $row = $result->fetch(); $i++){
        $wored = $row['woreda'];
        $infected = $row['infection'];
        $intensity = $row['intensity'];



    $json[]=$wored;
    $json1[]=(int)$infected;
    $json2[]=$intensity;
    }
    ?>
    <?php $woreda= json_encode($json); ?>
      <?php $intensity= json_encode($json2); ?>
        <?php $infected= json_encode($json1); ?>








<?php
      include('conn.php');
      $result = $db->prepare("SELECT kebele_name FROM kebeles, prevalence_intensities where kebeles.Kebele_id=prevalence_intensities.Kebele_id order by prevalence_intensities.id asc;");
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
                                          $result = $db->prepare("SELECT kebele_name FROM kebeles, prevalence_sth_infections where kebeles.Kebele_id=prevalence_sth_infections.Kebele_id order by prevalence_sth_infections.id asc;");
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
                                                                      $result = $db->prepare("SELECT Trichuris_year_1 FROM prevalence_sth_infections;");
                                                                      $result->execute();
                                                                      $datatt = array();
                                                                      $datatta = array();
                                                                      $datattb = array();
                                                                      $jsonb=[];
                                                                      for($i=0; $row = $result->fetch(); $i++){
                                                                        $data199 = "year 1";
                                                                          $datatta = $row['Trichuris_year_1'];

                                                                    $jsonb[]=(int)$datatta;
                                                                    }
                                                                    ?>
                                                                    <?php $albag= json_encode($jsonb); ?>
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

                                                                        $json[]=(int)$datattt;
                                                                        }
                                                                        ?>
                                                                        <?php $abbag= json_encode($json); ?>

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


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The prevalence of trichuris over year </h3>

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
                            <div id="container31" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
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
                  <h3 class="card-title"> The prevalence of trichuris over year </h3>

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
              </div>
              <br>

              <div class="card card-primary">
                <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title">The prevalence of trichuris over year </h3>

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
                    <canvas id="bartChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                  <button id="small">Bolosso Bombe kebeles</button>
                <!-- /.card-body -->
              </div>
            </div><br><br>
          <!-- /.card -->
          <div class="card card-primary">
            <div class="card card-info collapsed-card">
              <div class="card-header">
                <h3 class="card-title"> The prevalence of Hookworm over year  </h3>

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
                  <canvas id="barhChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
                <button id="small">Bolosso Bombe kebeles</button>
              <!-- /.card-body -->
            </div>
          </div><br><br>
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> Overall prevalence and intensity of any STH and SCH over year </h3>

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
                </div><br>
                <button id="container61">Hookworm/button>
                <!-- /.card-body -->
              </div>
              </div>



            <!-- AREA CHART -->

            <!-- /.card -->



            <!-- PIE CHART -->

            <!-- /.card -->

          </div>
<br><br>

          <!-- /.col (LEFT) -->
          <div class="col-md-6">
            <!-- LINE CHART -->

            <!-- /.card -->
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The prevalence of Ascaris over year</h3>

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
                            <div id="container41" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
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
                    <h3 class="card-title"> The prevalence of Hookworm over year</h3>

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
                              <div id="container51" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                              <p class="highcharts-description">


                              </p>
                          </figure>

                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                </div><br><br>
            <!-- BAR CHART -->
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> The prevalence of any STH over year </h3>

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
                  </div>
                </div>
                <button id="small">Bolosso Bombe kebeles</button>
                <!-- /.card-body -->
              </div>
              </div>

              <!-- /.card-body -->

            <!-- /.card -->



<br><br><br>
            <!-- STACKED BAR CHART -->
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
                <div class="card-header">
                  <h3 class="card-title">  The prevalence of Ascaris over year</h3>

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
                    <canvas id="bar1Chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <button id="small">Bolosso Bombe kebeles</button>
                <!-- /.card-body -->
              </div>
            </div><br><br>
              <!-- STACKED BAR CHART -->

              <div class="card card-primary">
                <div class="card card-info collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title"> Prevalence and intensity of any STH and SCH by age and gender</h3>

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
                                <div id="container8" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 250%;"></div>
                                <p class="highcharts-description">


                                </p>
                            </figure>


                      </div>
                    </div>
                    <!-- /.card-body -->
                      <button id="container88">Bolosso Bombe </button>
                  </div>
                  </div>



          </div><br><br>
          <div class="col-12" id="container11">>
            <div class="card card-primary">
              <div class="card card-info collapsed-card">
              <div class="card-header">
                <h3 class="card-title"> Prevalence of STH and SCH by woreda for year 1 </h3>

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

          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
    text: 'Bolosso bombe kebeles'
},
subtitle: {
    text: ''
},
xAxis: {
    categories: <?php echo $p; ?>
},
yAxis: {
    title: {
        text: 'percentage'
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
    data: <?php echo $albag; ?>

}, {
    name: '<?php echo $data199; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $abbag; ?>
}]
});
Highcharts.chart('container31', {
chart: {
    type: 'spline'
},
title: {
    text: 'Trichuris'
},
subtitle: {
    text: ''
},
xAxis: {
    categories: <?php echo $wor1; ?>
},
yAxis: {
    title: {
        text: 'percentage'
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
    data: <?php echo $atr; ?>

}, {
    name: '<?php echo $data299; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $inf; ?>
}]
});
Highcharts.chart('container41', {
chart: {
    type: 'spline'
},
title: {
    text: 'Ascaris'
},
subtitle: {
    text: ''
},
xAxis: {
    categories: <?php echo $wor1; ?>
},
yAxis: {
    title: {
        text: 'Percentage'
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
    data: <?php echo $st1; ?>

}, {
    name: '<?php echo $data299; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $inf1; ?>
}]
});
Highcharts.chart('container51', {
chart: {
    type: 'spline'
},
title: {
    text: 'Hookworm'
},
subtitle: {
    text: ''
},
xAxis: {
    categories: <?php echo $wor2; ?>
},
yAxis: {
    title: {
        text: 'Percentage'
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
    data: <?php echo $hm1; ?>

}, {
    name: '<?php echo $data299; ?>',
    marker: {
        symbol: 'diamond'
    },
    data: <?php echo $inf2; ?>
}]
});
Highcharts.chart('container8', {
chart: {
    type: 'spline'
},
title: {
    text: 'STH and SCH '
},
subtitle: {
    text: ''
},
xAxis: {
    categories: ["Pre-SAC","SAC","Adolescents","21-35","35+"]
},
yAxis: {
    title: {
        text: 'Percentage'
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
    name: 'Female',
    marker: {
        symbol: 'square'
    },
    data: [15.5,9.88,9.5,11.9,12.5]

}, {
    name: 'Male',
    marker: {
        symbol: 'diamond'
    },
    data: [15.5,10.3,9.5,11.9,13.7]
}]
});
Highcharts.chart('container88', {
chart: {
    type: 'spline'
},
title: {
    text: 'Hookworm '
},
subtitle: {
    text: 'Prevalence and intensity of Hookworm by age and gender '
},
xAxis: {
    categories: ["Pre-SAC","SAC","Adolescents","21-35","35+"]
},
yAxis: {
    title: {
        text: 'Percentage'
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
    name: 'Female',
    marker: {
        symbol: 'square'
    },
    data: [8.65,4.35,3.84,5.12,7.03]

}, {
    name: 'Male',
    marker: {
        symbol: 'diamond'
    },
    data: [7.13,4.63,5.18,7.13,7.66]
}]
});
Highcharts.chart('container21', {

    title: {
        text: ''
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
        name: 'S.mansoni',
        data: [0.27,3.02]
    }, {
        name: 'Hookworm',
        data: [5.57, 12.5]
    }, {
        name: 'Ascaris',
        data: [7.17, 13]
    }, {
        name: 'Trichuris',
        data: [1.05, 3.02]
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
Highcharts.chart('container61', {

    title: {
        text: 'Overall prevalence of hookworm over year by age and gender'
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
        name: 'Pre-SAC Female',
        data: [8.65,10.8]
    }, {
        name: 'Pre-SAC Male',
        data: [7.13, 11.4]
    }, {
        name: 'SAC Female',
        data: [4.35, 10.7]
    }, {
        name: 'SAC Male',
        data: [4.63, 5.98]
    }
    , {
        name: 'Adolescents Female',
        data: [3.84, 12.4]
    }
    , {
        name: 'Adolescents Male',
        data: [5.18, 17.5]
    }
    , {
        name: '[21-35] Female',
        data: [5.13, 12.9]
    }
    , {
        name: '[21-35] Male',
        data: [7.13, 17.9]
    }
    , {
        name: '[35+] female',
        data: [7.03, 13.6]
    }
    , {
        name: '[35+] Male',
        data: [7.66, 16.2]
    }
    , {
        name: 'Adolescents Male',
        data: [5.18, 17.5]
    }
  ],

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
var chart = Highcharts.chart('container11', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Prevalence of STH and SCH by woreda for Year 1'
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
        categories: <?php echo $wor; ?>,
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
        name: 'Any STH',
        data: <?php echo $any; ?>
    }, {
        name: 'Hookworm',
        data: <?php echo $hk; ?>
    }, {
        name: 'Ascaris',
        data: <?php echo $kb; ?>
    }
    , {
        name: 'Trichuris',
        data: <?php echo $tr; ?>
    }
    , {
        name: 'haematuria',
        data: <?php echo $hm; ?>
    }
    , {
        name: 'POC-CCA PrevalenceTr+ve',
        data: <?php echo $mm; ?>
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
Highcharts.chart('container1', {
  chart: {
      type: 'spline'
  },
  title: {
      text: 'Trichuris'
  },
  subtitle: {
      text: ''
  },
    xAxis: {
        categories: <?php echo $woreda; ?>
    },
    yAxis: {
        title: {
            text: 'Percentage'
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
            [Date.UTC(1971, 0, 24), 2.62],
            [Date.UTC(1971, 1,  4), 2.5],

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
            [Date.UTC(1971, 5,  7), 0]
        ]
    }, {
        name: "Winter 2016-2017",
        data: [
            [Date.UTC(1970, 9, 15), 0],
            [Date.UTC(1970, 9, 31), 0.09],
            [Date.UTC(1970, 10,  7), 0.17],
            [Date.UTC(1970, 11, 28), 0.37],
            [Date.UTC(1971, 0, 22), 0.4],
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
    var areaChartCanvas = $('#barChart').get(0).getContext('2d')

        text: 'Trichuris'

    var areaChartData = {
      labels  : <?php echo $p; ?>,
      datasets: [
        {
          Text            : 'bolosso bombe kebeles',
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
