<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
    <title>Fresh Catch</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/beranda.css">
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
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishMarket">Fish Market</a>
                    </li>
                </ul>
                <div  style="display: grid; grid-template-columns: repeat(3, auto); gap: 15px;">
                    <a href="/cart" class="bi bi-cart-dash-fill" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-bag-heart-fill" viewBox="0 0 16 16">
                            <path d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                        </svg>
                    </a>

                    @if(!empty(session('user')))
                        <a href="/profil" class="bi bi-person-fill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </a>
                    @else    
                        <a href="/login" class="bi bi-person-fill">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            </svg>
                        </a>
                    @endif
                </div>
                        
            </div>
        </div>
    </nav>

        

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/1.jpg" class="d-block w-100 img-fluid" alt="Modern Interior Design Studio - First Slide">
                <div class="carousel-caption">
                    <div class="intro-excerpt text-warning text-start font-weight-bold d-flex align-items-center justify-content-start" style="height: 80vh;">
                        <h1 id="responsiveText" class="mt-sm-5" style="font-size: 5rem;">Fresh Fish <br> From <br> FreshCatch</h1>
                    </div>
                </div>                
            </div>    

            <div class="carousel-item">
                <img src="image/jonny-kennaugh-eeGA2mDTfks-unsplash.jpg" class="d-block w-100 img-fluid" alt="Modern Interior Design Studio - Third Slide" />
                <div class="carousel-caption">
                    <div class="intro-excerpt text-warning text-start font-weight-bold d-flex align-items-center justify-content-start" style="height: 80vh;">
                        <h1 class="mt-sm-5" style="font-size: 5rem">Fresh Fish <br> From <br> FreshCatch</h1>
                    </div>
                </div>     
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>


    


    <br><br>
    <div class="container-sm product-container">
        <h1 class="text-center p-5"><b> Apa saja fitur FreshCatch? </b></h1>
        <p class="text-center fs-6" style="margin-top: -2%; color: gray;">FreshCatch merupakan layanan website berisi
            informasi dan marketplace <br> ikan konsumsi yang berbasis teknologi</p> <br>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <div class="col text-center">
                    <a href="/fishInfo" style="text-decoration: none; color: inherit;">
                        <div class="card w-75 mx-auto" style="border: none; background: aliceblue; border-radius: 10px;">
                            <img src="image/info.png" class="card-img-top" alt="...">
                        </div>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="/fish farm" style="text-decoration: none; color: inherit;">
                        <div class="card w-75 mx-auto" style="border: none; background: aliceblue; border-radius: 10px;">
                            <img src="image/farm.png" class="card-img-top" alt="...">
                        </div>
                    </a>
                </div>
                <div class="col text-center">
                    <a href="/fish Market" style="text-decoration: none; color: inherit;">
                        <div class="card w-75 mx-auto" style="border: none; background: aliceblue; border-radius: 10px;">
                            <img src="image/market.png" class="card-img-top" alt="...">
                        </div>
                    </a>
                </div>
            </div>
            
            
    </div>
    <br><br><br>

    <div class="custom-background">
        <div class="container-sm">
            <h1 class="text-center p-3 text-white">Berita</h1> <br>
            <div class="row row-cols-1 row-cols-md-3">
                @foreach($artikel->take(3) as $ar)
                <div class="col">
                    <a href="/fishinfo/{{ $ar->id }}" style="text-decoration: none; color: inherit;">
                        <div class="card h-100 small-card" style="background: none; border: none;">
                            <img src="assets/img/artikel/{{$ar->gambar}}" class="card-img-top" alt="Hollywood Sign on The Hill"
                                style="border-radius: 10px;" />
                            <div class="card-body" style="color: white;">
                                <h5 class="card-title">{{$ar->judul}}</h5>
                                <p class="card-text">{{substr($ar->deskripsi, 0, 250)}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
      


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
    <br><br>
    {{-- <!-- Open Modal Button -->
    <button id="open-modal-btn">
        <img src="image/bot.png" class="w-50" alt="">
    </button>

    <!-- Modal Container -->
    <div id="modal-container">
        <div id="modal-header">
            <span id="modal-close">&times;</span>
            <h2>Modal Title</h2>
        </div>
        <div id="modal-content">
            <div id="recycler_view"></div>
            <form id="chat-form" onsubmit="return sendMessage();">
                <input type="text" name="question" id="message_edit_text" />
                <button type="submit">Send</button>
            </form>
        </div>
    </div> --}}
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>
    <script src="bot.js"></script>
    <script>
        // JavaScript untuk mengubah latar belakang navbar saat di-scroll
        window.addEventListener("scroll", function () {
            var navbar = document.querySelector(".navbar");
            if (window.scrollY > 100) {
                navbar.classList.add("navbar-white");
            } else {
                navbar.classList.remove("navbar-white");
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
        const smallCards = document.querySelectorAll('.custom-background .small-card');

        function checkIfInView() {
            smallCards.forEach(card => {
                const rect = card.getBoundingClientRect();
                const isInView = (rect.top >= 0 && rect.bottom <= window.innerHeight);
                if (isInView) {
                    card.classList.add('card-entered');
                }
            });
        }

        window.addEventListener('scroll', checkIfInView);
        checkIfInView(); // Check on page load
    });


    </script>
</body>

</html>