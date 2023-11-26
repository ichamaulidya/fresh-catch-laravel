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

    public function editprofil($id = null) {
        // Use the authenticated user if no ID is provided
        if (!$id) {
            $user = auth()->user();
    
            if (!$user) {
                return redirect()->route('error.page')->with('error', 'Pengguna tidak ditemukan');
            }
        } else {
            // Retrieve user by ID
            $user = User::find($id);
    
            if (!$user) {
                return redirect()->route('error.page')->with('error', 'Pengguna tidak ditemukan');
            }
        }
    
        return view('editprofil', ['user' => $user]);
    }
    
    
    
    


}
