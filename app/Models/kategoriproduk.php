<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriproduk extends Model
{
    use HasFactory;
        //memanggil table yang akan dikelola
        protected $table = 'kategoriproduk';
        //mendklarasikan kolom yang ada dalam table
        protected $fillable = [
            'nama'
        ];
        public function produk(){
            return $this->hasMany(produk::class);
        }
}
