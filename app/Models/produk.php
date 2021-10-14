<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable = [
        'nama', 'desc', 'spec', 'harga', 'jumlah','idlokasi'
    ];
    public $timestamps = false;
}
