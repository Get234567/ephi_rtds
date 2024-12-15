<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Geshiaro | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- flag-icon-css -->
  <link rel="stylesheet" href="/plugins/flag-icon-css/css/flag-icon.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">

  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-fff888 navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="javascript:" data-toggle="dropdown">Dashboard
          <i class="flag-icon"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="mda.php" class="dropdown-item">
            <i class="flag-icon mr-2"></i> MDA Dashborad
          </a>

          <a href="wash.php" class="dropdown-item active">
            <i class="flag-icon mr-2"></i> WaSH Dashboard
          </a>
          <a href="ss.php" class="dropdown-item">
            <i class="flag-icon mr-2"></i> SS Dashboard
          </a>
          <a href="odf.php" class="dropdown-item">
            <i class="flag-icon mr-2"></i> ODF Dashboard
          </a>
          <a href="index.php" class="dropdown-item">
            <i class="flag-icon mr-2"></i> Home
          </a>
        </div>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="washreport.php" class="nav-link">Reports</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">About project</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Partners.php" class="nav-link">Partners</a>
      </li>


    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Water, Sanitation and Hygiene Dashboard </h1>

            <header id="header" class="header navbar-fixed-top">
                    <div class="container">
                        <h1 class="logo">
                            <a href="#"><span class="text"><h5>Choose year</h5></span></a>
                        </h1><!--//logo-->
                        <nav class="main-nav navbar-right" role="navigation">


                                <ul class="nav navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Year 1 <i class="fa fa-angle-down">choose woreda</i></a>
                                        <ul class="dropdown-menu">

                                              <li class="nav-item dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot Sore<i class="fa fa-angle-down"></i></a>

                                                  <ul class="dropdown-menu">
                                                    <li><a href="washyh.php">House hold</a></li>
                                                      <li><a href="washys.php">Schools</a></li>
                                                        <li><a href="washyf.php">Health facility</a></li>
                                                  </ul>
                                              </li>

                                            <li class="nav-item dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot Gale<i class="fa fa-angle-down"></i></a>

                                                <ul class="dropdown-menu">
                                                  <li><a href="washyh.php">House hold</a></li>
                                                    <li><a href="washys.php">Schools</a></li>
                                                      <li><a href="washyf.php">Health facility</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Abela Abaya<i class="fa fa-angle-down"></i></a>

                                                <ul class="dropdown-menu">
                                                  <li><a href="washyh.php">House hold</a></li>
                                                    <li><a href="washys.php">Schools</a></li>
                                                      <li><a href="washyf.php">Health facility</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot woyide<i class="fa fa-angle-down"></i></a>

                                                <ul class="dropdown-menu">
                                                  <li><a href="washyh.php">House hold</a></li>
                                                    <li><a href="washys.php">Schools</a></li>
                                                      <li><a href="washyf.php">Health facility</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot pulasa<i class="fa fa-angle-down"></i></a>

                                                <ul class="dropdown-menu">
                                                  <li><a href="washyh.php">House hold</a></li>
                                                    <li><a href="washys.php">Schools</a></li>
                                                      <li><a href="washyf.php">Health facility</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropdown">
                                              <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot Sore<i class="fa fa-angle-down"></i></a>

                                                <ul class="dropdown-menu">
                                                  <li><a href="washyh.php">House hold</a></li>
                                                    <li><a href="washys.php">Schools</a></li>
                                                      <li><a href="washyf.php">Health facility</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li><!--//dropdown-->
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Year 2 <i class="fa fa-angle-down">choose woreda</i></a>
                                        <ul class="dropdown-menu">

                                                                                        <li class="nav-item dropdown">
                                                                                          <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot Sore<i class="fa fa-angle-down"></i></a>

                                                                                            <ul class="dropdown-menu">
                                                                                              <li><a href="washhh.php">House hold</a></li>
                                                                                                <li><a href="washss.php">Schools</a></li>
                                                                                                  <li><a href="washff.php">Health facility</a></li>
                                                                                            </ul>
                                                                                        </li>

                                                                                      <li class="nav-item dropdown">
                                                                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot Gale<i class="fa fa-angle-down"></i></a>

                                                                                          <ul class="dropdown-menu">
                                                                                            <li><a href="washhh.php">House hold</a></li>
                                                                                              <li><a href="washss.php">Schools</a></li>
                                                                                                <li><a href="washff.php">Health facility</a></li>
                                                                                          </ul>
                                                                                      </li>

                                                                                      <li class="nav-item dropdown">
                                                                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Abela Abaya<i class="fa fa-angle-down"></i></a>

                                                                                          <ul class="dropdown-menu">
                                                                                            <li><a href="washhh.php">House hold</a></li>
                                                                                              <li><a href="washss.php">Schools</a></li>
                                                                                                <li><a href="washff.php">Health facility</a></li>
                                                                                          </ul>
                                                                                      </li>

                                                                                      <li class="nav-item dropdown">
                                                                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot woyide<i class="fa fa-angle-down"></i></a>

                                                                                          <ul class="dropdown-menu">
                                                                                            <li><a href="washhh.php">House hold</a></li>
                                                                                              <li><a href="washss.php">Schools</a></li>
                                                                                                <li><a href="washff.php">Health facility</a></li>
                                                                                          </ul>
                                                                                      </li>

                                                                                      <li class="nav-item dropdown">
                                                                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot pulasa<i class="fa fa-angle-down"></i></a>

                                                                                          <ul class="dropdown-menu">
                                                                                            <li><a href="washhh.php">House hold</a></li>
                                                                                              <li><a href="washss.php">Schools</a></li>
                                                                                                <li><a href="washff.php">Health facility</a></li>
                                                                                          </ul>
                                                                                      </li>

                                                                                      <li class="nav-item dropdown">
                                                                                        <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Damot Sore<i class="fa fa-angle-down"></i></a>

                                                                                          <ul class="dropdown-menu">
                                                                                            <li><a href="washhh.php">House hold</a></li>
                                                                                              <li><a href="washss.php">Schools</a></li>
                                                                                                <li><a href="washff.php">Health facility</a></li>
                                                                                          </ul>
                                                                                      </li>

                                                                                  </ul>
                                                                              </li><!--//dropdown-->
                                        </ul><!--//nav-->
                            </div><!--//navabr-collapse-->
                        </nav><!--//main-nav-->

                </header><!--//header-->


          </div><!-- /.col -->
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">WaSH</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <div class="row">
          <div class="col-12">


            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <p>Baseline data on water, sanitation, and hygiene (WaSH) infrastructure and practices were collected in selected households, schools and health facilities with the aim of estimating the coverage of WaSH prior to the intervention. Overall data is presented from six woredas.  </p>
                    </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>

            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <!-- Main content -->

              <?php include("charts/bati5s2.php"); ?>




</body>
</html>
