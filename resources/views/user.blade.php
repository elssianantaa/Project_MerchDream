<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset ('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
    @extends('template')
    @section('content')

    <div style="margin-bottom: 500px">
        

    <h3>Data Pengguna</h3>
    <div class="row">
    <div class="col-md-6">
        <a href="/user/create" class="btn btn-primary">Tambah Data</a><br>
    </div>
    <div class="col-md-6">
        <form action="user" method="post" class="">
            @csrf
            <div class="input-group mb-3">
                
                <input type="search" name="cari" id="" class="form-control" placeholder="search"> 
                
                <button class="btn btn-primary" type="submit">Go</button>
            </div>
        </form>
    </div>
</div>

@if (Session::get('pesan'))
    {{ Session::get('pesan')}}
@endif


{{-- Total Data Pengguna: {{ $total_user}} --}}
<table class="table" style="width: 800px;height: 100px">
    <thead class="table-dark">
        <tr>
            <td>NO</td>
            <td>NAMA</td>
            <td>EMAIL</td>
            <td>LEVEL</td>
            <td>FOTO</td>
            <td>AKSI</td>
        </tr>
    </thead>

    <tbody class="table-white">
        @foreach ($user as $key => $item)
        <tr>
           <td>{{$key+1}}</td>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>{{$item->level->nm_level}}</td>
           <td><img src="{{ asset('storage/public/'.$item->foto) }}" alt="" style="width: 50px; height; 50px;"></td>
           <td>
            <a style="width: 60px;height: 30px;font-size: 10px;" href="/user/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
            <a style="width: 60px;height: 30px;font-size: 10px;" href="/user/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
           </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>

    
