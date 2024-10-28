<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producao extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'periodo',
        'litragem'
    ];
    public function animais()
    {
        return $this->belongsToManu(Animal::class, 'animal_producao');
    }
    protected function casts(): array
    {
        return [
            'data' => 'datetime',
            'litragem' => 'float',
        ];
    }
}
