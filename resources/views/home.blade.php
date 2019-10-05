@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6"><h3>Data Warung</h3>
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-4">
                        </div>
                        <table class='table table-hover'>
                        <tr>
                            <th>Nama Warung</th>
                            <th>Pemilik</th>
                            <th>Kota</th>
                            <th>Alamat</th>
                            <th></th>
                        </tr>
                        @foreach($datawarung as $warung)
                        <tr>
                            <td>{{$warung->namawarung}}</td>
                            <td>{{$warung->pemilikwarung}}</td>
                            <td>{{$warung->kota}}</td>
                            <td>{{$warung->alamat}}</td>
                            <td><a href="/home/{{$warung->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                            <a href="/home/{{$warung->id}}/delete" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>

                        <form action="/home/create" method="POST">
                             @csrf
                                <td><input name="namawarung" class="form-control form-control-sm" type="text" placeholder="Nama Warung"></td>
                                <td><input name="pemilikwarung" class="form-control form-control-sm" type="text" placeholder="Pemilik"></td>
                                <td><input name="kota" class="form-control form-control-sm" type="text" placeholder="Kota"></td>
                                <td><input name="alamat" class="form-control form-control-sm" type="text" placeholder="Alamat"></td>
                                <td><button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
                                    <button type="reset" class="btn btn-secondary btn-sm">Reset</button></td>
                            </form>



@endsection

