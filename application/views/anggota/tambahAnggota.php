<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?> " rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
  <!-- Navbar -->
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url("pegawai") ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Pegawai</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("anggota") ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Anggota</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("buku") ?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Buku</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("peminjaman") ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Peminjaman</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
              Tambah Anggota
          </div>
          <div class="card-body">
            <div class="container">
              <?php echo form_open("Peminjaman_controller/tambahAnggota"); ?>
              <form class="form-horizontal" action="" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="jenjang" placeholder="Jenjang" name="jenjang">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="SIMPAN" class="btn btn-success">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('assets/chart.js/Chart.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
  <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin.min.js') ?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('js/demo/datatables-demo.js') ?>"></script>
  <script src="<?php echo base_url('js/demo/chart-area-demo.js') ?>"></script>

</body>

</html>
