<!DOCTYPE html> 
<html lang="en">  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url('assets/templat') ?>/images/mts.png" type="image/png">
  <title><?php echo $judul; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/fontawesome-free/css/all.min.css"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/datatable/datatables.min.css') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-success navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url('admin/dashboard');?>" class="nav-link">Dashboard</a>
      </li>

    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-th-large"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <div class="dropdown-divider"></div>
          <a href="<?= base_url('loginadmin/logout') ?>" class="dropdown-item">
            <i class="fas fa-users mr-2"></i>Logout
          </a>

        </div>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('admin/dashboard');?>" class="brand-link bg-success">
      <img src="<?= base_url('assets/templat') ?>/images/mts.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light"><marquee behavior="scroll" width="200" >MTs Bima Bhakti Pertiwi</marquee></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/admin/') ?>img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $admin; ?></a>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column active" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="<?php echo base_url('admin/dashboard');?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <br>
    <div class="title" style="margin-left: 10px; color: white;"><h5>INTERFACE</h5></div>
              <li class="nav-item">
                <a href="<?= base_url('admin/berita'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Berita
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/carousel'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-image"></i>
                  <p>
                    Carousel
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/event'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-columns "></i>
                  <p>
                    Event
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/galeri'); ?>" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    Galeri
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?= base_url('admin/ppdb'); ?>" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    PPDB
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Master Data
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('admin/akun'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Admin</p>
                    </a>
                  </li>
                </ul>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('admin/guru'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Guru</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <br>
    <div class="title" style="margin-left: 10px; color: white;"><h5>DATA NILAI SISWA</h5></div>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Nilai Siswa 7
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pts17'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PTS 1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pas7'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PAS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pts27'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PTS 2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pat7'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PAT</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Nilai Siswa 8
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pts18'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PTS 1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pas8'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PAS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pts28'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PTS 2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pat8'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PAT</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Nilai Siswa 9
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pts19'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PTS 1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pas9'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PAS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pts29'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PTS 2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('admin/nilai/pat9'); ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>PAT</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('loginadmin/logout'); ?>" class="nav-link">
                  <i class="fas fa-users mr-2"></i>
                  <p>
                    Logout
                  </p>
                </a>
              </li>
              <br>
              <br>
              <br>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
