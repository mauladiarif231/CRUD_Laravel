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

                <h2>Show Item -Laravel</h2>
                <a href="/item" class="btn btn-success">Kembali</a>
                <br/>
                <br/>
                <div class="row justify-content-left">
                @foreach($item as $i)
                        <tr>
                            <ul>
                                    <td><b>Nama :</b> {{ $i->name }}</td> <br/>
                                    <td><b>Deskripsi :</b> {{ $i->detail }}</td>
                            </ul>
                        </tr>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection