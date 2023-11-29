<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection= 'waiting';
    protected $fillable = [
        'user_id', 'produk_id', 'nama_produk', 'harga', 'kuantitas',
    ];

    public function produk()
    {
        return $this->belongsTo(DetailFishmarket::class, 'produk_id');
    }

}
    