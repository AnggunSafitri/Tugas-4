<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $data['list_produk'] = Produk::all();
        return view('admin.produk.index', $data);
    }

    public function create()
    {
        return view('admin.produk.create');
    }

    public function store(Request $request)
    {
        $kategori = New Produk;
        $kategori->nama_produk = request('nama_produk');
        $kategori->warna = request('warna');
        $kategori->stok = request('stok');
        $kategori->harga = request('harga');
        $kategori->save();

        return redirect('produk');
    }

    public function show($id)
    {
        $data['produk'] = Produk::find($id);
        return view('admin.produk.show', $data);
    }

    public function edit($id)
    {
        $data['produk'] = produk::find($id);
        return view('admin.produk.edit', $data);
    }

    public function update(Produk $produk)
    {
        $produk->nama_produk= request('nama_produk');
        $produk->warna= request('warna');
        $produk->stok= request('stok');
        $produk->harga= request('harga');
        $produk->save();

        return redirect('produk');
    }

    public function destroy($produk)
    {
        Produk::destroy($produk);

        return back();
    }
}
