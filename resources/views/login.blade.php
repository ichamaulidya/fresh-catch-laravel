<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
    <title>Profil</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/profil.css">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="image/logo romusha.png" style="width: 185px;" alt="logo">
                                    </div>
                                    <form method="POST" action="/signin">
                                    @csrf
                                        <p class="mt-3">Please login to your account</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">Username :</label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>

                                        <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password :</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>

                                        <div class="text-center pt-1 mb-2 pb-1">
                                            <button class="btn btn-dark me-2" type="submit"> Log in</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>
                                        <div class="text-center p-2">
                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </button>

                                            <button type=" button" class="btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-google"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-twitter"></i>
                                            </button>

                                            <button type="button" class="btn btn-link btn-floating mx-1">
                                                <i class="fab fa-github"></i>
                                            </button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <button type="button" class="btn btn-dark"><a href="/createNew">Create
                                                    new</a></button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">FRESH CATCH</h4>
                                    <p class="small mb-0">Website ini adalah sumber informasi dan saran terkait ikan
                                        konsumsi air tawar. Kami menyediakan beragam konten yang berguna bagi pecinta
                                        ikan, pembudidaya ikan, dan mereka yang tertarik untuk memasukkan ikan air tawar
                                        ke dalam diet mereka. Di sini, Anda akan menemukan:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>