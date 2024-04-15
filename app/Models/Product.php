<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //misalkan nama tablenya tidak ikut konvensi laravel
    // protected $table = 'produk';
    //misalkan kolom PK nya bukan 'id' 
    // protected $primatyKey = 'id_produk';
    public function variants()
    {
        return $this->hasMany(Variant::class,'id_produk');
    }
}
