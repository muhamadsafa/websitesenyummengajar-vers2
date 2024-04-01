 <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Senyum Mengajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
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
                                <a class="nav-link mx-3" href="berandaloginadmin.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="admnperpus.php">Ruang Baca Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="admninventaris.php">Inventaris Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="admnmerchandise.php">Merchandise Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-3" href="donasi.php">Donasi Admin</a>
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

    <!-- Judul Donasi -->

    <div class="container-fluid p-5 my-2 bg-white text-center text-primary">
        <h1>Data Admin Mengelola Donasi </h1>
        <img align="middle" src="image/donasi_terbaru.png" width="350" height="350" alt="">
    </div>

    <!-- Menerima Donasi -->
   

    <!-- Donasi Sekarang -->

    <div class="container-fluid p-5 my-2  bg-light text-center text-primary">
        <div class="container pt-5 pb-3">
            <div class="card mt-2">
            <div class="card-header">
                <h1>Masukkan Data Donasi</h1>
            </div>
<body>
    <form class="" action="server.php" method="post" enctype="multipart/form-data">
    <label for=""><h4>Tujuan Donasi :</h4></label> <br>
        <input type="radio" name="pilih_donasi" value="Pakaian" required> Pakaian <br>
        <input type="radio" name="pilih_donasi" value="Alat Tulis"> Alat Tulis <br>
        <input type="radio" name="pilih_donasi" value="Dana"> Dana <br>
        <br>
    <!--Nama Lengkap-->
    <label for="nama_lengkap">Nama Lengkap</label><br>
    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap..." required><br><br>
    <!--Alamat Email-->
    <label for="email">Alamat Email</label><br>
    <input type="email" id="email" name="alamat_email" placeholder="@gmail.com..."required><br><br>
    <!--No.Telp-->
    <label for="no_telp">No Telepon</label><br>
    <input type="text" name="no_telp" placeholder="089..." required><br><br>
    <!--Nominal Donasi-->
    <label for="nominal_donasi">Nominal Donasi :</label><br>
    <input type="text" name="nominal_donasi" placeholder="10.000..." required><br><br>
    <!--Ket Donasi-->
    <label for="fname"><h5 class="text-dark">Keterangan Donasi</h5></label><br>
    <textarea name="ket_donasi" rows="10" cols="30"></textarea><br>
    <!--Metode Pembayaran-->
    <label for="">Metode Pembayaran :</label><br>
      <input type="radio" name="metode_pembayaran" value="Tunai" required> Tunai <br>
      <input type="radio" name="metode_pembayaran" value="Transfer ATM"> Transfer ATM <br>
      <!--Foto Bukti Pembayaran-->
      <br><label for="files">Foto Bukti Pembayaran</label><br>
      <input type="file" id="files" name="foto_bukti_transfer"  value="submit"/><br><br>
      <br>
      <button type="submit" name="submit">Submit</button>
    </form>
</form>

</div>
</div>     
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
            <div class="col-md-5 offset-md-1 mb-3 text-light" style="text-align :right inherit;">
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
