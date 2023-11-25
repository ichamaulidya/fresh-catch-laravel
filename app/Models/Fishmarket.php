<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Fishmarket extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='produk';
    protected $fillable=[
        'user_id','nama_produk', 'harga', 'gambar', 'deskripsi', 'dibuat'
    ];
}