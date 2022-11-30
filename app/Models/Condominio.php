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
        'user_id',
    ];

    protected $guarded = ['id'];

    //Relacionamento via Model do User que cadastrou o Condominio
    public function user()
    {
        return $this->hasMany(User::class,'user_id','id');
    }
}
