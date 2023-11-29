<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DetailFishmarket;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{
    public function payment()
    {
        $user = session("user");

        if ($user) {
            $userId = $user->_id;

            // Use the relationship to load products with transactions
            $waiting = Transaksi::with('produk')->where("user_id", $userId)->get();
            $total = 0;

            foreach ($waiting as $cartItem) {
                // Check if $produk relationship is loaded before accessing its properties
                if ($cartItem->produk) {
                    $total += $cartItem->kuantitas * $cartItem->produk->harga;
                } else {
                    // Handle the case where $produk is null (e.g., log a message, skip the item, etc.)
                }
            }

            return view('payment', ['waiting' => $waiting, 'total' => $total]);
        } else {
            // Handle the case where the user session is not set.
            // You can redirect or display an error message here.
            return redirect()->back()->with('error', 'User session not set.');
        }
    }


    public function pesan(Request $request)
    {
        $user = session("user");

        if ($user) {
            $data = $request->validate([
                'id_produk' => 'required',
                'nama_produk' => 'required',
                'kuantitas' => 'required|numeric|min:1',
            ]);

            
        // Explicitly cast the quantity to an integer
        $data['kuantitas'] = (int) $data['kuantitas'];


            $id_user = $user->id;
            $id_produk = $data['id_produk'];
            $nama_produk = $data['nama_produk'];
            // Set the default quantity to 1
            $qty = $data['kuantitas'];

            // Retrieve the product price from the DetailFishmarket model
            $produk = DetailFishmarket::findOrFail($id_produk);
            $harga = $produk->harga;

            // Create a new transaction instance
            Transaksi::create([
                'user_id' => $id_user,
                'produk_id' => $id_produk,
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'kuantitas' => $qty,
            ]);

            return view('payment');
        } else {
            // Handle the case where the user is not logged in
        }
    }
}