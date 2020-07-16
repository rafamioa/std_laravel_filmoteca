<?php

namespace App;

use App\Filme;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $primaryKey = 'id'; 
    protected $fillable =['nome'];

    public function generos(){
        return $this->belongsToMany(Filme::class, 'filmes_generos', 'genero_id', 'filme_id');
    }
}
