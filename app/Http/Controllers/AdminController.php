<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fishinfo;
use App\Models\Fishmarket;
use App\Models\Fishfarm;
use App\Models\Chat;
use App\Models\Login;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    //index
    public function index()
    {
        return view('admin.dashboard');
    }

    //fish info
    public function fishinfo()
    {
        
        return view('admin.fishinfo');

    }

    public function addarticle(Request $request)
    {

        $judul = $request->input('judul');
        $tgl_publikasi = $request->input('tgl_publikasi');
        $gambar = $request->input('gambar');
        $deskripsi = $request->input('deskripsi');


        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');

        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('assets/img/artikel'), $namaGambar);

            $response = Http::post(
                'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/insertArtikel',
                [
                    'judul' => $judul,
                    'tgl_publikasi' => $tgl_publikasi,
                    'gambar' => $namaGambar,
                    'deskripsi' => $deskripsi,
                ]
            );
            if ($response->failed()) {
                // Handle error
                $errorMessage = $response->body();
                return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
            } else {
                // Redirect ke halaman login atau halaman lain yang sesuai
                return redirect('/admin.fishinfo');
                // Gantilah 'login' dengan nama rute yang sesuai
            }
        } else {
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
    }

    public function updateFishInfo(Request $request)
    {
        $id = $request->input('id');
        $judul = $request->input('judul');
        $tgl_publikasi = $request->input('tgl_publikasi');
        $deskripsi = $request->input('deskripsi');
        $gambarlama = $request->input('gambarlama');
        
        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');

        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('assets/img/artikel'), $namaGambar);
        } else {
            $namaGambar = $gambarlama;
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            // return 'Error: Gambar tidak diunggah atau tidak valid.';
        }

        // Update operation
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/updateFishInfobyId?id=' . urlencode($id) . '&judul=' . urlencode($judul). '&tgl_publikasi=' . urlencode($tgl_publikasi) . '&gambar=' . urlencode($namaGambar) . '&deskripsi=' . urlencode($deskripsi)); 

        Log::info("Update Response: " . $response->body());
        
        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Sesuaikan ini untuk menangani kesalahan sesuai kebutuhan
        } else {
            // Redirect ke halaman fishinfo atau sesuai yang Anda tentukan
            return redirect()->route('admin.fishinfo');
        }
    }



    public function deletefishinfo($id)
    {
        // Make sure to validate and sanitize the $id parameter to avoid security issues

        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/deleteFishInfo?id=' . urlencode($id));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return response()->json(['status' => 'fail', 'message' => $errorMessage], 500);
            // Adjust the status code and response format based on your needs
        } else {
            // Redirect to a specific route or URL
            return redirect()->route('admin.fishinfo'); // Adjust the route name as needed
        }
    }



   
    //fish farm
    public function fishfarm()
    {
        return view('admin.fishfarm');
    }

    public function addfarm(Request $request)
    {

        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $latitude = $request->input('latitude');
        $deskripsi = $request->input('deskripsi');
        $gambar = $request->input('gambar');
        $longtitude = $request->input('longtitude');
        $kontak = $request->input('kontak');
        $link = $request->input('link');


        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');

        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('assets/img/fishfarm'), $namaGambar);

            $response = Http::post(
                'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/insertFarm',
                [
                    'nama' => $nama,
                    'alamat' => $alamat,
                    'latitude' => $latitude,
                    'deskripsi' => $deskripsi,
                    'gambar' => $namaGambar,
                    'longtitude' => $longtitude,
                    'kontak' => $kontak,
                    'link' => $link,
                ]
            );
            if ($response->failed()) {
                // Handle error
                $errorMessage = $response->body();
                return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
            } else {
                // Redirect ke halaman login atau halaman lain yang sesuai
                return redirect()->route('admin.fishfarm');
                // Gantilah 'login' dengan nama rute yang sesuai
            }
        } else {
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
    }

    public function updateFishfarm(Request $request)
    {
        $id = $request->input('id');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $deskripsi = $request->input('deskripsi');
        $latitude = $request->input('latitude');
        $longtitude = $request->input('longtitude'); 
        $kontak = $request->input('kontak');
        $link = $request->input('link');
        $gambarlama = $request->input('gambarlama');
        
        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');

        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('assets/img/fishfarm'), $namaGambar);
        } else {
            $namaGambar = $gambarlama;
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            // return 'Error: Gambar tidak diunggah atau tidak valid.';
        }

        // Update operation
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/updatePembudidaya?id=' . urlencode($id) . '&nama=' . urlencode($nama) . '&alamat=' . urlencode($alamat) . '&deskripsi=' . urlencode($deskripsi) . '&latitude=' . urlencode($latitude) . '&longtitude=' . urlencode($longtitude) . '&kontak=' . urlencode($kontak) . '&link=' . urlencode($link) . '&gambar=' . urlencode($namaGambar));

        Log::info("Update Response: " . $response->body());

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Sesuaikan ini untuk menangani kesalahan sesuai kebutuhan
        } else {
            // Redirect ke halaman produk atau sesuai yang Anda tentukan
            return redirect()->route('admin.fishfarm');
        }
    }




    public function deletefishfarm($id)
    {
        // Make sure to validate and sanitize the $id parameter to avoid security issues

        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/deletePembudidaya?id=' . urlencode($id));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return response()->json(['status' => 'fail', 'message' => $errorMessage], 500);
            // Adjust the status code and response format based on your needs
        } else {
            // Redirect to a specific route or URL
            return redirect()->route('admin.fishfarm'); // Adjust the route name as needed
        }

    }

    //Fish Market
    public function product()
    {
        return view('admin.product');
    }

    public function addproduk(Request $request)
    {

        $nama_produk = $request->input('nama_produk');
        $harga = $request->input('harga');
        $gambar = $request->input('gambar');
        $deskripsi = $request->input('deskripsi');
        $dibuat = $request->input('dibuat');

        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');

        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('assets/img/produk'), $namaGambar);

            $response = Http::post(
                'https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/insertProduk',
                [
                    'nama_produk' => $nama_produk,
                    'harga' => $harga,
                    'gambar' => $namaGambar,
                    'deskripsi' => $deskripsi,
                    'dibuat' => $dibuat,
                 
                ]
            );
            if ($response->failed()) {
                // Handle error
                $errorMessage = $response->body();
                return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
            } else {
                // Redirect ke halaman login atau halaman lain yang sesuai
                return redirect()->route('admin.product');
                // Gantilah 'login' dengan nama rute yang sesuai
            }
        } else {
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
    }
    

    public function updateProduk(Request $request)
    {
        $id = $request->input('id');
        $nama_produk = $request->input('nama_produk');
        $harga = $request->input('harga');
        $gambarlama = $request->input('gambarlama');
        
        // Menggunakan request untuk mengelola pengunggahan gambar
        $gambar = $request->file('gambar');

        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Mendapatkan nama unik untuk gambar
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();

            // Pindahkan gambar ke folder tujuan (misalnya, public/images)
            $gambar->move(public_path('assets/img/produk'), $namaGambar);
        } else {
            $namaGambar = $gambarlama;
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            // return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
        
        $deskripsi = $request->input('deskripsi');
        $dibuat = $request->input('dibuat');

        // Update operation
        $response = Http::put('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/updateProduk?id=' . urlencode($id) . '&nama_produk=' . urlencode($nama_produk). '&harga=' . urlencode($harga) . '&gambar=' . urlencode($namaGambar) . '&deskripsi=' . urlencode($deskripsi) . '&dibuat=' . urlencode($dibuat)); 

        Log::info("Update Response: " . $response->body());
        
        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Sesuaikan ini untuk menangani kesalahan sesuai kebutuhan
        } else {
            // Redirect ke halaman produk atau sesuai yang Anda tentukan
            return redirect()->route('admin.product');
        }
    }



    public function deleteproduk($id)
    {
        // Make sure to validate and sanitize the $id parameter to avoid security issues

        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/deleteProduk?id=' . urlencode($id));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return response()->json(['status' => 'fail', 'message' => $errorMessage], 500);
            // Adjust the status code and response format based on your needs
        } else {
            // Redirect to a specific route or URL
            return redirect()->route('admin.product'); // Adjust the route name as needed
        }
    }



  


    public function order()
    {
        return view('admin.order');
    }
      
    public function deleteOrder($id)
    {
        // Make sure to validate and sanitize the $id parameter to avoid security issues

        $response = Http::delete('https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/deleteByOrder?id=' . urlencode($id));

        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return response()->json(['status' => 'fail', 'message' => $errorMessage], 500);
            // Adjust the status code and response format based on your needs
        } else {
            // Redirect to a specific route or URL
            return redirect()->route('admin.order'); // Adjust the route name as needed
        }

    }

    public function pdf()
    {
        return view('admin.pdf');
    }

    
}