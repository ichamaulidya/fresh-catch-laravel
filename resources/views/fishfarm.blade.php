<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
<title>Fish Farm</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/fishfarm.css">
<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap"
    rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-md">
            <a class="navbar-brand" href="#">
                <img src="image/logo romusha.png" width="auto" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item ">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishMarket">Fish Market</a>
                    </li>
                </ul>
                <a href="/cart" class="bi bi-cart-dash-fill" style="margin-right: 15px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z" />
                    </svg></a>
                <a href="/login" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                        height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-ride="carousel" data-interval="3000"
        data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active slide-in">
                <img src="image/f6(2).jpg" class="d-block w-100" alt="...">
            </div>
            
        </div>
    </div>


    <div class="container mt-5">
        <h1 class="text-center fs-8 p-5">Our Location</h1>
        <div class="row justify-content-center">
            <!-- Card 1 -->
            @foreach($farm as $key => $ar)
            <div class="col-md-6 mb-4 d-flex justify-content-center">
                <a href="/fish farm/{{ $ar->id }}" style="text-decoration: none; color: inherit;">
                    <div class="card" style="">
                        <div class="row g-0">
                            <img src="assets/img/fishfarm/{{$ar->gambar}}" class="img-fluid rounded-start w-100 rounded-img"
                                    alt="gambar tambak">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$ar->nama}}</h5>
                                    <p class="card-text">{{substr($ar->deskripsi, 0, 250)}}</p>
                                    <p class="card-text">
                                        <small class="text-body-secondary me-3">
                                            <i class="fas fa-map-marker-alt me-2 fs-5 mb-2" style="color: #03c8ff;"></i> {{$ar->latitude}}
                                            <br>
                                            <i class="fas fa-user me-2 fs-5" style="color: #03c8ff;"></i>{{$ar->kontak}}

                                        </small>
                                    </p>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{$ar->link}}" class="btn btn-custom" id="b">Lihat di Maps</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </a>
            </div>
            
            @endforeach
        </div>
        
        <!-- Pagination -->
        <nav class="my-4" aria-label="Pagination">
            <ul class="pagination pagination-circle justify-content-center">
                {{-- Previous Page Link --}}
                @if ($farm->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $farm->previousPageUrl() }}" rel="prev" aria-label="Previous">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                @endif
        
                {{-- Pagination Elements --}}
                @foreach ($farm->getUrlRange(1, $farm->lastPage()) as $page => $url)
                    <li class="page-item {{ $farm->currentPage() == $page ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">
                            <span class="page-number">{{ $page }}</span>
                        </a>
                    </li>
                @endforeach
        
                {{-- Next Page Link --}}
                @if ($farm->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $farm->nextPageUrl() }}" rel="next" aria-label="Next">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
                    </li>
                @endif
            </ul>
        </nav>
        
        

        
        <!-- footer-->
        <div class="container-sm">
            <footer class="text-center text-lg-start bg-white text-muted mt-5">
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <a class="navbar-brand" href="#">
                        <img src="image/logo romusha.png" width="auto" height="40" alt="">
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
                                    Fresh Catch adalah tempat yang menyediakan informasi terkini seputar ikan konsumsi.
                                    Kami
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

        <!-- JavaScript untuk mengubah latar belakang navbar saat di-scroll -->
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