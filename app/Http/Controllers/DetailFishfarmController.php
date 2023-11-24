<?php
namespace App\Http\Controllers;

use App\Models\Fishfarm;

use Illuminate\Http\Request;

class DetailFishfarmController extends Controller
{
    public function DetailFishfarm($id){

        $data = Fishfarm::find($id); 

        return view('detailfishfarm', ['farm'=>$data]);

    }
}
