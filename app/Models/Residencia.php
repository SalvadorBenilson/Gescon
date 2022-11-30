<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residencia extends Model
{
    use HasFactory;
    protected $table = 'residencia';

    protected $fillable = [
        'bloco',
        'predio',
        'condominio_id',
        'usuario_id',
    ];

    protected $guarded = ['id'];
}
