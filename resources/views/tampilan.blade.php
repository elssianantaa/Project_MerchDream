<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ asset ('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css')}}">
    <style>
        
        .image-container {
            position: relative;
            width: 300px;
            height: 300px;
            overflow: hidden;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgb(255, 255, 255);
            font-size: 1.5rem;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            pointer-events: none;
            text-align: center;
        }

        .image-container.active .text-overlay {
            opacity: 1;
        }
    </style>

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

    button:hover .stars {
        display: block;
        filter: drop-shadow(0 0 10px 
        black);
    }

</style>

</head>

<body >
    <section>

        <nav class="navbar navbar-expand-lg d-flex m-lg-auto fixed-top" style="background-color:black ;box-shadow: 20px;height:70px;width:100%;border-radius:6px">
            <a style="text-decoration: none;font-size: 30px;color: #b5b5b5;margin-left: 20px;" href="#">Merchdream</a>
            <div class="container justify-content-center" style="margin-left: 430px;">
                <div class="collapse navbar-collapse ms-5">
                    <ul class="navbar-nav container mr-5" style="color: #b5b5b5;">
                        <li class="nav-item mr-4">
                            <a href="" class="nav-link animated-link" style="color: #b5b5b5;">Home</a>
                        </li>

                        <li class="nav-item mr-4">
                            <a href="/shop" class="nav-link animated-link" style="color: #b5b5b5;">Shop</a>
                        </li>

                        <li class="nav-item">
                            <a href="/tmpkategori" class="nav-link animated-link" style="color: #b5b5b5;">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#wcu" class="nav-link animated-link" style="color: #b5b5b5;">AboutUs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#ftr" class="nav-link animated-link" style="color: #b5b5b5;">ContactUs</a>
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


        <div style="position: relative; background: linear-gradient(to right, #c8bad8, #746991); box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.2); margin-top: 20px;">
            <div class="container py-5">
                <h5 style="color: white; margin-top: 100px; padding-bottom: 20px; font-size: 35px;">Where K-Pop Dreams Come True!</h5>
                <p style="color: #000000; padding-bottom: 20px;"> Welcome to MerchDream—your ultimate destination for all things K-Pop!
                    <br> Discover albums, merch, and more, curated just for you
                </p>
                <button style="border: none; background-color: black; color: rgb(255, 255, 255); border-radius: 200px; height: 40px; width: 150px;">
                    <a style="text-decoration: none; color:#ffffff" href="/shop">Shop Now</a>
                </button>
                <div>
                    <img src="imgg/coba.png" alt="" style="width: 400px; height: 400px; margin-left: 600px; margin-top: -250px; filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.5));">
                </div>
            </div>
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100px; overflow: hidden;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#8673ba" fill-opacity="1" d="M0,64L48,69.3C96,75,192,85,288,96C384,107,480,117,576,128C672,139,768,149,864,160C960,171,1056,181,1152,192C1248,203,1344,213,1392,218L1440,224V320H0Z"></path>
                </svg>
            </div>
        </div>
        
        
        

    <div style="background-color: white;height: 490px;">
        <div class="container justify-content-center">
            <div class="row gap-5" style="padding-top: 100px;">
                <div class="col-md-2">
                    <h5 style="color: black; font-weight: bold;margin-top: 20px;">Shop the latest K-Pop releases and
                         exclusive merch now!</h5>
                         <span>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         </span>
                    <button
                        style="border: none;background-color: #aaa0b5;color: rgb(0, 0, 0);border-radius: 200px;height: 40px;width: 150px;margin-top: 20px;"><a style="text-decoration: none;color: black;" href="/tmpkategori">Explore</a></button>
                </div>

                    <div class="col-md-2">
                         <div class="image-container"  style="border: none;border-radius: 20px;">
                        <img src="imgg/album.jpeg"  style="border-radius: 20px;box-shadow:#aaa0b5 20px 2px 0px;width: 180px;height: 260px;" alt="Sample Image" id="image">
                        <div class="text-overlay" style="margin-left: -60px;margin-top:130px;color:#aaa0b5;font-size: 20px;font-weight: bold;">Album</div>
                        </div>
                     </div>


                     <div class="col-md-2">
                         <div class="image-container"  style="border: none;border-radius: 20px;">
                        <img src="imgg/ls.jpeg"  style="border-radius: 20px;box-shadow:#aaa0b5 20px 2px 0px;width: 180px;height: 260px;" alt="Sample Image" id="image">
                        <div class="text-overlay" style="margin-left: -60px;margin-top:130px;color:#aaa0b5;font-size: 20px;font-weight: bold;">LightStick</div>
                        </div>
                     </div>


                     <div class="col-md-2">
                        <div class="image-container"  style="border: none;border-radius: 20px;">
                       <img src="imgg/photo.jpeg"  style="border-radius: 20px;box-shadow:#aaa0b5 20px 2px 0px;width: 180px;height: 260px;" alt="Sample Image" id="image">
                       <div class="text-overlay" style="margin-left: -55px;margin-top:130px;color:#aaa0b5;font-size: 20px;font-weight: bold;">PhotoCard & Poster</div>
                       </div>
                    </div>

                </div>
            </div>
        </div>

    


