<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProfilController extends Controller
{
    public function Profil()
    {
        return view('profil');
    }

    public function editprofil(Request $request) {
        $id = $request->input('id');
        $email = $request->input('email');
        $nama = $request->input('nama');
        $notelp = $request->input('notelp');
        $password = $request->input('password');
    
        // Update operation
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/updateUser?id=' . urlencode($id) . '&email=' . urlencode($email). '&nama=' . urlencode($nama). '&notelp=' . urlencode($notelp). '&password=' . urlencode($password)); 

        Log::info("Update Response: " . $response->body());
        
        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Sesuaikan ini untuk menangani kesalahan sesuai kebutuhan
        } else {
            // Redirect ke halaman fishinfo atau sesuai yang Anda tentukan
            return redirect()->route('profil');
        }
    }

    public function editalamat(Request $request) {
        $id = $request->input('id');
        $nama = $request->input('nama');
        $notelp = $request->input('notelp');
        $alamat = $request->input('alamat');
       
        // Update operation
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/updateUser?id=' . urlencode($id) . '&nama=' . urlencode($nama). '&notelp=' . urlencode($notelp). '&alamat=' . urlencode($alamat)); 

        Log::info("Update Response: " . $response->body());
        
        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Sesuaikan ini untuk menangani kesalahan sesuai kebutuhan
        } else {
            // Redirect ke halaman fishinfo atau sesuai yang Anda tentukan
            return redirect()->route('profil');
        }
    }
    
    
    
    


}
