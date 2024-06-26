<?php
require 'server.php';

if(isset($_POST["btn_v1"])){
  $nama_lengkap = $_POST["nama_1"];
  $usia = $_POST["usia_1"];
  $alamat = $_POST["alamat_1"];
  $email = $_POST["email_1"];
  $no_telpon = $_POST["notlp_1"];
  $pilih_bidang = $_POST["pilihan_1"];
 

  $query = "INSERT INTO volunteer_1 VALUES('', '$nama_lengkap', '$usia', '$alamat', '$email', '$no_telpon', '$pilih_bidang')";
  mysqli_query($db,$query);
  echo

  "
  <script> alert('Data Inserted Successfully'); </script>
  ";
}
?>

<!doctype html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Senyum Mengajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- logo -->
    <link href="image/logo.png" rel="icon">
	<link href="Asset/img/logoisb.png" rel="icon">
</head>

<body>
  <!-- Bagian Topbar Start -->
 <div class="container-fluid bg-primary pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class=" text-center text-light">
                    <p>&copy; Senyum Mengajar | 2023</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian Topbar End -->

    <!-- Navbar-->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-2 px-lg-2" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow rounded">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
          <img class="logo" src="Asset/img/logoisb.png" alt="logo" style="height: 80px" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="berandaloginuser.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-3" href="volunteer.php">Volunteer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="program.php">Program</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link mx-3" href="beranda.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->


    <!-- Program-->
    <div class="container-fluid p-1">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">KEGIATAN VOLUNTEER</h6>
            </div>
            <div class="coloum">
                <div class="text-center">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <a class="destination-overlay text-dark text-decoration-none" href="">
                            <h5 class="text-dark">Volunteer Live in 3j</h5>
                            <span>Mari berkontribusi terhadap pengajaran dan pendidikan anak-anak dipelosok desa yang memiliki akses terbatas, tertinggal, dan kelas jauh. Kegiatan Pembelajaran berisi kegiatan yang fun, pemberian materi yang relevan, dan sebagainya. Mari terus berkontribusi bagi pendidikan di Indonesia</span>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail-->
    <div class="container-fluid py-3 border-top">
        <div class="row">
            <div class="col-md-6">
                <h5 class="bg-primary text-light rounded"> JADWAL KEGIATAN</h5>
                <p class="text-dark"> 10-16 Juli 2023 Pengabdian 1</p>
                <p class="text-dark"> 21-26 Juli 2023 Pengabdian 2</p>
                <p class="text-dark"> 01-26 Agustus 2023 Pengabdian 3</p>
                <h5 class="bg-primary text-light rounded"> DETAIL AKTIVITAS</h5>
                <li class="nav-item mb-2"><a>Penggajaran</a></li>
                <li class="nav-item mb-2"><a>Pemberian materi materi tentang kebinekaan</a></li>
                <li class="nav-item mb-2"><a>Fun Games</a></li>

            </div>
            <div class="col-md-6">
                <h5 class="bg-primary text-light rounded"> BIDANG PENGABDIAN</h5>
                <li class="nav-item mb-2"><a>Sosial kegiatan</a></li>
                <li class="nav-item mb-2"><a>Kesehatan</a></li>
                <li class="nav-item mb-2"><a>Ekonomi Kreatif</a></li>
                <li class="nav-item mb-2"><a>Pendidikan Budaya</a></li>
                <li class="nav-item mb-2"><a>Media Informasi</a></li>
            </div>
        </div>
    </div>

    <!-- Pendaftaran -->
    <div class="container-fluid py-3 border-top">
        <div class="row">
            <div class="col-sm-6 bg-light">
                <h5 class="text-light bg-primary rounded"> PENDAFTARAN </h5>
                <p>Silahkan isi form dibawah ini:</p>
                <form class="" action="" method="post" autocomplete="off">
                    <div class="form-group col-md-6">
                        <label for="usr">Nama Lengkap:</label>
                        <input type="text" class="form-control" name="nama_1" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="usia">Usia:</label>
                        <input type="text" class="form-control" name="usia_1" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" name="alamat_1" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email_1" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="notelp">No.Telepon:</label>
                        <input type="text" class="form-control" name="notlp_1" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sel1">Pilih Bidang Pengabdian:</label>
                  <select class="form-control" name="pilihan_1" required>
                    <option select hidden>Pilih Bidang</option>
                    <option>Sosial Kegiatan</option>
                    <option>Kesehatan</option>
                    <option>Ekonomi Kreatif</option>
                    <option>Pendidikan Budaya</option>
                    <option>Media Informasi</option>
                  </select>
                    </div>

                    <button class="btn btn-primary mt-2 mb-2" type="submit" name="btn_v1">Submit</button>
                </form>
            </div>
            <div class="col-sm-6 bg-default">
                <h5 class="text-light bg-primary rounded">PEMBAYARAN</h5>
                <p class="text-dark"> Rp.850.000/Orang</p>
                <p class="text-dark"> No. Rek Bank Mandiri Senyum Mengajar</p>

                <P class="text-dark"> *Jumlah diatas sudah termasuk:
                    <li class="nav-item mb-2"><a>Sertifikat</a></li>
                    <li class="nav-item mb-2"><a>Konsumsi</a></li>
                    <li class="nav-item mb-2"><a>Bingkisan</a></li>
                </P>
            </div>
        </div>
    </div>

    <!-- Catatan -->
    <div class="container-fluid">
        <h6 class="text-dark text-uppercase" style="letter-spacing: 8px;">CATATAN</h6>
        <li class="nav-item mb-2"><a>Harap mengkonfirmasi pembayaran pendaftaran melalui cp yang tersedia di website ini</a></li>
        <li class="nav-item mb-2"><a>Setelah berhasil pendaftaran terkonfirmasi, peserta akan di masukkan kedalam grup chat khusus di WhatsApp</a></li>
        <li class="nav-item mb-2"><a>Informasi lebih lanjut akan disampaikan melalui WhatsApp</a></li>
    </div>
    </div>
    </div>

    <!-- button kembali -->
    <div class="container-fluid p-5 my-2 bg-white text-center text-primary">
        <a href="volunteer.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Kembali</a>
    </div>

 
  
    <!-- Footer -->
    <div class="container-fluid py-3 border-top bg-primary">
        <div class="row">
            <div class="col-6 col-md-2 mb-3 text-light">
                <h5>Senyum Mengajar</h5>
                <ul class="nav flex-column text-light">
                    <li class="nav-item mb-2 text-light"><a href="tentang.php" class="nav-link p-0  text-light">Tentang</a></li>
                    <li class="nav-item mb-2 text-light"><a href="donasi.php" class="nav-link p-0  text-light">Donasi</a></li>
                    <li class="nav-item mb-2 text-light"><a href="volunteer.php" class="nav-link p-0  text-light">Volunteer</a></li>
                    <li class="nav-item mb-2 text-light"><a href="program.php" class="nav-link p-0  text-light">Program</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3 text-light">
                <h5>Tentang Kami</h5>
                <ul class="nav flex-column text-light">
                    <li class="nav-item mb-2"><a>Senyum Mengajar</a></li>
                    <li class="nav-item mb-2"><a>Bergerak Untuk Pendidikan Indonesia</a></li>
                    <li class="nav-item mb-2"><a>Jl. Ketintang No. 7, Surabaya</a></li>
                    <li class="nav-item mb-2"><a>Jawa Timur</a></li>
                    <li class="nav-item mb-2"><a>Indonesia</a></li>
                </ul>
            </div>
            <div class="col-md-5 offset-md-1 mb-3 text-light" style="text-align:right inherit;">
                <h5>Kirimkan Pertanyaan Kamu</h5>
                <p class="text-light">Dapatkan informasi yang ingin kamu tanyakan dengan hubungi Sosial Media Kami.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <button class="btn btn-success" type="button">WhatsApp</button>
                    <button class="btn btn-danger" type="button">Instagram</button>
                </div>

            </div>
        </div>
        <div class=" text-center border-top text-light">
            <p>&copy; Senyum Mengajar | 2023</p>
        </div>

    </div>
    <!--Footer-->
</body>
</html>