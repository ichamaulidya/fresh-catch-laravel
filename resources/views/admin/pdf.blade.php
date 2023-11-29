<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="shortcut icon" href="{{ asset('image/logokecil.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">


    <link rel="stylesheet" href="./assets/compiled/css/table-datatable.css">

    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    
        .container-md {
            width: 80%; /* Sesuaikan lebar container sesuai kebutuhan Anda */
        }
        td.centered {
        text-align: center;
        vertical-align: middle;
    }
    </style>
    
</head>

<body>
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col">
                            <h5 class="card-title">
                                Transaction Table
                            </h5>
                        </div>
                        <div class="col text-end">
                            <a href="/pdf" target="_blank">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-download"></i>
                                </button>
                            </a>
                        </div>    
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Id Order</th>
                                <th>Name</th>
                                <th>Quantitiy</th>
                                <th>Total Sales</th>
                                <th>Create At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cUrl = curl_init();
                    
                            $options = array(
                                CURLOPT_URL => 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getWaitingAll',
                                CURLOPT_CUSTOMREQUEST => 'GET',
                                CURLOPT_RETURNTRANSFER => TRUE
                            );
                    
                            curl_setopt_array($cUrl, $options);
                    
                            $response = curl_exec($cUrl);
                    
                            $data = json_decode($response);
                    
                            curl_close($cUrl);
                    
                            foreach ($data as $row) :
                                ?>
                                
                                <tr>
                                    <td><?= (empty($row->_id) ? '' : $row->_id) ?></td>
                                    <td><?= (empty($row->nama_produk) ? '' : $row->nama_produk) ?></td>
                                    <td><?= (empty($row->kuantitas) ? '' : '' . $row->kuantitas) ?></td>
                                    <td><?= (empty($row->harga) ? '' : 'Rp. ' . $row->harga) ?></td>
                                    <td><?= (empty($row->created_at) ? '' : '' . $row->created_at) ?></td>
                                    
                                </tr>

                                <?php endforeach;

                                if (empty($data)) {
                                    echo '<tr><td colspan="5" class="text-center">Tidak ada data</td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
            
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            
            <script type="text/javascript">
                window.print();                    
            </script>
            <script src="assets/static/js/components/dark.js"></script>
            <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
            <script src="assets/compiled/js/app.js"></script>
            <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
            <script src="assets/static/js/pages/dashboard.js"></script>
            <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
            <script src="assets/static/js/pages/simple-datatables.js"></script>
            </body>
</html>