<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Fishmarket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function Cart()
    {
        $user = session("user");

        if ($user) {
            $userId = $user->_id;

            $cart = Carts::where("user_id", $userId)->get();
            $total = 0;

            foreach ($cart as $cartItem) {
                $produk = Fishmarket::find($cartItem->produk_id);
                $cartItem->produk = $produk;
                $total += $cartItem->kuantitas * $produk->harga;
            }

            return view('cart', ['cart' => $cart, 'total' => $total]);
        } else {
            // Handle the case where the user session is not set.
            // You can redirect or display an error message here.
        }
    }

    public function store_cart(Request $request)
    {
        $user = session("user");

        if ($user) {
            $id_user = $user->id;
            $id_produk = $request->input('id_produk');
            $nama_produk = $request->input('nama_produk');
            // Set the default quantity to 1
            $qty = 1;
            
            // Retrieve the product price from the Fishmarket model
            $produk = Fishmarket::find($id_produk);
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

            return redirect('/cart');
        } else {
            // Handle the case where the user is not logged in
        }
    }



    public function deleteCart(Request $request)
    {
        $id = $request->input('id_cart');
        $id_user = $request->input('id_user');

        $data = Carts::find($id);

        // Periksa apakah objek ditemukan sebelum menghapus
        if ($data) {
            $data->delete();
            return redirect('/cart');
        } else {
            // Objek tidak ditemukan, handle kasus ini sesuai kebutuhan
            return redirect('/cart')->with('error', 'Cart item not found');
        }
    }

    public function updateCartQuantity(Request $request)
    {
        try {
            $productId = $request->input('productId');
            $quantityChange = $request->input('quantityChange');
            $cartId = $request->input('cartId');

            Log::info('Menerima permintaan untuk memperbarui kuantitas keranjang. Cart ID: ' . $cartId);

            $user = session("user");

            if ($user) {
                $id_user = $user->id;

                // Retrieve data from the cart based on cart ID and user ID
                $cartItem = Carts::where('user_id', $id_user)
                    ->where('id', $cartId)
                    ->first();

                if ($cartItem) {
                    // Ensure the quantity is at least 1 when the "minus" button is clicked
                    if ($quantityChange < 0 && $cartItem->kuantitas <= 1) {
                        Log::error('Gagal memperbarui kuantitas. Kuantitas tidak boleh kurang dari 1.');
                        return response()->json(['error' => 'Gagal memperbarui kuantitas. Kuantitas tidak boleh kurang dari 1.'], 400);
                    }

                    // Update the quantity
                    $cartItem->kuantitas += $quantityChange;
                    $cartItem->save();

                    // Ensure the product is not null before accessing its properties
                    if ($cartItem->produk) {
                        // Calculate the subtotal
                        $subtotal = $cartItem->kuantitas * $cartItem->produk->harga;

                        return response()->json([
                            'newQuantity' => $cartItem->kuantitas,
                            'newSubtotal' => $subtotal,
                            'harga' => $cartItem->produk->harga,
                            'kuantitas' => $cartItem->kuantitas,
                        ]);
                    } else {
                        // Handle the case where the product is not found
                        Log::error('Gagal memperbarui kuantitas. Produk tidak ditemukan.');
                        return response()->json(['error' => 'Gagal memperbarui kuantitas. Produk tidak ditemukan.'], 404);
                    }
                }
            }

            // Handle the case where the user is not logged in
            Log::error('Gagal memperbarui kuantitas. Pengguna tidak terautentikasi.');
            return response()->json(['error' => 'Gagal memperbarui kuantitas. Pengguna tidak terautentikasi.'], 401);
        } catch (\Exception $exception) {
            Log::error('Kesalahan memperbarui kuantitas: ' . $exception->getMessage());
            return response()->json(['error' => 'Gagal memperbarui kuantitas'], 500);
        }
    }



}    