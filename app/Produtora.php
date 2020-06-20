<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtora extends Model
{
    protected $table = 'produtoras';
    protected $fillable = ['nome'];
}
