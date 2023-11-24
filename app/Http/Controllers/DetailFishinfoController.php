<?php

namespace App\Http\Controllers;

use App\Models\DetailFishinfo;

use Illuminate\Http\Request;

class DetailFishinfoController extends Controller
{
    public function DetailFishinfo($id) {
        
        $fish = DetailFishinfo::find($id); 
     
        return view('detailFishinfo', ['fish' => $fish]);
    }
    
}
?>