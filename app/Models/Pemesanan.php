<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
    'nama',
    'no_hp',
    'tanggal',
    'alamat',
    'produk',
    'ukuran',
    'jumlah',
    'pembayaran',
    'catatan'
];
}