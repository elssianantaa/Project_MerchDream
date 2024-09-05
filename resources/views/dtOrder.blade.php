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

    <div class="" style="margin-bottom: -500px">

   
    {{-- <div class="container" style="padding-top: -500px">
        <h3>Data Produk</h3>
    <div class="row py-2" style="">
    <div class="col-md-6">
        <a href="/produk/create" class="btn btn-primary">Tambah Produk</a>
    </div> --}}

    {{-- <div class="col-md-6">
        <form action="produk" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="search" name="cari" id="" class="form-control" placeholder="search">

                <button class="btn btn-success" type="submit">Go</button>
            </div>
        </form>
    </div> --}}
</div>

@if (Session::get('pesan'))
{{ Session::get('pesan')}}
    @endif
    {{-- Total Data Produk: {{$total_produk}} --}}
    <table class="table" style="width: 800px;height: 100px;margin-botttom:800px">
        <thead class="table-dark" style="font-size: 10px">
            <tr>
                <td>NO</td>
                <td>Nama</td>
                <td>No Handphone</td>
                <td>Alamat</td>
                <td>Metode Pembayaran</td>
                <td>Total Harga</td>
                <td>STATUS</td>

            </tr>
        </thead>

        <tbody class="table-white" style="font-size: 10px">
            @foreach ($pesanan as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->name}}</td>
                    <td><img src="{{ asset('storage/public/'.$item->foto)}}" alt=""  style="width: 50px; height; 50px;"></td>
                    <td>{{$item->nohp}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->metode_pembayaran}}</td>
                    <td>{{$item->total_harga}}</td>
                    <td>
                        <a style="width: 60px;height: 20px;font-size: 10px;" href="/produk/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                        <a style="width: 60px;height: 20px;font-size: 10px;" href="/produk/edit/{{ $item->id }}" class="btn btn-info">Edit</a>
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
    
 