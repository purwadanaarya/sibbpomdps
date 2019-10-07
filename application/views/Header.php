<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="icon" href="<?php echo base_url('assets/Styling/dist/img/bpom.jpg') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/Styling/bootstrap/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Styling/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Styling/dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/Styling/dist/css/skins/_all-skins.min.css') ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/Styling/plugins/datatables/dataTables.bootstrap.css') ?>">
  <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.7/dist/css/bootstrap-select.min.css">
<link href="<?php echo base_url('assets/sign/css/jquery.signaturepad.css') ?>" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SISTEM</b> INFORMASI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/Styling/dist/img/bpom.jpg') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('si_nama') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/Styling/dist/img/bpom.jpg') ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('si_nama') ?>
                  <small>BBPOM di Denpasar - <?php echo $this->session->userdata('si_role'); ?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('user/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/Styling/dist/img/bpom.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('si_nama'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo "BBPOM di Denpasar" ?></a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><center>PERIODE</center></li>
        <form action="<?php echo base_url('Home/') ?>" method="post" class="sidebar-form">
          <div class="input-group">
            <input type="hidden" name="last_link" value="<?php echo current_url() ?>">
            <input type="number" class="form-control" id="periode" name="periode" placeholder="periode" value="<?php echo $this->session->userdata('periode') ?>">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><center>MAIN MENU</center></li>
        <li class="" id='btn_beranda'>
          <a href="<?php echo base_url('home') ?>">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
          </a>
        </li>
          <!--
          1 = admin
          2 = struktural
          3 = infokom
          4 = sertifikasi
          -->
          <?php if($this->session->userdata('si_idrole')==1){ ?>
            <li class="" id='btn_admin_user'>
              <a href="<?php echo base_url('admin/user') ?>">
                <i class="fa fa-user"></i> <span>Manajemen User</span>
              </a>
            </li>
            <li id='btn_admin_kategori' class="treeview">
              <a href="#">
                <i class="fa fa-list"></i> <span>Manajemen Kategori</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('admin/kategori/produk') ?>"><i class="fa fa-archive"></i> Kategori Produk</a></li>
                <li><a href="<?php echo base_url('admin/kategori/konsultasi') ?>"><i class="fa fa-archive"></i> Kategori Konsultasi</a></li>
              </ul>
            </li>
          <?php } elseif ($this->session->userdata('si_idrole')==2){ ?>
            <li class="" id='btn_konsultasi'>
              <a href="<?php echo base_url('infokom/konsultasi') ?>">
                <i class="fa fa-list"></i> <span>Konsultasi</span>
              </a>
            </li>
            <li class="" id='btn_sertifikasi'>
              <a href="<?php echo base_url('sertifikasi/sertifikasi') ?>">
                <i class="fa fa-list"></i> <span>Sertifikasi</span>
              </a>
            </li>
          <?php } elseif ($this->session->userdata('si_idrole')==3){ ?>
            <li class="" id='btn_konsultasi'>
              <a href="<?php echo base_url('infokom/konsultasi') ?>">
                <i class="fa fa-list"></i> <span>Konsultasi</span>
              </a>
            </li>
            <li class="" id='btn_sertifikasi'>
              <a href="<?php echo base_url('sertifikasi/sertifikasi') ?>">
                <i class="fa fa-list"></i> <span>Sertifikasi</span>
              </a>
            </li>
          <?php } elseif ($this->session->userdata('si_idrole')==4) { ?>
            <li class="" id='btn_konsultasi'>
              <a href="<?php echo base_url('infokom/konsultasi') ?>">
                <i class="fa fa-list"></i> <span>Konsultasi</span>
              </a>
            </li>
            <li class="" id='btn_sertifikasi'>
              <a href="<?php echo base_url('sertifikasi/sertifikasi') ?>">
                <i class="fa fa-list"></i> <span>Sertifikasi</span>
              </a>
            </li>
          <?php } ?>
      </ul>
      <!-- search form -->

    </section>
  </aside>
