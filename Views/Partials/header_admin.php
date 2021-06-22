<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Sistema de cotizacion y emision de soat  SGA-AXA">
  <meta name="author" content="Grupoasistencia">
  <meta name="theme-color" content="#67b5fb">
  <title><?php echo PROJECT_NAME; ?></title> <!-- Archivo config-->
  <link rel="icon" type="image/x-icon" href="<?php echo media(); ?>images/soat1.ico">
  <!-- Ionicons -->

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/summernote/summernote-bs4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>js/plugins/sweetalert2.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>css/main.css">

  <!-- Toastr -->
  <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>plugins/toastr/toastr.min.css">
  <!-- Theme style -->

</head>

<body class="hold-transition sidebar-mini">
  <?php if ($data['page_header'] == 1) { ?>
<div class="wrapper">
  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake  " src="<?php echo media(); ?>images/axa2.png" alt="AdminLTELogo" height="80" width="110">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-whit navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
 
  <?php require_once('aside_admin.php'); ?>
  <?php } ?>