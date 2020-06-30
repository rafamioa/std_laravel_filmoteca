<?php

namespace App;

use App\Pais;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    // DEFINIÇÕES
    protected $table = "atores";
    protected $fillable = ['nome', 'biografia','idade', 'data_nascimento', 'pais_id', 'imagem'];
    protected $visible = ['nome', 'biografia', 'idade', 'data_nascimento','pais_id'];
    public $timestamps = false;

    // RELACIONAMENTOS
    public function pais(){
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }

    // SET E GET DE ATRIBUTOS
    public function getBiografiaFMTAttribute()
    {
        return str_limit($this->biografia, 25);
    }

}
