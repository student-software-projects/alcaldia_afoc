<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table='usuarios';
    protected $primaryKey='id';
    protected $fillable =[
        'names','lastnames','email','password'
    ];

    protected $hidden=[
        'password'
    ];
}
