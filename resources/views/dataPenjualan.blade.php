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

    <div class="container" style="">
        <h3>Data Penjualan</h3>
   
  

@if (Session::get('pesan'))
{{ Session::get('pesan')}}
    @endif
    <table class="table" style="width: 800px;height: 100px;margin-top: -600px">
        <thead class="table-dark" style="font-size: 10px">
            <tr>
                <td>NO</td>
                <td>HO HANDPHONE</td>
                <td>ALAMAT</td>
                <td>WAKTU PEMESANAN</td>
                <td>STATUS</td>
              
            </tr>
        </thead>

        <tbody class="table-white" style="font-size: 10px">
            @foreach ($pesananProduk as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{ $item->nohp }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->wktu_pemesanan)->format('d M Y, H:i') }}</td>
                    <td>{{$item->status}}</td>
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
    
 