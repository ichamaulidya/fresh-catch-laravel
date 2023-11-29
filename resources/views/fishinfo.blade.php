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
    <link rel="stylesheet" href="style/fishinfo.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
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
                    <li class="nav-item">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item active">
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

    <!--Main layout-->

    <div class="container-sm" style="margin-top: 10rem;">
        <section class="border-bottom pb-4 mb-5">
            <div id="myCarousel" class="carousel slide" data-mdb-ride="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach($artikel as $key => $ar)
                    @if ($key < 3)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}" data-mdb-interval="10000">
                    <div class="row gx-5"> 
                        <div class="col-lg-6 mb-4">
                            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5">
                                <img src="assets/img/artikel/{{$ar->gambar}}" class="img-fluid" alt="Image 1"
                                        style="border-radius: 10px;" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                    </div>
                                </a>
                            </div>
                        </div>

                            <div class="col-lg-6 mb-4">
                                <span class="badge bg-warning px-2 py-1 shadow-1-strong mb-3">Umum</span>
                                <h4><strong>{{$ar->judul}}</strong></h4>
                                <p class="text-muted">
                                    {{substr($ar->deskripsi, 0,500)}}
                                </p>
                                <a href="/fishinfo/{{ $ar->id }}" style="text-decoration: none; color: inherit;" class="btn link-underline-info">Read More</a>
                            </div>  
                        </div>
                    </div>
                    @endif
                    @endforeach

                    

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </a>
            </div>

        </section>
    </div>
    <div class="custom-background">
        <div class="container-sm">
            <h1 class="text-center p-3 text-white">Other News</h1><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($artikel as $ar)
                    <div class="col">
                        <a href="/fishinfo/{{ $ar->id }}" style="text-decoration: none; color: inherit;">
                            <div class="card h-100 small-card" style="background: none; border: none;">
                                <img src="assets/img/artikel/{{$ar->gambar}}" class="card-img-top" alt="Hollywood Sign on The Hill" style="border-radius: 10px;" />
                                <div class="card-body" style="color: white;">
                                    <h5 class="card-title">{{$ar->judul}}</h5>
                                    <p class="card-text">
                                        {{ substr($ar->deskripsi, 0, 200) }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>            
                @endforeach
            </div>
            <!-- Pagination -->
            <nav class="my-4" aria-label="Pagination">
                <ul class="pagination pagination-circle justify-content-center">
                    @if ($artikel->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link"><i class="fas fa-angle-left"></i></span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $artikel->previousPageUrl() }}" rel="prev"><i class="fas fa-angle-left"></i></a>
                        </li>
                    @endif
            
                    @foreach ($artikel->getUrlRange(1, $artikel->lastPage()) as $page => $url)
                        <li class="page-item {{ $artikel->currentPage() == $page ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
            
                    @if ($artikel->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $artikel->nextPageUrl() }}" rel="next"><i class="fas fa-angle-right"></i></a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link"><i class="fas fa-angle-right"></i></span>
                        </li>
                    @endif
                </ul>
            </nav>
            
        </div>
    </div>


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
        // Fungsi untuk memeriksa apakah elemen berada dalam viewport
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fungsi untuk menambahkan kelas "visible" pada elemen yang terlihat dalam viewport
        function handleScroll() {
            const smallCards = document.querySelectorAll('.small-card');
            smallCards.forEach((card) => {
                if (isInViewport(card)) {
                    card.classList.add('visible');
                }
            });
        }

        // Event listener untuk memanggil fungsi handleScroll saat menggulir halaman
        window.addEventListener('scroll', handleScroll);

        // Panggil fungsi handleScroll saat halaman dimuat untuk memeriksa elemen yang terlihat awalnya
        handleScroll();

        const carousel = document.querySelector('#myCarousel');
        const items = document.querySelectorAll('.carousel-item');
        const itemCount = items.length;
        const interval = 3000;

        let currentIndex = 0;
        let isAnimating = false;

        function goToItem(index) {
            if (index < 0) {
                index = itemCount - 1;
            } else if (index >= itemCount) {
                index = 0;
            }

            if (isAnimating) return;
            isAnimating = true;

            // Gunakan GSAP untuk mengatur animasi perpindahan
            gsap.to(items[currentIndex], { opacity: 0, duration: 0.5 });
            gsap.to(items[index], {
                opacity: 1, duration: 0.5, onComplete: () => {
                    // Hentikan animasi dan hapus kelas 'active' dari elemen saat selesai
                    isAnimating = false;
                    items[currentIndex].classList.remove('active');
                    items[index].classList.add('active');
                    currentIndex = index;
                }
            });
        }

        function nextItem() {
            goToItem(currentIndex + 1);
        }

        function startCarousel() {
            // Tambahkan kelas 'active' ke item pertama saat memulai
            items[currentIndex].classList.add('active');

            // Mulai interval
            setInterval(nextItem, interval);
        }

        // Mulai carousel otomatis
        startCarousel();


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