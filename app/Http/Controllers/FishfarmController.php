<?php

namespace App\Http\Controllers;

use App\Models\Fishfarm;
use Illuminate\Http\Request;

class FishfarmController extends Controller
{
    public function fishfarm()
    {
        // Mengambil data Fishfarm dengan paginasi 6
        $farm = Fishfarm::paginate(6);

        // Menampilkan tampilan 'fishfarm' dengan data yang diambil
        return view('fishfarm', compact('farm'));
    }
}