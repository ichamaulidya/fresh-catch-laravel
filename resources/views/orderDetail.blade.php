<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembelian</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Kustom -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/orderDetail.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="image/logo romusha.png" type="image/x-icon">
</head>
<body>
<section class="h-100 h-custom" style="background-color: #f8f9fa;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <!-- Menggunakan class card-custom yang sudah didefinisikan -->
                <div class="card card-custom">
                    <div class="card-body p-5">
                        <img src="image/logo romusha.png" alt="Logo" class="logo-image mb-4">
                        <h1 class="display-5 text-center fw-bold mb-5" style="color: #33bbc5;">Nota Pembelian</h1>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <p class="small text-muted mb-1">Tanggal:</p>
                                <p class="fw-bold">10 April 2021</p>
                            </div>
                            <div class="col-md-6">
                                <p class="small text-muted mb-1">No. Pesanan:</p>
                                <p class="fw-bold">012j1gvs356c</p>
                            </div>
                        </div>

                        <div class="table-responsive mb-2">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Gurame</td>
                                    <td>Rp. 10.000</td>
                                </tr>
                                <tr>
                                    <td>Pengiriman</td>
                                    <td>Rp. 15.000</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td class="fw-bold">Total</td>
                                    <td class="fw-bold">Rp. 10.000</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <button type="button" class="btn center-button tracking-button mb-3" data-bs-toggle="modal" data-bs-target="#trackingModal">
                            Lacak Pesanan
                        </button>
                        

                        <p class="text-center mb-0">Butuh bantuan? <a href="#!" style="color: #33bbc5;">Hubungi kami</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Pelacakan Pesanan -->
<div class="modal fade" id="trackingModal" tabindex="-1" aria-labelledby="trackingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="trackingModalLabel">Pelacakan Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Isi modal dengan informasi pelacakan pesanan di sini -->
                <p>Status: Dipesan</p>
                <p>Estimasi Pengiriman: 15 April 2021</p>
                <!-- Anda dapat menambahkan informasi pelacakan pesanan lainnya di sini -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JavaScript (termasuk Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
