<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
   
    public $table = "produk";
    protected $primaryKey="id";
    protected $fillable = ['nama_pelanggan','alamat_pelanggan','nama_produk','jumlah_produk','harga_produk','gambar_produk'];
}
