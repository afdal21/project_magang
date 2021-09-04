<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use Illuminate\Support\Facades\Response;


class produkcontroller extends Controller
{
    public function index()
    {
    $produk = produk::select('*')->paginate(10);
    return view('produk.index',compact('produk'))
    ->with('i',(request()->input('page', 1) -1) *5);
}

public function create()
{
    return view('produk.create');
}

public function store(request $request)
{
        $produk = new produk;
        $produk->nama_pelanggan = $request->nama_pelanggan;
        $produk->alamat_pelanggan = $request->alamat_pelanggan;
        $produk->nama_produk = $request->nama_produk;
        $produk->jumlah_produk = $request->jumlah_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->gambar_produk = $request->gambar_produk;    

        $gambar_produk = $request->file('gambar_produk');
        $nama_file = $gambar_produk->getClientOriginalName();
        $gambar_produk->move('file_upload',$gambar_produk->getClientOriginalName());
        $produk = new Upload;
        $produk->gambar_produk = $nama_file;

    $produk->save();
    produk::create($request->all());
    return redirect()->route('produk.index')
                     ->with('success','produk created successful');
}

public function edit($id)
{
	$produk = produk::whereId($id)->first();
	return view('produk.edit')->with('produk',$produk);
}

public function update(request $request,$id)
{ 
        $produk = produk::find($id);  
        $produk->nama_pelanggan = $request->nama_pelanggan;
        $produk->alamat_pelanggan = $request->alamat_pelanggan;
        $produk->nama_produk = $request->nama_produk;
        $produk->jumlah_produk = $request->jumlah_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->gambar_produk = $request->gambar_produk;

    $produk->save();
    return redirect('produk');
}

public function delete($id)
{
    $produk = produk::find($id);
    $produk->delete();
    return redirect('produk');
}
}