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
        return $this->hasMany(User::class);
    }

    //Relacionamento via Model do User que cadastrou a Residencia
    public function condominio()
    {
        return $this->hasMany(Condominio::class);
    }

    public function residente()
    {
        return $this->belongsTo(Residente::class);
    }

    public function visita()
    {
        return $this->belongsTo(Residente::class);
    }
}
