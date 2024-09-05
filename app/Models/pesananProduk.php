<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesananProduk extends Model
{
   protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    // public function pesanan()
    // {
    //     return $this->belongsTo(pesanan::class);
    // }

    public function produks()
    {
        return $this->belongsTo(produk::class);
    }
}
