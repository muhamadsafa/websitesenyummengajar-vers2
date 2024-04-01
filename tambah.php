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
        <h3>Rekomendasi Kegiatan</h3>

        <?php
        // Koneksi ke database
        $db = mysqli_connect('sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum');

        // Mengecek koneksi
        if (!$db) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        // Fungsi untuk mendapatkan data users dari database
        function getUsers($db) {
            $sql = "SELECT * FROM pendaftar";
            $result = mysqli_query($db, $sql);

            return $result;
        }

        // Menampilkan data users dalam tabel
        $pendaftar = getUsers($db);

        if (mysqli_num_rows($pendaftar) > 0) {
            echo '<table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>';

            while ($row = mysqli_fetch_assoc($pendaftar)) {
                echo '<tr>
                    <td>' . $row['id'] . '</td>
                    <td>' . $row['nama'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['telepon'] . '</td>
                    <td>
                        <a href="edit.php?id=' . $row['id'] . '">Edit</a>
                        <a href="delete.php?id=' . $row['id'] . '">Hapus</a>
                    </td>
                </tr>';
            }

            echo '</table>';
        } else {
            echo '<p>Tidak ada data tambahan rekomendasi kegiatan.</p>';
        }

        // Menutup koneksi
        mysqli_close($db);
        ?>

        <a href="add.php" class="btn btn-primary">Tambah Kegiatan</a>
    </div>
</body>
</html>
