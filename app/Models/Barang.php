<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs'; // perhatikan nama tabel menjadi 'barangs' karena sesuai dengan migration

    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'stok',
    ];
}
