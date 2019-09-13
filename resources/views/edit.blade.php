@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial CRUD - MZXgmly Laravel - Laravel</title>
</head>
<body>
<div class="card">
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-5">

<h3>Edit Data Barang</h3>

<a href="/barang" class="btn btn-success">Kembali</a>
@foreach($barang as $b)
    <form action="/barang/update" method="POST">

    {{ csrf_field() }}
        <div class="card">
        <div class="card-body">
        <input type="hidden" name='id' value="{{ $b->id }}">
		Nama 
        <input class="form-control" type="text" name="nama" required="required" value="{{ $b->name }}"> 
		Harga 
        <input class="form-control" type="text" name="harga" required="required" value="{{ $b->harga }}">
        Kategori 
        <input class="form-control" type="text" name="kategori" required="required" value="{{ $b->kategori }}">
        Stok 
        <input class="form-control" type="text" name="stok" required="required" value="{{ $b->stok }}"> <br/>
		<input type="submit" value="Update Data" class="btn btn-primary">
    </div>    
</div>
    </form>
    @endforeach
                 </div>
            </div>
        </div>
    </div>  

</body>
</html>
@endsection