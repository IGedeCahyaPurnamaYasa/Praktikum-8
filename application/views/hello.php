<html>
  <head>
    <title>CRUD Codeigniter</title>
  </head>
  <body>
    <h1>Data siswa</h1>
    <hr>
    <a href='<?php echo base_url("helloworld/tambah"); ?>'>Tambah Data</a><br><br>
    <table border="1" cellpadding="7">
      <tr>
        <th>No Induk</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
      if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
        foreach($siswa as $data){
          echo "<tr>
          <td>".$data->no_induk."</td>
          <td>".$data->nama."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("helloworld/ubah/".$data->no_induk)."'>Ubah</a></td>
          <td><a href='".base_url("helloworld/hapus/".$data->no_induk)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>

