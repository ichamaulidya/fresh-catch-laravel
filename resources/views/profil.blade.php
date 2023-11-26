<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo romusha.png" type="image/x-icon">
    <title>Fresh Catch/ profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .col {
            transition: background-color 0.3s ease;
            border-radius: 10px;
        }

        .col:hover {
            background-color: #e8e8e8;
        }

        .col a {
            text-decoration: none;
            color: #000;
        }

        .col a:hover {
            color: #33bbc5;
        }

        .col svg {
            fill: #33bbc5;
            margin-right: 10px;
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
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-md">
            @if(!empty(session('user')))
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
                <a href="/cart" class="bi bi-cart-dash-fill" style="margin-right: 15px;"><svg
                        xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                        <path
                            d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z" />
                    </svg></a>
                    <a href="/logout" class="bi bi-person-fill"><svg xmlns="http://www.w3.org/2000/svg" width="25"
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
        <div class="container-fluid">
            @if(!empty(session('user')))
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="text-white d-flex flex-row"
                    style="background-image: url('image/f6.jpg'); background-size: cover; height: 260px;">
                    <div class="ms-5 d-flex flex-column" style="width: 150px; margin-top: 3rem;">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                            alt="Generic placeholder image" class="img-fluid img-thumbnail mb-2"
                            style="width: 150px; border-radius: 50%; margin-top: 8rem; z-index: 1">
                        <h4 class="text-center" data-mdb-ripple-color="dark"
                            style="z-index: 1; cursor: pointer; color: black;">
                            {{-- <span>{{ auth()->user()->nama }}</span> --}}
                            {{ (session('user')->nama) }}
                        </h4>
                    </div>
                </div>
                <div class="container card-body p-5 text-black">
                    <div class="mb-5" style="margin-top: 5rem;">
                        <div class="container border bg-body rounded-4 shadow-sm p-4 mt-4">
                            <div class="row flex-column">
                                <a href="#" class="text-decoration-none text-black edit" data-bs-toggle="modal" data-bs-target="#editProfileModal" data-id="{{ session('user')->_id }}">
                                    <div class="col p-2 fs-5 d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#33bbc5" class="bi bi-person-circle"
                                            viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                        </svg>
                                        <span class="ms-4">Edit Profile</span>
                                    </div>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Form for Profile Editing -->
                                                    <form id="editProfileForm">
                                                        <input type="hidden" id="userId" name="userId"> <!-- Hidden input for user ID -->
                                                        <div class="col p-2 fs-5">
                                                            <div class="form-group">
                                                                <label for="email">Email:</label>
                                                                <input type="email" class="form-control" id="email" name="email" required>
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col p-2 fs-5">
                                                            <div class="form-group">
                                                                <label for="nama">Username:</label>
                                                                <input type="text" class="form-control" id="nama" name="nama" required>
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col p-2 fs-5">
                                                            <div class="form-group">
                                                                <label for="notlp">No Telephone:</label>
                                                                <input type="tel" class="form-control" id="notlp" name="notlp" required>
                                                            </div>
                                                        </div>
                                    
                                                        <div class="col p-2 fs-5">
                                                            <div class="form-group">
                                                                <label for="password">Password:</label>
                                                                <input type="password" class="form-control" id="password" name="password" required>
                                                            </div>
                                                        </div>
                                    
                                                        <div class="form-group">
                                                            <label for="profilePicture" class="text-black p-1 ">Profile
                                                                Picture</label>
                                                            <input type="file" class="form-control" id="profilePicture" accept="image/*">
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="backgroundImage" class="text-black p-1">Background
                                                                Image</label>
                                                            <input type="file" class="form-control" id="backgroundImage" accept="image/*">
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn-custom">Save Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#" class="text-decoration-none text-black" data-bs-toggle="modal" data-bs-target="#changeAddressModal">
                                    <div class="col p-2 fs-5 d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#33bbc5" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                        </svg>
                                        <span class="ms-4">Change Address</span>
                                    </div>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="changeAddressModal" tabindex="-1" aria-labelledby="changeAddressModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="changeAddressModalLabel">Change Address</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="changeAddressForm">
                                                    <div class="col p-2 fs-5">
                                                        <div class="form-group">
                                                            <label for="name">name:</label>
                                                            <input type="name" class="form-control" id="name" name="name" required>
                                                        </div>
                                                    </div>
                
                                                    <div class="col p-2 fs-5">
                                                        <div class="form-group">
                                                            <label for="phone">No Telephone:</label>
                                                            <input type="tel" class="form-control" id="phone" name="phone" required>
                                                        </div>
                                                    </div>
                
                                                    <div class="col p-2 fs-5">
                                                        <div class="form-group">
                                                            <label for="Description">Address:</label>
                                                            <textarea class="form-control" id="Description" name="Description" rows="3" required></textarea>
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="text-center">
                                                        <button type="submit" class="btn-custom">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <a href="#" class="text-decoration-none text-black">
                                    <div class="col  p-2 fs-5 d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#33bbc5"
                                            class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z" />
                                            <path fill-rule="evenodd"
                                                d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                        </svg>
                                        <span class="ms-4">Log Out</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

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
        
        $(document).ready(function() {
        $('.edit').click(function() {
            var id = $(this).data('id');

            // Set the user ID in the hidden input field
            $('#userId').val(id);

            $.ajax({
                url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getUserById?id=' +
                    id,
                type: 'GET',
                success: function(res) {
                    var data = res[0];
                    $('#editProfileModal').modal('show');

                    // Set values in the form fields
                    $('#email').val(data.email);
                    $('#nama').val(data.nama);
                    $('#notlp').val(data.notlp);
                    $('#password').val(data.password);
                    // Add other form fields as needed
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });
    });

    </script>
</body>

</html>