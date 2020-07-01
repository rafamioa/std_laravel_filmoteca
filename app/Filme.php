<?php

namespace App;

use App\Pais;
use App\Genero;
use App\Produtora;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    // DEFINIÇÕES
    protected $table = "filmes";
    protected $primaryKey = 'id'; 
    protected $fillable = ['titulo', 'sinopse','data_lancamento', 'duracao', 'imagem','pais_id','classificacao_id','produtora_id'];
    public $timestamps = false;

    // RELACIONAMENTOS
    public function pais(){
        return $this->hasOne(Pais::class, 'id', 'pais_id');
    }

    public function produtora(){
        return $this->hasOne(Produtora::class, 'id', 'produtora_id');
    }

    public function classificacao(){
        return $this->hasOne(Classificacao::class, 'id', 'classificacao_id');
    }

    public function generos(){
       return $this->belongsToMany(Genero::class, 'filmes_generos', 'filme_id', 'genero_id'); 
    }  

}
