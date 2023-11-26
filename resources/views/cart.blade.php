<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
    <title>Fresh Catch</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/cart.css">
    <link rel="stylesheet" href="/assets/compiled/css/iconly.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
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
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fish farm">Fish Farm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fish info">Fish Info</a>
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
    <section class="h-100 gradient-custom mt-5">
        <div class="container py-5">
            <div class="row d-flex justify-content-center my-4">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Produk</h5>
                        </div>
                        <div class="card-body">
                            
                        @foreach($cart as $c )
                            <!-- Single item -->
                            <div class="row">
                                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                    <!-- Image -->
                                    <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                        @if ($c->produk)
                                            <img src="{{ asset('assets/img/produk/' . $c->produk->gambar) }}" class="w-100" alt="Blue Jeans Jacket" />
                                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                        @else
                                            {{-- Handle the case where $c->produk is null (e.g., display a placeholder image, show an error message, etc.) --}}
                                            <span>Product not found</span>
                                        @endif
                                    </div>
                                    
                                    <!-- Image -->
                                </div>

                                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                <!-- Data -->
                                @if ($c->produk)
                                <p><strong>{{ $c->produk->nama_produk }}</strong></p>
                                    <form action="{{ route('cart.delete') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id_cart" value="{{ $c->id }}">
                                        <input type="hidden" name="id_user" value="{{ $c->user_id }}">
                                        <button type="submit" class="btn btn-danger fs-sm" onclick="return confirm('Are you sure you want to remove this item from the cart?')">Remove</button>
                                    </form>
                                @else
                                    <p><strong>Product Not Available</strong></p>
                                @endif
                                    <!-- Data -->
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                <form action="{{ route('update-cart-quantity') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <!-- Quantity -->
                                    <div class="d-flex mb-4" style="max-width: 300px">
                                        <button class="btn custom-btn-quantity px-3 me-2" id="mines"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="fas fa-minus"></i>
                                        </button>

                                        <div class="form-outline text-center">
                                            <input id="quantity-input-{{$c->produk->id}}" min="1" name="quantity" value="{{$c->kuantitas}}" 
                                                type="number" class="form-control"/>
                                            <label class="form-label mt-2" for="form1">Kuantitas /KG</label>
                                            <p class="text-start text-md-center">
                                                <strong>Rp. {{$c->produk->harga * $c->kuantitas}}</strong>
                                            </p>
                                        </div>

                                        <button class="btn custom-btn-quantity px-3 ms-2" id="plus"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <hr class="my-4" />
                            @endforeach  
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Rincian Pemesanan</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <!-- <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                    Products
                                    <span>Rp. 100.000</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    Jumlah item
                                    <span>/KG</span>
                                </li> -->
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total harga</strong>
                                    </div>
                                    <span><strong>Rp. {{$total}}</strong></span>
                                </li>
                            </ul>
                            <button type="button" class="btn custom-btn-checkout btn-lg btn-block">
                                Checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                &copy; 2023 Fresh Catch. Seluruh hak cipta dilindungi.<br>
                <a class="text-reset fw-bold" href="https://freshcatch.com/">www.freshcatch.com</a>
            </div>
        </footer>
    </div>
    <!-- Bootstrap JS -->
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

    </script>
    <script>
    // Function to update quantity and subtotal via AJAX
    function updateQuantity(cartId, productId, change) {
        // Send an AJAX request to the update-cart-quantity endpoint
        $.ajax({
            url: '{{ route('update-cart-quantity') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cartId: cartId,
                productId: productId,
                quantityChange: change
            },
            success: function (response) {
                // Update the quantity input value
                $('#quantity-input-' + productId).val(response.newQuantity);
                // Update the subtotal display if needed
                // ...

                // You can also update other UI elements as needed
            },
            error: function (error) {
                console.error('Failed to update quantity:', error.responseJSON.error);
            }
        });
    }

        // Add click event listeners to the plus and minus buttons
        $(document).on('click', '.custom-btn-quantity', function () {
            // Get the associated input element
            var input = $(this).closest('.row').find('input[type=number]');

            // Check if the button has the id 'mines' or 'plus' and call the appropriate function
            if ($(this).attr('id') === 'mines') {
                input[0].stepDown();
                // Call the updateQuantity function with change=-1
                updateQuantity($(this).data('cart-id'), $(this).data('product-id'), -1);
            } else if ($(this).attr('id') === 'plus') {
                input[0].stepUp();
                // Call the updateQuantity function with change=1
                updateQuantity($(this).data('cart-id'), $(this).data('product-id'), 1);
            }
        });
    </script>

</body>

</html>