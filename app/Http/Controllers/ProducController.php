<?php

namespace App\Http\Controllers;
use App\Models\Produc;
use App\Models\Categori;

use Illuminate\Http\Request;
use Termwind\Components\Dd;
use session;

class ProducController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =Produc::with('categoris')->get();
        return view('produk.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data= Categori::All();
        return  view('produk.addproduk',compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'kategori_id'=>'required'
        ]);
        // 
        Produc::create([
            'name'=>$validated['name'],
            'description'=>$request->description,
            'price'=>$validated['price'],
            'kategori_id'=>$validated['kategori_id'],
        ]);
        return redirect('/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['categoris']=Categori::all();
        $data['producs']=Produc::find($id);
        return view('produk.editproduk',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated= $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'kategori_id'=>'required'
        ]);

        Produc::where('id',$id)->update([
            'name'=>$validated['name'],
            'description'=>$request->description,
            'price'=>$validated['price'],
            'kategori_id'=>$validated['kategori_id'],
        ]);
        
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Produc::where('id',$id)->delete();
        return redirect('/produk');
    }
    
}
