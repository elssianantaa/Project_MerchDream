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
    <div class="container pt-5">
    <h3>Tambah Data Pengguna</h3>
    <form action="/user/update/{{ $user->id }}" method="post">

    @csrf
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" error class="@error('name') error @enderror" id="" value="{{ $user->name}}"></td>
                <td>
                    @error('name')
                        {{ $message }} 
                    @enderror
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" value="{{ $user->email }}"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="" value="{{ $user->password }}"></td>
                @error('password')
                    {{ $message }}
                @enderror
            </tr>

            <tr>
                <td>Foto</td>
                <td><input type="file" name="foto" id="" value="{{ $user->foto }}"></td>
            </tr>

            <tr>
                <td><input type="submit" name="" id="" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>
