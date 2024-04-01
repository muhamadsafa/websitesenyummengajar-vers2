<?php
$db = mysqli_connect("sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum");

// Mengambil data dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event'];

// Menyimpan data ke database
$query = "INSERT INTO participants (name, email, phone, event) VALUES ('$name', '$email', '$phone', '$event')";
mysqli_query($db, $query);

mysqli_close($db);

header("Location: daftar.php");
?>
