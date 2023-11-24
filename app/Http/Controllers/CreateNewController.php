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
        $password = md5($request->input('password'));

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

    public function updatePetani(Request $request)
    {

        session_start();
        
        $id = $request->input('id');
        $username = $request->input('username');
        $email = $request->input('email');
        $no_hp = $request->input('no_hp');
        $alamat = $request->input('alamat');

        // Insert operation
        $response = Http::put('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-fjrfb/endpoint/updatepetaniBuah?id='.urlencode($id).'&username='.urlencode($username).'&email='.urlencode($email).'&no_hp='.urlencode($no_hp).'&alamat='.urlencode($alamat));

        if ($response->failed()) {  
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            session_write_close();
            return redirect('/akun');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }
    
}
