<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>

	<title>Senyum Mengajar</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8" />
	<!-- Mobile Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
	<!-- logo -->
	<link href="image/logo.png" rel="icon" />
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="beranda.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="tentang.php">Tentang</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link mx-3" href="perpus.php">Ruang Baca</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link mx-3" href="merchandise.php">Merchandise</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn bg-primary text-white mx-3" href="loginuser.php">Log In User</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn bg-primary text-white mx-3" href="login.php">Log In Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
      <!-- Navbar -->

      <!-- Background image -->
     <!-- <div id="intro" class="bg-image vh-100 shadow-1-strong">
        <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
          <source class="h-100" src="video/video-1.mp4" type="video/mp4" />
        </video>
        <div class="mask"     style="
        background: linear-gradient(
          45deg,
          rgba(29, 236, 197, 0.7),
          rgba(91, 14, 214, 0.7) 100%
        );
      ">
         
          </div>
        </div>
      </div> -->
      <!-- Background image -->
    </header>
    <!--Main Navigation-->


    <div class="container-fluid p-5 my-2 bg-white text-center text-primary">
    <h1>REGISTRASI</h1>
    <div>

			<form method="post" action="register.php" style="width: 60%;
						color: black;
						border-color: transparent;
						background-color: transparent; ">
				<?php include('errors.php'); ?>
				<div class="input-group">
					<label>Masukkan Username</label>
					<input type="text" name="username" value="<?php echo $username; ?>">
				</div>
				<div class="input-group">
					<label>Masukkan Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group">
					<label>Masukkan Password</label>
					<input type="password" name="password_1">
				</div>
				<div class="input-group">
					<label>Masukkan Confirm password</label>
					<input type="password" name="password_2">
				</div>
        <div class="input-group">
            <button type="submit" class="btn btn-primary py-md-3 px-md-5 mt-2" name="reg_user">Registrasi</button>
        </div>
				<p>
					Already a member? <a href="loginuser.php">Sign in</a>
				</p>
			</form>
			
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