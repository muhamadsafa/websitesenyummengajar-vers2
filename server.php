<?php
session_start();

// initializing variables

$sname ="";
$unmae= "";
$password = "";
$db_name = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  /**if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }**/

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: beranda.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

// LOGIN ADMIN
if (isset($_POST['login_admin'])) {
  $usernameadmin = mysqli_real_escape_string($db, $_POST['usernameadmin']);
  $passwordadmin = mysqli_real_escape_string($db, $_POST['passwordadmin']);

  if (empty($usernameadmin)) {
  	array_push($errors, "Username is required");
  }
  if (empty($passwordadmin)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM admin WHERE usernameadmin='$usernameadmin' AND passwordadmin='$passwordadmin'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['usernameadmin'] = $usernameadmin;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: beranda.php');
  	}else {
  	    array_push($errors, "Wrong username/password combination");
  	}
  }
}



//Donasi

if(isset($_POST["submit"])){
  $pilih_donasi = $_POST["pilih_donasi"];
  $nama_lengkap = $_POST["nama_lengkap"];
  $alamat_email = $_POST["alamat_email"];
  $no_telp = $_POST["no_telp"];
  $nominal_donasi = $_POST["nominal_donasi"];
  $ket_donasi = $_POST["ket_donasi"];
  $metode_pembayaran = $_POST["metode_pembayaran"];

  $foto_bukti_transfer = $_FILES["foto_bukti_transfer"]["name"];
  $tmp_name = $_FILES['foto_bukti_transfer']['tmp_name'] ;
  move_uploaded_file($tmp_name, "foto_bukti_transfer/".$foto_bukti_transfer) ; 

  $query = "INSERT INTO donasi VALUES('', '$pilih_donasi', '$nama_lengkap', '$alamat_email', '$no_telp', '$nominal_donasi', '$ket_donasi', '$metode_pembayaran', '$foto_bukti_transfer')";
  mysqli_query($db,$query);
  echo

  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
  echo '<script>window.history.back();</script>';
}

//program
if (isset($_POST['daftar_program'])) {
    $namapsatu = $_POST['namapsatu'];
    $usiapsatu = $_POST['usiapsatu'];
    $alamatpsatu = $_POST['alamatpsatu'];
    $emailpsatu = $_POST['emailpsatu'];
    $notelppsatu = $_POST['notelppsatu'];

    $query = "INSERT INTO programsatu
  			  VALUES('','$namapsatu', '$usiapsatu', '$alamatpsatu', '$emailpsatu' '$notelppsatu' )";
  	mysqli_query($db, $query);
    echo
    "
    <script> alert('Anda Berhasil Mendaftar'); </script>
    ";
}

if (isset($_POST['daftar_program'])) {
    $namapdua = $_POST['namapdua'];
    $usiapdua = $_POST['usiapdua'];
    $alamatpdua = $_POST['alamatpdua'];
    $emailpdua = $_POST['emailpdua'];
    $notelppdua = $_POST['notelppdua'];

    $query = "INSERT INTO programdua
  			  VALUES('','$namapdua', '$usiapdua', '$alamatpdua', '$emailpdua' '$notelppdua' )";
  	mysqli_query($db, $query);
    echo
    "
    <script> alert('Anda Berhasil Mendaftar'); </script>
    ";
}

if (isset($_POST['daftar_program'])) {
    $namaptiga = $_POST['namaptiga'];
    $usiaptiga = $_POST['usiaptiga'];
    $alamatptiga = $_POST['alamatptiga'];
    $emailptiga = $_POST['emailptiga'];
    $notelpptiga = $_POST['notelpptiga'];

    $query = "INSERT INTO programtiga
  			  VALUES('','$namaptiga', '$usiaptiga', '$alamatptiga', '$emailptiga' '$notelpptiga' )";
  	mysqli_query($db, $query);
    echo
    "
    <script> alert('Anda Berhasil Mendaftar'); </script>
    ";
}

if (isset($_POST['daftar_program'])) {
    $namapempat = $_POST['namapempat'];
    $usiapempat = $_POST['usiapempat'];
    $alamatpempat = $_POST['alamatpempat'];
    $emailpempat = $_POST['emailpempat'];
    $notelppempat = $_POST['notelppempat'];

    $query = "INSERT INTO programempat
  			  VALUES('','$namapempat', '$usiapempat', '$alamatpempat', '$emailpempat' '$notelppempat' )";
  	mysqli_query($db, $query);
    echo
    "
    <script> alert('Anda Berhasil Mendaftar'); </script>
    ";
}

if (isset($_POST['daftar_program'])) {
    $namaplima= $_POST['namaplima'];
    $usiaplima = $_POST['usiaplima'];
    $alamatplima = $_POST['alamatplima'];
    $emailplima = $_POST['emailplima'];
    $notelpplima = $_POST['notelpplima'];

    $query = "INSERT INTO programlima
  			  VALUES('','$namaplima', '$usiaplima', '$alamatplima', '$emailplima' '$notelpplima' )";
  	mysqli_query($db, $query);
    echo
    "
    <script> alert('Anda Berhasil Mendaftar'); </script>
    ";
}
?>

