<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fishinfo;
use App\Models\Fishmarket;
use App\Models\Fishfarm;
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
        $gambar = $request->file('gambar'); // Menggunakan request file untuk mengelola pengunggahan gambar
        $deskripsi = $request->input('deskripsi');

        // Validasi file
        if ($gambar && $gambar->isValid()) {
            // Simpan gambar ke direktori yang diinginkan (misalnya, public/assets/img/fishinfo)
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/img/artikel'), $namaGambar);
        } else {
            return 'Error: Gambar tidak diunggah atau tidak valid.';
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
                return redirect('/admin.fishinfo');
                // Gantilah 'login' dengan nama rute yang sesuai
            }
        } else {
            // Tangani kesalahan, file tidak diunggah atau tidak valid
            return 'Error: Gambar tidak diunggah atau tidak valid.';
        }
    }

            
        public function updateFishFarm(Request $request)
        {
            $id = $request->input('id');
            $nama = $request->input('nama');
            $alamat = $request->input('alamat');
            $deskripsi = $request->input('deskripsi');
            $latitude = $request->input('latitude');
            $longtitude = $request->input('longtitude');
            $kontak = $request->input('kontak');
            $link = $request->input('link');

            // Check if a new image is provided
            if ($request->hasFile('gambar')) {
                $gambar = $request->file('gambar');

                // Validate image type
                $allowedExtensions = ['jpeg', 'jpg', 'png'];
                if (!in_array(strtolower($gambar->getClientOriginalExtension()), $allowedExtensions)) {
                    return 'Error: Tipe gambar tidak valid. Gunakan jpeg, jpg, atau png.';
                }

                // Validate and save the new image to the specified directory
                if ($gambar->isValid()) {
                    $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
                    $gambar->move(public_path('assets/img/fishfarm'), $namaGambar);

                    // Include the new image in the update operation
                    $response = Http::withOptions(['verify' => false])->put("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/updatePembudidaya?id=$id&nama=$nama&alamat=$alamat&deskripsi=$deskripsi&gambar=$namaGambar&latitude=$latitude&longtitude=$longtitude&kontak=$kontak&link=$link");
                } else {
                    return 'Error: Gambar tidak valid.';
                }
            } else {
                // If no new image is provided, exclude 'gambar' from the update operation
                $response = Http::withOptions(['verify' => false])->put("https://ap-southeast-1.aws.data.mongodb-api.com/app/application-0-bcdsp/endpoint/updatePembudidaya?id=$id&nama=$nama&alamat=$alamat&deskripsi=$deskripsi&latitude=$latitude&longtitude=$longtitude&kontak=$kontak&link=$link");
            }

            Log::info("Update Response: " . $response->body());

            if ($response->failed()) {
                // Handle error
                $errorMessage = $response->body();
                return $errorMessage; // Change this to handle the error as needed
            } else {
                // Redirect to the fishinfo page
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
                return redirect('/admin.fishinfo');
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
        $gambar = $request->file('gambar');

        // Validasi file 
        if ($gambar && $gambar->isValid()) {
            // Simpan gambar ke direktori yang diinginkan (misalnya, public/assets/img/produk)
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('assets/img/produk'), $namaGambar);
        } else {
            return 'Error: Gambar tidak diunggah atau tidak valid.';
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

    public function waitingPayment()
    {
        return view('admin.waitingPayment');
    }

    public function packing()
    {
        return view('admin.packing');
    }

    public function sent()
    {
        return view('admin.sent');
    }

    public function donet()
    {
        return view('admin.done');
    }

    public function chat()
    {
        return view('admin.chat');
    }


}