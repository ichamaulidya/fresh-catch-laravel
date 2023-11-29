<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
  <title>Buat Akun</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style/createNew.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
  <section class="h-100" id="h-100">
    <div class="container py-5 h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-flex justify-content-center align-items-center" style="max-width: 80%;">
              <img src="image/logo romusha.png" alt="Sample photo" class="img-fluid"
                style="width: 300px; height: auto;display: block; margin: auto;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Buat Akun Baru</h3>
              
              <form action="/save" method="post" id="signup-form">
                @csrf
                <div class="form-outline mb-4" >
                  <label class="form-label" for="form3Example1m">Nama</label>
                  <input type="text" id="nama" name="nama" placeholder="Username" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example99">Alamat</label>
                  <input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example8">Email</label>
                  <input type="text" id="email" name="email" placeholder="Email" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example90">Nomor Telepon</label>
                  <input type="number" id="notlp" name="notlp" placeholder="Nomor Telepon" class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Password</label>
                  <input type="password" id="password" name="password" placeholder="Password" class="form-control form-control-lg" required/>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset semua</button>
                  <button type="submit" class="btn btn-dark ms-2">Signup</button>
                </div>
              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>


</html>