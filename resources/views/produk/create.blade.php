@extends('template')
 
@section('nama_pelanggan')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Data</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('produk.index') }}"> Back</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pelanggan:</strong>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Pelanggan:</strong>
                <textarea class="form-control" style="height:150px" name="alamat_pelanggan" placeholder="alamat pelanggan"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Produk:</strong>
                <input type="text" name="jumlah_produk" class="form-control" placeholder="Jumlah Produk">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Produk:</strong>
                <input type="text" name="harga_produk" class="form-control" placeholder="Harga Produk">
            </div>
        </div>
    </div>

        <div class="form-group">
				<strong>File Gambar:</strong>
                <input type="file" class="form-control" name="gambar_produk">

		</div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    
 
</form>
@endsection