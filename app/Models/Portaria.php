<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portaria extends Model
{
    use HasFactory;
    protected $table = 'portaria';

    protected $fillable = [
        'numero',
        'condominio',
        'usuario_id',
    ];

    protected $guarded = ['id'];
}
