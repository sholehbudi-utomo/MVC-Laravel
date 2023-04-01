<?php

namespace App\Models;
use App\Models\Categori;
use App\Models\Cart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produc extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'kategori_id',
    ];
 public function categoris()
 {
    return $this -> belongsTo(categori::class,'kategori_id');
 }

 public function carts()
 {
    return $this ->hasMany(Cart::class,);
 }
}
