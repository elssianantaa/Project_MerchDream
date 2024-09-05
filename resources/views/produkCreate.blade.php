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
    <h3>Tambah Data Produk</h3>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/produk/create" method="post" enctype="multipart/form-data">
    @csrf

    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="produk" id="" value="{{old('produk')}}"></td>
        </tr>

        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto" id=""></td>
        </tr>

        <tr>
            <td>Deskripsi</td>
            <td><input type="text" name="desk" id="" value="{{old('desk')}}"></td>
        </tr>

        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok" id="" value="{{old('stok')}}"></td>
        </tr>

        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" id="" value="{{old('harga')}}"></td>
        </tr>

        <tr>
            <td>Kategori</td>
            <td>
                <select name="kategoris.id" id="">
                    @foreach ($kategori as $item)
                        <option value="{{ $item->id}}">{{ $item->nm_kategori }}</option>
                    @endforeach
                </select>
            </td>
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
