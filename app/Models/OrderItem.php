<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'order_items';
    protected $fillable = [
        'id_cart', 'id_produk', 'nama_produk', 'harga', 'kuantitas',
    ];

    public function cart()
    {
        return $this->belongsTo(Carts::class, 'id_cart');
    }
}
