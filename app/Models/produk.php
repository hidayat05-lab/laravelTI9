<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Query bulider
//eloquent


class produk extends Model
{
    use HasFactory;
    //memanggil table yang akan dikelola
    protected $table = 'produk';
    //mendklarasikan kolom yang ada dalam table
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk-id',
    ];
    public function kategoriproduk(){
        return $this->belongTo(kategoriproduk::class);
    }

}
