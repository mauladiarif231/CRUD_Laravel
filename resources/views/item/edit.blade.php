@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Tutorial CRUD - MZXgmly Laravel</title>
</head>
<body>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <h2>Edit Item - Laravel</h2>
                        <a href="/item" class="btn btn-success">Kembali</a>

                        <br/>
                        <br/>
                        @foreach($item as $i)
                        <form action="/item/update" method="POST">
                            {{ csrf_field() }}
                            <div class="card">
                                <div class="card-body">
                                    <input type="hidden" name="id" value="{{ $i->id }}">
                                    Nama
                                    <input class="form-control" type="text" required name="nama" value="{{ $i->name }}">
                                    Deskripsi
                                    <input class="form-control" type="text" required name="detail" value="{{ $i->detail }}">
                                    <br/>
                                    <input type="submit" value="Update" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection