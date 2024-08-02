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
        $barang = barang::create($request->all());
        return response()->json($barang, 201);
   
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return barang::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $barang = barang::find($id);
        $barang -> update($request->all());
        return response()->json($barang, 201);
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
