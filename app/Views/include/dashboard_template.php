<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/plugins/fontawesome-free-6.4.0-web/css/all.min.css')?>">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/jqvmap/jqvmap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/dist/css/adminlte.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/daterangepicker/daterangepicker.css')?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/summernote/summernote-bs4.min.css')?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
</head>
<?php if(logged('mode')->mode === 'light') {?>
<body class="hold-transition sidebar-mini layout-fixed">
<?php }else{ ?>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php } ?>
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?=base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
<?php if(logged('mode')->mode === 'light') {?>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
<?php }else{ ?>
  <nav class="main-header navbar navbar-expand navbar-dark">
<?php } ?>
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Mode Light/Dark  -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-mode" href="users/updateMode" role="button">
          <?php if(logged('mode')->mode === 'light') {?>
          <i class="fa-solid fa-sun"></i>
          <?php }else{ ?>
          <i class="fa-solid fa-moon"></i>
          <?php } ?>
        </a>
      </li>
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url('assets/img/user1-128x128.jpg')?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url('assets/img/user8-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?=base_url('assets/img/user3-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- Dropdown Menu User -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">

          <img src="<?php echo userProfile(logged('id')->id) ?>" class="user-image" alt="User Image" width="20" height="20">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="card-body box-profile">
            <div class="text-center">
              <img src="<?php echo userProfile(logged('id')->id) ?>" alt="User Avatar" class="profile-user-img img-fluid img-circle">
            </div>
            <h3 class="profile-username text-center"><?php echo logged('name')->name ?></h3>
            <p class="text-muted text-center">Miembro desde</p>
            <p class="text-muted text-center"><i class="far fa-clock mr-1"></i><?php echo date('M. Y', strtotime(logged('created_at')->created_at)) ?></p>                       
          </div>
          <div class="card-footer">
            <a href="<?php echo url('profile') ?>" class="btn btn-dark ">Profile</a>
            <a href="<?php echo url('/logout') ?>" class="btn btn-dark float-right">Sign out</a>
          </div>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?=base_url('assets/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo userProfile(logged('id')->id) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="users/view/<?php echo logged('id')->id?> " class="d-block"><?php echo logged('name')->name ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php 
            $menus = session()->get('menus');
            $menusPadre = array_filter($menus, function($obj) { return $obj->menu_padre_id == 0; });
            
            foreach ($menusPadre as $menu){
              if ($menu->type_object == "Menu"){
          ?>
            <?php
                if ($_SESSION['menu_padre_active']!== '' && $_SESSION['menu_padre_active']===$menu->title){
              ?>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
              <?php
                }else{
              ?>
              <li class="nav-item">
                <a href="#" class="nav-link">
              <?php
                }
              ?>
                <i class="<?php echo $menu->icon ?>"></i>
                <p>
                  <?php echo $menu->title ?>
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>              
              <ul class="nav nav-treeview">
                <?php
                  $menusHijo = array_filter($menus, function($obj) use($menu) { return $obj->menu_padre_id == $menu->id; });
                  foreach ($menusHijo as $menuHijo){
                ?>
                    <li class="nav-item">
                      <?php
                        if ($menuHijo->title == $_SESSION['menu_active']){
                      ?>
                        <a href="<?php echo url($menuHijo->object) ?>" class="nav-link active">
                      <?php
                        }else{
                      ?>
                        <a href="<?php echo url($menuHijo->object) ?>" class="nav-link">
                      <?php
                        }
                      ?>
                        <i class="<?php echo $menuHijo->icon ?>"></i>
                        <p><?php echo $menuHijo->title ?></p>
                      </a>
                    </li>
                <?php
                  }
                ?>
              </ul>
            </li>
          <?php
              }
              if ($menu->type_object == "Action"){
          ?>
            <li class="nav-item">
              <?php
                if ($menu->title == $_SESSION['menu_active']){
              ?>
                <a href="<?php echo url($menu->object) ?>" class="nav-link active">
              <?php
                }else{
              ?>
                <a href="<?php echo url($menu->object) ?>" class="nav-link">
              <?php
                }
              ?>
                <i class="<?php echo $menu->icon ?>"></i> <p><?php echo $menu->title; ?></p>
              </a>
            </li>
          <?php
              }
            }
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?= $this->renderSection('content') ?>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Made with <i class="fa fa-heart" style="color: red;"></i> for Developers
      &nbsp; &nbsp; &nbsp; &nbsp; 
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo url('/') ?>"><?php echo setting('company_name') ?></a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- Componentes -->
<script src="<?=base_url('assets/componentes/BootstrapModalDialog/bootstrap-dialog.js')?>"></script>
<script src="<?=base_url('assets/componentes/BootstrapModalDialog/BootstrapModalDialog.js')?>"></script>

<script src="<?=base_url('assets/componentes/vdisenioJS/vdisenio.js')?>"></script>
<script src="<?=base_url('assets/componentes/vdisenioJS/inputSelect.js')?>"></script>
<script src="<?=base_url('assets/componentes/vdisenioJS/inputSearch.js')?>"></script>

<!-- jQuery -->
<script src="<?=base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('assets/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?=base_url('assets/plugins/chart.js/Chart.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?=base_url('assets/plugins/sparklines/sparkline.js')?>"></script>
<!-- JQVMap -->
<script src="<?=base_url('assets/plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('assets/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?=base_url('assets/plugins/moment/moment.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/moment/locale/es.js')?>"></script>
<script src="<?=base_url('assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
<script src="<?=base_url('assets/plugins/daterangepicker/daterangepicker.js')?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.j')?>s"></script>
<!-- Summernote -->
<script src="<?=base_url('assets/plugins/summernote/summernote-bs4.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/dist/js/adminlte.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?=base_url('dist/js/demo.js')?>"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets/dist/js/pages/dashboard.js')?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- FormValidator -->
<script src="<?=base_url('assets/componentes/vForm/vFormValidator.js')?>"></script>
<!-- AjaxFormulario -->
<script src="<?=base_url('assets/componentes/AjaxFormulario/ajaxFormulario.js')?>"></script>
</body>
</html>
