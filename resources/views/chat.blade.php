<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logokecil.png" type="image/x-icon">
    <title>chat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/chat.css">
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light stiky-top">
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
                <a href="/cart" class="bi bi-cart-dash-fill" style="margin-right: 15px;"><svg
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
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-12 col-xl-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center p-3 text-white"
                        style="border-top: 4px solid #33bbc5; background-color :#33bbc5">
                        <h5 class="mb-0">Chat messages</h5>
                        <div class="d-flex flex-row align-items-center">
                            <i class="fas fa-times text-muted fa-xs"></i>
                        </div>
                    </div>
                    <div class="card-body" style="height: 400px; overflow-y: auto;" data-mdb-perfect-scrollbar="true">
                        @foreach($chat as $c)
                        @if($c->pengirim==session('user')->_id)
                        <div class="d-flex justify-content-between">
                            <p class="small mb-1 text-muted">{{$c->waktu}}</p>
                            <p class="small mb-1">{{$orang[$c->pengirim]}}</p>
                        </div>
                        <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                            <div>
                                <p class="small p-2 me-3 mb-3 text-white rounded-3"
                                    style="background-color: #33bbc5;">{{$c->pesan}}</p>
                            </div>
                            <img
                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                                alt="avatar 1" style="width: 45px; height: 100%;">
                        </div>
                        @else
                        <div class="d-flex justify-content-between">
                            <p class="small mb-1">{{$orang[$c->pengirim]}}</p>
                            <p class="small mb-1 text-muted">{{$c->waktu}}</p>
                        </div>
                        <div class="d-flex flex-row justify-content-start">
                            <img
                                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                                alt="avatar 1" style="width: 45px; height: 100%;">
                            <div>
                                <p class="small p-2 ms-3 mb-3 rounded-3" style="background-color: #f5f6f7;">{{$c->pesan}}</p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                        <form action="{{ url('/postchat') }}" method="post" class="d-flex flex-grow-1">
                            @csrf
                            <input type="text" name="pesan" class="form-control mr-2 flex-grow-1"
                                placeholder="Type message" aria-label="Recipient's username"
                                aria-describedby="button-addon2" />
                            <input type="hidden" name="crid" value="{{ $crid }}" class="form-control" />
                            <button class="btn btn-warning" type="submit" id="button-addon2">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 


    
       
</body>
</html>