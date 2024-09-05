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
        
   
  

@if (Session::get('pesan'))
{{ Session::get('pesan')}}
    @endif
    <table class="table" style="width: 800px;height: 100px;margin-top: -400px">
        <thead class="table-dark" style="font-size: 10px">
            <tr>
                <td>NO</td>
                <td>User_ID</td>
                <td>PRODUK</td>
                <td>JUMLAH</td>              
            </tr>
        </thead>

        <tbody class="table-white" style="font-size: 10px">
            @foreach ($dataCart as $key=>$item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{ $item->user_id}}</td>
                    <td>{{ $item->produk}}</td>
                    <td>{{$item->jumlah}}</td>
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
    
 