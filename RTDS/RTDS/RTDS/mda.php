<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Ethiopian health data repository, RTDS, Ethiopia , Research tracking database system" />
    <meta name="keywords" content="Ethiopian health data repository, RTDS, Ethiopia , Research tracking database system"/>
    <meta name="author" content=""/>
  <title>Geshiaro | Dashboard</title>
  <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
   <!-- animation css -->
   <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
   <!-- vendor css -->
   <link rel="stylesheet" href="assets/css/style.css">
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
    <ul class="navbar-nav mr-auto">

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
          <a href="mda.php" class="dropdown-item active">
            <i class="flag-icon"></i> MDA Dashborad
          </a>

          <a href="wash.php" class="dropdown-item">
            <i class="flag-Ionicons mr-2"></i> WaSH Dashboard
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
        <a href="mdareport.php" class="nav-link">Reports</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="About.php" class="nav-link">About project</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Partners.php" class="nav-link">Partners</a>
      </li>


    </ul>
 <ul class="navbar-nav mr-auto">
   <li class="nav-item">
                 <div class="main-search">
                     <div class="input-group">
                         <input type="text" id="m-search" class="form-control" placeholder="Search . . .">

                        <button  class="input-group-append search-btn btn btn-primary">

                               <i class="fas fa-search"></i>
                         </span>
                     </div>
                 </div>
             </li>
    </ul>
    <!-- SEARCH FORM -->
  

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
            <h1 class="m-0 text-dark">Mass Drug Administration Dashboard </h1>


          </div><!-- /.col -->
          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">MDA</li>
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
                <p>The Geshiaro project aims to eliminate intestinal worms in Wolayita zone through drug treatment, with a goal of
    80-90 <sup style="font size: 20Px">%</sup>
                   treatment coverage, in combination with improved water, sanitation, and hygiene (WaSH).  </p>



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
    <?php include("charts/test.php"); ?>


</body>
</html>
