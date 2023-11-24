<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class DetailFishmarket extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='produk';
    protected $fillable=[
        'nama_produk', 'harga', 'gambar', 'deskripsi', 'dibuat'
    ];
}
