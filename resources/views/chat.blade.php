<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo romusha.png" type="image/x-icon">
    <title>chat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/chat.css">
    <link rel="stylesheet" href="style/style.css">
 
</head>
<body>
<section style="background-color: #eee;">
<div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center p-3"
                        style="border-top: 4px solid #ffa900;">
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
                        <form action="/postchat" method='post' class="d-flex">
                            @csrf
                            <input type="text" name='pesan' class="form-control col-10 mr-2"
                                placeholder="Type message" aria-label="Recipient's username"
                                aria-describedby="button-addon2" />
                            <input type="hidden" name='crid' value="{{$crid}}" class="form-control" />
                            <button class="btn btn-warning" type="submit" id="button-addon2"
                                style="padding-top: .55rem;">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>