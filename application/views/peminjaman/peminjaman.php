<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Peminjaman</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css') ?> " rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('css/sweetalert.css') ?>" rel="stylesheet" >

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
      <li class="nav-item">
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
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url("peminjaman") ?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Peminjaman</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <?php echo form_open("Peminjaman_controller/simpanPeminjaman"); ?>
             <form class="form-inline" action="/action_page.php">
                <div class="form-group">
                  <label>Buku</label>
                  <select name="buku" class="form-control">
                    <?php 
                      foreach ($buku as $data) {
                        echo "<option value='$data->KdRegister'>".$data->Judul."</option>";
                      }
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Anggota</label>
                  <select name="anggota" class="form-control">
                    <?php 
                      foreach ($anggota as $data){
                        echo "<option value='$data->KdAnggota'>".$data->Nama."</option>";
                      }
                     ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Pinjam</label>
                  <input type="text" name="tgl" class="form-control" value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Tambah" class="btn btn-success">
                </div>
              </form>
          </div>
        </div>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
              Data Peminjaman
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" id="tab">
                <thead>
                  <tr>
                    <th>Kode</th>
                    <th>Judul</th>
                    <th>Peminjam</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($peminjaman as $data){
                      echo "<tr>
                      <td>".$data->KdPinjam."</td>
                      <td>".$data->Judul."</td>
                      <td>".$data->Nama."</td>
                      <td>".$data->Tgl_pinjam."</td>
                      <td>".$data->Tgl_kembali."</td>";
                      if ($data->Tgl_kembali == "0000-00-00") {
                        echo "<td><button onclick=kem(".$data->KdPinjam.") class = 'btn btn-info'>Kembali</a></td>
                        </tr>";
                      }
                      else{
                        echo "<td></td>";
                      }
                    }
                 ?>
                </tbody>
              </table>
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
  
  <script src="<?php echo base_url('js/sweetalert.min.js') ?>"></script>
  <script src="<?php echo base_url('js/sweetalert-dev.js') ?>"></script>

  <script type="text/javascript">
    function kem(id){
      swal({
        title: "Anda Yakin ?",
        text: "Apakah anda akan mengembalikan buku ini",
        type: "warning",
        showCacelButton: true,
        confirmButtonText: "OK",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: "<?php echo base_url('Peminjaman_controller/bukuKembali/') ?>",
          type: "post",
          data: {id:id},
          success:function(){
            swal('Buku Sudah Dikembalikan','success');
            setTimeout(function(){
               $( "#tab" ).load( "<?php echo base_url('peminjaman'); ?> #mytable" );
            }, 2000);
          },
          error:function(){
            swal('Data Gagal Dihapus', 'error');
          }
        });
      });
    }
  </script>

</body>

</html>
