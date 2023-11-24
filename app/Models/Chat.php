<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='chat';
    protected $fillable=[
        'pengirim', 'pesan', 'waktu', 'chat_room_id'
    ];
    public function users(){
        return $this->belongsTo(User::class, 'pengirim');
    }
}
