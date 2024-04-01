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
                                <a class="nav-link mx-3" href="beranda.php">Beranda</a>
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
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->
    
    
      <div class="container">
        <h2>Tambah Order Merchandise</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $namapemesan = $_POST["namapemesan"];
            $namamerchan = $_POST["namamerchan"];
            $jumlahhargamerchan = $_POST["jumlahhargamerchan"];

            $db = mysqli_connect('sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum');

            if (!$db) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO merchandise (namapemesan, namamerchan, jumlahhargamerchan) VALUES ('$namapemesan', '$namamerchan', '$jumlahhargamerchan')";

            if (mysqli_query($db, $sql)) {
                echo '<div class="alert alert-success">User berhasil ditambahkan.</div>';
            } else {
                echo '<div class="alert alert-danger">Terjadi kesalahan: ' . mysqli_error($db) . '</div>';
            }

            mysqli_close($db);
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nama">Nama Pemesan:</label>
                <input type="text" class="form-control" name="namapemesan" required>
            </div>
            <div class="form-group">
                <label for="email">Nama Merchandise:</label>
                <input type="text" class="form-control" name="namamerchan" required>
            </div>
            <div class="form-group">
                <label for="telepon">jumlah & Total Harga Merchandise</label>
                <input type="text" class="form-control" name="jumlahhargamerchan" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="admnmerchandise.php" class="btn btn-secondary">Batal</a>
        </form>
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