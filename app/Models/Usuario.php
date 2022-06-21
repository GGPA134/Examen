<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Usuario extends Authenticatable
{
    use HasApiTokens,HasFactory;  
    protected $table = 'tblusuarios';
    protected $primaryKey = 'idUsuario';
    protected $fillable = ['nombre','paterno','materno','login','password','activo'];
    protected $hidden = ['login','password'];


}
