<?php

namespace App\Http\Controllers;

use App\Models\DetailFishmarket;

use Illuminate\Http\Request;

class DetailFishmarketController extends Controller
{
    public function detailFishmarket($id) {
        $market = DetailFishmarket::find($id);
        $produk = DetailFishmarket::all(); 
        return view('detailFishmarket', ['market' => $market, 'produk' => $produk]);
    }
}

?>