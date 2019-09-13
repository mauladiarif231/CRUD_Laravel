@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Tutorial CRUD - MZXgmly Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-body">

                <h2>Data Item -Laravel</h2>
                <a href="/item/tambah" class="btn btn-success">Tambah Item</a>

                <br/>
                <br/>

                <div class="row justify-content-center">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td>Deskripsi</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($item as $i)
                        <tr>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->detail }}</td>
                            <td>
                                <a href="/item/show/{{ $i->id }}" class="btn btn-success">Show</a>
                                <a href="/item/edit/{{ $i->id }}" class="btn btn-primary">Edit</a>
                                <a href="/item/delete/{{ $i->id }}" class="btn btn-danger" onclick="return confirm('Yakin data dihapus?')" >Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection