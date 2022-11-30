<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    use HasFactory;
    protected $table = 'condominio';

    protected $fillable = [
        'nome',
        'provincia',
        'municipio',
        'bairro',
        'descrisao',
        'usuario_id',
    ];

    protected $guarded = ['id'];
}
