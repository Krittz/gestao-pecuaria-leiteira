<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = 'animais';

    protected $fillable = [
        'nome',
        'imagem',
        'sexo',
        'nascimento',
        'prenhez',
        'mae_id',
        'pai_id',
        'ativo'
    ];

    public function mae()
    {
        return $this->belongsTo(Animal::class, 'mae_id');
    }

    public function pai()
    {
        return $this->belongsTo(Animal::class, 'pai_id');
    }
    protected static function booted()
    {
        static::addGlobalScope('ativo', function ($query) {
            $query->where('ativo', true);
        });
    }
}
