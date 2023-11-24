<?php

namespace App\Http\Controllers;

use App\Models\Fishinfo;
use Illuminate\Http\Request;

class FishinfoController extends Controller
{
    public function fishinfo()
    {
        // Mengambil data Fishinfo dengan paginasi 6
        $artikel = Fishinfo::paginate(6);

        // Menampilkan tampilan 'fishinfo' dengan data yang diambil
        return view('fishinfo', compact('artikel'));
    }
}