<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $table = 'diretores';
    protected $fillable = ['nome',	'idade', 'biografia','data_nascimento'	,'pais_id'];
    public $timestamps = false;

    
}
