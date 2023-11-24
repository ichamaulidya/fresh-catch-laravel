<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Order - Waiting Payment</title>
    <link rel="shortcut icon" href="{{ asset('image/logokecil.png') }}" type="image/x-icon">
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

                        <li class="sidebar-item  ">
                            <a href="/fishfarm" class='sidebar-link'>
                                <i class="bi bi-globe"></i>
                                <span>Fish Farm</span>
                            </a>
                        </li>

                        <li class="sidebar-item active has-sub">
                            <a href="/order" class='sidebar-link'>
                                <i class="bi bi-box-fill"></i>
                                <span>Order</span>
                            </a>

                            <ul class="submenu ">

                                <li class="submenu-item active ">
                                    <a href="/waitingPayment" class="submenu-link"><i
                                            class="bi bi-wallet-fill fs-5 me-2 "></i>waiting payment</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="/packing" class="submenu-link"><i
                                            class="bi bi-box2-fill fs-5 me-2 "></i>Packing</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="/sent" class="submenu-link"><i
                                            class="bi bi-send-fill fs-5 me-2 "></i>Sent</a>

                                </li>

                                <li class="submenu-item  ">
                                    <a href="/done" class="submenu-link"><i
                                            class="bi bi-check-square-fill fs-5 me-2 "></i>Done</a>

                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="/chat" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Chat</span>
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
                                <li class="breadcrumb-item"><a href="#">Order</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-12 col-lg-4 mb-3">
                        <h3>Waiting Payment</h3>
                    </div>

                </div>
            </div>
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/waitingPayment" class="card-link">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5 d-flex align-items-center">
                                        <div
                                            class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center">
                                            <div class="stats-icon mb-2 text-center" style="background-color: #4FD1C5;">
                                                <i class="bi bi-credit-card-2-back d-flex align-items-center justify-content-center"
                                                    style="height: 100%; background-color: #4FD1C5;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Waiting Payment</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Repeat the above structure for other cards -->
                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/packing" class="card-link">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5 d-flex align-items-center">
                                        <div
                                            class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center">
                                            <div class="stats-icon mb-2 text-center" style="background-color: #7e7e7e;">
                                                <i class="bi bi-box2-fill d-flex align-items-center justify-content-center"
                                                    style="height: 100%; background-color: #7e7e7e;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Packing</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/sent" class="card-link">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5 d-flex align-items-center">
                                        <div
                                            class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center">
                                            <div class="stats-icon mb-2 text-center" style="background-color: #7e7e7e;">
                                                <i class="bi bi-send-fill d-flex align-items-center justify-content-center"
                                                    style="height: 100%; background-color: #7e7e7e;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Sent</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 col-lg-3 col-md-6">
                            <a href="/done" class="card-link">
                                <div class="card">
                                    <div class="card-body px-4 py-4-5 d-flex align-items-center">
                                        <div
                                            class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center">
                                            <div class="stats-icon mb-2 text-center" style="background-color: #7e7e7e;">
                                                <i class="bi bi-check-square-fill d-flex align-items-center justify-content-center"
                                                    style="height: 100%; background-color: #7e7e7e;"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Done</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="card">
                        <div class="card-body py-4 px-4">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <img src="./assets/compiled/jpg/1.jpg" alt="Face 1">
                                </div>
                                <div class="ms-3">
                                    <h5 class="font-bold">Fresh Catch</h5>
                                    <h6 class="text-muted mb-0" style="font-size: 14px;">Freshcatch@gmail.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="row">
                <div class="col-12 col-lg-7">
                    <div class="page-content">
                        <section class="section">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        Table Waiting Payment
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-striped" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>In Order</th>
                                                        <th>Name</th>
                                                        <th>Total Sales</th>
                                                        <th>Created At</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Msv936</td>
                                                        <td>udin</td>
                                                        <td>Rp. 60.000</td>
                                                        <td>2023-11-10 08:30:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Msv936</td>
                                                        <td>udin</td>
                                                        <td>Rp. 60.000</td>
                                                        <td>2023-11-10 08:30:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Msv936</td>
                                                        <td>udin</td>
                                                        <td>Rp. 60.000</td>
                                                        <td>2023-11-10 08:30:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Msv936</td>
                                                        <td>udin</td>
                                                        <td>Rp. 60.000</td>
                                                        <td>2023-11-10 08:30:00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Msv936</td>
                                                        <td>udin</td>
                                                        <td>Rp. 60.000</td>
                                                        <td>2023-11-10 08:30:00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="card">
                        <div class="page-content">
                            <section class="section">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">
                                            Invoice Table
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="invoiceTable">
                                                <thead>
                                                    <tr>
                                                        <th>Created At</th>
                                                        <th>In Order</th>
                                                        <th>Total Sales</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2023-11-10 08:30:00</td>
                                                        <td>Msv936</td>
                                                        <td>Rp. 60.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                </div>
            </section>
            <div class="page-content">
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">
                                Transaction Table
                            </h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>In Order</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Total Sales</th>
                                        <th>Create At</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-dark">Packing</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-dark">Packing</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-warning">Waiting Payment</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-dark">Packing</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-success">Done</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-light-dark">Sent</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-success">Done</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-light-dark">Sent</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-warning">Waiting Payment</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Msv936</td>
                                        <td>udin</td>
                                        <td>Bogor baru</td>
                                        <td>Rp. 60.000</td>
                                        <td>2023-11-10 08:30:00</td>
                                        <td>
                                            <span class="badge bg-warning">Waiting Payment</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#editModal"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                        <td>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#deleteModal"><i class="bi bi-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Edit Modal -->
                    <div class="modal" id="editModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Product</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="productName" class="form-label">Product Name:</label>
                                                <input type="text" class="form-control" id="productName"
                                                    name="productName" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="IdOrder" class="form-label">Id Order:</label>
                                                <input type="number" class="form-control" id="IdOrder" name="IdOrder"
                                                    required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="TotalSales" class="form-label">Total Sales:</label>
                                                <input type="number" class="form-control" id="Totalsales"
                                                    name="TotalSales" required>
                                            </div>


                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
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
</body>

</html>