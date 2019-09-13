@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial CRUD - MZXgmly Laravel</title>
</head>
<body>
<div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-5">
 
	<h2><a>Tambah barang - Laravel</a></h2>
 
	<a href="/barang" class="btn btn-success"> Kembali</a>
	
	<br/>
	<br/>
    
	<form action="/barang/store" method="post">
		{{ csrf_field() }}
        <div class="card">
            <div class="card-body">
		Nama 
        <input class="form-control" type="text" name="nama" required="required"> 
		Harga 
        <input class="form-control" type="text" name="harga" required="required">
        Kategori 
        <input class="form-control" type="text" name="kategori" required="required">
        Stok 
        <input class="form-control" type="text" name="stok" required="required"> <br/>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
                </div>
            </div>
        </div>
    </div>
	</form>
    </table>
</body>
</html>
@endsection