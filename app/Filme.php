<?php

namespace App;

use App\Pais;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = "filmes";
    protected $fillable = ['titulo', 'sinopse','data_lancamento', 'duracao', 'pais_id','classificacao_id','produtora_id'];
    public $timestamps = false;

    public function pais(){
        return $this->belongsTo(Pais::class);
    }


}
