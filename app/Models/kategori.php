<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'kategori'
    ];

    public function produk()
    {
        return $this->hasmany(produk::class);
    }

}
