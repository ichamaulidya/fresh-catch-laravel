<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='chat';
    protected $fillable = ['pesan', 'pengirim', 'waktu', 'chat_room_id'];

    
}