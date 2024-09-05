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
    
    <div class="col-md-10 container pt-5">
    <h3>Tambah Data Kategori</h3>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/kategori/create" method="post" enctype="multipart/form-data">
    @csrf

    <table>
        <tr>
            <td>Nama Kategori</td>
            <td><input type="text" name="nm_kategori" id="" value="{{old('nm_kategori')}}"></td>
        </tr>

        <tr>
            <td><input type="submit" name="" id="" value="Tambahkan"></td>
        </tr>
    </table>
    </form>
</div>
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>
