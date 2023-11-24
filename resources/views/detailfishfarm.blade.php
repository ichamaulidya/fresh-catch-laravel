<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('image/logokecil.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/detailfishfarm.css') }}">
    <title>Fresh Catch</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/logo romusha.png') }}" width="auto" height="40" alt="" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishMarket">Fish Market</a>
                    </li>
                </ul>
                <a href="cart.html" class="bi bi-cart-dash-fill" style="margin-right: 15px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z" />
                    </svg></a>
                <a href="login.html" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                        height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
            </div>
        </div>
    </nav>

    <!--Main layout-->
    <div class="container-sm" style="margin-top: 8rem;">
        <div class="card mx-auto" style="width: 80rem;">
            <div class="card-body">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Gambar tempat -->
                            <img src="image/{{$farm->gambar}}" class="img-fluid" alt="Tempat">
                        </div>
                        <div class="col-lg-6">
                            <!-- Informasi tempat -->
                            <h2>{{$farm->nama}}</h2>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span style="margin-left: 10px;">{{$farm->alamat}}</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-phone-alt mr-2"></i>
                                <span style="margin-left: 10px;">Nomor Telepon: {{$farm->kontak}}</span>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-globe mr-2"></i>
                                <a class="text-reset fw-bold" href="https://freshcatch.com/"
                                    style="margin-left: 10px;">www.freshcatch.com</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-star mr-2"></i>
                                <span style="margin-left: 10px;">Rating: 4.5</span>
                            </div>

                            <!-- Fitur Simpan, Bagikan, dan Rute -->
                            <div class="mt-4">
                                <button class="btn btn-custom">
                                    <i class="fas fa-share-alt mr-2"></i> Bagikan
                                </button>
                            
                                <button class="btn btn-custom">
                                    <i class="fas fa-map-marked-alt mr-2"></i> Rute
                                </button>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- footer-->
    <div class="container-sm">
        <footer class="text-center text-lg-start bg-white text-muted mt-5">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('image/logo romusha.png') }}" width="auto" height="40" alt="" >
                </a>
                <div class="social-icons">
                    <a href="#" class="social-icon-link me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon-link me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon-link me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="social-icon-link me-4">
                        <i class="fab fa-instagram"></i>
                    </a>

                </div>
            </section>
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <!-- Grid column 1 -->
                        <div class="col-sm-6 col-lg-8">
                            <h6 class="text-uppercase fw-bold">Tentang Kami</h6>
                            <p>
                                Fresh Catch adalah tempat yang menyediakan informasi terkini seputar ikan konsumsi. Kami
                                juga memiliki marketplace yang memungkinkan Anda untuk menjelajahi dan bertransaksi
                                dengan
                                berbagai penjual ikan konsumsi yang terpercaya.
                            </p>
                        </div>
                        <div class="col-sm-6 col-lg-8">
                            <h6 class="text-uppercase fw-bold">Hubungi Kami</h6>
                            <p>
                                Email: info@freshcatch.com<br>
                                Telepon: +62 821 233 787 18<br>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 0.025);">
                &copy; 2023 Fresh Catch. Seluruh hak cipta dilindungi.<br>
                <a class="text-reset fw-bold" href="https://freshcatch.com/">www.freshcatch.com</a>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener("scroll", function () {
            var navbar = document.querySelector(".navbar");
            if (window.scrollY > 100) {
                navbar.classList.add("navbar-white");
            } else {
                navbar.classList.remove("navbar-white");
            }
        });
    </script>
</body>

</html>