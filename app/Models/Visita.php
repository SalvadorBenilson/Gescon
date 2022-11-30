<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    use HasFactory;
    protected $table = 'visita';

    protected $fillable = [
        'nome',
        'autorizado',
        'data_entrada',
        'data_saida',
        'residencia_id',
        'user_id',
    ];

    protected $guarded = ['id'];

    //Relacionamento via Model do User que cadastrou a Visita
    public function user()
    {
        return $this->hasMany(User::class,'user_id','id');
    }

    //Relacionamento via Model do Residencia que cadastrou o Residente
    public function residencia()
    {
        return $this->hasMany(Residencia::class,'residencia_id','id');
    }
}
