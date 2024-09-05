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
                    <li class="nav-item">
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

  
   <div class="container mt-5 pt-5">
      <h1>Keranjang</h1>
    @if (count($cart) > 0)
        <form action="{{ route('checkout.index') }}" method="POST">
            @csrf
            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th><input type="checkbox" id="checkAll"></th> 
                            <th>Produk</th>
                            <th>Harga</th>
                            <th>Kuantitas</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $id => $item)
                            <tr class="text-center">
                                <td>
                                    <input type="checkbox" name="selected_items[]" value="{{ $id }}">
                                </td>
                                <td>
                                    <div class="product-img">
                                        @if(isset($item['photo']))
                                            <img src="{{ asset('storage/public/' . $item['photo']) }}" alt="Foto Produk" width="100" class="img-thumbnail">
                                        @else
                                            <img src="{{ asset('images/default-product.png') }}" alt="Foto Tidak Tersedia" width="100" class="img-thumbnail">
                                        @endif
                                        {{ $item['name'] }}
                                    </div>
                                </td>
                                <td >Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                                <td >{{ $item['quantity'] }}</td>
                                <td >Rp {{ number_format($item['total_price'], 0, ',', '.') }}</td>
                                <td >
                                </form>
                                    <form action="{{ route('cart.delete', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr> 
                            @endforeach     
                    </tbody>
                </table>
            </div>
       

            <!-- Checkout Button -->
        <form action="{{ route('checkout.index') }}" method="POST">
            @csrf
        <div class="text-end mt-4">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-box-arrow-right"></i> CheckOut Selected
            </button>
        </div>
    </form>
   
    @endif
</div>

<script>
    Script to toggle all checkboxes
    document.getElementById('checkAll').onclick = function() {
        var checkboxes = document.getElementsByName('selected_items[]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }
// </script>

    
            {{-- <div class="d-flex justify-content-between align-items-center mt-4">
                <h4>Total: Rp {{ number_format($total, 0, ',', '.') }}</h4>
                <a href="{{ route('checkout') }}" class="btn btn-success">Lanjutkan Pembayaran</a>
            </div>
        @else
            <div class="alert alert-warning mt-4" role="alert">
                Keranjang Anda kosong.
            </div>
        @endif
    </div> --}}
    {{-- @endsection --}}
    
    
    
    

</body>
</html>
<script src="{{ asset ('assets/bootstrap-5.3.2-dist/js/bootstrap.min.js')}}"></script>