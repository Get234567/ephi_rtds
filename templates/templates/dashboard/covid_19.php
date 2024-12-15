
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
        <title>NBD | National Burden of Disease Platform</title>
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
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!-- Font Awesome -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
<!-- Google Fonts -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
<!-- Bootstrap core CSS -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- Material Design Bootstrap -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet"> -->

<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 --><!-- Bootstrap tooltips -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
 --><!-- Bootstrap core JavaScript -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
 --><!-- MDB core JavaScript -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script> -->

<!-- bootstrap CSS -->
<!-- Font Awesome -->
<!-- Font Awesome -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
<!-- Google Fonts -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"> -->
<!-- Bootstrap core CSS -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- Material Design Bootstrap -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet"> -->

<!-- end of bootstrap CDN --> 
  
  <script src="https://kit.fontawesome.com/655f728102.js" crossorigin="anonymous"></script>

 <!--  <script type="text/javascript" src="../../emplate/lib/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="../../template/lib/jquery.popover.js"></script> -->
<!-- <script type="text/javascript" src="../../template/lib/jquery.fileDownload.js"></script> -->

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
<!-- <link type='text/css' rel='stylesheet' href='../../template/css/normalize.css' />
<link type='text/css' rel='stylesheet' href='../../template/lib/font-awesome/css/font-awesome.css' />
<link type='text/css' rel='stylesheet' href='../../template/lib/fontello/css/fontello.css' />
<link type='text/css' rel='stylesheet' href='../../template/lib/jquery.popover.css' />
<link type='text/css' rel='stylesheet' href='../../template/css/viz-hub.css' />



<link type='image/png' rel='icon' href='../template/resources/logo.jpg' />
<link type='text/css' rel='stylesheet' href='../../template/css/normalize.css' />
<link type='text/css' rel='stylesheet' href='../../template/lib/font-awesome/css/font-awesome.css' />
<link type='text/css' rel='stylesheet' href='../../template/lib/fontello/css/fontello.css' />
<link type='text/css' rel='stylesheet' href='../../template/lib/jquery.popover.css' />
<link type='text/css' rel='stylesheet' href='../../template/css/viz-hub.css' /> -->
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
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

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
 <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

  
</head>

</head>
<body>
  
     <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgb(49, 181, 84,0.85); color: white; padding-top: 0px; padding-bottom: 0px">
        <a href="#" class="navbar-brand"><img src="../../../template/resources/logo.jpg" class="rounded" style="width: 40px; height: 40px" /></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
              <h5 style="font-family: 'Roboto Slab', serif;"> Covid-19 National and Sub-national Analysis Platform </h5>
            </div>
          
          
            
             <div class="navbar-nav">
              <a href="../../index.php" class="nav-item nav-link " style="color: white">Home</a>
              <div class="nav-item dropdown" style="z-index:2; position: relative">
                    <a href="#" class="nav-link dropdown-toggle active"  data-toggle="dropdown" style="color: white">Select View Method </a>
                    <div class="dropdown-menu" >
                        <a href="#from_top1" class="dropdown-item">Covid-19 National Level <br> Analaysis Output View </a>
                        <a href="#from_top" class="dropdown-item">Covid-19 Sub-national Level <br> Analaysis Output View</a>
                        <a href="#modelling" class="dropdown-item">Covid-19 Modelling and <br>Forecasting</a>
						</div>
                </div>
                <a href="https://ephi.gov.et/" class="nav-item nav-link" style="color: white">EPHI</a>
                <a href="#" class="nav-item nav-link" style="color: white">NDMC</a>
              
                <a href="https://covid19.healthdata.org/ethiopia" class="nav-item nav-link" style="color: white">IHME COVID-19 Projections</a>
               
                
            </div>
        </div>

    </nav>

<div id="carousel-fade" class="carousel carousel-fade" data-ride="carousel" data-interval="5000" style="margin-top: 25px">

  <ol class="carousel-indicators">
    <li data-target="#carousel-fade" data-slide-to="0"  class="active" style="background-color: rgb(49, 181, 84); height: 13px;"></li>
    <li data-target="#carousel-fade" data-slide-to="1" style="background-color: rgb(49, 181, 84); height: 13px;"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../../template/resources/nco5.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
        <h4 style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">National and East Africa Covid-19 Disease Nature Study</h4>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="../../../template/resources/sco5.png" class="d-block w-100"  alt="...">
      <div class="carousel-caption d-none d-md-block" style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
        <h4 style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">Sub-national Covid-19 Disease Nature Study</h4>
        

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
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">African Countries With the Highest Number of Confirmed Cases and Deaths.</h3> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#chart_case" style="color: white; font-family: 'Dosis', sans-serif;">Top 10 African Countries with Highest Cases</a></b></h5></li>
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#chart_death" style="color: white; font-family: 'Dosis', sans-serif;">Top 10 African Countries with Highest Deaths</a></b></h5></li>

</ul>
</div>
</div>
</div>
</div>


<div class="row " >

  <div id = "to_show" class="col-sm-4">
    <div class="card">
	
      <div class="card-body " >
	  <h3 class = "card-title" style="font-family: 'Roboto Slab', serif;">Top 10 African Countries with Highest Cases and Deaths</h3>
	  <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href = "https://github.com/owid/covid-19-data/tree/master/public/data">Our World in Data</a>, <a href="https://github.com/CSSEGISandData/COVID-19">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a> and <a href="https://www.who.int/data">World Health Organization (WHO)</a>
	  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> This visualization module collects daily commulative cases and deaths of all African countries from the indicated data
	  sources starting from April 10, 2020, and then select the top 10 for that day.</p>
	  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> At the beginning of the simulation Algeria had the highest number of deaths, despite having low number of cases compared to others.
	  Starting from the beginning of May, 2020 South Africa had the highest number of cases, but still Egypt had the highest death until the beginning of July, 2020. Eventough the number
	  of death after July in South Africa exceded that of Egypt, the case fatality of Egypt remained higher for quite some times.
	  <br>The Table below shows top 5 African countries with highest commulative cases as of December 16, 2020.
	  <div class="table-responsive">
	  <table class="table">
  <thead>
    <tr>
      <th scope="col">Number</th>
	  <th scope="col">Country</th>
      <th scope="col">Total Number of Cases</th>
      <th scope="col">Total Number of Deaths</th>
      <th scope="col">Case Fatality Rate in Percent</th>
	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>South Africa</td>
      <td>883,687</td>
      <td>23,827</td>
	  <td>2.7%</td>
    </tr>
	
	<tr>
      <th scope="row">2</th>
      <td>Morocco</td>
      <td>406,970</td>
      <td>6749</td>
	  <td>1.6%</td>
    </tr>
	
	<tr>
      <th scope="row">3</th>
      <td>Egypt</td>
      <td>123,153</td>
      <td>6990</td>
	  <td>5.7%</td>
    </tr>
	
	<tr>
      <th scope="row">4</th>
      <td>Ethiopia</td>
      <td>118,006</td>
      <td>1818</td>
	  <td>1.5%</td>
    </tr>
	<tr>
      <th scope="row">5</th>
      <td>Tunisia</td>
      <td>114,547</td>
      <td>3997</td>
	  <td>3.5%</td>
    </tr>
 
  </tbody>
</table>
</div>
Egypt has the highest case fatality rate. Eventhough case fatality for Ethiopia seemed the smallest, it is still considerably high compared to the remaining african countries. 

	  </p>

	 
	             </div>
	  <div class="card-footer">
	  
	  <h4><i class="fa fa-exclamation-circle" style="color: red;"></i> Caution</h4>
	  <p class="card-text"> Case and death Under-reporting is the major set back for understanding the true nature of case fatality in Africa. In addition to
the stated problem, sometimes when case fatality is presented as percent it can be misleading. For instance
	  the case fatality rate recorded in Gambia on April 11, 2020, was 25%; when there was one death out of four total confirmed cases.
	<hr>

</div>

  <style>
 button {
background-color: rgb(49, 191, 84,0.99);
  border: none;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 4px;
  font-size: 18px;
  margin-top: 10px;
  padding: 5px;
  opacity: 0.85;
  transition: 0.3s;
  margin-bottom: 10px;

	 
 }
 button:hover {opacity: 1;
 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
 }

.shadow {
	font-family: 'Bungee Outline', cursive;
}

 </style> 	  

    </div>
  </div>
  
 
  <div id = "to_hide" class="col-sm-8">
    <div class="card">
      <div class="card-body">
	<script type="module">
import {Runtime, Inspector} from "https://cdn.jsdelivr.net/npm/@observablehq/runtime@4/dist/runtime.js";
import define from "https://api.observablehq.com/@lateratesfaye/bar-chart-race-with-scrubber/2.js?v=3";
(new Runtime).module(define, name => {
  if (name === "viewof keyframe") return Inspector.into("#k")();
  if (name === "chart") return Inspector.into("#chart_case")();
  return ["update"].includes(name) || null;
});
</script>
<script type="module">
import {Runtime, Inspector} from "https://cdn.jsdelivr.net/npm/@observablehq/runtime@4/dist/runtime.js";
import define from "https://api.observablehq.com/@lateratesfaye/bar-chart-race-with-scrubber.js?v=3";
(new Runtime).module(define, name => {
  if (name === "viewof keyframe") return Inspector.into("#k1")();
  if (name === "chart") return Inspector.into("#chart_death")();
  return ["update"].includes(name) || null;
});
</script>

	    <div   id="k"; style="margin-top: 7px; margin-bottom: 5px; color: white">
		
		</div>
<div id="chart_case" style=' display: block'></div>
<div class="border border-success" style='margin-top:10px; margin-bottom:10px; height:5px; background-color: rgb(49, 181, 84,0.85)'></div>
<div   id="k1"; style="margin-top: 7px; margin-bottom: 5px; color:white"></div>
<div id="chart_death" style=' display: block'></div>
	   
      </div>
    </div>
  </div>



  
</div>

<div class = "row" style="margin-top: 25px; margin-bottom: 15px" id= "from_top1">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Comparing Case Progression and Death of Covid-19 in Ethiopia, Kenya, Rwanda, Mozambique and Malawi</h3> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_ethiopia" style="font-family: 'Dosis', sans-serif; color: white">Daily and Commulative Confirmed Cases and Deaths</a></b></h5></li>
<li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_post_africa" style="font-family: 'Dosis', sans-serif; color: white">Change in Positivity Rate</a></b></h5></li>
</ul>
<!--<div style="float: right; display:  display: inline-block; padding: 10px;  background-color: rgb(45, 45, 45,0.15)">
 <span style="color: rgb(255,250,240,0.85); font-size: 20px; font-weight: bold; ">Region View</span>
<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
<span style="color: rgb(255,250,240,0.85);font-size: 20px; font-weight: bold;">National View </span> 

	  <form>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check1"  onchange="cbChange(this, 'container_region')">
 <label class="form-check-label" for="check_region">Regional View</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check2"  onchange="cbChange(this, 'container_ethiopia')">
 <label class="form-check-label" for="check_national">National View</label>
</div>

<form>

</div>-->
</div>
</div>

</div>

</div>
<div class="row " >

  <div class="col-sm-4">
    <div class="card">
	
    <div class="card-body " >
	  <h3 class = "card-title" style="font-family: 'Roboto Slab', serif;">Daily and Comulative Confirmed Cases and Deaths</h3>
	  <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href = "https://github.com/owid/covid-19-data/tree/master/public/data">Our World in Data</a>, <a href="https://github.com/CSSEGISandData/COVID-19">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a> and <a href="https://www.who.int/data">World Health Organization (WHO)</a>
	  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Data were downloaded from the above repository and manually imported into EPHI/NDMC database system.
      Once the data are stored to local database system:<br><b><ul><li></b> Data on daily number of cases and deaths, and comulative cases and deaths was extracted for these five African countries, and presented in this module exactly as they are recorded on the source data.</li> <br><b><li></b> Just before visualization an external script checks if there are any inconsistencies in the data. For instance, if non-numeric characters and empty cells are found the script will handle them accordingly.
<a href="" data-toggle="modal" data-target="#exampleModalCenter">
  Read more
</a></li></ul></p>
	  
	  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: 'Roboto Slab', serif;">Handling Missing Value</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         Missing values were handled in two ways:<br><br><b><ul><li></b> If the number after missing values is large, distribute this number over the missing values. This is because in some cases reporting might not be given daily.</li> <br><b><li></b> If the number after missing values is small, all missing values will have the same value as this number.</li></ul></p>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
	 
	             </div>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
	  <div class="card-footer">
	  
	  <h4 style="font-family: 'Roboto Slab', serif;">Please select a country</h4>
	<hr>
	  <form>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check1"  onchange="cbChange(this, 'container_ethiopia')">
 <label class="form-check-label" for="check1">Ethiopia</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check2"  onchange="cbChange(this, 'container_kenya')">
 <label class="form-check-label" for="check2">Kenya</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check3"  onchange="cbChange(this, 'container_rwanda')">
 <label class="form-check-label" for="check3">Rwanda</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check4"  onchange="cbChange(this, 'container_mozamique')">
 <label class="form-check-label" for="check4">Mozambique</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check5"  onchange="cbChange(this, 'container_malawi')">
 <label class="form-check-label" for="check5">Malawi</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check6"  onchange="cbChange(this, 'container_zambia')">
 <label class="form-check-label" for="check6">Zambia</label>
</div>
<form>
</div>

	  

    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
	  
	  <script>
window.onload = onPageLoad();

function onPageLoad() {
document.getElementById('check1').checked = true;
document.getElementById('check2').checked = false;
document.getElementById('check3').checked = false;
document.getElementById('check4').checked = false;
document.getElementById('check5').checked = false;
document.getElementById('check6').checked = false;

	}	  

function cbChange(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == 'container_ethiopia'){
		document.getElementById('container_ethiopia').style.display = 'block';
		document.getElementById('container_kenya').style.display = 'none';
		document.getElementById('container_rwanda').style.display = 'none';
		document.getElementById('container_mozamique').style.display = 'none';
		document.getElementById('container_malawi').style.display = 'none';
		document.getElementById('container_zambia').style.display = 'none';
	}
		
	
    else if (id == "container_kenya"){
		document.getElementById('container_ethiopia').style.display = 'none';
		document.getElementById('container_kenya').style.display = 'block';
		document.getElementById('container_rwanda').style.display = 'none';
		document.getElementById('container_mozamique').style.display = 'none';
		document.getElementById('container_malawi').style.display = 'none';
	    document.getElementById('container_zambia').style.display = 'none';
	}
	else if (id == "container_rwanda"){
		document.getElementById('container_ethiopia').style.display = 'none';
		document.getElementById('container_kenya').style.display = 'none';
		document.getElementById('container_rwanda').style.display = 'block';
		document.getElementById('container_mozamique').style.display = 'none';
		document.getElementById('container_malawi').style.display = 'none';
		document.getElementById('container_zambia').style.display = 'none';
	}
	else if (id == "container_mozamique"){
		document.getElementById('container_ethiopia').style.display = 'none';
		document.getElementById('container_kenya').style.display = 'none';
		document.getElementById('container_rwanda').style.display = 'none';
		document.getElementById('container_mozamique').style.display = 'block';
		document.getElementById('container_malawi').style.display = 'none';
		document.getElementById('container_zambia').style.display = 'none';
	}
		
	else if (id == "container_malawi"){
		document.getElementById('container_ethiopia').style.display = 'none';
		document.getElementById('container_kenya').style.display = 'none';
		document.getElementById('container_rwanda').style.display = 'none';
		document.getElementById('container_mozamique').style.display = 'none';
		document.getElementById('container_malawi').style.display = 'block';
		document.getElementById('container_zambia').style.display = 'none';
	}
	else{
		document.getElementById('container_ethiopia').style.display = 'none';
		document.getElementById('container_kenya').style.display = 'none';
		document.getElementById('container_rwanda').style.display = 'none';
		document.getElementById('container_mozamique').style.display = 'none';
		document.getElementById('container_malawi').style.display = 'none';
		document.getElementById('container_zambia').style.display = 'block';
	}
	
}
	  </script>
	  
	    <div id="container_ethiopia" style="display: block"></div>
       <div id="container_kenya" style="display: none"></div>
	   <div id="container_rwanda" style="display: none"></div>
	   <div id="container_mozamique" style="display: none"></div>
	   <div id="container_malawi" style="display: none"></div>
	   <div id="container_zambia" style="display: none"></div>
      </div>
    </div>
  </div>

  

  
</div>
<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>
<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Change in Positivity Rate</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href = "https://github.com/owid/covid-19-data/tree/master/public/data">Our World in Data</a>, <a href="https://github.com/CSSEGISandData/COVID-19">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a> and <a href="https://www.who.int/data">World Health Organization (WHO)</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Positivity Rate is an informative representation of the outbreak size in relation to the number of tests.</p>
    <p>
  <b> DPR </b> = Daily Postivity Rate <br>
  \[DPR = {Number of confirmed(Nc) \over Number of tests(Nt)}\]
  
</p>




  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> End of November, 2020
   <b>Kenya</b> has the highest positivity rate almost <b>5 - 12</b> times compared to the rest. Rwanda have the smallest positivity rate compared to the rest. Malawi and Zambia have shown small decrease in Covid-19 case positivity in November compared to the preceding months.<br> In <b>Ethiopia</b> the posititvity rate has constantly increased from May, 2020 to October, 2020. However, from October to November the positivity rate has decreased by <b>8%</b>. But this does not mean that the prevalence is decreasing.
   There has been substantial inconsistence in test positivity rate in these five African countries. 
   </p>
  <!--   <p class="card-text">This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just descrip
</P> -->

   
               </div>

    

    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
      <div id="container_post_africa"></div>
       
      </div>
    </div>
  </div>

  

  
</div>


<div class = "row" style="margin-top: 25px; margin-bottom: 15px">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Case Fatality Rate in Ethiopia, Kenya, Rwanda, Mozambique, Malawi and Zambia</h3> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border"  style="margin-bottom: 5px"></div>
<ul class="fa-ul">
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_fatality_africa" style="font-family: 'Dosis', sans-serif; color: white">Case Fatality Comparison Over Time</a></b></h5></li>
<li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b> <a href="#container_com" style="font-family: 'Dosis', sans-serif; color: white">Case Fatality Rate and Different Comorbidities</a></b></h5></li>
</ul>
</div>
</div>
</div>
</div>


  <div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Case Fatality Comparison Over Time</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href = "https://github.com/owid/covid-19-data/tree/master/public/data">Our World in Data</a>, <a href="https://github.com/CSSEGISandData/COVID-19">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a> and <a href="https://www.who.int/data">World Health Organization (WHO)</a>
    <p class="card-text" ><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Case Fatality Rate is an informative representation for understanding the virus burden of death in relation to the number of cases.</p>
    <p>
  
  \[Fatality Rate (FR) = {Number of deaths(Nd) \over Number of cases(Nc)}\]
</p>

  <p class="card-text" ><b style="font-family: 'Roboto Slab', serif;">Results:</b> From mid Semptember to late November, 2020 all the six Sub-sahara African countries have shown almost constant case fatality rate. At end of November Malawi showed highest case fatality percent of 3.1%, from 6003 confirmed cases 185 deaths. However, Malawi has the smallest number of reported deaths compared to the rest. Since, the number of reported cases is also very small in Malawi case fatality rate seemed higher. In <b>Ethiopia</b> as of Novemeber 26, 2020 case fatality rate was <b>1.5%</b>.
  
  </p>
  <!--   <p class="card-text">This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just descrip
</P> -->

   
               </div>

    

    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
       <div id="container_fatality_africa"></div>
       
      </div>
    </div>
  </div>

  

  
</div>

<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>

<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Case Fatality Rate and Different Comorbidities</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b>  <a href = "https://github.com/owid/covid-19-data/tree/master/public/data">Our World in Data</a>, <a href="https://github.com/CSSEGISandData/COVID-19">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a> , <a href="https://www.who.int/data">World Health Organization (WHO)</a> and <a href="http://www.healthdata.org/gbd/data-visualizations">
Institute for Health Metrics and Evaluation, Global Burden of Diseases Study (GBD-2019) data</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Case fatality in relation to Comorbidities is presented for Ethiopia and selected Sub-sahara African
countries which are Kenya, Rwanda, Mozambique, Malawi and Zambia. The prevalence of <b>cardiovascular diseases and Diabetes</b> were taken from<a href="http://www.healthdata.org/gbd/data-visualizations"> IHME, (GBD-2019) </a>data and changed from per 100,000 representation to per 100 representation.

 </p>
   

  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> Ethiopia has the lowest prevalence of comorbidities, Diabetes (1.33 %) and CVD (3.29%). Kenya has the
highest CVD prevalence (4.12 %) and Malawi has the highest Diabetes Prevalence (2.04%).
In terms of Covid-19 case fatality, Rwanda has the smallest (0.3 % case fatality) and Malawi has the highest
(2.7 %), whereby Ethiopia stands in the middle as compared to the other Sub-sahara African Countries with
case fatality rate of 1.5%.
Covid-19 case fatality in <b>Ethiopia</b> is high considering its <b>lower comorbidity prevalence</b>. </p>
 </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
      <div id="container_com"></div>
       
      </div>
    </div>
  </div>

  

  
</div>

<div class = "row" style="margin-top: 25px; margin-bottom: 15px" id="from_top">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Rate of Change in Covid-19 Test Positivity Over-time in Ethiopia.</h3> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border"  style="margin-bottom: 5px"></div>
<ul class="fa-ul">
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_post" style="font-family: 'Dosis', sans-serif; color: white">Ethiopia Covid-19 Daily Tests, Cases and Positivity Rate</a></b></h5></li>

</ul>

<div style="float: right; display:  display: inline-block; padding: 10px;  background-color: rgb(45, 45, 45,0.15)">
 <span style="color: rgb(255,250,240,0.85); font-size: 20px; font-family: 'Dosis', sans-serif;">Region View</span>
<label class="switch">
  <input id = "toggle3" type="checkbox" checked onchange="cbChange_0_1(this, 'footer_region_0')">
  <span class="slider round"></span>
</label>
<span style="color: rgb(255,250,240,0.85);font-size: 20px; font-family: 'Dosis', sans-serif;">National View </span> 


</div>

<script>
window.onload = onPageLoad();

function onPageLoad() {
document.getElementById('toggle3').checked = true;

	}	  

function cbChange_0_1(obj, id) {
    if (obj.checked) {
		document.getElementById('footer_region_0').style.display = 'none';
		document.getElementById('p_na_0').style.display = 'block';
		document.getElementById('p_aa_0').style.display = 'none';
		document.getElementById('container_sym_aa_0').style.display = 'none';

document.getElementById('container_sym_or_0').style.display = 'none';
document.getElementById('container_sym_si_0').style.display = 'none';
document.getElementById('container_sym_so_0').style.display = 'none';
document.getElementById('container_sym_sn_0').style.display = 'none';
document.getElementById('container_sym_ti_0').style.display = 'none';
document.getElementById('container_sym_ga_0').style.display = 'none';
document.getElementById('container_sym_be_0').style.display = 'none';
document.getElementById('container_sym_am_0').style.display = 'none';
document.getElementById('container_sym_af_0').style.display = 'none';
document.getElementById('container_sym_ha_0').style.display = 'none';
document.getElementById('container_sym_di_0').style.display = 'none';
document.getElementById('div_0').style.display = 'none';
	}
	else {
		document.getElementById('footer_region_0').style.display = 'block';
		document.getElementById('p_na_0').style.display = 'none';
		document.getElementById('p_aa_0').style.display = 'block';
		document.getElementById('re_aa_0').checked = true;
document.getElementById('re_af_0').checked = false;
document.getElementById('re_am_0').checked = false;
document.getElementById('re_be_0').checked = false;
document.getElementById('re_di_0').checked = false;
document.getElementById('re_ga_0').checked = false;
document.getElementById('re_ha_0').checked = false;
document.getElementById('re_or_0').checked = false;
document.getElementById('re_si_0').checked = false;
document.getElementById('re_so_0').checked = false;
document.getElementById('re_sn_0').checked = false;
document.getElementById('re_ti_0').checked = false;
document.getElementById('container_sym_aa_0').style.display = 'block';
value1 = [3858,5122,4773,5857,7215,4781,5723,6665,5298,5906,6199,4428,6681,5947,5969,5261,4553,5674,4883,5230,4907,3971,4947,3652,4222,4099,4664,4522,4380,4006,4157,3490,2713,3039,3431,3479,4036,4600,3176,4507,3612,3449,3579,4028,4028,2285,2676,2605,2455,2468,2926,3100,3274,2318,3581,2854,2625,3121,2799,3131,3463,2659,2763,3246,3000,3134,3207,3461,3114,3321,3128,3578,3403,3369,3252,3236,2210,2559,2598,4133,3256,3091,2508,2567,2384,3047,3361,2365,5502,3137,2410,2451,2640,3528,3293,3321,3349,2824,2192,3659,3355,3786,3369,3157,3157,2605,3261,3720,3102,3544,3820,3260,3416,3100];
value2 = [1,2,3];
value3 = [0.07465007776,0.1194845763,0.1259166143,0.08912412498,0.1354123354,0.07801715122,0.1177704001,0.1072768192,0.1264628162,0.1415509651,0.1642200355,0.1370822042,0.1448884897,0.1145115184,0.16083096,0.1433187607,0.1656050955,0.1781811773,0.1742781077,0.1323135755,0.1098430813,0.140518761,0.1016777845,0.07064622125,0.1293225959,0.07904366919,0.08683533448,0.06678460858,0.06894977169,0.09860209685,0.09165263411,0.09742120344,0.07556210837,0.05988812109,0.0649956281,0.1040528888,0.08077304262,0.08608695652,0.1067380353,0.05502551586,0.08665559247,0.08466222093,0.07208717519,0.08440913605,0.0777060576,0.09671772429,0.08445440957,0.103646833,0.08309572301,0.04457050243,0.1315789474,0.18,0.01863164325,0.09016393443,0.07930745602,0.08163980378,0.09942857143,0.1038128805,0.1128974634,0.1293516448,0.08807392434,0.1372696502,0.1444082519,0.09057301294,0.1026666667,0.06285896618,0.08138447147,0.07541173071,0.07642903019,0.06925624812,0.09079283887,0.09754052543,0.07170143991,0.08162659543,0.08794587946,0.06551297899,0.09502262443,0.08323563892,0.110469592,0.0532300992,0.09551597052,0.05338078292,0.07177033493,0.07947019868,0.153942953,0.06563833279,0.09253198453,0.08456659619,0.05597964377,0.09818297737,0.06887966805,0.0860873113,0.09621212121,0.09835600907,0.09049498937,0.0987654321,0.09793968349,0.08533994334,0.1122262774,0.1087728888,0.0998509687,0.09746434231,0.09617097061,0.1029458347,0.1004117833,0.1040307102,0.1223551058,0.1196236559,0.1779497099,0.1024266366,0.1154450262,0.1260736196,0.1068501171,0.11];
value4 = [288,612,601,522,977,373,674,715,670,836,1018,607,968,681,960,754,754,1011,851,692,539,558,503,258,546,324,405,302,302,395,381,340,205,182,223,362,326,396,339,248,313,292,258,340,313,221,226,270,204,110,385,558,61,209,284,233,261,324,316,405,305,365,399,294,308,197,261,261,238,230,284,349,244,275,286,212,210,213,287,220,311,165,180,204,367,200,311,200,308,308,166,211,254,347,298,328,328,241,246,398,335,369,324,325,317,271,399,445,552,363,441,411,365,341];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
display_pro_0('container_sym_aa_0',value1, value2, value3, value4, start1, start2, start3, start4, 'Addis Ababa');
document.getElementById('container_sym_or_0').style.display = 'none';
document.getElementById('container_sym_si_0').style.display = 'none';
document.getElementById('container_sym_so_0').style.display = 'none';
document.getElementById('container_sym_sn_0').style.display = 'none';
document.getElementById('container_sym_ti_0').style.display = 'none';
document.getElementById('container_sym_ga_0').style.display = 'none';
document.getElementById('container_sym_be_0').style.display = 'none';
document.getElementById('container_sym_am_0').style.display = 'none';
document.getElementById('container_sym_af_0').style.display = 'none';
document.getElementById('container_sym_ha_0').style.display = 'none';
document.getElementById('container_sym_di_0').style.display = 'none';
document.getElementById('div_0').style.display = 'block';
	}
	
	
}
	  </script>

</div>
</div>
</div>
</div>



<div class="row">

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Ethiopia Covid-19 Daily Tests, Cases and Positivity Rate </h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href = "https://github.com/owid/covid-19-data/tree/master/public/data">Our World in Data</a>, <a href="https://github.com/CSSEGISandData/COVID-19">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a> ,<a href="https://www.who.int/data">World Health Organization (WHO)</a>
	 and <a href="https://www.ephi.gov.et/">Ethiopian Public Health Institute (EPHI) Surveillance Data</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Seven day moving average is included here to provide more smoothed representation of the actual
    postivity rate.<br><br>
	 <b> SMAn,j </b> = Simple Moving Average for n days, from Jth data <br>
<b> Di </b> = Daily cases for Ith day, from jth data
	
	 \[SMAn,j = { \sum_{i=j}^n Di}\]
 
	</p>
    
  
 


  <p class="card-text" id = "p_na_0">

    <b style="font-family: 'Roboto Slab', serif;">Results:</b> The  number of new positive cases increased almost proportionally with number of tests performed.
	<br>
	<br>
	
      <b>      <i class="fa fa-lightbulb"></i>  The Maximum daily tests performed</b> was 25,158 tests on Semptember 06, 2020
    <br><br>
    <b>      <i class="fa fa-lightbulb"></i>  The Maximum daily peak case</b> was 1,829 cases on August 22, 2020
	<br><br>
   <b>      <i class="fa fa-lightbulb"></i>  The Maximum postivity percentage </b>was 18.2% (1,275 cases from 7,009 tests) on July 27, 2020

  <br><br>
Despite observed flactuations in  test positivity rate, the seven days moving average it shows the prevalance of the virus has been increasing in Ethiopia.
  </p>
  
  
  <p class="card-text" id = "p_aa_0" style="display: none">

    <b style="font-family: 'Roboto Slab', serif;">Results:</b> Consistent and sufficient data was not found for many of the regions (sub-nationals). From <b>August 11 to Semptember 11, 2020:</b> 
	<br><br>
     <i class="fa fa-lightbulb"></i>  In Addis Ababa from  total <b>161,040</b> tests were performed. And this is 64% higher than tests performed at the later period.
	 Comparing the average positivity rate of this two periods the later (second period) is 3% less. <br><br>
	 <i class="fa fa-lightbulb"></i>  In Amhara in between these two periods the number of tests performed decreased by <b>90%</b>, but the positivity rate increased from <b>2.5% to 10%</b>.<br><br> 
	 <i class="fa fa-lightbulb"></i>  Also in Oromia the tests decreased by <b>83%</b>, but 
	  the positivity increased from <b>6% to 19%</b>.<br><br> Eventhough some other regions also performed less and less tests, the positivity rate has been increasing.
  
  </p>
  <!--   <p class="card-text">This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just descrip
</P> -->

   
               </div>
<div id = "footer_region_0" class="card-footer" style="display:none">
	  
	  <h4 style="font-family: 'Roboto Slab', serif;">Please select a region</h4>
	<hr>
	  <form style="display: inline">
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_aa_0"  onchange="cbChange_0(this, 'container_sym_aa_0')">
 <label class="form-check-label" for="re_aa_0">Addis Ababa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_af_0"  onchange="cbChange_0(this,  'container_sym_af_0')">
 <label class="form-check-label" for="re_af_0">Afar</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_am_0"  onchange="cbChange_0(this, 'container_sym_am_0')">
 <label class="form-check-label" for="re_am_0">Amhara</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_be_0"  onchange="cbChange_0(this, 'container_sym_be_0')">
 <label class="form-check-label" for="re_be_0">Benshangul Gumuz</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_di_0"  onchange="cbChange_0(this, 'container_sym_di_0')">
 <label class="form-check-label" for="re_di_0">Dire Dawa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ga_0"  onchange="cbChange_0(this, 'container_sym_ga_0')">
 <label class="form-check-label" for="re_ga_0">Gambella</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ha_0"  onchange="cbChange_0(this, 'container_sym_ha_0')">
 <label class="form-check-label" for="re_ha_0">Harari</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_or_0"  onchange="cbChange_0(this, 'container_sym_or_0')">
 <label class="form-check-label" for="re_or_0">Oromia</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_si_0"  onchange="cbChange_0(this,  'container_sym_si_0')">
 <label class="form-check-label" for="re_si_0">Sidama</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_so_0"  onchange="cbChange_0(this,  'container_sym_so_0')">
 <label class="form-check-label" for="re_so_0">Somali</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_sn_0"  onchange="cbChange_0(this, 'container_sym_sn_0')">
 <label class="form-check-label" for="re_sn_0">SNNPR</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ti_0"  onchange="cbChange_0(this, 'container_sym_ti_0')">
 <label class="form-check-label" for="re_ti_0">Tigray</label>
</div>
<form>
</div>
    

    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    <script>
  

function cbChange_0(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == "container_sym_aa_0"){
		value1 = [3858,5122,4773,5857,7215,4781,5723,6665,5298,5906,6199,4428,6681,5947,5969,5261,4553,5674,4883,5230,4907,3971,4947,3652,4222,4099,4664,4522,4380,4006,4157,3490,2713,3039,3431,3479,4036,4600,3176,4507,3612,3449,3579,4028,4028,2285,2676,2605,2455,2468,2926,3100,3274,2318,3581,2854,2625,3121,2799,3131,3463,2659,2763,3246,3000,3134,3207,3461,3114,3321,3128,3578,3403,3369,3252,3236,2210,2559,2598,4133,3256,3091,2508,2567,2384,3047,3361,2365,5502,3137,2410,2451,2640,3528,3293,3321,3349,2824,2192,3659,3355,3786,3369,3157,3157,2605,3261,3720,3102,3544,3820,3260,3416,3100];
value2 = [1,2,3];
value3 = [0.07465007776,0.1194845763,0.1259166143,0.08912412498,0.1354123354,0.07801715122,0.1177704001,0.1072768192,0.1264628162,0.1415509651,0.1642200355,0.1370822042,0.1448884897,0.1145115184,0.16083096,0.1433187607,0.1656050955,0.1781811773,0.1742781077,0.1323135755,0.1098430813,0.140518761,0.1016777845,0.07064622125,0.1293225959,0.07904366919,0.08683533448,0.06678460858,0.06894977169,0.09860209685,0.09165263411,0.09742120344,0.07556210837,0.05988812109,0.0649956281,0.1040528888,0.08077304262,0.08608695652,0.1067380353,0.05502551586,0.08665559247,0.08466222093,0.07208717519,0.08440913605,0.0777060576,0.09671772429,0.08445440957,0.103646833,0.08309572301,0.04457050243,0.1315789474,0.18,0.01863164325,0.09016393443,0.07930745602,0.08163980378,0.09942857143,0.1038128805,0.1128974634,0.1293516448,0.08807392434,0.1372696502,0.1444082519,0.09057301294,0.1026666667,0.06285896618,0.08138447147,0.07541173071,0.07642903019,0.06925624812,0.09079283887,0.09754052543,0.07170143991,0.08162659543,0.08794587946,0.06551297899,0.09502262443,0.08323563892,0.110469592,0.0532300992,0.09551597052,0.05338078292,0.07177033493,0.07947019868,0.153942953,0.06563833279,0.09253198453,0.08456659619,0.05597964377,0.09818297737,0.06887966805,0.0860873113,0.09621212121,0.09835600907,0.09049498937,0.0987654321,0.09793968349,0.08533994334,0.1122262774,0.1087728888,0.0998509687,0.09746434231,0.09617097061,0.1029458347,0.1004117833,0.1040307102,0.1223551058,0.1196236559,0.1779497099,0.1024266366,0.1154450262,0.1260736196,0.1068501171,0.11];
value4 = [288,612,601,522,977,373,674,715,670,836,1018,607,968,681,960,754,754,1011,851,692,539,558,503,258,546,324,405,302,302,395,381,340,205,182,223,362,326,396,339,248,313,292,258,340,313,221,226,270,204,110,385,558,61,209,284,233,261,324,316,405,305,365,399,294,308,197,261,261,238,230,284,349,244,275,286,212,210,213,287,220,311,165,180,204,367,200,311,200,308,308,166,211,254,347,298,328,328,241,246,398,335,369,324,325,317,271,399,445,552,363,441,411,365,341];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];


		document.getElementById('container_sym_aa_0').style.display = 'block';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_aa_0',value1, value2, value3, value4, start1, start2, start3, start4, 'Addis Ababa');
	}
		
	
    else if (id == "container_sym_af_0"){
		value1 = [404,402,400,308,453,415,420,437,621,401,442,535,445,602,239,350,462,188,361,429,397,542,518,187,686,441,313,310,310,92,197,205,226,195,188,49,200,488,96,94,40,60,162,265,95,136,177,162,148,152,156,177,198,24,24,23,22,23,24,47,70,93,116,139,162,187,175,135,91,91,124,132,130,159,170,182,133,226,227,187,186,186,184,147,151,210,19,356,261,166,162,187,159,179,171,170,169,160,132,178,191,185,162,190,166,176,200,170,180,159,168,141,98,189];
value2 = [1,2,3];
value3 = [0,0.0074626866,0.0050000000,0.0097402597,0.0110375276,0.2048192771,0.2666666667,0.1006864989,0.0917874396,0.1396508728,0.0678733032,0.0168224299,0.0134831461,0.0315614618,0.0376569038,0.0514285714,0.0670995671,0.0797872340,0.0166204986,0.3962703963,0.1385390428,0.1014760148,0.1100386100,0.0588235294,0.1239067055,0.0839002268,0.0702875399,0.0096774194,0.0096774194,0.0326086957,0.0152284264,0.0146341463,0.0132743363,0.0358974359,0.0372340426,0.1836734694,0.0350000000,0.0143442623,0.0416666667,0.0106382979,0.4000000000,0.1500000000,0.0123456790,0.0113207547,0.0210526316,0.0220588235,0.1016949153,0.1111111111,0.1351351351,0.0065789474,0.0064102564,0.0056497175,0.0050505051,0.0416666667,0.0416666667,0.0434782609,0.0454545455,0.0434782609,0.0416666667,0.0212765957,0.0142857143,0.0107526882,0.0086206897,0.0071942446,0.0061728395,0.0053475936,0.0057142857,0.0592592593,0.0879120879,0.1208791209,0.0887096774,0.1363636364,0.0538461538,0.0566037736,0.0000000000,0.0549450549,0.0300751880,0.0752212389,0.0969162996,0.1069518717,0.0376344086,0.0161290323,0.0217391304,0.0408163265,0.0331125828,0.0809523810,0.1578947368,0.0112359551,0.0114942529,0.0060240964,0.0185185185,0.0160427807,0.0125786164,0.0223463687,0.0116959064,0.0117647059,0.0118343195,0.0187500000,0.0227272727,0.0168539326,0.0157068063,0.0216216216,0.0123456790,0.0052631579,0.0060240964,0.0113636364,0.0200000000,0.0058823529,0.0055555556,0.0062893082,0.0119047619,0.0070921986,0.0102040816,0.0105820106];
value4 = [0,3,2,3,5,85,112,44,57,56,30,9,6,19,9,18,31,15,6,170,55,55,57,11,85,37,22,3,3,3,3,3,3,7,7,9,7,7,4,1,16,9,2,3,2,3,18,18,20,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,8,8,11,11,18,7,9,0,10,4,17,22,20,7,3,4,6,5,17,3,4,3,1,3,3,2,4,2,2,2,3,3,3,3,4,2,1,1,2,4,1,1,1,2,1,1,2];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'block';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_af_0',value1, value2, value3, value4, start1, start2, start3, start4,  'Afar');
	}
	else if (id == "container_sym_am_0"){
		value1 = [3102,4086,4340,4095,6011,5877,5877,5171,5339,4738,4506,4442,2727,2499,2101,2863,3625,3972,5491,5605,4894,5115,6189,7176,6289,8216,7802,5838,3874,3951,3800,2925,1416,1041,1181,1496,1141,2030,1550,1946,1239,645,579,1028,1027,1126,1089,777,371,525,591,579,566,1092,725,720,466,1294,981,1211,869,1154,657,765,755,877,606,662,760,539,357,281,559,509,450,606,349,331,383,387,250,260,191,259,189,311,345,390,366,341,116,186,363,139,168,179,190,54,138,73,299,129,104,137,112,68,188,178,105,204,48,76,209,144];
value2 = [1,2,3];
value3 = [0.25306254,0.01811062,0.01658986,0.01929182,0.01497255,0.01582440,0.01412285,0.01295687,0.02097771,0.02321655,0.01864181,0.02723998,0.01540154,0.04121649,0.01380295,0.01711491,0.01351724,0.03600201,0.01074486,0.01623550,0.01532489,0.00918866,0.01357247,0.00696767,0.01812689,0.00730282,0.01076647,0.01318945,0.02013423,0.03315616,0.01078947,0.01641026,0.00000000,0.00000000,0.00000000,0.07486631,0.02103418,0.01280788,0.02516129,0.02363823,0.02421308,0.06511628,0.02590674,0.02140078,0.02531646,0.02664298,0.02203857,0.06177606,0.08355795,0.04571429,0.06768190,0.08117444,0.16254417,0.04304029,0.12000000,0.07916667,0.09227468,0.05873261,0.06727829,0.13377374,0.13578826,0.08578856,0.14155251,0.09411765,0.14304636,0.11288483,0.18481848,0.16767372,0.11842105,0.25417440,0.16806723,0.12099644,0.06082290,0.08251473,0.08888889,0.07260726,0.05730659,0.14501511,0.13054830,0.14211886,0.05200000,0.06923077,0.15183246,0.05019305,0.04761905,0.07717042,0.06666667,0.05384615,0.02732240,0.02932551,0.10344828,0.15053763,0.04683196,0.06474820,0.07738095,0.06145251,0.06315789,0.24074074,0.02173913,0.15068493,0.08361204,0.07751938,0.06730769,0.13868613,0.06250000,0.20588235,0.04255319,0.07865169,0.07619048,0.10294118,0.04166667,0.03947368,0.04784689,0.06944444];
value4 = [785,74,72,79,90,93,83,67,112,110,84,121,42,103,29,49,49,143,59,91,75,47,84,50,114,60,84,77,78,131,41,48,0,0,0,112,24,26,39,46,30,42,15,22,26,30,24,48,31,24,40,47,92,47,87,57,43,76,66,162,118,99,93,72,108,99,112,111,90,137,60,34,34,42,40,44,20,48,50,55,13,18,29,13,9,24,23,21,10,10,12,28,17,9,13,11,12,13,3,11,25,10,7,19,7,14,8,14,8,21,2,3,10,10];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'block';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_am_0', value1, value2, value3, value4, start1, start2, start3, start4, 'Amhara');
	}
	else if (id == "container_sym_be_0"){
		value1 = [270,216,436,426,645,547,537,527,495,768,560,391,380,769,812,580,348,215,182,218,161,323,260,449,235,336,542,480,417,410,224,181,682,375,224,160,96,219,342,463,172,311,91,151,113,151,64,10,130,207,250,185,120,96,70,116,92,78,224,66,78,70,60,85,47,87,137,99,210,9,138,130,56,104,66,240,45,75,101,188,88,95,101,6,61,29,34,51,28,4,11,152,33,44,120,91,63,58,54,82,50,18,129,123,117,111,61,49,38,22,13,105,94,35];
value2 = [1,2,3];
value3 = [0,0.03240740741,0.01834862385,0.01877934272,0.02015503876,0.00365630713,0,0.01138519924,0.01616161616,0,0.01607142857,0.02813299233,0.007894736842,0.0156046814,0.01108374384,0.01724137931,0.02873563218,0.05581395349,0.1538461538,0.009174311927,0.03726708075,0.07430340557,0.1423076923,0.01336302895,0,0.06845238095,0.0110701107,0.03125,0.03836930456,0,0.05357142857,0,0.02785923754,0,0,0,0,0,0,0,0.02906976744,0,0,0,0.01769911504,0,0.046875,0,0,0.01449275362,0,0.07567567568,0.008333333333,0,0.02857142857,0,0,0,0,0.0303030303,0,0,0,0,0,0,0,0,0,0.1111111111,0.007246376812,0,0.03571428571,0,0,0.004166666667,0,0,0.009900990099,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.02631578947,0,0,0.0380952381,0,0];
value4 = [0,7,8,8,13,2,0,6,8,0,9,11,3,12,9,10,10,12,28,2,6,24,37,6,0,23,6,15,16,0,12,0,19,0,0,0,0,0,0,0,5,0,0,0,2,0,3,0,0,3,0,14,1,0,2,0,0,0,0,2,0,0,0,0,0,0,0,0,0,1,1,0,2,0,0,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,4,0,0];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'block';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_be_0', value1, value2, value3, value4, start1, start2, start3, start4, 'Beninshangul Gumuz');
	}
		
	else if (id == "container_sym_di_0"){
		value1 = [119,250,243,324,166,332,298,265,385,390,375,307,431,361,212,276,341,294,474,164,466,364,152,438,275,383,375,223,72,189,134,141,148,99,50,132,57,115,230,367,172,96,94,218,124,258,142,324,74,237,194,181,168,192,238,144,94,252,192,120,193,65,103,142,50,124,185,84,77,48,118,142,144,172,116,142,96,24,162,147,144,96,96,96,48,96,96,72,84,96,96,96,96,96,96,102,108,16,24,48,48,72,48,49,49,96,72,48,48,49,48,72,48,72];
value2 = [1,2,3];
value3 = [0.10924370,0.14400000,0.10699588,0.01234568,0.11445783,0.03012048,0.10402685,0.07547170,0.01558442,0.01282051,0.10400000,0.04234528,0.00000000,0.11634349,0.15094340,0.06521739,0.05571848,0.02040816,0.09915612,0.10365854,0.09012876,0.08241758,0.11184211,0.02283105,0.08727273,0.01566580,0.10133333,0.07623318,0.23611111,0.05820106,0.09701493,0.04964539,0.05405405,0.00000000,0.00000000,0.05303030,0.31578947,0.05217391,0.06086957,0.04359673,0.07558140,0.32291667,0.12765957,0.07339450,0.12096774,0.00000000,0.13380282,0.07716049,0.10810811,0.32067511,0.43298969,0.16574586,0.67261905,0.41666667,0.52941176,0.54861111,0.54255319,0.60714286,0.29687500,0.10833333,0.34196891,0.72307692,0.00000000,0.13380282,1.08000000,0.45967742,0.00000000,0.21428571,0.06493506,0.10416667,0.08474576,0.11267606,0.09722222,0.10465116,0.12068966,0.02112676,0.14583333,0.00000000,0.08024691,0.07482993,0.11111111,0.10416667,0.09375000,0.05208333,0.08333333,0.12500000,0.12500000,0.12500000,0.07142857,0.07291667,0.03125000,0.10416667,0.10416667,0.12500000,0.09375000,0.06862745,0.06481481,0.06250000,0.08333333,0.06250000,0.12500000,0.04166667,0.10416667,0.00000000,0.04081633,0.07291667,0.00000000,0.08333333,0.10416667,0.06122449,0.06250000,0.13888889,0.02083333,0.08333333];
value4 = [13,36,26,4,19,10,31,20,6,5,39,13,0,42,32,18,19,6,47,17,42,30,17,10,24,6,38,17,17,11,13,7,8,0,0,7,18,6,14,16,13,31,12,16,15,0,19,25,8,76,84,30,113,80,126,79,51,153,57,13,66,47,0,19,54,57,0,18,5,5,10,16,14,18,14,3,14,0,13,11,16,10,9,5,4,12,12,9,6,7,3,10,10,12,9,7,7,1,2,3,6,3,5,0,2,7,0,4,5,3,3,10,1,6];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'block';
		display_pro_0('container_sym_di_0', value1, value2, value3, value4, start1, start2, start3, start4, 'Dire Dawa');
	}
	else if (id == "container_sym_ga_0"){
		value1 = [818,586,552,987,1384,1145,1517,1889,1335,1557,1392,1202,1012,950,1059,873,688,706,351,626,797,698,574,800,1939,1265,1957,1715,1473,451,1532,649,759,155,815,706,398,670,389,867,650,619,702,681,831,574,549,541,207,505,287,362,437,640,577,430,370,436,515,556,424,468,349,441,638,532,581,618,462,517,545,459,537,962,1387,488,391,447,491,578,490,485,550,524,532];
value2 = [1,2,3];
value3 = [0.06234718826,0.1109215017,0.1974637681,0.1327254306,0.1416184971,0.02794759825,0.159525379,0.1154049762,0.1602996255,0.0854206808,0.1961206897,0.09317803661,0.1116600791,0.2368421053,0.1322001889,0.06071019473,0.07703488372,0.07932011331,0.1794871795,0.1214057508,0.1091593476,0.1275071633,0.1933797909,0.1675,0.04280556988,0.07984189723,0.02095043434,0.0915451895,0.1065852003,0.09534368071,0.06723237598,0.1186440678,0.09354413702,0.03870967742,0.08098159509,0.2294617564,0.1231155779,0.1298507463,0.07712082262,0.06920415225,0.06923076923,0.08239095315,0.1182336182,0.05580029369,0.07099879663,0.05400696864,0.04553734062,0.05914972274,0.07729468599,0.09108910891,0.01742160279,0.2458563536,0.004576659039,0.003125,0.1022530329,0.05348837209,0.09189189189,0.05504587156,0.03883495146,0.04136690647,0.07547169811,0.0405982906,0.04584527221,0.03174603175,0.065830721,0.0545112782,0.04819277108,0.04530744337,0.03896103896,0.04642166344,0.03302752294,0.04357298475,0.03351955307,0.03118503119,0.02162941601,0.04918032787,0.02046035806,0.05369127517,0.04887983707,0.03460207612,0.03673469388,0.02474226804,0.01636363636,0.03816793893,0.04323308271];
value4 = [138,138,138,81,134,331,306,282,281,389,496,263,214,279,216,368,520,537,406,738,397,720,440,502,1088,417,484,484,267,328,467,164,118,118,118,118,118,118,118,118,151,151,151,151,23,23,61,61,61,22,22,56,90,72,53,53,53,53,53,73,57,41,56,70,70,70,93,93,93,68,94,94,94,94,94,94,94,94,94,94,94,94,94,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,153,185,185,80,48];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'block';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_ga_0', value1, value2, value3, value4, start1, start2, start3, start4, 'Gambella');
	}
	else if (id == "container_sym_ha_0"){
		value1 = [100,670,587,690,687,612,655,698,782,735,700,742,718,849,1068,936,805,376,646,427,440,540,890,594,893,621,1016,700,384,989,735,918,114,284,425,676,503,456,236,125,94,125,104,102,94,76,80,188,136,189,347,329,311,186,314,327,240,180,248,180,140,120,119,94,101,81,94,55,24,52,30,24,43,53,30,49,53,34,31,24,16,26,63,42,36,37,40,56,43,30,55,23,28,21,32,33,33,24,59,60,80,24,21,16,19,24,18,20,18,22,16,40,24,61];
value2 = [1,2,3];
value3 = [0.0500,0.0224,0.1124,0.0493,0.0087,0.0948,0.0382,0.0702,0.0358,0.0599,0.0286,0.1253,0.0822,0.0306,0.0028,0.0214,0.0261,0.2580,0.1068,0.1382,0.0091,0.0741,0.0899,0.0471,0.0090,0.0322,0.0049,0.0214,0.0391,0.0111,0.0925,0.0076,0.0000,0.0423,0.0212,0.0163,0.0219,0.0395,0.0381,0.0000,0.0745,0.0000,0.0673,0.0000,0.1170,0.0263,0.0250,0.0160,0.0294,0.4868,0.0749,0.1216,0.4116,0.3978,0.1752,0.0734,0.1417,0.2333,0.5484,0.4611,0.1071,0.4417,0.7059,0.0851,0.1287,0.5802,0.0000,0.0909,0.1250,0.0577,0.3333,0.1667,0.0465,0.0377,0.2667,0.1020,0.0000,0.0000,0.3226,0.2083,0.0625,0.0000,0.0159,0.0476,0.0833,0.1892,0.1750,0.1607,0.2093,0.3333,0.0182,0.3043,0.5000,0.3333,0.1563,0.0909,0.0606,0.0833,0.0678,0.2000,0.4875,0.0000,0.1429,0.2500,0.0526,0.0417,0.0000,0.3000,0.1111,0.0000,0.2500,0.0500,0.0833];
value4 = [5,15,66,34,6,58,25,49,28,44,20,93,59,26,3,20,21,97,69,59,4,40,80,28,8,20,5,15,15,11,68,7,0,12,9,11,11,18,9,0,7,0,7,0,11,2,2,3,4,92,26,40,128,74,55,24,34,42,136,83,15,53,84,8,13,47,0,5,3,3,10,4,2,2,8,5,0,0,10,5,1,0,1,2,3,7,7,9,9,10,1,7,14,7,5,3,2,2,4,12,39,0,3,4,1,1,0,6,2,0,4,2,2];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'block';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_ha_0', value1, value2, value3, value4, start1, start2, start3, start4,  'Harari');
	}
	else if (id == "container_sym_or_0"){
		value1 = [1674,2292,2560,3352,3448,3763,3763,3973,4516,4853,5504,5603,4628,3709,3798,4009,4219,3642,3002,4067,3620,2407,3493,3357,4310,5218,4022,3036,2051,3317,2900,2744,663,1073,1324,2299,1402,944,1497,1211,797,1845,636,1071,623,1031,1417,1077,601,481,645,548,451,1601,1108,512,260,734,567,572,728,470,1132,579,816,980,560,560,650,757,907,467,728,937,555,747,672,760,669,539,473,501,635,571,354,698,516,434,429,423,320,380,235,423,871,573,274,326,257,403,341,308,536,476,449,375,552,834,857,657,322,342,465,247];
value2 = [1,2,3];
value3 = [0.0471204,0.0471204,0.0558594,0.0450477,0.0585847,0.0486314,0.0600585,0.0412786,0.0478299,0.0813930,0.0347020,0.0580046,0.0337079,0.0636290,0.0555556,0.0643552,0.0613890,0.0700165,0.0706196,0.0292599,0.0350829,0.0598255,0.0417979,0.0420018,0.0670534,0.0477194,0.1258081,0.0991436,0.1467577,0.0678324,0.0568966,0.0368076,0.0618401,0.0801491,0.0702417,0.0513267,0.1626248,0.1027542,0.0487642,0.1288192,0.1606023,0.1474255,0.4103774,0.1661998,0.1460674,0.0746848,0.0945660,0.1949861,0.4359401,0.4656965,0.1798450,0.2627737,0.1773836,0.2186134,0.2157040,0.2343750,0.3115385,0.2425068,0.2698413,0.1468531,0.2087912,0.3595745,0.1766784,0.1554404,0.1250000,0.2122449,0.2214286,0.2232143,0.3015385,0.2906209,0.2006615,0.2269807,0.2403846,0.1366062,0.1909910,0.1472557,0.1160714,0.1250000,0.1584454,0.1614100,0.1606765,0.1556886,0.2157480,0.1295972,0.2570621,0.1217765,0.1976744,0.1705069,0.1888112,0.1938534,0.2687500,0.1315789,0.1531915,0.2174941,0.1515499,0.1326353,0.2773723,0.1779141,0.1906615,0.1637717,0.1612903,0.1915584,0.1697761,0.1554622,0.1336303,0.1360000,0.1250000,0.0803357,0.1890315,0.1339422,0.4099379,0.2514620,0.1806452,0.2105263];
value4 = [79,108,143,151,202,183,226,164,216,395,191,325,156,236,211,258,259,255,212,119,127,144,146,141,289,249,506,301,301,225,165,101,41,86,93,118,228,97,73,156,128,272,261,178,91,77,134,210,262,224,116,144,80,350,239,120,81,178,153,84,152,169,200,90,102,208,124,125,196,220,182,106,175,128,106,110,78,95,106,87,76,78,137,74,91,85,102,74,81,82,86,50,36,92,132,76,76,58,49,66,55,59,91,74,60,51,69,67,162,88,132,86,84,52];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'block';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_or_0', value1, value2, value3, value4, start1, start2, start3, start4,  'Oromia');
	}
	else if (id == "container_sym_si_0"){
		value1 = [465,252,248,179,714,762,632,503,209,551,857,766,621,601,402,404,405,513,647,716,464,974,696,377,840,811,783,513,244,676,391,102,123,245,182,174,90,269,177,159,267,173,155,185,324,298,168,92,53,136,182,226,271,445,241,151,184,199,256,227,176,184,71,249,115,137,198,170,263,365,183,111,104,169,249,158,46,220,181,152,177,197,95,70,102,87,135,147,113,80,61,95,239,118,159,104,49,45,95,69,64,212,360,61,82,83,93,40,127,64,79,81,110,108];
value2 = [1,2,3];
value3 = [0.04731,0.08730,0.09677,0.13408,0.01821,0.09843,0.08386,0.12525,0.21053,0.02359,0.03734,0.12533,0.18196,0.18636,0.19403,0.12129,0.08889,0.07018,0.04946,0.04609,0.03448,0.03080,0.01724,0.01326,0.06190,0.03699,0.05619,0.06433,0.18443,0.06805,0.10486,0.19608,0.18699,0.02449,0.10440,0.15517,0.06667,0.08550,0.17514,0.16981,0.03371,0.37572,0.12903,0.15676,0.06481,0.04362,0.46429,0.10870,0.00000,0.14706,0.11538,0.10619,0.04428,0.08989,0.06639,0.22517,0.15761,0.04020,0.07031,0.11454,0.13636,0.05978,0.25352,0.02008,0.13043,0.26277,0.14141,0.10588,0.06844,0.04932,0.20219,0.14414,0.18269,0.13609,0.07229,0.43671,0.19565,0.05909,0.24309,0.32237,0.09605,0.10152,0.38947,0.27143,0.11765,0.26437,0.02963,0.15646,0.13274,0.17500,0.45902,0.20000,0.04603,0.33051,0.13836,0.22115,0.16327,0.37778,0.09474,0.15942,0.21875,0.04245,0.03333,0.21311,0.04878,0.07229,0.11828,0.40000,0.04724,0.28125,0.05063,0.08642,0.04545,0.05556];
value4 = [22,22,24,24,13,75,53,63,44,13,32,96,113,112,78,49,36,36,32,33,16,30,12,5,52,30,44,33,45,46,41,20,23,6,19,27,6,23,31,27,9,65,20,29,21,13,78,10,0,20,21,24,12,40,16,34,29,8,18,26,24,11,18,5,15,36,28,18,18,18,37,16,19,23,18,69,9,13,44,49,17,20,37,19,12,23,4,23,15,14,28,19,11,39,22,23,8,17,9,11,14,9,12,13,4,6,11,16,6,18,4,7,5,6];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'block';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_si_0',value1, value2, value3, value4, start1, start2, start3, start4, 'Sidama');
	}
	else if (id == "container_sym_so_0"){
		value1 = [134,91,68,442,214,260,324,388,624,391,415,375,403,630,606,565,524,725,758,783,599,511,585,444,434,422,769,444,119,230,94,94,51,145,65,361,144,56,12,125,165,73,85,142,186,98,98,127,285,63,132,170,208,68,12,29,152,240,293,572,356,142,144,146,105,194,147,150,201,92,214,320,86,175,276,356,297,222,191,348,317,302,323,340,203,180,200,232,165,98,51,11,162,45,64,64,64,60,46,54,71,99,150,83,143,80,81,34,175,270,364,342,173,197];
value2 = [1,2,3];
value3 = [0.13433,0.07692,0.05882,0.04525,0.04673,0.03462,0.10802,0.01546,0.06090,0.07673,0.05783,0.02400,0.00248,0.02857,0.03300,0.05133,0.05534,0.04690,0.05145,0.06897,0.03673,0.01957,0.00684,0.06081,0.03456,0.02133,0.00910,0.03378,0.12605,0.03043,0.03191,0.03191,0.07843,0.02069,0.04615,0.00554,0.00694,0.01786,0.08333,0.02400,0.09091,0.05479,0.04706,0.07042,0.01613,0.03061,0.06122,0.01575,0.00702,0.04762,0.04545,0.01765,0.01923,0.04412,0.00000,0.00000,0.09868,0.00417,0.00341,0.00175,0.00562,0.02113,0.02778,0.02740,0.01905,0.01546,0.03401,0.03333,0.01493,0.02174,0.01402,0.01875,0.16279,0.02857,0.01087,0.00843,0.01347,0.08108,0.03141,0.00862,0.01262,0.00662,0.00000,0.00294,0.00493,0.00556,0.01500,0.01293,0.02424,0.05102,0.13725,0.00000,0.04321,0.06667,0.06250,0.03125,0.04688,0.03333,0.04348,0.03704,0.12676,0.01010,0.03333,0.08434,0.05594,0.01250,0.03704,0.26471,0.01143,0.00000,0.00000,0.00000,0.00578,0.00000];
value4 = [18,7,4,20,10,9,35,6,38,30,24,9,1,18,20,29,29,34,39,54,22,10,4,27,15,9,7,15,15,7,3,3,4,3,3,2,1,1,1,3,15,4,4,10,3,3,6,2,2,3,6,3,4,3,0,0,15,1,1,1,2,3,4,4,2,3,5,5,3,2,3,6,14,5,3,3,4,18,6,3,4,2,0,1,1,1,3,3,4,5,7,0,7,3,4,2,3,2,2,2,9,1,5,7,8,1,3,9,2,0,0,0,1,0];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'block';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_so_0', value1, value2, value3, value4, start1, start2, start3, start4, 'Somali');
	}
	else if (id == "container_sym_sn_0"){
		value1 = [937,975,743,582,1181,944,1124,1303,1441,1166,1589,1924,1893,1655,2296,1933,1570,1924,1993,2496,2084,1995,2616,2802,2501,2315,2431,1980,1528,922,2034,897,1178,805,1371,652,488,977,858,458,658,719,788,680,981,1330,1158,890,287,451,429,625,822,1064,1182,779,773,1690,569,1513,967,645,846,1304,717,652,586,554,1299,687,764,689,792,891,1073,747,336,986,1162,996,469,1147,1155,951,1304,1250,1093,622,785,949,607,779,1228,885,558,659,760,703,781,245,702,867,710,653,786,473,829,738,621,500,393,278,311,145];
value2 = [1,2,3];
value3 = [0.03628601921,0.003076923077,0.02557200538,0.04982817869,0.04064352244,0.02966101695,0.01245551601,0.03530314658,0.01734906315,0.06603773585,0.01950912524,0.02650727651,0.01743264659,0.02900302115,0.0287456446,0.04242110709,0.05222929936,0.02806652807,0.05168088309,0.03685897436,0.0263915547,0.05413533835,0.02140672783,0.0306923626,0.02558976409,0.02850971922,0.01522007404,0.03232323232,0.04123036649,0.05639913232,0.0255653884,0.05351170569,0.03989813243,0.03726708075,0.00583515682,0.03220858896,0.08196721311,0.02558853634,0.0372960373,0.07860262009,0.03951367781,0.05563282337,0.03807106599,0.04117647059,0.04689092762,0.02105263158,0.04404145078,0.04606741573,0.02090592334,0.05321507761,0.04662004662,0.1728,0.02798053528,0.02443609023,0.04906937394,0.0513478819,0.02328589909,0.03195266272,0.07732864675,0.03569068077,0.03516028956,0.07751937984,0.04137115839,0.03987730061,0.07670850767,0.02914110429,0,0.1263537906,0.02540415704,0.07423580786,0.007853403141,0.03338171263,0.02272727273,0.01346801347,0.02889095993,0.02409638554,0.01785714286,0.03651115619,0.01376936317,0.01807228916,0.01918976546,0.03051438535,0.01125541126,0.02208201893,0.01610429448,0.0144,0.01829826167,0.02250803859,0.0152866242,0.01264488936,0.01482701812,0.01283697047,0.009771986971,0.02372881356,0.01433691756,0.04552352049,0.03947368421,0.01137980085,0.008962868118,0.08979591837,0.0113960114,0.01153402537,0.008450704225,0.007656967841,0.01145038168,0.05073995772,0.0205066345,0.0108401084,0.0193236715,0.02,0.03053435115,0.04316546763,0.01286173633,0.03448275862];
value4 = [34,3,19,29,48,28,14,46,25,77,31,51,33,48,66,82,82,54,103,92,55,108,56,86,64,66,37,64,63,52,52,48,47,30,8,21,40,25,32,36,26,40,30,28,46,28,51,41,6,24,20,108,23,26,58,40,18,54,44,54,34,50,35,52,55,19,0,70,33,51,6,23,18,12,31,18,6,36,16,18,9,35,13,21,21,18,20,14,12,12,9,10,12,21,8,30,30,8,7,22,8,10,6,5,9,24,17,8,12,10,12,12,4,5];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'block';
		document.getElementById('container_sym_ti_0').style.display = 'none';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0('container_sym_sn_0',  value1, value2, value3, value4, start1, start2, start3, start4,  'SNNPR');
	}
	else  {
		value1 = [818,586,552,987,1384,1145,1517,1889,1335,1557,1392,1202,1012,950,1059,873,688,706,351,626,797,698,574,800,1939,1265,1957,1715,1473,451,1532,649,759,155,815,706,398,670,389,867,650,619,702,681,831,574,549,541,207,505,287,362,437,640,577,430,370,436,515,556,424,468,349,441,638,532,581,618,462,517,545,459,537,962,1387,488,391,447,491,578,490,485,550,524,532];
value2 = [1,2,3];
value3 = [0.06234718826,0.1109215017,0.1974637681,0.1327254306,0.1416184971,0.02794759825,0.159525379,0.1154049762,0.1602996255,0.0854206808,0.1961206897,0.09317803661,0.1116600791,0.2368421053,0.1322001889,0.06071019473,0.07703488372,0.07932011331,0.1794871795,0.1214057508,0.1091593476,0.1275071633,0.1933797909,0.1675,0.04280556988,0.07984189723,0.02095043434,0.0915451895,0.1065852003,0.09534368071,0.06723237598,0.1186440678,0.09354413702,0.03870967742,0.08098159509,0.2294617564,0.1231155779,0.1298507463,0.07712082262,0.06920415225,0.06923076923,0.08239095315,0.1182336182,0.05580029369,0.07099879663,0.05400696864,0.04553734062,0.05914972274,0.07729468599,0.09108910891,0.01742160279,0.2458563536,0.004576659039,0.003125,0.1022530329,0.05348837209,0.09189189189,0.05504587156,0.03883495146,0.04136690647,0.07547169811,0.0405982906,0.04584527221,0.03174603175,0.065830721,0.0545112782,0.04819277108,0.04530744337,0.03896103896,0.04642166344,0.03302752294,0.04357298475,0.03351955307,0.03118503119,0.02162941601,0.04918032787,0.02046035806,0.05369127517,0.04887983707,0.03460207612,0.03673469388,0.02474226804,0.01636363636,0.03816793893,0.04323308271];
value4 = [51,65,109,131,196,32,242,218,214,133,273,112,113,225,140,53,53,56,63,76,87,89,111,134,83,101,41,157,157,43,103,77,71,6,66,162,49,87,30,60,45,51,83,38,59,31,25,32,16,46,5,89,2,2,59,23,34,24,20,23,32,19,16,14,42,29,28,28,18,24,18,20,18,30,30,24,8,24,24,20,18,12,9,20,23,0];
start1 = [7, 11];
start2 = [7, 11];
start3 = [7, 11];
start4 = [7, 11];
		document.getElementById('container_sym_aa_0').style.display = 'none';
		document.getElementById('container_sym_or_0').style.display = 'none';
		document.getElementById('container_sym_si_0').style.display = 'none';
		document.getElementById('container_sym_so_0').style.display = 'none';
		document.getElementById('container_sym_sn_0').style.display = 'none';
		document.getElementById('container_sym_ti_0').style.display = 'block';
		document.getElementById('container_sym_ga_0').style.display = 'none';
		document.getElementById('container_sym_be_0').style.display = 'none';
		document.getElementById('container_sym_am_0').style.display = 'none';
		document.getElementById('container_sym_af_0').style.display = 'none';
		document.getElementById('container_sym_ha_0').style.display = 'none';
		document.getElementById('container_sym_di_0').style.display = 'none';
		display_pro_0("container_sym_ti_0",  value1, value2, value3, value4, start1, start2, start3, start4, 'Tigray');
	}
	
}
	  </script>
      <div id="container_post"></div>
       <div id = "div_0" class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85); display: none'></div>
       <div id="container_sym_aa_0" style="display: none"></div>
	   <div id="container_sym_af_0" style="display: none"></div>
	   <div id="container_sym_am_0" style="display: none"></div>
	   <div id="container_sym_be_0" style="display: none"></div>
	   <div id="container_sym_di_0" style="display: none"></div>
	   <div id="container_sym_ga_0" style="display: none"></div>
	   <div id="container_sym_ha_0" style="display: none"></div>
	   <div id="container_sym_or_0" style="display: none"></div>
	   <div id="container_sym_si_0" style="display: none"></div>
	   <div id="container_sym_so_0" style="display: none"></div>
	   <div id="container_sym_sn_0" style="display: none"></div>
	   <div id="container_sym_ti_0" style="display: none"></div>
      </div>
    </div>
  </div>

  

  
</div>


  
<div class = "row" style="margin-top: 25px; margin-bottom: 15px">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h2 class="card-title" style="font-family: 'Roboto Slab', serif;">Symptomatic and Asymptomatic Proportions of Covid-19 in Ethiopia</h2> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_sym" style="font-family: 'Dosis', sans-serif; color: white">Proportion of Symptomatic Versus Asymptomatic of Covid-19 Cases</a></b></h5></li>

</ul>
<div style="float: right; display:  display: inline-block; padding: 10px;  background-color: rgb(45, 45, 45,0.15)">
 <span style="color: rgb(255,250,240,0.85); font-size: 20px; font-family: 'Dosis', sans-serif; ">Region View</span>
<label class="switch">
  <input id = "toggle1" type="checkbox" checked onchange="cb_Change(this, 'footer_region')">
  <span class="slider round"></span>
</label>
<span style="color: rgb(255,250,240,0.85);font-size: 20px; font-family: 'Dosis', sans-serif; ">National View </span> 


</div>
</div>
</div>
</div>
</div>

<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Proportion of Symptomatic Versus Asymptomatic of Covid-19 Cases</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b>  <a href = "https://ephi.gov.et">Ethiopian Public Health Institute (EPHI) Surveillance Data</a>
	<p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> <br>
      <ul><li><b>Asymptomatic:</b> Are cases with no recognised symptom of Covid-19.
	  <b>PoA</b> = Proportion of Asymptomatic
 \[PoA = {Asymbtomatic \; Cases \over Total \; Cases}\]
 
      </li>
<li><b>Symptomatic:</b> Are cases with atleast few recognised symptoms of Covid-19.</li>
<b>PoS</b> = Proportion of Symptomatic
\[PoS = {Symbtomatic \; Cases \over Total \; Cases}\]

      </ul>

The number of cases which are registered as symptomatic or asymptomatic were counted and then divided by total number cases from survaillance data.
   <script>
window.onload = onPageLoad();

function onPageLoad() {
document.getElementById('toggle1').checked = true;

	}	  

function cb_Change(obj, id) {
    if (obj.checked) {
		document.getElementById('footer_region').style.display = 'none';
		document.getElementById('p_na').style.display = 'block';
		document.getElementById('p_aa').style.display = 'none';
		document.getElementById('container_sym_aa').style.display = 'none';

document.getElementById('container_sym_or').style.display = 'none';
document.getElementById('container_sym_si').style.display = 'none';
document.getElementById('container_sym_so').style.display = 'none';
document.getElementById('container_sym_sn').style.display = 'none';
document.getElementById('container_sym_ti').style.display = 'none';
document.getElementById('container_sym_ga').style.display = 'none';
document.getElementById('container_sym_be').style.display = 'none';
document.getElementById('container_sym_am').style.display = 'none';
document.getElementById('container_sym_af').style.display = 'none';
document.getElementById('container_sym_ha').style.display = 'none';
document.getElementById('container_sym_di').style.display = 'none';
document.getElementById('div').style.display = 'none';
	}
	else {
		document.getElementById('footer_region').style.display = 'block';
		document.getElementById('p_na').style.display = 'none';
		document.getElementById('p_aa').style.display = 'block';
		document.getElementById('re_aa').checked = true;
document.getElementById('re_af').checked = false;
document.getElementById('re_am').checked = false;
document.getElementById('re_be').checked = false;
document.getElementById('re_di').checked = false;
document.getElementById('re_ga').checked = false;
document.getElementById('re_ha').checked = false;
document.getElementById('re_or').checked = false;
document.getElementById('re_si').checked = false;
document.getElementById('re_so').checked = false;
document.getElementById('re_sn').checked = false;
document.getElementById('re_ti').checked = false;
document.getElementById('container_sym_aa').style.display = 'block';
display_pro('container_sym_aa', 317, 20493, 'Addis Ababa');
document.getElementById('container_sym_or').style.display = 'none';
document.getElementById('container_sym_si').style.display = 'none';
document.getElementById('container_sym_so').style.display = 'none';
document.getElementById('container_sym_sn').style.display = 'none';
document.getElementById('container_sym_ti').style.display = 'none';
document.getElementById('container_sym_ga').style.display = 'none';
document.getElementById('container_sym_be').style.display = 'none';
document.getElementById('container_sym_am').style.display = 'none';
document.getElementById('container_sym_af').style.display = 'none';
document.getElementById('container_sym_ha').style.display = 'none';
document.getElementById('container_sym_di').style.display = 'none';
document.getElementById('div').style.display = 'block';
	}
	
	
}
	  </script>

  <p id="p_na" class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b>  The percentage of symptomatic cases from overall cases
are <b>4.2%</b>. </p>
<p id="p_aa" class="card-text" style="display: none "><b style="font-family: 'Roboto Slab', serif;">Results:</b> The three region with highest symptomatic proportions are <b>Tigray, Amhara, and Dire Dawa</b> with <b>13.4%, 11.6%
and 10.6% </b> respectively. However, the number of cases used for Dire Dawa is comparatively small. The three region with lowest symptomatic proportions are <b>Oromia, SNNPR, and Addis Ababa </b>with <b>0.4%, 1.0%
and 1.5% </b> respectively. Eventhough large number of cases for Addis Ababa and Oromia was used, the symptomatic cases are still very small.</p>
 </div>
 
   <div id = "footer_region" class="card-footer" style="display:none">
	  
	  <h4 style="font-family: 'Roboto Slab', serif;">Please select a region</h4>
	<hr>
	  <form style="display: inline">
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_aa"  onchange="cb__Change(this, 'container_sym_aa')">
 <label class="form-check-label" for="re_aa">Addis Ababa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_af"  onchange="cb__Change(this,  'container_sym_af')">
 <label class="form-check-label" for="re_af">Afar</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_am"  onchange="cb__Change(this, 'container_sym_am')">
 <label class="form-check-label" for="re_am">Amhara</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_be"  onchange="cb__Change(this, 'container_sym_be')">
 <label class="form-check-label" for="re_be">Benshangul Gumuz</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_di"  onchange="cb__Change(this, 'container_sym_di')">
 <label class="form-check-label" for="re_di">Dire Dawa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ga"  onchange="cb__Change(this, 'container_sym_ga')">
 <label class="form-check-label" for="re_ga">Gambella</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ha"  onchange="cb__Change(this, 'container_sym_ha')">
 <label class="form-check-label" for="re_ha">Harari</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_or"  onchange="cb__Change(this, 'container_sym_or')">
 <label class="form-check-label" for="re_or">Oromia</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_si"  onchange="cb__Change(this,  'container_sym_si')">
 <label class="form-check-label" for="re_si">Sidama</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_so"  onchange="cb__Change(this,  'container_sym_so')">
 <label class="form-check-label" for="re_so">Somali</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_sn"  onchange="cb__Change(this, 'container_sym_sn')">
 <label class="form-check-label" for="re_sn">SNNPR</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ti"  onchange="cb__Change(this, 'container_sym_ti')">
 <label class="form-check-label" for="re_ti">Tigray</label>
</div>
<form>
</div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    <script>
  

function cb__Change(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == "container_sym_aa"){
		document.getElementById('container_sym_aa').style.display = 'block';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_aa', 317, 20493, 'Addis Ababa');
	}
		
	
    else if (id == "container_sym_af"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'block';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_af', 14,380, 'Afar');
	}
	else if (id == "container_sym_am"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'block';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_am', 699,5326, 'Amhara');
	}
	else if (id == "container_sym_be"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'block';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_be', 88,1676, 'Beninshangul Gumuz');
	}
		
	else if (id == "container_sym_di"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'block';
		display_pro('container_sym_di', 9,76, 'Dire Dawa');
	}
	else if (id == "container_sym_ga"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'block';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_ga', 26,664, 'Gambella');
	}
	else if (id == "container_sym_ha"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'block';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_ha', 113,1523, 'Harari');
	}
	else if (id == "container_sym_or"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'block';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_or', 61,15849, 'Oromia');
	}
	else if (id == "container_sym_si"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'block';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_si', 8,264, 'Sidama');
	}
	else if (id == "container_sym_so"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'block';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_so', 135,1489, 'Somali');
	}
	else if (id == "container_sym_sn"){
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'block';
		document.getElementById('container_sym_ti').style.display = 'none';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro('container_sym_sn', 8,813, 'SNNPR');
	}
	else  {
		document.getElementById('container_sym_aa').style.display = 'none';
		document.getElementById('container_sym_or').style.display = 'none';
		document.getElementById('container_sym_si').style.display = 'none';
		document.getElementById('container_sym_so').style.display = 'none';
		document.getElementById('container_sym_sn').style.display = 'none';
		document.getElementById('container_sym_ti').style.display = 'block';
		document.getElementById('container_sym_ga').style.display = 'none';
		document.getElementById('container_sym_be').style.display = 'none';
		document.getElementById('container_sym_am').style.display = 'none';
		document.getElementById('container_sym_af').style.display = 'none';
		document.getElementById('container_sym_ha').style.display = 'none';
		document.getElementById('container_sym_di').style.display = 'none';
		display_pro("container_sym_ti", 882,5684, 'Tigray');
	}
	
}
	  </script>
      <div id="container_sym"></div>
	  <div id = "div" class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85); display: none'></div>
       <div id="container_sym_aa" style="display: none"></div>
	   <div id="container_sym_af" style="display: none"></div>
	   <div id="container_sym_am" style="display: none"></div>
	   <div id="container_sym_be" style="display: none"></div>
	   <div id="container_sym_di" style="display: none"></div>
	   <div id="container_sym_ga" style="display: none"></div>
	   <div id="container_sym_ha" style="display: none"></div>
	   <div id="container_sym_or" style="display: none"></div>
	   <div id="container_sym_si" style="display: none"></div>
	   <div id="container_sym_so" style="display: none"></div>
	   <div id="container_sym_sn" style="display: none"></div>
	   <div id="container_sym_ti" style="display: none"></div>
      </div>
    </div>
  </div>

  

  
</div>


<div class = "row" style="margin-top: 25px; margin-bottom: 15px">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h2 class="card-title" style="font-family: 'Roboto Slab', serif;">Covid-19 Case Fatalitiy Different Demographic Groups in Ethiopia.</h2> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">

    <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_case_fatality" style="font-family: 'Dosis', sans-serif; color: white">General Covid-19 Case Fatality Rate</a></b></h5></li>
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_com_age" style="font-family: 'Dosis', sans-serif; color: white">Age Disagregatted Covid-19 Case Fatality and Different Comorbidities</a></b></h5></li>

  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_sex" style="font-family: 'Dosis', sans-serif; color: white">Sex Disagregatted Covid-19 Case Fatality</a></b></h5></li>
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_age" style="font-family: 'Dosis', sans-serif; color: white">General Age Disagregatted Covid-19 Case Fatality</a></b></h5></li>

</ul>
<div style="float: right; display:  display: inline-block; padding: 10px;  background-color: rgb(45, 45, 45,0.15)">
 <span style="color: rgb(255,250,240,0.85); font-size: 20px; font-family: 'Dosis', sans-serif; color: white ">Region View</span>
<label class="switch">
  <input id = "toggle2" type="checkbox" checked onchange="cb__Changek(this, 'footer_region_1')">
  <span class="slider round"></span>
</label>
<span style="color: rgb(255,250,240,0.85);font-size: 20px; font-family: 'Dosis', sans-serif; color: white ">National View </span> 
<script>

window.onload = onPageLoad();

function onPageLoad() {
document.getElementById('toggle2').checked = true;

	}	

function cb__Changek(obj, id) {
    if (obj.checked) {
		document.getElementById('footer_region_1').style.display = 'none';
		document.getElementById('footer_region_2').style.display = 'none';
		document.getElementById('footer_region_3').style.display = 'none';
		document.getElementById('footer_region_4').style.display = 'none';
		
		
		document.getElementById('p_na_1').style.display = 'block';
		document.getElementById('p_aa_1').style.display = 'none';
		document.getElementById('container_sym_aa_1').style.display = 'none';

		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		document.getElementById('div1').style.display = 'none';

		document.getElementById('p_na_2').style.display = 'block';
		document.getElementById('p_aa_2').style.display = 'none';
		document.getElementById('container_sym_aa_2').style.display = 'none';

		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		document.getElementById('div2').style.display = 'none';
		
		
		document.getElementById('p_na_3').style.display = 'block';
		document.getElementById('p_aa_3').style.display = 'none';
		document.getElementById('container_sym_aa_3').style.display = 'none';

		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		document.getElementById('div3').style.display = 'none';
		
		
		
		document.getElementById('p_na_4').style.display = 'block';
		document.getElementById('p_aa_4').style.display = 'none';
		document.getElementById('container_sym_aa_4').style.display = 'none';

		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		document.getElementById('div4').style.display = 'none';
		
	}
	else {
		document.getElementById('footer_region_1').style.display = 'block';
		document.getElementById('footer_region_2').style.display = 'block';
		document.getElementById('footer_region_3').style.display = 'block';
		document.getElementById('footer_region_4').style.display = 'block';
		
		
		document.getElementById('p_na_1').style.display = 'none';
		document.getElementById('p_aa_1').style.display = 'block';
		document.getElementById('re_aa_1').checked = true;
		document.getElementById('re_af_1').checked = false;
		document.getElementById('re_am_1').checked = false;
		document.getElementById('re_be_1').checked = false;
		document.getElementById('re_di_1').checked = false;
		document.getElementById('re_ga_1').checked = false;
		document.getElementById('re_ha_1').checked = false;
		document.getElementById('re_or_1').checked = false;
		document.getElementById('re_si_1').checked = false;
		document.getElementById('re_so_1').checked = false;
		document.getElementById('re_sn_1').checked = false;
		document.getElementById('re_ti_1').checked = false;
		document.getElementById('container_sym_aa_1').style.display = 'block';
		value1 = [13,16,21,22,27,31,33,34,35,37,43,48,50,51,52,53,54,55,56,62,63,66,69,73,74,76,78,79,83,84,90,92,94,97,99,101,103,107,112,115,123,128,130,139,144,152,162,166,169,212,217,226,229,237,241,248,257,262,270,281,287,296,314,329,344,356,368,377,384,405,415,424,432,440,452,462,469,473,479,486,488,496,498,505,512,516,517,522,524,531,533,535,536,537,538,541,542,545,546,547,548,549,555,557,562,569,574,579,579,584,592,593,596,611,613,619,622,628,638,640,641,648,654,656,659,666,668,676,687,690,700,701,711,715,719,722,725,729,730,737,738,742,743,747,751,755,756,762,765,770,773,776,780,786,792,796,801,808,815,834,837,841,842,849,860,862,862,866,869,874];
		value2 = [1,2,4];
		value3 = [0.01454138702,0.01664932362,0.01931922723,0.01632047478,0.01863354037,0.0204620462,0.02012195122,0.01896263246,0.01867662753,0.0187057634,0.01983394834,0.0200,0.0199123855,0.01954771943,0.01933085502,0.0190990991,0.01849948613,0.01753267453,0.01731066461,0.01617954071,0.01604686704,0.01639751553,0.01659850854,0.01659850854,0.01659850854,0.01659850854,0.01659850854,0.01629874149,0.01622044167,0.0155959896,0.01598295152,0.01590044936,0.01505204163,0.01446465851,0.01446465851,0.01362287564,0.01316630449,0.0131708518,0.01339072214,0.01292425264,0.01326288549,0.01310267172,0.01275635365,0.01301010857,0.01291595659,0.01301147064,0.01316110163,0.01317042209,0.0129086465,0.0157293367,0.01571666546,0.0161175296,0.01601398601,0.01620623632,0.01595498179,0.01613637842,0.01595975905,0.01567454382,0.01559251559,0.01575288709,0.01525378687,0.01542630811,0.01580908267,0.01598872528,0.01619052101,0.01612099805,0.01593004632,0.0159018053,0.01556167936,0.01597192097,0.01576927461,0.01576927461,0.01552560647,0.0152587044,0.01522551959,0.01520787386,0.01516915713,0.0150273224,0.01497857969,0.01507584453,0.01488576396,0.01498172592,0.01486034853,0.01486034853,0.01500762106,0.01495175451,0.01481715006,0.01481607629,0.01478680475,0.01490777394,0.01487082194,0.01477737267,0.01467287161,0.01454259871,0.01443713941,0.01442166716,0.01432876857,0.01429770712,0.01422764228,0.01412852567,0.01404084143,0.01398726115,0.0140591752,0.01401398883,0.01406758448,0.01420369446,0.01419211275,0.01412091798,0.01409994155,0.01414968624,0.01424549414,0.01418999761,0.0141732658,0.01441887906,0.01435899838,0.01436328198,0.01433146702,0.01434903807,0.01444582814,0.01439528554,0.01431858288,0.01441152922,0.01454496931,0.01442201996,0.01441256233,0.01449275362,0.01444699165,0.01451048576,0.01466977002,0.01464781556,0.01477042539,0.01472565331,0.01487012172,0.01488745914,0.01488181479,0.01487616928,0.0148428703,0.01487451541,0.01484041472,0.01492084059,0.01483089166,0.01485158424,0.01477959898,0.01480028531,0.01480028531,0.01477842155,0.01475006829,0.01480617896,0.01479146929,0.01478892175,0.01476205026,0.01476205026,0.01471142965,0.01475751488,0.01480180163,0.01476671923,0.01476769912,0.01479609588,0.01483625507,0.01509283724,0.01506072874,0.01505927014,0.01497021958,0.01497618628,0.01502393348,0.01496397882,0.01485029115,0.01481430795,0.01477338411,0.01477274648];
		value4 = [894,961,1087,1348,1449,1515,1640,1793,1874,1978,2168,2400,2511,2609,2690,2775,2919,3137,3235,3832,3926,4025,4157,4295,4433,4571,4709,4847,5117,5386,5631,5786,6245,6706,7060,7414,7823,8124,8364,8898,9274,9769,10191,10684,11149,11682,12309,12604,13092,13478,13807,14022,14300,14624,15105,15369,16103,16715,17316,17838,18815,19188,19862,20577,21247,22083,23101,23708,24676,25357,26317,27071,27825,28836,29687,30379,30918,31476,31979,32237,32783,33107,33512,33814,34116,34511,34892,35232,35437,35619,35842,36204,36530,36926,37265,37513,37826,38118,38376,38716,39029,39250,39476,39746,39950,40060,40445,41003,41064,41273,41557,41790,42051,42375,42691,43096,43401,43766,44165,44459,44767,44964,44964,45486,45724,45954,46238,46587,46831,47106,47392,47604,47814,48027,48314,48534,48845,49010,49190,49394,49761,49961,50272,50472,50780,51088,51254,51465,51719,52066,52364,52692,53020,53261,53507,53905,54240,54609,54933,55258,55575,55846,56245,56690,57242,57605,58046,58457,58822,59163];
		start1 = [5, 1];
		start2 = [5, 1];
		start3 = [5, 1];
		start4 = [5, 1];
		display_pro_1('container_sym_aa_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Addis Ababa');
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		document.getElementById('div1').style.display = 'block';

		document.getElementById('p_na_2').style.display = 'none';
		document.getElementById('p_aa_2').style.display = 'block';
		document.getElementById('re_aa_2').checked = true;
		document.getElementById('re_af_2').checked = false;
		document.getElementById('re_am_2').checked = false;
		document.getElementById('re_be_2').checked = false;
		document.getElementById('re_di_2').checked = false;
		document.getElementById('re_ga_2').checked = false;
		document.getElementById('re_ha_2').checked = false;
		document.getElementById('re_or_2').checked = false;
		document.getElementById('re_si_2').checked = false;
		document.getElementById('re_so_2').checked = false;
		document.getElementById('re_sn_2').checked = false;
		document.getElementById('re_ti_2').checked = false;
		document.getElementById('container_sym_aa_2').style.display = 'block';
		value1 = [0,0,0,0,0,1,3,4];
		value2 =  [3,0,0,2,18,12,15,53];
		display_pro_2('container_sym_aa_2', value1, value2,  'Addis Ababa');
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		document.getElementById('div2').style.display = 'block';
		
		
		
		
		document.getElementById('p_na_3').style.display = 'none';
		document.getElementById('p_aa_3').style.display = 'block';
		document.getElementById('re_aa_3').checked = true;
		document.getElementById('re_af_3').checked = false;
		document.getElementById('re_am_3').checked = false;
		document.getElementById('re_be_3').checked = false;
		document.getElementById('re_di_3').checked = false;
		document.getElementById('re_ga_3').checked = false;
		document.getElementById('re_ha_3').checked = false;
		document.getElementById('re_or_3').checked = false;
		document.getElementById('re_si_3').checked = false;
		document.getElementById('re_so_3').checked = false;
		document.getElementById('re_sn_3').checked = false;
		document.getElementById('re_ti_3').checked = false;
		document.getElementById('container_sym_aa_3').style.display = 'block';
		value1 = 322;
		value2 =  217;
		tc1= 28329;
		tc2 = 21685;
		display_pro_3('container_sym_aa_3', value1, value2,tc1, tc2,  'Addis Ababa');
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		document.getElementById('div3').style.display = 'block';
		
		
		document.getElementById('p_na_4').style.display = 'none';
		document.getElementById('p_aa_4').style.display = 'block';
		document.getElementById('re_aa_4').checked = true;
		document.getElementById('re_af_4').checked = false;
		document.getElementById('re_am_4').checked = false;
		document.getElementById('re_be_4').checked = false;
		document.getElementById('re_di_4').checked = false;
		document.getElementById('re_ga_4').checked = false;
		document.getElementById('re_ha_4').checked = false;
		document.getElementById('re_or_4').checked = false;
		document.getElementById('re_si_4').checked = false;
		document.getElementById('re_so_4').checked = false;
		document.getElementById('re_sn_4').checked = false;
		document.getElementById('re_ti_4').checked = false;
		document.getElementById('container_sym_aa_4').style.display = 'block';
		value1 = 1;
		value1a = 1;
		value2 =  4;
		value3 =  29;
		value4 =  52;
		value5 =  68;
		value6 =  88;
		value7 =  306;
		
		display_pro_4('container_sym_aa_4', value1, value1a, value2, value3, value4, value5, value6, value7,  'Addis Ababa');
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		document.getElementById('div4').style.display = 'block';
	}
	
	
}

</script>


</div>
</div>
</div>
</div>
</div>

  <div class="row " >

  <div class="col-sm-4">
    <div class="card">
 
      <div class="card-body " >
     <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">General Covid-19 Case Fatality Rate</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href = "https://github.com/owid/covid-19-data/tree/master/public/data">Our World in Data</a>, <a href="https://github.com/CSSEGISandData/COVID-19">COVID-19 Data Repository by the Center for Systems Science and Engineering (CSSE) at Johns Hopkins University</a>, <a href="https://www.who.int/data">World Health Organization (WHO)</a> and <a href="https://www.ephi.gov.et/">Ethiopian Public Health Institute (EPHI)</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> 
	 <p>
  
  \[Fatality Rate (FR) = {Number of deaths(Nd) \over Number of cases(Nc)}\] <br>
   <b> SMAn,j </b> = Simple Moving Average for n days, from Jth data <br>
<b> Di </b> = Daily cases for Ith day, from jth data
	
	 \[SMAn,j = { \sum_{i=j}^n Di}\]
</p>

	</p>
   

  <p id="p_na_1" class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> August 6 to October 6, 2020 the cases and deaths have shown step increment. In these months the death increased by <b> 246%</b>. In this same period the reported number of cases increased by <b>291%</b>. The increment in number of cases was due to the <b>combat testing</b> which was implemented from <b>August 07 to August 31</b>, and led to increment of 145% more cases. Inaddition, the case fatality decreased <b>11.4%</b>. To get more clear understanding, we can look into the total case fatality of August and October months. Throughout August case fatality was about <b>1.5%</b>, but for October it was estimated to be <b>1.3%</b>. This decrease might be due to the <b>interruption of postmortem surveillance</b> which was being implemented in August.</p>
    <p id="p_aa_1" class="card-text" style="display: none"><b style="font-family: 'Roboto Slab', serif;">Results:</b> Consistent and sufficient data was not found for many regions. The cumulative death of Addis Ababa was being reported on a daily basis, and sufficient data was obtained.<br><br>
	<i class="fa fa-lightbulb"></i>  It can be seen from<b> Addis Ababa</b> graph the cumulative death has been progressing fast especially starting from August 1, 2020. A slope of around <b>192%</b> is noticed within one month from <b>August 1 to  Semptember 1, 2020</b>. The trajectory stabilizes again for one month until October 1, 2020 and an increase is again observed until November 17, 2020 which is about <b>51%.</b> 
	<br><br><i class="fa fa-lightbulb"></i>  Concerning Cumulative Cases of Addis Ababa, it can be noticed from Addis Ababa graph that there exists a sharp increase from <b>July 13 to August 27, 2020 from 2,117 cases to 27,825</b>. A change of about <b>444%</b> was attained within <b>44 days</b>. This is might be due to the start of Combat testing campaign.
	
	Case fatality of Addis Ababa, showed a highest increment at <b>August 1 to August 2, 2020 from 0.013 to 0.016,</b> which can be observed as a sharp increase.
<br><br> <i class="fa fa-lightbulb"></i>  Comparing Case Fatality of Addis Ababa to other large regions like Oromia and Amhara, case fatality of Addis Ababa maintains consistency. However, in these regions the case fatality is showing currently moderate increment.<br><br>
<i class="fa fa-lightbulb"></i>  In <b>Oromia</b> from end of Semptember to start of December the case fatality almost increased by <b>75%</b>. The number of deaths has also been increasing linearly from mid August to the start of December.<br><br>
<i class="fa fa-lightbulb"></i>  In the same period in Amhara, the fatality <b>Doubled.</b> At the start of December there were 65 total deaths in Amhara.<br><br>
<i class="fa fa-lightbulb"></i>  <b>Tigray and SNNPR</b> have shown only very slight increment recently as compared to Addis Ababa in terms of Case Fatality. 
	</p>

  <!--   <p class="card-text">This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.This is Just description on how the viz to the right is done.
This is Just descrip
</P> -->

   
               </div>
			   
			   <div id = "footer_region_1" class="card-footer" style="display:none">
	  
	  <h4 style="font-family: 'Roboto Slab', serif;">Please select a region</h4>
	<hr>
	  <form style="display: inline">
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_aa_1"  onchange="cb___Change(this, 'container_sym_aa_1')">
 <label class="form-check-label" for="re_aa_1">Addis Ababa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_af_1"  onchange="cb___Change(this,  'container_sym_af_1')">
 <label class="form-check-label" for="re_af_1">Afar</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_am_1"  onchange="cb___Change(this, 'container_sym_am_1')">
 <label class="form-check-label" for="re_am_1">Amhara</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_be_1"  onchange="cb___Change(this, 'container_sym_be_1')">
 <label class="form-check-label" for="re_be_1">Benshangul Gumuz</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_di_1"  onchange="cb___Change(this, 'container_sym_di_1')">
 <label class="form-check-label" for="re_di_1">Dire Dawa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ga_1"  onchange="cb___Change(this, 'container_sym_ga_1')">
 <label class="form-check-label" for="re_ga_1">Gambella</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ha_1"  onchange="cb___Change(this, 'container_sym_ha_1')">
 <label class="form-check-label" for="re_ha_1">Harari</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_or_1"  onchange="cb___Change(this, 'container_sym_or_1')">
 <label class="form-check-label" for="re_or_1">Oromia</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_si_1"  onchange="cb___Change(this,  'container_sym_si_1')">
 <label class="form-check-label" for="re_si_1">Sidama</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_so_1"  onchange="cb___Change(this,  'container_sym_so_1')">
 <label class="form-check-label" for="re_so_1">Somali</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_sn_1"  onchange="cb___Change(this, 'container_sym_sn_1')">
 <label class="form-check-label" for="re_sn_1">SNNPR</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ti_1"  onchange="cb___Change(this, 'container_sym_ti_1')">
 <label class="form-check-label" for="re_ti_1">Tigray</label>
</div>
<form>
</div>

    

    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
	  
	  <script>
	  
	  
	  function cb___Change(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == "container_sym_aa_1"){
		value1 = [13,16,21,22,27,31,33,34,35,37,43,48,50,51,52,53,54,55,56,62,63,66,69,73,74,76,78,79,83,84,90,92,94,97,99,101,103,107,112,115,123,128,130,139,144,152,162,166,169,212,217,226,229,237,241,248,257,262,270,281,287,296,314,329,344,356,368,377,384,405,415,424,432,440,452,462,469,473,479,486,488,496,498,505,512,516,517,522,524,531,533,535,536,537,538,541,542,545,546,547,548,549,555,557,562,569,574,579,579,584,592,593,596,611,613,619,622,628,638,640,641,648,654,656,659,666,668,676,687,690,700,701,711,715,719,722,725,729,730,737,738,742,743,747,751,755,756,762,765,770,773,776,780,786,792,796,801,808,815,834,837,841,842,849,860,862,862,866,869,874];
		value2 = [1,2,4];
		value3 = [0.01454138702,0.01664932362,0.01931922723,0.01632047478,0.01863354037,0.0204620462,0.02012195122,0.01896263246,0.01867662753,0.0187057634,0.01983394834,0.0200,0.0199123855,0.01954771943,0.01933085502,0.0190990991,0.01849948613,0.01753267453,0.01731066461,0.01617954071,0.01604686704,0.01639751553,0.01659850854,0.01659850854,0.01659850854,0.01659850854,0.01659850854,0.01629874149,0.01622044167,0.0155959896,0.01598295152,0.01590044936,0.01505204163,0.01446465851,0.01446465851,0.01362287564,0.01316630449,0.0131708518,0.01339072214,0.01292425264,0.01326288549,0.01310267172,0.01275635365,0.01301010857,0.01291595659,0.01301147064,0.01316110163,0.01317042209,0.0129086465,0.0157293367,0.01571666546,0.0161175296,0.01601398601,0.01620623632,0.01595498179,0.01613637842,0.01595975905,0.01567454382,0.01559251559,0.01575288709,0.01525378687,0.01542630811,0.01580908267,0.01598872528,0.01619052101,0.01612099805,0.01593004632,0.0159018053,0.01556167936,0.01597192097,0.01576927461,0.01576927461,0.01552560647,0.0152587044,0.01522551959,0.01520787386,0.01516915713,0.0150273224,0.01497857969,0.01507584453,0.01488576396,0.01498172592,0.01486034853,0.01486034853,0.01500762106,0.01495175451,0.01481715006,0.01481607629,0.01478680475,0.01490777394,0.01487082194,0.01477737267,0.01467287161,0.01454259871,0.01443713941,0.01442166716,0.01432876857,0.01429770712,0.01422764228,0.01412852567,0.01404084143,0.01398726115,0.0140591752,0.01401398883,0.01406758448,0.01420369446,0.01419211275,0.01412091798,0.01409994155,0.01414968624,0.01424549414,0.01418999761,0.0141732658,0.01441887906,0.01435899838,0.01436328198,0.01433146702,0.01434903807,0.01444582814,0.01439528554,0.01431858288,0.01441152922,0.01454496931,0.01442201996,0.01441256233,0.01449275362,0.01444699165,0.01451048576,0.01466977002,0.01464781556,0.01477042539,0.01472565331,0.01487012172,0.01488745914,0.01488181479,0.01487616928,0.0148428703,0.01487451541,0.01484041472,0.01492084059,0.01483089166,0.01485158424,0.01477959898,0.01480028531,0.01480028531,0.01477842155,0.01475006829,0.01480617896,0.01479146929,0.01478892175,0.01476205026,0.01476205026,0.01471142965,0.01475751488,0.01480180163,0.01476671923,0.01476769912,0.01479609588,0.01483625507,0.01509283724,0.01506072874,0.01505927014,0.01497021958,0.01497618628,0.01502393348,0.01496397882,0.01485029115,0.01481430795,0.01477338411,0.01477274648];
		value4 = [894,961,1087,1348,1449,1515,1640,1793,1874,1978,2168,2400,2511,2609,2690,2775,2919,3137,3235,3832,3926,4025,4157,4295,4433,4571,4709,4847,5117,5386,5631,5786,6245,6706,7060,7414,7823,8124,8364,8898,9274,9769,10191,10684,11149,11682,12309,12604,13092,13478,13807,14022,14300,14624,15105,15369,16103,16715,17316,17838,18815,19188,19862,20577,21247,22083,23101,23708,24676,25357,26317,27071,27825,28836,29687,30379,30918,31476,31979,32237,32783,33107,33512,33814,34116,34511,34892,35232,35437,35619,35842,36204,36530,36926,37265,37513,37826,38118,38376,38716,39029,39250,39476,39746,39950,40060,40445,41003,41064,41273,41557,41790,42051,42375,42691,43096,43401,43766,44165,44459,44767,44964,44964,45486,45724,45954,46238,46587,46831,47106,47392,47604,47814,48027,48314,48534,48845,49010,49190,49394,49761,49961,50272,50472,50780,51088,51254,51465,51719,52066,52364,52692,53020,53261,53507,53905,54240,54609,54933,55258,55575,55846,56245,56690,57242,57605,58046,58457,58822,59163];
		start1 = [5, 1];
		start2 = [5, 1];
		start3 = [5, 1];
		start4 = [5, 1];
		document.getElementById('container_sym_aa_1').style.display = 'block';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_aa_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Addis Ababa');
	}
		
	
    else if (id == "container_sym_af_1"){
		value1 = [0,0,0,0,0,0,0,0,1,1,1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5];
		value2 = [1,2,4];
		value3 = [0,0,0,0,0,0,0,0,0.001547987616,0.001317523057,0.001267427123,0.002506265664,0.002487562189,0.002430133657,0.002403846154,0.002352941176,0.00227014756,0.002232142857,0.0022172949,0.001865671642,0.001865671642,0.001692047377,0.001614205004,0.0016,0.001498127341,0.001457725948,0.00143472023,0.00143472023,0.00143472023,0.00143472023,0.00143472023,0.00143472023,0.001416430595,0.001416430595,0.001416430595,0.001415428167,0.001415428167,0.001413427562,0.001376462491,0.001375515818,0.001360544218,0.002704530088,0.002704530088,0.002704530088,0.002686366689,0.002686366689,0.002686366689,0.002686366689,0.002588996764,0.002588996764,0.002588996764,0.002588996764,0.002588996764,0.002587322122,0.002587322122,0.002587322122,0.002583979328,0.002583979328,0.002583979328,0.00322997416,0.00322997416,0.00322997416,0.00322997416,0.00322997416,0.00322997416,0.00322997416,0.00322997416,0.003205128205,0.003166561115,0.003144654088,0.003123048095,0.003088326127,0.00307503075,0.003058103976,0.003058103976,0.003039513678,0.003032140691,0.00300120048,0.002962085308,0.002927400468,0.002915451895,0.002910360885,0.002903600465,0.002893518519,0.002885170225,0.002857142857,0.00285225328,0.002845759818,0.002840909091,0.002839295855,0.00283446712,0.002829654782,0.002826455625,0.002820078962,0.002816901408,0.002813731007,0.002810567735,0.002805836139,0.002801120448,0.002796420582,0.00279173646,0.00278551532,0.002782415136,0.002780867631,0.002779321845,0.002776235425,0.002770083102,0.002770083102,0.002767017156,0.002765486726,0.002762430939,0.002762430939,0.002759381898,0.002756339581];
		value4 = [392,392,392,392,405,490,602,646,646,759,789,798,804,823,832,850,881,896,902,1072,1072,1182,1239,1250,1335,1372,1394,1394,1394,1394,1394,1394,1412,1412,1412,1413,1413,1415,1453,1454,1470,1479,1479,1479,1489,1489,1489,1489,1545,1545,1545,1545,1545,1546,1546,1546,1548,1548,1548,1548,1548,1548,1548,1548,1548,1548,1548,1560,1579,1590,1601,1619,1626,1635,1635,1645,1649,1666,1688,1708,1715,1718,1722,1728,1733,1750,1753,1757,1760,1761,1764,1767,1769,1773,1775,1777,1779,1782,1785,1788,1791,1795,1797,1798,1799,1801,1805,1805,1807,1808,1810,1810,1812,1814];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'block';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_af_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Afar');
	}
	else if (id == "container_sym_am_1"){
		value1 = [0,0,0,0,0,0,0,0,0,0,0,2,3,4,4,4,4,4,4,4,4,4,6,8,8,8,8,9,10,11,11,11,12,13,14,14,14,14,14,15,15,15,16,16,17,17,17,17,18,20,20,20,20,20,20,20,21,23,24,26,27,28,29,30,30,31,32,33,33,36,36,36,36,36,37,42,43,43,43,45,45,46,47,47,48,48,49,49,49,49,49,50,51,51,51,51,51,51,51,55,55,56,56,57,58,59,59,59,60,61,64,65,65,65];
		value2 = [1,2,4];
		value3 = [0,0,0,0,0,0,0,0,0,0,0,0.001129943503,0.001655629139,0.002088772846,0.002057613169,0.002057613169,0.001958863859,0.001830663616,0.001782531194,0.001713062099,0.001659751037,0.001628001628,0.002361275089,0.003087610961,0.002957486137,0.002893309222,0.002808002808,0.003075871497,0.003328894807,0.00350877193,0.003463476071,0.00341191067,0.003722084367,0.004032258065,0.00421179302,0.004196642686,0.004166666667,0.00413467218,0.004087591241,0.004321521175,0.004284490146,0.004233700254,0.004496908375,0.004469273743,0.004714364947,0.004675467547,0.004644808743,0.004584681769,0.004814121423,0.005314908318,0.005259006048,0.005194805195,0.005073566717,0.005013787917,0.004906771344,0.004839099927,0.005028735632,0.005409219191,0.005558128763,0.005803571429,0.005872118312,0.005961251863,0.006054279749,0.006170300288,0.006170300288,0.006115604656,0.006312882225,0.006235827664,0.00613154961,0.006522920819,0.006452769313,0.006413682523,0.006375066407,0.006328001406,0.006458369698,0.007275246839,0.007422751597,0.007361753124,0.007299270073,0.007568113017,0.007551602618,0.007696168646,0.007825507826,0.007808606081,0.00796284008,0.007931262393,0.008065843621,0.008038057743,0.008024893547,0.0080117724,0.007996083551,0.008122157245,0.008261785194,0.00824975736,0.008232445521,0.00821785369,0.00820199421,0.008184882041,0.008180943215,0.008807045637,0.008771929825,0.008917197452,0.008907268968,0.009039010466,0.009187391098,0.009325114588,0.009313338595,0.009292802016,0.009438414346,0.009564126685,0.01003134796,0.01018329939,0.01016737056,0.01015149149];
		value4 = [785,859,931,1010,1100,1193,1276,1343,1455,1565,1649,1770,1812,1915,1944,1944,2042,2185,2244,2335,2410,2457,2541,2591,2705,2765,2849,2926,3004,3135,3176,3224,3224,3224,3324,3336,3360,3386,3425,3471,3501,3543,3558,3580,3606,3636,3660,3708,3739,3763,3803,3850,3942,3989,4076,4133,4176,4252,4318,4480,4598,4697,4790,4862,4862,5069,5069,5292,5382,5519,5579,5613,5647,5689,5729,5773,5793,5841,5891,5946,5959,5977,6006,6019,6028,6052,6075,6096,6106,6116,6128,6156,6173,6182,6195,6206,6218,6231,6234,6245,6270,6280,6287,6306,6313,6327,6335,6349,6357,6378,6380,6383,6393,6403];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'block';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_am_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Amhara');
	}
	else if (id == "container_sym_be_1"){
		value1 = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,3,13,13,13,13,13,13,14,14,14,14,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15,15];
		value2 = [1,2,4];
		value3 = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.001033057851,0.001033057851,0.001033057851,0.001029866117,0.001029866117,0.001015228426,0.001014198783,0.001014198783,0.001012145749,0.001012145749,0.001012145749,0.001012145749,0.001012145749,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00303030303,0.003027245207,0.003024193548,0.003024193548,0.003018108652,0.003018108652,0.003018108652,0.003015075377,0.003015075377,0.003015075377,0.003012048193,0.003012048193,0.003012048193,0.003012048193,0.003012048193,0.003012048193,0.003012048193,0.003012048193,0.003012048193,0.01305220884,0.01305220884,0.01305220884,0.01305220884,0.01305220884,0.01305220884,0.0140562249,0.0140562249,0.0140562249,0.0140562249,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01506024096,0.01512096774,0.01504513541,0.01504513541,0.01498501499,0.01498501499,0.01498501499];
		value4 = [636,636,651,659,672,674,674,680,688,688,697,708,711,723,732,742,752,764,792,794,800,824,861,867,867,890,896,912,927,927,939,939,958,958,958,958,958,958,958,958,963,963,963,963,965,965,968,968,968,971,971,985,986,986,988,988,988,988,988,990,990,990,990,990,990,990,990,990,990,991,992,992,994,994,994,995,995,995,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,992,997,997,1001,1001,1001];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'block';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_be_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Beninshangul Gumuz');
	}
		
	else if (id == "container_sym_di_1"){
		value1 = [0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,3,4,5,5,6,7,8,9,9,9,9,9,9,9,9,9,9,10,10,11,11,11,11,11,12,13,13,13,13,13,13,13,13,13,13,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,14,23,23,23,23,23,23,23,23,23,23,23,23,23,23,24,39,39,39,39,39,39,39,39,39,39,39,39];
		value2 = [1,2,4];
		value3 = [0.00000,0.00000,0.00000,0.00154,0.00149,0.00147,0.00141,0.00137,0.00136,0.00135,0.00128,0.00126,0.00126,0.00120,0.00115,0.00113,0.00110,0.00110,0.00104,0.00103,0.00098,0.00096,0.00094,0.00186,0.00273,0.00362,0.00438,0.00431,0.00510,0.00590,0.00667,0.00750,0.00741,0.00741,0.00741,0.00736,0.00726,0.00722,0.00714,0.00705,0.00698,0.00758,0.00751,0.00816,0.00807,0.00807,0.00796,0.00782,0.00848,0.00872,0.00825,0.00810,0.00757,0.00723,0.00676,0.00649,0.00633,0.00589,0.00574,0.00615,0.00598,0.00586,0.00586,0.00581,0.00568,0.00556,0.00556,0.00552,0.00551,0.00549,0.00547,0.00544,0.00541,0.00537,0.00534,0.00534,0.00531,0.00531,0.00528,0.00526,0.00523,0.00521,0.00519,0.00518,0.00518,0.00515,0.00513,0.00840,0.00838,0.00836,0.00835,0.00832,0.00829,0.00826,0.00823,0.00821,0.00819,0.00819,0.00818,0.00817,0.00815,0.00850,0.01379,0.01379,0.01378,0.01374,0.01374,0.01372,0.01370,0.01368,0.01367,0.01362,0.01362,0.01359];
		value4 = [585,621,647,651,670,680,711,731,737,742,781,794,794,836,868,887,905,911,958,975,1017,1047,1064,1074,1098,1104,1142,1159,1176,1187,1200,1200,1215,1215,1215,1222,1240,1246,1260,1276,1289,1320,1332,1348,1363,1363,1382,1407,1415,1491,1575,1605,1718,1798,1924,2003,2054,2207,2264,2277,2343,2390,2390,2409,2463,2520,2520,2538,2543,2548,2558,2574,2588,2606,2620,2623,2637,2637,2650,2661,2677,2687,2696,2701,2705,2717,2729,2738,2745,2751,2754,2764,2774,2786,2795,2802,2809,2810,2812,2815,2821,2824,2829,2829,2831,2838,2838,2842,2847,2850,2853,2863,2864,2870];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'block';
		display_pro_1('container_sym_di_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Dire Dawa');
	}
	else if (id == "container_sym_ga_1"){
		value1 = [0,0,0,0,0,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2];
		value2 = [1,2,4];
		value3 = [0,0,0,0,0,0,0,0,0,0,0.00143472023,0.001412429379,0.001406469761,0.001383125864,0.001366120219,0.001347708895,0.001329787234,0.001308900524,0.001262626263,0.001259445844,0.00125,0.001213592233,0.001161440186,0.001153402537,0.001153402537,0.001123595506,0.001116071429,0.001096491228,0.001078748652,0.001078748652,0.001064962726,0.001064962726,0.002087682672,0.002087682672,0.002087682672,0.002087682672,0.002087682672,0.002087682672,0.002087682672,0.002087682672,0.002076843198,0.002076843198,0.002076843198,0.002076843198,0.00207253886,0.00207253886,0.002066115702,0.002066115702,0.002066115702,0.002059732235,0.002059732235,0.002030456853,0.002028397566,0.002028397566,0.002024291498,0.002024291498,0.002024291498,0.002024291498,0.002024291498,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.00202020202,0.002018163471,0.002016129032,0.002016129032,0.002012072435,0.002012072435,0.002012072435,0.002010050251,0.002010050251,0.002010050251,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002008032129,0.002016129032,0.002006018054,0.002006018054,0.001998001998,0.001998001998,0.001998001998];
		value4 = [636,636,651,659,672,674,674,680,688,688,697,708,711,723,732,742,752,764,792,794,800,824,861,867,867,890,896,912,927,927,939,939,958,958,958,958,958,958,958,958,963,963,963,963,965,965,968,968,968,971,971,985,986,986,988,988,988,988,988,990,990,990,990,990,990,990,990,990,990,991,992,992,994,994,994,995,995,995,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,996,992,997,997,1001,1001,1001];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'block';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_ga_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Gambella');
	}
	else if (id == "container_sym_ha_1"){
		value1 = [3,5,5,5,5,5,5,5,6,6,6,6,6,6,6,6,6,6,6,6,6,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,10,10,10,10,10,10,10,10,10,10,10,10,10,11,11,11,11,11,11,11,11,11,13,13,13,13,13,13,14,14,15,16,16,17,17,17,17,17,17,17,17,19,19,19,19,19,19,19,19,22,23,23,23,23,24,24,24,24,24,24,24,24,24,25,26,27,27,27,27,27,27,27,27,27,27,27,27,27];
		value2 = [1,2,4];
		value3 = [0.008595988539,0.01373626374,0.01162790698,0.01077586207,0.01063829787,0.00946969697,0.00904159132,0.008305647841,0.009523809524,0.008902077151,0.008645533141,0.007623888183,0.007092198582,0.006880733945,0.006857142857,0.006703910615,0.006550218341,0.005923000987,0.005545286506,0.005258545136,0.005240174672,0.005907172996,0.005533596838,0.005413766435,0.005380476556,0.005299015897,0.005279034691,0.005219985086,0.005162241888,0.005120702268,0.00487804878,0.004854368932,0.004854368932,0.004814305365,0.004784688995,0.004748982361,0.006734006734,0.006653359947,0.006613756614,0.006613756614,0.006583278473,0.006583278473,0.006553079948,0.006553079948,0.006506180872,0.006497725796,0.006489292667,0.006476683938,0.00645994832,0.006707317073,0.006602641056,0.006447831184,0.005997818975,0.005765199161,0.005603667855,0.005535983895,0.005442850074,0.005332040717,0.005911778081,0.00569675723,0.005659555943,0.005531914894,0.005341002465,0.005323505324,0.005702647658,0.005595523581,0.005995203837,0.006382130036,0.006374501992,0.006764822921,0.006738010305,0.006727344677,0.006722024516,0.006716712762,0.006695549429,0.006682389937,0.006682389937,0.007468553459,0.007439310885,0.007424775303,0.007421875,0.007421875,0.01217948718,0.007413187671,0.007404520655,0.008550330354,0.008914728682,0.008883738895,0.008849557522,0.008819018405,0.009198926792,0.009174311927,0.009125475285,0.009101251422,0.009084027252,0.009073724008,0.009066868153,0.00906002265,0.009046362608,0.009380863039,0.009615384615,0.009985207101,0.009974141116,0.009959424567,0.009955752212,0.009952082565,0.009952082565,0.009930121368,0.009922822492,0.009922822492,0.009908256881,0.009900990099,0.009893733968,0.01139240506];
		value4 = [349,364,430,464,470,528,553,602,630,674,694,787,846,872,875,895,916,1013,1082,1141,1145,1185,1265,1293,1301,1321,1326,1341,1356,1367,1435,1442,1442,1454,1463,1474,1485,1503,1512,1512,1519,1519,1526,1526,1537,1539,1541,1544,1548,1640,1666,1706,1834,1908,1963,1987,2021,2063,2199,2282,2297,2350,2434,2442,2455,2502,2502,2507,2510,2513,2523,2527,2529,2531,2539,2544,2544,2544,2554,2559,2560,2560,1560,2563,2566,2573,2580,2589,2599,2608,2609,2616,2630,2637,2642,2645,2647,2649,2653,2665,2704,2704,2707,2711,2712,2713,2713,2719,2721,2721,2725,2727,2729,2370];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'block';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_ha_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Harari');
	}
	else if (id == "container_sym_or_1"){
		value1 = [0,0,1,1,1,8,9,12,13,13,13,14,16,16,16,16,17,17,17,18,19,19,19,19,20,21,21,21,21,23,23,25,25,29,29,32,32,34,34,37,37,39,41,42,43,44,46,49,49,51,51,51,53,54,54,57,59,59,61,64,65,66,67,70,72,73,75,78,78,78,78,80,81,82,88,88,94,94,96,96,97,97,102,104,105,106,108,108,108,109,112,112,115,117,118,118,118,118,118,120,120,123,123,124,124,129,129,129,129,133,134,135,135,135];
		value2 = [1,2,4];
		value3 = [0,0,0.0004120313144,0.000387897595,0.0003597122302,0.00269996625,0.002822201317,0.003578884581,0.003642476884,0.003279515641,0.003128760529,0.003125,0.003451251079,0.00328407225,0.003147747393,0.00299569369,0.003035714286,0.002903501281,0.002802043844,0.002909796314,0.003009662601,0.002942542977,0.002877479933,0.002817319098,0.00284373667,0.002883823126,0.002696456086,0.002596118185,0.002502979738,0.002669762043,0.002619589977,0.002814998311,0.002802062318,0.003219360568,0.003186463026,0.003471092309,0.003387318726,0.003562447611,0.003535406052,0.003785940857,0.003736996263,0.003833677381,0.003929461376,0.003957783641,0.004017565169,0.004081632653,0.00421477002,0.004404890327,0.004303530652,0.004392764858,0.004349309227,0.004296545914,0.004435146444,0.004390243902,0.004306563522,0.004502725334,0.004631083203,0.004567270475,0.004666819677,0.004865070315,0.004884647178,0.004897595726,0.004899093302,0.005084992009,0.00519180848,0.005186132424,0.005328218244,0.005445026178,0.005371530886,0.005291364222,0.005226831066,0.005323042119,0.005327545383,0.005348291156,0.005700220236,0.005659891948,0.006015615001,0.005979263406,0.006065584128,0.006032424281,0.006066291432,0.006036843415,0.006294353595,0.006388598808,0.006414172266,0.006441811,0.006522920819,0.006493896939,0.006462422212,0.006490413243,0.00663507109,0.006615475487,0.006778262407,0.006858951811,0.006864456079,0.006834240704,0.006804290163,0.006781609195,0.00676256519,0.00685127034,0.006829823563,0.00697713994,0.006941309255,0.006968641115,0.006945222359,0.007204691427,0.007177033493,0.007150379691,0.007086743943,0.00727133563,0.0072735168,0.007293748987,0.007260797074,0.007240547064];
		value4 = [2176,2284,2427,2578,2780,2963,3189,3353,3569,3964,4155,4480,4636,4872,5083,5341,5600,5855,6067,6186,6313,6457,6603,6744,7033,7282,7788,8089,8390,8615,8780,8881,8922,9008,9101,9219,9447,9544,9617,9773,9901,10173,10434,10612,10703,10780,10914,11124,11386,11610,11726,11870,11950,12300,12539,12659,12740,12918,13071,13155,13307,13476,13676,13766,13868,14076,14076,14325,14521,14741,14923,15029,15204,15332,15438,15548,15626,15721,15827,15914,15990,16068,16205,16279,16370,16455,16557,16631,16712,16794,16880,16930,16966,17058,17190,17266,17342,17400,17449,17515,17570,17629,17720,17794,17854,17905,17974,18041,18203,18291,18423,18509,18593,18645];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'block';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_or_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Oromia');
	}
	else if (id == "container_sym_si_1"){
		value1 = [3,5,5,5,5,5,5,5,6,6,6,6,6,6,6,6,6,6,6,6,6,7,7,7,7,7,7,7,7,7,7,7,7,7,7,7,10,10,10,10,10,10,10,10,10,10,10,10,10,11,11,11,11,11,11,11,11,11,13,13,13,13,13,13,14,14,15,16,16,17,17,17,17,17,17,17,17,19,19,19,19,19,19,19,19,22,23,23,23,23,24,24,24,24,24,24,24,24,24,25,26,27,27,27,27,27,27,27,27,27,27,27,27,27];
		value2 = [1,2,4];
		value3 = [0.006651884701,0.01057082452,0.01006036217,0.009596928983,0.00936329588,0.008210180624,0.007552870091,0.006896551724,0.007802340702,0.007672634271,0.007371007371,0.006593406593,0.005865102639,0.005286343612,0.00494641385,0.004754358162,0.004754358162,0.004497751124,0.00439238653,0.004288777698,0.004240282686,0.004844290657,0.004804392588,0.004787961696,0.004623513871,0.004533678756,0.004408060453,0.004318322023,0.004318322023,0.004088785047,0.003993154592,0.003948110547,0.003897550111,0.003884572697,0.003844041735,0.003787878788,0.005393743258,0.005327650506,0.005241090147,0.005167958656,0.005144032922,0.004977600796,0.004928536225,0.004859086492,0.00481000481,0.004780114723,0.004608294931,0.004587155963,0.004587155963,0.005,0.004952723998,0.004899777283,0.004873726185,0.004788855028,0.004755728491,0.004686834256,0.00462962963,0.00461409396,0.005412156536,0.005354200988,0.005301794454,0.005278116119,0.005239822652,0.00522928399,0.005597760896,0.005518328735,0.005847953216,0.006237816764,0.0061514802,0.00649102711,0.00640060241,0.006362275449,0.006317354143,0.006263817244,0.006222547584,0.006069260978,0.006049822064,0.006730428622,0.006627136379,0.006515775034,0.006478008865,0.006434134778,0.00635451505,0.006314390163,0.006289308176,0.007227332457,0.007545931759,0.007489417128,0.00745301361,0.007419354839,0.007672634271,0.007626310772,0.007599746675,0.007507037848,0.007455731594,0.007402837754,0.007384615385,0.007346189164,0.007326007326,0.007605719501,0.007876401091,0.008157099698,0.008157099698,0.008095952024,0.008086253369,0.008071748879,0.008045292014,0.008007117438,0.007992895204,0.007950530035,0.007941176471,0.007924860581,0.007913247362,0.007899356349];
		value4 = [451,473,497,521,534,609,662,725,769,782,814,910,1023,1135,1213,1262,1262,1334,1366,1399,1415,1445,1457,1462,1514,1544,1588,1621,1621,1712,1753,1773,1796,1802,1821,1848,1854,1877,1908,1935,1944,2009,2029,2058,2079,2092,2170,2180,2180,2200,2221,2245,2257,2297,2313,2347,2376,2384,2402,2428,2452,2463,2481,2486,2501,2537,2565,2565,2601,2619,2656,2672,2691,2714,2732,2801,2810,2823,2867,2916,2933,2953,2990,3009,3021,3044,3048,3071,3086,3100,3128,3147,3158,3197,3219,3242,3250,3267,3276,3287,3301,3310,3310,3335,3339,3345,3356,3372,3378,3396,3400,3407,3412,3418];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'block';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_si_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Sidama');
	}
	else if (id == "container_sym_so_1"){
		value1 = [0,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3,3,3,3,3,3,3,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,5,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6,6];
		value2 = [1,2,4];
		value3 = [0,0.001218026797,0.001212121212,0.001183431953,0.001169590643,0.001157407407,0.001112347052,0.001104972376,0.001060445387,0.001027749229,0.001003009027,0.0009940357853,0.0009930486594,0.0009756097561,0.000956937799,0.0009310986965,0.0009066183137,0.0008795074758,0.0008503401361,0.00162601626,0.001597444089,0.001584786054,0.001579778831,0.00154679041,0.001529051988,0.001518602885,0.001510574018,0.001493651979,0.001477104874,0.001469507715,0.00146627566,0.001463057791,0.001458789205,0.001458789205,0.002178649237,0.002178649237,0.002173913043,0.002172338885,0.002170767004,0.002166064982,0.002142857143,0.002142857143,0.002130681818,0.002115655853,0.002115655853,0.002106741573,0.002797202797,0.002793296089,0.002789400279,0.002783576896,0.002772002772,0.002772002772,0.00275862069,0.002752924983,0.002752924983,0.002752924983,0.00272479564,0.002722940776,0.002722940776,0.002719238613,0.002715546504,0.0027100271,0.002702702703,0.00269541779,0.00269541779,0.002686366689,0.002686366689,0.00266844563,0.002663115846,0.002663115846,0.002654280027,0.002643754131,0.00261951539,0.002610966057,0.002605863192,0.002600780234,0.002594033722,0.002564102564,0.002554278416,0.002549394519,0.002542911634,0.00253968254,0.00253968254,0.002538071066,0.002538071066,0.002534854246,0.002530044276,0.002525252525,0.002518891688,0.002510985562,0.0025,0.0025,0.002489110143,0.00248447205,0.002478314746,0.002475247525,0.002470660902,0.003088326127,0.003696857671,0.003692307692,0.003671970624,0.003669724771,0.003658536585,0.003658536585,0.003625377644,0.003623188406,0.003616636528,0.003597122302,0.003592814371,0.003592814371,0.003592814371,0.003592814371,0.003590664273,0.003590664273];
		value4 = [814,821,825,845,855,864,899,905,943,973,997,1006,1007,1025,1045,1074,1103,1137,1176,1230,1252,1262,1266,1293,1308,1317,1324,1339,1354,1361,1364,1367,1371,1371,1377,1377,1380,1381,1382,1385,1400,1400,1408,1418,1418,1424,1430,1432,1434,1437,1443,1443,1450,1453,1453,1453,1468,1469,1469,1471,1473,1476,1480,1484,1484,1489,1489,1499,1502,1502,1507,1513,1527,1532,1535,1538,1542,1560,1566,1569,1573,1575,1575,1576,1576,1578,1581,1584,1588,1593,1600,1600,1607,1610,1614,1616,1619,1619,1623,1625,1634,1635,1640,1640,1655,1656,1659,1668,1670,1670,1670,1670,1671,1671];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'block';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_so_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'Somali');
	}
	else if (id == "container_sym_sn_1"){
		value1 = [0,1,2,2,2,3,4,4,7,7,7,10,10,10,10,10,11,11,11,11,11,11,11,12,12,13,13,13,13,13,13,13,13,13,13,13,13,13,13,13,13,13,14,15,16,18,18,18,18,19,19,19,20,20,20,23,26,26,26,26,26,27,28,28,28,28,29,32,32,32,35,37,37,37,39,39,40,40,40,41,41,41,42,42,42,42,42,42,42,42,42,42,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,44,44,44,44,44,44,44];
		value2 = [1,2,4];
		value3 = [0,0.00283286119,0.005376344086,0.004987531172,0.004454342984,0.006289308176,0.008146639511,0.007448789572,0.01245551601,0.01095461659,0.01044776119,0.01386962552,0.01326259947,0.01246882793,0.01152073733,0.01052631579,0.01065891473,0.01012891344,0.009251471825,0.008587041374,0.008233532934,0.007617728532,0.007333333333,0.007566204288,0.007272727273,0.007575757576,0.007415858528,0.007154650523,0.006914893617,0.006728778468,0.006552419355,0.006397637795,0.006253006253,0.006164058796,0.006140765234,0.006080449018,0.005968778696,0.005901044031,0.00581655481,0.005724350506,0.005659555943,0.005562687206,0.005914659907,0.006263048017,0.006554690701,0.007290400972,0.007142857143,0.00702850449,0.007012076354,0.007333076032,0.0072769054,0.006987863185,0.007293946025,0.007225433526,0.007077140835,0.008025122121,0.009015256588,0.008849557522,0.00871898055,0.008563899868,0.008469055375,0.008653846154,0.008874801902,0.008730901154,0.008583690987,0.008533983542,0.008838768668,0.009549388242,0.009456264775,0.009315866084,0.01017146178,0.0106812933,0.01062607697,0.01058958214,0.01106382979,0.01100762066,0.0112707805,0.01115760112,0.01110802555,0.01132909644,0.01130099228,0.01119301119,0.01142546246,0.01136056262,0.01129639591,0.01124197002,0.01118210863,0.01114058355,0.01110523533,0.0110701107,0.0110439127,0.01101494886,0.01124183007,0.01118044722,0.01115723923,0.01107106076,0.01098620337,0.01096379398,0.01094426063,0.01088332068,0.01086132862,0.01083396321,0.01081761006,0.0108040201,0.01077964402,0.01071517568,0.01066997519,0.01089648341,0.01086419753,0.01083743842,0.01080550098,0.01077375122,0.01076320939,0.01075006108];
		value4 = [350,353,372,401,449,477,491,537,562,639,670,721,754,802,868,950,1032,1086,1189,1281,1336,1444,1500,1586,1650,1716,1753,1817,1880,1932,1984,2032,2079,2109,2117,2138,2178,2203,2235,2271,2297,2337,2367,2395,2441,2469,2520,2561,2567,2591,2611,2719,2742,2768,2826,2866,2884,2938,2982,3036,3070,3120,3155,3207,3262,3281,3281,3351,3384,3435,3441,3464,3482,3494,3525,3543,3549,3585,3601,3619,3628,3663,3676,3697,3718,3736,3756,3770,3782,3794,3803,3813,3825,3846,3854,3884,3914,3922,3929,3951,3959,3969,3975,3980,3989,4013,4030,4038,4050,4060,4072,4084,4088,4093];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'block';
		document.getElementById('container_sym_ti_1').style.display = 'none';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1('container_sym_sn_1', value1, value2,  value3, value4, start1, start2, start3, start4, 'SNNPR');
	}
	else  {
		value1 = [1,2,2,2,2,3,4,5,5,5,5,5,5,5,5,5,6,6,6,6,8,10,10,10,12,12,12,12,12,12,12,12,13,13,13,14,14,14,14,14,16,16,17,17,18,19,19,19,19,19,20,20,20,20,20,20,22,22,22,22,22,23,23,23,23,23,24,24,26,26,26,27,27,27,27,28,29,29,29,29,29,29,29,30,31,31];
		value2 = [1,2,4];
		value3 = [0.0008410428932,0.001594896332,0.001467351431,0.001338688086,0.001183431953,0.001742160279,0.002036659878,0.00229147571,0.002086811352,0.001977066034,0.001784439686,0.001784439686,0.001640419948,0.001537515375,0.001474056604,0.00145137881,0.001715265866,0.001688238604,0.001658833287,0.00162469537,0.002116402116,0.002584647196,0.002512562814,0.002430724356,0.002859185132,0.002791996277,0.002765614197,0.002669039146,0.002578981302,0.002555366269,0.002500520942,0.002461033634,0.002627855266,0.002624671916,0.002590157402,0.002702181046,0.002676864245,0.002633063758,0.00261829063,0.002589236175,0.002934702861,0.002907504997,0.003043322592,0.003022759602,0.003167341193,0.003325166258,0.003310681303,0.003292323687,0.003283221013,0.00325732899,0.003425830764,0.003374388392,0.003390405153,0.003372112629,0.003338898164,0.003326126725,0.003638167686,0.003623785208,0.00361188639,0.003598298986,0.003579563944,0.003730738037,0.003721080731,0.003712671509,0.003687670354,0.003670603256,0.003830194702,0.003796267004,0.004100946372,0.00408548083,0.004073958007,0.004217432052,0.004205607477,0.004205607477,0.004166666667,0.00430504305,0.004453316953,0.004436964504,0.004420731707,0.004407294833,0.004395271294,0.004387291982,0.004381326484,0.004518752824,0.00465325728,0.00465325728];
		value4 = [1189,1254,1363,1494,1690,1722,1964,2182,2396,2529,2802,2802,3048,3252,3392,3445,3498,3554,3617,3693,3780,3869,3980,4114,4197,4298,4339,4496,4653,4696,4799,4876,4947,4953,5019,5181,5230,5317,5347,5407,5452,5503,5586,5624,5683,5714,5739,5771,5787,5833,5838,5927,5899,5931,5990,6013,6047,6071,6091,6114,6146,6165,6181,6195,6237,6266,6266,6322,6340,6364,6382,6402,6420,6420,6480,6504,6512,6536,6560,6580,6598,6610,6619,6639,6662,6662];
		start1 = [7, 11];
		start2 = [7, 11];
		start3 = [7, 11];
		start4 = [7, 11];
		document.getElementById('container_sym_aa_1').style.display = 'none';
		document.getElementById('container_sym_or_1').style.display = 'none';
		document.getElementById('container_sym_si_1').style.display = 'none';
		document.getElementById('container_sym_so_1').style.display = 'none';
		document.getElementById('container_sym_sn_1').style.display = 'none';
		document.getElementById('container_sym_ti_1').style.display = 'block';
		document.getElementById('container_sym_ga_1').style.display = 'none';
		document.getElementById('container_sym_be_1').style.display = 'none';
		document.getElementById('container_sym_am_1').style.display = 'none';
		document.getElementById('container_sym_af_1').style.display = 'none';
		document.getElementById('container_sym_ha_1').style.display = 'none';
		document.getElementById('container_sym_di_1').style.display = 'none';
		display_pro_1("container_sym_ti_1", value1, value2,  value3, value4, start1, start2, start3, start4, 'Tigray');
	}
	
}
	  
	  </script>
    
       <div id="container_case_fatality"></div>
       <div id = "div1" class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85); display: none'></div>
       <div id="container_sym_aa_1" style="display: none"></div>
	   <div id="container_sym_af_1" style="display: none"></div>
	   <div id="container_sym_am_1" style="display: none"></div>
	   <div id="container_sym_be_1" style="display: none"></div>
	   <div id="container_sym_di_1" style="display: none"></div>
	   <div id="container_sym_ga_1" style="display: none"></div>
	   <div id="container_sym_ha_1" style="display: none"></div>
	   <div id="container_sym_or_1" style="display: none"></div>
	   <div id="container_sym_si_1" style="display: none"></div>
	   <div id="container_sym_so_1" style="display: none"></div>
	   <div id="container_sym_sn_1" style="display: none"></div>
	   <div id="container_sym_ti_1" style="display: none"></div>
      </div>
    </div>
  </div>

  

  
</div>

<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>
<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Age Disagregatted Covid-19 Case Fatality and Different Comorbidities</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b>  <a href="https://www.ephi.gov.et/">Ethiopian Public Health Institute (EPHI)</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Cardio Vascular Diseases (CVD), HIV AIDS, Asthmatic, Diabtes and <a href="" data-toggle="modal" data-target="#exampleModalCenter1">other diseases</a> are registred as an underlying conditions on DHIS-2 survallience Covid-19 data. Few rows in this data do not show wether or not a confirmed case has underlying condition which means they are missing, in this scenario the cases are considered as with no underlying conditions. Seven age groups are considered. Ages <b>less than 1</b>, <b>5 to 14</b>, <b>15 to 24</b>, <b>25 to 34</b>, <b>35 to 44</b>, <b>45 to 59</b> and age <b>greater than 60</b>.   
   <b>CDP</b> = Comorbidity Death Proportion 
   \[CDP = {Deaths \; with \; Comorbidity \over Total \; Deaths}\]


  <p id="p_na_2" class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> The death with underlying conditions for age group <b>45-59</b> is about <b>22%</b>. According to this data, of the 23 confirmed death cases, 5 deaths are registered as with underlying conditions, which is high. For age group greater than <b>60 years</b>, out of 63 confirmed deaths, 6 had underlying conditions, which is almost about <b>10%</b>. </p>
<p id= "p_aa_2" class="card-text" style="display: none"><b style="font-family: 'Roboto Slab', serif;">Results:</b> The data for regions regrading death outcome having underlying comorbidities or no comorbidities is very limited.
In Addis Ababa the death with underlying conditions for age group <b>45-59</b> is about <b>17%</b>. According to this data, of the 18 confirmed death cases, 3 deaths are registered as with underlying conditions, which is high. For age group greater than <b>60 years</b>, out of 57 confirmed deaths, 4 had underlying conditions, which is almost about <b>7%</b>.
</p>

	  
	 <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: 'Roboto Slab', serif;">Underlying Conditions:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         The diseases are:<br><br><b><ul><li></b> Hypertension, Stroke</li> <br><b><li></b>Diabetic</li>
		  <br><b><li></b>Chronic Respiratory</li>
		   <br><b><li></b>Chronic Heart  Disease</li>
		    <br><b><li></b>Hypertension, Diabetes Mellitus</li>
			 <br><b><li></b>Diabetes Mellitus, Chronic Heart Disease</li>
			  <br><b><li></b>RVI,DM,Hypertension</li>
			   <br><b><li></b>HELLP syndrome, preeclampsia</li>
			    <br><b><li></b>Diabetes Mellitus (DM), (Hypertension) HTN and Kidney disease</li>
				 <br><b><li></b>General body weakness, vomiting, Dyspnea, Abnormal lung Auscuiltation</li>
				  <br><b><li></b>Hypo thyriodism</li>
				   <br><b><li></b>Bronchitis and etc.</li>
		 
		 
		 </ul></p>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 </div>
 
 <div id = "footer_region_2" class="card-footer" style="display:none">
	  
	  <h4 style="font-family: 'Roboto Slab', serif;">Please select a region</h4>
	<hr>
	  <form style="display: inline">
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_aa_2"  onchange="cb____Change(this, 'container_sym_aa_2')">
 <label class="form-check-label" for="re_aa_2">Addis Ababa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_af_2"  onchange="cb____Change(this,  'container_sym_af_2')">
 <label class="form-check-label" for="re_af_2">Afar</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_am_2"  onchange="cb____Change(this, 'container_sym_am_2')">
 <label class="form-check-label" for="re_am_2">Amhara</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_be_2"  onchange="cb____Change(this, 'container_sym_be_2')">
 <label class="form-check-label" for="re_be_2">Benshangul Gumuz</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_di_2"  onchange="cb____Change(this, 'container_sym_di_2')">
 <label class="form-check-label" for="re_di_2">Dire Dawa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ga_2"  onchange="cb____Change(this, 'container_sym_ga_2')">
 <label class="form-check-label" for="re_ga_2">Gambella</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ha_2"  onchange="cb____Change(this, 'container_sym_ha_2')">
 <label class="form-check-label" for="re_ha_2">Harari</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_or_2"  onchange="cb____Change(this, 'container_sym_or_2')">
 <label class="form-check-label" for="re_or_2">Oromia</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_si_2"  onchange="cb____Change(this,  'container_sym_si_2')">
 <label class="form-check-label" for="re_si_2">Sidama</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_so_2"  onchange="cb____Change(this,  'container_sym_so_2')">
 <label class="form-check-label" for="re_so_2">Somali</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_sn_2"  onchange="cb____Change(this, 'container_sym_sn_2')">
 <label class="form-check-label" for="re_sn_2">SNNPR</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ti_2"  onchange="cb____Change(this, 'container_sym_ti_2')">
 <label class="form-check-label" for="re_ti_2">Tigray</label>
</div>
<form>
</div>
 
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
     <script>
	  
	  
	  function cb____Change(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == "container_sym_aa_2"){
		value1 = [0,0,0,0,0,1,3,4];
		value2 =  [3,0,0,2,18,12,15,53];
		
		document.getElementById('container_sym_aa_2').style.display = 'block';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_aa_2', value1, value2, 'Addis Ababa');
	}
		
	
    else if (id == "container_sym_af_2"){
		value1 = [0,0,0,0,0,0,0];
		value2 =  [0,0,0,0,0,0,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'block';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_af_2', value1, value2,  'Afar');
	}
	else if (id == "container_sym_am_2"){
		value1 = [0,0,0,0,0,0,0,1];
		value2 =  [0,0,0,0,1,1,1,2];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'block';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_am_2', value1, value2, 'Amhara');
	}
	else if (id == "container_sym_be_2"){
		value1 = [0,0,0,0,0,0,0];
		value2 =  [0,0,0,0,0,0,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'block';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_be_2', value1, value2, 'Beninshangul Gumuz');
	}
		
	else if (id == "container_sym_di_2"){
		value1 = [0,0,0,0,0,0,0];
		value2 =  [0,0,0,0,0,1,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'block';
		display_pro_2('container_sym_di_2', value1, value2, 'Dire Dawa');
	}
	else if (id == "container_sym_ga_2"){
		value1 = [0,0,0,0,0,0,0];
		value2 =  [0,0,0,0,0,0,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'block';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_ga_2', value1, value2, 'Gambella');
	}
	else if (id == "container_sym_ha_2"){
		value1 = [0,0,0,0,0,0,0];
		value2 =  [1,0,0,1,0,0,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'block';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_ha_2', value1, value2, 'Harari');
	}
	else if (id == "container_sym_or_2"){
		value1 = [0,0,0,0,0,1,0,1];
		value2 =  [0,0,0,0,0,3,1,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'block';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_or_2', value1, value2, 'Oromia');
	}
	else if (id == "container_sym_si_2"){
		value1 = [0,0,0,0,0,0,0];
		value2 =  [0,0,0,0,0,0,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'block';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_si_2', value1, value2, 'Sidama');
	}
	else if (id == "container_sym_so_2"){
		value1 = [0,0,0,0,1,0,2,0];
		value2 =  [0,0,0,0,0,0,0,2];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'block';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_so_2', value1, value2, 'Somali');
	}
	else if (id == "container_sym_sn_2"){
		value1 = [0,0,0,0,0,0,0];
		value2 =  [0,0,0,0,0,0,0];
		
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'block';
		document.getElementById('container_sym_ti_2').style.display = 'none';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2('container_sym_sn_2', value1, value2, 'SNNPR');
	}
	else  {
		value1 = [0,0,1,0,0,0,0,0];
		value2 =  [0,0,0,0,1,0,0,0];
		document.getElementById('container_sym_aa_2').style.display = 'none';
		document.getElementById('container_sym_or_2').style.display = 'none';
		document.getElementById('container_sym_si_2').style.display = 'none';
		document.getElementById('container_sym_so_2').style.display = 'none';
		document.getElementById('container_sym_sn_2').style.display = 'none';
		document.getElementById('container_sym_ti_2').style.display = 'block';
		document.getElementById('container_sym_ga_2').style.display = 'none';
		document.getElementById('container_sym_be_2').style.display = 'none';
		document.getElementById('container_sym_am_2').style.display = 'none';
		document.getElementById('container_sym_af_2').style.display = 'none';
		document.getElementById('container_sym_ha_2').style.display = 'none';
		document.getElementById('container_sym_di_2').style.display = 'none';
		display_pro_2("container_sym_ti_2", value1, value2, 'Tigray');
	}
	
}
	  
	  </script>
      <div id="container_com_age"></div>
       <div id = "div2" class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85); display: none'></div>
       <div id="container_sym_aa_2" style="display: none"></div>
	   <div id="container_sym_af_2" style="display: none"></div>
	   <div id="container_sym_am_2" style="display: none"></div>
	   <div id="container_sym_be_2" style="display: none"></div>
	   <div id="container_sym_di_2" style="display: none"></div>
	   <div id="container_sym_ga_2" style="display: none"></div>
	   <div id="container_sym_ha_2" style="display: none"></div>
	   <div id="container_sym_or_2" style="display: none"></div>
	   <div id="container_sym_si_2" style="display: none"></div>
	   <div id="container_sym_so_2" style="display: none"></div>
	   <div id="container_sym_sn_2" style="display: none"></div>
	   <div id="container_sym_ti_2" style="display: none"></div>
      </div>
    </div>
  </div>

  

  
</div>
  
<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>

<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;"> Sex Disagregatted Covid-19 Case Fatality</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b>  <a href="https://www.ephi.gov.et">Ethiopian Public Health Institute (EPHI)</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Identifying and counting number of cases and deaths registered for each sex group, and simply calculating percentage values. 
   \[DiM = {Male Deaths \over Total Deaths}\]
<b>DiM</b> = Death in Male
\[DiF = {Female Deaths \over Total Deaths}\]
<b>DiF</b> = Death in Female
  <p id="p_na_3" class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b>  <b>468 deaths</b> of Male was registered out of <b>53,228 total confirmed cases</b>. <b>269 deaths</b> of Female was registered out of <b>33,742 total confirmed cases</b>. However looking into their case fatality rate, both has the close value, <b>0.88% and 0.8%</b>.for male and female respectively This shows both sex would have the same number of deaths from the same number of confirmed cases. But looking into their unweighted death, Males have almost about <b>74% more deaths</b> compared to that of Females.</p>
  <p id="p_aa_3" class="card-text" style="display: none"><b style="font-family: 'Roboto Slab', serif;">Results:</b>  Almost in all regions the case fatality of both genders are very close to each other, but Male case fatality is slightly higher except for very few regions.
<br><br><i class="fa fa-lightbulb"></i>  The highest case fatality recorded are 1.48%, 1.18% and 1.14% for the <b>male</b> gender in <b>Harari, Somali and Addis Ababa</b> respectively. 
<br><br><i class="fa fa-lightbulb"></i>  The only region which has the highest number of female cases compared to that of male cases is <b>Benishangul Gumuz</b>, almost <b>75% more cases</b>.
<br><br><i class="fa fa-lightbulb"></i>  Tigray has the smallest case fatality for both genders compared to all other regions. The case fatality for female is <b>0.22%</b> and for male is <b>0.44%</b>. 
<br><br><i class="fa fa-lightbulb"></i>  Oromia has also small case fatality ratio. The case fatality for female in Oromia is <b>0.49%</b> and for male is <b>0.45%</b>. Female case fatality in Oromia is <b>0.04%</b> higher than that of the male gender.
<br><br><i class="fa fa-lightbulb"></i>  In addition in SNNPR case fatality for female gender is <b>0.23%</b> higher than that of the male gender. 
<br><br><i class="fa fa-lightbulb"></i>  Amhara is also one of the regions with small case fatality number, <b>0.5% and 0.7%</b> for female and male respectively.
 </p>

 </div>
 
 <div id = "footer_region_3" class="card-footer" style="display:none">
	  
	  <h4 style="font-family: 'Roboto Slab', serif;">Please select a region</h4>
	<hr>
	  <form style="display: inline">
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_aa_3"  onchange="cbChange3(this, 'container_sym_aa_3')">
 <label class="form-check-label" for="re_aa_3">Addis Ababa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_af_3"  onchange="cbChange3(this,  'container_sym_af_3')">
 <label class="form-check-label" for="re_af_3">Afar</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_am_3"  onchange="cbChange3(this, 'container_sym_am_3')">
 <label class="form-check-label" for="re_am_3">Amhara</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_be_3"  onchange="cbChange3(this, 'container_sym_be_3')">
 <label class="form-check-label" for="re_be_3">Benshangul Gumuz</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_di_3"  onchange="cbChange3(this, 'container_sym_di_3')">
 <label class="form-check-label" for="re_di_3">Dire Dawa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ga_3"  onchange="cbChange3(this, 'container_sym_ga_3')">
 <label class="form-check-label" for="re_ga_3">Gambella</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ha_3"  onchange="cbChange3(this, 'container_sym_ha_3')">
 <label class="form-check-label" for="re_ha_3">Harari</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_or_3"  onchange="cbChange3(this, 'container_sym_or_3')">
 <label class="form-check-label" for="re_or_3">Oromia</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_si_3"  onchange="cbChange3(this,  'container_sym_si_3')">
 <label class="form-check-label" for="re_si_3">Sidama</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_so_3"  onchange="cbChange3(this,  'container_sym_so_3')">
 <label class="form-check-label" for="re_so_3">Somali</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_sn_3"  onchange="cbChange3(this, 'container_sym_sn_3')">
 <label class="form-check-label" for="re_sn_3">SNNPR</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ti_3"  onchange="cbChange3(this, 'container_sym_ti_3')">
 <label class="form-check-label" for="re_ti_3">Tigray</label>
</div>
<form>
</div>
 
 
 
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    <script>
	  
	  
	  function cbChange3(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == "container_sym_aa_3"){
		value1 = 322;
		value2 =  217;
		tc1= 28329;
		tc2 = 21685;
		document.getElementById('container_sym_aa_3').style.display = 'block';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_aa_3', value1, value2,tc1,tc2, 'Addis Ababa');
	}
		
	
    else if (id == "container_sym_af_3"){
		value1 = 1;
		value2 =  1;
		tc1= 268;
		tc2 = 126;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'block';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_af_3', value1, value2, tc1, tc2,  'Afar');
	}
	else if (id == "container_sym_am_3"){
		value1 = 32;
		value2 =  8;
		tc1= 4453;
		tc2 = 1574;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'block';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_am_3', value1, value2,tc1, tc2, 'Amhara');
	}
	else if (id == "container_sym_be_3"){
		value1 = 0;
		value2 =  1;
		tc1= 641;
		tc2 = 1123;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'block';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_be_3', value1, value2,tc1,tc2, 'Beninshangul Gumuz');
	}
		
	else if (id == "container_sym_di_3"){
		value1 = 1;
		value2 =  0;
		tc1= 65;
		tc2 = 20;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'block';
		display_pro_3('container_sym_di_3', value1, value2,tc1, tc2, 'Dire Dawa');
	}
	else if (id == "container_sym_ga_3"){
		value1 = 1;
		value2 =  0;
		tc1= 529;
		tc2 = 394;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'block';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_ga_3', value1, value2,tc1, tc2, 'Gambella');
	}
	else if (id == "container_sym_ha_3"){
		value1 = 15;
		value2 =  6;
		tc1= 1013;
		tc2 = 623;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'block';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_ha_3', value1, value2,tc1, tc2, 'Harari');
	}
	else if (id == "container_sym_or_3"){
		value1 = 50;
		value2 =  24;
		tc1= 10990;
		tc2 = 4875;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'block';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_or_3', value1, value2,tc1, tc2, 'Oromia');
	}
	else if (id == "container_sym_si_3"){
		value1 = 0;
		value2 =  0;
		tc1= 178;
		tc2 = 94;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'block';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_si_3', value1, value2,tc1, tc2, 'Sidama');
	}
	else if (id == "container_sym_so_3"){
		value1 = 14;
		value2 =  4;
		tc1= 1180;
		tc2 = 438;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'block';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_so_3', value1, value2,tc1, tc2, 'Somali');
	}
	else if (id == "container_sym_sn_3"){
		value1 = 3;
		value2 =  2;
		tc1= 563;
		tc2 = 263;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'block';
		document.getElementById('container_sym_ti_3').style.display = 'none';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3('container_sym_sn_3', value1, value2, tc1, tc2,'SNNPR');
	}
	else  {
		value1 = 19;
		value2 = 5;
		tc1= 4295;
		tc2 = 2302;
		document.getElementById('container_sym_aa_3').style.display = 'none';
		document.getElementById('container_sym_or_3').style.display = 'none';
		document.getElementById('container_sym_si_3').style.display = 'none';
		document.getElementById('container_sym_so_3').style.display = 'none';
		document.getElementById('container_sym_sn_3').style.display = 'none';
		document.getElementById('container_sym_ti_3').style.display = 'block';
		document.getElementById('container_sym_ga_3').style.display = 'none';
		document.getElementById('container_sym_be_3').style.display = 'none';
		document.getElementById('container_sym_am_3').style.display = 'none';
		document.getElementById('container_sym_af_3').style.display = 'none';
		document.getElementById('container_sym_ha_3').style.display = 'none';
		document.getElementById('container_sym_di_3').style.display = 'none';
		display_pro_3("container_sym_ti_3", value1, value2,tc1, tc2, 'Tigray');
	}
	
}
	  
	  </script>
      <div id="container_sex"></div>
       <div id = "div3" class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85); display: none'></div>
       <div id="container_sym_aa_3" style="display: none"></div>
	   <div id="container_sym_af_3" style="display: none"></div>
	   <div id="container_sym_am_3" style="display: none"></div>
	   <div id="container_sym_be_3" style="display: none"></div>
	   <div id="container_sym_di_3" style="display: none"></div>
	   <div id="container_sym_ga_3" style="display: none"></div>
	   <div id="container_sym_ha_3" style="display: none"></div>
	   <div id="container_sym_or_3" style="display: none"></div>
	   <div id="container_sym_si_3" style="display: none"></div>
	   <div id="container_sym_so_3" style="display: none"></div>
	   <div id="container_sym_sn_3" style="display: none"></div>
	   <div id="container_sym_ti_3" style="display: none"></div>
      </div>
    </div>
  </div>

  

  
</div>
<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>

<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">General Age Disagregatted Covid-19 Case Fatality</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b><a href="https://www.ephi.gov.et/"> Ethiopian Public Health Institute (EPHI)</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Identifying and counting number of cases and deaths registered for each age group, and simply calculating percentage values. 
   \[DiAj = {Deaths of j age \over Total Deaths}\]
<b>DiAj</b> = Death in Age Group j

  <p id = "p_na_4" class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b>  2 deaths of under one was registered out of 714 total confirmed cases. 3 deaths of 1 to 4 age group was registered out of 1,054 total confirmed cases. 6 deaths of 5 to 14 age group was registered out of 2,869 total confirmed cases. 44 deaths of 15 to 24 age group was registered out of 20,887 total confirmed cases. The case fatalities are 0.280%, 0.285%, 0.209%, 0.211% for under 1, 1 to 4, 5 to 14 and 15 to 24 respectively. This surely shows case fatality (severity) on younger portion of the popullation is minimum. 79 deaths of 25 to 34 was registered out of 28,751 total confirmed cases. 95 deaths of 35 to 44 age group was registered out of 14,889 total confirmed cases.  126 deaths of 45 to 59 age group was registered out of 10,899 total confirmed cases.  376 deaths of above 60 age group was registered out of 6,968 total confirmed cases. The case fatalities are 0.275%, 0.638%, 1.166%, 5.4% for 25 to 34, 35 to 44, 45 to 59 and above 60 respectively. Eventhough in older ages small number of cases are reported, but the fatality rates are much higher. For instance case severity of age group <b>above 60</b> is <b> 5 to 25 </b> times than that of case severity compared to other age groups. </p>
  <p id = "p_aa_4" class="card-text" style="display: none"><b style="font-family: 'Roboto Slab', serif;">Results:</b> For all regions also case fatality is high in older ages compared to other age groups. For instance, in <b>Addis Ababa</b> 
  the fatality proportion in age group <b>>60 is 6%</b>, which is almost <b>5 - 27</b> times higher. The two regions with highest case fatality in older ages <b>(>60)</b> are <b>Somali and Harari.</b>,
  with <b>10.2% (9 deaths from 88 cases) and 8% (9 deaths from 108 cases).</b> Lack of consitent data for all regions, case and death under reporting are the two main set-backs for this study.
  </p>

 </div>
 
 <div id = "footer_region_4" class="card-footer" style="display:none">
	  
	  <h4 style="font-family: 'Roboto Slab', serif;">Please select a region</h4>
	<hr>
	  <form style="display: inline">
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_aa_4"  onchange="cbChange4(this, 'container_sym_aa_4')">
 <label class="form-check-label" for="re_aa_4">Addis Ababa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_af_4"  onchange="cbChange4(this,  'container_sym_af_4')">
 <label class="form-check-label" for="re_af_4">Afar</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_am_4"  onchange="cbChange4(this, 'container_sym_am_4')">
 <label class="form-check-label" for="re_am_4">Amhara</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_be_4"  onchange="cbChange4(this, 'container_sym_be_4')">
 <label class="form-check-label" for="re_be_4">Benshangul Gumuz</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_di_4"  onchange="cbChange4(this, 'container_sym_di_4')">
 <label class="form-check-label" for="re_di_4">Dire Dawa</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ga_4"  onchange="cbChange4(this, 'container_sym_ga_4')">
 <label class="form-check-label" for="re_ga_4">Gambella</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ha_4"  onchange="cbChange4(this, 'container_sym_ha_4')">
 <label class="form-check-label" for="re_ha_4">Harari</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_or_4"  onchange="cbChange4(this, 'container_sym_or_4')">
 <label class="form-check-label" for="re_or_4">Oromia</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_si_4"  onchange="cbChange4(this,  'container_sym_si_4')">
 <label class="form-check-label" for="re_si_4">Sidama</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_so_4"  onchange="cbChange4(this,  'container_sym_so_4')">
 <label class="form-check-label" for="re_so_4">Somali</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_sn_4"  onchange="cbChange4(this, 'container_sym_sn_4')">
 <label class="form-check-label" for="re_sn_4">SNNPR</label>
</div>
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="re_ti_4"  onchange="cbChange4(this, 'container_sym_ti_4')">
 <label class="form-check-label" for="re_ti_4">Tigray</label>
</div>
<form>
</div>
 
 
 
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    <script>
	  
	  
	  function cbChange4(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == "container_sym_aa_4"){
		value1 = 1;
		value1a = 1;
		value2 =  4;
		value3 =  29;
		value4 =  52;
		value5 =  68;
		value6 =  88;
		value7 =  306;
		document.getElementById('container_sym_aa_4').style.display = 'block';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_aa_4', value1, value1a, value2,value3, value4, value5, value6, value7, 'Addis Ababa');
	}
		
	
    else if (id == "container_sym_af_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  0;
		value4 =  0;
		value5 =  0;
		value6 =  1;
		value7 =  1;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'block';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_af_4', value1, value1a, value2,value3, value4, value5, value6, value7,  'Afar');
	}
	else if (id == "container_sym_am_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  0;
		value4 =  4;
		value5 =  5;
		value6 =  10;
		value7 =  21;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'block';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_am_4', value1, value1a, value2,value3, value4, value5, value6, value7, 'Amhara');
	}
	else if (id == "container_sym_be_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  0;
		value4 =  0;
		value5 =  0;
		value6 =  1;
		value7 =  0;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'block';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_be_4', value1, value1a, value2,value3, value4, value5, value6, value7, 'Beninshangul Gumuz');
	}
		
	else if (id == "container_sym_di_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  0;
		value4 =  0;
		value5 =  0;
		value6 =  1;
		value7 =  0;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'block';
		display_pro_4('container_sym_di_4', value1, value1a, value2,value3, value4, value5, value6, value7, 'Dire Dawa');
	}
	else if (id == "container_sym_ga_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  0;
		value4 =  0;
		value5 =  0;
		value6 =  0;
		value7 =  1;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'block';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_ga_4', value1, value1a, value2,value3, value4, value5, value6, value7, 'Gambella');
	}
	else if (id == "container_sym_ha_4"){
		value1 = 1;
		value1a = 1;
		value2 =  0;
		value3 =  1;
		value4 =  4;
		value5 =  2;
		value6 =  3;
		value7 =  9;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'block';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_ha_4',value1, value1a, value2,value3, value4, value5, value6, value7, 'Harari');
	}
	else if (id == "container_sym_or_4"){
		value1 = 0;
		value1a = 1;
		value2 =  0;
		value3 =  11;
		value4 =  12;
		value5 =  20;
		value6 =  15;
		value7 =  15;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'block';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_or_4', value1, value1a, value2,value3, value4, value5, value6, value7, 'Oromia');
	}
	else if (id == "container_sym_si_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  0;
		value4 =  0;
		value5 =  0;
		value6 =  0;
		value7 =  0;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'block';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_si_4', value1, value1a, value2,value3, value4, value5, value6, value7, 'Sidama');
	}
	else if (id == "container_sym_so_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  1;
		value4 =  3;
		value5 =  1;
		value6 =  4;
		value7 =  9;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'block';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_so_4', value1, value1a, value2,value3, value4, value5, value6, value7,'Somali');
	}
	else if (id == "container_sym_sn_4"){
		value1 = 0;
		value1a = 0;
		value2 =  0;
		value3 =  1;
		value4 =  2;
		value5 =  1;
		value6 =  1;
		value7 =  0;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'block';
		document.getElementById('container_sym_ti_4').style.display = 'none';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4('container_sym_sn_4', value1, value1a, value2,value3, value4, value5, value6, value7,'SNNPR');
	}
	else  {
		value1 = 0;
		value1a = 0;
		value2 =  2;
		value3 =  1;
		value4 =  2;
		value5 =  3;
		value6 =  2;
		value7 =  14;
		document.getElementById('container_sym_aa_4').style.display = 'none';
		document.getElementById('container_sym_or_4').style.display = 'none';
		document.getElementById('container_sym_si_4').style.display = 'none';
		document.getElementById('container_sym_so_4').style.display = 'none';
		document.getElementById('container_sym_sn_4').style.display = 'none';
		document.getElementById('container_sym_ti_4').style.display = 'block';
		document.getElementById('container_sym_ga_4').style.display = 'none';
		document.getElementById('container_sym_be_4').style.display = 'none';
		document.getElementById('container_sym_am_4').style.display = 'none';
		document.getElementById('container_sym_af_4').style.display = 'none';
		document.getElementById('container_sym_ha_4').style.display = 'none';
		document.getElementById('container_sym_di_4').style.display = 'none';
		display_pro_4("container_sym_ti_4", value1, value1a, value2,value3, value4, value5, value6, value7, 'Tigray');
	}
	
}
	  
	  </script>
      <div id="container_age"></div>
	    <div id = "div4" class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85); display: none'></div>
       <div id="container_sym_aa_4" style="display: none"></div>
	   <div id="container_sym_af_4" style="display: none"></div>
	   <div id="container_sym_am_4" style="display: none"></div>
	   <div id="container_sym_be_4" style="display: none"></div>
	   <div id="container_sym_di_4" style="display: none"></div>
	   <div id="container_sym_ga_4" style="display: none"></div>
	   <div id="container_sym_ha_4" style="display: none"></div>
	   <div id="container_sym_or_4" style="display: none"></div>
	   <div id="container_sym_si_4" style="display: none"></div>
	   <div id="container_sym_so_4" style="display: none"></div>
	   <div id="container_sym_sn_4" style="display: none"></div>
	   <div id="container_sym_ti_4" style="display: none"></div>
       
      </div>
    </div>
  </div>

  

  
</div>

<div class = "row" style="margin-top: 25px; margin-bottom: 15px">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h2 class="card-title" style="font-family: 'Roboto Slab', serif;">Covid-19 Case Severity in Ethiopia.</h2> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">

    <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_case_cri" style="font-family: 'Dosis', sans-serif; color: white">Number of Cases with Critical or Severe Condition</a></b></h5></li>
 
</ul>
</div>
</div>
</div>
</div>


<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
	  <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Number of Cases with Critical or Severe Condition</h3>
    
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href="https://ephi.gov.et"> Information Network Security Agency (INSA) Covid-19 Tracking Platform</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Critical or severe cases are those who are admitted to Intensive Care Unit (ICU). We assumed 
a critical or severe case at t time is a result of active cases on t-10, which is 10 days before.<br>
      <b>CtA(t)</b> = Critical to Active Case at t time<br>
	  <b>CC(t)</b> = Critical Cases at t time <br>
	  <b>AC(t-10)</b> = Active Cases before 10 days<br>
	   \[CtA(t) = {CC(t) \over AC(t-10)}\]
	   


  </p>
  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> From mid July to mid September the number of active cases showed step increment. During this period active cases increased from <b>3,216 to 38,429</b> cases, which is <b>1095%</b> increase.
  However, from end of October to end of Decemeber the active cases decreased from <b>45,035 to 11,835</b> cases, which is <b>75%</b> decrease. From mid July to mid September the number of critical or severe cases increased from just 33 cases to 344 cases. Throughout December the total critical or severe cases have shown small decrement. 
  But the proportion of critical or severe to active cases increased in this month. This shows the cases registered as critical or severe were high compared to the reported active cases. 
  
  </p>
 </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
      <div id="container_cri"></div>

       
      </div>
    </div>
  </div>

  

  
</div>




<div class = "row" style="margin-top: 25px; margin-bottom: 15px">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h2 class="card-title" style="font-family: 'Roboto Slab', serif;">How to account for case underestimations in Ethiopia?</h2> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_real_death_sero" style="font-family: 'Dosis', sans-serif; color: white">Sero-Pervalance Study in Ethiopia</a></b></h5></li>
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_real_case_sero" style="font-family: 'Dosis', sans-serif; color: white">Adjusted Real Cases in Ethiopia</a></b></h5></li>
</ul>
</div>
</div>
</div>
</div>

<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
	  <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Sero-Pervalance Study in Ethiopia</h3>
    
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href="https://ephi.gov.et"> Ethiopian Public Health Institute (EPHI)</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Seroprevalence refers to the frequency of individuals with antibody to a particular virus in a population, and as neutralizing antibodies often last for many years, or even for life, seroprevalence rates usually represent the cumulative experience within a studied population. 
      <ul><li>Serology tests look for antibodies in blood.</li>
      <li> If antibodies are found, that means there has been a previous infection. and,</li> 
      <li>Antibodies are proteins that can fight off infections.</li></ul>
	  The seroprevalence survey result of the first figure for Ethiopia major cities was conducted in June/July, 2020. But not much infromation is provided regrading the survey design and kits used in the process.
	  The second survey was conducted only in Addis Ababa. IgM-IgG combined with confirmed specificity above 99%. The prelimanary sero-prevalence estimation, was about 3.5% (1.6% - 5.3%).
	  From the second survey, using male and female prevalance we can estimate the total prevelance in the city.
	   \[IP = {(0.031 \times r \times Ap) + (0.04 \times k \times Ap)}\]
	   \[ = {(0.031 \times r + 0.04 \times k)Ap}\]
	    \[ = {y \times Ap}\]
<b>Ip</b> = Infected Proportion of the popullation <br>
<b>Ap</b> = Addis popullation <br>
<b>r</b> = Female Proportion <br>
<b>k</b> = Male Proportion <br>
<b>y</b> = Total Prevalance
  </p>
  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> Using the above indicated method the prevalance for Addis Ababa is about <b>3.55%</b>. When comparing this value to the first survey it is <b>2%</b> more.
  Considering the time the two surveys undergone, this much change  is higly unlikely. Due to lack of enough data we can't say about the accuarcy and survey design for the first one, but we can use the second survey to 
  account for case underestimation in the city. <br>
 \[{(0.0355 \times 4.5 Million)} = {159,750 Cases}\]
<br>
At the end of August the reported confirmed case was 30,918. Assuming the two numbers are mutually execulisive, the underestimation factor is: \[{159,750 \over 30,912} = {5.2}\]<br>
This number shows for one reported confirmed case there are 5 more undetected cases. On the coming months the postivity rate in Addis Ababa remained the same with August or even decreased somehow. This shows
the prevalance in the city was somewhat the same or even smaller than that of August.
  </p>
 </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
      <div id="container_real_death_sero"></div>
	  <div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>
	   <div id="container_real_case_sero"></div>
       
      </div>
    </div>
  </div>

  

  
</div>



<div class = "row" style="margin-top: 25px; margin-bottom: 10px">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h2 class="card-title" style="font-family: 'Roboto Slab', serif;">How Non Pharmaceutical Intervention Compliance and Efficacy Changed Over-time in Ethiopia?</h2> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">
  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_sd_aa" style="font-family: 'Dosis', sans-serif; color: white">Proper Social Distancing Practice in Ethiopia</a></b></h5></li>
<li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_hh_aa" style="font-family: 'Dosis', sans-serif; color: white">Proper Hand Hygiene Practice in Ethiopia</a></b></h5></li>
<li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_rh_aa" style="font-family: 'Dosis', sans-serif; color: white">Proper Respiratory Hygiene Practice in Ethiopia</a></b></h5></li>
<li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#container_sd" style="font-family: 'Dosis', sans-serif; color: white">Impact of Covid-19 Mitigation Policies on Mobility in Ethiopia</a></b></h5></li>
</ul>
</div>
</div>
</div>
</div>
<div class="row " style="margin-bottom: 15px;">
<div class="col-md">
<div class="card" style="background-color: rgb(240, 240, 250, 0.85)">
  
      <div class="card-body " >
	   <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">General Study Design For Measuring Complaince and Efficacy of the NPI's:</b><br> The study involves weekly monitoring of individual behaviors towards the preventive practice of Covid-19 in 15 major cities of Ethiopia, which are, <b>Addis Ababa, Adama, Jimma, Bahir-Dar, Gondar, Hawassa, Wolaita Sodo, Hosaena, Mekelle, Dire-Dawa, Harar, Jigjiga, Gambella, Asossa, and Semera,</b> which can be used to represent the situation at national level. Eight service sectors (hot-spot sites for mobility) are selected based on level of crowding that implies the presence of high risk for the transmission of COVID-19.

The eight sector-facilities are:<b> religious places, banks, market places, transport services, food and drinking establishments, health facilities, workplaces, and selected streets</b>.

A repeated <b>cross-sectional observation design </b> is conducted on weekly basis involving one-week day

and one weekend, as to assess the compliance of Proper practice of the NPI's. Study Population is all individuals visiting the selected eight sites for different Reasons. Study participants are individuals who are found at the selected hotspot sites at the time of observation. There will be <b>10 randomly identified individual</b> per facility to be observed for their behaviors of proper practice of the NPI's on each day of data collection. 
<br>The followings are <b> Non-pharmaceutical Interventions</b> considered for this study:
<ul class="fa-ul">
  <li style="padding: 5px; margin-left: 15px;"><h3><span class="fa-li"><i class="fa fa-people-arrows"></i></span></h3><h6><b style="font-family: 'Dosis', sans-serif; ">Proper Social Distancing Practice</b></h6></li>
<li style="padding: 5px; margin-left: 15px;"><h3><span class="fa-li"><i class="fa fa-hands-wash"></i></span></h3><h6><b style="font-family: 'Dosis', sans-serif; ">Proper Hand Hygiene Practice </b></h6></li>
<li style="padding: 5px; margin-left: 15px;"><h3><span class="fa-li"><i class="fas fa-head-side-mask"></i></span></h3><h6><b style="font-family: 'Dosis', sans-serif; ">Proper Respiratory Hygiene Practice </b></h6></li>

</ul>

</p>
	  </div>
	  </div>
	  </div>
	  </div>
<div class="row " >
  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class = "card-title" style="font-family: 'Roboto Slab', serif;">Proper Social Distancing Practice in Ethiopia</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href="https://aau.edu.et/">Addis Ababa University, Monitoring COVID-19 prevention practice: Hand hygiene, respiratory hygiene, and physical distance in 15 cities of Ethiopia </a>
    <p class="card-text"> <b style="font-family: 'Roboto Slab', serif;"> Methods:</b> Proper Physical distance is a measure whereby a person keeps <b>1 meter </b> away from another person during getting Services, during greetings, during shopping, during discussing, or during praying.
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Weeks</th>
      <th scope="col">Observations</th>
      <th scope="col">Complaince</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>6234</td>
      <td>1397</td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>6210</td>
      <td>1281</td>
      
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>5980</td>
      <td>1188</td>
      
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>6230</td>
      <td>1266</td>
      
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>5980</td>
      <td>1169</td>
      
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>5920</td>
      <td>1160</td>
      
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>5980</td>
      <td>1117</td>
      
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>5880</td>
      <td>1033</td>
      
    </tr>
     <tr>
      <th scope="row">9</th>
      <td>5980</td>
      <td>1030</td>
      
    </tr>
  </tbody>
</table>
</div>
 </p>
   

  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> The output of the study shows proper physical distancing decreased by almost <b>5.2%</b> on ninth week (November 30 to December 06, 2020) compared to the first week (October 5 to October 11, 2020). Eventhough, the decrease might be due to few baises in the study, before and after state of emergence ended it is observed that mobility is highly increasing in Ethiopia.</p>
 </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
      <div id="container_sd_aa"></div>
       
      </div>
    </div>
  </div>

  

  
</div>

<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>
  



<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
     <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Proper Hand Hygiene Practice in Ethiopia</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href="https://aau.edu.et/">Addis Ababa University, Monitoring COVID-19 prevention practice: Hand hygiene, respiratory hygiene, and physical distance in 15 cities of Ethiopia </a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Parctices are considered proper hand hygiene practice when A person washes hands; the front, back, finger tips, rub thumb and
palms with adequate water and detergent at least for 20 -30 seconds or uses sanitizer/hand rub to
the level of compliance before getting in the facility or taking the services.
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Weeks</th>
      <th scope="col">Observations</th>
      <th scope="col">Complaince</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>6234</td>
      <td>553</td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>6210</td>
      <td>461</td>
      
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>4958</td>
      <td>403</td>
      
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>5241</td>
      <td>392</td>
      
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>5082</td>
      <td>353</td>
      
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>5007</td>
      <td>388</td>
      
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>5136</td>
      <td>345</td>
      
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>5003</td>
      <td>319</td>
      
    </tr>
     <tr>
      <th scope="row">9</th>
      <td>5129</td>
      <td>295</td>
      
    </tr>
  </tbody>
</table>
</div>
 </p>
   

  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> Proper hand hygiene is the least practiced intervention compared to others. The output of the study shows proper hand hygiene decreased by almost <b>3.12%</b> on ninth week (November 30 to December 06, 2020) compared to the first week (October 5 to October 11, 2020). This might be hand hygiene protection equipments are less accessible at the locations selected for the study. </p>
 </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
      <div id="container_hh_aa"></div>
       
      </div>
    </div>
  </div>

  

  
</div>
<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>

<div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
     <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">Proper Respiratory Hygiene Practice in Ethiopia</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href="https://aau.edu.et/">Addis Ababa University, Monitoring COVID-19 prevention practice: Hand hygiene, respiratory hygiene, and physical distance in 15 cities of Ethiopia </a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> Parctices  are considered as proper respiratory hygiene when  a person covers the mouth and nose with mask or any type of cloth or handkerchief or tissue. The findings in this study can be used to estimate the complaince of facemask in Ethiopia. 
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Weeks</th>
      <th scope="col">Observations</th>
      <th scope="col">Complaince</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>6234</td>
      <td>2582</td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>6210</td>
      <td>2405</td>
      
    </tr>
     <tr>
      <th scope="row">3</th>
      <td>5980</td>
      <td>2334</td>
      
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>6230</td>
      <td>2407</td>
      
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>5980</td>
      <td>2276</td>
      
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>5920</td>
      <td>2205</td>
      
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>5980</td>
      <td>2015</td>
      
    </tr>
     <tr>
      <th scope="row">8</th>
      <td>5880</td>
      <td>1920</td>
      
    </tr>
     <tr>
      <th scope="row">9</th>
      <td>5980</td>
      <td>2001</td>
      
    </tr>
  </tbody>
</table>
</div>
 </p>
   

  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> Proper respiratory hygiene is the most practiced intervention compared to the others. The output of the study shows proper respiratory hygiene decreased by almost <b>8%</b> on ninth week (November 30 to December 06, 2020) compared to the first week (October 5 to October 11, 2020). </p>
 </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
      <div id="container_rh_aa"></div>
       
      </div>
    </div>
  </div>

  

  
</div>
<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>

  <div class="row " >

  <div class="col-sm-4">
    <div class="card">
  
      <div class="card-body " >
    <h3 class= "card-title" style="font-family: 'Roboto Slab', serif;">Impact of Covid-19 Mitigation Policies on Mobility in Ethiopia</h3>
    <b style="font-family: 'Roboto Slab', serif;">Data Sources:</b> <a href="https://www.google.com/covid19/mobility/">Google Mobility Data </a> and <a href="https://covid19.healthdata.org/ethiopia">
Institute for Health Metrics and Evaluation (IHME)</a>
    <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Methods:</b> IHME used Google mobility report data. The reports chart movement trends over time by geography, across different categories of places such as retail and recreation, groceries and pharmacies, parks, transit stations, workplaces, and residential. </p>
   

  <p class="card-text"><b style="font-family: 'Roboto Slab', serif;">Results:</b> From the mobility data of Ethiopia, we can see that from March 9, 2020 to April 14, 2020 the mobility has declined at a higher rate as Ethiopian government took measures that highly discouraged social mobility.<ul><li>
    Complete school closure at early April
  </li>
  <li>
    Man power in work place almost reduced by half at early April
  </li>
  <li>
     Restriction to reduce of number of vehicles allowed moving per day by half and also restricting the number of people allowed in a vehicle in half as well
  </li>
  <li>
     Suspentons public gatherings like religious institutions, at early April
  </li>
  <li>
    Land borders were also closed on March 23, 2020
  </li>
  <li>
    State of Emergency was Declared by April 8, 2020
  </li>
</ul> Eventhough most of the restriction enforced by the goverment for 6 months starting from April 8, 2020, the socail mobility keeps increasing constantly from Mid April, 2020 to August, 2020.</p>
 </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
    
       <div id="container_sd"></div>
       
      </div>
    </div>
  </div>

</div>
<div class="border border-success" style='margin-top:10px; margin-bottom:15px; height:10px; background-color: rgb(49, 181, 84,0.85)'></div>
<div class = "row" style="margin-top: 25px; margin-bottom: 15px" id = "modelling">
  <div class="col-md">
  <div class="card"  style="background-color: rgb(49, 181, 84,0.85); color: white;">
   <div class="card-body " >
  <h2 class="card-title" style="font-family: 'Roboto Slab', serif;">Covid-19 Modeling and Forecasting at National and Sub-national Levels</h2> 
  <div class="label"> <h5 style="color: rgb(255,250,240,0.85);"> <b>In this section </b></h5>
  
</div>
<div class="border" style="margin-bottom: 5px"></div>
<ul class="fa-ul">

  <li><span class="fa-li"><i class="fa fa-flag"></i></span><h5><b><a href="#ml" style="font-family: 'Dosis', sans-serif; color: white">National Covid-19 Clinical, Severe, Critical Cases and Death Projection</a></b></h5></li>
  <li><span class="fa-li"><i class="fa fa-flag"></i></i></span><h5><b><a href="#ml" style="font-family: 'Dosis', sans-serif; color: white">Sub-national Projection is Cooming Soon  <i class="fas fa-spinner fa-pulse"></i></a></b></h5></li>

</ul>
</div>
</div>
</div>
</div>

<div class="row " style="margin-bottom: 15px;">
<div class="col-md">
<div class="card" style="background-color: rgb(240, 240, 250, 0.85)">
  
      <div class="card-body " >
	   <p class="card-text"><b style="font-family: 'Roboto Slab', serif; font-size: 20px"> <i class="fas fa-cog fa-lg"></i>  Modelling Methods:</b><br><br> We have implemented a <b><a href="" data-toggle="modal" data-target="#exampleModalCenter7">Curve Fitting</a></b>
method to drive the infection rate or transmission rate of the virus at the national level. Then used this transmission rate to calculate force of infection for <b><a href="" data-toggle="modal" data-target="#exampleModalCenter6">Differentail Deterministcs Model.</a> </b>	  
The major draw-back of using curve fitting method is case <b>under reporting</b> due to lack of large scale testing. Throughout <b>August Combat Testing</b> was initiated, and <b>259,289</b>
tests were perfomed. This resulted in increased number of reported cases. Eventhough, the number of test performed during this period is small compared to other developed countries, we used it to 
account for case under reporting. Three scenarios were built to look at the progression in accordance to the Non Pharmaceutical Interventions, which are, Current applied NPI, Mandate easing and Mandate stricting. We used a <b><a href="" data-toggle="modal" data-target="#exampleModalCenter8">Third Order Polynomial Function</a></b> to fit cases through <b>August, and extrapolate</b> into the coming months.
Differential deterministic model with death compartement usually over estimates the projected number of deaths. To overcome this proplem three solutions were proposed:
<ul class="fa-ul">

  <li><span class="fa-li"><i class="fa fa-flag"></i></span>Moving the starting point of the simulation to December 03, 2020 for projecting deaths.</li>
  <li><span class="fa-li"><i class="fa fa-flag"></i></i></span>Varying proportion of death from ICU (Critical Cases) from the smallest percentage of 5% to the largest percentage of 40%.</li>
  <li><span class="fa-li"><i class="fa fa-flag"></i></i></span>Using trend analysis to fit the reported number of deaths with simple <a href="" data-toggle="modal" data-target="#exampleModalCenter9">linear regression.</a></li>

</ul>
<br>

<b style="font-family: 'Roboto Slab', serif; font-size: 20px"> <i class="fas fa-poll fa-lg"></i>  Results and Discussions:</b><br><br> 
<b>Clinical Cases:</b>

 

It is noted that clinical cases increase constantly until Feb 11/2021 under current NPI (19.8% of Physical distancing and 37.6% of Respiratory hygiene.

It is projected that with the current projection, 362,631 clinical cases are expected by Feb 11/2021.

 

Considering mandate easing scenario, which is likely to happen, reveals that Clinical cases will reach 525,000 cases, which is an increase by 45%.

 

For a mandate stricting scenario, 321,483 clinical cases are expected. Case aversion of 41,148 (11%) can be attained.

<br> 

<b>Hospitalized Cases:</b>

 

Hospitalization is expected to increase until Feb 11/2021 under current NPI.

The projection shows 58,832 cases by Feb 11/2021 with the application of current NPIs.  

 

 

Considering mandate easing scenario, which is likely to happen, reveals that Clinical cases will reach 80,885 cases, which is an increase by 37%.

 

For a mandate stricting scenario, 52,997 clinical cases are expected. Case aversion of 5,855 (10%) can be attained.

<br> 

<b>Severe (ICU) Cases:</b>

 

Severe (ICU) case is expected to increase until Feb 11/2021 under current NPI.

The projection shows 12,523 cases by Feb 11/2021 with the application of current NPIs.  

 

 

Considering mandate easing scenario, which is likely to happen, reveals that Severe (ICU) cases will reach 16,389 cases, which is an increase by 31%.

 

For a mandate stricting scenario, 11,472 Severe (ICU) cases are expected. Case aversion of 1,051 (8%) can be attained.

<br>
<b>Death:</b>

 

Death projection is obtained from the Compartmentalized SEIR model. To crosscheck, linear Regression, trend analysis was used which projected an estimate of 2,430 deaths.

 

Since the proportion of death/ICU is highly inconsistent, and there is lack of credible data on the proportionality, four proportions 40%,20%,10% and 5% for current, mandate easing and mandate stricting.

 

Considering 5% proportion, current projection by Feb 11/2020 is estimated to as 2812.

 

For mandate easing scenario with 5% proportion of ICU to death, 3,123 death is projected, indicating an increase of death by 11%.

 

For mandate strikting scenario with 5% proportion of ICU to death, 2,733 death is projected, indicating an aversion of death by 3%.
</p>
	  </div>
	  </div>
	  </div>
	  </div>
	  
	  <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: 'Roboto Slab', serif;">Deterministic Model Structure and Parameters Value</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <img src="../../../template/resources/c_model.png" class="img-fluid" alt="Responsive image">
		 <b>Where:</b><br>
		 <b  style="font-size: 25px">S<sub>j</sub>:</b> Susceptable Popullation for<span style="font-style: italic;">j age group.</span> The model assumes all popullation are susceptable at the intial stage.<br>
		 <b  style="font-size: 25px">λ<sub>j</sub>:</b> Force of Infection for <span style="font-style: italic;">j age group.</span> <br>
		
		  \[{λj} = {βj \times (Ris \times Icj + Ric \times Isj) \over Nj}\]
		  \[{βj} = {βfitted \times (1 - (α(eff) \times ρ(com)) \times }\]
		  \[{(1 - (π(eff) \times τ(com))))}\]
		  β<sub>j</sub> transmission rate, R<sub>is</sub> and R<sub>ic</sub> are relative infectiousness of the subclinical and clinical group respectively, N<sub>j</sub> is the popullation of <span style="font-style: italic;">j age group.</span> <br> 
		 <b  style="font-size: 25px">E<sub>j</sub>:</b> Exposed Popullation for<span style="font-style: italic;"> j age group.</span> Once exposed after incubation period few will develope clinical cases, but the rest will progress to subclinical compartement (show no or few sysmptoms).<br>
         <b  style="font-size: 25px">I<sub>cj</sub>:</b> Clinical cases for<span style="font-style: italic;"> j age group.</span> η<sub>j</sub> portion of the clinical groups will move to hospitalization and ϒ<sub>j(Ic)</sub> portion will recover. η<sub>j</sub> is a multiplication of rate of transferring to hospitalization and portion of clinical individuals requiring hospitalizations. ϒ<sub>j(Ic)</sub> is a multiplication of recovery rate and portion of clinical individuals recovering. <br>
		 <b  style="font-size: 25px">I<sub>sj</sub>:</b> Sub-clinical cases for<span style="font-style: italic;"> j age group.</span> This model assumes all sub-clinical cases will eventually recovery after recovery period (ϒ<sub>j(Is)</sub>).<br>
		 <b  style="font-size: 25px">I<sub>hj</sub>:</b> Hospitalized individulas for<span style="font-style: italic;"> j age group.</span> Few portions of the hospitalized individuals will die by ε<sub>hj</sub> factor or admitted to ICU by ξ<sub>j</sub> factor. the rest will recover by ϒ<sub>j(Ih)</sub>.
		 ε<sub>hj</sub>  is multiplication of portion of the hospitalized those who died and a rate at which they died. ξ<sub>j</sub> is a multiplication of portion of the hospitalized those who require intensive care and a rate of admission. ϒ<sub>j(Ih)</sub> is a multiplication 
		 of portion of the hospitalized those who recovered and a rate of recovery.<br>
		 <b style="font-size: 25px">I<sub>(icu)j</sub>:</b> Individuals those need ICU for<span style="font-style: italic;"> j age group.</span>Some portions of those individuals in critical care will die by ε<sub>(icu)j</sub> factor or will recover by ϒ<sub>j(icu)</sub> factor.
		 ε<sub>(icu)j</sub> is a multiplication of portion of those who died and a rate at which they died. ϒ<sub>j(icu)</sub> is a multiplication of portion of individuals those who recovered and a recovery rate.<br>
		 <b  style="font-size: 20px">Dead:</b> Portion of individuals from hospitalization and those who are admitted to ICU will die after few days of admission.<br>
         <b  style="font-size: 20px">Recovered:</b> Portion of individuals from hospitalization or those who are admitted to ICU and those who are in clinical and subclinical stage will recover by recovery rate.<br>
     <hr>
	 <h5  style="font-family: 'Roboto Slab', serif;">Parameters Value</h5>
     <hr>	
<div class="table-responsive">
	  <table class="table">
<thead>
  <tr>
    <th scope="col">Symbol</th>
    <th scope="col">Description</th>
    <th scope="col">Proportion Value <br>(age group)</th>
    <th scope="col">Length in Days<br>(Rate Value)</th>
    <th scope="col">Source</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td >positive</td>
    <td >Exposed to sub-clinical. <br>Exposed to clinical is one<br>minus this value.<br></td>
    <td >0.9 (0-19)<br>0.8 (20-49)<br>0.6 (50+)</td>
    <td >5 days (1/5)</td>
    <td >Proportions: from Surveillance Data (EPHI) and Durations: Assumed</td>
  </tr>
  <tr>
    <td >η<sub>j</sub></td>
    <td >Proportion of clinical to hospitalization times hospitalization rate.</td>
    <td >0.06 (0-4)<br>0.05 (5-19)<br>0.1 (20-39)<br>0.2 (40+)</td>
    <td >9 days (1/9)</td>
    <td >Proportions: from Case Management Data (EPHI) and Durations: Assumed</td>
  </tr>
  <tr>
    <td >ϒ<sub>j(Ic)</sub></td>
    <td >Proportion of clinical to recovery times recovery rate.</td>
    <td >One minus of proportion from clinical to hospitalization.</td>
    <td >9 days (1/9)</td>
    <td >Proportions: Calculated and Durations: Assumed</td>
  </tr>
  <tr>
    <td >ϒ<sub>j(Is)</sub></td>
    <td >Proportion of sub-clinical to recovery times recovery rate.</td>
    <td >1 (0+)</td>
    <td >9 days (1/9)</td>
    <td ><td >Proportions: Assumed and Durations: Assumed</td></td>
  </tr>
  <tr>
    <td >ξ<sub>j</sub></td>
    <td >Proportion of hospitalization to ICU times ICU admission rate.</td>
    <td >0.06 (0-4)<br>0.05 (5-39)<br>0.07 (40-49)<br>0.15 (50+)<br></td>
    <td >8 days (1/8)</td>
    <td >Proportions: from Case Management Data (EPHI) and Durations: Assumed</td>
  </tr>
  <tr>
    <td >ε<sub>hj</sub></td>
    <td >Proportion of hospitalization to death times rate of death from hospitalization.</td>
    <td >0.0005 (0-29)<br>0.001 (30+)<br></td>
    <td >8 days (1/8)</td>
    <td >Proportions: from Case Management Data (EPHI) and Durations: Assumed</td>
  </tr>
  <tr>
    <td >ϒ<sub>j(Ih)</sub></td>
    <td >Proportion from hospitalization to recovery times recovery rate from hospitalization.</td>
    <td >One minus proportion of hospitalization to ICU and proportion of hospitalization to death added together.</td>
    <td >8 days (1/8)</td>
    <td >Proportions: Calculated and Durations: Assumed</td>
  </tr>
  <tr>
    <td >ε<sub>(icu)j</sub></td>
    <td >Proportion from ICU to death times death rate from ICU.</td>
    <td >0.4 (0+)<br></td>
    <td >14 days (1/14)</td>
    <td >Proportions: from Case Management Data (EPHI) and Durations: Assumed</td>
  </tr>
  <tr>
    <td >ϒ<sub>j(icu)</sub></td>
    <td >Proportion from ICU to recovery times recovery rate from ICU.</td>
    <td >One minus proportion from ICU to death</td>
    <td >14 days (1/14)</td>
    <td >Proportions: Calculated and Durations: Assumed</td>
  </tr>
  <tr>
    <td >α<sub>(eff)</sub></td>
    <td >Facemask Efficacy</td>
    <td >25% (0+)</td>
    <td >Through-out the intervention period</td>
    <td >Efficacy: Assumed</td>
  </tr>
  <tr>
    <td >ρ<sub>(com)</sub></td>
    <td >Facemask Complience</td>
    <td >Varies depending on policy</td>
    <td >Through-out the intervention period</td>
    <td >Complience: Calculated</td>
  </tr>
  <tr>
    <td >π<sub>(eff)</sub></td>
    <td >Social Distancing Efficacy</td>
    <td >100% (0+)</td>
    <td >Through-out the intervention period</td>
    <td >Efficacy: Assumed</td>
  </tr>
  <tr>
    <td >τ<sub>(com)</sub></td>
    <td >Social Distancing Complience</td>
    <td >Varies depending on policy</td>
    <td >Through-out the intervention period</td>
    <td >Complience: Calculated</td>
  </tr>
</tbody>
</table>	
 </div>
	 </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <img src="../../../template/resources/fit.png" class="img-fluid" alt="Responsive image">
		 
	 </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        \[{f(x)} = {0.08 \times x^3 - 7.7 \times x^2 + 313.2 \times x - 1848.5}\]
		 
		 
	 </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        \[{f(x)} = {9.9 \times x - 317.5}\]
		 
		 
	 </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <div class="row " id = "ml">

  <div class="col-md">
    <div class="card">
 
 <script>


function cbChange_mo(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == 'container_model'){
		document.getElementById('loader1').style.display = 'block';
		document.getElementById('loader').style.display = 'block';
		
		document.getElementById('container_model_ho').style.display = 'none';
		document.getElementById('container_model_cr').style.display = 'none';
		document.getElementById('container_model_de').style.display = 'none';
		document.getElementById('container_model_co').style.display = 'none';
		var myVar = setTimeout(knm, 1000);
		
	}
	else if (id == "container_model_ho"){
		document.getElementById('loader1').style.display = 'block';
		document.getElementById('loader').style.display = 'block';
		document.getElementById('container_model').style.display = 'none';
		document.getElementById('container_model_cr').style.display = 'none';
		document.getElementById('container_model_de').style.display = 'none';
		document.getElementById('container_model_co').style.display = 'none';
		var myVar = setTimeout(knm1, 1000);
		
		
	}
	else if (id == "container_model_cr"){
		document.getElementById('loader1').style.display = 'block';
		document.getElementById('loader').style.display = 'block';
		document.getElementById('container_model').style.display = 'none';
		
		document.getElementById('container_model_ho').style.display = 'none';
		
		document.getElementById('container_model_de').style.display = 'none';
		document.getElementById('container_model_co').style.display = 'none';
		var myVar = setTimeout(knm2, 1000);
	}
		
	else if (id == "container_model_de"){
		document.getElementById('loader1').style.display = 'block';
		document.getElementById('loader').style.display = 'block';
		document.getElementById('container_model').style.display = 'none';
		
		document.getElementById('container_model_ho').style.display = 'none';
		document.getElementById('container_model_cr').style.display = 'none';
		
		document.getElementById('container_model_co').style.display = 'none';
		var myVar = setTimeout(knm3, 1000);
	}
	else{
		document.getElementById('loader1').style.display = 'block';
		document.getElementById('loader').style.display = 'block';
		document.getElementById('container_model').style.display = 'none';
		
		document.getElementById('container_model_ho').style.display = 'none';
		document.getElementById('container_model_cr').style.display = 'none';
		document.getElementById('container_model_de').style.display = 'none';
		
		var myVar = setTimeout(knm4, 1000);
	}
	
}
function knm(){
	document.getElementById('container_model').style.display = 'block';
		document.getElementById('loader').style.display = 'none'; 
		document.getElementById('loader1').style.display = 'none';
		
}
function knm1(){
	document.getElementById('container_model_ho').style.display = 'block';
		document.getElementById('loader').style.display = 'none'; 
		document.getElementById('loader1').style.display = 'none';
		
}
function knm2(){
	document.getElementById('container_model_cr').style.display = 'block';
		document.getElementById('loader').style.display = 'none'; 
		document.getElementById('loader1').style.display = 'none';
		
}
function knm3(){
	document.getElementById('container_model_de').style.display = 'block';
		document.getElementById('loader').style.display = 'none'; 
		document.getElementById('loader1').style.display = 'none';
		
}
function knm4(){
	document.getElementById('container_model_co').style.display = 'block';
		document.getElementById('loader').style.display = 'none'; 
		document.getElementById('loader1').style.display = 'none';
		
}
function cbChange_mo_in(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == 'container_model_in'){
		document.getElementById('container_model_in').style.display = 'block';
		
		document.getElementById('container_model_ho_in').style.display = 'none';
		document.getElementById('container_model_cr_in').style.display = 'none';
		document.getElementById('container_model_de_in').style.display = 'none';
		document.getElementById('container_model_co_in').style.display = 'none';
	}
	else if (id == "container_model_ho_in"){
		document.getElementById('container_model_in').style.display = 'none';
		
		document.getElementById('container_model_ho_in').style.display = 'block';
		document.getElementById('container_model_cr_in').style.display = 'none';
		document.getElementById('container_model_de_in').style.display = 'none';
		document.getElementById('container_model_co_in').style.display = 'none';
	}
	else if (id == "container_model_cr_in"){
		document.getElementById('container_model_in').style.display = 'none';
		
		document.getElementById('container_model_ho_in').style.display = 'none';
		document.getElementById('container_model_cr_in').style.display = 'block';
		document.getElementById('container_model_de_in').style.display = 'none';
		document.getElementById('container_model_co_in').style.display = 'none';
	}
		
	else if (id == "container_model_de_in"){
		document.getElementById('container_model_in').style.display = 'none';
		
		document.getElementById('container_model_ho_in').style.display = 'none';
		document.getElementById('container_model_cr_in').style.display = 'none';
		document.getElementById('container_model_de_in').style.display = 'block';
		document.getElementById('container_model_co_in').style.display = 'none';
	}
	else{
		document.getElementById('container_model_in').style.display = 'none';
		
		document.getElementById('container_model_ho_in').style.display = 'none';
		document.getElementById('container_model_cr_in').style.display = 'none';
		document.getElementById('container_model_de_in').style.display = 'none';
		document.getElementById('container_model_co_in').style.display = 'block';
	}
	
}

function cbChange_mo_in1(obj, id) {
    var cbs = document.getElementsByClassName("form-check-input");
    for (var i = 0; i < cbs.length; i++) {
         cbs[i].checked = false;
		 

    }
	obj.checked = true;
	if (id == 'container_model_in1'){
		document.getElementById('container_model_in1').style.display = 'block';
		
		document.getElementById('container_model_ho_in1').style.display = 'none';
		document.getElementById('container_model_cr_in1').style.display = 'none';
		document.getElementById('container_model_de_in1').style.display = 'none';
		document.getElementById('container_model_co_in1').style.display = 'none';
	}
	else if (id == "container_model_ho_in1"){
		document.getElementById('container_model_in1').style.display = 'none';
		
		document.getElementById('container_model_ho_in1').style.display = 'block';
		document.getElementById('container_model_cr_in1').style.display = 'none';
		document.getElementById('container_model_de_in1').style.display = 'none';
		document.getElementById('container_model_co_in1').style.display = 'none';
	}
	else if (id == "container_model_cr_in1"){
		document.getElementById('container_model_in1').style.display = 'none';
		
		document.getElementById('container_model_ho_in1').style.display = 'none';
		document.getElementById('container_model_cr_in1').style.display = 'block';
		document.getElementById('container_model_de_in1').style.display = 'none';
		document.getElementById('container_model_co_in1').style.display = 'none';
	}
		
	else if (id == "container_model_de_in1"){
		document.getElementById('container_model_in1').style.display = 'none';
		
		document.getElementById('container_model_ho_in1').style.display = 'none';
		document.getElementById('container_model_cr_in1').style.display = 'none';
		document.getElementById('container_model_de_in1').style.display = 'block';
		document.getElementById('container_model_co_in1').style.display = 'none';
	}
	else{
		document.getElementById('container_model_in1').style.display = 'none';
		
		document.getElementById('container_model_ho_in1').style.display = 'none';
		document.getElementById('container_model_cr_in1').style.display = 'none';
		document.getElementById('container_model_de_in1').style.display = 'none';
		document.getElementById('container_model_co_in1').style.display = 'block';
	}
	
}
	  </script>

	<div class="card-body " >
	<div class="d-flex justify-content-center">
    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist" >
  <li class="nav-item"  style="padding: 3px;">
    <span  class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#container_model_0" role="tab" aria-controls="pills-home" aria-selected="true">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.tooltip-inner{
	text-align: left;
	overflow-y: auto;
    
	
}
</style>
<button type="button" class="btn-sm btn-success"  data-toggle="tooltip" title="<b>Current Projection:</b> <em> Adjusting the reported cases starting from May, 10 to Dec, 03 2020 and then fitting a transmission rate (which was found to be β=0.215) from this adjusted trend. This scenario assumes the transmission dynamics will progress into the future with the observed interventions (Facemask compliance: 37.6% and Social Distancing: 19.8%), following the adjusted trend.</em>" data-html= "true" rel="tooltip">
  Current Projection
</button>

	</span>
  </li>
  <li class="nav-item" style="padding: 3px;">
    <span class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#container_model_1" role="tab" aria-controls="pills-profile" aria-selected="false">
	<button type="button" class="btn-sm btn-success" data-toggle="tooltip" title="<b>Mandate Easing:</b><em>The observed intervention compliences (Facemask and Social Distancing) from October 15 to December 04, 2020 was fitted by linear and second order polynomial for Facemask and Social Distancing respectively. Using this two equations forecasting the compliences of these interventions from December 04 to February 12, 2020 have shown a decrement of 10% and 6.5% for Facemask and Socila Distancing respectively.</em>" data-html= "true" rel="tooltip">
  Mandate Easing
</button>
	</span>
  </li>
  <li class="nav-item" style="padding: 3px; ">
    <span class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#container_model_2" role="tab" aria-controls="pills-contact" aria-selected="false">
	<button type="button" class="btn-sm btn-success" data-toggle="tooltip" title="<b>Mandate Stricting:</b> <em>This scenario depends on goverenment plans for strictly implementing intervention policies. We have assumed the 'No Mask, No service' movement initiated by Goverment, could increase Facemask complience by 12% nationally. But since there are no evidences on plans for stricting Social Distancing mandates, this scenario uses the baseline value of 19.8%. </em>" data-html= "true" rel="tooltip">
  Mandate Stricting
</button>
	</span>
  </li>
  
</ul>
</div>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-home-tab" id="container_model_0">
 <div id="container_model" class="animate-bottom" style="display:none"></div>
 <div  id="container_model_ho" class="animate-bottom" style="display:none"></div>
<div  id="container_model_cr" class="animate-bottom" style="display:none"></div>
<div id="container_model_de" class="animate-bottom" style="display:none"></div>
<div id="container_model_co" class="animate-bottom"></div>
<div id="loader1" style="display:none">
<div id="loader" style="display:none"></div>
</div>
<div class="d-flex flex-row justify-content-center" style="padding: 11px; background-color: rgb(240,240,240)">
	  <form >
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_co"  onchange="cbChange_mo(this, 'container_model_co')">
 <label class="form-check-label" for="check_co"> Total Infected Cases</label>

</div>	  
<div class="form-check form-check-inline" >
 <input type="checkbox" class="form-check-input" id="check_cc"  onchange="cbChange_mo(this, 'container_model')">
 <label class="form-check-label" for="check_cc"> Clinical Cases</label>

</div>

<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_ho"  onchange="cbChange_mo(this, 'container_model_ho')">
 <label class="form-check-label" for="check_ho"> Hospitalized Cases</label>

</div>

<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_cr"  onchange="cbChange_mo(this, 'container_model_cr')">
 <label class="form-check-label" for="check_cr"> Critical Cases</label>

</div>
 
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_de"  onchange="cbChange_mo(this, 'container_model_de')">
 <label class="form-check-label" for="check_de"> Deaths</label>

</div>


</form>
</div>
</div>

<div class="tab-pane fade" role="tabpanel" aria-labelledby="pills-profile-tab" id="container_model_1">
<div id="container_model_in" class="animate-bottom" style="display:none"></div>
 <div  id="container_model_ho_in" class="animate-bottom" style="display:none"></div>
<div  id="container_model_cr_in" class="animate-bottom" style="display:none"></div>
<div id="container_model_de_in" class="animate-bottom" style="display:none"></div>
<div id="container_model_co_in" class="animate-bottom" ></div>
<div class="d-flex flex-row justify-content-center" style="padding: 10px; background-color: rgb(240,240,240)">
	  <form >
<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_co_in"  onchange="cbChange_mo_in(this, 'container_model_co_in')">
 <label class="form-check-label" for="check_co_in"> Total Infected Cases</label>

</div>	  
<div class="form-check form-check-inline" >
 <input type="checkbox" class="form-check-input" id="check_cc_in"  onchange="cbChange_mo_in(this, 'container_model_in')">
 <label class="form-check-label" for="check_cc_in"> Clinical Cases</label>
</div>


<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_ho_in"  onchange="cbChange_mo_in(this, 'container_model_ho_in')">
 <label class="form-check-label" for="check_ho_in"> Hospitalized Cases</label>
</div>


<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_cr_in"  onchange="cbChange_mo_in(this, 'container_model_cr_in')">
 <label class="form-check-label" for="check_cr_in"> Critical Cases</label>
</div>


<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_de_in"  onchange="cbChange_mo_in(this, 'container_model_de_in')">
 <label class="form-check-label" for="check_de_in"> Deaths</label>
</div>
 

</form>
</div>
</div>

<div class="tab-pane fade" role="tabpanel" aria-labelledby="pills-contact-tab" id="container_model_2">
<div id="container_model_in1" class="animate-bottom" style="display:none"></div>
 <div  id="container_model_ho_in1" class="animate-bottom" style="display:none"></div>
<div  id="container_model_cr_in1" class="animate-bottom" style="display:none"></div>
<div id="container_model_de_in1" class="animate-bottom" style="display:none"></div>
<div id="container_model_co_in1" class="animate-bottom" ></div>
<div class="d-flex flex-row justify-content-center" style="padding: 10px; background-color: rgb(240,240,240)">
	  <form >

<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_co_in1"  onchange="cbChange_mo_in1(this, 'container_model_co_in1')">
 <label class="form-check-label" for="check_co_in1"> Total Infected Cases</label>

</div>	
<div class="form-check form-check-inline" >
 <input type="checkbox" class="form-check-input" id="check_cc_in1"  onchange="cbChange_mo_in1(this, 'container_model_in1')">
 <label class="form-check-label" for="check_cc_in1"> Clinical Cases</label>
</div>


<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_ho_in1"  onchange="cbChange_mo_in1(this, 'container_model_ho_in1')">
 <label class="form-check-label" for="check_ho_in1"> Hospitalized Cases</label>
</div>


<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_cr_in1"  onchange="cbChange_mo_in1(this, 'container_model_cr_in1')">
 <label class="form-check-label" for="check_cr_in1"> Critical Cases</label>
</div>

<div class="form-check form-check-inline">
 <input type="checkbox" class="form-check-input" id="check_de_in1"  onchange="cbChange_mo_in1(this, 'container_model_de_in1')">
 <label class="form-check-label" for="check_de_in1"> Deaths</label>
</div>


</form>
</div>
</div>
</div>
	</div>
	
	  
	 

    </div>
  </div>

</div>


<div class="row" style="margin-bottom: 10px;">
<a href="#carousel-fade" id="Top"><h4><i class="fas fa-arrow-up"></i></h4></a>
</div>

</div>
<br>
<br>
<script type="text/javascript" src="dist/bundle.js"></script> 



</div>
<script>

window.onload = onPageLoad();

function onPageLoad() {
document.getElementById('check_cc').checked = false;
document.getElementById('check_ho').checked = false;
document.getElementById('check_cr').checked = false;
document.getElementById('check_de').checked = false;
document.getElementById('check_co').checked = true;
document.getElementById('check_cc_in').checked = false;
document.getElementById('check_ho_in').checked = false;
document.getElementById('check_cr_in').checked = false;
document.getElementById('check_de_in').checked = false;
document.getElementById('check_co_in').checked = true;
document.getElementById('check_cc_in1').checked = false;
document.getElementById('check_ho_in1').checked = false;
document.getElementById('check_cr_in1').checked = false;
document.getElementById('check_de_in1').checked = false;
document.getElementById('check_co_in1').checked = true;
	}	  
</script>


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



<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
<script type="text/javascript">
    function changeclass(){
  if (document.getElementById("myEle").className == "fa fa-plus-circle"){
    document.getElementById("myEle").className = "fa fa-minus-circle"
  }
  else {
    document.getElementById("myEle").className = "fa fa-plus-circle"
  }
}
</script>

<script type="text/javascript">
    function changeclass1(){
  if (document.getElementById("myEle1").className == "fa fa-angle-right"){
    document.getElementById("myEle1").className = "fa fa-angle-left"
  }
  else {
    document.getElementById("myEle1").className = "fa fa-angle-right"
  }
}
</script>


<script>
Highcharts.chart('container_post', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'National',
        align: 'center'
    },
	
	credits: {
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        }
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Tests - Daily',
        type: 'spline',
        yAxis: 1,
         data: [2171,1764,2424,2650,3580,3707,4044,4225,1775,4271,2460,3747,3657,6798,1048,2844,3410,4352,4950,5015,5034,2836,2926,3932,4120,5141,5798,5500,6092,4775,4599,6187,6630,5709,5644,4845,5636,5102,5274,4853,4809,4848,4457,3238,3775,4034,4675,5414,5552,3895,3693,3300,1398,1346,1742,2192,3315,2426,1969,4162,3476,5139,4559,3922,4385,3607,5186,6911,7407,6886,7334,5056,6544,7294,6898,7264,8490,9527,7009,6503,7760,9786,8957,7358,7607,6907,8201,7319,9068,9203,10919,9035,11039,11881,14540,14688,17323,22252,19769,19747,22101,21326,21456,23035,19776,20153,18851,18778,18724,18060,18766,19194,21499,19364,18160,21360,20778,23712,24544,25158,19449,14815,15561,16665,12164,8191,7162,9256,10024,8355,10605,8221,10322,8023,8115,6813,8551,8348,7227,7679,6631,4747,5284,6139,6475,6916,7726,8101,6062,5278,8254,6668,8024,7394,7383,5997,6344,7121,6985,6569,6548,7151,6546,6602,6333,6676,6538,7454,7045,4628,5884,6290,7773,5866,6386,5901,5726,5364,5945,5839,4725,6028,5324,3889,4360,5183,5478,5532,6343,5002,4213,3778,4871,5201,5488,5589,4495,4963,4091,5283],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' tests'
        }

    }, {
        name: 'Positivity Rate - 7 days Moving Average',
        type: 'spline',
        yAxis: 2,
        data: [

0.006
,0.005
,0.004
,0.004
,0.004
,0.005
,0.005
,0.005
,0.013
,0.017
,0.019
,0.019
,0.019
,0.022
,0.025
,0.021
,0.022
,0.022
,0.024
,0.027
,0.028
,0.028
,0.026
,0.024
,0.025
,0.026
,0.026
,0.026
,0.028
,0.032
,0.034
,0.035
,0.034
,0.034
,0.036
,0.033
,0.038
,0.036
,0.036
,0.04
,0.042
,0.04
,0.043
,0.035
,0.037
,0.039
,0.039
,0.04
,0.044
,0.044
,0.045
,0.048
,0.046
,0.049
,0.047
,0.046
,0.043
,0.047
,0.045
,0.048
,0.044
,0.044
,0.044
,0.046
,0.042
,0.047
,0.055
,0.055
,0.062
,0.065
,0.065
,0.07
,0.086
,0.083
,0.09
,0.087
,0.091
,0.102
,0.099
,0.086
,0.085
,0.084
,0.083
,0.079
,0.068
,0.072
,0.066
,0.064
,0.058
,0.06
,0.06
,0.06
,0.059
,0.059
,0.059
,0.063
,0.062
,0.064
,0.071
,0.069
,0.074
,0.076
,0.078
,0.081
,0.079
,0.079
,0.08
,0.078
,0.075
,0.071
,0.066
,0.062
,0.057
,0.052
,0.05
,0.052
,0.054
,0.054
,0.06
,0.066
,0.071
,0.069
,0.066
,0.068
,0.07
,0.071
,0.066
,0.066
,0.072
,0.084
,0.084
,0.085
,0.085
,0.086
,0.086
,0.093
,0.091
,0.094
,0.1
,0.103
,0.111
,0.115
,0.118
,0.118
,0.113
,0.115
,0.116
,0.116
,0.116
,0.114
,0.116
,0.118
,0.113
,0.113
,0.111
,0.108
,0.103
,0.1
,0.102
,0.101
,0.098
,0.093
,0.094
,0.094
,0.087
,0.084
,0.082
,0.081
,0.082
,0.078
,0.074
,0.074
,0.076
,0.074
,0.078
,0.076
,0.079
,0.086
,0.086
,0.082
,0.083
,0.081
,0.085
,0.088
,0.085
,0.087
,0.088
,0.092
,0.091
,0.091
,0.09
,0.089
,0.091
  ],
    pointStart: Date.UTC(2020, 4, 17),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        dashStyle: 'shortdot',
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Positivity Rate - Actual (Test/confirmed)',
        type: 'spline',
		yAxis: 3,
        data: [
0.007,0.016,0.005,0.004,0.001

,0.002
,0.004
,0.004
,0.006
,0.008
,0.005
,0.006
,0.003
,0.005
,0.058
,0.031
,0.021
,0.011
,0.006
,0.02
,0.027
,0.033
,0.037
,0.022
,0.021
,0.028
,0.026
,0.031
,0.021
,0.018
,0.03
,0.029
,0.026
,0.029
,0.043
,0.052
,0.032
,0.034
,0.021
,0.027
,0.041
,0.024
,0.09
,0.019
,0.035
,0.046
,0.04
,0.026
,0.045
,0.037
,0.032
,0.048
,0.05507868383
,0.05720653789
,0.04420206659
,0.03512773723
,0.02322775264
,0.03173948887
,0.039
,0.067
,0.031
,0.039
,0.032
,0.072
,0.036
,0.057
,0.039
,0.031
,0.04
,0.048
,0.047
,0.07
,0.108
,0.042
,0.081
,0.062
,0.048
,0.08
,0.182
,0.089
,0.084
,0.062
,0.09
,0.124
,0.062
,0.09338352396
,0.07864894525
,0.08
,0.051
,0.061
,0.051
,0.089
,0.051
,0.065
,0.04
,0.064
,0.063
,0.047
,0.084
,0.05
,0.066
,0.065
,0.062
,0.077
,0.092
,0.068
,0.087
,0.078
,0.083
,0.085
,0.063
,0.09
,0.07
,0.076
,0.056
,0.055
,0.053
,0.034
,0.053
,0.038
,0.062
,0.066
,0.073
,0.055
,0.072
,0.096
,0.073
,0.045
,0.048
,0.084
,0.07
,0.084
,0.058
,0.077
,0.085
,0.13
,0.083
,0.079
,0.084
,0.063
,0.079
,0.133
,0.116
,0.104
,0.121
,0.106
,0.115
,0.108
,0.158
,0.117
,0.069
,0.134
,0.112
,0.117
,0.104
,0.144
,0.133
,0.082
,0.102
,0.112
,0.102
,0.084
,0.107
,0.11
,0.099
,0.094
,0.088
,0.072
,0.089
,0.105
,0.062
,0.081
,0.077
,0.082
,0.076
,0.064
,0.072
,0.067
,0.094
,0.065
,0.108
,0.059
,0.085
,0.122
,0.07
,0.067
,0.073
,0.094
,0.08
,0.113
,0.095
,0.089
,0.07
,0.102
,0.091
,0.081
,0.105
,0.087
,0.102
,0.073
  ],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        dashStyle: 'shortdot',
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Reported Confirmed Cases - Daily',
        type: 'spline',
		data: [16,29,11,11,2,9,15,19,11,35,13,24,10,34,61,88,73,46,30,100,137,95,109,85,87,142,150,169,129,86,136,180,170,164,245,251,179,176,109,129,195,116,399,63,131,185,186,141,250,145,119,157,77,77,77,77,77,77,77,280,108,199,147,282,158,206,203,212,294,328,344,356,704,304,561,452,409,760,1275,579,653,610,805,915,469,645,645,588,459,564,552,801,565,773,584,943,1086,1038,1652,982,1460,1386,1336,1778,1829,1368,1638,1472,1545,1533,1186,1733,1514,1468,1009,1173,1105,804,1303,950,1206,976,1136,916,878,789,521,413,485,700,738,689,602,616,689,889,713,661,604,486,527,632,612,640,784,730,890,872,959,618,566,892,902,865,767,866,841,582,712,739,665,600,703,723,630,628,575,536,629,485,364,511,602,481,488,380,414,359,560,379,510,355,455,474,307,345,400,521,509,564,399,336,339,533,499,452,473,433,418,388,518],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
   
        tooltip: {
            valueSuffix: ' Cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>

<script>

function display_pro_0(id, value1, value2, value3, value4, start1, start2, start3, start4, region){
	Highcharts.chart(id, {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: region,
        align: 'center'
    },
	
	credits: {
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true

    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        }
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Tests - Daily',
        type: 'spline',
        yAxis: 0,
		data: value1,
    pointStart: Date.UTC(2020, start1[0], start1[1]),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' tests'
        }

    },  {
        name: 'Positivity Rate - Actual (Test/confirmed)',
        type: 'spline',
		yAxis: 2,
        data: value3,
    pointStart: Date.UTC(2020, start3[0], start3[1]),
    pointInterval: 24 * 3600 * 1000,
        dashStyle: 'shortdot',
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Reported Confirmed Cases - Daily',
        type: 'spline',
		yAxis: 1,
		data: value4,
    pointStart: Date.UTC(2020, start4[0],start4[1]),
    pointInterval: 24 * 3600 * 1000,
   
        tooltip: {
            valueSuffix: ' Cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});
}


</script>


<script>

Highcharts.chart('container_post_africa', {

    title: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'Positivity Rate'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Kenya - Posititvity Rate',
    data: [
0.03
,0.03
,0.03
,0.01
,0.01
,0.01
,0.01
,0.02
,0.05
,0.01
,0.02
,0.02
,0.03
,0.02
,0.01
,0.01
,0.03
,0.02
,0.04
,0.04
,0.06
,0.06
,0.05
,0.02
,0.03
,0.05
,0.04
,0.04
,0.04
,0.15
,0.04
,0.06
,0.03
,0.05
,0.03
,0.05
,0.04
,0.04
,0.03
,0.04
,0.07
,0.04
,0.03
,0.11
,0.01
,0.03
,0.06
,0.06
,0.04
,0.10
,0.12
,0.05
,0.05
,0.11
,0.06
,0.05
,0.09
,0.15
,0.09
,0.06
,0.07
,0.07
,0.34
,0.04
,0.31
,0.04
,0.12
,0.12
,0.12
,0.07
,0.12
,0.24
,0.11
,0.09
,0.09
,0.16
,0.15
,0.08
,0.21
,0.08
,0.12
,0.10
,0.09
,0.11
,0.13
,0.26
,0.12
,0.10
,0.11
,0.08
,0.10
,0.16
,0.13
,0.12
,0.08
,0.10
,0.12
,0.11
,0.10
,0.09
,0.06
,0.06
,0.08
,0.09
,0.06
,0.08
,0.07
,0.05
,0.06
,0.05
,0.08
,0.08
,0.04
,0.06
,0.09
,0.03
,0.05
,0.05
,0.05
,0.04
,0.03
,0.04
,0.07
,0.02
,0.03
,0.05
,0.06
,0.08
,0.00
,0.02
,0.04
,0.11
,0.06
,0.04
,0.06
,0.06
,0.04
,0.04
,0.03
,0.08
,0.04
,0.12
,0.01
,0.07
,0.03
,0.06
,0.06
,0.06
,0.41
,0.02
,0.03
,0.06
,0.05
,0.06
,0.13
,0.19
,0.03
,0.05
,0.11
,0.12
,0.09
,0.13
,0.37
,0.05
,0.12
,0.07
,0.17
,0.09
,0.19
,0.19
,0.06
,0.17
,0.21
,0.11
,0.18
,0.21
,0.10
,0.19
,0.07
,0.20
,0.14
,0.19
,0.18
,0.12
,0.13
,0.21
,0.16
,0.16
,0.23
,0.17
,0.15
,0.11
,0.18
,0.19
,0.29
,0.20
,0.24
,0.05
,0.15
,0.26
,0.29
,0.28
,0.56
,0.34
        ],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Rwanda - Posititvity Rate',
    data: [
	0.003
,0.006
,0.002
,0.007
,0.001
,0.008
,0.003
,0.003
,0.007
,0.001
,0.002
,0.000
,0.003
,0.002
,0.001
,0.017
,0.007
,0.007
,0.011
,0.003
,0.011
,0.013
,0.005
,0.006
,0.005
,0.002
,0.000
,0.005
,0.002
,0.002
,0.007
,0.011
,0.002
,0.001
,0.001
,0.000
,0.000
,0.002
,0.002
,0.004
,0.011
,0.006
,0.004
,0.001
,0.003
,0.002
,0.008
,0.001
,0.004
,0.002
,0.004
,0.004
,0.010
,0.007
,0.007
,0.009
,0.008
,0.011
,0.008
,0.004
,0.006
,0.006
,0.007
,0.011
,0.008
,0.009
,0.014
,0.011
,0.010
,0.001
,0.002
,0.005
,0.013
,0.011
,0.013
,0.003
,0.007
,0.005
,0.002
,0.007
,0.009
,0.027
,0.006
,0.005
,0.009
,0.005
,0.003
,0.005
,0.003
,0.022
,0.006
,0.004
,0.010
,0.016
,0.011
,0.007
,0.016
,0.003
,0.011
,0.004
,0.017
,0.011
,0.007
,0.006
,0.006
,0.008
,0.004
,0.006
,0.011
,0.016
,0.011
,0.002
,0.017
,0.005
,0.008
,0.006
,0.010
,0.002
,0.002
,0.002
,0.004
,0.001
,0.001
,0.002
,0.004
,0.004
,0.002
,0.017
,0.012
,0.025
,0.020
,0.011
,0.012
,0.013
,0.013
,0.017
,0.055
,0.035
,0.042
,0.019
,0.009
,0.011
,0.018
,0.037
,0.008
,0.014
,0.015
,0.006
,0.011
,0.013
,0.006
,0.011
,0.008
,0.007
,0.006
,0.019
,0.011
,0.015
,0.006
,0.014
,0.005
,0.012
,0.008
,0.010
,0.015
,0.007
,0.007
,0.019
,0.007
,0.005
,0.006
,0.007
,0.004
,0.001
,0.002
,0.002
,0.002
,0.003
,0.007
,0.001
,0.002
,0.005
,0.002
,0.002
,0.001
,0.002
,0.005
,0.002
,0.017
,0.004
,0.005
,0.003
,0.002
,0.018
,0.004
,0.007
,0.002
,0.009
,0.006
,0.007
,0.008
,0.007
,0.027
,0.001
,0.002
,0.002
,0.006
,0.007
,0.004
,0.012
,0.010
,0.012
,0.002
,0.005
,0.015
,0.007
,0.021
,0.003
,0.018
,0.013
,0.026
,0.015
,0.007
,0.015
,0.000
,0.012
,0.009
,0.018
,0.029
,0.010
,0.011
,0.024
,0.008
,0.009

        ],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Mozambique - Posititvity Rate',
    data: [0.029,0.016,0.063,0.003,0.008,0.033,0.011,0.036,0.031,0.030,0.004,0.034,0.014,0.004,0.008,0.078,0.063,0.014,0.029,0.014,0.037,0.016,0.109,0.000,0.159,0.016,0.166,0.002,0.093,0.026,0.011,0.056,0.039,0.019,0.018,0.079,0.031,0.038,0.039,0.017,0.023,0.007,0.030,0.077,0.006,0.050,0.007,0.028,0.034,0.033,0.026,0.139,0.008,0.023,0.018,0.029,0.048,0.020,0.023,0.050,0.031,0.016,0.018,0.013,0.016,0.070,0.061,0.054,0.100,0.020,0.024,0.045,0.018,0.035,0.033,0.034,0.014,0.027,0.051,0.052,0.017,0.030,0.038,0.047,0.059,0.047,0.014,0.041,0.035,0.029,0.108,0.022,0.016,0.159,0.063,0.077,0.040,0.059,0.086,0.049,0.094,0.000,0.097,0.043,0.064,0.077,0.090,0.028,0.048,0.145,0.067,0.048,0.037,0.036,0.046,0.135,0.052,0.089,0.102,0.040,0.051,0.161,0.133,0.119,0.043,0.045,0.058,0.182,0.148,0.142,0.272,0.098,0.057,0.174,0.276,0.081,0.142,0.118,0.090,0.136,0.163,0.162,0.239,0.157,0.089,0.093,0.073,0.052,0.099,0.074,0.094,0.065,0.080,0.089,0.109,0.122,0.021,0.122,0.083,0.072,0.057,0.069,0.208,0.185,0.113,0.024,0.161,0.148,0.074,0.075,0.139,0.089,0.144,0.049,0.249,0.062,0.087,0.152,0.039,0.054,0.094,0.045,0.044,0.106,0.029,0.000,0.104,0.138,0.085,0.125,0.089,0.051,0.029,0.000,0.069,0.100,0.051,0.061,0.044,0.134,0.050],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Malawi - Posititvity Rate',
		data: [0.2600,0.0000,0.0078,0.0078,0.0667,0.0000,0.0000,0.0168,0.0980,0.0000,0.0055,0.0074,0.0000,0.0270,0.0050,0.0000,0.0597,0.0000,0.0000,0.5698,0.7000,0.0108,0.0140,0.2158,0.1429,0.0404,0.2069,0.1185,0.0000,0.2014,0.0526,0.0536,0.0000,0.0282,0.0000,0.5517,0.0882,0.0344,0.0640,0.0179,0.0488,0.0683,0.0000,0.2685,0.0949,0.1915,0.2022,0.0511,0.1074,0.0601,0.4235,0.1529,0.0830,0.1408,0.1077,0.1707,0.2044,0.4495,0.1356,0.1053,0.1079,0.0686,0.1521,0.6057,0.1846,0.1568,0.1953,0.1253,0.3897,0.3897,0.2113,0.3004,0.1527,0.2266,0.3221,0.1838,0.1722,0.0000,0.7695,0.5565,0.0000,0.1636,0.1841,0.1463,0.2903,0.1312,0.0842,0.1381,0.1005,0.1111,0.2143,0.1531,0.2982,0.0326,0.0942,0.0201,0.2270,0.2190,0.0913,0.0836,0.0000,0.2266,0.1218,0.0000,0.0776,0.0676,0.0000,0.4409,0.0067,0.1729,0.0523,0.3506,0.0233,0.0080,0.2564,0.0599,0.0121,0.0373,0.2055,0.0197,0.0263,0.0654,0.0182,0.0981,0.0085,0.0478,0.0203,0.0923,0.0538,0.0272,0.0000,0.0282,0.0141,0.0000,0.4054,0.0054,0.0115,0.0258,0.0029,0.0402,0.0057,0.0820,0.0328,0.0098,0.0021,0.0125,0.0173,0.0000,0.0248,0.0851,0.0124,0.0092,0.0220,0.0147,0.0792,0.0000,0.0134,0.0159,0.0081,0.0227,0.0148,0.0427,0.0515,0.0135,0.0037,0.0066,0.0221,0.0553,0.0039,0.0155,0.0131,0.0102,0.0120,0.0177,0.0270,0.0270,0.0056,0.0022,0.0063,0.0000,0.0093,0.0037,0.0195,0.0098,0.0066,0.0000,0.0061,0.0092,0.0122,0.0068,0.0030,0.0117,0.1076,0.0089,0.0104,0.0039],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Zambia - Posititvity Rate',
		data: [0.101 , 0.229 , 0.065 , 0.184 , 0.152 , 0.118 , 0.105 , 0.033 , 0.390 , 0.032 , 0.077 , 0.183 , 0.110 , 0.060 , 0.035 , 0.109 , 0.115 , 0.090 , 0.078 , 0.146 , 0.045 , 0.242 , 0.117 , 0.087 , 0.021 , 0.067 , 0.001 , 0.069 , 0.026 , 0.149 , 0.032 , 0.028 , 0.014 , 0.058 , 0.025 , 0.011 , 0.041 , 0.027 , 0.033 , 0.015 , 0.052 , 0.044 , 0.017 , 0.015 , 0.018 , 0.018 , 0.020 , 0.013 , 0.043 , 0.022 , 0.013 , 0.011 , 0.012 , 0.012 , 0.029 , 0.025 , 0.021 , 0.024 , 0.006 , 0.008 , 0.014 , 0.007 , 0.007 , 0.023 , 0.014 , 0.017 , 0.020 , 0.020 , 0.004 , 0.008 , 0.013 , 0.027 , 0.010 , 0.012 , 0.017 , 0.015 , 0.014 , 0.003 , 0.006 , 0.015 , 0.015  , 0.015 , 0.001 , 0.005 , 0.010 , 0.008 , 0.006 , 0.016 , 0.005 , 0.004 , 0.010 , 0.007 , 0.003 , 0.015 , 0.003 , 0.003],
    pointStart: Date.UTC(2020, 7, 25),
    pointInterval: 24 * 3600 * 1000
    }, {
        name: 'Ethiopia - Positivity Rate)',
       
		
        data: [
0.007,0.016,0.005,0.004,0.001

,0.002
,0.004
,0.004
,0.006
,0.008
,0.005
,0.006
,0.003
,0.005
,0.058
,0.031
,0.021
,0.011
,0.006
,0.02
,0.027
,0.033
,0.037
,0.022
,0.021
,0.028
,0.026
,0.031
,0.021
,0.018
,0.03
,0.029
,0.026
,0.029
,0.043
,0.052
,0.032
,0.034
,0.021
,0.027
,0.041
,0.024
,0.09
,0.019
,0.035
,0.046
,0.04
,0.026
,0.045
,0.037
,0.032
,0.048
,0.05507868383
,0.05720653789
,0.04420206659
,0.03512773723
,0.02322775264
,0.03173948887
,0.039
,0.067
,0.031
,0.039
,0.032
,0.072
,0.036
,0.057
,0.039
,0.031
,0.04
,0.048
,0.047
,0.07
,0.108
,0.042
,0.081
,0.062
,0.048
,0.08
,0.182
,0.089
,0.084
,0.062
,0.09
,0.124
,0.062
,0.09338352396
,0.07864894525
,0.08
,0.051
,0.061
,0.051
,0.089
,0.051
,0.065
,0.04
,0.064
,0.063
,0.047
,0.084
,0.05
,0.066
,0.065
,0.062
,0.077
,0.092
,0.068
,0.087
,0.078
,0.083
,0.085
,0.063
,0.09
,0.07
,0.076
,0.056
,0.055
,0.053
,0.034
,0.053
,0.038
,0.062
,0.066
,0.073
,0.055
,0.072
,0.096
,0.073
,0.045
,0.048
,0.084
,0.07
,0.084
,0.058
,0.077
,0.085
,0.13
,0.083
,0.079
,0.084
,0.063
,0.079
,0.133
,0.116
,0.104
,0.121
,0.106
,0.115
,0.108
,0.158
,0.117
,0.069
,0.134
,0.112
,0.117
,0.104
,0.144
,0.133
,0.082
,0.102
,0.112
,0.102
,0.084
,0.107
,0.11
,0.099
,0.094
,0.088
,0.072
,0.089
,0.105
,0.062
,0.081
,0.077
,0.082
,0.076
,0.064
,0.072
,0.067
,0.094
,0.065
,0.108
,0.059
,0.085
,0.122
,0.07
,0.067
,0.073
,0.094
,0.08
,0.113
,0.095
,0.089
,0.07
,0.102
,0.091
,0.081
,0.105
,0.087
,0.102
,0.073
  ],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
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

</script>

<script>
Highcharts.chart('container_case_fatality', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'National',
        align: 'center'
    },
	
	credits: {
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        }
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 0,
		data: [5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,6,6,7,8,8,11,12,14,17,18,19,20,27,27,32,35,40,47,55,57,60,61,63,65,72,72,74,75,75,78,81,89,94,98,103,103,103,103,103,103,103,116,119,120,120,124,124,127,128,139,146,148,150,163,167,170,173,180,188,197,200,223,228,239,253,263,274,284,284,336,343,356,365,380,390,407,420,440,463,479,492,509,528,544,572,600,620,637,662,678,692,709,725,745,758,770,793,809,828,846,856,880,897,918,933,949,966,974,986,996,1013,1022,1035,1045,1060,1072,1089,1096,1108,1127,1141,1148,1155,1165,1170,1177,1191,1198,1205,1208,1214,1222,1230,1238,1255,1262,1271,1277,1287,1301,1305,1312,1325,1337,1346,1352,1365,1371,1384,1396,1400,1419,1426,1437,1445,1451,1457,1464,1469,1478,1489,1494,1503,1508,1512,1518,1523,1530,1537,1545,1554,1558,1565,1569,1581,1588,1601,1607,1620,1636,1647,1651,1661,1664],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    }, {
        name: 'Case Fatality Rate - 7 days Moving Average',
        type: 'spline',
        yAxis: 1,
        data: [0.0198,          0.0187,          0.0180,          0.0172,          0.0164,          0.0155,          0.0147,          0.0138,          0.0130,           0.0119,           0.0110,          0.0103,          0.0096,          0.0090,          0.0085,          0.0082,          0.0083,          0.0086,          0.0088,          0.0093,          0.0097,          0.0100,          0.0104,          0.0109,           0.0114,           0.0118,          0.0122,          0.0128,          0.0136,          0.0146,           0.0151,          0.0157,          0.0162,          0.0166,          0.0168,          0.0170,          0.0168,          0.0167,          0.0166,          0.0164,          0.0162,           0.0161,          0.0159,          0.0160,          0.0162,          0.0164,          0.0167,          0.0170,          0.0173,          0.0175,          0.0176,          0.0176,          0.0177,          0.0177,          0.0177,          0.0177,          0.0177,          0.0175,          0.0174,          0.0172,           0.0171,           0.0171,          0.0172,           0.0171,          0.0173,          0.0174,          0.0174,          0.0173,          0.0170,          0.0169,          0.0168,          0.0165,          0.0163,           0.0161,          0.0160,          0.0160,          0.0159,          0.0158,          0.0158,          0.0158,          0.0160,          0.0162,          0.0165,          0.0167,          0.0170,          0.0172,          0.0175,          0.0176,          0.0177,          0.0179,          0.0180,          0.0180,          0.0180,          0.0180,          0.0179,          0.0178,          0.0177,          0.0176,          0.0174,          0.0173,          0.0172,           0.0171,          0.0169,          0.0166,          0.0165,          0.0163,           0.0161,          0.0159,          0.0158,          0.0157,          0.0156,          0.0156,          0.0155,          0.0155,          0.0156,          0.0156,          0.0156,          0.0156,          0.0156,          0.0156,          0.0156,          0.0156,          0.0156,          0.0157,          0.0157,          0.0157,          0.0158,          0.0158,          0.0159,          0.0159,          0.0159,          0.0159,          0.0160,          0.0160,          0.0160,          0.0160,          0.0160,          0.0160,          0.0160,          0.0159,          0.0159,          0.0158,          0.0158,          0.0157,          0.0156,          0.0156,          0.0155,          0.0155,          0.0154,          0.0154,          0.0154,          0.0153,          0.0153,          0.0153,          0.0152,          0.0152,          0.0152,          0.0152,          0.0152,          0.0152,          0.0152,          0.0152,          0.0152,          0.0152,          0.0152,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0153,          0.0154,          0.0154,          0.0154,          0.0155,          0.0155,          0.0155],
    pointStart: Date.UTC(2020, 4, 17),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        dashStyle: 'shortdot',
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Case Fataility Rate - Actual (Death/confirmed)',
        type: 'spline',
		yAxis: 2,
        data: [0.0238 , 0.0209 , 0.0200 , 0.0192 , 0.0190 , 0.0184 , 0.0174 , 0.0163 , 0.0158 , 0.0142 , 0.0137 , 0.0129 , 0.0125 , 0.0115 , 0.0101 , 0.0086 , 0.0076 , 0.0086 , 0.0082 , 0.0084 , 0.0083 , 0.0075 , 0.0094 , 0.0095 , 0.0104 , 0.0114 , 0.0110 , 0.0105 , 0.0103 , 0.0134 , 0.0125 , 0.0137 , 0.0140 , 0.0150 , 0.0161 , 0.0174 , 0.0170 , 0.0170 , 0.0168 , 0.0168 , 0.0164 , 0.0177 , 0.0161 , 0.0163 , 0.0161 , 0.0155 , 0.0155 , 0.0157 , 0.0164 , 0.0169 , 0.0172 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0182 , 0.0179 , 0.0177 , 0.0172 , 0.0174 , 0.0168 , 0.0168 , 0.0165 , 0.0174 , 0.0178 , 0.0175 , 0.0170 , 0.0178 , 0.0176 , 0.0167 , 0.0165 , 0.0163 , 0.0163 , 0.0165 , 0.0158 , 0.0160 , 0.0157 , 0.0157 , 0.0160 , 0.0158 , 0.0156 , 0.0158 , 0.0158 , 0.0174 , 0.0173 , 0.0175 , 0.0175 , 0.0177 , 0.0175 , 0.0178 , 0.0178 , 0.0182 , 0.0184 , 0.0183 , 0.0181 , 0.0176 , 0.0177 , 0.0174 , 0.0175 , 0.0176 , 0.0173 , 0.0169 , 0.0170 , 0.0167 , 0.0164 , 0.0162 , 0.0160 , 0.0161 , 0.0157 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0156 , 0.0156 , 0.0156 , 0.0156 , 0.0156 , 0.0157 , 0.0156 , 0.0156 , 0.0156 , 0.0158 , 0.0158 , 0.0158 , 0.0158 , 0.0158 , 0.0159 , 0.0160 , 0.0159 , 0.0159 , 0.0160 , 0.0161 , 0.0160 , 0.0160 , 0.0160 , 0.0160 , 0.0159 , 0.0160 , 0.0159 , 0.0158 , 0.0157 , 0.0156 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0154 , 0.0154 , 0.0153 , 0.0153 , 0.0153 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0154 , 0.0153 , 0.0154 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0154 , 0.0154 , 0.0154 , 0.0154 , 0.0155 , 0.0156 , 0.0155 , 0.0156 , 0.0155],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        dashStyle: 'shortdot',
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Reported Confirmed Cases - Commulative',
        type: 'spline',
		yAxis: 3,
		data: [210,239,250,261,263,272,287,306,317,352,365,389,399,433,494,582,655,701,731,831,968,1063,1172,1257,1344,1486,1636,1805,1934,2020,2156,2336,2506,2670,2915,3166,3345,3521,3630,3759,3954,4070,4469,4532,4663,4848,5034,5175,5425,5570,5689,5846,5846,5846,5846,5846,5846,5846,6386,6666,6774,6973,7120,7402,7560,7766,7969,8181,8475,8803,9147,9503,10207,10511,11072,11524,11933,12693,13968,14547,15200,15810,16615,17530,17999,17999,19289,19877,20336,20900,21452,22253,22818,23591,24175,25118,26204,27242,28894,29876,31336,32722,34058,35836,37665,39033,40671,42143,43688,45221,46407,48140,49654,51122,52131,53304,54409,55213,56516,57466,58672,59648,60784,61700,62578,63367,63888,64301,64786,65486,66224,66913,67515,68131,68820,69709,70422,71083,71687,72173,72700,73332,73944,74584,75368,76098,76988,77860,78819,79437,80003,80895,81797,82662,83429,84295,85136,85718,86430,87169,87834,88434,89137,89860,90490,91118,91693,92229,92858,93343,93707,94218,94820,95301,95789,96169,96583,96942,97502,97881,98391,98746,99201,99675,99982,100327,100727,101248,101757,102321,102720,103056,103395,103928,104427,104879,105352,105785,106203,106591,107109],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>

<script>


function display_pro_1(id, value1, value2, value3, value4, start1, start2, start3, start4, region){
	Highcharts.chart(id, {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: region,
        align: 'center'
    },
	
	credits: {
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        }
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 0,
		data: value1,
    pointStart: Date.UTC(2020, start1[0], start1[1]),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    },  {
        name: 'Case Fatality Rate - Actual (Death/confirmed)',
        type: 'spline',
		yAxis: 1,
		data: value3,
    pointStart: Date.UTC(2020, start3[0], start3[1]),
    pointInterval: 24 * 3600 * 1000,
        dashStyle: 'shortdot',
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Reported Confirmed Cases - Commulative',
        type: 'spline',
		yAxis: 2,
		data: value4,
    pointStart: Date.UTC(2020, start4[0], start4[1]),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});
}

</script>



<script>

Highcharts.chart('container_fatality_africa', {

    title: {
        text: ''
    },

    yAxis: {
		
        title: {
            text: 'Positivity Rate'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Kenya - Case Fatality Rate',
    data: [0.0462 , 0.0476 , 0.0471 , 0.0503 , 0.0543 , 0.0554 , 0.0576 , 0.0602 , 0.0564 , 0.0548 , 0.0519 , 0.0486 , 0.0451 , 0.0431 , 0.0419 , 0.0420 , 0.0404 , 0.0386 , 0.0374 , 0.0358 , 0.0355 , 0.0334 , 0.0326 , 0.0341 , 0.0339 , 0.0334 , 0.0333 , 0.0319 , 0.0319 , 0.0304 , 0.0297 , 0.0294 , 0.0288 , 0.0286 , 0.0290 , 0.0289 , 0.0287 , 0.0279 , 0.0272 , 0.0265 , 0.0275 , 0.0272 , 0.0270 , 0.0260 , 0.0261 , 0.0258 , 0.0250 , 0.0245 , 0.0248 , 0.0243 , 0.0236 , 0.0233 , 0.0232 , 0.0223 , 0.0219 , 0.0214 , 0.0210 , 0.0203 , 0.0203 , 0.0202 , 0.0198 , 0.0193 , 0.0192 , 0.0189 , 0.0183 , 0.0191 , 0.0187 , 0.0186 , 0.0182 , 0.0184 , 0.0176 , 0.0175 , 0.0173 , 0.0176 , 0.0176 , 0.0169 , 0.0168 , 0.0167 , 0.0159 , 0.0159 , 0.0161 , 0.0163 , 0.0163 , 0.0165 , 0.0170 , 0.0167 , 0.0169 , 0.0167 , 0.0164 , 0.0163 , 0.0164 , 0.0162 , 0.0159 , 0.0157 , 0.0160 , 0.0162 , 0.0160 , 0.0159 , 0.0158 , 0.0157 , 0.0159 , 0.0159 , 0.0163 , 0.0164 , 0.0167 , 0.0169 , 0.0169 , 0.0170 , 0.0170 , 0.0171 , 0.0170 , 0.0169 , 0.0169 , 0.0169 , 0.0169 , 0.0168 , 0.0167 , 0.0169 , 0.0169 , 0.0170 , 0.0170 , 0.0170 , 0.0169 , 0.0171 , 0.0172 , 0.0172 , 0.0172 , 0.0172 , 0.0172 , 0.0172 , 0.0175 , 0.0176 , 0.0176 , 0.0175 , 0.0175 , 0.0175 , 0.0177 , 0.0178 , 0.0178 , 0.0181 , 0.0182 , 0.0181 , 0.0183 , 0.0184 , 0.0185 , 0.0185 , 0.0186 , 0.0186 , 0.0185 , 0.0186 , 0.0188 , 0.0187 , 0.0187 , 0.0186 , 0.0185 , 0.0184 , 0.0187 , 0.0188 , 0.0187 , 0.0187 , 0.0187 , 0.0187 , 0.0185 , 0.0186 , 0.0184 , 0.0186 , 0.0184 , 0.0185 , 0.0184 , 0.0181 , 0.0184 , 0.0184 , 0.0180 , 0.0183 , 0.0182 , 0.0180 , 0.0181 , 0.0181 , 0.0182 , 0.0179 , 0.0180 , 0.0180 , 0.0179 , 0.0178 , 0.0179 , 0.0179 , 0.0179 , 0.0180 , 0.0180 , 0.0180 , 0.0181 , 0.0182 , 0.0182 , 0.0181 , 0.0179 , 0.0179 , 0.0179 , 0.0178 , 0.0179 , 0.0179 , 0.0179 , 0.0178 , 0.0176 , 0.0175],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Rwanda - Case Fatality Rate',
    data: [0.0028 , 0.0027 , 0.0027 , 0.0052 , 0.0050 , 0.0049 , 0.0048 , 0.0046 , 0.0046 , 0.0044 , 0.0043 , 0.0042 , 0.0040 , 0.0039 , 0.0037 , 0.0034 , 0.0033 , 0.0031 , 0.0031 , 0.0031 , 0.0030 , 0.0028 , 0.0027 , 0.0025 , 0.0025 , 0.0024 , 0.0024 , 0.0023 , 0.0023 , 0.0022 , 0.0020 , 0.0020 , 0.0029 , 0.0028 , 0.0028 , 0.0027 , 0.0027 , 0.0027 , 0.0026 , 0.0025 , 0.0025 , 0.0024 , 0.0031 , 0.0030 , 0.0029 , 0.0028 , 0.0028 , 0.0027 , 0.0027 , 0.0032 , 0.0032 , 0.0031 , 0.0030 , 0.0030 , 0.0029 , 0.0029 , 0.0029 , 0.0027 , 0.0027 , 0.0026 , 0.0026 , 0.0025 , 0.0025 , 0.0024 , 0.0024 , 0.0024 , 0.0024 , 0.0024 , 0.0024 , 0.0023 , 0.0028 , 0.0033 , 0.0033 , 0.0032 , 0.0037 , 0.0036 , 0.0035 , 0.0034 , 0.0033 , 0.0031 , 0.0039 , 0.0038 , 0.0040 , 0.0040 , 0.0038 , 0.0039 , 0.0042 , 0.0042 , 0.0041 , 0.0041 , 0.0043 , 0.0042 , 0.0040 , 0.0039 , 0.0039 , 0.0040 , 0.0042 , 0.0042 , 0.0041 , 0.0043 , 0.0043 , 0.0045 , 0.0047 , 0.0049 , 0.0049 , 0.0048 , 0.0048 , 0.0048 , 0.0048 , 0.0047 , 0.0049 , 0.0054 , 0.0055 , 0.0055 , 0.0057 , 0.0057 , 0.0056 , 0.0056 , 0.0060 , 0.0060 , 0.0060 , 0.0060 , 0.0060 , 0.0060 , 0.005988 , 0.005983 , 0.005977 , 0.005960 , 0.005958 , 0.005951 , 0.005939 , 0.005937 , 0.006135 , 0.006132 , 0.006332 , 0.006524 , 0.006520 , 0.006680 , 0.006663 , 0.006848 , 0.006840 , 0.006836 , 0.006811 , 0.006804 , 0.006784 , 0.006777 , 0.006730 , 0.006719 , 0.006711 , 0.006702 , 0.006884 , 0.006824 , 0.006821 , 0.006817 , 0.006813 , 0.006801 , 0.006790 , 0.006780 , 0.006765 , 0.006934 , 0.006912 , 0.006906 , 0.006894 , 0.007249 , 0.007602 , 0.007718 , 0.007708 , 0.007833 , 0.007786 , 0.008249 , 0.008195 , 0.008353 , 0.008299 , 0.008299 , 0.008235 , 0.008185 , 0.008297 , 0.008208 , 0.008174 , 0.008133 , 0.008033 , 0.008004 , 0.007978],
    pointStart: Date.UTC(2020, 4, 31),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Mozambique - Case Fatality Rate',
		data: [0.0048 , 0.0047 , 0.0044 , 0.0086 , 0.0085 , 0.0082 , 0.0079 , 0.0079 , 0.0065 , 0.0063 , 0.0057 , 0.0056 , 0.0049 , 0.0047 , 0.0046 , 0.0044 , 0.0042 , 0.0041 , 0.0039 , 0.0036 , 0.0051 , 0.0049 , 0.0063 , 0.0061 , 0.0060 , 0.0060 , 0.0058 , 0.0068 , 0.0068 , 0.0066 , 0.0066 , 0.0063 , 0.0061 , 0.0060 , 0.0058 , 0.0068 , 0.0067 , 0.0066 , 0.0065 , 0.0064 , 0.0072 , 0.0081 , 0.0079 , 0.0077 , 0.0075 , 0.0082 , 0.0081 , 0.0079 , 0.0078 , 0.0074 , 0.0071 , 0.0068 , 0.0065 , 0.0064 , 0.0070 , 0.0067 , 0.0073 , 0.0072 , 0.0071 , 0.0070 , 0.0069 , 0.0068 , 0.0066 , 0.0065 , 0.0064 , 0.0063 , 0.0061 , 0.0059 , 0.0058 , 0.0067 , 0.0071 , 0.0074 , 0.0072 , 0.0071 , 0.0068 , 0.0071 , 0.0071 , 0.0066 , 0.0069 , 0.0074 , 0.0072 , 0.0070 , 0.0068 , 0.0067 , 0.0065 , 0.0065 , 0.0062 , 0.0064 , 0.0063 , 0.0061 , 0.0059 , 0.0061 , 0.0060 , 0.0058 , 0.0058 , 0.0057 , 0.0059 , 0.0060 , 0.0059 , 0.0057 , 0.0061 , 0.0062 , 0.0061 , 0.0060 , 0.0061 , 0.0059 , 0.0060 , 0.0059 , 0.0064 , 0.0063 , 0.0069 , 0.0066 , 0.0064 , 0.0065 , 0.0065 , 0.0063 , 0.0064 , 0.0063 , 0.0064 , 0.0064 , 0.0063 , 0.0067 , 0.0069 , 0.0070 , 0.0070 , 0.0073 , 0.0071 , 0.0069 , 0.0070 , 0.0070 , 0.0071 , 0.0071 , 0.0072 , 0.0071 , 0.0071 , 0.0072 , 0.0071 , 0.0071 , 0.0071 , 0.0071 , 0.0071 , 0.0071 , 0.0070 , 0.0069 , 0.0069 , 0.0069 , 0.0069 , 0.0068 , 0.0070 , 0.0070 , 0.0070 , 0.0070 , 0.0071 , 0.0072 , 0.0072 , 0.0073 , 0.0073 , 0.0073 , 0.0071 , 0.0071 , 0.0072 , 0.0072 , 0.0072 , 0.0072 , 0.0072 , 0.0073 , 0.0073 , 0.0072 , 0.0072 , 0.0072 , 0.0075 , 0.0074 , 0.0077 , 0.0077 , 0.0078 , 0.0080 , 0.0081 , 0.0081 , 0.0082 , 0.0081 , 0.0082 , 0.0082 , 0.0083 , 0.0083 , 0.0084],
    pointStart: Date.UTC(2020, 4, 26),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Malawi - Case Fatality Rate',
		data: [0.0536 , 0.0536 , 0.0526 , 0.0517 , 0.0476 , 0.0476 , 0.0476 , 0.0462 , 0.0429 , 0.0429 , 0.0423 , 0.0417 , 0.0417 , 0.0366 , 0.0482 , 0.0482 , 0.0396 , 0.0396 , 0.0396 , 0.0197 , 0.0147 , 0.0143 , 0.0141 , 0.0119 , 0.0112 , 0.0108 , 0.0102 , 0.0098 , 0.0098 , 0.0091 , 0.0090 , 0.0088 , 0.0088 , 0.0083 , 0.0083 , 0.0095 , 0.0110 , 0.0108 , 0.0106 , 0.0105 , 0.0135 , 0.0129 , 0.0129 , 0.0151 , 0.0137 , 0.0130 , 0.0117 , 0.0125 , 0.0129 , 0.0125 , 0.0113 , 0.0114 , 0.0126 , 0.0119 , 0.0114 , 0.0107 , 0.0105 , 0.0109 , 0.0105 , 0.0128 , 0.0130 , 0.0146 , 0.0150 , 0.0146 , 0.0161 , 0.0160 , 0.0160 , 0.0164 , 0.0188 , 0.0196 , 0.0203 , 0.0207 , 0.0210 , 0.0225 , 0.0230 , 0.0233 , 0.0252 , 0.0252 , 0.0272 , 0.0278 , 0.0278 , 0.0277 , 0.0274 , 0.0280 , 0.0287 , 0.0291 , 0.0288 , 0.0294 , 0.0307 , 0.0305 , 0.0299 , 0.0309 , 0.0313 , 0.0312 , 0.0323 , 0.0320 , 0.0311 , 0.0313 , 0.0312 , 0.0317 , 0.0317 , 0.0314 , 0.0313 , 0.0313 , 0.0312 , 0.0312 , 0.0312 , 0.0312 , 0.0313 , 0.0316 , 0.0315 , 0.0315 , 0.0315 , 0.0314 , 0.0314 , 0.0314 , 0.0314 , 0.0313 , 0.0312 , 0.0312 , 0.0312 , 0.0313 , 0.0313 , 0.0311 , 0.0311 , 0.0312 , 0.0312 , 0.0311 , 0.0312 , 0.0312 , 0.0312 , 0.0313 , 0.0313 , 0.0313 , 0.0312 , 0.0312 , 0.0312 , 0.0312 , 0.0311 , 0.0311 , 0.0311 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0309 , 0.0311 , 0.0311 , 0.0310 , 0.0310 , 0.0310 , 0.0309 , 0.0309 , 0.0309 , 0.0311 , 0.0311 , 0.0310 , 0.0310 , 0.0309 , 0.0309 , 0.0309 , 0.0311 , 0.0312 , 0.0312 , 0.0311 , 0.0311 , 0.0311 , 0.0310 , 0.0310 , 0.0312 , 0.0311 , 0.0311 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0309 , 0.0309 , 0.0311 , 0.0311 , 0.0311 , 0.0311 , 0.0310 , 0.0310 , 0.0310 , 0.0310 , 0.0309 , 0.0308 , 0.0308 , 0.0308],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
    },{
        name: 'Zambia - Case Fatality Rate',
		data: [0.0278 , 0.0262 , 0.0262 , 0.0159 , 0.0157 , 0.0107 , 0.0105 , 0.0103 , 0.0093 , 0.0092 , 0.0091 , 0.0084 , 0.0081 , 0.0076 , 0.0076 , 0.0076 , 0.0076 , 0.0076 , 0.0066 , 0.0066 , 0.0066 , 0.0066 , 0.0066 , 0.0064 , 0.0064 , 0.0064 , 0.0063 , 0.0063 , 0.0061 , 0.0061 , 0.0083 , 0.0083 , 0.0080 , 0.0080 , 0.0076 , 0.0074 , 0.0081 , 0.0080 , 0.0078 , 0.0078 , 0.0078 , 0.0077 , 0.0077 , 0.0077 , 0.0077 , 0.0122 , 0.0121 , 0.0120 , 0.0137 , 0.0137 , 0.0141 , 0.0140 , 0.0151 , 0.0184 , 0.0184 , 0.0184 , 0.0184 , 0.0184 , 0.0184 , 0.0222 , 0.0222 , 0.0222 , 0.0222 , 0.0222 , 0.0222 , 0.0222 , 0.0359 , 0.0359 , 0.0359 , 0.0388 , 0.0366 , 0.0366 , 0.0361 , 0.0361 , 0.0357 , 0.0357 , 0.0337 , 0.0300 , 0.0310 , 0.0308 , 0.0284 , 0.0278 , 0.0268 , 0.0253 , 0.0265 , 0.0268 , 0.0260 , 0.0260 , 0.0251 , 0.0278 , 0.0267 , 0.0257 , 0.0291 , 0.0294 , 0.0291 , 0.0289 , 0.0284 , 0.0284 , 0.0283 , 0.0278 , 0.0268 , 0.0265 , 0.0263 , 0.0264 , 0.0261 , 0.0261 , 0.0253 , 0.0251 , 0.0250 , 0.0248 , 0.0243 , 0.0240 , 0.0239 , 0.0239 , 0.0238 , 0.0234 , 0.0235 , 0.0233 , 0.0231 , 0.0230 , 0.0231 , 0.0230 , 0.0229 , 0.0229 , 0.0227 , 0.0230 , 0.0232 , 0.0230 , 0.0233 , 0.0234 , 0.0235 , 0.0234 , 0.0235 , 0.0235 , 0.0234 , 0.0234 , 0.0230 , 0.0230 , 0.0229 , 0.0229 , 0.0227 , 0.0227 , 0.0226 , 0.0226 , 0.0225 , 0.0225 , 0.0225 , 0.0222 , 0.0221 , 0.0221 , 0.0220 , 0.0219 , 0.0219 , 0.0219 , 0.0219 , 0.0217 , 0.0222 , 0.0221 , 0.0221 , 0.0221 , 0.0221 , 0.0219 , 0.0218 , 0.0218 , 0.0216 , 0.0216 , 0.0216 , 0.0215 , 0.0216 , 0.0216 , 0.0215 , 0.0214 , 0.0213 , 0.0213 , 0.0213 , 0.0212 , 0.0212 , 0.0211 , 0.0209 , 0.0209 , 0.0208 , 0.0208 , 0.0206 , 0.0206 , 0.0206 , 0.0206 , 0.0205 , 0.0205 , 0.0205 , 0.0205 , 0.0206 , 0.0205 , 0.0205 , 0.0206 , 0.0205 , 0.0205 , 0.0205 , 0.0205 , 0.0205 , 0.0204 , 0.0204 , 0.0203 , 0.0203 , 0.0203],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
    }, {
        name: 'Ethiopia - Case Fatality Rate',
       
		
        data: [0.0238 , 0.0209 , 0.0200 , 0.0192 , 0.0190 , 0.0184 , 0.0174 , 0.0163 , 0.0158 , 0.0142 , 0.0137 , 0.0129 , 0.0125 , 0.0115 , 0.0101 , 0.0086 , 0.0076 , 0.0086 , 0.0082 , 0.0084 , 0.0083 , 0.0075 , 0.0094 , 0.0095 , 0.0104 , 0.0114 , 0.0110 , 0.0105 , 0.0103 , 0.0134 , 0.0125 , 0.0137 , 0.0140 , 0.0150 , 0.0161 , 0.0174 , 0.0170 , 0.0170 , 0.0168 , 0.0168 , 0.0164 , 0.0177 , 0.0161 , 0.0163 , 0.0161 , 0.0155 , 0.0155 , 0.0157 , 0.0164 , 0.0169 , 0.0172 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0176 , 0.0182 , 0.0179 , 0.0177 , 0.0172 , 0.0174 , 0.0168 , 0.0168 , 0.0165 , 0.0174 , 0.0178 , 0.0175 , 0.0170 , 0.0178 , 0.0176 , 0.0167 , 0.0165 , 0.0163 , 0.0163 , 0.0165 , 0.0158 , 0.0160 , 0.0157 , 0.0157 , 0.0160 , 0.0158 , 0.0156 , 0.0158 , 0.0158 , 0.0174 , 0.0173 , 0.0175 , 0.0175 , 0.0177 , 0.0175 , 0.0178 , 0.0178 , 0.0182 , 0.0184 , 0.0183 , 0.0181 , 0.0176 , 0.0177 , 0.0174 , 0.0175 , 0.0176 , 0.0173 , 0.0169 , 0.0170 , 0.0167 , 0.0164 , 0.0162 , 0.0160 , 0.0161 , 0.0157 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0156 , 0.0156 , 0.0156 , 0.0156 , 0.0156 , 0.0157 , 0.0156 , 0.0156 , 0.0156 , 0.0158 , 0.0158 , 0.0158 , 0.0158 , 0.0158 , 0.0159 , 0.0160 , 0.0159 , 0.0159 , 0.0160 , 0.0161 , 0.0160 , 0.0160 , 0.0160 , 0.0160 , 0.0159 , 0.0160 , 0.0159 , 0.0158 , 0.0157 , 0.0156 , 0.0155 , 0.0155 , 0.0155 , 0.0155 , 0.0154 , 0.0154 , 0.0153 , 0.0153 , 0.0153 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0152 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0154 , 0.0153 , 0.0154 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0153 , 0.0154 , 0.0154 , 0.0154 , 0.0154 , 0.0155 , 0.0156 , 0.0155 , 0.0156 , 0.0155],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000
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

</script>

<script>
Highcharts.chart('container_ethiopia', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
	
	credits:{
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Daily',
        type: 'spline',
        yAxis: 2,
		data: [1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1,1,0,3,1,2,3,1,1,1,7,0,5,3,5,7,8,2,3,1,2,2,7,0,2,1,0,3,3,8,5,4,5,0,0,0,0,0,0,13,3,1,0,4,0,3,1,11,7,2,2,13,4,3,3,7,8,9,3,23,5,11,14,10,11,10,0,52,7,13,9,15,10,17,13,20,23,16,13,17,19,16,28,28,20,17,25,16,14,17,16,20,13,12,23,16,19,18,10,24,17,21,15,16,17,8,12,10,17,9,13,10,15,12,17,7,12,19,14,7,7,10,5,7,14,7,7,3,6,8,8,8,17,7,9,6,10,14,4,7,13,12,9,6,13,6,13,12,4,19,7,11,8,6,6,7,5,9,11,5,9,5,4,6,5,7,7,8,9,4,7,4,12,7,13,6,13,16,11,4,10],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    }, {
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 3,
		data: [5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,6,6,7,8,8,11,12,14,17,18,19,20,27,27,32,35,40,47,55,57,60,61,63,65,72,72,74,75,75,78,81,89,94,98,103,103,103,103,103,103,103,116,119,120,120,124,124,127,128,139,146,148,150,163,167,170,173,180,188,197,200,223,228,239,253,263,274,284,284,336,343,356,365,380,390,407,420,440,463,479,492,509,528,544,572,600,620,637,662,678,692,709,725,745,758,770,793,809,828,846,856,880,897,918,933,949,966,974,986,996,1013,1022,1035,1045,1060,1072,1089,1096,1108,1127,1141,1148,1155,1165,1170,1177,1191,1198,1205,1208,1214,1222,1230,1238,1255,1262,1271,1277,1287,1301,1305,1312,1325,1337,1346,1352,1365,1371,1384,1396,1400,1419,1426,1437,1445,1451,1457,1464,1469,1478,1489,1494,1503,1508,1512,1518,1523,1530,1537,1545,1554,1558,1565,1569,1581,1588,1601,1607,1620,1636,1647,1651,1661,1664],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Number of Case - Daily',
        type: 'spline',
		yAxis: 0,
		data: [16,29,11,11,2,9,15,19,11,35,13,24,10,34,61,88,73,46,30,100,137,95,109,85,87,142,150,169,129,86,136,180,170,164,245,251,179,176,109,129,195,116,399,63,131,185,186,141,250,145,119,157,77,77,77,77,77,77,77,280,108,199,147,282,158,206,203,212,294,328,344,356,704,304,561,452,409,760,1275,579,653,610,805,915,469,645,645,588,459,564,552,801,565,773,584,943,1086,1038,1652,982,1460,1386,1336,1778,1829,1368,1638,1472,1545,1533,1186,1733,1514,1468,1009,1173,1105,804,1303,950,1206,976,1136,916,878,789,521,413,485,700,738,689,602,616,689,889,713,661,604,486,527,632,612,640,784,730,890,872,959,618,566,892,902,865,767,866,841,582,712,739,665,600,703,723,630,628,575,536,629,485,364,511,602,481,488,380,414,359,560,379,510,355,455,474,307,345,400,521,509,564,399,336,339,533,499,452,473,433,418,388,518],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Number of Case - Commulative',
        type: 'spline',
		yAxis: 1,
		data: [210,239,250,261,263,272,287,306,317,352,365,389,399,433,494,582,655,701,731,831,968,1063,1172,1257,1344,1486,1636,1805,1934,2020,2156,2336,2506,2670,2915,3166,3345,3521,3630,3759,3954,4070,4469,4532,4663,4848,5034,5175,5425,5570,5689,5846,5846,5846,5846,5846,5846,5846,6386,6666,6774,6973,7120,7402,7560,7766,7969,8181,8475,8803,9147,9503,10207,10511,11072,11524,11933,12693,13968,14547,15200,15810,16615,17530,17999,17999,19289,19877,20336,20900,21452,22253,22818,23591,24175,25118,26204,27242,28894,29876,31336,32722,34058,35836,37665,39033,40671,42143,43688,45221,46407,48140,49654,51122,52131,53304,54409,55213,56516,57466,58672,59648,60784,61700,62578,63367,63888,64301,64786,65486,66224,66913,67515,68131,68820,69709,70422,71083,71687,72173,72700,73332,73944,74584,75368,76098,76988,77860,78819,79437,80003,80895,81797,82662,83429,84295,85136,85718,86430,87169,87834,88434,89137,89860,90490,91118,91693,92229,92858,93343,93707,94218,94820,95301,95789,96169,96583,96942,97502,97881,98391,98746,99201,99675,99982,100327,100727,101248,101757,102321,102720,103056,103395,103928,104427,104879,105352,105785,106203,106591,107109],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>

<script>
Highcharts.chart('container_kenya', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
    credits: {
		enabled: false
	},
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Daily',
        type: 'spline',
        yAxis: 2,
		data: [1,2,1,3,4,2,3,5,0,0,0,0,0,0,0,1,1,0,3,3,4,1,1,5,2,3,4,1,4,1,1,3,1,3,4,4,3,1,1,2,10,2,2,2,2,3,2,2,5,4,2,1,4,1,3,2,5,1,4,3,2,4,8,3,1,12,5,7,4,9,3,9,4,12,10,3,11,4,2,5,14,12,14,16,23,5,13,6,3,8,14,5,2,3,15,18,4,5,7,2,8,5,19,10,16,10,6,6,5,5,3,0,5,2,3,0,0,8,4,5,3,2,0,8,5,4,3,3,0,2,10,8,4,0,2,2,9,5,5,13,7,2,9,7,4,7,7,3,3,4,8,5,3,4,5,6,11,10,10,8,8,12,7,7,3,16,12,14,12,6,18,14,0,30,17,15,17,14,12,12,21,21,10,8,19,24,0,49,25,21,20,18,15,11,17,19,17,14,12,17,8,10,14,4],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    }, {
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 3,
		data: [30,32,33,36,40,42,45,50,50,50,50,50,50,50,50,51,52,52,55,58,62,63,64,69,71,74,78,79,83,84,85,88,89,92,96,100,103,104,105,107,117,119,121,123,125,128,130,132,137,141,143,144,148,149,152,154,159,160,164,167,169,173,181,184,185,197,202,209,213,222,225,234,238,250,260,263,274,278,280,285,299,311,325,341,364,369,382,388,391,399,413,418,420,423,438,456,460,465,472,474,482,487,506,516,532,542,548,554,559,564,567,567,572,574,577,577,577,585,589,594,597,599,599,607,612,616,619,622,622,624,634,642,646,646,648,650,659,664,669,682,689,691,700,707,711,718,725,728,731,735,743,748,751,755,760,766,777,787,797,805,813,825,832,839,842,858,870,884,896,902,920,934,934,964,981,996,1013,1027,1039,1051,1072,1093,1103,1111,1130,1154,1154,1203,1228,1249,1269,1287,1302,1313,1330,1349,1366,1380,1392,1409,1417,1427,1441,1445],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Number of Case - Daily',
        type: 'spline',
		yAxis: 0,
		data: [28,23,28,15,22,21,23,49,57,25,51,66,80,52,31,22,72,62,123,147,127,143,74,59,72,123,124,134,126,167,95,127,105,121,90,152,137,133,133,184,213,117,104,260,59,155,254,178,149,278,259,120,176,307,268,247,389,309,181,183,278,447,473,278,379,189,497,461,421,389,688,603,418,397,637,796,667,375,960,372,606,544,788,723,727,690,544,605,671,538,727,699,599,492,497,679,650,580,515,271,245,271,379,426,322,355,246,193,246,213,373,241,164,263,144,114,178,212,179,136,83,102,151,104,143,190,176,188,0,48,96,275,148,105,152,98,139,130,141,218,164,244,53,210,151,184,210,261,243,22,137,321,271,442,538,388,73,318,604,602,437,616,685,195,571,497,1068,631,947,931,276,836,1018,761,1185,1395,685,724,492,1494,1008,1109,1065,719,756,1344,1067,1067,1470,1080,972,559,925,957,1459,1048,1211,968,413,727,810,780,1554,949],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Number of Case - Commulative',
        type: 'spline',
		yAxis: 1,
		data: [649,672,700,715,737,758,781,830,887,912,963,1029,1109,1161,1192,1214,1286,1348,1471,1618,1745,1888,1962,2021,2093,2216,2340,2474,2600,2767,2862,2989,3094,3215,3305,3457,3594,3727,3860,4044,4257,4374,4478,4738,4797,4952,5206,5384,5533,5811,6070,6190,6366,6673,6941,7188,7577,7886,8067,8250,8528,8975,9448,9726,10105,10294,10791,11252,11673,12062,12750,13353,13771,14168,14805,15601,16268,16643,17603,17975,18581,19125,19913,20636,21363,22053,22597,23202,23873,24411,25138,25837,26436,26928,27425,28104,28754,29334,29849,30120,30365,30636,31015,31441,31763,32118,32364,32557,32803,33016,33389,33630,33794,34057,34201,34315,34493,34705,34884,35020,35103,35205,35356,35460,35603,35793,35969,36157,36157,36205,36301,36576,36724,36829,36981,37079,37218,37348,37489,37707,37871,38115,38168,38378,38529,38713,38923,39184,39427,39449,39586,39907,40178,40620,41158,41546,41619,41937,42541,43143,43580,44196,44881,45076,45647,46144,47212,47843,48790,49721,49997,50833,51851,52612,53797,55192,55877,56601,57093,58587,59595,60704,61769,62488,63244,64588,64588,66723,68193,69273,70245,70804,71729,72686,74145,75193,76404,77372,77785,78512,79322,80102,81656,82605],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>


<script>
Highcharts.chart('container_rwanda', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
	
	credits: {
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Daily',
        type: 'spline',
        yAxis: 2,
		data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,1,0,0,0,0,0,2,0,1,0,0,1,2,1,0,0,1,0,0,0,0,1,1,0,0,1,0,1,1,1,0,0,0,0,0,0,1,2,1,0,1,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1,1,0,1,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,1,0,0,0,2,2,1,0,1,0,3,0,1,0,0,0,0,1,0,0,0,0,0,0],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    }, {
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 3,
		data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3,3,3,3,3,4,4,4,4,4,4,4,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,6,7,7,7,8,8,8,8,8,8,10,10,11,11,11,12,14,15,15,15,16,16,16,16,16,17,18,18,18,19,19,20,21,22,22,22,22,22,22,22,23,25,26,26,27,27,27,27,29,29,29,29,29,29,29,29,29,29,29,29,29,29,30,30,31,32,32,33,33,34,34,34,34,34,34,34,34,34,34,34,35,35,35,35,35,35,35,35,35,36,36,36,36,38,40,41,41,42,42,45,45,46,46,46,46,46,47,47,47,47,47,47,47],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Number of Case - Daily',
        type: 'spline',
		yAxis: 0,
		data: [1,4,0,2,4,0,6,0,2,17,4,1,9,4,6,10,0,5,7,0,7,13,2,1,0,5,3,5,2,6,1,7,2,2,5,1,3,0,3,3,1,22,7,8,16,5,13,18,6,6,4,2,0,7,3,2,7,4,1,1,1,0,0,2,3,5,11,6,6,1,4,2,9,3,7,3,6,4,11,7,7,13,13,10,11,8,12,12,13,18,16,31,41,30,24,3,7,15,41,26,59,11,32,20,8,20,22,101,24,17,21,18,11,13,8,59,22,16,42,47,38,41,38,19,38,12,54,43,47,26,34,21,19,23,69,58,47,10,58,28,20,20,30,7,5,7,17,6,6,12,19,18,11,93,59,101,87,37,67,73,63,109,200,217,231,88,47,70,101,177,43,79,76,37,49,45,25,35,30,21,19,55,31,26,11,22,10,19,18,18,22,11,16,41,10,9,13,9,12,4,4,3,4,5,14,1,6,10,2,5,2,4,9,3,32,13,12,6,3,18,5,15,5,35,8,6,7,11,45,2,3,3,9,9,7,12,18,16,5,9,20,20,50,7,43,32,61,36,16,36,0,43,34,45,61,24,29,72,21,19],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Number of Case - Commulative',
        type: 'spline',
		yAxis: 1,
		data: [1,5,5,7,11,11,17,17,19,36,40,41,50,54,60,70,70,75,82,82,89,102,104,105,105,110,113,118,120,126,127,134,136,138,143,144,147,147,150,153,154,176,183,191,207,212,225,243,249,255,259,261,261,268,271,273,280,284,285,286,287,287,287,289,292,297,308,314,320,321,325,327,336,339,346,349,355,359,370,377,384,397,410,420,431,439,451,463,476,494,510,541,582,612,636,639,646,661,702,728,787,798,830,850,858,878,900,1001,1025,1042,1063,1081,1092,1105,1113,1172,1194,1210,1252,1299,1337,1378,1416,1435,1473,1485,1539,1582,1629,1655,1689,1710,1729,1752,1821,1879,1926,1936,1994,2022,2042,2062,2092,2099,2104,2111,2128,2134,2140,2152,2171,2189,2200,2293,2352,2453,2540,2577,2644,2717,2780,2889,3089,3306,3537,3625,3672,3742,3843,4020,4063,4142,4218,4255,4304,4349,4374,4409,4439,4460,4479,4534,4565,4591,4602,4624,4634,4653,4671,4689,4711,4722,4738,4779,4789,4798,4811,4820,4832,4836,4840,4843,4847,4852,4866,4867,4873,4883,4885,4890,4892,4896,4905,4908,4940,4953,4965,4971,4974,4992,4997,5012,5017,5052,5060,5066,5073,5084,5129,5131,5134,5137,5146,5155,5162,5174,5192,5208,5213,5222,5242,5262,5312,5319,5362,5394,5455,5491,5507,5543,5543,5586,5620,5665,5726,5750,5779,5851,5872,5891],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>


<script>
Highcharts.chart('container_mozamique', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
    credits: {
		enabled: false
	},
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Daily',
        type: 'spline',
        yAxis: 2,
		data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,1,0,0,0,0,1,0,0,0,0,0,0,0,1,0,0,0,0,1,1,0,0,0,1,0,0,0,0,0,0,0,0,1,0,1,0,0,0,0,0,0,0,0,0,0,0,0,2,1,1,0,0,0,1,0,0,1,2,0,0,0,0,0,0,0,1,0,0,0,1,0,0,0,0,1,1,0,0,2,1,0,0,1,0,1,0,3,0,4,0,0,2,2,0,1,1,2,1,1,4,2,2,1,4,1,0,2,1,2,0,2,0,1,1,0,1,1,1,1,1,0,0,0,1,1,0,3,1,2,1,3,1,2,1,2,0,0,1,1,1,1,0,2,2,0,0,0,0,5,0,6,0,3,3,2,0,2,1,2,1,2,1,1],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    }, {
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 3,
		data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,3,3,4,4,4,4,4,5,5,5,5,5,5,5,5,6,6,6,6,6,7,8,8,8,8,9,9,9,9,9,9,9,9,9,10,10,11,11,11,11,11,11,11,11,11,11,11,11,11,13,14,15,15,15,15,16,16,16,17,19,19,19,19,19,19,19,19,20,20,20,20,21,21,21,21,21,22,23,23,23,25,26,26,26,27,27,28,28,31,31,35,35,35,37,39,39,40,41,43,44,45,49,51,53,54,58,59,59,61,62,64,64,66,66,67,68,68,69,70,71,72,73,73,73,73,74,75,75,78,79,81,82,85,86,88,89,91,91,91,92,93,94,95,95,97,99,99,99,99,99,104,104,110,110,113,116,118,118,120,121,123,124,126,127,128],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Number of Case - Daily',
        type: 'spline',
		yAxis: 0,
		data: [5,4,12,1,3,8,4,10,8,8,1,10,6,2,4,26,15,4,14,6,1,10,10,0,53,9,36,2,57,15,7,20,19,17,20,44,30,26,29,13,11,6,20,45,4,20,5,26,28,23,20,24,6,14,15,21,30,18,25,28,31,21,19,24,22,62,49,62,53,19,33,56,16,29,21,25,8,26,53,32,19,28,60,56,43,39,27,56,50,41,93,28,28,142,70,78,79,70,83,64,59,0,131,70,80,109,91,45,68,82,61,46,63,61,95,123,78,90,58,76,103,113,90,117,68,86,122,229,213,231,281,167,103,273,234,141,202,148,137,190,168,226,305,268,172,160,91,70,147,100,102,96,145,103,102,157,87,170,134,145,75,95,159,214,110,141,228,189,147,91,175,112,142,110,252,92,119,142,72,81,108,94,92,191,55,0,88,183,133,113,108,66,52,0,157,154,104,56,72,122,71],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Number of Case - Commulative',
        type: 'spline',
		yAxis: 1,
		data: [87,91,103,104,107,115,119,129,137,145,146,156,162,164,168,194,209,213,227,233,234,244,254,254,307,316,352,354,411,426,433,453,472,489,509,553,583,609,638,651,662,668,688,733,737,757,762,788,816,839,859,883,889,903,918,939,969,987,1012,1040,1071,1092,1111,1135,1157,1219,1268,1330,1383,1402,1435,1491,1507,1536,1557,1582,1590,1616,1669,1701,1720,1748,1808,1864,1907,1946,1973,2029,2079,2120,2213,2241,2269,2411,2481,2559,2638,2708,2791,2855,2914,2914,3045,3115,3195,3304,3395,3440,3508,3590,3651,3697,3760,3821,3916,4039,4117,4207,4265,4341,4444,4557,4647,4764,4832,4918,5040,5269,5482,5713,5994,6161,6264,6537,6771,6912,7114,7262,7399,7589,7757,7983,8288,8556,8728,8888,8979,9049,9196,9296,9398,9494,9639,9742,9844,10001,10088,10258,10392,10537,10612,10707,10866,11080,11190,11331,11559,11748,11895,11986,12161,12273,12415,12525,12777,12869,12988,13130,13202,13283,13391,13485,13577,13768,13823,13823,13911,14094,14227,14340,14448,14514,14566,14566,14723,14877,14981,15037,15109,15231,15302],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>

<script>
Highcharts.chart('container_malawi', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
	credits: {
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Daily',
        type: 'spline',
        yAxis: 2,
		data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,2,0,0,3,0,0,0,1,1,0,0,1,2,0,0,0,1,2,0,5,1,4,2,2,5,1,1,3,8,4,4,3,2,7,5,3,8,0,12,4,0,4,2,5,6,3,0,5,8,1,0,6,3,0,6,0,1,3,1,4,0,2,1,0,1,1,0,3,1,3,0,1,0,0,1,0,0,0,0,0,0,1,0,0,0,1,0,0,1,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,1,0,0,0,0,0,0,1,1,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    }, {
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 3,
		data: [3,3,3,3,3,3,3,3,3,3,3,3,3,3,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,4,5,6,6,6,6,8,8,8,11,11,11,11,12,13,13,13,14,16,16,16,16,17,19,19,24,25,29,31,33,38,39,40,43,51,55,59,62,64,71,76,79,87,87,99,103,103,107,109,114,120,123,123,128,136,137,137,143,146,146,152,152,153,156,157,161,161,163,164,164,165,166,166,169,170,173,173,174,174,174,175,175,175,175,175,175,175,176,176,176,176,177,177,177,178,178,178,179,179,179,179,179,179,179,179,179,179,179,179,179,179,179,179,179,179,180,180,180,180,180,180,180,180,181,181,181,181,181,181,181,182,183,183,183,183,183,183,183,184,184,184,184,184,184,184,184,184,184,184,184,185,185,185,185,185,185,185,185,185,185,185,185],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Number of Case - Daily',
        type: 'spline',
		yAxis: 0,
		data: [13,0,1,1,5,0,0,2,5,0,1,1,0,10,1,0,18,0,0,102,70,6,5,52,22,11,24,16,0,29,5,12,0,26,0,48,18,9,8,8,20,28,0,110,73,45,93,19,45,33,108,78,41,77,60,96,115,129,76,59,52,55,85,192,103,66,67,117,98,98,97,85,53,104,153,84,67,0,187,69,0,149,123,97,108,45,42,74,79,65,84,49,34,15,39,40,160,76,38,46,0,121,47,0,42,40,0,97,4,51,22,27,5,8,30,10,3,14,15,3,3,7,9,23,2,14,9,12,7,4,0,10,5,0,15,2,4,9,1,14,2,5,2,2,1,6,4,0,3,8,2,7,6,4,8,0,3,3,2,7,6,10,5,3,1,3,10,11,2,3,4,3,7,12,7,7,2,1,1,0,6,2,6,3,2,0,2,3,4,2,1,6,24,4,3,1],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Number of Case - Commulative',
        type: 'spline',
		yAxis: 1,
		data: [56,56,57,58,63,63,63,65,70,70,71,72,72,82,83,83,101,101,101,203,273,279,284,336,358,369,393,409,409,438,443,455,455,481,481,529,547,556,564,572,592,620,620,730,803,848,941,960,1005,1038,1146,1224,1265,1342,1402,1498,1613,1742,1818,1877,1929,1984,2069,2261,2364,2430,2497,2614,2712,2810,2907,2992,3045,3149,3302,3386,3453,3453,3640,3709,3709,3858,3981,4078,4186,4231,4273,4347,4426,4491,4575,4624,4658,4673,4712,4752,4912,4988,5026,5072,5072,5193,5240,5240,5282,5322,5322,5419,5423,5474,5496,5523,5528,5536,5566,5576,5579,5593,5608,5611,5614,5621,5630,5653,5655,5669,5678,5690,5697,5701,5701,5711,5716,5716,5731,5733,5737,5746,5747,5761,5763,5768,5770,5772,5773,5779,5783,5783,5786,5794,5796,5803,5809,5813,5821,5821,5824,5827,5829,5836,5842,5852,5857,5860,5861,5864,5874,5885,5887,5890,5894,5897,5904,5916,5923,5930,5932,5933,5934,5934,5940,5942,5948,5951,5953,5953,5955,5958,5962,5964,5965,5971,5995,5999,6002,6003],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>


<script>
Highcharts.chart('container_zambia', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
	
	credits: {
		enabled: false
	},
    
   xAxis: [{
    title: {
      text: 'Date'
    },
    type: 'datetime'
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }, { // Fourth yAxis
        gridLineWidth: 0,
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[3]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Number of Death - Daily',
        type: 'spline',
        yAxis: 2,
		data: [3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,3,0,0,0,0,0,1,0,0,0,0,0,0,0,0,7,0,0,3,0,1,0,2,6,0,0,0,0,0,12,0,0,0,0,0,0,40,0,0,27,0,0,11,0,8,0,2,0,9,1,2,4,3,2,14,5,1,0,5,23,1,3,32,6,0,5,0,10,4,0,4,0,5,5,3,0,3,0,2,0,0,1,1,3,1,2,2,0,0,0,3,0,1,4,0,6,6,0,8,4,2,0,3,0,1,1,0,1,0,0,0,0,0,0,0,1,0,0,0,0,1,0,0,1,1,0,9,0,0,1,0,0,0,0,0,0,0,0,2,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,3,0,0,3,0,0,0,1,0,0,0,0,0,0],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' deaths'
        }

    }, {
        name: 'Number of Death - Commulative',
        type: 'spline',
        yAxis: 3,
		data: [7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 7 , 10 , 10 , 10 , 10 , 10 , 10 , 11 , 11 , 11 , 11 , 11 , 11 , 11 , 11 , 11 , 18 , 18 , 18 , 21 , 21 , 22 , 22 , 24 , 30 , 30 , 30 , 30 , 30 , 30 , 42 , 42 , 42 , 42 , 42 , 42 , 42 , 82 , 82 , 82 , 109 , 109 , 109 , 120 , 120 , 128 , 128 , 130 , 130 , 139 , 140 , 142 , 146 , 149 , 151 , 165 , 170 , 171 , 171 , 176 , 199 , 200 , 203 , 235 , 241 , 241 , 246 , 246 , 256 , 260 , 260 , 264 , 264 , 269 , 274 , 277 , 277 , 280 , 280 , 282 , 282 , 282 , 283 , 284 , 287 , 288 , 290 , 292 , 292 , 292 , 292 , 295 , 295 , 296 , 300 , 300 , 306 , 312 , 312 , 320 , 324 , 326 , 326 , 329 , 329 , 330 , 331 , 331 , 332 , 332 , 332 , 332 , 332 , 332 , 332 , 332 , 333 , 333 , 333 , 333 , 333 , 334 , 334 , 334 , 335 , 336 , 336 , 345 , 345 , 345 , 346 , 346 , 346 , 346 , 346 , 346 , 346 , 346 , 346 , 348 , 348 , 348 , 348 , 348 , 348 , 349 , 349 , 349 , 349 , 349 , 349 , 349 , 349 , 349 , 349 , 349 , 350 , 350 , 350 , 350 , 350 , 353 , 353 , 353 , 356 , 356 , 356 , 356 , 357 , 357 , 357 , 357 , 357 , 357 , 357],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' Ratio'
        }

    }, {
        name: 'Number of Case - Daily',
        type: 'spline',
		yAxis: 0,
		data: [85,15,0,174,5,208,14,11,74,8,11,60,34,54,0,0,0,0,137,0,0,0,0,32,0,0,22,0,43,0,46,0,52,0,69,36,1,24,23,7,4,14,0,0,0,47,12,8,34,0,26,11,26,38,0,0,0,0,0,263,0,0,0,0,0,0,388,0,0,527,170,0,346,0,257,0,273,472,153,71,450,247,306,408,265,119,233,0,442,142,322,417,182,125,65,226,162,358,165,157,496,142,237,154,255,0,455,66,137,91,225,178,123,123,72,284,34,108,116,70,67,60,116,160,102,109,143,73,181,99,68,41,94,2,107,44,214,54,48,24,97,29,19,55,44,43,28,144,78,37,81,54,70,77,38,119,91,38,29,43,43,130,64,44,85,18,35,60,22,32,83,43,82,135,90,17,48,63,118,37,72,49,89,46,17,26,39,0,57,4,26,64,56,37,70,23,21,30,30,12,69,18,16,20],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' Ratio'
        }
    }, {
        name: 'Number of Case - Commulative',
        type: 'spline',
		yAxis: 1,
		data: [252,267,267,441,446,654,668,679,753,761,772,832,866,920,920,920,920,920,1057,1057,1057,1057,1057,1089,1089,1089,1111,1111,1154,1154,1200,1200,1252,1252,1321,1357,1358,1382,1405,1412,1416,1430,1430,1430,1430,1477,1489,1497,1531,1531,1557,1568,1594,1632,1632,1632,1632,1632,1632,1895,1895,1895,1895,1895,1895,1895,2283,2283,2283,2810,2980,2980,3326,3326,3583,3583,3856,4328,4481,4552,5002,5249,5555,5963,6228,6347,6580,6580,7022,7164,7486,7903,8085,8210,8275,8501,8663,9021,9186,9343,9839,9981,10218,10372,10627,10627,11082,11148,11285,11376,11601,11779,11902,12025,12097,12381,12415,12523,12639,12709,12776,12836,12952,13112,13214,13323,13466,13539,13720,13819,13887,13928,14022,14024,14131,14175,14389,14443,14491,14515,14612,14641,14660,14715,14759,14802,14830,14974,15052,15089,15170,15224,15224,15301,15339,15458,15549,15587,15616,15659,15659,15789,15853,15897,15982,16000,16035,16095,16117,16117,16200,16243,16325,16325,16415,16432,16480,16543,16661,16698,16770,16819,16908,16954,16971,16997,17036,17036,17093,17097,17123,17187,17243,17280,17350,17373,17394,17424,17454,17466,17535,17553,17569,17589],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' cases'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>



<script>

Highcharts.chart('container_sd', {

    title: {
        text: 'Intervention - Social Distancing'
    },

    yAxis: {
        title: {
            text: 'Change in Mobility in Percent'
        },plotLines: [{
            color: '#000000',
            width: 2,
            value: 0,
			dashStyle: 'longdashdot',
			label: {
				text: 'Typical Mobility',
				align: 'center',
				style:{fontWeight: 'bold'}
			}
        }]
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Ethiopia - Change in Mobility',
    data: [1.47,1.42,1.37,1.32,1.27,1.21,1.16,1.10,1.04,0.95,0.85,0.75,0.69,0.67,0.71,0.82,1.01,1.26,1.57,1.92,2.27,2.63,2.97,3.30,3.61,3.88,4.10,4.24,4.28,4.20,4.00,3.67,3.19,2.56,1.74,0.72,-0.51,-1.96,-3.63,-5.52,-7.63,-9.93,-12.39,-14.96,-17.53,-20.03,-22.37,-24.49,-26.34,-27.91,-29.23,-30.33,-31.23,-31.99,-32.63,-33.21,-33.77,-34.36,-34.99,-35.63,-36.27,-36.85,-37.33,-37.69,-37.91,-37.98,-37.93,-37.78,-37.58,-37.37,-37.15,-36.95,-36.75,-36.54,-36.31,-36.05,-35.75,-35.44,-35.12,-34.80,-34.45,-34.04,-33.54,-32.91,-32.15,-31.29,-30.39,-29.49,-28.64,-27.88,-27.22,-26.68,-26.27,-25.98,-25.77,-25.61,-25.47,-25.34,-25.21,-25.08,-24.94,-24.78,-24.58,-24.33,-24.04,-23.71,-23.34,-22.92,-22.41,-21.84,-21.24,-20.64,-20.08,-19.58,-19.13,-18.70,-18.30,-17.93,-17.61,-17.35,-17.16,-17.04,-16.96,-16.89,-16.82,-16.74,-16.66,-16.59,-16.53,-16.45,-16.33,-16.16,-15.95,-15.70,-15.44,-15.17,-14.87,-14.54,-14.20,-13.86,-13.55,-13.28,-13.07,-12.89,-12.75,-12.63,-12.54,-12.51,-12.54,-12.60,-12.68,-12.75,-12.79,-12.80,-12.81,-12.83,-12.85,-12.86,-12.86,-12.84,-12.80,-12.74,-12.68,-12.61,-12.50,-12.36,-12.20,-12.03,-11.88,-11.80,-11.77,-11.77,-11.79,-11.76,-11.66,-11.48,-11.22,-10.93,-10.63,-10.36,-10.12,-9.93,-9.79,-9.71,-9.67,-9.67,-9.66,-9.65,-9.63,-9.62,-9.62,-9.62,-9.62,-9.59,-9.52,-9.41,-9.28,-9.14,-8.99,-8.83,-8.68,-8.54,-8.42,-8.33,-8.28,-8.26,-8.27,-8.30,-8.32,-8.35,-8.37,-8.38,-8.38,-8.36,-8.32,-8.29,-8.28,-8.30,-8.38,-8.51,-8.68,-8.89,-9.11,-9.33,-9.54,-9.72,-9.87,-9.95,-9.97,-9.93,-9.86,-9.79,-9.75,-9.77,-9.84,-9.94,-10.06,-10.19,-10.31,-10.41,-10.50,-10.56,-10.60,-10.61,-10.60,-10.56,-10.47,-10.33,-10.15,-9.94,-9.72,-9.51,-9.32,-9.13,-8.94,-8.70,-8.42,-8.10,-7.78,-7.50,-7.26,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.06,-7.07,-7.07,-7.10,-7.14,-7.17,-7.21,-7.24,-7.24,-7.24],
    pointStart: Date.UTC(2020, 1, 8),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' %'
        }
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

</script>

<script>

Highcharts.chart('container_sd_aa', {

    title: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'Social Distancing Practice in Percent'
        }
         
    },

     xAxis: {
		  categories:['Oct 5 - 11/2020', 'Oct 12 - 18/2020', 'Oct 19 - 25/2020', 'Oct 26 - 1/2020', 'Nov 2 - 8/2020', 'Nov 9 - 15/2020'],
    title: {
      text: 'Weeks'
    }
    
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Ethiopia - Social Distancing Practice',
       data: [22.4, 20.6, 19.8, 20.3, 19.5, 19.6],
	tooltip: {
            valueSuffix: ' %'
        }
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

</script>


<script>

Highcharts.chart('container_hh_aa', {

    title: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'Proper Hand Hygiene Practice in Percent'
        }
         
    },

     xAxis: {
		  categories:['Oct 5 - 11/2020', 'Oct 12 - 18/2020', 'Oct 19 - 25/2020', 'Oct 26 - 1/2020', 'Nov 2 - 8/2020', 'Nov 9 - 15/2020'],
    title: {
      text: 'Weeks'
    }
    
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Ethiopia - Proper Hand Hygiene Practice',
       data: [8.83, 7.4, 8.1, 7.5, 6.9, 7.7],
	tooltip: {
            valueSuffix: ' %'
        }
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

</script>

<script>

Highcharts.chart('container_rh_aa', {

    title: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'Proper Respiratory Hygiene Practice in Percent'
        }
         
    },

     xAxis: {
		  categories:['Oct 5 - 11/2020', 'Oct 12 - 18/2020', 'Oct 19 - 25/2020', 'Oct 26 - 1/2020', 'Nov 2 - 8/2020', 'Nov 9 - 15/2020'],
    title: {
      text: 'Weeks'
    }
    
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Ethiopia - Proper Respiratory Hygiene Practice',
       data: [41.4, 38.7, 39.03, 39.6, 38.1, 37.2],
	tooltip: {
            valueSuffix: ' %'
        }
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

</script>


<script>

Highcharts.chart('container_model', {

    title: {
        text: 'With Current Intervention Policy'
    },

    yAxis: {
        title: {
            text: 'Projection for Clinical Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Clinical Cases',
		data: [0.00,49.60,83.77,107.90,125.51,138.93,149.66,158.71,166.72,174.12,181.21,188.16,195.11,202.13,209.29,216.64,224.19,231.98,240.02,248.33,256.92,265.80,275.00,284.51,294.35,304.53,315.07,325.98,337.27,348.96,361.06,373.58,386.54,399.95,413.83,428.20,443.08,458.48,474.42,490.92,508.00,525.67,543.98,562.92,582.53,602.84,623.85,645.61,668.13,691.45,715.59,740.58,766.45,793.24,820.97,849.68,879.40,910.17,942.03,975.01,1009.16,1044.51,1081.12,1119.02,1158.25,1198.88,1240.94,1284.50,1329.59,1376.28,1424.62,1474.67,1526.49,1580.15,1635.71,1693.24,1752.80,1814.48,1878.34,1944.46,2012.93,2083.82,2157.23,2233.23,2311.93,2393.42,2477.80,2565.17,2655.63,2749.30,2846.29,2946.72,3050.71,3158.38,3269.87,3385.30,3504.83,3628.58,3756.73,3889.40,4026.78,4169.01,4316.28,4468.76,4626.63,4790.09,4959.32,5134.53,5315.92,5503.73,5698.16,5899.45,6107.83,6323.56,6546.90,6778.09,7017.42,7265.16,7521.61,7787.07,8061.84,8346.24,8640.62,8945.29,9260.63,9586.98,9924.73,10274.26,10635.97,11010.26,11397.57,11798.32,12212.97,12641.98,13085.82,13544.99,14019.99,14511.34,15019.57,15545.25,16088.92,16651.18,17232.62,17833.85,18455.50,19098.23,19762.69,20449.57,21159.55,21893.36,22651.74,23435.42,24245.17,25081.78,25946.05,26838.80,27760.86,28713.08,29696.34,30711.51,31759.49,32841.21,33957.58,35109.56,36298.10,37524.17,38788.75,40092.83,41437.41,42823.51,44252.13,45724.30,47241.04,48803.39,50412.37,52069.00,53774.31,55529.31,57335.02,59192.42,61102.50,63066.22,65084.53,67158.34,69288.56,71476.04,73721.61,76026.07,78390.15,80814.55,83299.94,85846.88,88455.92,91127.52,93862.07,96659.89,99521.21,102446.17,105434.84,108487.16,111603.00,114782.09,118024.07,121328.45,124694.62,128121.84,131609.23,135155.77,138760.32,142421.58,146138.08,149908.22,153730.25,157602.25,161522.15,165487.70,169496.51,173546.03,177633.54,181756.18,185910.92,190094.58,194303.86,198535.28,202785.27,207050.10,211325.93,215608.82,219894.73,224179.51,228458.97,232728.82,236984.74,241222.36,245437.31,249625.20,253781.63,257902.26,261982.77,266018.91,270006.50,273941.46,277819.81,281637.71,285391.46,289077.52,292692.53,296233.33,299696.95,303080.65,306381.93,309598.52,312728.43,315769.91,318721.50,321582.02,324350.57,327026.55,329609.63,332099.80,334497.32,336802.76,339016.97,341141.07,343176.45,345124.80,346988.02,348768.29,350468.01,352089.78,353636.43,355110.96,356516.56,357856.55,359134.41,360353.71,361518.14,362631.46],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>


<script>

Highcharts.chart('container_model_ho', {

    title: {
        text: 'With Current Intervention Policy'
    },

    yAxis: {
        title: {
            text: 'Projection for Hospitalizaed Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Hospitalizaed Cases',
		data: [0.00,0.00,0.91,2.35,4.06,5.91,7.80,9.67,11.50,13.27,14.98,16.64,18.24,19.78,21.29,22.77,24.21,25.64,27.06,28.47,29.88,31.30,32.72,34.16,35.63,37.11,38.63,40.17,41.76,43.38,45.04,46.76,48.51,50.33,52.19,54.12,56.11,58.16,60.28,62.47,64.74,67.08,69.50,72.01,74.60,77.29,80.07,82.94,85.92,89.01,92.20,95.51,98.93,102.48,106.15,109.96,113.90,117.98,122.21,126.59,131.13,135.84,140.71,145.75,150.98,156.40,162.01,167.83,173.85,180.09,186.55,193.25,200.19,207.38,214.83,222.55,230.55,238.83,247.42,256.31,265.52,275.07,284.96,295.21,305.83,316.83,328.23,340.03,352.27,364.95,378.08,391.69,405.78,420.39,435.52,451.20,467.44,484.27,501.70,519.77,538.48,557.87,577.95,598.76,620.32,642.65,665.78,689.75,714.58,740.30,766.94,794.54,823.13,852.75,883.43,915.20,948.12,982.21,1017.52,1054.10,1091.98,1131.21,1171.85,1213.93,1257.51,1302.64,1349.38,1397.78,1447.90,1499.80,1553.53,1609.17,1666.77,1726.41,1788.16,1852.08,1918.25,1986.74,2057.64,2131.02,2206.97,2285.58,2366.92,2451.10,2538.21,2628.33,2721.58,2818.05,2917.85,3021.08,3127.85,3238.28,3352.49,3470.58,3592.69,3718.94,3849.45,3984.36,4123.81,4267.92,4416.84,4570.71,4729.67,4893.89,5063.49,5238.66,5419.53,5606.26,5799.03,5998.00,6203.32,6415.18,6633.74,6859.17,7091.66,7331.36,7578.47,7833.16,8095.61,8365.99,8644.49,8931.28,9226.54,9530.45,9843.18,10164.90,10495.78,10836.00,11185.70,11545.05,11914.20,12293.31,12682.51,13081.93,13491.71,13911.96,14342.78,14784.29,15236.56,15699.68,16173.70,16658.67,17154.63,17661.59,18179.57,18708.53,19248.46,19799.29,20360.95,20933.35,21516.37,22109.87,22713.68,23327.61,23951.45,24584.95,25227.85,25879.86,26540.63,27209.83,27887.07,28571.94,29264.00,29962.77,30667.76,31378.45,32094.26,32814.63,33538.93,34266.54,34996.77,35728.95,36462.36,37196.27,37929.93,38662.55,39393.35,40121.53,40846.27,41566.74,42282.10,42991.52,43694.15,44389.15,45075.68,45752.91,46420.00,47076.15,47720.55,48352.42,48971.01,49575.56,50165.37,50739.76,51298.07,51839.69,52364.03,52870.55,53358.75,53828.17,54278.41,54709.08,55119.88,55510.53,55880.81,56230.55,56559.63,56867.99,57155.60,57422.50,57668.77,57894.54,58100.00,58285.38,58450.94,58597.00,58723.92,58832.11],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>

<script>

Highcharts.chart('container_model_cr', {

    title: {
        text: 'With Current Intervention Policy'
    },

    yAxis: {
        title: {
            text: 'Projection for Critical Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Critical Cases',
		data: [0.00,0.00,0.00,0.01,0.05,0.11,0.19,0.30,0.43,0.58,0.75,0.93,1.12,1.33,1.54,1.77,2.00,2.24,2.48,2.73,2.98,3.24,3.50,3.77,4.04,4.32,4.60,4.88,5.17,5.46,5.76,6.07,6.38,6.69,7.02,7.35,7.69,8.04,8.39,8.76,9.13,9.52,9.92,10.32,10.75,11.18,11.63,12.09,12.56,13.05,13.56,14.08,14.62,15.18,15.76,16.36,16.97,17.61,18.28,18.96,19.67,20.40,21.16,21.95,22.77,23.61,24.49,25.39,26.33,27.31,28.32,29.36,30.44,31.57,32.73,33.93,35.18,36.48,37.82,39.21,40.65,42.15,43.70,45.31,46.97,48.70,50.49,52.34,54.26,56.26,58.32,60.47,62.69,64.99,67.38,69.85,72.41,75.07,77.83,80.69,83.65,86.72,89.90,93.20,96.62,100.16,103.84,107.65,111.60,115.69,119.93,124.33,128.89,133.61,138.51,143.58,148.84,154.29,159.94,165.80,171.87,178.16,184.68,191.44,198.44,205.69,213.21,221.00,229.07,237.44,246.11,255.09,264.39,274.03,284.02,294.37,305.09,316.19,327.69,339.61,351.95,364.73,377.97,391.68,405.88,420.59,435.81,451.58,467.90,484.80,502.30,520.41,539.16,558.57,578.66,599.44,620.96,643.22,666.25,690.08,714.73,740.23,766.61,793.88,822.09,851.26,881.42,912.60,944.82,978.13,1012.55,1048.12,1084.86,1122.82,1162.03,1202.52,1244.33,1287.49,1332.05,1378.03,1425.48,1474.43,1524.93,1577.01,1630.70,1686.06,1743.12,1801.91,1862.48,1924.87,1989.11,2055.25,2123.32,2193.37,2265.42,2339.51,2415.69,2493.98,2574.43,2657.06,2741.90,2828.98,2918.34,3010.00,3103.98,3200.31,3299.01,3400.09,3503.56,3609.45,3717.75,3828.48,3941.63,4057.21,4175.20,4295.60,4418.39,4543.56,4671.07,4800.90,4933.02,5067.38,5203.94,5342.65,5483.46,5626.29,5771.09,5917.77,6066.26,6216.46,6368.29,6521.64,6676.40,6832.46,6989.71,7148.01,7307.23,7467.23,7627.87,7789.00,7950.47,8112.10,8273.74,8435.21,8596.33,8756.94,8916.84,9075.84,9233.77,9390.42,9545.61,9699.14,9850.82,10000.44,10147.82,10292.76,10435.07,10574.56,10711.04,10844.33,10974.24,11100.61,11223.26,11342.03,11456.76,11567.29,11673.49,11775.22,11872.35,11964.75,12052.32,12134.96,12212.58,12285.09,12352.42,12414.51,12471.32,12522.79],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>

<script>
var data_k = [449363,447766.58,459790.80,472026.54,484471.21,497121.80,509974.93,523026.80,536273.25,549709.67,563331.10,577132.16,591107.06,605249.66,619553.41,634011.42,648616.42,663360.81,678236.67,693235.79,708349.67,723569.54,738886.43,754291.16,769774.39,785326.63,800938.31,816599.79,832301.43,848033.57,863786.65,879551.19,895317.86,911077.52,926821.27,942540.48,958226.85,973872.43,989469.68,1005011.50,1020491.30,1035902.97,1051240.99,1066500.40,1081676.87,1096766.72,1111766.91,1126675.11,1141489.69,1156209.71,1170834.96,1185365.97,1199803.96,1214150.91,1228409.47,1242583.02,1256675.59,1270691.88,1284637.22,1298517.55,1312339.36,1326109.69,1339836.05,1353526.43,1367189.18,1380833.03,1394467.02,1408100.40,1421742.67,1435403.41,1449092.34];
var processedData = [];

    for(var i = 0; i < data_k.length; i++){ 
	
	var k = data_k[i+1] - data_k[i];
      k = k.toFixed(2);
      x = parseFloat(k).toLocaleString('en');
	  if(x == "NaN"){
		  x = '***'
		  
	  }
      processedData.push({
    y: data_k[i],
	as: x
  })	
	
      
    }
	

Highcharts.chart('container_model_co', {

    title: {
        text: 'With Current Intervention Policy'
    },

    yAxis: {
        title: {
            text: 'Total Infection'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Adjusted Observed Total Cases',
		data: [239,250,261,263,272,287,306,317,352,365,389,399,433,494,582,655,701,731,831,968,1063,1172,1257,1344,1486,1636,1805,1934,2020,2156,2336,2506,2959,3024,3091,3159,3228,3300,3375,3453,3535,3621,3712,3808,3910,4017,4132,4254,4383,4520,4666,4821,4986,5160,5345,5541,5748,5968,6199,6444,6702,6974,7260,7561,7877,8209,8558,8923,9305,9705,10123,10559,11015,11491,11986,12502,13039,13598,14179,14782,15408,16058,16731,17429,18152,18900,19674,20474,21301,22156,23038,23948,24888,25856,26854,27882,28941,30031,31153,32307,33493,34712,35965,37252,38573,39929,41321,42749,44213,45714,47252,48828,50443,52096,53789,55521,57294,59107,60962,62858,64796,66777,68802,70869,72981,75138,77339,79586,81879,84219,86605,89039,91521,94051,96630,99259,101937,104666,107445,110276,113159,116093,119081,122122,125216,128365,131568,134826,138140,141510,144937,148421,151962,155561,159219,162935,166711,170547,174444,178401,182420,186500,190643,194849,199118,203451,207847,212309,216836,221429,226087,230813,235605,240465,245394,250390,255456,260592,265797,271073,276420,281838,287328,292891,298526,304235,310018,315875,321807,327814,333897,340056,346292,352605,358996,365465,372012,378639,385345,392132,398998,405946,412976,420088,427282,434559,441919,449363],
    pointStart: Date.UTC(2020, 4, 10),
	color: 'rgba(230,10,10,0.7)',
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
    }, {
            showInLegend: false,
            name: 'Projected Total cases',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            linkedTo: ':previous',
            marker: {
                enabled: false
            },
            data: processedData,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Total Cases</span>: <b>{point.y} total cases<br/><span style="color:{series.color}">Projected Daily Cases</span>: <b>{point.as} daily cases</b>',
        shared: true
    },
			pointStart: Date.UTC(2020, 11, 03),
            pointInterval: 24 * 3600 * 1000,
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

</script>

<script>
var data_k = [1724,1728.00,1728.00,1728.00,1728.05,1728.36,1729.22,1730.96,1733.88,1738.31,1744.50,1752.71,1763.16,1776.03,1791.50,1809.70,1830.75,1854.77,1881.84,1912.04,1945.43,1982.10,2022.08,2065.42,2112.19,2162.41,2216.15,2273.43,2334.31,2398.82,2467.02,2538.95,2614.67,2694.21,2777.65,2865.02,2956.40,3051.85,3151.41,3255.18,3363.20,3475.55,3592.32,3713.56,3839.36,3969.79,4104.94,4244.89,4389.71,4539.50,4694.34,4854.30,5019.48,5189.96,5365.82,5547.14,5734.01,5926.50,6124.69,6328.66,6538.48,6754.21,6975.94,7203.71,7437.60,7677.65,7923.91,8176.44,8435.27,8700.43,8971.96];
var data_m = [1724,1728.00,1728.00,1728.00,1728.05,1728.27,1728.81,1729.83,1731.51,1733.98,1737.39,1741.85,1747.48,1754.36,1762.58,1772.22,1783.32,1795.94,1810.12,1825.91,1843.34,1862.43,1883.22,1905.73,1929.99,1956.02,1983.83,2013.46,2044.93,2078.25,2113.46,2150.57,2189.61,2230.62,2273.61,2318.61,2365.66,2414.78,2466.02,2519.40,2574.95,2632.73,2692.75,2755.07,2819.71,2886.73,2956.16,3028.04,3102.41,3179.32,3258.82,3340.93,3425.72,3513.21,3603.45,3696.48,3792.35,3891.09,3992.75,4097.35,4204.95,4315.57,4429.24,4546.01,4665.90,4788.93,4915.14,5044.54,5177.16,5313.01,5452.11];
var data_n = [1724,1728.00,1728.00,1728.00,1728.05,1728.22,1728.60,1729.27,1730.32,1731.82,1733.83,1736.42,1739.63,1743.52,1748.13,1753.47,1759.60,1766.52,1774.26,1782.85,1792.29,1802.60,1813.79,1825.89,1838.89,1852.82,1867.68,1883.48,1900.24,1917.97,1936.68,1956.38,1977.09,1998.82,2021.58,2045.40,2070.29,2096.25,2123.32,2151.51,2180.83,2211.31,2242.97,2275.82,2309.89,2345.20,2381.76,2419.61,2458.76,2499.24,2541.06,2584.25,2628.83,2674.83,2722.26,2771.15,2821.52,2873.39,2926.77,2981.70,3038.18,3096.24,3155.90,3217.16,3280.05,3344.57,3410.75,3478.59,3548.10,3619.30,3692.18];
var data_l = [1724,1728.00,1728.00,1728.00,1728.05,1728.20,1728.50,1728.99,1729.73,1730.73,1732.05,1733.70,1735.71,1738.11,1740.90,1744.10,1747.74,1751.81,1756.33,1761.31,1766.76,1772.68,1779.08,1785.96,1793.34,1801.22,1809.60,1818.49,1827.89,1837.82,1848.29,1859.28,1870.83,1882.92,1895.57,1908.80,1922.60,1936.99,1951.97,1967.56,1983.77,2000.61,2018.08,2036.20,2054.98,2074.43,2094.57,2115.40,2136.94,2159.19,2182.18,2205.91,2230.39,2255.64,2281.67,2308.49,2336.11,2364.54,2393.79,2423.87,2454.80,2486.58,2519.22,2552.73,2587.12,2622.39,2658.56,2695.62,2733.57,2772.44,2812.21];
var processedData = [];
var processedData_m = [];
var processedData_n = [];
var processedData_l = [];
    for(var i = 0; i < data_k.length; i++){ 
	
	var k = data_k[i+1] - data_k[i];
	var m = data_m[i+1] - data_m[i];
	var n = data_n[i+1] - data_n[i];
	var l = data_l[i+1] - data_l[i];
      k = k.toFixed(2);
      x = parseFloat(k).toLocaleString('en');
	  m = m.toFixed(2);
      z = parseFloat(m).toLocaleString('en');
	  n = n.toFixed(2);
      a = parseFloat(n).toLocaleString('en');
	  l = l.toFixed(2);
      b = parseFloat(l).toLocaleString('en');
	  if(x == "NaN"){
		  x = '***'
		  
	  }
	  if(z == "NaN"){
		  z = '***'
		  
	  }
	  if(a == "NaN"){
		  a = '***'
		  
	  }
	  if(b == "NaN"){
		  b = '***'
	  }
      processedData.push({
    y: data_k[i],
	as: x
  })	
	processedData_m.push({
    y: data_m[i],
	as: z
  })	
     processedData_n.push({
    y: data_n[i],
	as: a
  })	
processedData_l.push({
    y: data_l[i],
	as: b
  })  
    }
	

Highcharts.chart('container_model_de', {

    title: {
        text: 'With Current Intervention Policy'
    },

    yAxis: {
        title: {
            text: 'Death Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Observed Death Commulative',
		data: [5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,6,6,7,8,8,11,12,14,17,18,19,20,27,27,32,35,40,47,55,57,60,61,63,65,72,72,74,75,75,78,81,89,94,98,103,103,103,103,103,103,103,103,103,120,120,124,124,127,128,139,146,148,150,163,167,170,180,188,197,200,209,223,228,239,253,263,274,284,310,336,343,356,365,380,390,407,420,440,463,479,492,509,528,544,572,600,620,637,662,678,692,709,725,745,758,770,793,809,828,846,856,880,897,918,933,949,966,974,986,996,1013,1022,1035,1045,1060,1072,1089,1096,1108,1127,1141,1148,1155,1165,1170,1177,1191,1198,1205,1208,1214,1222,1230,1238,1255,1262,1271,1277,1287,1301,1305,1312,1325,1337,1346,1352,1365,1371,1384,1396,1400,1419,1426,1437,1445,1451,1457,1464,1469,1478,1489,1494,1503,1508,1512,1518,1523,1530,1537,1545,1554,1558,1565,1569,1581,1588,1601,1607,1620,1636,1647,1651,1661,1664,1672,1686,1695,1700,1706,1709,1715,1724],
    pointStart: Date.UTC(2020, 4, 10),
	color: 'rgba(230,10,10,0.7)',
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
    }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (40% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_m,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (20% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (20% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_n,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (10% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (10% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_l,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (5% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (5% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
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

</script>



<script>

Highcharts.chart('container_model_in', {

    title: {
        text: 'With Easing Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Projection for Clinical Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Clinical Cases',
		data: [0.00,49.60,83.77,107.90,125.51,138.93,149.66,158.71,166.72,174.12,181.21,188.16,195.11,202.13,209.29,216.64,224.19,231.98,240.02,248.33,256.92,265.80,275.00,284.51,294.35,304.53,315.07,325.98,337.27,348.96,361.06,373.58,386.54,399.95,413.83,428.20,443.08,458.48,474.42,490.92,508.00,525.67,543.98,562.92,582.53,602.84,623.85,645.61,668.13,691.45,715.59,740.58,766.45,793.24,820.97,849.68,879.40,910.17,942.03,975.01,1009.16,1044.51,1081.12,1119.02,1158.25,1198.88,1240.94,1284.50,1329.59,1376.28,1424.62,1474.67,1526.49,1580.15,1635.71,1693.24,1752.80,1814.48,1878.34,1944.46,2012.93,2083.82,2157.23,2233.23,2311.93,2393.42,2477.80,2565.17,2655.63,2749.30,2846.29,2946.72,3050.71,3158.38,3269.87,3385.30,3504.83,3628.58,3756.73,3889.40,4026.78,4169.01,4316.28,4468.76,4626.63,4790.09,4959.32,5134.53,5315.92,5503.73,5698.16,5899.45,6107.83,6323.56,6546.90,6778.09,7017.42,7265.16,7521.61,7787.07,8061.84,8346.24,8640.62,8945.29,9260.63,9586.98,9924.73,10274.26,10635.97,11010.26,11397.57,11798.32,12212.97,12641.98,13085.82,13544.99,14019.99,14511.34,15019.57,15545.25,16088.92,16651.18,17232.62,17833.85,18455.50,19098.23,19762.69,20449.57,21159.55,21893.36,22651.74,23435.42,24245.17,25081.78,25946.05,26838.80,27760.86,28713.08,29696.34,30711.51,31759.49,32841.21,33957.58,35109.56,36298.10,37524.17,38788.75,40092.83,41437.41,42823.51,44252.13,45724.30,47241.04,48803.39,50412.37,52069.00,53774.31,55529.31,57335.02,59192.42,61102.50,63066.22,65084.53,67158.34,69288.56,71476.04,73721.61,76026.07,78390.15,80814.55,83299.94,85846.88,88455.92,91127.52,93862.07,96659.89,99521.21,102446.17,105434.84,108487.16,111603.00,114782.09,118024.07,121328.45,124694.62,128121.84,131609.23,135155.77,139216.44,143656.83,148389.28,153356.37,158520.29,163855.84,169345.93,174978.62,180745.15,186638.74,192653.74,198785.06,205027.87,211377.31,217828.39,224375.85,231014.12,237737.27,244539.00,251412.62,258351.06,265346.87,272392.24,279479.03,286598.77,293742.71,300901.85,308066.99,315228.72,322377.54,329503.85,336598.03,343650.48,350651.67,357592.22,364462.94,371254.87,377959.39,384568.24,391073.55,397467.96,403744.63,409897.30,415920.33,421808.73,427558.23,433165.28,438627.09,443941.64,449107.72,454124.90,458993.53,463714.79,468290.59,472723.62,477017.30,481175.73,485203.67,489106.48,492890.10,496560.94,500125.88,503592.15,506967.31,510259.16,513475.67,516624.89,519714.92,522753.82,525749.50],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>


<script>

Highcharts.chart('container_model_ho_in', {

    title: {
        text: 'With Easing Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Projection for Hospitalizaed Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Hospitalized Cases',
		data: [0.00,0.00,0.91,2.35,4.06,5.91,7.80,9.67,11.50,13.27,14.98,16.64,18.24,19.78,21.29,22.77,24.21,25.64,27.06,28.47,29.88,31.30,32.72,34.16,35.63,37.11,38.63,40.17,41.76,43.38,45.04,46.76,48.51,50.33,52.19,54.12,56.11,58.16,60.28,62.47,64.74,67.08,69.50,72.01,74.60,77.29,80.07,82.94,85.92,89.01,92.20,95.51,98.93,102.48,106.15,109.96,113.90,117.98,122.21,126.59,131.13,135.84,140.71,145.75,150.98,156.40,162.01,167.83,173.85,180.09,186.55,193.25,200.19,207.38,214.83,222.55,230.55,238.83,247.42,256.31,265.52,275.07,284.96,295.21,305.83,316.83,328.23,340.03,352.27,364.95,378.08,391.69,405.78,420.39,435.52,451.20,467.44,484.27,501.70,519.77,538.48,557.87,577.95,598.76,620.32,642.65,665.78,689.75,714.58,740.30,766.94,794.54,823.13,852.75,883.43,915.20,948.12,982.21,1017.52,1054.10,1091.98,1131.21,1171.85,1213.93,1257.51,1302.64,1349.38,1397.78,1447.90,1499.80,1553.53,1609.17,1666.77,1726.41,1788.16,1852.08,1918.25,1986.74,2057.64,2131.02,2206.97,2285.58,2366.92,2451.10,2538.21,2628.33,2721.58,2818.05,2917.85,3021.08,3127.85,3238.28,3352.49,3470.58,3592.69,3718.94,3849.45,3984.36,4123.81,4267.92,4416.84,4570.71,4729.67,4893.89,5063.49,5238.66,5419.53,5606.26,5799.03,5998.00,6203.32,6415.18,6633.74,6859.17,7091.66,7331.36,7578.47,7833.16,8095.61,8365.99,8644.49,8931.28,9226.54,9530.45,9843.18,10164.90,10495.78,10836.00,11185.70,11545.05,11914.20,12293.31,12682.51,13081.93,13491.71,13911.96,14342.78,14784.29,15236.56,15699.68,16173.70,16658.67,17154.63,17661.59,18179.57,18708.53,19248.46,19799.29,20360.95,20942.78,21550.27,22186.45,22852.83,23549.94,24277.73,25035.76,25823.42,26639.93,27484.46,28356.15,29254.09,30177.38,31125.07,32096.23,33089.86,34104.97,35140.52,36195.43,37268.57,38358.79,39464.86,40585.50,41719.39,42865.14,44021.30,45186.39,46358.83,47537.03,48719.32,49904.00,51089.31,52273.47,53454.66,54631.04,55800.73,56961.87,58112.58,59250.97,60375.19,61483.41,62573.80,63644.61,64694.12,65720.66,66722.66,67698.59,68647.04,69566.65,70456.20,71314.56,72140.72,72933.78,73692.97,74417.64,75107.27,75761.49,76380.03,76962.79,77509.76,78021.10,78497.05,78938.03,79344.51,79717.13,80056.60,80363.74,80639.45,80884.72],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>

<script>

Highcharts.chart('container_model_cr_in', {

    title: {
        text: 'With Easing Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Projection for Critical Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Critical Cases',
		data: [0.00,0.00,0.00,0.01,0.05,0.11,0.19,0.30,0.43,0.58,0.75,0.93,1.12,1.33,1.54,1.77,2.00,2.24,2.48,2.73,2.98,3.24,3.50,3.77,4.04,4.32,4.60,4.88,5.17,5.46,5.76,6.07,6.38,6.69,7.02,7.35,7.69,8.04,8.39,8.76,9.13,9.52,9.92,10.32,10.75,11.18,11.63,12.09,12.56,13.05,13.56,14.08,14.62,15.18,15.76,16.36,16.97,17.61,18.28,18.96,19.67,20.40,21.16,21.95,22.77,23.61,24.49,25.39,26.33,27.31,28.32,29.36,30.44,31.57,32.73,33.93,35.18,36.48,37.82,39.21,40.65,42.15,43.70,45.31,46.97,48.70,50.49,52.34,54.26,56.26,58.32,60.47,62.69,64.99,67.38,69.85,72.41,75.07,77.83,80.69,83.65,86.72,89.90,93.20,96.62,100.16,103.84,107.65,111.60,115.69,119.93,124.33,128.89,133.61,138.51,143.58,148.84,154.29,159.94,165.80,171.87,178.16,184.68,191.44,198.44,205.69,213.21,221.00,229.07,237.44,246.11,255.09,264.39,274.03,284.02,294.37,305.09,316.19,327.69,339.61,351.95,364.73,377.97,391.68,405.88,420.59,435.81,451.58,467.90,484.80,502.30,520.41,539.16,558.57,578.66,599.44,620.96,643.22,666.25,690.08,714.73,740.23,766.61,793.88,822.09,851.26,881.42,912.60,944.82,978.13,1012.55,1048.12,1084.86,1122.82,1162.03,1202.52,1244.33,1287.49,1332.05,1378.03,1425.48,1474.43,1524.93,1577.01,1630.70,1686.06,1743.12,1801.91,1862.48,1924.87,1989.11,2055.25,2123.32,2193.37,2265.42,2339.51,2415.69,2493.98,2574.43,2657.06,2741.90,2828.98,2918.34,3010.00,3103.98,3200.31,3299.01,3400.09,3503.56,3609.45,3717.92,3829.22,3943.66,4061.52,4183.08,4308.60,4438.32,4572.43,4711.11,4854.50,5002.72,5155.87,5314.00,5477.15,5645.36,5818.62,5996.91,6180.19,6368.40,6561.46,6759.28,6961.74,7168.72,7380.07,7595.61,7815.17,8038.54,8265.51,8495.85,8729.30,8965.59,9204.44,9445.55,9688.61,9933.29,10179.24,10426.11,10673.53,10921.11,11168.48,11415.22,11660.94,11905.21,12147.62,12387.75,12625.17,12859.45,13090.18,13316.92,13539.28,13756.83,13969.17,14175.92,14376.70,14571.13,14758.88,14939.60,15112.98,15278.73,15436.56,15586.24,15727.52,15860.20,15984.11,16099.08,16204.98,16301.72,16389.21],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>

<script>

var data_k = [449363,449166,463592,478976,495149,512001,529461,547482,566032,585089,604638,624668,645168,666131,687547,709409,731707,754432,777574,801121,825062,849383,874072,899113,924491,950191,976195,1002487,1029048,1055861,1082907,1110167,1137623,1165257,1193050,1220985,1249044,1277210,1305468,1333802,1362199,1390646,1419131,1447646,1476181,1504729,1533286,1561849,1590416,1618988,1647567,1676157,1704765,1733398,1762067,1790784,1819560,1848410,1877352,1906401,1935577,1964898,1994384,2024055,2053932,2084037,2114388,2145007,2175914,2207127,2238664];
var processedData = [];

    for(var i = 0; i < data_k.length; i++){ 
	
	var k = data_k[i+1] - data_k[i];
      k = k.toFixed(2);
      x = parseFloat(k).toLocaleString('en');
	  if(x == "NaN"){
		  x = '***'
		  
	  }
      processedData.push({
    y: data_k[i],
	as: x
  })	
	
      
    }
	

Highcharts.chart('container_model_co_in', {

    title: {
        text: 'With Easing Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Total Infection'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Adjusted Observed Total Cases',
		data: [239,250,261,263,272,287,306,317,352,365,389,399,433,494,582,655,701,731,831,968,1063,1172,1257,1344,1486,1636,1805,1934,2020,2156,2336,2506,2959,3024,3091,3159,3228,3300,3375,3453,3535,3621,3712,3808,3910,4017,4132,4254,4383,4520,4666,4821,4986,5160,5345,5541,5748,5968,6199,6444,6702,6974,7260,7561,7877,8209,8558,8923,9305,9705,10123,10559,11015,11491,11986,12502,13039,13598,14179,14782,15408,16058,16731,17429,18152,18900,19674,20474,21301,22156,23038,23948,24888,25856,26854,27882,28941,30031,31153,32307,33493,34712,35965,37252,38573,39929,41321,42749,44213,45714,47252,48828,50443,52096,53789,55521,57294,59107,60962,62858,64796,66777,68802,70869,72981,75138,77339,79586,81879,84219,86605,89039,91521,94051,96630,99259,101937,104666,107445,110276,113159,116093,119081,122122,125216,128365,131568,134826,138140,141510,144937,148421,151962,155561,159219,162935,166711,170547,174444,178401,182420,186500,190643,194849,199118,203451,207847,212309,216836,221429,226087,230813,235605,240465,245394,250390,255456,260592,265797,271073,276420,281838,287328,292891,298526,304235,310018,315875,321807,327814,333897,340056,346292,352605,358996,365465,372012,378639,385345,392132,398998,405946,412976,420088,427282,434559,441919,449363],
    pointStart: Date.UTC(2020, 4, 10),
	color: 'rgba(230,10,10,0.7)',
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
    }, {
            showInLegend: false,
            name: 'Projected Total cases',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            linkedTo: ':previous',
            marker: {
                enabled: false
            },
            data: processedData,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Total Cases</span>: <b>{point.y} total cases<br/><span style="color:{series.color}">Projected Daily Cases</span>: <b>{point.as} daily cases</b>',
        shared: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
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
</script>

<script>

var data_k = [1724, 1728.00,1728.00,1728.00,1728.05,1728.36,1729.22,1730.96,1733.89,1738.33,1744.56,1752.83,1763.39,1776.44,1792.16,1810.73,1832.30,1857.00,1884.96,1916.30,1951.12,1989.54,2031.66,2077.57,2127.37,2181.18,2239.07,2301.17,2367.57,2438.39,2513.74,2593.73,2678.49,2768.14,2862.82,2962.65,3067.79,3178.37,3294.54,3416.47,3544.31,3678.22,3818.37,3964.93,4118.08,4278.00,4444.86,4618.84,4800.14,4988.93,5185.41,5389.75,5602.13,5822.75,6051.78,6289.41,6535.79,6791.10,7055.51,7329.17,7612.23,7904.84,8207.12,8519.20,8841.18,9173.19,9515.29,9867.56,10230.08,10602.87,10985.98];
var data_m = [1724,1728.00,1728.00,1728.00,1728.05,1728.27,1728.81,1729.84,1731.51,1733.99,1737.42,1741.92,1747.61,1754.60,1762.96,1772.80,1784.18,1797.18,1811.85,1828.25,1846.44,1866.48,1888.41,1912.29,1938.16,1966.08,1996.10,2028.27,2062.64,2099.28,2138.24,2179.58,2223.36,2269.65,2318.52,2370.03,2424.25,2481.27,2541.16,2603.99,2669.86,2738.84,2811.02,2886.48,2965.32,3047.63,3133.50,3223.02,3316.29,3413.40,3514.44,3619.52,3728.71,3842.12,3959.84,4081.96,4208.56,4339.73,4475.56,4616.12,4761.49,4911.73,5066.93,5227.13,5392.40,5562.78,5738.32,5919.05,6105.01,6296.22,6492.69];
var data_n = [1724,1728.00,1728.00,1728.00,1728.05,1728.22,1728.60,1729.27,1730.32,1731.83,1733.85,1736.47,1739.72,1743.67,1748.37,1753.84,1760.13,1767.27,1775.29,1784.23,1794.10,1804.95,1816.79,1829.65,1843.55,1858.53,1874.61,1891.82,1910.18,1929.73,1950.49,1972.51,1995.80,2020.41,2046.37,2073.72,2102.49,2132.73,2164.47,2197.76,2232.64,2269.15,2307.34,2347.26,2388.94,2432.45,2477.82,2525.11,2574.37,2625.63,2678.96,2734.40,2792.00,2851.81,2913.87,2978.24,3044.95,3114.05,3185.59,3259.59,3336.11,3415.18,3496.83,3581.10,3668.00,3757.57,3849.83,3944.80,4042.48,4142.89,4246.04];
var data_l = [1724,1728.00,1728.00,1728.00,1728.05,1728.20,1728.50,1728.99,1729.73,1730.74,1732.07,1733.74,1735.78,1738.21,1741.07,1744.35,1748.10,1752.31,1757.01,1762.21,1767.93,1774.18,1780.98,1788.33,1796.25,1804.76,1813.87,1823.59,1833.95,1844.95,1856.62,1868.97,1882.02,1895.79,1910.29,1925.56,1941.61,1958.45,1976.12,1994.64,2014.02,2034.30,2055.50,2077.64,2100.75,2124.86,2149.99,2176.16,2203.40,2231.75,2261.22,2291.85,2323.65,2356.65,2390.89,2426.38,2463.14,2501.21,2540.60,2581.33,2623.43,2666.91,2711.79,2758.08,2805.80,2854.97,2905.59,2957.67,3011.21,3066.23,3122.72];
var processedData = [];
var processedData_m = [];
var processedData_n = [];
var processedData_l = [];
    for(var i = 0; i < data_k.length; i++){ 
	
	var k = data_k[i+1] - data_k[i];
	var m = data_m[i+1] - data_m[i];
	var n = data_n[i+1] - data_n[i];
	var l = data_l[i+1] - data_l[i];
      k = k.toFixed(2);
      x = parseFloat(k).toLocaleString('en');
	  m = m.toFixed(2);
      z = parseFloat(m).toLocaleString('en');
	  n = n.toFixed(2);
      a = parseFloat(n).toLocaleString('en');
	  l = l.toFixed(2);
      b = parseFloat(l).toLocaleString('en');
	  if(x == "NaN"){
		  x = '***'
		  
	  }
	  if(z == "NaN"){
		  z = '***'
		  
	  }
	  if(a == "NaN"){
		  a = '***'
		  
	  }
	  if(b == "NaN"){
		  b = '***'
	  }
      processedData.push({
    y: data_k[i],
	as: x
  })	
	processedData_m.push({
    y: data_m[i],
	as: z
  })	
     processedData_n.push({
    y: data_n[i],
	as: a
  })	
processedData_l.push({
    y: data_l[i],
	as: b
  })  
    }
	

Highcharts.chart('container_model_de_in', {

    title: {
        text: 'With Current Intervention Policy'
    },

    yAxis: {
        title: {
            text: 'Death Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Observed Death Commulative',
		data: [5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,6,6,7,8,8,11,12,14,17,18,19,20,27,27,32,35,40,47,55,57,60,61,63,65,72,72,74,75,75,78,81,89,94,98,103,103,103,103,103,103,103,103,103,120,120,124,124,127,128,139,146,148,150,163,167,170,180,188,197,200,209,223,228,239,253,263,274,284,310,336,343,356,365,380,390,407,420,440,463,479,492,509,528,544,572,600,620,637,662,678,692,709,725,745,758,770,793,809,828,846,856,880,897,918,933,949,966,974,986,996,1013,1022,1035,1045,1060,1072,1089,1096,1108,1127,1141,1148,1155,1165,1170,1177,1191,1198,1205,1208,1214,1222,1230,1238,1255,1262,1271,1277,1287,1301,1305,1312,1325,1337,1346,1352,1365,1371,1384,1396,1400,1419,1426,1437,1445,1451,1457,1464,1469,1478,1489,1494,1503,1508,1512,1518,1523,1530,1537,1545,1554,1558,1565,1569,1581,1588,1601,1607,1620,1636,1647,1651,1661,1664,1672,1686,1695,1700,1706,1709,1715,1724],
    pointStart: Date.UTC(2020, 4, 10),
	color: 'rgba(230,10,10,0.7)',
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
    }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (40% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_m,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (20% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (20% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_n,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (10% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (10% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_l,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (5% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (5% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
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

</script>



<script>

Highcharts.chart('container_model_in1', {

    title: {
        text: 'With Stricting Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Projection for Clinical Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Clinical Cases',
		data: [0.00,49.60,83.77,107.90,125.51,138.93,149.66,158.71,166.72,174.12,181.21,188.16,195.11,202.13,209.29,216.64,224.19,231.98,240.02,248.33,256.92,265.80,275.00,284.51,294.35,304.53,315.07,325.98,337.27,348.96,361.06,373.58,386.54,399.95,413.83,428.20,443.08,458.48,474.42,490.92,508.00,525.67,543.98,562.92,582.53,602.84,623.85,645.61,668.13,691.45,715.59,740.58,766.45,793.24,820.97,849.68,879.40,910.17,942.03,975.01,1009.16,1044.51,1081.12,1119.02,1158.25,1198.88,1240.94,1284.50,1329.59,1376.28,1424.62,1474.67,1526.49,1580.15,1635.71,1693.24,1752.80,1814.48,1878.34,1944.46,2012.93,2083.82,2157.23,2233.23,2311.93,2393.42,2477.80,2565.17,2655.63,2749.30,2846.29,2946.72,3050.71,3158.38,3269.87,3385.30,3504.83,3628.58,3756.73,3889.40,4026.78,4169.01,4316.28,4468.76,4626.63,4790.09,4959.32,5134.53,5315.92,5503.73,5698.16,5899.45,6107.83,6323.56,6546.90,6778.09,7017.42,7265.16,7521.61,7787.07,8061.84,8346.24,8640.62,8945.29,9260.63,9586.98,9924.73,10274.26,10635.97,11010.26,11397.57,11798.32,12212.97,12641.98,13085.82,13544.99,14019.99,14511.34,15019.57,15545.25,16088.92,16651.18,17232.62,17833.85,18455.50,19098.23,19762.69,20449.57,21159.55,21893.36,22651.74,23435.42,24245.17,25081.78,25946.05,26838.80,27760.86,28713.08,29696.34,30711.51,31759.49,32841.21,33957.58,35109.56,36298.10,37524.17,38788.75,40092.83,41437.41,42823.51,44252.13,45724.30,47241.04,48803.39,50412.37,52069.00,53774.31,55529.31,57335.02,59192.42,61102.50,63066.22,65084.53,67158.34,69288.56,71476.04,73721.61,76026.07,78390.15,80814.55,83299.94,85846.88,88455.92,91127.52,93862.07,96659.89,99521.21,102446.17,105434.84,108487.16,111603.00,114782.09,118024.07,121328.45,124694.62,128121.84,131609.23,135155.77,138627.29,142061.22,145481.80,148904.46,152338.76,155790.31,159262.09,162755.27,166269.78,169804.72,173358.56,176929.36,180514.84,184112.51,187719.66,191333.45,194950.90,198568.95,202184.44,205794.14,209394.78,212983.03,216555.52,220108.88,223639.69,227144.56,230620.11,234062.96,237469.78,240837.27,244162.21,247441.43,250671.84,253850.44,256974.35,260040.77,263047.06,265990.69,268869.30,271680.65,274422.69,277093.53,279691.46,282214.97,284662.72,287033.59,289326.63,291541.14,293676.58,295732.67,297709.30,299606.58,301424.85,303164.64,304826.67,306411.90,307921.45,309356.64,310718.97,312010.13,313231.97,314386.48,315475.81,316502.27,317468.27,318376.34,319229.12,320029.35,320779.83,321483.45],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>


<script>

Highcharts.chart('container_model_ho_in1', {

    title: {
        text: 'With Stricting Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Projection for Hospitalizaed Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Hospitalized Cases',
		data: [0.00,0.00,0.91,2.35,4.06,5.91,7.80,9.67,11.50,13.27,14.98,16.64,18.24,19.78,21.29,22.77,24.21,25.64,27.06,28.47,29.88,31.30,32.72,34.16,35.63,37.11,38.63,40.17,41.76,43.38,45.04,46.76,48.51,50.33,52.19,54.12,56.11,58.16,60.28,62.47,64.74,67.08,69.50,72.01,74.60,77.29,80.07,82.94,85.92,89.01,92.20,95.51,98.93,102.48,106.15,109.96,113.90,117.98,122.21,126.59,131.13,135.84,140.71,145.75,150.98,156.40,162.01,167.83,173.85,180.09,186.55,193.25,200.19,207.38,214.83,222.55,230.55,238.83,247.42,256.31,265.52,275.07,284.96,295.21,305.83,316.83,328.23,340.03,352.27,364.95,378.08,391.69,405.78,420.39,435.52,451.20,467.44,484.27,501.70,519.77,538.48,557.87,577.95,598.76,620.32,642.65,665.78,689.75,714.58,740.30,766.94,794.54,823.13,852.75,883.43,915.20,948.12,982.21,1017.52,1054.10,1091.98,1131.21,1171.85,1213.93,1257.51,1302.64,1349.38,1397.78,1447.90,1499.80,1553.53,1609.17,1666.77,1726.41,1788.16,1852.08,1918.25,1986.74,2057.64,2131.02,2206.97,2285.58,2366.92,2451.10,2538.21,2628.33,2721.58,2818.05,2917.85,3021.08,3127.85,3238.28,3352.49,3470.58,3592.69,3718.94,3849.45,3984.36,4123.81,4267.92,4416.84,4570.71,4729.67,4893.89,5063.49,5238.66,5419.53,5606.26,5799.03,5998.00,6203.32,6415.18,6633.74,6859.17,7091.66,7331.36,7578.47,7833.16,8095.61,8365.99,8644.49,8931.28,9226.54,9530.45,9843.18,10164.90,10495.78,10836.00,11185.70,11545.05,11914.20,12293.31,12682.51,13081.93,13491.71,13911.96,14342.78,14784.29,15236.56,15699.68,16173.70,16658.67,17154.63,17661.59,18179.57,18708.53,19248.46,19799.29,20360.95,20930.60,21506.48,22087.54,22673.13,23262.91,23856.66,24454.25,25055.57,25660.53,26269.02,26880.89,27495.99,28114.10,28734.98,29358.35,29983.90,30611.28,31240.10,31869.96,32500.42,33131.00,33761.21,34390.53,35018.43,35644.36,36267.73,36887.95,37504.44,38116.57,38723.73,39325.29,39920.62,40509.09,41090.07,41662.93,42227.04,42781.79,43326.56,43860.77,44383.83,44895.18,45394.25,45880.53,46353.50,46812.69,47257.62,47687.87,48103.03,48502.73,48886.63,49254.41,49605.80,49940.55,50258.47,50559.37,50843.13,51109.65,51358.86,51590.74,51805.31,52002.62,52182.75,52345.82,52492.00,52621.46,52734.44,52831.20,52912.01,52977.19],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>

<script>

Highcharts.chart('container_model_cr_in1', {

    title: {
        text: 'With Stricting Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Projection for Critical Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Critical Cases',
		data: [0.00,0.00,0.00,0.01,0.05,0.11,0.19,0.30,0.43,0.58,0.75,0.93,1.12,1.33,1.54,1.77,2.00,2.24,2.48,2.73,2.98,3.24,3.50,3.77,4.04,4.32,4.60,4.88,5.17,5.46,5.76,6.07,6.38,6.69,7.02,7.35,7.69,8.04,8.39,8.76,9.13,9.52,9.92,10.32,10.75,11.18,11.63,12.09,12.56,13.05,13.56,14.08,14.62,15.18,15.76,16.36,16.97,17.61,18.28,18.96,19.67,20.40,21.16,21.95,22.77,23.61,24.49,25.39,26.33,27.31,28.32,29.36,30.44,31.57,32.73,33.93,35.18,36.48,37.82,39.21,40.65,42.15,43.70,45.31,46.97,48.70,50.49,52.34,54.26,56.26,58.32,60.47,62.69,64.99,67.38,69.85,72.41,75.07,77.83,80.69,83.65,86.72,89.90,93.20,96.62,100.16,103.84,107.65,111.60,115.69,119.93,124.33,128.89,133.61,138.51,143.58,148.84,154.29,159.94,165.80,171.87,178.16,184.68,191.44,198.44,205.69,213.21,221.00,229.07,237.44,246.11,255.09,264.39,274.03,284.02,294.37,305.09,316.19,327.69,339.61,351.95,364.73,377.97,391.68,405.88,420.59,435.81,451.58,467.90,484.80,502.30,520.41,539.16,558.57,578.66,599.44,620.96,643.22,666.25,690.08,714.73,740.23,766.61,793.88,822.09,851.26,881.42,912.60,944.82,978.13,1012.55,1048.12,1084.86,1122.82,1162.03,1202.52,1244.33,1287.49,1332.05,1378.03,1425.48,1474.43,1524.93,1577.01,1630.70,1686.06,1743.12,1801.91,1862.48,1924.87,1989.11,2055.25,2123.32,2193.37,2265.42,2339.51,2415.69,2493.98,2574.43,2657.06,2741.90,2828.98,2918.34,3010.00,3103.98,3200.31,3299.01,3400.09,3503.56,3609.45,3717.70,3828.26,3941.04,4055.95,4172.91,4291.82,4412.60,4535.18,4659.47,4785.41,4912.91,5041.91,5172.33,5304.12,5437.18,5571.46,5706.88,5843.35,5980.80,6119.15,6258.31,6398.18,6538.68,6679.70,6821.14,6962.91,7104.87,7246.93,7388.97,7530.85,7672.47,7813.68,7954.35,8094.36,8233.56,8371.82,8508.98,8644.91,8779.47,8912.49,9043.85,9173.39,9300.96,9426.42,9549.63,9670.42,9788.68,9904.25,10016.99,10126.77,10233.47,10336.95,10437.09,10533.77,10626.88,10716.31,10801.95,10883.72,10961.52,11035.26,11104.88,11170.30,11231.45,11288.29,11340.77,11388.84,11432.48,11471.65],
    pointStart: Date.UTC(2020, 4, 10),
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
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

</script>

<script>
var data_k = [449363,447358,458682,470001,481363,492800,504330,515964,527708,539565,551533,563610,575793,588078,600459,612930,625487,638121,650827,663597,676424,689302,702221,715176,728157,741158,754171,767188,780201,793203,806187,819144,832068,844952,857788,870571,883295,895952,908538,921048,933476,945818,958071,970230,982293,994256,1006118,1017878,1029533,1041084,1052531,1063874,1075113,1086251,1097290,1108232,1119080,1129838,1140510,1151099,1161612,1172053,1182428,1192742,1203002,1213215,1223388,1233527,1243639,1253732,1263814];
var processedData = [];

    for(var i = 0; i < data_k.length; i++){ 
	
	var k = data_k[i+1] - data_k[i];
      k = k.toFixed(2);
      x = parseFloat(k).toLocaleString('en');
	  if(x == "NaN"){
		  x = '***'
		  
	  }
      processedData.push({
    y: data_k[i],
	as: x
  })	
	
      
    }
	

Highcharts.chart('container_model_co_in1', {

    title: {
        text: 'With Stricting Intervention Policies'
    },

    yAxis: {
        title: {
            text: 'Total Infection'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Adjusted Observed Total Cases',
		data: [239,250,261,263,272,287,306,317,352,365,389,399,433,494,582,655,701,731,831,968,1063,1172,1257,1344,1486,1636,1805,1934,2020,2156,2336,2506,2959,3024,3091,3159,3228,3300,3375,3453,3535,3621,3712,3808,3910,4017,4132,4254,4383,4520,4666,4821,4986,5160,5345,5541,5748,5968,6199,6444,6702,6974,7260,7561,7877,8209,8558,8923,9305,9705,10123,10559,11015,11491,11986,12502,13039,13598,14179,14782,15408,16058,16731,17429,18152,18900,19674,20474,21301,22156,23038,23948,24888,25856,26854,27882,28941,30031,31153,32307,33493,34712,35965,37252,38573,39929,41321,42749,44213,45714,47252,48828,50443,52096,53789,55521,57294,59107,60962,62858,64796,66777,68802,70869,72981,75138,77339,79586,81879,84219,86605,89039,91521,94051,96630,99259,101937,104666,107445,110276,113159,116093,119081,122122,125216,128365,131568,134826,138140,141510,144937,148421,151962,155561,159219,162935,166711,170547,174444,178401,182420,186500,190643,194849,199118,203451,207847,212309,216836,221429,226087,230813,235605,240465,245394,250390,255456,260592,265797,271073,276420,281838,287328,292891,298526,304235,310018,315875,321807,327814,333897,340056,346292,352605,358996,365465,372012,378639,385345,392132,398998,405946,412976,420088,427282,434559,441919,449363],
    pointStart: Date.UTC(2020, 4, 10),
	color: 'rgba(230,10,10,0.7)',
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
    }, {
            showInLegend: false,
            name: 'Projected Total cases',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            linkedTo: ':previous',
            marker: {
                enabled: false
            },
            data: processedData,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Total Cases</span>: <b>{point.y} total cases<br/><span style="color:{series.color}">Projected Daily Cases</span>: <b>{point.as} daily cases</b>',
        shared: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
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

</script>

<script>
var data_k = [1724, 1728.00,1728.00,1728.00,1728.05,1728.36,1729.22,1730.96,1733.88,1738.30,1744.48,1752.68,1763.09,1775.92,1791.31,1809.40,1830.31,1854.13,1880.94,1910.81,1943.80,1979.96,2019.33,2061.95,2107.86,2157.08,2209.65,2265.58,2324.92,2387.69,2453.91,2523.62,2596.86,2673.64,2754.02,2838.01,2925.68,3017.05,3112.16,3211.07,3313.82,3420.47,3531.05,3645.63,3764.25,3886.98,4013.88,4144.99,4280.39,4420.12,4564.25,4712.85,4865.97,5023.67,5186.02,5353.07,5524.88,5701.52,5883.03,6069.48,6260.92,6457.40,6658.97,6865.68,7077.57,7294.68,7517.05,7744.72,7977.71,8216.05,8459.77];
var data_m = [1724,1728.00,1728.00,1728.00,1728.05,1728.27,1728.81,1729.83,1731.51,1733.98,1737.38,1741.83,1747.44,1754.29,1762.47,1772.05,1783.07,1795.58,1809.62,1825.24,1842.44,1861.27,1881.74,1903.86,1927.66,1953.16,1980.36,2009.28,2039.93,2072.34,2106.51,2142.46,2180.20,2219.76,2261.15,2304.39,2349.51,2396.51,2445.43,2496.28,2549.10,2603.90,2660.72,2719.58,2780.51,2843.53,2908.68,2975.99,3045.48,3117.19,3191.15,3267.39,3345.94,3426.83,3510.10,3595.76,3683.86,3774.43,3867.48,3963.06,4061.18,4161.88,4265.17,4371.09,4479.65,4590.88,4704.79,4821.40,4940.73,5062.79,5187.59];
var data_n = [1724,1728.00,1728.00,1728.00,1728.05,1728.22,1728.60,1729.27,1730.32,1731.81,1733.82,1736.40,1739.61,1743.48,1748.06,1753.37,1759.44,1766.30,1773.97,1782.45,1791.76,1801.92,1812.94,1824.81,1837.56,1851.19,1865.71,1881.12,1897.44,1914.66,1932.81,1951.87,1971.88,1992.82,2014.72,2037.58,2061.42,2086.24,2112.06,2138.89,2166.74,2195.62,2225.56,2256.56,2288.63,2321.80,2356.08,2391.49,2428.03,2465.73,2504.60,2544.66,2585.93,2628.41,2672.14,2717.11,2763.35,2810.88,2859.71,2909.85,2961.31,3014.11,3068.27,3123.80,3180.69,3238.98,3298.66,3359.75,3422.25,3486.16,3551.50];
var data_l = [1724, 1728.00,1728.00,1728.00,1728.05,1728.20,1728.50,1728.99,1729.72,1730.73,1732.04,1733.69,1735.69,1738.07,1740.85,1744.03,1747.63,1751.67,1756.14,1761.05,1766.42,1772.25,1778.54,1785.29,1792.52,1800.21,1808.39,1817.05,1826.19,1835.83,1845.96,1856.58,1867.71,1879.35,1891.51,1904.18,1917.38,1931.11,1945.38,1960.19,1975.56,1991.48,2007.98,2025.05,2042.70,2060.94,2079.78,2099.24,2119.30,2140.00,2161.33,2183.30,2205.92,2229.20,2253.16,2277.79,2303.10,2329.11,2355.82,2383.24,2411.37,2440.23,2469.82,2500.15,2531.21,2563.03,2595.60,2628.92,2663.00,2697.85,2733.46];
var processedData = [];
var processedData_m = [];
var processedData_n = [];
var processedData_l = [];
    for(var i = 0; i < data_k.length; i++){ 
	
	var k = data_k[i+1] - data_k[i];
	var m = data_m[i+1] - data_m[i];
	var n = data_n[i+1] - data_n[i];
	var l = data_l[i+1] - data_l[i];
      k = k.toFixed(2);
      x = parseFloat(k).toLocaleString('en');
	  m = m.toFixed(2);
      z = parseFloat(m).toLocaleString('en');
	  n = n.toFixed(2);
      a = parseFloat(n).toLocaleString('en');
	  l = l.toFixed(2);
      b = parseFloat(l).toLocaleString('en');
	  if(x == "NaN"){
		  x = '***'
		  
	  }
	  if(z == "NaN"){
		  z = '***'
		  
	  }
	  if(a == "NaN"){
		  a = '***'
		  
	  }
	  if(b == "NaN"){
		  b = '***'
	  }
      processedData.push({
    y: data_k[i],
	as: x
  })	
	processedData_m.push({
    y: data_m[i],
	as: z
  })	
     processedData_n.push({
    y: data_n[i],
	as: a
  })	
processedData_l.push({
    y: data_l[i],
	as: b
  })  
    }
	

Highcharts.chart('container_model_de_in1', {

    title: {
        text: 'With Current Intervention Policy'
    },

    yAxis: {
        title: {
            text: 'Death Cases'
        }
    },

     xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Observed Death Commulative',
		data: [5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,6,6,7,8,8,11,12,14,17,18,19,20,27,27,32,35,40,47,55,57,60,61,63,65,72,72,74,75,75,78,81,89,94,98,103,103,103,103,103,103,103,103,103,120,120,124,124,127,128,139,146,148,150,163,167,170,180,188,197,200,209,223,228,239,253,263,274,284,310,336,343,356,365,380,390,407,420,440,463,479,492,509,528,544,572,600,620,637,662,678,692,709,725,745,758,770,793,809,828,846,856,880,897,918,933,949,966,974,986,996,1013,1022,1035,1045,1060,1072,1089,1096,1108,1127,1141,1148,1155,1165,1170,1177,1191,1198,1205,1208,1214,1222,1230,1238,1255,1262,1271,1277,1287,1301,1305,1312,1325,1337,1346,1352,1365,1371,1384,1396,1400,1419,1426,1437,1445,1451,1457,1464,1469,1478,1489,1494,1503,1508,1512,1518,1523,1530,1537,1545,1554,1558,1565,1569,1581,1588,1601,1607,1620,1636,1647,1651,1661,1664,1672,1686,1695,1700,1706,1709,1715,1724],
    pointStart: Date.UTC(2020, 4, 10),
	color: 'rgba(230,10,10,0.7)',
    pointInterval: 24 * 3600 * 1000,
	tooltip: {
            valueSuffix: ' cases'
        }
    }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (40% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_m,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (20% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (20% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_n,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (10% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (10% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
        }, {
            showInLegend: false,
            name: 'Projected Death Number',
            color: 'rgba(0,0,0,0.85)',
            dashStyle: 'Dash',
            pointStart: 8,
            zIndex: -100,
            
            marker: {
                enabled: false
            },
            data: processedData_l,
			tooltip: {
		pointFormat: '<span style="color:{series.color}">Projected Commulative Deaths (5% ICU to Death)</span>: <b>{point.y} total deaths<br/><span style="color:{series.color}">Projected Daily Death (5% ICU to Death)</span>: <b>{point.as} daily deaths</b>',
        shared: true,
		crosshairs: true
    },
			pointStart: Date.UTC(2020, 11, 3),
            pointInterval: 24 * 3600 * 1000,
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

</script>



<script>
Highcharts.chart('container_com', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
    
   xAxis: [{
	   categories: ['Ethiopia','Kenya','Rwanda', 'Mozambique','Malawi','Zambia'],
    title: {
      text: 'Country'
    }
  }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Cardio Vascular Prevalence',
        type: 'column',
        yAxis: 0,
		data: [3288.15 , 4118.71 , 3764.72 , 3809.37 , 3809.37 , 3359.27],
        tooltip: {
            valueSuffix: ' per 100,000 people'
        }

    }, {
        name: 'Diabetes Prevalence',
        type: 'column',
        yAxis: 1,
		data: [1327.01,1720.89,1805.33,1618.76,2036.62,1803.59],
   
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' per 100,000 people'
        }

    }, {
        name: 'Case Fatality ',
        type: 'column',
		yAxis: 2,
		data: [0.0157,0.0225,0.0033,0.0062,0.0272,0.0204],
   
        
        tooltip: {
            valueSuffix: ' Rate'
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>


<script>
Highcharts.chart('container_cri', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: '',
        align: 'center'
    },
    
   xAxis: {
    title: {
      text: 'Date'
    },
    type: 'datetime'
  },
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        }

    }, { // Secondary yAxis
        gridLineWidth: 0,
        title: {
			
            text: '',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }

    }, { // Tertiary yAxis
        
        title: {
            text: '',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        labels: {
            format: '{value}',
            style: {
                color: Highcharts.getOptions().colors[2]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    
    series: [{
        name: 'Active Cases',
        
        yAxis: 0,
		data: [26,25,31,32,37,36,44,47,48,57,54,56,55,63,65,72,76,84,87,90,93,90,90,87,88,77,69,71,67,67,62,59,55,60,48,63,88,92,93,106,133,138,148,148,157,168,186,197,229,238,260,268,294,336,423,489,526,542,631,761,845,950,1026,1097,1219,1366,1522,1631,1647,1766,1923,2068,2194,2415,2614,2741,2839,2829,2845,2953,2969,3273,3243,3289,3359,3468,3548,3646,3461,3457,3311,3447,3459,3383,3268,3250,3310,3346,3351,3411,3081,3124,3125,3316,3080,3216,3557,3837,4082,4393,4898,5046,5442,5828,6089,6706,7071,7527,7931,8433,8870,9587,10304,10518,10793,11020,11292,11380,11506,11655,12154,12203,12758,13037,13619,14295,15088,16346,16987,18266,19210,20148,21678,23113,23889,24996,26187,27181,28183,28831,29965,30766,31945,32326,32987,33658,34072,35022,35791,36445,36924,37156,37678,37962,38355,38397,38303,38429,38461,38512,38766,38803,39101,39408,39965,40302,40687,41076,41797,41504,41504,42012,42439,42964,43461,44101,44319,44535,44189,43803,43968,44099,44287,44467,44690,44929,45104,44951,44854,44867,44987,45134,45134,45344,45479,45226,45035,44709,44595,44372,44118,43803,43481,43089,42610,42181,41651,41046,40752,40220,39767,39129,38733,38384,37740,37272,36683,36424,36626,37283,37079,37343,37512,37732,37835,37932,38180,38445,38711,38910,38869,38994,39244,38983,38517,34558,33926,33200,32468,31736,30715,31414,29175,27550,25819,24604,22780,22043,21071,20206,19420,18217,16897,15116,15493,16321,13954,14804,13293,12670,12382,12241,11660,11385],
		pointStart: Date.UTC(2020, 3, 1),
    pointInterval: 24 * 3600 * 1000,
        tooltip: {
            valueSuffix: ' cases'
        }

    }, {
        name: 'Severe or Critical Cases',
       
        yAxis: 1,
		data: [2,1,2,1,1,1,1,2,2,1,0,0,0,0,0,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1,1,4,5,4,4,8,6,16,18,27,32,32,32,33,32,38,39,30,29,32,30,27,32,30,32,38,38,38,30,27,34,33,35,34,31,29,28,28,28,28,31,31,29,30,31,34,31,33,36,37,36,35,39,56,40,38,65,68,66,65,66,66,66,134,138,68,153,145,187,185,170,174,167,163,164,190,178,193,195,199,217,213,216,255,248,248,251,291,275,290,327,330,357,329,344,350,306,303,306,315,326,308,309,307,319,330,347,345,342,344,280,270,300,289,294,290,301,251,269,267,249,272,273,247,271,269,255,296,278,285,292,282,245,253,243,239,271,230,237,250,293,301,299,281,281,269,301,303,306,315,306,339,314,314,315,311,327,335,336,353,346,343,346,332,306,316,209,286,292,313,316,319,321,308,320,305,316,315,319,333,326,334,319,327,309,309,322,323,330,331,317,317,316,313,305,312,326,316,283,318,314,297,291,305,273,267,258,261,274,265,253,236,225,236,224,231],
        pointStart: Date.UTC(2020, 3, 1),
    pointInterval: 24 * 3600 * 1000,
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' cases'
        }

    }, {
        name: 'Critical Cases to Active Cases proportions ',
        
		yAxis: 2,
		data: [0.035087719,0.018518519,0.035714286,0.018181818,0.015873016,0.015384615,0.013888889,0.026315789,0.023809524,0.011494253,0,0,0,0,0,0.011363636,0.012987013,0.014492754,0.014084507,0.014925373,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.005952381,0.005376344,0.005076142,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0.000820345,0.000732064,0.00065703,0.000613121,0.002428658,0.002831257,0.002080083,0.001934236,0.003646308,0.002484472,0.006120888,0.006566946,0.009510391,0.011311417,0.011247803,0.010836438,0.011114853,0.009776963,0.011717545,0.011857708,0.00893123,0.008362168,0.009019166,0.008228195,0.007801214,0.009256581,0.009060707,0.009283435,0.010985834,0.011232634,0.011627907,0.009230769,0.0081571,0.010161387,0.009847807,0.010260921,0.011035378,0.009923175,0.00928,0.008443908,0.009090909,0.008706468,0.007871802,0.008079229,0.007594317,0.006601411,0.006124949,0.00614348,0.006247703,0.005319149,0.005419609,0.005368327,0.00523264,0.004782782,0.004413063,0.004624689,0.006313416,0.004172317,0.003687888,0.006179882,0.00630038,0.005989111,0.005756288,0.005799649,0.005736138,0.005662806,0.011025177,0.011308695,0.005329989,0.011735829,0.01064689,0.013081497,0.0122614,0.010400098,0.010243127,0.009142669,0.008485164,0.008139766,0.008764646,0.007701294,0.008079032,0.007801248,0.00759919,0.007983518,0.007557748,0.007491936,0.008509928,0.008060846,0.007763343,0.007764648,0.008821657,0.00817042,0.008511388,0.009336988,0.009220195,0.009795582,0.008910194,0.009258262,0.00928924,0.008060692,0.007899883,0.007969373,0.008223899,0.008483177,0.008008112,0.008023473,0.007919311,0.008221014,0.008439682,0.008805319,0.008632553,0.008485931,0.008454789,0.006816633,0.006459794,0.007228219,0.007228219,0.006998001,0.006833337,0.007005865,0.005775293,0.006099635,0.006024504,0.005591108,0.006155378,0.00623245,0.005617722,0.006145264,0.006074017,0.00573459,0.006623406,0.00618754,0.00631873,0.006495962,0.006287065,0.005460584,0.005623847,0.005383968,0.005295343,0.005976535,0.005057279,0.005240348,0.005551238,0.00655349,0.006749636,0.006738484,0.006369282,0.006415086,0.00618661,0.006985542,0.007111007,0.007254451,0.007562844,0.00745505,0.00831861,0.007807061,0.007895994,0.008050295,0.008029329,0.008519175,0.008876524,0.00901481,0.009622986,0.009499231,0.009364932,0.009280369,0.008953855,0.008194307,0.008423971,0.005539065,0.007559138,0.007697986,0.008198009,0.008219534,0.008240552,0.008249807,0.007924053,0.008206391,0.007771889,0.008106098,0.008178207,0.009230858,0.009815481,0.009819277,0.010287052,0.010051676,0.010646264,0.009836379,0.01059126,0.01168784,0.012510167,0.013412453,0.01453029,0.014380983,0.015044374,0.015638919,0.016117405,0.016742603,0.018464816,0.021566552,0.020396308,0.017339624,0.022789164,0.021210484,0.022342586,0.02296764,0.024632531,0.0223021,0.022898799,0.022661397],
   pointStart: Date.UTC(2020, 3, 10),
    pointInterval: 24 * 3600 * 1000,
        
        tooltip: {
            valueSuffix: ' '
        }
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>

<script>


Highcharts.chart('container_real_death_sero', {
	chart: {
        type: 'column'
    },

    title: {
        text: ''
    },

    yAxis: {
        title: {
            text: 'Mean Sero Prevalance'
        }
         
    },


     xAxis: {
		 categories: ['Adama', 'Addis Ababa','Arbaminch','Assosa', 'Bahir Dar', 'Dessie', 'Dire Dawa', 'Gambella', 'Harar', 'Hawassa', 'Jigjiga', 'Jimma', 'Mekelle', 'Semera'],
    title: {
      text: 'Major Cities'
    }
    
  },
 
    legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },
	
	 tooltip: {
        shared: true
    },

   credits: {
  enabled: false
  },

    series: [{
        name: 'Ethiopia - Sero Prevalence (June/July, 2020)',
 data: [1.45, 1.5, 1.29, 1.02, 1.39, 1.27, 3.22, 3.65, 2.08, 1.52, 3.88, 1.08, 1.24, 1.97],	
	tooltip: {
            valueSuffix: '%'
        }
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

</script>




<script>

Highcharts.chart('container_real_case_sero', {
    chart: {
        type: 'column'
    },
    title: {
        text: '',
        align: 'center'
    },
	credits: {
		enabled: false
	},
    
   xAxis: [{
	   categories: ['Female', 'Male', '18-29', '30-44', '45-59', '>60'],
    title: {
      text: 'By sex and age'
    },
	plotLines: [{
        color: '#234FFF', // Red
        width: 2,
        value: 1.5// Position, you'll have to translate this to the values on your x axis
    }]
  }],
   yAxis: {
        title: {
            text: 'Mean Sero Prevalance'
        }
         
    },

    tooltip: {
		
        shared: true
    },
	
	
    
    series: [{
        name: 'Sero-Pervalance by Sex and Age (August, 2020)',
		data: [3.1, 4.0, 2.0, 4.9, 6.2, 4.2],
		tooltip: {
            valueSuffix: '%'
        }

    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    floating: false,
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                    x: 0,
                    y: 0
                },
                yAxis: [{
                    labels: {
                        align: 'right',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -6
                    },
                    showLastLabel: false
                }, {
                    visible: false
                }]
            }
        }]
    }
});

</script>

<script>

Highcharts.chart('container_com_age', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'National'
    },
    xAxis: {
        categories: ['<1', '1-4', '5-14', '15-24', '25-34', '35-44', '45-59', '>60'],
		title: {
			text: 'age group'
		}
    },
	credits: {
		enabled: false
	},
    yAxis: {
        min: 0,
        title: {
            text: 'Death in Percent'
        }
    },
    tooltip: {
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
        shared: true
    },
    plotOptions: {
        column: {
            stacking: 'percent'
        }
    },
    series: [{
        name: 'Underlying Conditions',
        data: [0, 0, 1, 0, 1, 2, 5, 6],
		color: Highcharts.getOptions().colors[4]
    }, {
        name: 'No Underlying Conditions',
        data: [5, 0, 0, 3, 20, 16, 18, 57],
		color: Highcharts.getOptions().colors[1]
    }
    ]
});
</script>

<script>
function display_pro_2(id, value1, value2, region){
	Highcharts.chart(id, {
    chart: {
        type: 'column'
    },
    title: {
        text: region
    },
    xAxis: {
        categories: ['<1', '1-4', '5-14', '15-24', '25-34', '35-44', '45-59', '>60'],
		title: {
			text: 'age group'
		}
    },
	credits: {
		enabled: false
	},
    yAxis: {
        min: 0,
        title: {
            text: 'Death in Percent'
        }
    },
    tooltip: {
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
        shared: true
    },
    plotOptions: {
        column: {
            stacking: 'percent'
        }
    },
    series: [{
        name: 'Underlying Conditions',
        data: value1,
		color: Highcharts.getOptions().colors[4]
    }, {
        name: 'No Underlying Conditions',
        data: value2,
		color: Highcharts.getOptions().colors[1]
    }
    ]
});
}

</script>

<script>


// Radialize the colors
Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('container_sex', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'National'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.1f}%</b>, {point.k} deaths <br> Total Confirmed Cases: <b>{point.z} total</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
	credits: {
		enabled: false
	},
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Deaths',
        data: [
            { name: 'Male', y: (468/(468 + 269))*100, z:53228, k: 468, t:468 + 269 },
            { name: 'Female', y: (269/(468 + 269))*100, z:33742, k:269, t:468 + 269 }
        ]
    }]
});

</script>

<script> 
function display_pro_3(id, value1, value2, tc1, tc2, region) {
Highcharts.chart(id, {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: region
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.1f}%</b>, {point.k} deaths <br> Total Confirmed Cases: <b>{point.z} total</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
	credits: {
		enabled: false
	},
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.y:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Deaths',
        data: [
            { name: 'Male', y: (value1/(value1+value2)) * 100, z:tc1, k: value1, t:value1 + value2 },
            { name: 'Female', y: (value2/(value1+value2))* 100, z:tc2, k:value2, t:value1 + value2 }
        ]
    }]
});
}

</script>

<script>

to = 2 + 3 + 6 + 44 + 79 + 95 + 126 + 376;

// Build the chart
Highcharts.chart('container_age', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'National'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.1f}%</b>, {point.k} deaths'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
	credits: {
		enabled: false
	},
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>Age Group: {point.name}</b><br> {point.y:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Deaths',
        data: [
            { name: '<1', y: 2/to * 100,  k: 2, t:to },
			 { name: '1-4', y: 3/to * 100,  k:3, t:to },
            { name: '5-14', y: 6/to * 100,  k:6, t:to },
            { name: '15-24', y: 44/to * 100,  k:44, t:to },
            { name: '25-34', y: 79/to * 100,  k:79, t:to },
            { name: '35-44', y: 95/to * 100,  k:95, t:to },
            { name: '45-59', y: 126/to * 100,  k:126, t:to },
            { name: '>60', y: 376/to * 100,  k:376, t:to }
        ]
    }]
});

</script>


<script> 
function display_pro_4(id, value1,value1a, value2, value3, value4, value5, value6, value6, region){
	
// Build the chart
Highcharts.chart(id, {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: region
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.1f}%</b>, {point.k} deaths'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
	credits: {
		enabled: false
	},
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>Age Group: {point.name}</b><br> {point.y:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Deaths',
        data: [
            { name: '<1', y:((value1)/(value1+value2+value3+value4+value5+value6+value7))*100,  k: value1, t:value1+value1a+value2+value3+value4+value5+value6+value7 },
			 { name: '1-4', y:((value1a)/(value1+value1a+value2+value3+value4+value5+value6+value7))*100,  k: value1a, t:value1+value1a+value2+value3+value4+value5+value6+value7 },
            { name: '5-14', y:((value2)/(value1+value1a+value2+value3+value4+value5+value6+value7))*100,  k: value2, t:value1+value1a+value2+value3+value4+value5+value6+value7 },
            { name: '15-24', y:((value3)/(value1+value1a+value2+value3+value4+value5+value6+value7))*100,  k: value3, t:value1+value1a+value2+value3+value4+value5+value6+value7 },
            { name: '25-34', y:((value4)/(value1+value1a+value2+value3+value4+value5+value6+value7))*100,  k: value4, t:value1+value1a+value2+value3+value4+value5+value6+value7 },
            { name: '35-44', y:((value5)/(value1+value1a+value2+value3+value4+value5+value6+value7))*100,  k: value5, t:value1+value1a+value2+value3+value4+value5+value6+value7 },
            { name: '45-59', y:((value6)/(value1+value1a+value2+value3+value4+value5+value6+value7))*100,  k: value6, t:value1+value1a+value2+value3+value4+value5+value6+value7},
            { name: '>60', y:((value7)/(value1+value1a+value2+value3+value4+value5+value6+value7))*100,  k: value7, t:value1+value1a+value2+value3+value4+value5+value6+value7 }
        ]
    }]
});
}


</script>


<script>



// Build the chart
Highcharts.chart('container_sym', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'National'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.1f}%</b>, {point.k} {point.case}'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
	credits: {
		enabled: false
	},
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>Age Group: {point.name}</b><br> {point.y:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Deaths',
        data: [
            { name: 'Symptomatic', y: (2407/(54582+2407)) * 100,  k: 2407, case:'Symptomatic' },
            { name: 'Asymptomatic', y: (54582/(54582+2407)) * 100,  k:54582, case:'Asymptomatic' }
        ]
    }]
});
</script>
<script>

function display_pro(id,value_sym, value_asy, name){
	Highcharts.chart(id, {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: name
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.1f}%</b>, {point.k} {point.case}'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
	credits: {
		enabled: false
	},
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>Age Group: {point.name}</b><br> {point.y:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [{
        name: 'Deaths',
        data: [
            { name: 'Symptomatic', y: (value_sym/(value_asy+value_sym)) * 100,  k: value_sym, case:'Symptomatic' },
            { name: 'Asymptomatic', y: (value_asy/(value_asy+value_sym)) * 100,  k:value_asy, case:'Asymptomatic' }
        ]
    }]
});
}
</script>


<script>

$('a[href^="#"]').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if (target.length) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 1000);
  }
});



</script>
<script>

$('a[href^="#"]').on('click', function(event) {
  var target = $(this.getAttribute('href'));
  if (target.length) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: target.offset().top
    }, 1000);
  }
});

</script>


<script>
//Get the button
var mybutton = document.getElementById('Top');

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
</script>
</body>
</html>