<?php

namespace App;

use App\Pais;
use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    // DEFINIÇÕES
    protected $table = 'diretores';
    protected $fillable = ['nome', 'idade', 'biografia','data_nascimento','pais_id', 'imagem'];
    public $timestamps = false;

    // RELACIONAMENTOS
    public function pais(){
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }

    public function filmes(){
        return $this->belongsToMany(Filme::class, 'filmes_diretores', 'diretor_id', 'filme_id');
    }

    // SET E GET
    public function getBiografiaFMTAttribute(){
        return str_limit($this->biografia, 25);
    }


}
