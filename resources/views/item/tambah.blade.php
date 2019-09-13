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
                        <h2>Tamabah Item - Lravel</h2>
                        <a href="/item" class="btn btn-success">Kembali</a>

                        <br/>
                        <br/>

                        <form action="/item/store" method="post">
                            {{ csrf_field() }}
                            <div class="card">
                                <div class="card-body">
                                    Nama
                                    <input class="form-control" type="text" required name="nama">
                                    Deskripsi
                                    <input class="form-control" type="text" required name="detail">
                                    <br/>
                                    <input type="submit" value="Simpan" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

@endsection