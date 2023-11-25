<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish Market</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/fishmarket.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- other HTML code -->

<script src="{{ asset('js/cart.js') }}"></script>
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
                    <li class="nav-item">
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/fish market">Fish Market</a>
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

    <!-- <div style="margin-top: 5rem;"> 
        <img src="image/f4(2).jpg" class="card-img" alt="" />
    </div>-->

    <div class="container-sm product-container">
        <h1 class="text-center" style="color: #19a7ce;">Daftar Produk</h1>
        <div class="row mt-4">
            <!-- Produk -->
            @foreach($produk as $key => $fm)
                <div class="col-md-3">
                    <div class="product-card">
                        <a href="/fishmarket/{{ $fm->id }}" style="text-decoration: none; color: inherit;">
                            <div>
                                <img src="assets/img/produk/{{ $fm->gambar }}" alt="Produk 1" class="img-fluid">
                                <h2 class="text-center">{{ $fm->nama_produk }}</h2>
                                <p class="text-center">Rp. {{ $fm->harga }}/kg</p>
                                <p class="text-center">{{ substr($fm->deskripsi, 0, 52) }}</p>    
                            </div>
                        </a>
                        <form action="{{ url('/cart/store') }}" method="POST">
                            @csrf <!-- Tambahkan token CSRF di sini -->
                            <input type="hidden" name="id_user" value="{{ session('id_user') }}">
                            <input type="hidden" name="id_produk" value="{{ $fm->id }}">
                            <input type="hidden" name="nama_produk" value="{{ $fm->nama_produk }}">
                            <input type="hidden" name="harga" value="{{$fm->harga }}">
                            <input type="hidden" name="kuantitas" value="1"> <!-- Default quantity is set to 1 -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-cart" onclick="addToCart('{{ session('id_user') }}', '{{ $fm->id }}', '{{ $fm->user_id }}')">
                                    Add to Cart
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach


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
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
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

        // Fungsi untuk menambahkan kelas "visible" pada elemen produk yang terlihat dalam viewport
        function handleScroll() {
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach((card) => {
            if (isInViewport(card)) {
                card.classList.add('visible');
            }
        });
        }

        // Event listener untuk memanggil fungsi handleScroll saat menggulir halaman
        window.addEventListener('scroll', handleScroll);
        // Panggil fungsi handleScroll saat halaman dimuat untuk memeriksa elemen yang terlihat awalnya
        handleScroll();
        // Event listener untuk menampilkan produk saat scroll
        window.addEventListener("scroll", showProductsOneByOne);

        // Panggil fungsi saat halaman dimuat
        window.addEventListener("load", showProductsOneByOne);

        function addToCart( produk_id, user_id) {
            var quantity = 1;
            var qtyInput = document.querySelector('input[name="kuantitas"]');
            qtyInput.value = quantity;
    }
    

    </script>
</body>

</html>