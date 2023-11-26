<?php

namespace App\Http\Controllers;
use App\Models\Carts;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function transaksi(Request $request)
    {
        $user = session("user");

        if ($user) {
            $id_user = $user->id;
            $id_produk = $request->input('id_produk');
            $nama_produk = $request->input('nama_produk');
            $qty = 1;
            $produk = Carts::find($id_produk);
            $harga = $produk->harga;

            $dataLama = Carts::count();

            Carts::create([
                'user_id' => $id_user,
                'produk_id' => $id_produk,
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'kuantitas' => $qty,
            ]);

            $dataBaru = Carts::count();

            if ($dataBaru > $dataLama) {
                session(['NewDataCart' => true]);
            }

            return redirect('/transaksi');
        } else {
           
        }
    }

    public function toTransaksi(Request $request)
    {
        $user = session("user");

        if ($user) {
            $id_user = $user->id;
            $id_produk = $request->input('id_produk');
            $nama_produk = $request->input('nama_produk');
            // Set the default quantity to 1
            $qty = 1;
            
            // Retrieve the product price from the Fishmarket model
            $produk = Carts::find($id_produk);
            $harga = $produk->harga;

            $dataLama = Carts::count();

            Carts::create([
                'user_id' => $id_user,
                'produk_id' => $id_produk,
                'nama_produk' => $nama_produk,
                'harga' => $harga,
                'kuantitas' => $qty,
            ]);

            $dataBaru = Carts::count();

            if ($dataBaru > $dataLama) {
                session(['NewDataCart' => true]);
            }

            return redirect('/transaksi');
        } else {
            // Handle the case where the user is not logged in
        }
    }
}