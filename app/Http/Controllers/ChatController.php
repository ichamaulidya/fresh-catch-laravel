<?php

namespace App\Http\Controllers;

use App\Models\Chat;

use App\Models\Login;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    
    public function chat(){

        

        if(session('user')->role == 'admin'){
            $data = Chat::all();
        } else {
            $data = Chat::where('chat_room_id', session('user')->_id)->get();
            
        }      



        $data_pengirim = $data->unique('pengirim')->pluck('pengirim');

        if(session('user')->role == 'user' && $data_pengirim->count() == 0){
            $crid = session('user')->_id;    
        }

        foreach( $data_pengirim as $key => $value ){
            $user = Login::find( $value );
            $data_pengirim[$value] = $user->nama;

            if ($user->role == 'user') {
                $crid = $user->id;
            }
        };


        return view('chat', ['chat'=>$data->count() > 0 ? $data : [], 'orang' =>$data_pengirim->count() > 0 ? $data_pengirim : [], 'crid' => $crid]);

    }

    public function postchat(Request $request){

        date_default_timezone_set('Asia/Bangkok');

        $pesan = $request->input('pesan');
        $crid = $request->input('crid');

        Chat::create([
            'pesan'=> $pesan,
            'pengirim' => session('user')->_id,
            'waktu' => date('Y-m-d H:i:s'),
            'chat_room_id' => $crid
        ]);

        return redirect('/chat')->with('success','');
    }
}
