<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = barang::query()->orderBy("id","asc")->get();
        return response()->json($barang);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $product = barang::create($request->all());
        return response()->json($product, 201);
   
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return barang::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        

        // Temukan barang berdasarkan ID
        $databarang = Barang::findOrFail($id);

        // Perbarui data
        $databarang->update($request->only(['name', 'amount', 'price']));

        // Kembalikan data yang diperbarui
        return response()->json($databarang, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = barang::findOrFail($id);
        $post->delete();

        return response()->json(null, 204);
    }
}
