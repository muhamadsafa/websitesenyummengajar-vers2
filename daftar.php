<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Peserta Kegiatan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h2>Data Peserta</h2>
  <a href="tambah.php" class="btn btn-primary">Tambah Peserta</a><br/><br/>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Telepon</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Menghubungkan dengan database
      $db = mysqli_connect("sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum");

      // Mengambil data peserta
      $query = "SELECT * FROM peserta";
      $result = mysqli_query($db, $query);

      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['telepon']."</td>";
        echo "<td><a href='edit.php?id=".$row['id']."' class='btn btn-info'>Edit</a>
              <a href='hapus.php?id=".$row['id']."' class='btn btn-danger'>Hapus</a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
