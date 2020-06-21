<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtora extends Model
{
    protected $table = 'produtoras';
    protected $fillable = ['nome','historia', 'data_fundacao'];
    public $timestamps = true;

    /*
    public function getDataFundacaoAttribute(){
        return date('d/m/Y', strototime($this->data_fundacao));
    }
    */
    public function getHistoriaPRAttribute()
    {
        return str_limit($this->historia, 25);
    }
}