<div style="background-color: white;">
    <div class="container">
        <h2>Shop</h2>
        <div class="row gap-5" style="padding-top: 60px;">
            @foreach ($produk->slice(0, 8) as $key => $item)
                <div class="col-md-2 card d-flex"
                    style="width: 200px; height: 300px; border: none; border-radius: 20px; box-shadow: #000000 2px 2px 20px; margin-bottom: 20px;">
                    <a href="{{ route('produk.detail', ['id' => $item->id]) }}">
                        <img src="{{ asset('storage/public/'.$item->foto) }}" alt=""
                            style="border-radius: 15px; margin-top: 30px; width: 100%; height: 150px; object-fit: cover;">
                    </a>
                    <a href="/shop" style="text-decoration: none;color: black">
                    <div style="margin-top: 10px; text-align: center;font-weight: bold;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                        <span style="font-size: 15px;">{{ $item->produk }}</span>
                        <p style="margin-top: 5px;">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    </div>
                </a>
                </div>
            @endforeach
        </div>
    </div>
</div>


        <div id="wcu" class="container pt-5" style="background-color: white;">
                <h2>Why Choose Us</h2>
                <div class="pt-4 row">

                    <div class="row" style="width: 550px;">

                        <div style="width: 260px;">
                            <div class="col-md-2 card" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                                      </svg>
                            </div>
                            <span>Kami percaya bahwa pengiriman adalah bagian penting dari pengalaman berbelanja online. <br> Karena itu, kami bekerja keras untuk memastikan pesanan Anda dikirim dengan biaya terjangkau, aman, dan tepat waktu. <br></span>
                        </div>
    
                        <div style="width: 260px;">
                            <div class="col-md-2" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
                                        <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2m3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6z"/>
                                      </svg>
                            </div>
                            <p>Di toko kami, pengalaman belanja Anda adalah prioritas utama. <br> Nikmati proses belanja yang cepat dan praktis, mulai dari memilih produk hingga melakukan pembayaran. <br></p>
                        </div>
                    </div>
                    
                    <div class="row py-3" style="width: 550px;">
                        <div style="width: 260px;">
                            <div class="col-md-2" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-handbag" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v2H6V3a2 2 0 0 1 2-2m3 4V3a3 3 0 1 0-6 0v2H3.36a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.355a2.5 2.5 0 0 0 2.473-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 1 0 1 0V6z"/>
                                </svg>
                        </div>
                        <p> Seluruh produk yang kami tawarkan adalah barang official  langsung dari brand atau distributor resmi. <br>sehingga Anda bisa berbelanja dengan tenang dan tanpa keraguan. </p>
                    </div>
                    
                    <div style="width: 260px;">
                        <div class="col-md-2" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41m-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9"/>
                                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5 5 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
                              </svg>
                        </div>
                        <p>Kami ingin Anda puas dengan setiap pembelian. <br>Jika produk yang Anda terima tidak sesuai harapan, <br>kami menyediakan layanan pengembalian yang mudah dan cepat. </p>
                    </div>
                </div>

                <img src="https://64.media.tumblr.com/bc8534895ed83857f6fbf0a00978f9fd/c01561fcfae42167-ba/s1280x1920/08d6cb21a8899514f65d1c34bf6e2ca7422e9199.jpg" alt="" style="width: 400px;height: 300px;border-radius: 20px; margin-top: -120px;">
                
            </div>
                </div>
            </div>

        <footer id="ftr" class="footer p-5" style="background-color: #d4d4d4;margin-top: 100px">
            <div class=" container align-items-center">
                <h5>Merchdream</h5>
                <span>Donec facilisis quam ut purus rutrum lobortis. <br> Donec vitae odio quis nisl dapibus malesuada. <br> Nullam ac aliquet velit. Aliquam vulputate velit <br> imperdiet dolor tempor tristique. Pellentesque <br> habitant</span>
                <div class="row">
                    <div class="col-md-2" style="margin-left: 400px;margin-top: -120px">
                        <a style="text-decoration: none;color: black;" href="">About Us</a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Services </a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Blog</a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Contact Us</a> <br>
                    </div>

                    <div class="col-md-2 " style="margin-top: -120px">
                        <a style="text-decoration: none;color: black;" href="">Jobs</a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Our Team </a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Leadership</a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Privacy Policy</a> <br>
                    </div>

                    <div class="col-md-3" style="margin-top: -120px">
                        <a style="text-decoration: none;color: black;" href="">Support</a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Knowledge Base </a> <br>
                        <a  style="text-decoration: none;color: black;" href="">Live Chat</a> <br>
                    </div>
                </div>
                <div class="row gap-3" style="margin-top: 20px">
                    <div class="col-md-2" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                          </svg>
                    </div>

                    <div class="col-md-2" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                          </svg>
                    </div>

                    <div class="col-md-2" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                          </svg>
                    </div>

                    <div class="col-md-2" style="background-color: #b5b5b5;border: none;width: 30px;border-radius: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                          </svg>
                    </div>
                </div>

            </div>
            <hr>
            <div class="pt-2 container">
                <p style="margin: 0;">&copy; 2024 MerchDream. All rights reserved.</p>
            </div>
        </footer>

        <script>
            // Menambahkan event listener pada setiap gambar
            document.querySelectorAll('.image-container img').forEach(function(image) {
                image.addEventListener('click', function() {
                    this.parentElement.classList.toggle('active');
                });
            });
        </script>
</body>
</section>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>