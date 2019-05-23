<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Data Anggota</title>

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
      <li class="nav-item active">
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
        <div class="card-body">
            <a href="<?php echo base_url("/anggota/tambah") ?>"><button class="btn btn-success">Tambah</button></a>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
              Data Anggota
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="dataTables_wrapper dt-bootstrap4 no-footer" id="dataTable_wrapper" width="100%" cellspacing="0">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="dataTable_length">
                      <label>Show</label>
                      <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_filter" id="dataTable_filter">
                      <label>Search : </label>
                      <input type="search" name="" class="form-control form-control-sm" placeholder aria-controls="dataTable">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table class="table table-bordered dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                      <thead>
                        <tr role="row">
                          <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Kode: activate to sort column descending" style="width: 70px;">
                            Kode
                          </th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending" style="width: 125px;">Nama</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Prodi: activate to sort column ascending" style="width: 121px;">Prodi</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Jenjang: activate to sort column ascending" style="width: 195px;">Jenjang</th>
                          <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Alamat: activate to sort column ascending" style="width: 195px;">Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          foreach($anggota as $data){
                              echo "<tr id='delete' role='row' class='odd'>
                              <td class='sorting_1'>".$data->KdAnggota."</td>
                              <td>".$data->Nama."</td>
                              <td>".$data->Prodi."</td>
                              <td>".$data->Jenjang."</td>
                              <td>".$data->Alamat."</td>
                              <td><a href='".base_url("Peminjaman_controller/editAnggota/").$data->KdAnggota."'>Edit</a></td>
                              <td><button onclick = del(".$data->KdAnggota.") class='btn btn-danger'>Delete</button></td>
                              </tr>";
                            }
                         ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                          <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                        </li>
                        <li class="paginate_button page-item active">
                          <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item next disabled" id="dataTable_next">
                          <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Prodi</th>
                      <th>Jenjang</th>
                      <th>Alamat</th>
                      <th colspan="2">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach($anggota as $data){
                        echo "<tr id='delete'>
                        <td>".$data->KdAnggota."</td>
                        <td>".$data->Nama."</td>
                        <td>".$data->Prodi."</td>
                        <td>".$data->Jenjang."</td>
                        <td>".$data->Alamat."</td>
                        <td><a href='".base_url("Peminjaman_controller/editAnggota/").$data->KdAnggota."'>Edit</a></td>
                        <td><button onclick = del(".$data->KdAnggota.") class='btn btn-danger'>Delete</button></td>
                        </tr>";
                      }
                   ?>
                  </tbody>
                </table>
              </div>
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
    function del(id){
      swal({
        title: "Anda Yakin ?",
        text: "Data ini akan hilang dan tak bisa kembali",
        type: "warning",
        showCacelButton: true,
        confirmButtonText: "Delete",
        closeOnConfirm: false
      },
      function(){
        $.ajax({
          url: "<?php echo base_url('Peminjaman_controller/deleteAnggota/') ?>",
          type: "post",
          data: {id:id},
          success:function(){
            swal('Data Berhasil Dihapus','success');
            $("#delete").fadeTo("slow",0.7,function(){
              $(this).remove();
            })
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
