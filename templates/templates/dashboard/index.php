
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>ETHIOPIAN PUBLIC HEALTH INSITITUTE SURVEY SYSTEM </title>
		 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Londrina+Outline&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">
<style>
#loader {

  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid rgb(49, 81, 84,0.99);
  border-radius: 50%;
  border-top: 16px solid rgb(49, 181, 84,0.99);
  border-right: 16px solid rgb(149, 181, 84,0.99);
  border-bottom: 16px solid rgb(49, 181, 184,0.99);
  box-shadow: inset 2px 2px 10px rgba(0, 0, 0, 0.4);

  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;

}


@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-50px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-50px; opacity:0 }
  to{ bottom:0; opacity:1 }
}
text.shadow {
	font-family: 'Roboto Slab', serif;
}
#Top {
  display: none;
  position: fixed;
  bottom: 60px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: rgb(49, 181, 84,0.75);
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}


#chartdiv {
  max-width: 100%;
  height: 800px;
  background-color: rgb(30,95,130,0.85);
}

#observablehq-f684d1cb{
  float: left;

  width: 50%;

  }
#observablehq-2e815726{
  float: right;

  width: 50%;

}
/*#observablehq-195b4500{
  display: none;
  float: right;
  margin: 5px;
  width: 50%;
  height: 500px;
}
#observablehq-de3b6cd1{
  display: none;
  float: right;
  margin: 5px;
  width: 50%;
  height: 500px;
}*/
.switch {
  position: relative;
  display: inline-block;
  width: 49px;
  height: 23px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}



.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #5555fa;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 2px;
  bottom: 1.7px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #e39400;
}

input:focus + .slider {
  box-shadow: 0 0 1px #e39400;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
        <style type="text/css">
#container_post, #loader1, #container_ethiopia, #container_model, #container_model_co, #container_model_ho, #container_model_cr, #container_model_de, #container_model_in, #container_model_co_in, #container_model_ho_in, #container_model_cr_in, #container_model_de_in, #container_model_in1, #container_model_co_in1, #container_model_ho_in1, #container_model_cr_in1, #container_model_de_in1, #chart_death, #chart_case, #container_sd_aa,  #container_sex,#container_age, #container_fatality_africa, #container_sym, #container_real_death_sero, #container_real_case_sero, #container_com, #container_com_age,  #container_hh_aa,  #container_rh_aa, #container_sd, #container_kenya, #container_rwanda, #container_mozamique,#container_malawi, #container_zambia, #container_case_fatality, #container_post_africa, #container1, #container2, #container3 {
    height: 500px;
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



#dd {
    margin-top: 20px;
}

.navbar a:hover{
    background: rgb(10, 81, 124,0.85);
    color: white;
}

.navbar .navbar-nav .nav-link.active {
  background-color:  rgb(0, 171, 84);

}

.navbar a:hover{
    background: rgb(10, 81, 124,0.85);
    color: white;
}




.card-body .nav .nav-item .nav-link.active {
  background-color:  rgb(0, 171, 84, 0.25);

}


.dropdown-menu {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.nav-item:hover .dropdown-menu {
  display: block;
}

.buttons {
  min-width: 310px;
  text-align: center;
  margin-bottom: 1.5rem;
  margin-top: 5px;
  font-size: 0;
}

.buttons button {
  cursor: pointer;
  border: 1px solid silver;
  border-right-width: 1;
  background-color: #f8f8f8;
  font-size: 1.2rem;
  padding: 2px;
  outline: none;
  transition-duration: 0.3s;
}

.buttons button:first-child {
  border-top-left-radius: 0.3em;
  border-bottom-left-radius: 0.3em;
}

@media screen and (max-width: 600px) {
  .navbar h5 {
    display: none;
  }
  .navbar .navbar-brand {
    display: none;
  }
  #to_hide {
	  display: none;
  }
  #to_show {
	  width: 100%;
  }
}

.buttons button:last-child {
  border-top-right-radius: 0.3em;
  border-bottom-right-radius: 0.3em;
  border-right-width: 1px;
}

.buttons button:hover {
  color: white;
  background-color: rgb(158, 159, 163);
  outline: none;
}

.buttons button.active {
  background-color: #0051B4;
  color: white;
}

.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}

.btn-group button:hover, .dropdown-menu a:hover{
    background: rgb(10, 81, 124,0.85);

    color: white;
}

.dropdown-toggle::after {
    display: none;
}

