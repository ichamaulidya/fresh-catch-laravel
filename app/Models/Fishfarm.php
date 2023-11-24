<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Fishfarm extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='pembudidaya';
    protected $fillable=[
        'nama', 'alamat', 'latitude', 'deskripsi', 'gambar', 'longtitude', 'kontak'
    ];
}
