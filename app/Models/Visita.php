<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;
    protected $table = 'visita';

    protected $fillable = [
        'condominio',
        'portaria',
        'residencia',
        'nome',
        'autorizado',
        'data_entrada',
        'data_saida',
        'usuario_id',
    ];
}
