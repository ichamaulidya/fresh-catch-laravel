<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function Profil()
    {
        return view('profil');
    }

    public function editprofil($id) {
        // Menggunakan model User dengan nama yang sesuai di aplikasi Anda
        $profile = User::find($id);
    
        // Periksa apakah pengguna ditemukan
        if (!$profile) {
            // Tangani kasus di mana pengguna tidak ditemukan, misalnya, redirect ke halaman error atau tampilkan pesan kesalahan
            return redirect()->route('error.page')->with('error', 'Pengguna tidak ditemukan');
        }
    
        return view('editprofil', ['user' => $profile]);
    }
    


}
