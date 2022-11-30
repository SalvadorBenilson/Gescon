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
        'condominio_id',
        'user_id',
    ];

    protected $guarded = ['id'];

    //Relacionamento via Model do User que cadastrou a Portaria
    public function user()
    {
        return $this->hasMany(User::class,'user_id','id');
    }

    //Relacionamento via Model do Condominio que cadastrou a Portaria
    public function condominio()
    {
        return $this->hasMany(Condominio::class,'condominio_id','id');
    }
}
