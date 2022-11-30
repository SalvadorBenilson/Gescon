<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    use HasFactory;
    protected $table = 'residente';

    protected $fillable = [
        'nome',
        'residencia_id',
        'usuario_id',
    ];

    protected $guarded = ['id'];
}
