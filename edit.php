<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit User</h2>

        <?php
        $id = $_GET["id"];

        $db = mysqli_connect('sibuhuan.iixcp.rumahweb.net', 'ptik2214_senyum', '@senyum123', 'ptik2214_senyum');

        if (!$db) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $telepon = $_POST["telepon"];

            $sql = "UPDATE pendaftar SET nama='$nama', email='$email', telepon='$telepon' WHERE id=$id";

            if (mysqli_query($db, $sql)) {
                echo '<div class="alert alert-success">User berhasil diperbarui.</div>';
            } else {
                echo '<div class="alert alert-danger">Terjadi kesalahan: ' . mysqli_error($db) . '</div>';
            }
        }

        $sql = "SELECT * FROM pendaftar WHERE id=$id";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);

        mysqli_close($db);
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="text" class="form-control" name="telepon" value="<?php echo $row['telepon']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="tambah.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
