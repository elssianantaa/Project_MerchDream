<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset ('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
</head>
<body style="background-color: #6c73c1;">
    <div class="">
            <div class="card" style="border-radius: 30px;background-color: rgb(255, 255, 255);width: 170vh;height: 80vh; margin-top: 50px;margin-left: 100px;;">
                <div class="row" style="margin-left: 100px;">
                    <div style="padding-top: 100px">
                        <h4 style="margin-top: -45px">Welcome to Your MerchDream!</h4>
                        <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                            Log in to Explore the Latest Albums <br>
                            and Exclusive Merchandise
                        </p>
                            <img style="width: 200px;height: 200px;" src="imgg/coba.png" alt="">
                        {{-- <img style="width: 200px; height: 200px" src="https://i.pinimg.com/736x/30/c2/11/30c21177d2cb38fd130ed58bce50b6e5.jpg" alt=""> --}}
                        </div>
                    <form action="/register/create" method="post" enctype="multipart/form-data" style="margin-left: 420px;margin-top: -315px;">
                        @csrf

                        @if ($errors->any())
                            @foreach ($errors->all() as $item)
                                <ul>
                                    <li>{{ $item }}</li>
                                </ul>
                            @endforeach
                        @endif

                        <h5 style="padding-top: 20px;">Register</h5>

                        <div class="" style="padding-top: 10px;">
                            <input style="border-radius: 5px" type="text" name="name" id="" placeholder="Nama" value="{{old('name')}}">
                        </div>

                        <div class="" style="padding-top: 10px;">
                            <input style="border-radius: 5px" type="email" name="email" id="" placeholder="Email" value="{{old('email')}}">
                        </div>

                        <div class="" style="padding-top: 10px;">
                            <input style="border-radius: 5px" type="text" name="password" id="" placeholder="Password" value="{{old('password')}}">
                        </div>

                        <div class="" style="padding-top: 10px;">
                            <input style="border-radius: 5px" type="password" name="password" id="password" placeholder="Confirm Password">
                        </div>

                        <div class="btn-dark " style="padding-top: 10px;">
                            <button style="border: none;height: 30px;width: 190px;color: white;background-color: #000000;border-radius: 10px;" type="submit">Login</button>
                        </div>

                        <div style="border: none;padding-top: 10px;">
                            <a style="font-size: small;text-decoration: none;color: #b6b6b6;margin-top: 10px;" href="#">Forgot password?</a>
                            <p style="color: #000000;">Don't have an account? <a href=""
                            style="color: #8cac89;text-decoration: none;">Register here</a></p>
                        </div>

                        <div style="padding-top: 20px;">
                            <a style="text-decoration: none;color: #b6b6b6;" href="#!" class="">Terms of use.</a>
                            <a style="text-decoration: none;color: #b6b6b6;" href="#!" class="">Privacy policy</a>
                       </div>
                    </form>
                </div>
            </div>
    </div>
    

    
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>