.carousel.carousel-fade .carousel-item {
    display: block;
    opacity: 0;
    transition: opacity ease-out 1s;
}

.carousel.carousel-fade .carousel-item.active {
    opacity: 1 !important;
}



        </style>

<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">



  </script>

<!-- Bootstrap CDN -->
  <meta name="viewport" content="width=device-width, initial-scale=1">




  <script src="https://kit.fontawesome.com/655f728102.js" crossorigin="anonymous"></script>



<script type="text/javascript">
      $(document).ready(function () {
        VizHub.init({
          title: "Health-related SDGs",
          shortener: "//ihmeuw.org/shorten.php",
          components: ["visualizations","share","help","download"],
          language: "41",
          languages: []        });
      });
    </script>


<link type='image/png' rel='icon' href='../../../template/resources/logo.jpg' />
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/streamgraph.js"></script>
<script src="https://code.highcharts.com/modules/annotations.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async
          src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js">
  </script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

</head>

</head>
<body>

     <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgb(49, 181, 84,0.85); color: white; padding-top: 0px; padding-bottom: 0px">
        <a href="#" class="navbar-brand"><img src="ephi.png" class="rounded" style="width: 40px; height: 40px" /></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
              <h5 style="font-family: 'Roboto Slab', serif;"> ETHIOPIAN PUBLIC HEALTH INSITITUTE SURVEY SYSTEM </h5>
            </div>



             <div class="navbar-nav">
              <a href="../../index.php" class="nav-item nav-link " style="color: white">Home</a>
               <a href="https://ephi.gov.et/" class="nav-item nav-link" style="color: white" target="_blank"s>EPHI</a>
                <a href="http://ndmc-ephi.rackmintsys.com/s" class="nav-item nav-link" style="color: white" target="_blank">NDMC</a>

                <a href="https://rtds.ephi.gov.et/public/" class="nav-item nav-link" style="color: white" target="_blank">RTDS</a>

                <a href="https://viz.ndmc.ephi.gov.et:8060/" class="nav-item nav-link" style="color: white" target="_blank">Vizhub</a>


            </div>
        </div>

    </nav>

<div id="carousel-fade" class="carousel carousel-fade" data-ride="carousel" data-interval="5000" style="margin-top: 25px">

  <ol class="carousel-indicators">
    <li data-target="#carousel-fade" data-slide-to="0"  class="active" style="background-color: rgb(49, 181, 84); height: 13px;"></li>
    <li data-target="#carousel-fade" data-slide-to="1" style="background-color: rgb(49, 181, 84); height: 13px;"></li>
	   <li data-target="#carousel-fade" data-slide-to="2"  class="active" style="background-color: rgb(49, 181, 84); height: 13px;"></li>
    <li data-target="#carousel-fade" data-slide-to="3" style="background-color: rgb(49, 181, 84); height: 13px;"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="cov1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
        <h4 style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">Redcap</h4>

      </div>
    </div>
    <div class="carousel-item">
      <img src="cov2.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
        <h4 style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">DHIS2</h4>


      </div>
    </div>

	   <div class="carousel-item">
      <img src="cov3.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
        <h4 style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">CISPro</h4>


      </div>
    </div>

	   <div class="carousel-item">
      <img src="cov4.jpg" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
        <h4 style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">ODK</h4>


      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-fade" role="button" data-slide="prev" >
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
    <span class="sr-only" >Previous</span>
  </a>


</div>
<div id="wrapper" class="viz-hub">

<div id="page" class="page">

<div class="container-fluid" id='dd' >







