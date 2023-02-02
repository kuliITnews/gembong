<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>gembong dadi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--Navbar-->
    <header>
        <nav class="navbar navbar-dark bg-primary navbar-expand-sm">
            <div class="container">
                <a class="navbar-brand" href="home">
                    <img src="assets/logo.png" alt="..." height="36"> Gembongdadi </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--End Navbar-->

    <!--Running Text-->
    <div class=" alert alert-primary alert-dismissible container-fluid fade show rounded-0 rounded-bottom mb-0 mt-0
                                pb-0 pt-1" role="alert">
        <marquee onmouseover="this.stop()" onmouseout="this.start()">selamat datang digemboang dadi kecamatan suradadi. </marquee>
        <button type="button" class="btn-close mb-0 mt-0 pb-0 pt-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!--End Running Text-->

    <!-- Modal Login -->
    <h2 class="text-center mt-5">login terlebih dahulu</h2>
                <div class="modal-body  mt-5 m-auto" style="width: 380px;">
                    <div class="container">
                        <div class="col px-3">
                            <form method="post">
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
                                <button type="submit" class="btn btn-primary mt-3" name="submit">Masuk</button>
                               <a href="home"><button type="button" class="btn btn-info mt-3">back</button> </a> 
                            </form>
                        </div>
                    </div>
                </div>
    <!-- End Modal Login -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- Script Daftar -->
    <?php

     if(isset($_POST["submit"])) {
        $email = htmlspecialchars($_POST["email"]);
        $pwd = htmlspecialchars($_POST["password"]);

        if($email == "admin@gmail.com" && $pwd == "admin") {
            echo '<script> alert("login berhasil");</script>';
            echo '<script> document.location.href = "dasboard/dasboard";</script>';
        } else {
            echo "<div class='alert alert-success text-center mt-5'> login gagal !! </div>";
            header("refresh: 2");
        }
     }
    ?>
</body>

</html>