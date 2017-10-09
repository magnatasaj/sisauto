<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>SISAUTO: MAIS AMIGOS</title>

 <link rel="stylesheet" href="<?= base_url() ?>includes/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?= base_url() ?>includes/css/bootstrap-multiselect.css">

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>includes/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>includes/css/jquery-ui-1.9.2.custom.css">

  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>includes/dist/css/skins/_all-skins.min.css">
  <script src="<?= base_url() ?>includes/js/aqq.js"></script>
 <style>
            body {
                overflow: hidden;
            }


            /* Preloader */

            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #fff;
                /* change if the mask should have another color then white */
                z-index: 99;
                /* makes sure it stays on top */
            }

            #status {
                width: 218px;
                height: 185px;
                position: absolute;
                left: 50%;
                /* centers the loading animation horizontally one the screen */
                top: 50%;
                /* centers the loading animation vertically one the screen */
                background-image: url('<?= base_url() ?>includes/caregador.gif');
                /* path to your loading animation */
                background-position: center;
                margin: -100px 0 0 -100px;
                /* is width and height divided by two */
            }    
        </style>
<div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
<body  class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    
    <!-- Logo -->
    <a href="/facemp" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="img/logo-home.png" alt="SISAUTO"></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
       <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
         
          <li>
            <a href="/facemp/SvSair" ><i class="glyphicon glyphicon-lock"></i>  Sair</a>
          </li>
        </ul>
      </div>

    </nav>
  </header>  