<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $table = "barang";
    protected $fillable = [
        'nama',
        'merk',
        'kategori_id',
        'stok'
    ];

    public $timestamps = false;
    public function kategoris(){
        return $this->belongsTo('App\Kategori');
    }
}
