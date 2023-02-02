<?php
include "dasboard/config.php";

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
                            <a class="nav-link" href="home">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"> Profil Desa </a>
                            <ul class="dropdown-menu dropdown-menu-primary">
                                <li><a class="dropdown-item" href="profil">Sejarah
                                        Desa</a></li>
                                <li><a class="dropdown-item" href="wilayah">Profil Wilayah
                                        Desa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="surat">E-Surat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--End Navbar-->

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3 class="modal-title ms-5">Masuk</h3>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="col px-3">
                            <form>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                    <div class="invalid-feedback">
                                        Harap isi email yang valid.
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <div class="invalid-feedback">
                                        Harap isi Password!
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <p>Belum Mempunyai Akun? <a data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                    href="">Daftar</a></p>
                        </div>
                        <div class="row">
                            <p class="mb-0">Lupa Password? <a href="">Lupa</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3 class="modal-title ms-5">Daftar</h3>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close me-2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="col px-3">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" required>
                                    <small id="emailHelp" class="form-text text-muted">Kami tidak pernah membagikan data
                                        Anda dengan
                                        siapapun.</small>
                                </div>
                                <div class="form-group pt-1">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" required>
                                </div>
                                <div class="form-group pt-1">
                                    <label for="exampleInputPassword2">Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" required>
                                </div>
                                <div class="form-check form-check-inline mt-1 mb-0">
                                    <input class="form-check-input" type="checkbox" id="termsCheckbox" required>
                                    <label class="form-check-label" for="termsCheckbox">Saya menerima <a href="">Syarat
                                            dan Ketentuan</a> yang berlaku.</label>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3" id="submitBtn">Daftar</button>
                                <div id="errorMessage" class="alert alert-danger" role="alert" style="display: none;">
                                    A simple danger alert—check it out!
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="container">
                        <div class="row">
                            <p class="mb-0">Sudah Mempunyai Akun? <a data-bs-target="#loginModal" data-bs-toggle="modal"
                                    href="">Masuk</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Login -->

    <!-- Sejarah -->
    <section id="sejarah">
        <div class="container pt-5">
            <div class="row mt-4 mb-2" data-aos="fade-right" data-aos-delay="1000">
                <div class="col">
                    <h1 class="display-5">Sejarah Desa Gembongdadi</h1>
                </div>
            </div>
            <div class="row mt-1" data-aos="fade-up" data-aos-delay="1000">
                <div class="col">
                    <p>&emsp;&emsp;&emsp;Menurut tutur cerita dari tokoh tertua masyarakat Desa Gembongdadi, berdirinya
                        Desa
                        Gembongdadi
                        diperkirakan mulai pada zaman kerajaan Mataram Hindu dan Mataram Islam.</p>
                    <p>&emsp;&emsp;&emsp;Orang yang pertama tinggal di Dusun Gembongdadi bernama Mbah Ganjur, yang
                        pertama tinggal di
                        Dusun Ladon bernama Mbah Dewana Seca, yang pertama tinggal di Dusun Cempaka bernama Mbah Cempaka
                        Walung dan yang pertama tinggal di Dusun Lodadi bernama Mbah Loka. </p>
                    <p>&emsp;&emsp;&emsp;Sedangkan nama Desa Gembongdadi berasal dari kata Gembong dan Lodadi kemudian
                        digabung menjadi
                        nama Desa Gembongdadi, adapun nama keempat d tersebut dijadikan pedusunan sendiri-sendiri yaitu:
                    </p>
                    <ul class="ms-3">
                        <li>Dusun Gembong</li>
                        <li>Dusun Ladon</li>
                        <li>Dusun Cempaka</li>
                        <li>Dusun Lodadi</li>
                    </ul>
                    <p>&emsp;&emsp;&emsp;Desa Gembongdadi, lama-kelamaan menjadi desa yang berkembang ramai. Apalagi
                        dengan adanya
                        pendatang yang ingin menetap dan ingin tinggal di desa itu. Desa Gembongdadi pantas menjadi desa
                        berkembang karena memiliki potensi alam yang baik dan memiliki saluran irigasi teknis dan
                        sungai-sungai yang melewati yaitu: Sungai Cacaban, Sungai Kaliwuri, Sungai Kawang dan Kali
                        Buangan, sehingga membuat Desa Gembongdadi menjadi subur Kesejahteraan rakyat meningkat dilihat
                        dari rumah- rumah warga yang terbuat dari tembok/beton dan telah memenuhi standar kesehatan dan
                        keindahan </p>
                    <p>&emsp;&emsp;&emsp;Tingkat pendidikan masyarakat juga semakin meningkat, kesehatan dan
                        perkembangan perkonomian
                        warga semakain dinamis Sudah wagra yang beralih profesi menjadi wiraswasta seperti berdagang
                        sembako, percetakan dan usaha jasa yang lain. Demikian sejarah Desa Gembongdadi yang dapat
                        dirangkum dari berbagai sumber yang dapat dipercaya.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sejarah -->

    <!-- Wilayah -->
    <section id="wilayah">
        <div class="container">
            <div class="row mt-3 mb-3" data-aos="fade-right" data-aos-delay="1000">
                <div class="col">
                    <h1 class="display-5">Profil Wilayah Desa Gembongdadi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 justify-content-center" data-aos="fade-right" data-aos-delay="1000">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Nama Desa</th>
                                <td>Gembongdadi</td>
                            </tr>
                            <tr>
                                <th>Kecamatan</th>
                                <td>Suradadi</td>
                            </tr>
                            <tr>
                                <th>Kabupaten</th>
                                <td>Kab. Tegal</td>
                            </tr>
                            <tr>
                                <th>Provinsi</th>
                                <td>Jawa Tengah</td>
                            </tr>
                            <tr>
                                <th>Kepadatan Penduduk</th>
                                <td>1935</td>
                            </tr>
                            <tr>
                                <th>Jumlah Penduduk</th>
                                <td>8999</td>
                            </tr>
                            <tr>
                                <th>Jumlah Pria</th>
                                <td>4392</td>
                            </tr>
                            <tr>
                                <th>Jumlah Wanita</th>
                                <td>4607</td>
                            </tr>
                            <tr>
                                <th>Jumlah Kepala Keluarga</th>
                                <td>3042</td>
                            </tr>
                            <tr>
                                <th>Topologi</th>
                                <td>Persawahan</td>
                            </tr>
                            <tr>
                                <th>Luas</th>
                                <td>465.00m<sup>2</sup></td>
                            </tr>
                            <tr>
                                <th>Kordinat</th>
                                <td>-6.944955, 109.224050</td>
                            </tr>
                            <tr>
                                <th>Ketinggian</th>
                                <td>10.00mdpl</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 justify-content-center" data-aos="fade-left" data-aos-delay="1000">
                    <div class="map-responsive">
                        <iframe <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15842.543382632375!2d109.21321166906328!3d-6.934053618991572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fc73ae97acf09%3A0xcfec267ff0c47cd9!2sGembongdadi%2C%20Kec.%20Suradadi%2C%20Kabupaten%20Tegal%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1674661809280!5m2!1sid!2sid"
                            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-delay="1000">
                    <p>&emsp;&emsp;&emsp;Menurut statistik diatas, maka desa Gembongdadi kecamatan Suradadi kabupaten
                        Tegal wilayahnya
                        cukup padat, karena memiliki kepadatan sejumlah 1935. Angka yang tidak sedikit, karena Suradadi
                        wilayah Persawahan cukup luas.</p>
                    <p>&emsp;&emsp;&emsp;Dengan total penduduk Gembongdadi sejumlah 8999 menjadi acuan ketika mendekati
                        pemilu / pemilihan
                        umum, karena desa Gembongdadi saja sudah luas apalagi kecamatan Suradadi yang luas.</p>
                    <p>&emsp;&emsp;&emsp;Ketika menilik jumlah penduduk Gembongdadi pria, ternyata jumlahnya 4392. Hal
                        ini tentu saja
                        dipengaruhi karena topologi desa Gembongdadi yang sebagian besar area Persawahan. Bagaimana
                        dengan jumlah wanita di Gembongdadi? Rupa-rupanya jumlah wanita ada 4607, selisih yang tidak
                        banyak dari jumlah pria yang ada di Profil Desa Gembongdadi, Suradadi, Kab. Tegal, Jawa Tengah,
                        Indonesia.</p>
                    <p>&emsp;&emsp;&emsp;Setelah mengetahui jumlah penduduk dengan masing-masing total wanita dan pria,
                        kemudian jumlah KK
                        (Kepala Keluarga) yang ada di Gembongdadi sejumlah 3042. Gembongdadi merupakan sebuah desa
                        dengan luas 465.00 m2 yang berada di Kecamatan Suradadi Kabupaten Tegal, desa Gembongdadi
                        memiliki potensi wisata di Tegal.</p>
                    <p>&emsp;&emsp;&emsp;Di era digital 2023 ini, Anda bisa mencari rute ke Gembongdadi dari lokasi Anda
                        melalui GPS. Atau
                        mencari arah ke Gembongdadi tercepat, bisa juga melalui google map dibawah ini. Dengan konsep
                        petunjuk arah jalan menuju Gembongdadi maupun ke Suradadi, Anda bisa sampai ditujuan dengan
                        mudah melalui jalur alternatif yang ada.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End Wilayah -->

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