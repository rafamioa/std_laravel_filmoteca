<?php

namespace App;

use App\Ator;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    public $timestamps = false;
    protected $visible = ['nome'];

    //RELACIONAMENTOS
    public function atores(){
        return $this->belongsTo(Ator::class);
    }
}
