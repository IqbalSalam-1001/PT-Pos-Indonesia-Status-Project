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


    <script src="<?= base_url(); ?>source/plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

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
                                    <a href="<?= base_url('Admin/ppppp'); ?>" class="nav-link active">
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
                                    <a href="<?= base_url('Admin/changepw'); ?>" class="nav-link">
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
                            <h1 class="m-0">History Project</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">Home</a></li>
                                <li class="breadcrumb-item">History Project</li>
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
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total data Rdirektorat</span>
                                    <span class="info-box-number">
                                        <?= $total['rdirek'] ?>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total data RProject</span>
                                    <span class="info-box-number"><?= $total['rproject'] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total data Rstatus</span>
                                    <span class="info-box-number"><?= $total['rstatus'] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total data Pengguna</span>
                                    <span class="info-box-number"><?= $total['rmember'] ?></span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-8">
                            <!-- MAP & BOX PANE -->

                            <!-- /.card -->

                            <!-- /.card-body -->
                            <!-- <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                        <span class="input-group-append">
                                            <button type="button" class="btn btn-warning">Send</button>
                                        </span>
                                    </div>
                                </form>
                            </div> -->
                            <!-- /.card-footer-->
                        </div>
                        <!--/.direct-chat -->
                    </div>
                    <!-- /.col -->


                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Latest Orders</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table m-6" id="table-data">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Project Name</th>
                                            <th>Rproject</th>
                                            <th>Tanggal</th>
                                            <th>Catatan</th>
                                            <th>Progress</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($tbl as $row) : ?>
                                            <tr>
                                                <td><?= $row->id; ?>
                                                <td><?= $row->project_name; ?>
                                                <td><?= $row->deskripsi; ?>
                                                <td><?= $row->tanggal; ?>
                                                <td><?= $row->catatan; ?>
                                                <td><?= $row->progress; ?>
                                                <td class="row">
                                                    <div class="col-md-1"></div>
                                                    <form class="edit" action="<?= base_url('Admin/delete5'); ?>" method="post">
                                                        <input type="hidden" name="id" value="<?= $row->id ?>"></input:>
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>


                        <!-- /.card-body -->
                        <!-- /.card-footer -->
                    </div>
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

    <script>
        var tablePengguna = $('#table-data').DataTable({
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Cari Data",
                lengthMenu: "Menampilkan _MENU_ data",
                zeroRecords: "Data tidak ditemukan",
                infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
                infoFiltered: "(disaring dari _MAX_ data)",
                paginate: {
                    previous: '<i class="fa fa-angle-left"></i>',
                    next: "<i class='fa fa-angle-right'></i>",
                }
            },
        });
    </script>
</body>

</html>