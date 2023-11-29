<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin |Fish Fram</title>
    <link rel="shortcut icon" href="{{ asset('image/logokecil.png') }}" type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">
    <link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
    <link rel="stylesheet" href="./assets/compiled/css/table-datatable.css">
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="./assets/compiled/png/logo romusha.png" alt="Logo"
                                    srcset=""></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item ">
                            <a href="/dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="/product" class='sidebar-link'>
                                <i class="bi bi-bag-dash-fill"></i>
                                <span>Product</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="/fishinfo" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Fish Info</span>
                            </a>
                        </li>

                        <li class="sidebar-item active ">
                            <a href="/fishfarm" class='sidebar-link'>
                                <i class="bi bi-globe"></i>
                                <span>Fish Farm</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="/order" class='sidebar-link'>
                                <i class="bi bi-box-fill"></i>
                                <span>Order</span>
                            </a>

                            
                        </li>

                        
                    </ul>
                    <ul class="menu">
                        <li class="sidebar-title">ACCOUNT PAGES</li>
                        <li class="sidebar-item">
                            <a href="{{ route('logout') }}" class='sidebar-link' onclick="showLogoutModal(event)">
                                <i class="bi bi-box-arrow-in-left"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="container mb-4">
                <div class="row">
                    <div class="card-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item"><a href="#">Fish Farm</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-3">
                        <h3>Fish Farm</h3>
                    </div>

                </div>
            </div>

            <div class="page-content">
                <section class="section">
                    <div class="col-md-6 col-12">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-group">
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addModal" id="addFarmButton">
                                        
                                        Add New Fish Farm
                                    </button>
                         
                                    <!-- New Product Form Modal -->
                                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel33">Table Fish Farm</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="/addfarm" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="fishFarmName" class="form-label">Fish
                                                                        Farm Name:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nama" name="nama" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="ownerName" class="form-label">
                                                                        Addres:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="alamat" name="alamat" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="phoneNumber" class="form-label">
                                                                        Latitude:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="latitude" name="latitude" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="email" class="form-label">Description:</label>
                                                                    <input type="text" class="form-control" id="deskripsi"
                                                                        name="deskripsi" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="productImage" class="form-label">Upload
                                                                        Image:</label>
                                                                    <input type="file" class="form-control" name="gambar" id="gambar" accept="image*/">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="gpsLongitude" class="form-label">GPS
                                                                        Longitude:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="longtitude" name="longtitude" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="operationTime"
                                                                        class="form-label">Contact:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="kontak" name="kontak"
                                                                        required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="address"
                                                                        class="form-label">Link Maps:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="link" name="link"
                                                                        required>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Cancel</span>
                                                        </button>
                                                        <button type="submit" class="btn btn-primary ms-1">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Add</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Table Fish Farm
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr style="font-size: 15px;">
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th>Address</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 15px;">
                                    <?php
                                        $cUrl = curl_init();
                
                                        $options = array(
                                            CURLOPT_URL => 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getFishFarm',
                                            CURLOPT_CUSTOMREQUEST => 'GET',
                                            CURLOPT_RETURNTRANSFER => TRUE
                                        );
                
                                        curl_setopt_array($cUrl, $options);
                
                                        $response = curl_exec($cUrl);
                
                                        $data = json_decode($response);
                
                                        curl_close($cUrl);
                                        foreach ($data as $row) :
                                            echo '<tr>';
                                            echo '<td>';
                                                if (!empty($row->gambar)) {
                                                    if (is_string($row->gambar)) {
                                                        echo '<img src="/assets/img/fishfarm/' . $row->gambar . '" width="100" height="100">';
                                                    } else {
                                                        echo 'Invalid image data'; // Or handle the case where $row->gambar is an object
                                                    }
                                                }
                                            echo '</td>';
                                                if (!is_string($row->nama)) {
                                                    echo '<td>Deskripsi is not a string: ' . gettype($row->nama) . '</td>';
                                                } else {
                                                    echo '<td>'.(empty($row->nama) ? '' : substr($row->nama, 0, 30)).'</td>';
                                                }

                                            echo '<td>' . (empty($row->kontak) ? '' : $row->kontak) . '</td>';

                                                if (!is_string($row->link)) {
                                                    echo '<td>Deskripsi is not a string: ' . gettype($row->link) . '</td>';
                                                } else {
                                                    echo '<td>'.(empty($row->link) ? '' : substr($row->link, 0, 20)).'</td>';
                                                }
                                        
                                                // Debugging statement
                                                if (!is_string($row->deskripsi)) {
                                                    echo '<td>Deskripsi is not a string: ' . gettype($row->deskripsi) . '</td>';
                                                } else {
                                                    echo '<td>'.(empty($row->deskripsi) ? '' : substr($row->deskripsi, 0, 40)).'</td>';
                                                }

                                                if (!is_string($row->alamat)) {
                                                    echo '<td>Deskripsi is not a string: ' . gettype($row->alamat) . '</td>';
                                                } else {
                                                    echo '<td>'.(empty($row->alamat) ? '' : substr($row->alamat, 0, 20)).'</td>';
                                                }
                                        
                                            echo '<td>' . (empty($row->latitude) ? '' : $row->latitude) . '</td>';
                                            echo '<td>' . (empty($row->longtitude) ? '' : $row->longtitude) . '</td>';

                                            echo '<td>
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm edit" data-id="'.$row->_id.'"><i class="bi bi-pencil-square"></i></a>
                                                </td>
                                                    <td>
                                                    <form action="'.route('deleteFishfarm', ['id' => $row->_id]).'" method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="' . csrf_token() . '">
                                                        <button type="submit"  class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin akan menghapus data?\')"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                    </td>';
                                                '</tr>';
                                        endforeach;
                                        
                                        if(empty($data)){
                                            echo '<tr><td colspan="5" class="text-center">Tidak ada data</td></tr>';
                                        }
                                    ?>  
                                </tbody>
                            </table>
                        </div>
                    </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="modalProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">Edit Product</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="formPembudidaya" action="{{ route('admin.updateFishFarm') }}" method="post" enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="fishFarmName" class="form-label">Fish Farm Name:</label>
                                                            <input type="text" class="form-control" id="name" name="nama" required>
                                                            <input type="hidden" id="id" name="id">
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="ownerName" class="form-label">Address:</label>
                                                            <input type="text" class="form-control" id="address" name="alamat" required>
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                            <input type="tel" class="form-control" id="telp" name="kontak" required>
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Link Maps:</label>
                                                            <input type="text" class="form-control" id="maps" name="link" required>
                                                        </div>
                                                    </div>
                                        
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="gpsLatitude" class="form-label">GPS Latitude:</label>
                                                            <input type="text" class="form-control" id="gpslatitude" name="latitude" required>
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="gpsLongitude" class="form-label">GPS Longitude:</label>
                                                            <input type="text" class="form-control" id="longitude" name="longtitude" required>
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="address" class="form-label">Description:</label>
                                                            <textarea class="form-control" id="deskrip" name="deskripsi" rows="3" required></textarea>
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="farmImage" class="form-label">Upload Image:</label>
                                                            <img id="currentImage" src="" alt="Current Image" style="max-width: 100%; height: auto;" />
                                                            <input type="file" class="form-control" name="gambar">
                                                            <input type="hidden" name="gambarlama" id="gambarlama">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary"  form="formPembudidaya">Update</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>   
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Delete Modal -->
                    <div class="modal" id="deleteModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Product</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body text-center">
                                    <p>Are you sure you want to delete this product?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


    <script src="assets/compiled/js/app.js"></script>



    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/static/js/pages/simple-datatables.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="assets/static/js/pages/ckeditor.js"></script>
<!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        function showLogoutModal(event) {
            var confirmation = window.confirm("Anda yakin ingin logout?");

            if (confirmation) {
                // If 'OK' is clicked, proceed with the logout by allowing the default behavior
                return true;
            } else {
                // If 'Cancel' is clicked, prevent the default behavior (href navigation)
                event.preventDefault();
                return false;
            }
        }

        $(document).ready(function () {
        $('.edit').click(function () {
            var id = $(this).data('id');

            // Set the user ID in the hidden input field
            $('#id').val(id);

                
                $.ajax({
                    url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getFishFarmById?id=' + id,
                    type: 'GET',
                    success: function(res) {
                        var data = res[0]; // Use 'res' instead of 'data'
                        $('#modalProduct').modal('show');

                        $('#name').val(data.nama);
                        $('#address').val(data.alamat);
                        $('#telp').val(data.kontak);
                        $('#maps').val(data.link);
                        $('#gpslatitude').val(data.latitude);
                        $('#longitude').val(data.longtitude);
                        $('#deskrip').val(data.deskripsi);
                        $('#currentImage').attr('src', "{{ asset('assets/img/fishfarm') }}/"+data.gambar); // Set the source of the image
                        $('#gambarlama').val(data.gambar); // Set the value of the hidden input

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