
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
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title"> Prevalence and intensity of intestinal parasite infection by Sex and Age group  </h3>

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
                    <canvas id="ageChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              </div>
          <!-- /.card -->


          <div class="card card-primary">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"> Prevalence % of STH infection over time by site (Any STH) </h3>

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


              <!-- /.card-body -->




            <!-- STACKED BAR CHART -->

              <div class="card card-primary">
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title"> Prevalence and intensity of intestinal parasite infection by kebele
                    </h3>

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
                      <canvas id="ramaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                </div>
                <div class="card card-primary">
                  <div class="card card-success">
                    <div class="card-header">
                      <h3 class="card-title"> Mean (sd) number of eggs per gram for STH and S.mansoni by woredas</h3>

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
                        <canvas id="newChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
          $result = $db->prepare("SELECT distinct(Woreda_name) FROM woredas, mean_sthand_sm_woredas where woredas.Woreda_id=mean_sthand_sm_woredas.Woreda_id order by mean_sthand_sm_woredas.id asc;");
          $result->execute();
          $data1899 = array();
          $jsond=[];
          for($i=0; $row = $result->fetch(); $i++){
            $data1899 = $row['Woreda_name'];
        $jsond[]=$data1899;
        }
        ?>
        <?php $ppaa= json_encode($jsond); ?>
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
              $result = $db->prepare("SELECT distinct(kebele_name) FROM kebeles, prevalence_intensity_ips where kebeles.Kebele_id=prevalence_intensity_ips.Kebele_id order by prevalence_intensity_ips.id asc;");
              $result->execute();
              $data1889 = array();
              $jsond=[];
              for($i=0; $row = $result->fetch(); $i++){
                $data1889 = $row['kebele_name'];
            $jsond[]=$data1889;
            }
            ?>
            <?php $ppa= json_encode($jsond); ?>
            <?php
                  include('conn.php');
                  $result = $db->prepare("SELECT distinct(age_group) FROM age_sses, prevalence_intestinal_parasites where age_sses.Age_id=prevalence_intestinal_parasites.Age_id order by prevalence_intestinal_parasites.id asc;");
                  $result->execute();
                  $data19 = array();
                  $jsond=[];
                  for($i=0; $row = $result->fetch(); $i++){
                    $data19 = $row['age_group'];
                $jsond[]=$data19;
                }
                ?>
                <?php $ppad= json_encode($jsond); ?>
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
                              $result = $db->prepare("SELECT no_indiv_infected FROM intensities, prevalence_intestinal_parasites where prevalence_intestinal_parasites.I_id=intensities.I_id and prevalence_intestinal_parasites.I_id=1;");
                              $result->execute();
                              $datavv= array();
                              $datavva = array();
                              $datavvb = array();
                              $jsonb=[];
                              for($i=0; $row = $result->fetch(); $i++){
                                $datavv = "S.mansoni";
                                  $datavva = $row['no_indiv_infected'];

                            $jsonb[]=$datavva;
                            }
                            ?>
                            <?php $albavv= json_encode($jsonb); ?>
                            <?php
                                  include('conn.php');
                                  $result = $db->prepare("SELECT no_indiv_infected FROM intensities, prevalence_intestinal_parasites where prevalence_intestinal_parasites.I_id=intensities.I_id and prevalence_intestinal_parasites.I_id=2;");
                                  $result->execute();
                                  $datavb= array();
                                  $datavba = array();
                                  $datavbb = array();
                                  $jsonb=[];
                                  for($i=0; $row = $result->fetch(); $i++){
                                    $datavb = "hookworm";
                                      $datavba = $row['no_indiv_infected'];

                                $jsonb[]=$datavba;
                                }
                                ?>
                                <?php $albavb= json_encode($jsonb); ?>
                                <?php
                                      include('conn.php');
                                      $result = $db->prepare("SELECT no_indiv_infected FROM intensities, prevalence_intestinal_parasites where prevalence_intestinal_parasites.I_id=intensities.I_id and prevalence_intestinal_parasites.I_id=3;");
                                      $result->execute();
                                      $datavbb= array();
                                      $datavbba = array();
                                      $datavbbb = array();
                                      $jsonb=[];
                                      for($i=0; $row = $result->fetch(); $i++){
                                        $datavbb = "trichuris";
                                          $databba = $row['no_indiv_infected'];

                                    $jsonb[]=$databba;
                                    }
                                    ?>
                                    <?php $albavbb= json_encode($jsonb); ?>
                                    <?php
                                          include('conn.php');
                                          $result = $db->prepare("SELECT no_indiv_infected FROM intensities, prevalence_intestinal_parasites where prevalence_intestinal_parasites.I_id=intensities.I_id and prevalence_intestinal_parasites.I_id=4;");
                                          $result->execute();
                                          $datavvn= array();
                                          $datavvna = array();
                                          $datavvn = array();
                                          $jsonb=[];
                                          for($i=0; $row = $result->fetch(); $i++){
                                            $datavvn = "Ascaris";
                                              $datavvna = $row['no_indiv_infected'];

                                        $jsonb[]=$datavvna;
                                        }
                                        ?>
                                        <?php $albavvn= json_encode($jsonb); ?>
                        <?php
                              include('conn.php');
                              $result = $db->prepare("SELECT no_individual_infected FROM intensities, mean_sthand_sm_woredas where mean_sthand_sm_woredas.I_id=intensities.I_id and mean_sthand_sm_woredas.I_id=1;");
                              $result->execute();
                              $dataggg= array();
                              $dataggaa = array();
                              $dataggbb = array();
                              $jsonb=[];
                              for($i=0; $row = $result->fetch(); $i++){
                                $dataggg = "S.mansoni";
                                  $dataggaa = $row['no_individual_infected'];

                            $jsonb[]=$dataggaa;
                            }
                            ?>
                            <?php $albacc= json_encode($jsonb); ?>
                            <?php
                                  include('conn.php');
                                  $result = $db->prepare("SELECT no_individual_infected FROM intensities, mean_sthand_sm_woredas where mean_sthand_sm_woredas.I_id=intensities.I_id and mean_sthand_sm_woredas.I_id=2;");
                                  $result->execute();
                                  $datagg9 = array();
                                  $dataccc = array();
                                  $datattc = array();
                                  $json=[];
                                  for($i=0; $row = $result->fetch(); $i++){
                                    $datagg9 = "hookworm";
                                      $dataccc = $row['no_individual_infected'];

                                $json[]=$dataccc;
                                }
                                ?>
                                <?php $abbattc= json_encode($json); ?>
                                <?php
                                      include('conn.php');
                                      $result = $db->prepare("SELECT no_individual_infected FROM intensities, mean_sthand_sm_woredas where mean_sthand_sm_woredas.I_id=intensities.I_id and mean_sthand_sm_woredas.I_id=3;");
                                      $result->execute();
                                      $datagad = array();
                                      $datattt4 = array();
                                      $datattbb = array();
                                      $json=[];
                                      for($i=0; $row = $result->fetch(); $i++){
                                        $datagad = "trichuris";
                                          $datattt4 = $row['no_individual_infected'];

                                    $json[]=$datattt4;
                                    }
                                    ?>
                                    <?php $abbat5= json_encode($json); ?>
                                    <?php
                                          include('conn.php');
                                          $result = $db->prepare("SELECT no_individual_infected FROM intensities, mean_sthand_sm_woredas where mean_sthand_sm_woredas.I_id=intensities.I_id and mean_sthand_sm_woredas.I_id=4;");
                                          $result->execute();
                                          $datagadda = array();
                                          $datattt55 = array();
                                          $datattbb = array();
                                          $json=[];
                                          for($i=0; $row = $result->fetch(); $i++){
                                            $datagadda = "Ascaris";
                                              $datattt55 = $row['no_individual_infected'];

                                        $json[]=$datattt55;
                                        }
                                        ?>
                                        <?php $abbat55= json_encode($json); ?>
                        <?php
                              include('conn.php');
                              $result = $db->prepare("SELECT no_individual_infected FROM intensities, prevalence_intensity_ips where prevalence_intensity_ips.I_id=intensities.I_id and prevalence_intensity_ips.I_id=1;");
                              $result->execute();
                              $datattt = array();
                              $datattaa = array();
                              $datattbb = array();
                              $jsonb=[];
                              for($i=0; $row = $result->fetch(); $i++){
                                $data1999 = "S.mansoni";
                                  $datattaa = $row['no_individual_infected'];

                            $jsonb[]=$datattaa;
                            }
                            ?>

                            <?php $albatt= json_encode($jsonb); ?>
                            <?php
                                  include('conn.php');
                                  $result = $db->prepare("SELECT no_individual_infected FROM intensities, prevalence_intensity_ips where prevalence_intensity_ips.I_id=intensities.I_id and prevalence_intensity_ips.I_id=2;");
                                  $result->execute();
                                  $datatt99 = array();
                                  $datatttt = array();
                                  $datattbb = array();
                                  $json=[];
                                  for($i=0; $row = $result->fetch(); $i++){
                                    $datatt9 = "hookworm";
                                      $datatttt = $row['no_individual_infected'];

                                $json[]=$datatttt;
                                }
                                ?>
                                <?php $abbatt= json_encode($json); ?>
                                <?php
                                      include('conn.php');
                                      $result = $db->prepare("SELECT no_individual_infected FROM intensities, prevalence_intensity_ips where prevalence_intensity_ips.I_id=intensities.I_id and prevalence_intensity_ips.I_id=3;");
                                      $result->execute();
                                      $datagad = array();
                                      $datattt4 = array();
                                      $datattbb = array();
                                      $json=[];
                                      for($i=0; $row = $result->fetch(); $i++){
                                        $datagad = "trichuris";
                                          $datattt4 = $row['no_individual_infected'];

                                    $json[]=$datattt4;
                                    }
                                    ?>
                                    <?php $abbat4= json_encode($json); ?>
                                    <?php
                                          include('conn.php');
                                          $result = $db->prepare("SELECT no_individual_infected FROM intensities, prevalence_intensity_ips where prevalence_intensity_ips.I_id=intensities.I_id and prevalence_intensity_ips.I_id=4;");
                                          $result->execute();
                                          $datagadda = array();
                                          $datattt44 = array();
                                          $datattbb = array();
                                          $json=[];
                                          for($i=0; $row = $result->fetch(); $i++){
                                            $datagadda = "Ascaris";
                                              $datattt44 = $row['no_individual_infected'];

                                        $json[]=$datattt44;
                                        }
                                        ?>
                                        <?php $abbat44= json_encode($json); ?>
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
      labels  : <?php echo $ppa; ?>,
      datasets: [
        {
          label               : '<?php echo $data199; ?>',
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
          label               : '<?php echo $datatt9; ?>',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(210,220,220,1)',
          data                : <?php echo $abbatt; ?>
        },
        {
          label               : '<?php echo $datagad; ?>',
          backgroundColor     : 'rgba(211,220,20,9)',
          borderColor         : 'rgba(211,220,20,9)',
          pointRadius          : false,
          pointColor          : '#3b91ba',
          pointStrokeColor    : 'rgba(211,220,20,9)',
          pointHighlightFill  : '#fbb',
          pointHighlightStroke: 'rgba(211,220,20,9)',
          data                : <?php echo $abbat4; ?>
        },
        {
          label               : '<?php echo $datagadda; ?>',
          backgroundColor     : 'rgba(41,02,18,8.1)',
          borderColor         : 'rgba(41,02,18,8.1)',
          pointRadius          : false,
          pointColor          : '#3bbba',
          pointStrokeColor    : 'rgba(41,02,18,8.1)',
          pointHighlightFill  : '#fbbf',
          pointHighlightStroke: 'rgba(41,02,18,8.1)',
          data                : <?php echo $abbat44; ?>
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
    var newData = {
      labels  : <?php echo $ppaa; ?>,
      datasets: [
        {
          label               : '<?php echo $datagg9; ?>',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : <?php echo $albacc; ?>
        },
        {
          label               : '<?php echo $datagg9; ?>',
          backgroundColor     : 'rgba(211,220,20,9)',
          borderColor         : 'rgba(211,220,20,9)',
          pointRadius         : false,
          pointColor          : 'rgba(211,220,20,9)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(211,220,20,9)',
          data                : <?php echo $abbattc; ?>
        },
        {
          label               : '<?php echo $datagad; ?>',
          backgroundColor     : 'rgba(110, 31, 222, 2)',
          borderColor         : 'rgba(110, 31, 222, 2)',
          pointRadius         : false,
          pointColor          : 'rgba(110, 31, 222, 2)',
          pointStrokeColor    : '#c1yyd1',
          pointHighlightFill  : '#fffuu',
          pointHighlightStroke: 'rgba(110, 31, 222, 2)',
          data                : <?php echo $abbat5; ?>
        },
        {
          label               : '<?php echo $datagadda; ?>',
          backgroundColor     : 'rgba(10, 14, 22, 1)',
          borderColor         : 'rgba(10, 14, 22, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(10, 14, 22, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fffhh',
          pointHighlightStroke: 'rgba(20,20,20,1)',
          data                : <?php echo $abbat55; ?>
        },
      ]

    }
    var newOptions = {
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
    var ageData = {
      labels  : <?php echo $ppad; ?>,
      datasets: [
        {
          label               : '<?php echo $datavv; ?>',
          backgroundColor     : 'rgba(610,14,88,0.9)',
          borderColor         : 'rgba(610,14,88,0.8)',
          pointRadius          : false,
          pointColor          : '#3bccba',
          pointStrokeColor    : 'rgba(610,14,88,1)',
          pointHighlightFill  : '#bbbcf',
          pointHighlightStroke: 'rgba(610,14,88,1)',
          data                : <?php echo $albavv; ?>
        },
        {
          label               : '<?php echo $datavb; ?>',
          backgroundColor     : 'rgba(211,220,20,9)',
          borderColor         : 'rgba(211,220,20,9)',
          pointRadius         : false,
          pointColor          : 'rgba(211,220,20,9)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(211,220,20,9)',
          data                : <?php echo $albavb; ?>
        },
        {
          label               : '<?php echo $datavbb; ?>',
          backgroundColor     : 'rgba(110, 31, 222, 2)',
          borderColor         : 'rgba(110, 31, 222, 2)',
          pointRadius         : false,
          pointColor          : 'rgba(110, 31, 222, 2)',
          pointStrokeColor    : '#c1yyd1',
          pointHighlightFill  : '#fffuu',
          pointHighlightStroke: 'rgba(110, 31, 222, 2)',
          data                : <?php echo $albavbb; ?>
        },
        {
          label               : '<?php echo $datavvn; ?>',
          backgroundColor     : 'rgba(10, 14, 22, 1)',
          borderColor         : 'rgba(10, 14, 22, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(10, 14, 22, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fffhh',
          pointHighlightStroke: 'rgba(20,20,20,1)',
          data                : <?php echo $albavvn; ?>
        },
      ]

    }
    var ageOptions = {
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


    var lineChartCanvas = $('#ramaChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, ramaData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false;
      responsive      : true

    var lineChart = new Chart(lineChartCanvas, {

      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })
    var lineChartCanvas = $('#newChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, newData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    var lineChartCanvas = $('#ageChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, ageData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
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
    //-----


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
