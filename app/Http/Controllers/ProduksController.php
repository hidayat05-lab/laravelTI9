<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\models\produk;
use app\http\models\kategoriproduk;
Use DB;

class ProduksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $kategori_produk = kategoriProduk::all();
        //printah ini menggunaka eloquent
        //$kategoriproduk = DB:: table ('kategori_produk')->get();
        //perintah diatas mengunkan quey builder
        $produk = DB:: table ('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=','kategori_produk_id')
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();
        //untuk mengarahkan ke file produk
        return view('admin.produk.index', compact('produk'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
