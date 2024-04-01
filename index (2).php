<?php
session_start(); // Pastikan sesi telah dimulai

if (isset($_SESSION['username'])) {
    // Pengguna sedang login
    $username = $_SESSION['username'];
    // Anda dapat melakukan tindakan sesuai dengan pengguna yang sedang login
    header("Location: berandaloginuser.php");
    echo "ID Pengguna: " . $username;
}
else if(isset($_SESSION['usernameadmin'])) {
    // Pengguna sedang login
    $usernameadmin = $_SESSION['usernameadmin'];
    // Anda dapat melakukan tindakan sesuai dengan pengguna yang sedang login
    header("Location: berandaloginadmin.php");
    echo "ID Pengguna: " . $usernameadmin;
}
else {
    // Handle ketika pengguna belum login
    header("Location: beranda.php");
    exit();
}
?>