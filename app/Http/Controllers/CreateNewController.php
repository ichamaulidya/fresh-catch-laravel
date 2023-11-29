<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


class CreateNewController extends Controller
{
    public function createNew (){
        return view('createNew');
    }
    public function save(Request $request)
    {

        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $email = $request->input('email');
        $notlp = $request->input('notlp');
        $password = $request->input('password');

        // Insert operation
        $response = Http::post('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/insertPengguna?nama='.urlencode($nama).'&alamat='.urlencode($alamat).'&email='.urlencode($email).'&notlp='.urlencode($notlp).'&password='.urlencode($password));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/login');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }

    
}
