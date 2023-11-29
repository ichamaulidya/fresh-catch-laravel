<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\kirimEmail;
use App\Models\Transaksi;
use App\Models\DetailFishmarket;

use App\Models\Carts;
use App\Models\Fishmarket; // Make sure to import the Fishmarket model


class KirimEmailController extends Controller
{
    public function email(Request $request)
    {
        $id_produk = $request->input('id_produk');

        // Retrieve the product from the Fishmarket model
        $produk = Fishmarket::find($id_produk);

        // Check if the product is found
        if ($produk) {
            // Get authenticated user
            $user = session("user");

            // Check if the user is authenticated
            if ($user) {
                $data = [
                    'email' => $user->email,
                    'nama' => $user->nama, // Assuming 'nama' is the user's name attribute, adjust it based on your actual attribute
                    'nama_produk' => $request->input('nama_produk'),
                    'harga' => $produk->harga, // Use the product price from the Fishmarket model
                    'alamat' => $request->input('alamat'),
                    'kuantitas' => $request->input('kuantitas'),
                ];

                // Save the data to the database
                Transaksi::create([
                    'user_id' => $user->id,
                    'produk_id' => $id_produk,
                    'nama_produk' => $data['nama_produk'],
                    'harga' => $data['harga'],
                    'kuantitas' => $data['kuantitas'],
                ]);

                Mail::to($data['email'])->send(new kirimEmail($data)); // Pass data to the Mailable

                Mail::to("freshcatch@gmail.com")->send(new kirimEmail($data)); // Pass data to the Mailable

                return redirect()->route('index');
            } else {
                // Handle the case when the user is not authenticated
                return '<h1>Error: User not authenticated</h1>';
            }
        } else {
            // Handle the case when the product is not found
            return '<h1>Error: Product not found</h1>';
        }
    }
}


// class KirimEmailController extends Controller
// {
//     public function email(Request $request)
//     {

//         $harga = $request->input('harga');
//         $kuantitas = $request->input('kuantitas');
//         $total = $harga * $kuantitas;

//         $data = [
//             'email' => $request -> input('email'),
//             'nama' => $request -> input('nama'),
//             'nama_produk' => $request -> input('nama_produk'),
//             'harga' => $request -> input('harga'),
//             'alamat' => $request -> input('alamat'),
//             'k'
//         ];

//         Mail::to("freshcatch@gmail.com")->send(new kirimEmail()); // Use the correct namespace and class name
//         return '<h1>Sukses mengirim pesan</h1>';
//     }
// }

