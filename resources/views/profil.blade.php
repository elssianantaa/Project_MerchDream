<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset ('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
    <style>
        .animated-link {
            position: relative;
            display: inline-block;
            transition: color 0.3s ease; /* Animasi perubahan warna */
        }
    
        .animated-link::after {
            content: "";
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #b5b5b5; /* Warna underline */
            transition: transform 0.3s ease;
        }
    
        .animated-link:hover::after {
            transform: scaleX(1);
        }
    
        .animated-link:hover {
            color: #ffffff; /* Warna teks saat hover */
        }
    
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg d-flex m-lg-auto fixed-top" style="background-color:black ;box-shadow: 20px;height:70px;width:100%;border-radius:6px">
        <a style="text-decoration: none;font-size: 30px;color: #b5b5b5;margin-left: 20px;" href="#">Merchdream</a>
        <div class="container justify-content-center" style="margin-left: 430px;">
            <div class="collapse navbar-collapse ms-5">
                <ul class="navbar-nav container mr-5" style="color: #b5b5b5;">
                    <li class="nav-item mr-4">
                        <a href="/tampilan" class="nav-link animated-link" style="color: #b5b5b5;">Home</a>
                    </li>

                    <li class="nav-item mr-4">
                        <a href="/shop" class="nav-link animated-link" style="color: #b5b5b5;">Shop</a>
                    </li>

                    <li class="nav-item">
                        <a href="/tmpkategori" class="nav-link animated-link" style="color: #b5b5b5;">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link animated-link" style="color: #b5b5b5;">AboutUs</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link animated-link" style="color: #b5b5b5;">ContactUs</a>
                    </li>
                </ul>
            </div>

            <div>
                <a href="/profil">
                <ul class="navbar-nav container mr-5" style="color: #b5b5b5;">
                    <li class="nav-item" style="margin-left: 20px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" 
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path style="color: #b5b5b5;margin-left: 20px;"
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                    </li>
                </a>
                    
                    <a href="/cart">
                    <li class="nav-item bold" style="margin-left: 5px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16"  style="color: #b5b5b5;">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                          </svg>
                    </li>
                </a>
                </ul>
            </div> 
        </div>
    </nav>

  
    <div class="container pt-5" style="margin-top: 100px;position: relative; background: linear-gradient(to right, #c8bad8, #746991); box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.2);border-radius: 20px;">
        <div class="row card align align-items-center"
        style="width: 340px; height: 300px; border: none; border-radius: 20px; box-shadow: #8f8a8a 2px 2px 20px;background-color:#ffffff;margin-left: 290px">
            <div class="col-4 d-flex">
                <form action="">
                    @csrf
                    <img src="{{ asset('storage/public/' . Auth::user()->foto) }}" alt="Foto Profil" style="width: 100px; height: 100px; border-radius: 90px;margin-top: 50px">
                    <h3 style="margin-left: 25px">{{ Auth::user()->name }}</h3>
                    <p>{{ Auth::user()->email }}</p>
                </form>
                
            </div>

            <div class="col-4" >
                <button style="border: none;width: 90px;height: 30px;background-color:#aaa0b5;border-radius: 10px;">  <a style="text-decoration: none;color: white;" href="/logout">Logout</a></button>
                {{-- <button style="border: none;width: 90px;height: 30px;background-color:#aaa0b5;border-radius: 10px;margin-left:80px;"><a style="text-decoration: none;color: white;" href="/register">Add Acc</a></button> --}}
                
            </div>
            {{-- <div class="col-4" >
            </div> --}}
        </div>
    </div>
</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></scrip>
