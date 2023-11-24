<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo romusha.png" type="image/x-icon">
    <title>Upload Payment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .upload {

            background-color: #E9E9E9;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 5px;
        }

        .shipping {
            background-color: #E9E9E9;
            padding: 10px;
            border-radius: 5px;
        }

        .payment {
            background-color: #E9E9E9;
            padding-left: 10px;
            padding-right: 10px;

            border-radius: 5px;
        }

        .summary {
            background-color: #E9E9E9;

            padding: 10px;
            border-radius: 5px;
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

        .drop-area {
            border: 2px dashed #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        /* Style untuk highlight saat drag over */
        .drop-area.dragover {
            background-color: #f0f8ff;
            /* Ganti dengan warna yang diinginkan */
        }

        /* Style untuk gambar SVG ikon upload */
        .upload-icon {
            width: 50px;
            height: 50px;
            fill: #333;
            /* Ganti dengan warna yang diinginkan */
            margin-bottom: 10px;
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
                    <h3>Upload Payment Confirmation</h3>
                    <div class="upload mb-3 mt-3 drop-area" id="dropArea">
                        <div class="mt-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z" />
                                <path
                                    d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                            </svg>
                        </div>
                        <div class="mb-5">
                            <label for="UploadPayment" class="text-black p-1">Drag and drop or click to upload</label>
                            <input type="file" class="form-control" id="UploadPayment" accept="image/*"
                                style="display: none;">
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
                <div class="row mt-3">
                    <div class="col-md-6 offset-md-9">
                        <a href="cart.html">
                            <button class="btn btn-cus">Cancel Order</button></a>
                        <a href="">
                            <button class="btn btn-custom">Complete Order</button></a>
                    </div>
                </div>

            </div>



        </div>
    </section>
    <!-- Bootstrap JavaScript -->

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


        const dropArea = document.getElementById('dropArea');
        const uploadInput = document.getElementById('UploadPayment');

        // Menangani event dragover
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('dragover');
        });

        // Menangani event dragleave
        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('dragover');
        });

        // Menangani event drop
        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            dropArea.classList.remove('dragover');

            const files = e.dataTransfer.files;
            if (files.length > 0) {
                uploadInput.files = files;
                // Tambahkan logika pengelolaan file di sini (misalnya, tampilkan nama file)
                console.log(files[0].name);
            }
        });

        // Menangani event click pada area drop untuk membuka dialog file
        dropArea.addEventListener('click', () => {
            uploadInput.click();
        });

        // Menangani event ketika file dipilih melalui dialog file
        uploadInput.addEventListener('change', () => {
            // Tambahkan logika pengelolaan file di sini (misalnya, tampilkan nama file)
            console.log(uploadInput.files[0].name);
        });

    </script>
</body>

</html>