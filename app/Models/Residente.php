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
        'user_id',
    ];

    protected $guarded = ['id'];

    //Relacionamento via Model do User que cadastrou o Residente
    public function user()
    {
        return $this->hasMany(User::class);
    }

    //Relacionamento via Model do Residencia que cadastrou o Residente
    public function residencia()
    {
        return $this->hasMany(Residencia::class);
    }
}
