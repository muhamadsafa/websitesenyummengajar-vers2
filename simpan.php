<?php
// Menghubungkan dengan database
$db = mysqli_connect("sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum");

// Mendapatkan data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

// Menyimpan data peserta ke database
$query = "INSERT INTO peserta (nama, alamat, email, telepon) VALUES ('$nama', '$alamat', '$email', '$telepon')";
mysqli_query($db, $query);

// Mengarahkan kembali ke halaman utama
header("Location: daftar.php");
?>
