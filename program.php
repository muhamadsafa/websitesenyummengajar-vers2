
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
                                <a class="nav-link mx-3" href="berandaloginuser.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="volunteer.php">Volunteer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-3" href="program.php">Program</a>
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


    <div class="container-fluid p-5 my-2 bg-white text-center text-primary">
        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
            PROGRAM MINGGU INI
        </h6>
        <h1>Senyum Mengajar</h1>
        <p class="p-1 my-5 text-dark">
            Senyum Mengajar memiliki program yang dapat diikuti oleh semua kalangan. Program-program tersebut sangat bermanfaat. Dengan mengikuti program tersebut anda bisa bertemu dan berkenalan dengan teman-teman dari semua kalangan dan profesi, menambah relasi
            sesama pengajar, mendapat sertifikat.
        </p>
        <?php
$db = mysqli_connect('sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum');

// Pastikan koneksi database berhasil
if (!$db) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data dari tabel pelatihan
$query = "SELECT * FROM kelas";
$result = mysqli_query($db, $query);

if ($result) {
    echo '<div style="text-align: center;">';
    $ruangan = 1; // Inisialisasi variabel ruangan
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div style="display: inline-block; margin: 10px;">';
        echo '<a href="depro.php?pelatihan=' . $row['pelatihan'] . '&ruangan=Ruang ' . $ruangan . '">';
        echo '<div style="display: inline-block; margin: 10px;">';
echo '<a href="depro.php?pelatihan=' . $row['pelatihan'] . '&mentor=' . $row['mentor'] . '&sesi=' . $row['sesi'] . '&ruangan=Ruang ' . $ruangan . '">';
echo '<button class="btn btn-primary py-md-3 px-md-5 mt-2" value="' . $row['pelatihan'] . '">' . $row['pelatihan'] . '</button>';
echo '</a>';
echo '</div>';
        echo '</a>';
        echo '</div>';
        $ruangan++; // Tambahkan nilai ruangan untuk selanjutnya
    }
    echo '</div>';
} else {
    echo "Gagal mengambil data dari database: " . mysqli_error($db);
}

// Tutup koneksi database
mysqli_close($db);
?>






    </div>

  
    <!-- button kembali -->
    <div class="container-fluid p-5 my-2 bg-white text-center text-primary">
        <a href="tambah.php" class="btn btn-success py-md-3 px-md-5 mt-2">Tambahkan Rekomendasi Kegiatan</a>
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