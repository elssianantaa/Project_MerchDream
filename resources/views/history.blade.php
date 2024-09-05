<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}">
    <style>
        .order-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .order-header {
            font-weight: bold;
            color: #343a40;
            margin-bottom: 10px;
        }
        .order-details {
            font-size: 14px;
            color: #6c757d;
        }
        .order-time {
            font-size: 12px;
            color: #adb5bd;
        }
        .order-index {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
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
    
    <div class="container mt-5 pt-5">
        <h2>Riwayat Pesanan</h2>
        @foreach ($pesananProduk as $key => $item)
            <div class="order-card">
                <div class="row">
                    <div class="col-md-1 text-center">
                        <span class="order-index">{{ $key + 1 }}</span>
                    </div>
                    <div class="col-md-8">
                        <div class="order-header">No Handphone: {{ $item->nohp }}</div>
                        <div class="order-details">Alamat: {{ $item->alamat }}</div>
                        <div class="order-time">Waktu Pemesanan: {{ \Carbon\Carbon::parse($item->wktu_pemesanan)->format('d M Y, H:i') }}</div>
                        <div class="order-header">Status Pengiriman {{ $item->status }}</div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script src="{{ asset('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
