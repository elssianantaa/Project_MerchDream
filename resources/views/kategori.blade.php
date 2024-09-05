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

    <div class="" style="margin-bottom: 500px">

   
    <div class="container" style="padding-top: -500px">
        <h3>Data Kategori</h3>
    <div class="row py-2" style="">
    <div class="col-md-6">
        <a href="/kategori/create" class="btn btn-primary">Tambah Kategori</a>
    </div>

    <div class="col-md-6">
        <form action="kategori" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="search" name="cari" id="" class="form-control" placeholder="search">

                <button class="btn btn-success" type="submit">Go</button>
            </div>
        </form>
    </div>
</div>

@if (Session::get('pesan'))
{{ Session::get('pesan')}}
    @endif
    {{-- Total Data Produk: {{$total_produk}} --}}
    <table class="table">
        <thead class="table-dark" style="font-size: 10px">
            <tr>
                <td>NO</td>
                <td>KATEGORI</td>
                <td>AKSI</td>
            </tr>
        </thead>

        <tbody class="table-white" style="font-size: 10px">
            @foreach ($kategori as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->nm_kategori}}</td>
                    <td>
                        <a style="width: 60px;height: 20px;font-size: 10px;" href="/kategori/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                        <a style="width: 60px;height: 20px;font-size: 10px;" href="/kategori/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    @endsection
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>
    
