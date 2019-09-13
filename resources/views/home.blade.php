@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <tr>
                    <td><a href="/barang" class="btn btn-primary" style="margin-left: 280px;">Barang</a></td>
                    <td><a href="/item" class="btn btn-success">Item</a></td>
                </tr> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
