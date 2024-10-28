<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inseminacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'receptora_id',
        'doadora_id',
        'padriador_id',
        'data_aplicacao'
    ];

    public function receptora()
    {
        return $this->belongsTo(Animal::class, 'receptora_id');
    }

    public function doadora()
    {
        return $this->belongsTo(Animal::class, 'doadora_id');
    }
    public function pai()
    {
        return $this->belongsTo(Animal::class, 'padriador_id');
    }
    protected function casts(): array
    {
        return [
            'data_aplicacao' => 'date'
        ];
    }
}
