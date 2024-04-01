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
                        <h1 class="m-0 text-primary"><span class="text-dark">Senyum</span>Mengajar</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active mx-3" href="beranda.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="tentang.php">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="volunteer.php">Volunteer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="donasi.php">Donasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="program.php">Program</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn bg-primary text-white mx-3" href="index.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar -->

    <div class="container">
        <h2>Tambah Kegiatan</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $telepon = $_POST["telepon"];

            $db = mysqli_connect('sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum');

            if (!$db) {
                die("Koneksi gagal: " . mysqli_connect_error());
            }

            $sql = "INSERT INTO pendaftar (nama, email, telepon) VALUES ('$nama', '$email', '$telepon')";

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
                <label for="nama">Nama - Kegiatan:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" class="form-control" name="telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="tambah.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
