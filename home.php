<?php
include "dasboard/config.php";
$datas = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda | Desa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <header>
        <nav class="navbar fixed-top navbar-dark bg-primary navbar-expand-sm" data-aos="fade-down"
            data-aos-delay="1000">
            <div class="container">
                <a class="navbar-brand" href="home">
                    <img src="assets/logo.png" alt="..." height="36">&emsp;Gembongdadi </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="home">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"> Profil Desa </a>
                            <ul class="dropdown-menu dropdown-menu-primary">
                                <li><a class="dropdown-item" href="profil">Sejarah
                                        Desa</a></li>
                                <li><a class="dropdown-item" href="404">Profil Wilayah
                                        Desa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="surat">E-Surat</a>
                        </li>
                        <li class="nav-item">
                            <a href="login" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--End Navbar-->

    <!--Running Text-->
    <div class="alert-padding">
        <div class="alert alert-primary alert-dismissible container-fluid fade show rounded-0 rounded-bottom mb-0 mt-0 pb-0 pt-1"
            role="alert" data-aos="fade-down" data-aos-delay="1000">
            <marquee onmouseover="this.stop()" onmouseout="this.start()">welcome to website desa gembongdadi kecamatan suradadi kabupaten tegal jawa tengah</marquee>
            <button type="button" class="btn-close mb-0 mt-0 pb-0 pt-3" data-bs-dismiss="alert"></button>
        </div>
    </div>
    <!--End Running Text-->

    

    <!-- Carousel -->



        </div>
    <div id="carouselExampleCaptions" class="carousel slide rounded-bottom rounded-lg" data-bs-ride="carousel"
        data-aos="fade-up" data-aos-delay="1000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/image1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/image3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- Artikel -->
    <div class="content-wrapper pt-3" data-aos="fade" data-aos-delay="1000">
        <div class="container">
            <div class="col-sm-12">
               
                            
      <!-- Begin Page Content -->
      <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> berita terbaru</h1>
                    </div>

                <?php 
                while($data = mysqli_fetch_array($datas)) {

                
                ?>
                    <div class="card mb-3">
                        <img src="dasboard/assets\<?=$data['gambar']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title text-center"><?= $data['paragraf1'] ?></h1> <br>
                            <hr>
                            <p class="card-text p-2">   &emsp;  <?= $data['paragraf2'] ?></p> <br>
                            <span class="card-text p-2">  &emsp;  <?= $data['paragraf3'] ?></span> 
                            <br>
                            <br>
                            <span class="card-text p-2">   &emsp;  <?= $data['informasi'] ?></span> 
                            <br>
                            <br>
                            <p class="card-text"><small class="text-muted">Diupdate <?= $data['tanggal'] ?>   &emsp;   ditulis oleh : <?= $data['penulis'] ?> </small></p>
                            
                        </div>
                    </div>

                <?php }?>



    <!-- End Artikel -->

    <!-- Footer -->
    <div class="container" data-aos="fade-up" data-aos-delay="500">
        <footer class="py-3 my-4 pb-0 mb-0 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-2">
                <li class="nav-item"><a href="home" class="nav-link px-2 text-muted">Beranda</a></li>
                <li class="nav-item"><a href="profil" class="nav-link px-2 text-muted">Profil Desa</a></li>
                <li class="nav-item"><a href="surat" class="nav-link px-2 text-muted">E-Surat</a></li>
                <li class="nav-item"><a href="login" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2023 </p>
        </footer>
    </div>
    <!-- End Footer -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({
            once: true,
            duration: 1000,
        });</script>
</body>

</html>
