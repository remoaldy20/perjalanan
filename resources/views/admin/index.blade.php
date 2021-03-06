@extends('layouts.app')
@section('content')
<style>
    .btn-primary {
        color: #fff;
        background-color: #df6951;
        border-color: #df6951;
        
    }
    .btn-primary:hover{
        color: #fff;
        background-color: #df6951;
        border-color: #df6951;
    }
    .btn-primary:focus{
        color: #fff;
        background-color: #df6951;
        border-color: #df6951;
    }
    .fs-9 {
    font-size: 35px !important;
    }
</style>

<h3 class="mb-4 fs-9 fw-bold">Data Login User</h3>
<div class="mb-5">
    <a href="/admin/cetak-pdf" class="btn btn-sm btn-primary float-left" target="_blank">CETAK PDF</a>
</div>
<div class="mt-5"> 
    <table class="table table-bordered table-hover table-responsive ">
        <thead>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach ($User as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->no_telp}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->email}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
    
@endsection
