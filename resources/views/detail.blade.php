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
    <div>
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
                        <a href="#" class="nav-link animated-link" style="color: #b5b5b5;">ContactUs</a>
                    </li>
                </ul>
            </div>

            <div>
                <a href="/logout">
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
    </div>

    <div class="container pt-5" style="margin-top: 100px">
    
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-md-6 card d-flex" 
                style="width: 400px; height:340px; border: none; border-radius: 20px; box-shadow: #8c8a8a 2px 2px 10px;">
                    <form action="{{ route('produk.updateStok', $produk->id) }}" method="POST">
                        @csrf
                    <img src="{{ asset('storage/public/'.$produk->foto) }}" alt="" style="border-radius: 15px; margin-top: 10px; width: 375px; height: 320px; object-fit: cover;">

                </div>
            <div class="col-md-6 card d-flex"  
            style="padding-left: 50px;padding-top: 25px;margin-left: 16px;width: 520px; height:340px; border: none; border-radius: 20px; box-shadow: #8c8a8a 2px 2px 10px;"> 
                <h2 style="font-size: 15px;">{{ $produk->produk }}</h2>
                <p>Harga: Rp <span id="harga">{{ number_format($produk->harga, 0, ',', '.') }}</span></p>
                <p>Deskripsi : {{ $produk->desk }}</p>
                <p>Stok : {{ $produk->stok }}</p>
                <p>Total Harga: Rp <span id="totalHarga">{{ number_format($produk->harga, 0, ',', '.') }}</span></p>
                <a href="/order">
            </a>
            </form>

            <form action="{{ route('cart.add', $produk->id) }}" method="POST">
                @csrf
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-outline-secondary" onclick="updateJumlah(-1)">-</button>
                    <input type="number" class="form-control text-center mx-2" id="jumlah" name="jumlah" value="1" min="1" style="width: 60px;" readonly>
                    <button type="button" class="btn btn-outline-secondary" onclick="updateJumlah(1)" >+</button>
                </div>
                <button style="margin-top: 20px" type="submit" class="btn btn-outline-secondary">Tambah ke Keranjang</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>
    <script>
    // Mengambil harga satuan dari elemen
    const harga = {{ $produk->harga }};
    const hargaTotal = document.getElementById('totalHarga');
    const jumlahInput = document.getElementById('jumlah');
    
    function updateJumlah(change) {
        // Mengubah jumlah stok
        let jumlah = parseInt(jumlahInput.value) + change;
        if (jumlah < 1) jumlah = 1; // Mengatur batas minimum
    
        // Update nilai input jumlah
        jumlahInput.value = jumlah;
    
        // Hitung total harga
        const totalHarga = harga * jumlah;
        hargaTotal.innerText = totalHarga.toLocaleString('id-ID');
    }
    </script>