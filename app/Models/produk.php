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
    public $timestamps = false;
    //mendklarasikan kolom yang ada dalam table
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',
    ];
    public function kategoriproduk(){
        return $this->belongTo(kategoriproduk::class);
    }
    public function getAllData(){
        return DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=','kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama as nama')
        ->get();


    }

}
