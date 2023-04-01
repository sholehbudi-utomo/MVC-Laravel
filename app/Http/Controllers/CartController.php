<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produc;
use App\Models\Cart;

class CartController extends Controller
{

    public function index(){
        $data =Cart::with('producs')->get();
        return view('cart.cart',compact(['data']));
    }
    
    public function store(Request $request){
       Cart::create([
        'qty' =>1,
        'produc_id'=>$request->produc_id,
       ]);

       return redirect('/cart');
    }
    public function edit(Request $request ,string $id){
        Cart::where('id',$id)->update([
            'qty'=>$request->qty,
        ]);
        return response()->json([
            'success'=>true
        ]);
    }
    public function delete($id)
    {
        Cart::where('id',$id)->delete();
        return redirect()->back();
    }
}
