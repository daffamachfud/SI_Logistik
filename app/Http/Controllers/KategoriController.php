<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;


class KategoriController extends Controller

{
    public function index(){
        $kategori = kategori::all();
        return view('barang',compact('kategori','barang'));
    }
}


