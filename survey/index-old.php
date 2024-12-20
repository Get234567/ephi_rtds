<!DOCTYPE html>
<html>

<head>


  <style>
    .modal-dialog {
      height: 50%;
      width: 50%;
      margin-top: 50px;
      float: Center;
      margin: auto
    }

    .modal-header {
      color: white;
      background-color: #007bff
    }

    textarea {
      border: none;
      box-shadow: none !important;
      -webkit-appearance: none;
      outline: 0px !important
    }

    .openmodal {
      margin-left: 35%;
      width: 25%;
      margin-top: 50%;
      float: Center;

    }

    .icon1 {
      color: #007bff
    }

    a {
      margin: auto
    }

    input {
      color: #007bff
    }

    h2 {
      text-align: center;
      padding: 20px;
    }

    /* Slider */

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-slider {
      position: relative;
      display: block;
      box-sizing: border-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-touch-callout: none;
      -khtml-user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
      position: relative;
      display: block;
      overflow: hidden;
      margin: 0;
      padding: 0;
    }

    .slick-list:focus {
      outline: none;
    }

    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .slick-track {
      position: relative;
      top: 0;
      left: 0;
      display: block;
    }

    .slick-track:before,
    .slick-track:after {
      display: table;
      content: '';
    }

    .slick-track:after {
      clear: both;
    }

    .slick-loading .slick-track {
      visibility: hidden;
    }

    .slick-slide {
      display: none;
      float: left;
      height: 100%;
      min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
      float: right;
    }

    .slick-slide img {
      display: block;
    }

    .slick-slide.slick-loading img {
      display: none;
    }

    .slick-slide.dragging img {
      pointer-events: none;
    }

    .slick-initialized .slick-slide {
      display: block;
    }

    .slick-loading .slick-slide {
      visibility: hidden;
    }

    .highcharts-figure,
    .highcharts-data-table table {
      min-width: 320px;
      max-width: 660px;
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

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
      padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
      background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
      background: #f1f7ff;
    }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
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
      border: 16px solid rgb(49, 81, 84, 0.99);
      border-radius: 50%;
      border-top: 16px solid rgb(49, 181, 84, 0.99);
      border-right: 16px solid rgb(149, 181, 84, 0.99);
      border-bottom: 16px solid rgb(49, 181, 184, 0.99);
      box-shadow: inset 2px 2px 10px rgba(0, 0, 0, 0.4);

      -webkit-animation: spin 2s linear infinite;
      animation: spin 2s linear infinite;

    }


    @-webkit-keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
      }
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
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
      from {
        bottom: -50px;
        opacity: 0
      }

      to {
        bottom: 0px;
        opacity: 1
      }
    }

    @keyframes animatebottom {
      from {
        bottom: -50px;
        opacity: 0
      }

      to {
        bottom: 0;
        opacity: 1
      }
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
      background-color: rgb(49, 181, 84, 0.75);
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }


    #chartdiv {
      max-width: 100%;
      height: 800px;
      background-color: rgb(30, 95, 130, 0.85);
    }

    #observablehq-f684d1cb {
      float: left;

      width: 50%;

    }

    #observablehq-2e815726 {
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

    input:checked+.slider {
      background-color: #e39400;
    }

    input:focus+.slider {
      box-shadow: 0 0 1px #e39400;
    }

    input:checked+.slider:before {
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
    #container_post,
    #loader1,
    #container_ethiopia,
    #container_model,
    #container_model_co,
    #container_model_ho,
    #container_model_cr,
    #container_model_de,
    #container_model_in,
    #container_model_co_in,
    #container_model_ho_in,
    #container_model_cr_in,
    #container_model_de_in,
    #container_model_in1,
    #container_model_co_in1,
    #container_model_ho_in1,
    #container_model_cr_in1,
    #container_model_de_in1,
    #chart_death,
    #chart_case,
    #container_sd_aa,
    #container_sex,
    #container_age,
    #container_fatality_africa,
    #container_sym,
    #container_real_death_sero,
    #container_real_case_sero,
    #container_com,
    #container_com_age,
    #container_hh_aa,
    #container_rh_aa,
    #container_sd,
    #container_kenya,
    #container_rwanda,
    #container_mozamique,
    #container_malawi,
    #container_zambia,
    #container_case_fatality,
    #container_post_africa,
    #container1,
    #container2,
    #container3 {
      height: 500px;
    }


    .highcharts-figure,
    .highcharts-data-table table {
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

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
      padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
      background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
      background: #f1f7ff;
    }



    #dd {
      margin-top: 20px;
    }

    .navbar a:hover {
      background: rgb(10, 81, 124, 0.85);
      color: white;
    }

    .navbar .navbar-nav .nav-link.active {
      background-color: rgb(0, 171, 84);

    }

    .navbar a:hover {
      background: rgb(10, 81, 124, 0.85);
      color: white;
    }




    .card-body .nav .nav-item .nav-link.active {
      background-color: rgb(0, 171, 84, 0.25);

    }


    .dropdown-menu {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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

    .btn-group button:hover,
    .dropdown-menu a:hover {
      background: rgb(10, 81, 124, 0.85);

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
    <script src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">



      </script>

    <!-- Bootstrap CDN -->
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <script src="https://kit.fontawesome.com/655f728102.js" crossorigin="anonymous"></script>



    <script type="text/javascript">
      $(document).ready(function () {
        VizHub.init({
          title: "Health-related SDGs",
          shortener: "//ihmeuw.org/shorten.php",
          components: ["visualizations", "share", "help", "download"],
          language: "41",
          languages: []
        });
      });
    </script>


    <link type='image/png' rel='icon' href='../../../template/resources/logo.jpg' />
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/streamgraph.js"></script>
    <script src="https://code.highcharts.com/modules/annotations.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3.0.1/es5/tex-mml-chtml.js">
    </script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>




    <!-- <style>
      .nav-menu .nav-active {
        z-index: 9999999999 !important;
        border-radius: 10px;
      }


      .nav-menu,
      .nav-menu ul,
      .nav-menu li,
      .nav-menu a {
        margin: 0;
        padding: 0;
        line-height: normal;
        list-style: none;
        display: block;
        position: relative;
      }

      .nav-menu ul {
        opacity: 0;
        position: absolute;
        top: 100%;
        left: -9999px;
        z-index: 999;
        -webkit-transition: opacity .3s;
        transition: opacity .3s;
      }

      .nav-menu li:hover>ul {
        left: 0;
        opacity: 1;
        z-index: 1000;
      }

      .nav-menu ul li:hover>ul {
        top: 0;
        left: 100%;
      }

      .nav-menu li {
        cursor: default;
        float: left;
        white-space: nowrap;
      }

      .nav-menu ul li {
        float: none;
      }

      .nav-active {
        height: auto;
        background-color: red;
        color: black;
        padding: 12px;
        font-size: 20px;
        border: none;
        cursor: pointer;
      }

      .nav-menu {
        position: relative;
        display: inline-block;
        margin: 0;
        padding: 0px;
      }

      .nav-menu-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      }

      .nav-menu-content a {
        color: white;
        padding: 12px 16px;
        font-size: 15px;
        text-decoration: none;
        display: block;
      }

      .nav-menu-content a:hover {
        background: rgb(10, 81, 124, 0.85);
        color: white;
        width: 5px;
        height: 5px;
        transition: all 20ms linear;
      }

      .nav-menu:hover .nav-menu-content {
        display: block;
      }

      .nav-menu:hover .nav-active {
        background: rgb(10, 81, 124, 0.85);
        color: white;
      }

      /* sub width */
      .nav-menu ul {
        min-width: 12em;
        -webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.25);
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.25);
      }

      .nav-menu {
        z-index: 1000;
        color: white;
        font-size: 12px;
      }

      /* center */
      .nav-center {
        float: right;
        right: 50%;
      }

      .nav-center>li {
        left: 50%;
      }

      /* root */
      .nav-menu a {
        padding: 0 10px;
        color: white;
        font-weight: normal;
        font-size: 16px;
        line-height: 16px;
        text-decoration: none;
      }

      /* root: active */
      .nav-menu>li>.nav-active {
        background: rgb(10, 81, 124, 0.85);
        color: white;
      }

      /* root: hover/persistence */
      .nav-menu a:hover,
      .nav-menu a:focus,
      .nav-menu li:hover a {
        background: rgb(10, 81, 124, 0.85);
        color: white;
        text-decoration: none;
        line-height: normal;
      }

      /* 2 */
      .nav-menu li li a,
      .nav-menu li:hover li a {
        padding: 8px 10px;
        background: rgb(49, 181, 84, 0.75);
        color: white;
        text-decoration: none;
        font-size: 12px;
        line-height: normal;
      }

      /* 2: hover/persistence */
      .nav-menu li:hover li a:hover,
      .nav-menu li:hover li a:focus,
      .nav-menu li:hover li:hover a {
        background: rgb(49, 181, 84, 0.75);
        color: white;
        text-decoration: none;
      }

      /* 3 */
      .nav-menu li:hover li:hover li a {
        background: rgb(49, 181, 84, 0.75);
        color: white;
        text-decoration: none;
      }

      /* 3: hover/persistence */
      .nav-menu li:hover li:hover li a:hover,
      .nav-menu li:hover li:hover li a:focus,
      .nav-menu li:hover li:hover li:hover a {
        background: rgb(10, 81, 124, 0.85);
        color: white;
        text-decoration: none;
      }

      /* 4 */
      .nav-menu li:hover li:hover li:hover li a {
        background: rgb(10, 81, 124, 0.85);
        color: white;
        text-decoration: none;
      }

      /* 4: hover */
      .nav-menu li:hover li:hover li:hover li a:hover,
      .nav-menu li:hover li:hover li:hover li a:focus {
        background: rgb(10, 81, 124, 0.85);
        color: white;
        text-decoration: none;
      }

      /* vertical */
      .nav-vertical {
        max-width: 220px;
      }

      .nav-vertical ul {
        top: 0;
        left: -9999px;
      }

      .nav-vertical li {
        width: 100%;
        float: none;
      }

      .nav-vertical li:hover>ul {
        left: 100%;
      }
    </style> -->

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

      }



      .headerw {
        display: flex;
        z-index: 9999999999 !important;
        background: rgb(0, 255, 64);
        background: linear-gradient(90deg, rgb(8, 184, 52) 35%, rgba(53, 121, 9, 1) 100%);
        flex-direction: column;
        /* justify-content: space-between; */
        align-items: flex-start;
        height: 23vh;
        font-size: 0.7rem;

      }

      .headerw-galo {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1.5;
        padding-left: 5%;
        text-transform: uppercase;
        font-size: 1rem;
      }

      .headerw-galo a {
        color: rgb(33, 33, 33);
        padding-left: 1rem;
        text-decoration: none;
      }

      .headerw-galo a:hover {
        color: white;
        text-decoration: none;
      }

      .headerw-galo-2 {
        display: flex;
        flex: 3;
        align-items: center;
        justify-content: center;
        background: #efefef;
        text-transform: uppercase;
        width: 100%;
        /* position: -webkit-sticky; */
        position: sticky;
        /* top: 10px; */
        z-index: 9999999999999;
      }


      .logo {
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-left: 7%;
      }


      .logo a img {
        width: 29rem;
        height: 8rem;
      }

      .nav {
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 2;
        font-size: 0.5rem;


      }

      .nav a {
        padding-left: 1%;
        color: rgb(33, 33, 33);
        text-decoration: none;
      }

      .nav a:hover {
        color: rgba(14, 196, 36, 0.885);
        text-decoration: none;
      }

      .nav-menu,
      .nav-menu ul,
      .nav-menu li,
      .nav-menu a {
        padding-top: 1%;
        list-style: none;
        position: relative;
        padding-left: 0.7rem;
        font-size: 0.7rem;
      }

      .nav-menu ul {
        background: #efefef;
        opacity: 0;
        position: absolute;
        /* -webkit-transition: opacity .3s; */
        /* transition: all .3s ease; */
        top: 2rem;
        border-bottom: 0.2rem green solid;
      }


      .nav-menu li:hover>ul {
        left: 0;
        opacity: 1;
        z-index: 1000;

      }

      .nav-menu ul>li>a {
        display: block;
        padding: 0.5rem 1rem;
        text-align: left;
        text-decoration: none;
      }

      .nav-menu ul li:hover>ul {
        top: 0;
        left: 100%;
      }

      .nav-menu li {
        cursor: default;
        float: left;
        white-space: nowrap;
      }

      .nav-menu ul li {
        float: none;
      }

      /* @media only screen and (max-width: 600px) {
                .headerw-galo {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  flex: 1.5;
                  padding-left: 6%;
                  text-transform: uppercase;
                  font-size: 0.5rem;
                  padding-top: 1%;
                }

                .headerw-galo-2 {
                  display: flex;
                  flex-direction: column;
                  align-items: flex-start;
                  padding-left: 0rem;
                  width: 100%;
                }

                .logo a img {
                  width: 22rem;
                  height: 6rem;
                }

                .nav {
                  position: fixed;
                  top: 0px;
                  right: 0px;
                  width: 24rem;
                  height: 100%;
                  background: #efefef;

                }

                .nav-menu {
                  width: 100%;
                  position: relative;
                  top: -12rem;
                  left: 0rem;
                  font-size: 1.2rem;
                  padding-top: 4.5rem;

                }

                .nav-menu li {
                  cursor: default;
                  float: none;
                  white-space: nowrap;
                  padding-bottom: 2rem;
                  border-bottom: 0.1rem black solid;
                }
              } */
    </style>

    <style>
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      .footer {
        font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        /* padding-left: 1rem; */
        margin-top: 1rem;
        display: flex;
        flex-direction: column;
        padding-top: 2rem;

      }

      .footer-one {
        background: rgb(54, 116, 3);
        background: linear-gradient(90deg, rgb(58, 184, 8) 35%, rgb(65, 121, 9) 100%);
        height: 4rem;
        margin-bottom: 0.05rem;
        padding: 1rem 1.5rem;
        width: 99%;
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
      }

      .main-footer {
        padding: 1rem 1.5rem;
        display: flex;
        background: rgb(0, 255, 64);
        background: linear-gradient(90deg, rgb(8, 184, 52) 35%, rgba(53, 121, 9, 1) 100%);
        justify-content: space-around;
        align-items: flex-start;
        width: 100%;
        height: 19rem;
        font-size: 1rem;
        color: #fff;

      }

      .footer-last {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #fff;
        background: rgb(24, 24, 24);
        background: linear-gradient(90deg, rgb(40, 64, 73) 35%, rgb(2, 63, 73) 100%);
        height: 4rem;
        /* margin-top: 0.2rem; */
        padding: 1rem 1.5rem;
        width: 100%;
        font-size: 1.1rem;

      }

      .col-one {
        flex: 2;
        padding-right: 6%;

      }

      .col-two {
        flex: 1;

      }

      .col-two a {
        list-style: none;
        color: #fff;
      }

      .col-three {
        flex: 1;
      }


      .modal-header {
        background: rgb(0, 255, 64);
        background: linear-gradient(90deg, rgb(8, 184, 52) 35%, rgba(53, 121, 9, 1) 100%);
      }

      .btn-primary {
        color: #fff !important;
        background-color: rgb(63, 50, 50) !important;
        border-color: rgb(63, 50, 50) !important;
      }

      .btn-success {
        color: #fff !important;
        background: rgb(0, 255, 64) !important;
        background: linear-gradient(90deg, rgb(8, 184, 52) 35%, rgba(53, 121, 9, 1) 100%) !important;
        border: none;
        padding: 1rem;
      }

      .btn-success:hover {
        /* background-color: #46AB55; */
      }

      .form-check.mb-4 {
        padding: 1rem;
      }

      label {
        /* font-weight: normal; */
        font-size: 1.3rem;
        padding: 0 2rem;
      }

      .card {
        border-radius: 0% !important;
      }

      .btn-success h3 {
        font-size: 1.5rem;
        padding: 1rem 2rem !important;
        margin: 0rem 0rem;
      }

      .model-footer .btn {
        background-color: #abbac3 !important;
        /* border-color: #abbac3; */
        border: none;
      }


      .modal-dialog {
        height: 50%;
        width: 50%;
        margin-top: 50px;
        float: Center;
        margin: auto
      }

      .modal-header {
        color: white;
        background-color: #007bff
      }

      textarea {
        border: none;
        box-shadow: none !important;
        -webkit-appearance: none;
        outline: 0px !important;

        overflow: auto;
        resize: vertical;
        padding-left: 1rem;
        width: 100%;
      }

      .openmodal {
        margin-left: 35%;
        width: 25%;
        margin-top: 50%;
        float: Center;

      }

      .icon1 {
        color: #007bff
      }

      a {
        margin: auto
      }

      input {
        color: #007bff
      }

      h2 {
        text-align: center;
        padding: 20px;
      }

      @media only screen and (max-width: 600px) {
        .main-footer {
          display: flex;
          flex-direction: column;
          height: 61rem;
        }

        .modal-content {
          top: 25rem;
          width: 120%;

        }

      }
    </style>

    <div class="headerw animatedq fadeInDownq clearfix">

      <div class="headerw-galo"><b>
          <a href="https://www.ephi.gov.et/" target="_blank">
            EPHI </a>
          <a href="https://ndmc.ephi.gov.et" target="_blank">
            NDMC

            <a href="https://vizhub.ephi.gov.et" target="_blank">
              H-DAV</a>
        </b>
      </div>

      <div class="headerw-galo-2">
        <div class="logo">
          <a href="https://rtds.ephi.gov.et" class="logologo"><img src="img/rtds.png" /></a>
        </div>
        <nav class="nav">
          <ul class="nav-menu"><b>
              <li><a href="https://rtds.ephi.gov.et">Home</a></li>

              <li style="color:white;"><a href="https://rtds.ephi.gov.et/public/keyword/?letter=%25">Keywords</a></li>
              <li style="color:white;"> <a href="https://rtds.ephi.gov.et/survey/">DCP</a></li>
              <li style="color:white;"><a href="https://rtds.ephi.gov.et/public/?search=%25">Dataset</a></li>

              <li><a href="#" data-toggle="modal" data-target="" class=" dropdown-toggle dropdown ">Publications</a>
                <ul>
                  <li><a href="#">Manuals</a>
                    <ul>
                      <li> <a href="https://rtds.ephi.gov.et/public//RDTSUserManual.pdf" target="_blank">Research
                          Tracking System</a></li>
                    </ul>
                  </li>

                  <li><a href="https://forum.ephi.gov.et/index.php" target="_blank">Published
                      articles </a></li>
                  <li> <a href="#" data-toggle="modal" data-target="#technical">Technical
                      Reports</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#guide">Guidelines and
                      Protocols</a></li>
                  <li> <a href="#" data-toggle="modal" data-target="#gov">Government Documents</a>
                  </li>
                  <li><a href="#">Book & Text</a></li>

                </ul>
              </li>

              <li> <a href="#" data-toggle="modal" data-target="#dssp">Data Sharing</a></li>
              <li><a href="https://rtds.ephi.gov.et/public/login">
                  <i class="glyphicon glyphicon-log-in"></i>
                  Login</a></li>

          </ul>
        </nav>
      </div>
    </div>



    <script>
      $(window).scroll(function (e) {
        var $el = $('.headerw-galo-2');
        var isPositionFixed = ($el.css('position') == 'fixed');
        if ($(this).scrollTop() > 50 && !isPositionFixed) {
          $el.css({ 'position': 'fixed', 'top': '0px' });
        }
        if ($(this).scrollTop() < 50 && isPositionFixed) {
          $el.css({ 'position': 'static', 'top': '0px' });
        }
      });
    </script>


    <div id="carousel-fade" class="carousel carousel-fade" data-ride="carousel" data-interval="5000"
      style="margin-top: 25px">

      <ol class="carousel-indicators">
        <li data-target="#carousel-fade" data-slide-to="0" class="active"
          style="background-color: rgb(49, 181, 84); height: 13px;"></li>
        <li data-target="#carousel-fade" data-slide-to="1" style="background-color: rgb(49, 181, 84); height: 13px;">
        </li>
        <li data-target="#carousel-fade" data-slide-to="2" class="active"
          style="background-color: rgb(49, 181, 84); height: 13px;"></li>
        <li data-target="#carousel-fade" data-slide-to="3" style="background-color: rgb(49, 181, 84); height: 13px;">
        </li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="cov1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"
            style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
            <h4
              style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">
              Redcap</h4>

          </div>
        </div>
        <div class="carousel-item">
          <img src="cov2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"
            style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
            <h4
              style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">
              DHIS2</h4>


          </div>
        </div>

        <div class="carousel-item">
          <img src="cov3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"
            style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
            <h4
              style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">
              CSPro</h4>


          </div>
        </div>

        <div class="carousel-item">
          <img src="cov4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block"
            style="background-color: rgb(49, 181, 84,0.0); color: rgb(200,200,200);">
            <h4
              style="font-family: 'Dosis', sans-serif; background-color: rgb(0,0,0,0.85); padding-top: 5px; padding-bottom: 5px;">
              ODK</h4>


          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel-fade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>


    </div>
    <div id="wrapper" class="viz-hub">

      <div id="page" class="page">

        <div class="container-fluid" id='dd'>







          <div class="row" style="margin-top: 25px; margin-bottom: 15px">
            <div class="col-md">
              <div class="card" style="background-color: rgb(49, 181, 84,0.85);">
                <div class="card-body ">



                  <div class="row row-cols-1 row-cols-md-4 g-4">
                    <div class="col">
                      <div class="card h-100">
                        <img src="043.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                          <h5 class="card-title">REDCap </h5>
                          <p class="card-text">
                            REDCap is a secure web application for building and managing online surveys and databases.
                            While REDCap can be used to collect virtually any type of data in any environment (including
                            compliance with 21 CFR Part 11, FISMA, HIPAA, and GDPR), it is specifically geared to
                            support online and offline data capture for research studies and operations. The REDCap
                            Consortium, a vast support network of collaborators, is composed of thousands of active
                            institutional partners in over one hundred countries who utilize and support their own
                            individual REDCap systems.
                          </p>
                        </div>
                        <div class="card-footer">

                          <div class="nav-item dropdown" style="z-index:2; position: relative">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">REDCap System
                            </a>
                            <div class="dropdown-menu">
                              <a href="https://cbs.ephi.gov.et/redcap/" class="btn dropdown-item" target="_blank">NEW
                                HIV Case Reporting <br> Surveillance in Ethiopia </a>
                              <a href="https://cbs.ephi.gov.et/redcap/" class="btn dropdown-item"
                                target="_blank">National Malaria Sentinel <br> Surveillance site </a>
                              <a href="https://cbs.ephi.gov.et/redcap/" class="btn dropdown-item"
                                target="_blank">SARS_COVID19_Survey</a>
                              <a href="https://cbs.ephi.gov.et/redcap/" class="btn dropdown-item"
                                target="_blank">CPT-ETs</a>
                            </div>



                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="044.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                          <h5 class="card-title">DHIS 2</h5>
                          <p class="card-text">
                            The District Health Information Software is used in more than 60 countries around the world.
                            DHIS is an open source software platform for reporting, analysis and dissemination of data
                            for all health programs, developed by the Health Information Systems Programme.
                          </p>
                        </div>
                        <div class="card-footer">

                          <div class="nav-item dropdown" style="z-index:2; position: relative">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown"
                              class="btn btn-success">DHIS-2 Systems </a>
                            <div class="dropdown-menu">
                              <a href="https://ethiopia.integratedntddb.org/" class="btn dropdown-item">NTD System </a>
                              <a href="https://covid.moh.gov.et/" class="btn dropdown-item">COVID-19 System </a>
                              <a href="https://dhis.moh.gov.et/" class="btn dropdown-item">DHIS-2 System</a>
                            </div>



                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card h-100">
                        <img src="045.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                          <h5 class="card-title">CSPro</h5>
                          <p class="card-text">
                            CSPro isa suite of software tools for census and survey data processing that includes
                            modules for data collection, editing,
                            tabulation, and dissemination.

                          </p>
                        </div>
                        <div class="card-footer">
                          <div class="nav-item dropdown" style="z-index:2; position: relative">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">CSPro </a>




                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card h-100">
                        <img src="046.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                          <h5 class="card-title">Open Data Kit (ODK)</h5>
                          <p class="card-text">
                            Open Data Kit (ODK) is a free, open-source suite of tools that allows data collection using
                            Android mobile devices and data submission to an online server, even without an Internet
                            connection or mobile carrier service at the time of data collection.
                          </p>
                        </div>
                        <div class="card-footer">
                          <div class="nav-item dropdown" style="z-index:2; position: relative">
                            <a href="http://172.21.6.13:8080/ODK/Aggregate.html" class="nav-link dropdown-toggle active"
                              data-toggle="dropdown">ODK System </a>


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







      <div id="myModal" class="modal fade" role="dialog">
        <!--Modal-->
        <div class="modal-dialog">
          <!--Modal Content-->
          <div class="modal-content">
            <!-- Modal Header-->
            <div class="class-header">
              <div class="card btn-success" style='background-color:#46AB55'>
                <h3>Feedback Request</h3>
              </div>
              <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
                style="color: white;">&times;</button>
            </div> <!-- Modal Body-->
            <div class="modal-body text-center">
              <form action="{{path('main')}}" method="GET">
                <h6>Help us improve our system? <strong>Give us your feedback.</strong></h6>
                <hr>
                <h6>Your Rating</h6>
            </div> <!-- Radio Buttons for Rating-->
            <div class="form-check mb-4"> <input name="rate" type="radio" name="rate" value="Excellent"><label
                class="ml-3">Excellent</label> </div>
            <div class="form-check mb-4"> <input name="rate" type="radio" name="rate" value="Very good"> <label
                class="ml-3">Very good</label> </div>
            <div class="form-check mb-4"> <input name="rate" type="radio" name="rate" value="Good"> <label
                class="ml-3">Good</label> </div>
            <div class="form-check mb-4"> <input name="rate" type="radio" name="rate" value="Bad"> <label
                class="ml-3">Bad</label> </div>
            <div class="form-check mb-4"> <input name="rate" type="radio" name="rate" value="Very Bad"> <label
                class="ml-3">Very Bad</label> </div>
            <!--Text Message-->
            <div class="text-center">
              <h5>What could we improve?</h5>
            </div> <textarea type="textarea" name="feedback" placeholder="Your Message" rows="3"></textarea>
            <!-- Modal Footer-->
            <div class="modal-footer"> <input type="submit" class="btn btn-success" value="send"
                style="background-color:#46AB55" /> </form> <a href="" class="btn btn-outline-success"
                data-dismiss="modal">Cancel</a> </div>
          </div>
        </div>

      </div>
      <div class="footer">
        <div class="footer-one">

        </div>
        <div class=main-footer>
          <div class="col-one">
            <span style="display: block; padding-bottom: 1rem;">
              ABOUT NDMC _________________________________________
            </span>
            <span style="display:block; padding-bottom: 1rem;">
              The National Data Management Center for health (NDMC) at the Ethiopian Public Health Institute (EPHI) is a
              responsible center to centrally archive health and health related data, process and manage health
              research,
              apply robust data analytic technics, synthesis evidence and to ensure evidence utilization for decision
              making
              by the Federal Ministry of Health (FMoH)
            </span>

            <li><i class="fa fa-phone" aria-hidden="true"></i> +251 (0)1 12 30 50 79
            </li>
            <li>
              <i class="fa fa-envelope" aria-hidden="true"></i> info@ndmc.ephi.gov.et
            </li>
            <li>
              <i class="fa fa-link" aria-hidden="true"></i> https://ndmc.ephi.gov.et
            </li>
            <li>
              <i class="fa fa-location-arrow" aria-hidden="true"></i> Adis Ketam kifele kitema in front of Paulos
              Hospital
            </li>

          </div>
          <div class="col-two">
            <span style="display: block; padding-bottom: 1rem;">
              QUICK LINKS ___________________________
            </span>
            <li><a href="https://www.moh.gov.et/ejcc/">FMOH </a></li>
            <li><a href="http://ghdx.healthdata.org/"> IHME</a></li>
            <li><a href="https://africacdc.org/"> Africa CDC </a></li>
            <li><a href="https://ephi.gov.et/"> EPHI</a></li>
            <li><a href="https://vizhub.ephi.gov.et/"> H-DAV</a></li>
            <li><a href="https://ndmc.ephi.gov.et/"> NDMC</a></li>
            <li><a href="https://survey.ephi.gov.et/"> Data Sharing</a></li>
            <li><a href="https://dhis.moh.gov.et/"> DHIS2</a></li>
            <li><a href="https://vizhub.ephi.gov.et/covid-19"> COVID-19 Modelling</a></li>

          </div>
          <div class="col-three">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Terms and Conditions
            </button>

            <!-- Modal -->
            <div class=" modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Terms and conditions </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <p style="color: rgba(44, 37, 37, 0.878);">
                      The data sharing and submission was undertaken by the
                      data repository and governance team. NDMC received health and health related data from EPHI
                      Directorates, NGOs, Government organizations and associations. Data received by the highly secured
                      system by providing the data submission link and password. Data owners can easily put the large
                      data
                      without restriction to NDMC on the link and password provided. On the same time NDMC is also
                      sharing
                      data to requesters, if necessary, requirements fulfilled based on the EPHI data sharing policy.
                      After they finished the data sharing process, the link and password given to requesters to easily
                      access the data.
                    </p>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                  </div>
                </div>
              </div>
            </div>

            <div style="padding-top: 1rem;">

              <button type="button" style="padding-top: 0.3rem; padding-right:  4rem; padding-left: 3rem;"
                class="btn btn-primary" data-toggle="modal" data-target="#myModal">Feedback</button>

            </div>

          </div>

        </div>
        <div class="footer-last">
          <div>
            <span>
              Copyright ©2021 All Rights Reserved
            </span>
          </div>
          <div>
            <span>
              Developed by NDMC Team
            </span>
          </div>
        </div>
      </div>

      <script>
        $('.d-flex').tooltip({
          selector: "button[rel=tooltip]"
        })
      </script>


      </body>

      <div id="myModalndmc" class="modal fade" role="dialog">
        <!--Modal--><br><br><br>
        <div class="modal-dialog">
          <!--Modal Content-->
          <div class="modal-content">
            <!-- Modal Header-->
            <div class="class-header">
              <div class="card btn-success" style='background-color:#46AB55'>
                <h3>NDMC Weekly Update</h3>
              </div>
              <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
                style="color: white;">&times;</button>
            </div> <!-- Modal Body-->
            <div class="modal-body text-center">

              <p> In this section covid-19 situational updates including a total number of cases, total deaths, and
                recovered cases described. The global and regional burden of Covid- 19 was also described here. In this
                covid -19 weekly update, all newly released covid 19 updates were incorporated. In addition to this
                home-based isolation and care weekly reports, number of admissions from home-based to hospital, number
                of cases discharged from hospital to home-based care were clearly described. Training, supplies, and any
                events that occurred related to covid 19 were described in detail.
              </p>

              <div class="modal-footer"> <a href="https://rtds.ephi.gov.et/covid19" class="btn btn-success">Proceed <i
                    class="fa fa-link"></i> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="npi" class="modal fade" role="dialog">
      <!--Modal-->
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
          <!-- Modal Header--><br><br><br>
          <div class="class-header">
            <div class="card btn-success" style='background-color:#46AB55'>
              <h3>NPI Weekly Update</h3>
            </div>
            <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
              style="color: white;">&times;</button>
          </div> <!-- Modal Body-->
          <div class="modal-body text-center">
            <p>
              Non-pharmaceutical intervention (NPI) weekly update is a covid 19 study update on monitoring COVID-19
              prevention practice: Hand hygiene, respiratory hygiene, and physical distance in 15 cities of Ethiopia
              conducted by Addis Ababa University. It contains weekly study findings on the city level proportions of
              preventive behavior for hand hygiene, physical distancing, and respiratory hygiene and progress in
              preventive practices.</p>

            <div class="modal-footer"> <a href="https://rtds.ephi.gov.et/covid19/npi.php"
                class="btn btn-success">Proceed <i class="fa fa-paper-plane"></i> </a> </div>
          </div>
        </div </div>
      </div>
    </div>

    <div id="sitrep" class="modal fade" role="dialog">
      <!--Modal-->
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
          <!-- Modal Header--><br><br><br>
          <div class="class-header">
            <div class="card btn-success" style='background-color:#46AB55'>
              <h3>SITREP Report</h3>
            </div>
            <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
              style="color: white;">&times;</button>
          </div> <!-- Modal Body-->
          <div class="modal-body text-center">
            <p>
              SITREP report is a daily COVID 19 report from the Ethiopian public health institute in public health
              emergency management directorates. COVID 19 daily report contains the global and national daily updates on
              the number of laboratory tests, new covid cases, new death, and recovered cases described. Case management
              and infection prevention control, daily home-based isolation, and care were described here. Risk
              communication and community engagement, administrative and supply issues were indicated on daily basis.
              Epidemiology and laboratory surveillance </p>

            <div class="modal-footer"> <a href="https://rtds.ephi.gov.et/covid19/sitrep.php"
                class="btn btn-success">Proceed <i class="fa fa-paper-plane"></i> </a> </div>
          </div>
        </div>
      </div </div>
    </div>
    <div id="guide" class="modal fade" role="dialog">
      <!--Modal-->
      <div class="modal-dialog">
        <!--Modal Content--><br><br><br>
        <div class="modal-content">
          <!-- Modal Header-->
          <div class="class-header">
            <div class="card btn-success" style='background-color:#46AB55'>
              <h3>Guidelines and Protocols</h3>
            </div>
            <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
              style="color: white;">&times;</button>
          </div> <!-- Modal Body-->
          <div class="modal-body text-center">
            <p>
              Guidelines are sets of evidence-based recommendations that aid decision-making about care in specific
              health systems and resource settings. These should be research or evidence-based. Protocols and procedures
              are the specific way that a policy, rule, or principle is carried out. It can often be thought of as a set
              of instructions. On this page, you could find different guidelines and protocols developed by disparate
              organizations.</p>

            <div class="modal-footer"> <a href="https://rtds.ephi.gov.et/covid19/guideline.php"
                class="btn btn-success">Proceed <i class="fa fa-paper-plane"></i> </a> </div>
          </div>
        </div </div>
      </div>
    </div>
    <div id="technical" class="modal fade" role="dialog">
      <!--Modal-->
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
          <!-- Modal Header-->
          <div class="class-header">
            <div class="card btn-success" style='background-color:#46AB55'><br><br><br>
              <h3>Technical report</h3>
            </div>
            <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
              style="color: white;">&times;</button>
          </div> <!-- Modal Body-->
          <div class="modal-body text-center">
            <p>
              This page is comprised of technical reports that describe the process, progress, or results of technical
              or scientific research or the state of a technical or scientific research problem. It might also include
              recommendations and conclusions of the research. Therefore, on this page, you could find different
              technical reports produced by governmental and no governmental organizations.</p>

            <div class="modal-footer"> <a href="https://rtds.ephi.gov.et/covid19/technical.php"
                class="btn btn-success">Proceed <i class="fa fa-paper-plane"></i> </a> </div>
          </div>
        </div </div>
      </div>
    </div>
    <div id="dssp" class="modal fade" role="dialog">
      <!--Modal-->
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
          <!-- Modal Header-->
          <div class="class-header">
            <div class="card btn-success" style='background-color:#46AB55'>
              <h3>Data sharing and submission platform</h3>
            </div>
            <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
              style="color: white;">&times;</button>
          </div> <!-- Modal Body-->
          <div class="modal-body text-center">

            <p> The data sharing and submission was undertaken by the data repository and governance team. NDMC received
              health and health related data from EPHI Directorates, NGOs, Government organizations and associations.
              Data received by the highly secured system by providing the data session link and password. Data owners
              can easily put the large data without restriction to NDMC on the link and password provided. On the same
              time NDMC is also sharing data to requesters if necessary requirements fulfilled. After they finished the
              data sharing process, the link and password given to requesters to easily access the data. </p>
            <div class="modal-footer"> <a href="https://survey.ephi.gov.et" class="btn btn-success">Proceed <i
                  class="fa fa-paper-plane"></i> </a> </div>
          </div>
        </div </div>
      </div>
    </div>
    <div id="pub" class="modal fade" role="dialog">
      <!--Modal--><br><br><br>
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
          <!-- Modal Header-->
          <div class="class-header">
            <div class="card btn-success" style='background-color:#46AB55'>
              <h3>Publications</h3>
            </div>
            <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
              style="color: white;">&times;</button>
          </div> <!-- Modal Body-->
          <div class="modal-body text-center">
            <p>
              The Ethiopian Public Health Institute has been researching priority public health and nutrition issues,
              generate, translate and disseminate scientific and technological knowledge as one of the main objectives
              of the establishment. Since then the conducted research has also been published in different research
              journals for the scientific community. Here on this page, you could find a list of articles conducted by
              different directorates found in EPHI and archived using Mendeley.</p>

            <div class="modal-footer"> <a
                href="https://www.mendeley.com/community/ef9f08bb-5165-39ed-b5aa-5ef1eeb9dba0/documents/"
                class="btn btn-success">Proceed <i class="fa fa-paper-plane"></i> </a> </div>
          </div>
        </div </div>
      </div>
    </div>
    <div id="gov" class="modal fade" role="dialog">
      <!--Modal--><br><br><br>
      <div class="modal-dialog">
        <!--Modal Content-->
        <div class="modal-content">
          <!-- Modal Header-->
          <div class="class-header">
            <div class="card btn-success" style='background-color:#46AB55'>
              <h3>Government documents</h3>
            </div>
            <!--Close/Cross Button--> <button type="button" class="close" data-dismiss="modal"
              style="color: white;">&times;</button>
          </div> <!-- Modal Body-->
          <div class="modal-body text-center">
            <p>
              This page includes information resources produced by local, state, and federal governments. They can
              include the texts of laws, regulations, statistics, scientific and technical information, maps, and
              detailed analyses of exceptionally wide and sophisticated topics.</p>

            <div class="modal-footer"> <a
                href="https://www.mendeley.com/community/ef9f08bb-5165-39ed-b5aa-5ef1eeb9dba0/documents/"
                class="btn btn-success">Proceed <i class="fa fa-paper-plane"></i> </a> </div>
          </div>
        </div </div>
      </div>
    </div>

  </html>
