<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Auth\User as Authenticatable; 

class Login extends Authenticatable
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection= 'user';
    protected $filable =[
        'nama', 'alamat', 'email', 'notlp', 'password', 'role'
    ];


}
