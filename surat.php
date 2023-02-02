
<?php
include "dasboard/config.php";

?>

<?php

    if ( isset($_POST["submit"])) {
        $nik = htmlspecialchars($_POST['nik']);
        $nama = htmlspecialchars($_POST['nama']);
        $ttgl = htmlspecialchars($_POST['ttgl']);
        $kelamin = htmlspecialchars($_POST['kelamin']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);
        $status = htmlspecialchars($_POST['status']);
        $direktori = "dasboard/assets/";
        $gambar = $_FILES['NamaFile']['name'];
        move_uploaded_file($_FILES['NamaFile']['tmp_name'], $direktori.$gambar);
        $alamat = htmlspecialchars($_POST['alamat']);
        $keterangan = htmlspecialchars($_POST['keterangan']);
        $kontak = htmlspecialchars($_POST['kontak']);
        $pesan = htmlspecialchars($_POST['pesan']);
        
        
        $query = "INSERT INTO surat VALUES ('','$nik','$nama', '$ttgl', '$kelamin','$pekerjaan','$status', '$gambar' ,'$alamat', '$keterangan', '$kontak', '$pesan')";
        if (mysqli_query($conn, $query)) {
            echo "<div class='alert alert-success text-center'> laporan berhasil dikirimkan !! </div>";
            header("refresh: 1");
            
        } else {
            echo "<div class='alert alert-danger'> laporan gagal dikirim !! </div>" .mysqli_error($conn);
            header("refresh: 2");
        }
        mysqli_close($conn);
        
        
    }
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>surat | Desa</title>
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
                            <a class="nav-link active" href="surat">E-Surat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login" >Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--End Navbar-->

    <!-- Form Surat -->
    <div class="padding-surat">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 py-5" data-aos="fade-down" data-aos-delay="1000">
                    <h1 align="center">
                        <p>Pelayanan E-Surat</p>
                    </h1>
                    <p class="lead">Silahkan lengkapi form menggunakan data yang benar</p>
                    <form id="contact-form" method="post" action="" role="form" novalidate="true" enctype="multipart/form-data">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_name">NIK *</label>
                                        <input id="form_name" type="text" name="nik" class="form-control"
                                            placeholder="Silahkan masukkan NIK dengan benar" required="required"
                                            data-error="NIK harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">NAMA *</label>
                                        <input id="form_lastname" type="text" name="nama" class="form-control"
                                            placeholder="Silahkan masukkan Nama anda" required="required"
                                            data-error="NAma Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">Tempat/TTGL *</label>
                                        <input id="form_lastname" type="text" name="ttgl" class="form-control"
                                            placeholder="Silahkan Tempat dan Tanggal Lahir" required="required"
                                            data-error="NIK Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group has-error has-danger">
                                        <label for="form_need">Jenis Kelamin *</label>
                                        <select id="form_need" name="kelamin" class="form-control"
                                            placeholder="Tentukan Kelamin Anda" required="required"
                                            data-error="Tentukan Kelamin Anda">
                                            <option value=""></option>
                                            <option value="laki-laki">laki-laki</option>
                                            <option value="perempuan">perempuan</option>
                                            <option value="Netral">Netral</option>
                                        </select>
                                        <div class="help-block with-errors">
                                            <ul class="list-unstyled">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">pekerjaan</label>
                                        <input id="form_lastname" type="text" name="pekerjaan" class="form-control"
                                            placeholder="apa pekerjaan anda saat ini" required="required"
                                            data-error=" Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">status</label>
                                        <input id="form_lastname" type="text" name="status" class="form-control"
                                            placeholder="apa status anda saat ini" required="required"
                                            data-error=" Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                    <label for="form_email">Foto KTP *</label>
                                    <input type="file" name="NamaFile" placeholder="foto" class="form-control"> 
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group">
                                        <label for="form_lastname">Alamat Sekarang</label>
                                        <input id="form_lastname" type="text" name="alamat" class="form-control"
                                            placeholder="Silahkan Tempat dan Tanggal Lahir" required="required"
                                            data-error="NIK Harus diisi!.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                            </div>
                                <div class="col-md-6" data-aos="fade-left" data-aos-delay="1000">
                                    <div class="form-group has-error has-danger">
                                        <label for="form_need">Jenis Surat *</label>
                                        <select id="form_need" name="keterangan" class="form-control"
                                            placeholder="Pilih jenis surat yang anda perlukan" required="required"
                                            data-error="Pilih jenis surat yang anda perlukan">
                                            <option value=""></option>
                                            <option value="surat pengantar skck">surat pengantar skck</option>
                                            <option value="surat keterangan domisili">surat keterangan domisili
                                            </option>
                                            <option value="surat pemberitahuan">surat pemberitahuan
                                            </option>
                                        </select>
                                        <div class="help-block with-errors">
                                            <ul class="list-unstyled">
                                                <li>Pilih jenis surat yang anda perlukan</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6" data-aos="fade-right" data-aos-delay="1000">
                                    <div class="form-group">
                                    <label for="form_email">kontak yang dapat dihubungi *</label>
                                        <input id="form_email" type="text" name="kontak" class="form-control"
                                            placeholder="Silahkan masukkan email atau nomer telepon" required="required"
                                            data-error="Format email salah.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="row">
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12" data-aos="fade-up" data-aos-delay="1000">
                                    <div class="form-group mb-3" data-aos="fade-up" data-aos-delay="1000">
                                        <label for="form_message">Pesan *</label>
                                        <textarea id="form_message" name="pesan" class="form-control"
                                            placeholder="Silahkan isi keperluan atau keterangan lainnya disini" rows="4"
                                            required="required"
                                            data-error="Silahkan isi pesan atau keterangan anda."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-success btn-send  mb-3"
                                        value="Kirim Permohonan" name="submit">
                                </div>
                                <div class="col-md-6">
                                    <input type="button" class="btn btn-primary btn-send" value="Kembali"
                                        onclick="window.history.back()">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted">
                                        <strong>*</strong> Harus diisi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.8 -->
            </div>
            <!-- /.row-->
        </div>
        <!-- /.container-->
        <!-- End Form Surat -->
    </div>
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