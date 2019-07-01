<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Barang - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">www.malasngoding.com</a>
                </div>
                <div class="card-body">
                    <a href="/barang" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    

                    <form method="post" action="/barang/update/{{ $barang->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama barang .." value=" {{ $barang->nama }}">

                            @if($errors->has('barang'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" name="merk" class="form-control" placeholder="merk barang .." value=" {{ $barang->merk }}">

                            @if($errors->has('merk'))
                                <div class="text-danger">
                                    {{ $errors->first('merk')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label fpr="">Kategori</label>
                            <select name="kategori_id" class="form-control">
                                @foreach($kategori as $k)
                                <option 
                                value="{{$k->id}}" @if ($k->id === $barang->kategori_id) selected @endif>
                                {{$k->kategori}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" placeholder="Stok barang .." value=" {{ $barang->stok }}">

                            @if($errors->has('stok'))
                                <div class="text-danger">
                                    {{ $errors->first('stok')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>