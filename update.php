<?php
// Menghubungkan dengan database
$koneksi = mysqli_connect("sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum");

// Mendapatkan data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

// Mengupdate data peserta ke database
$query = "UPDATE peserta SET nama='$nama', alamat='$alamat', email='$email', telepon='$telepon' WHERE id=$id";
mysqli_query($koneksi, $query);

// Mengarahkan kembali ke halaman utama
header("Location: daftar.php");
?>
