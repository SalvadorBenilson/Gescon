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
        'user_id',
    ];

    protected $guarded = ['id'];

    //Relacionamento via Model do User que cadastrou a Residencia
    public function user()
    {
        return $this->hasMany(User::class,'user_id','id');
    }

    //Relacionamento via Model do User que cadastrou a Residencia
    public function condominio()
    {
        return $this->hasMany(Condominio::class,'condominio_id','id');
    }
}
