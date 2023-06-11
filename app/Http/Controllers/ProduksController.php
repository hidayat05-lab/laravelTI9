<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use app\models\kategoriproduk;
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
        $kategori_produk = DB ::table('kategori_Produk')->get();
        $produk = DB ::table('Produk')->get(); 

        return view ('admin.produk.create', compact('produk','kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');

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
