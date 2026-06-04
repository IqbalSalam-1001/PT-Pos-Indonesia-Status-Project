<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ENTERPRICE | USER</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>source/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>source/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>source/pages/UI/buttons.html">

  <script src="https://kit.fontawesome.com/7b2bd0b2bb.js" crossorigin="anonymous"></script>




</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-orange navbar-light">

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Auth/logout'); ?>" role="button">
            <i class="fas fa-arrow-right-from-bracket"></i>

          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/zero/Admin/index#" class="brand-link">
        <img src="<?= base_url(); ?>source/img/logo pos.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">EnterPrice</span>

      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url(); ?>source/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?> </a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu1" data-accordion="true">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu1-open">
              <a href="#" class="nav-link active">
                <i class="fas fa-folder"></i>
                <p>
                  Referensi
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Admin/prd'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>RDirektorat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin/prs'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>RProject</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin/ph'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>RStatus</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin/index'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>pengguna</p>
                  </a>
                </li>

              </ul>
              <!-- PEMBATAS -->
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="fas fa-folder"></i>
                <p>
                  Transaksi
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Admin/project'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>Project</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Admin/ppppp'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>History Project</p>
                  </a>
                </li>
              </ul>
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="fas fa-folder"></i>
                <p>
                  Laporan
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Admin/pppp'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>View Progress</p>
                  </a>
                </li>
              </ul>

            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="fas fa-folder"></i>
                <p>
                  Sistem
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= base_url('Admin/changepw'); ?>" class="nav-link active">
                    <i class="fas fa-folder-open"></i>
                    <p>Ubah Password</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('Auth/logout'); ?>" class="nav-link">
                    <i class="fas fa-folder-open"></i>
                    <p>Log Out</p>
                  </a>
                </li>
              </ul>


            </li>
          </ul>
        </nav>


        <!-- /.sidebar-menu -->
      </div>

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Ubah Password</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">Home</a></li>
                <li class="breadcrumb-item">Ubah Password</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <!-- /.col -->
            <!-- /.col -->

            <!-- fix for small devices only -->



            <!-- /.col -->

            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-12">
              <!-- MAP & BOX PANE -->

              <!-- /.card -->

              <!-- /.card-body -->

              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->
          </div>
          <!-- /.col -->

          <!-- TABLE: LATEST ORDERS -->
          <section class="content">
            <div class="">
              <div class="col-md-12">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">General</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <form method="post" action="<?= base_url('admin/newpassword'); ?>">
                      <input type="hidden" name="iduser" value="<?= $this->session->userdata('idtable') ?>" />
                      <div class="form-group">
                        <label for="newpw">New Password</label>
                        <input id="newpw" class="form-control" name="newpw" type="password" value="">
                        </input>
                      </div>

                      <div class="col-12">
                        <input type="submit" value="Save Changes" class="btn btn-success float-right">
                      </div>
                    </form>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <div class="col-md-6">

                <!-- /.card -->
                <!-- /.col -->


                <!-- /.info-box -->

                <!-- /.card -->

                <!-- PRODUCT LIST -->

                <!-- /.card-body -->

                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?= base_url(); ?>source/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url(); ?>source/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url(); ?>source/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>source/dist/js/adminlte.js"></script>

  <!-- PAGE PLUGINS -->
  <!-- jQuery Mapael -->
  <script src="<?= base_url(); ?>source/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="<?= base_url(); ?>source/plugins/raphael/raphael.min.js"></script>
  <script src="<?= base_url(); ?>source/plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="<?= base_url(); ?>source/plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>source/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url(); ?>source/dist/js/pages/dashboard2.js"></script>
</body>

</html>