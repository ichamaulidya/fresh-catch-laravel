<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="shortcut icon" href="{{ asset('image/logokecil.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
    <link rel="stylesheet" href="./assets/compiled/css/ui-widgets-chatbox.css">
    <style>
        .list-group-item.active a {
            color: white;
        }

        .list-group-item:not(.active) a {
            color: black;
        }
        /* Add this to your CSS */
        #sender-information- .active-chat-room {
            display: block; /* or any other styling you want for the active chat room */
        }

    </style>
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper In Stock">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="dashboard.html"><img src="./assets/compiled/png/logo romusha.png" alt="Logo"
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

                        <li class="sidebar-item ">
                            <a href="/order" class='sidebar-link'>
                                <i class="bi bi-box-fill"></i>
                                <span>Order</span>
                            </a>
                        </li>

                        <li class="sidebar-item active ">
                            <a href="/chatAdmin" class='sidebar-link'>
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

                    
        <section class="section">
            <div class="row">
            <!-- Sidebar with list of message senders -->
            <div class="col-md-3">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn btn-outline-secondary" type="button">
                        <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
                
                <ul class="list-group" id="list-users">
                    @php
                    $groupedSenders = $chat->where('pengirim', session('user')->_id)->groupBy('chat_room_id');
                    @endphp
                    
                    @forelse($groupedSenders as $chatRoomId => $senders)
                        <li class="list-group-item active mb-2">
                        <a href="#" class="d-flex align-items-center" data-chat-room-id="{{$chatRoomId}}">
                            <div class="avatar me-3">
                                <img src="./assets/compiled/jpg/1.jpg" alt="" style="width: 60px; height: 60px;">
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="flex-grow-1">
                                <span class="name">{{$orang[$chatRoomId]}}</span>
                            </div>
                        </a>
                        </li>
                    @empty
                        <li class="list-group-item">No senders available.</li>
                    @endforelse
                </ul>
            </div>
        
            <!-- Display chat room details -->
            <div class="col-md-9">
                @foreach($groupedSenders as $chatRoomId => $senders)
                    <div class="col-md-9" id="sender-information-{{$chatRoomId}}" style="display: none;">
                        <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="media d-flex align-items-center">
                                    <div class="avatar me-3">
                                    <img src="./assets/compiled/jpg/1.jpg" alt="">
                                    <span class="avatar-status bg-success"></span>
                                    </div>
                                    <div class="name flex-grow-1">
                                    <h6 class="mb-0">{{$orang[$chatRoomId]}}</h6>
                                    <span class="text-xs">Online</span>
                                    </div>
                                    <button class="btn btn-sm">
                                    <i data-feather="x"></i>
                                    </button>
                                </div>
                            </li>
                            
                            <li class="list-group-item bg-grey">
                                <ul class="list-unstyled mb-0">
                                    @foreach($chat as $c)
                                    @if($c->chat_room_id == $chatRoomId)
                                        <li class="mb-2">
                                            <div class="chat {{$c->pengirim == session('user')->_id ? '' : 'chat-left'}}">
                                                <div class="chat-body">
                                                <div class="chat-message">{{$c->pesan}}</div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            
                            <li class="list-group-item">
                                <div class="message-form d-flex flex-direction-column align-items-center">
                                    <a href="http://" class="black"><i data-feather="smile"></i></a>
                                    <div class="d-flex flex-grow-1 ms-4">
                                    <input type="text" class="form-control" placeholder="Type your message..">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-send"></i></button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        </section>
    </div>


    </div>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
     $(document).ready(function () {
    // Menggunakan variabel untuk melacak status tampilan ruang obrolan
    var chatRoomVisible = false;
    var currentChatRoomId = null;

    // Use event delegation to capture clicks on dynamically added elements
    $('#list-users').on('click', 'li', function (e) {
        e.preventDefault();

        // Extract chat room ID from the clicked list item
        var chatRoomId = $(this).find('a').data('chat-room-id');

        // Periksa apakah ruang obrolan sedang ditampilkan dan ID-nya sesuai dengan yang diklik
        if (!chatRoomVisible || currentChatRoomId !== chatRoomId) {
            // Sembunyikan ruang obrolan sebelumnya (jika ada)
            $('[id^="sender-information-"]').hide();

            // Tampilkan ruang obrolan yang sesuai dengan ID yang diklik
            $('#sender-information-' + chatRoomId).show();

            // Set variabel status tampilan dan ID ruang obrolan saat ini
            chatRoomVisible = true;
            currentChatRoomId = chatRoomId;

            // Example AJAX request
            $.ajax({
                url: 'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/getUserByChat',
                method: 'GET',
                data: { chat_room_id: chatRoomId }, // Pass the chat room ID as data
                success: function (data) {
                    // Update the content of the sender information based on the AJAX response
                    $('#sender-information-' + chatRoomId).html(data);
                },
                error: function () {
                    // Handle errors here
                    console.log('Failed to load sender information.');
                }
            });
        }
    });
});


    </script>
    <script src="assets/extensions/dayjs/dayjs.min.js"></script>
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
    <script src="assets/static/js/pages/ui-apexchart.js"></script>
</body>
</html>