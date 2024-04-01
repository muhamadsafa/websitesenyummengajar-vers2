<?php
session_start();
session_destroy(); // Menghapus semua data sesi

// Redirect ke halaman login atau halaman lain
header("Location: beranda.php"); // Gantilah "login.php" dengan halaman tujuan yang sesuai
exit();
?>