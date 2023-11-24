<?php
namespace App\Http\Controllers;

use App\Models\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $data = Index::all();
        return view("index", ['artikel' => $data]);
    }
}