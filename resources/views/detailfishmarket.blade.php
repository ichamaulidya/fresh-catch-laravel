<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Kustom -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('style/produkdetail.css') }}">
    <link rel="shortcut icon" href="{{ asset('image/logokecil.png') }}" type="image/x-icon">
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
                    <li class="nav-item">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item active">
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

    <!--Main Konten-->
    <div class="container product-detail-container mb-5 mt-8">
        <!-- Detail Produk -->
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/produk/' . $market->gambar) }}" alt="Produk 1" class="img-fluid product-detail-image w-100">
            </div>
            
            <div class="col-md-6">
                <h2 class="mb-1">{{$market -> nama_produk}}</h2>
                <div class="mb-3">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rating">
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9733;</span>
                            <span class="star">&#9734;</span>
                        </div>
                    </div>
                    <p class="average-rating">14 ulasan</p>
                </div>

                <p class="mb-3">{{$market -> deskripsi}}</p>

                <p class="mb-3 product-price">Rp. {{$market -> harga}}</p>


                <div class="mb-3">
                    <form action="{{ route('checkout') }}" method="POST">
                        @csrf <!-- Add CSRF token here -->
                        <input type="hidden" name="id_user" value="{{ session('id_user') }}">
                        <input type="hidden" name="id_produk" value="{{ $market->id }}">
                        <input type="hidden" name="nama_produk" value="{{ $market->nama_produk }}">
                        <input type="hidden" name="harga" value="{{ $market->harga }}">
                        <input type="hidden" name="kuantitas" id="quantityInput" value="1"><!-- Default quantity is set to 1 -->
                        <label for="quantity">Kuantitas:</label>
                        <div class="d-flex">
                            <div class="input-group-prepend">
                                <button class="btn btn-cart me-2" type="button" id="minus-btn">-</button>
                            </div>
                            <input type="number" id="quantity" name="quantity" class="form-control quantity-input" value="1" min="1">
                            <div class="input-group-append">
                                <button class="btn btn-cart ms-2" type="button" id="plus-btn">+</button>
                            </div>
                        </div>
                        <div class="text-left mt-4">
                            <button class="btn btn-cart" id="buy-now-btn">
                                <i class="fas fa-shopping-cart" style="font-size: 1rem;"></i> Buy Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Rekomendasi produk lainnya-->
    <div class="container-sm product-container">
        <h1 class="text-left" style="color: #19a7ce; margin-top: 4rem; font: optional; font-size: 2rem;">Produk Lainnya
        </h1>
    <div class="row mt-4">
        <div class="row d-flex">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5">
                @foreach($produk as $key => $mf)
                    <div class="col-md-4 col-lg-3">
                        <div class="card product-card">
                            <a href="/fishmarket/{{ $mf->id }}" style="text-decoration: none; color: inherit;">
                                <img src="{{ asset('assets/img/produk/' . $mf->gambar) }}" alt="Produk" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $mf->nama_produk }}</h5>
                                    <p class="card-text">{{ $mf->harga }}</p>
                                    <p class="card-text">{{ substr($mf->deskripsi, 0, 50) }}</p>
                                </div>
                            </a>
                            <form action="{{ url('/cart/store') }}" method="POST">
                                @csrf <!-- Add CSRF token here -->
                                <input type="hidden" name="id_user" value="{{ session('id_user') }}">
                                <input type="hidden" name="id_produk" value="{{ $mf->id }}">
                                <input type="hidden" name="nama_produk" value="{{ $mf->nama_produk }}">
                                <input type="hidden" name="harga" value="{{ $mf->harga }}">
                                <input type="hidden" name="kuantitas" value="1">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-cart" onclick="addToCart('{{ session('id_user') }}', '{{ $mf->id }}', '{{ $mf->user_id }}')">
                                        Add to Cart
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            
            
            
            
            {{-- @foreach($produk as $key => $mf)
            <div class="col-md-2">
                <div class="product-card">
                    <a href="/fishmarket/{{ $mf->gambar }}" style="text-decoration: none; color: inherit;">
                        <div>
                            <img src="{{ asset('assets/img/produk/' . $mf->gambar) }}" alt="Produk 1" class="img-fluid product-detail-image w-100">
                            <h2>{{ $mf->nama_produk }}</h2>
                            <p>{{ $mf->harga }}</p>
                            <p>{{ substr($mf->deskripsi, 0, 50) }}</p>
                        </div>
                    </a>
                    <button class="btn btn-cart">Add To Cart</button>
                </div>
            </div> 
            @endforeach--}}
            
        </div>

    <!--footer-->
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
                                Fresh Catch adalah tempat yang menyediakan informasi terkini seputar ikan
                                konsumsi. Kami
                                juga memiliki marketplace yang memungkinkan Anda untuk menjelajahi dan
                                bertransaksi
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



    <!-- Bootstrap JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var quantityInput = document.getElementById("quantity");
        var quantityHiddenInput = document.getElementById("quantityInput");
        var minusBtn = document.getElementById("minus-btn");
        var plusBtn = document.getElementById("plus-btn");

        // Set the initial value for hidden input
        quantityHiddenInput.value = quantityInput.value;

        minusBtn.addEventListener("click", function () {
            var currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                updateHiddenInput();
            }
        });

        plusBtn.addEventListener("click", function () {
            var currentQuantity = parseInt(quantityInput.value);
            quantityInput.value = currentQuantity + 1;
            updateHiddenInput();
        });

        quantityInput.addEventListener("change", function () {
            updateHiddenInput();
        });

        function updateHiddenInput() {
            quantityHiddenInput.value = quantityInput.value;
        }
    });
    </script>
</body>

</html>