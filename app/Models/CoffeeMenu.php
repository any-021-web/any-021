<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoffeeMenu extends Model
{
    protected $fillable = [

        'nama',
        'kategori',
        'harga',
        'stok'

    ];
}