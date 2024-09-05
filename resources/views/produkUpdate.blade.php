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

        <h3>Update Data Produk</h3>

       
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @endif
    
    <form action="/produk/update/{{ $produk->id }}" enctype="multipart/form-data" method="post" class="" >
      
    @csrf
        <table>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="produk" error class="@error('name') error @enderror" id="" value="{{ $produk->produk}}"></td>
                <td>
                    @error('name')
                        {{ $message }}
                    @enderror
                </td>
            </tr>
    
            
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="desk" id="" value="{{ $produk->desk}}"></td>
            </tr>
            
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" id="" value="{{ $produk->stok}}"></td>
            </tr>
            
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" id="" value="{{ $produk->harga}}"></td>
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
                <td>Foto</td>
                @if ($produk->foto)
                    <div>
                        <td><img class="mt-2" src="{{ asset('storage/public/'.$produk->foto)}}" alt=""  style="width: 150px; height; 150px;border-radius: 10px"></td>

                    </div>
                @endif
                <td><input style="" type="file" name="foto" id="" value="{{ $produk->foto}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="" id="" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
        {{-- @endif --}}
    </div>

</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>