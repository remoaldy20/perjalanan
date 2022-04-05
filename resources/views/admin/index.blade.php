@extends('layouts.app')
@section('content')
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
