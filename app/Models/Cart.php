<?php

namespace App\Models;
use App\Models\Produc;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'qty',
        'produc_id'
    ];

    public function producs()
    {
       return $this -> belongsTo(Produc::class,'produc_id');
    }
   
}
