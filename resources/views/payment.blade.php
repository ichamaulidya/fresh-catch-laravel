<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo romusha.png" type="image/x-icon">
    <title>Payment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .address,
        .shipping,
        .payment,
        .summary {
            background-color: #E9E9E9;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .table-cus th,
        .table-cus td {
            background-color: #E9E9E9;
        }

        .table-cus thead th {
            background-color: #E9E9E9;
            color: #fff;
        }

        svg {
            fill: #33bbc5;
        }

        .row-cus {
            border-radius: 5px;
            background-color: #F7FAFC;
        }

        .btn-custom {
            background-color: #19A7CE;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #33bbc5;
            color: #fff;
        }

        .btn-cus {
            background-color: #727272;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-cus:hover {
            background-color: #606060;
            color: #fff;
        }
    </style>
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
                        <a class="nav-link" href="/fishInfo">Fish Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/fishMarket">Fish Market</a>
                    </li>
                </ul>
                <a href="/cart" class="bi bi-cart-dash-fill active" style="margin-right: 15px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z" />
                    </svg></a>
                    @if(!empty(session('user')))
                    <a href="/profil" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                    height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
                    @else    
                    <a href="/login" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                    height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg></a>
                    @endif
                        
            </div>
        </div>
    </nav>

    <section class="h-100">
        <div class="container">
            <div class="row row-cus mt-5 p-3">
                <div class="col-md-6">
                    <h3>Delivery Address</h3>
                    <div class="address mb-3 mt-3">
                        <div class="d-flex align-items-start jus mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-pin-map-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                                <path fill-rule="evenodd"
                                    d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                            </svg>
                            <div class="ms-3">
                                <p>
                                    123 Main St<br>
                                    Anytown, USA 12345
                                </p>
                            </div>
                        </div>
                    </div>

                    <h3>Shipping Options</h3>
                    <div class="mt-3 mb-3">
                        <div class="row mt-2">
                            <div class="col-12 col-md-6">
                                <div class="shipping">
                                    <div class="d-flex align-items-center">
                                        <img src="image/gojek-logo.png" class="me-3" width="70">
                                        <div>
                                            <h5 class="mb-1">Gojek</h5>
                                            <p class="mb-1">Delivery in 1-2 days</p>
                                            <p class="text-success fw-bold mb-0">$4.99</p>
                                        </div>
                                        <div class="ms-auto mt-2 mt-md-0">
                                            <input class="form-check-input" type="radio" name="shipping" id="gojek">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="shipping">
                                    <div class="d-flex align-items-center">
                                        <img src="image/grab-logo.png" class="me-3" width="70">
                                        <div>
                                            <h5 class="mb-1">Grab</h5>
                                            <p class="mb-1">Express next day</p>
                                            <p class="text-success fw-bold mb-0">$9.99</p>
                                        </div>
                                        <div class="ms-auto mt-2 mt-md-0">
                                            <input class="form-check-input" type="radio" name="shipping" id="grab">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h3>Payment Details</h3>
                    <div class="mt-3 mb-3">
                        <div class="row mt-2">
                            <div class="col-12 col-md-6">
                                <div class="shipping">
                                    <div class="d-flex align-items-center">
                                        <img src="image/bni.png" class="me-3" width="70">
                                        <div>
                                            <h5>BNI</h5>
                                            <p>1826342789</p>
                                        </div>
                                        <div class="ms-auto mt-2 mt-md-0">
                                            <input class="form-check-input" type="radio" name="shipping" id="gojek">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="shipping">
                                    <div class="d-flex align-items-center">
                                        <img src="image/bca.jpeg" class="me-3" width="70">
                                        <div>
                                            <h5>Grab</h5>
                                            <p>2835183528</p>
                                        </div>
                                        <div class="ms-auto mt-2 mt-md-0">
                                            <input class="form-check-input" type="radio" name="shipping" id="grab">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h3>Order Summary</h3>
                    <div class="summary mt-3">
                        <table class="table table-custom">

                            <thead class="table-cus">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>

                            <tbody class="table-cus">

                                <tr>
                                    <td><img src="product1.jpg"></td>
                                    <td>Product 1</td>
                                    <td>$10</td>
                                    <td>2</td>
                                    <td>$20</td>
                                </tr>

                                <tr>
                                    <td><img src="product2.jpg"></td>
                                    <td>Product 2</td>
                                    <td>$15</td>
                                    <td>1</td>
                                    <td>$15</td>
                                </tr>

                            </tbody>

                            <tfoot class="table-cus">
                                <tr>
                                    <td colspan="4" class="text-right">Subtotal</td>
                                    <td>$35</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right">Shipping</td>
                                    <td>$5</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-right"><b>Total</b></td>
                                    <td><b>$40</b></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-9">
                        <a href="cart.html">
                            <button class="btn btn-cus">Cancel Order</button></a>
                        <a href="uploadbukti.html">
                            <button class="btn btn-custom">Complete Order</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function saveChanges() {
            document.getElementById('editProfileForm').addEventListener('submit', function (e) {
                e.preventDefault();

                // Your code to handle form submission goes here

                // Close the modal after form submission (assuming the form is valid)
                $('#editProfileModal').modal('hide');
            });

            // JavaScript untuk mengubah latar belakang navbar saat di-scroll
            window.addEventListener("scroll", function () {
                var navbar = document.querySelector(".navbar");
                if (window.scrollY > 100) {
                    navbar.classList.add("navbar-white");
                } else {
                    navbar.classList.remove("navbar-white");
                }
            });
            // Add your custom logic for handling form submission and updating images
            // For example, you can use JavaScript to send the form data to the server
            console.log('Changes saved!');
        }
    </script>
</body>

</html>