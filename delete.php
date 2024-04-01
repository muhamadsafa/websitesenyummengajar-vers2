<?php
$id = $_GET["id"];

$db = mysqli_connect('sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum');

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "DELETE FROM pendaftar WHERE id=$id";

if (mysqli_query($db, $sql)) {
    header("Location: tambah.php");
    exit();
} else {
    echo "Terjadi kesalahan: " . mysqli_error($db);
}

mysqli_close($db);
?>
