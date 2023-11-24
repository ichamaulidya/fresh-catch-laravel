<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Fishinfo extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='artikel';
    protected $fillable=[
        'judul', 'tgl_publikasi', 'gambar', 'deskripsi'
    ];
}
