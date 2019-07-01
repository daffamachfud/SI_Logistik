<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    public $table = "kategori";
    public function barangs(){
        return $this->hasMany('App\Barang');
    }
}
