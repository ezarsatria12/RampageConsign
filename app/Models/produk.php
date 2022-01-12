<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable = [
        'kategori_id', 'nama', 'desc', 'spec', 'harga', 'jumlah',
    ];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
