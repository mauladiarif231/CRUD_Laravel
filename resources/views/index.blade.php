@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial CRUD - MZXgmly Laravel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" >
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
            

				<style type="text/css">
						.pagination li{
							float: left;
							list-style-type: none;
							margin: 5px:
						}
					</style>
 
						<h2>Data Barang - Laravel</h2>
						<a href="/barang/tambah" class="btn btn-success">Tambah Barang Baru</a>
						
						<br/>
						<br/>
					<div class="row justify-content-center">
						<table class="table table-bordered">
							<tr>
								<th>Nama</th>
								<th>Harga</th>
                                <th>Kategori</th>
                                <th>Stok</th>
								<th>Opsi</th>
							</tr>
							@foreach($barang as $b)
							<tr>
								<td>{{ $b->name }}</td>
								<td>{{ $b->harga }}</td>
                                <td>{{ $b->kategori }}</td>
                                <td>{{ $b->stok }}</td>
								<td>
									<a href="/barang/edit/{{ $b->id }}" class="btn btn-primary">Edit</a>
									
									<a href="/barang/delete/{{ $b->id }}" onclick="return confirm('Yakin ga?')" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
							@endforeach
						</table>
					
						<br/>
						</div>

                        </div>
				</div>
		</div>
 
</body>
</html>
@endsection