<?php

namespace App\Http\Controllers;

use App\Models\Fishmarket;

use App\Models\Carts;

use Illuminate\Http\Request;

class FishmarketController extends Controller
{
    //
    public function fishmarket(){

        $data = Fishmarket::all();

        return view('fishmarket', ['produk'=>$data]);

    }

    public function fishmarket_api(){

        $data = Fishmarket::all();

        return response()->json($data);

    }

        

}
?>