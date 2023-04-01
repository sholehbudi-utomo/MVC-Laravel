<?php

namespace App\Models;
use App\Models\Produc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function producs()
    {
        return $this->hasMany(produc::class);
    }

}
