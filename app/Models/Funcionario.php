<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'sobrenome',
        'empresa_id',
        'email',
        'telefone',
        'created_at',
        'updated_at',
    ];
    public function empresa()
    {
        return $this->belongsTo(Empresa::class,'empresa_id','id');
    }
}
