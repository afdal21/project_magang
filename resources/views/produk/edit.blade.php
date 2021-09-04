@extends('template')
 
@section('nama_pelanggan')
                <title>Edit Data Produk</title>
    <a class="btn btn-secondary" href="{{ route('produk.index') }}"> Back</a>
 
	<form action="{{url('produk/update')}}/{{$produk->id}}" method="POST">
        {{ csrf_field() }}
            No<input type="hidden" name="id" value="{{ $produk->id }}" class="form-control" >
            Nama Pelanggan<input type="text" name="nama_pelanggan" required="required" value="{{ $produk->nama_pelanggan }}" class="form-control">
            Alamat Pelanggan<textarea class="form-control" required="required" style="height:150px" value="{{ $produk->alamat_pelanggan }}" name="alamat_pelanggan"> </textarea>
            Nama Produk<input type="text" name="nama_produk" required="required" class="form-control" value="{{ $produk->nama_produk }}">
            Jumlah Produk<input type="text" name="jumlah_produk" required="required" class="form-control" value="{{ $produk->jumlah_produk }}">
            Harga Produk<input type="text" name="harga_produk" required="required" class="form-control" value="{{ $produk->harga_produk }}">
            Gambar Produk<input type="file" class="form-control" id="nama" name="gambar_produk" required="required" value="{{ $produk->gambar_produk }}">
            
            <button type="submit" class="btn btn-primary">Update</button> 
    </form>
@endsection