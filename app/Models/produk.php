<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Monolog\Level;

class produk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kategori(){
        return $this->belongsTo(kategori::class, 'kategoris_id');
    }

    public function pesananProduk()
    {
        return $this->hasMany(pesananProduk::class);
    }
    public function pesanan()
    {
        return $this->hasMany(pesanan::class);
    }

    public function cart()
    {
        return $this->hasMany(cart::class);
    }
}