<div class = "row" style="margin-top: 25px; margin-bottom: 15px">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85);">
   <div class="card-body " >



	   <div class="row row-cols-1 row-cols-md-4 g-4">
  <div class="col">
    <div class="card h-100">
      <img
        src="043.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">REDCap </h5>
        <p class="card-text">
          REDCap is a secure web application for building and managing online surveys and databases. While REDCap can be used to collect virtually any type of data in any environment (including compliance with 21 CFR Part 11, FISMA, HIPAA, and GDPR), it is specifically geared to support online and offline data capture for research studies and operations. The REDCap Consortium, a vast support network of collaborators, is composed of thousands of active institutional partners in over one hundred countries who utilize and support their own individual REDCap systems.
        </p>
      </div>
      <div class="card-footer">

                   <div class="nav-item dropdown" style="z-index:2; position: relative">
                    <a href="#" class="nav-link dropdown-toggle active"  data-toggle="dropdown" >Title of the study/research/project </a>
                    <div class="dropdown-menu" >
                        <a href="https://cbs.ephi.gov.et/redcap/" class="dropdown-item" target="_blank">NEW HIV Case Reporting <br> Surveillance in Ethiopia </a>
                        <a href="https://cbs.ephi.gov.et/redcap/" class="dropdown-item" target="_blank">National Malaria Sentinel <br>  Surveillance site </a>
                        <a href="https://cbs.ephi.gov.et/redcap/" class="dropdown-item" target="_blank">SARS_COVID19_Survey</a>
						  <a href="https://cbs.ephi.gov.et/redcap/" class="dropdown-item" target="_blank">CPT-ETs</a>
						</div>



            </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img
        src="044.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">DHIS 2</h5>
        <p class="card-text">
         The District Health Information Software is used in more than 60 countries around the world. DHIS is an open source software platform for reporting, analysis and dissemination of data for all health programs, developed by the Health Information Systems Programme.
        </p>
      </div>
      <div class="card-footer">

          <div class="nav-item dropdown" style="z-index:2; position: relative">
                    <a href="#" class="nav-link dropdown-toggle active"  data-toggle="dropdown" >Title of the study/research/project </a>
                    <div class="dropdown-menu" >
                        <a href="#from_top1" class="dropdown-item">NEW HIV Case Reporting <br> Surveillance in Ethiopia </a>
                        <a href="#from_top" class="dropdown-item">National Malaria Sentinel <br>  Surveillance site </a>
                        <a href="#modelling" class="dropdown-item">SARS_COVID19_Survey</a>
						  <a href="#modelling" class="dropdown-item">CPT-ETs</a>
						</div>

      </div>
		</div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img
        src="045.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This card has even longer content than the first to show
          that equal height action.
        </p>
      </div>
      <div class="card-footer">
          <div class="nav-item dropdown" style="z-index:2; position: relative">
                    <a href="#" class="nav-link dropdown-toggle active"  data-toggle="dropdown" >Title of the study/research/project </a>
                    <div class="dropdown-menu" >
                        <a href="#from_top1" class="dropdown-item">NEW HIV Case Reporting <br> Surveillance in Ethiopia </a>
                        <a href="#from_top" class="dropdown-item">National Malaria Sentinel <br>  Surveillance site </a>
                        <a href="#modelling" class="dropdown-item">SARS_COVID19_Survey</a>
						  <a href="#modelling" class="dropdown-item">CPT-ETs</a>
						</div>


		</div>
      </div>
    </div>
  </div>

		   <div class="col">
    <div class="card h-100">
      <img
        src="046.jpg"
        class="card-img-top"
        alt="..."
      />
      <div class="card-body">
        <h5 class="card-title">Open Data Kit (ODK)</h5>
        <p class="card-text">
           Open Data Kit (ODK) is a free, open-source suite of tools that allows data collection using Android mobile devices and data submission to an online server, even without an Internet connection or mobile carrier service at the time of data collection.
        </p>
      </div>
      <div class="card-footer">
           <div class="nav-item dropdown" style="z-index:2; position: relative">
                    <a href="#" class="nav-link dropdown-toggle active"  data-toggle="dropdown" >Title of the study/research/project </a>
                    <div class="dropdown-menu" >
                        <a href="#from_top1" class="dropdown-item">NEW HIV Case Reporting <br> Surveillance in Ethiopia </a>
                        <a href="#from_top" class="dropdown-item">National Malaria Sentinel <br>  Surveillance site </a>
                        <a href="#modelling" class="dropdown-item">SARS_COVID19_Survey</a>
						  <a href="#modelling" class="dropdown-item">CPT-ETs</a>
						</div>


		</div>
      </div>
      </div>
    </div>
  </div>

</div>



		 </div>
	   </div>

</div>
</div>
</div>




<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>





</div>

<br>
<footer class="sticky-footer" style="background-color: rgb(70, 171, 84,0.85);">
        <div class="container my-auto" >
          <div class="copyright text-center my-auto">

            <h5 class="m-0 font-weight-bold text-primary" ><span>
<a href="#" target="_blank" style="color: white">
National Data Management Center for Health
</a>
</span></h5>

            <span style="color: white">Copyright &copy; EPHI/NDMC 2020</span>
          </div>
        </div>
      </footer>
	  <script>
$('.d-flex').tooltip({
  selector: "button[rel=tooltip]"
})
</script>


</body>
</html>
