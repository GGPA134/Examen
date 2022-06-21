<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examenpreguntas extends Model
{
    use HasFactory;
    protected $table = 'tblexamen';
    protected $primaryKey = 'idExamen';
    protected $fillable='idUsuario';
}
