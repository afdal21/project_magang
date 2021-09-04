@extends('template')
@section('nama_pelanggan')
  <div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Data Pembelian Produk</h2>
        </div>
        <div class="float-right">
        <a class="btn btn-success" href="{{route('produk.create') }}"> Create Data Produk</a>
        </div>
    </div>
  </div>
      
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Alamat Pelanggan</th>
        <th>Nama Produk</th>
        <th>Jumlah Produk</th>
        <th>Harga Produk</th>
        <th>Gambar Produk</th>
        <th width="100px"class="text-center">Action</th>
    </tr>
@foreach ($produk as $produks)
<tr>
    <td>{{$produks->id}}</td>
    <td>{{$produks->nama_pelanggan}}</td>
    <td>{{$produks->alamat_pelanggan}}</td>
    <td>{{$produks->nama_produk}}</td>
    <td>{{$produks->jumlah_produk}}</td>
    <td>{{$produks->harga_produk}}</td>

    <td>
    @if( in_array(pathinfo($produks->gambar_produk, PATHINFO_EXTENSION), ['png', 'jpg', 'JPEG']))
        <img width="150px" src="{{asset('file_upload')}}/{{$produks->gambar_produk}}" style="height: 10%">
    @else
        <img width="150px" src="https://www.freeiconspng.com/uploads/file-txt-icon--icon-search-engine--iconfinder-14.png" style="height: 10%">
    @endif
    </td>
    
    <td><a href="/produk/edit/{{ $produks->id }}" class="btn btn-xs btn-primary">Edit</a> </td>    
        @csrf 
        @method('DELETE')
    <td> <a href="{{url('produk/delete')}}/{{$produks->id}}" class="btn btn-danger">Hapus</a> </td>
        </form>
    
</tr>
@endforeach
        </table>
{!! $produk->links() !!} 
@endsection