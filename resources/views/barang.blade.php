<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #24 : Relasi One To Many Eloquent</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="card mt-5">
			<div class="card-body">
            <a href="/barang/tambah" class="btn btn-primary">Input Barang</a>
                    <br/>
                    <br/>
		
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Barang</th>
							<th>Merk</th>                            
							<th>Kategori</th>
							<th width="15%" class="text-center">Stok </th>
                            <th>Opsi</th>
						</tr>
					</thead>
					<tbody>
					
						@foreach($barang as $a)
						<tr>
						<td>{{$a->nama}}</td>
						<td>{{$a->merk}}</td>

							
							<td>
									
							</td>
						

						
						<td>{{$a->stok}}</td>

                            <td>
                                    <a href="/barang/edit/{{ $a->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/barang/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
                                </td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>