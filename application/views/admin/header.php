<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<?php
$act_uri = $this->uri->segment(1, 0);
$lastsec = $this->uri->total_segments();
$act_uri_submenu = $this->uri->segment($lastsec);
if (!$act_uri) {
    $act_uri = 'index';
}
//echo "<br/>Active URI : ".$act_uri;
//echo "<br/>Sub Active URI : ".$act_uri_submenu;
if (is_numeric($act_uri_submenu)) {
    $lastsec = $lastsec - 1;
    $act_uri_submenu = $this->uri->segment($lastsec);
    $act_uri_submenu1 = $this->uri->segment($lastsec); 
//     echo "<br/>Sub Active URI Is Numeric : ".$act_uri_submenu;
}
$numeric_act_url = $this->uri->segment($lastsec + 1);
//echo "<br/>Sub Active URI : ".$numeric_act_url;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
   <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/bower_components/select2/dist/css/select2.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/dist/css/dropzone.css">
  <script src="<?= base_url() ?>assets/admin/dist/js/dropzone.js"></script>
  <script src="<?= base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js" type="text/javascript"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<style>
    .error{
        color: red;
    }
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?= ($act_uri==='admin' && $act_uri_submenu==='index' || $act_uri_submenu==='addTour' )?'active':'' ?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tours</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="<?= ($act_uri==='admin' && $act_uri_submenu==='index')?'active':'' ?>"><a href="<?= base_url() ?>index.php/admin/index"><i class="fa fa-circle-o"></i> Tour List</a></li>
              <li class="<?= ($act_uri==='admin' && $act_uri_submenu==='addTour')?'active':'' ?>"><a href="<?= base_url() ?>index.php/admin/addTour"><i class="fa fa-circle-o"></i> Add Tour</a></li>
          </ul>
        </li>
        <li class="treeview <?= ($act_uri==='admin' && $act_uri_submenu==='features' || $act_uri_submenu==='addFeature' )?'active':'' ?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Features</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="<?= ($act_uri==='admin' && $act_uri_submenu==='features')?'active':'' ?>"><a href="<?= base_url() ?>index.php/admin/features"><i class="fa fa-circle-o"></i> Feature List</a></li>
            <li class="<?= ($act_uri==='admin' && $act_uri_submenu==='addFeature')?'active':'' ?>"><a href="<?= base_url() ?>index.php/admin/addFeature"><i class="fa fa-circle-o"></i> Add Feature</a></li>
          </ul>
        </li> 
        <li class="treeview <?= ($act_uri==='admin' && $act_uri_submenu==='users')?'active':'' ?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li class="<?= ($act_uri==='admin' && $act_uri_submenu==='users')?'active':'' ?>"><a href="<?= base_url() ?>index.php/admin/users"><i class="fa fa-circle-o"></i> User List</a></li>
            <!--<li><a href="<?= base_url() ?>index.php/admin/addFeature"><i class="fa fa-circle-o"></i> Add Feature</a></li>-->
          </ul>
        </li>
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
