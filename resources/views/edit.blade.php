@extends('layouts.app')

@section('content')

                        
                        <form action="/home/{{$datawarung->id}}/update" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                            <td><input name="namawarung" class="form-control form-control-sm" type="text" value="{{$datawarung->namawarung}}"></td>
                            <td><input name="pemilikwarung" class="form-control form-control-sm" type="text" value="{{$datawarung->pemilikwarung}}"></td>
                            <td><input name="kota" class="form-control form-control-sm" type="text" value="{{$datawarung->kota}}"></td>
                            <td><input name="alamat" class="form-control form-control-sm" type="text" value="{{$datawarung->alamat}}"></td>
                            <td><button type="submit" class="btn btn-primary btn-sm">Update</button></td>
                            </form>



@endsection

