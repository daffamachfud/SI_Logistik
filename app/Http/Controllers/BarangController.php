<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;


class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        $kategori = kategori::all();
        return view('barang',compact('kategori','barang'));
    }

    public function tambah()
    {
        $kategori = kategori::all();
    	return view('barang_tambah',compact('kategori','barang'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'merk' =>'required',
            'kategori_id' =>'required',
            'stok' =>'required',
        ]);

        Barang::create([
    		'nama' => $request->nama,
            'merk' => $request->merk,
    		'kategori_id' => $request->kategori_id,
    		'stok' => $request->stok
        ]);
        
        return redirect('/barang');
    }

    public function edit($id)
    {
       $barang = Barang::find($id);
       $kategori = Kategori::all();

       return view('barang_edit',compact('barang','kategori'));
    }

    public function update($id, Request $request)
    {
     $this->validate($request,[
	     'nama' => 'required',
        'merk' => 'required',
	    'kategori_id' => 'required',
	    'stok' => 'required'
        
    ]);

    $barang = Barang::find($id);
    $barang->nama = $request->nama;
    $barang->merk = $request->merk;
    $barang->kategori_id = $request->kategori_id;
    $barang->stok = $request->stok;

    $barang->save();
    return redirect('/barang');
    }

    public function delete($id)
{
    $barang = Barang::find($id);
    $barang->delete();
    return redirect('/barang');
}

}
