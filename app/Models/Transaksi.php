<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='cart';
    protected $fillable = [
        'user_id', 'produk_id','nama_produk','harga','kuantitas',
    ];
}