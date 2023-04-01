<?php

namespace App\Http\Controllers;

use App\Models\Categori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori =Categori::orderBy('id','asc')->get();
        return view('kategori.index',compact(['kategori']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $data= Categori::All();
        return  view('kategori.addkategori',compact(['data']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
            'name'=>'required',
            
        ]);
        // 
        Categori::create([
            'name'=>$validated['name'],
            
        ]);
        return redirect('/kategori');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categori::destroy($id);
        return redirect('/kategori');
    }
}
