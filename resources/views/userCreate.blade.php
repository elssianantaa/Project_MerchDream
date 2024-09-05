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

    <div class="col-md-10 container pt-5">

        <h3>Tambah Data Pengguna</h3>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @endif
        
        <form action="/user/create" method="post" class="" enctype="multipart/form-data">
          
        
        @csrf
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="name" error class="@error('name') error @enderror" id="" value="{{old('name')}}"></td>
                    <td>
                        @error('name')
                            {{ $message }}
                        @enderror
                    </td>
                </tr>
        
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" id="" value="{{old('email')}}"></td>
                </tr>
        
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" id="" value="{{old('password')}}"></td>
                    @error('password')
                        {{ $message }}
                    @enderror
                </tr>
    
                <tr>
                    <td>Level</td>
                    <td>
                        <select name="levels.id" id="">
                            @foreach ($levels as $item)
                                <option value="{{ $item->id}}">{{ $item->nm_level }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
    
                <tr>
                    <td>Foto</td>
                    <td><input type="file" name="foto" id=" "></td>
                </tr>
        
                <tr>
                    <td><input type="submit" name="" id="" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </div>

    {{-- @endsection --}}
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>
    


