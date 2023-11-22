<?php

namespace App\Http\Controllers;

use App\Models\Internets;
use App\Models\Categories;
use Illuminate\Http\Request;

class InternetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Internets::all();
        return view('dashboard',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        return view('backpage.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'id_product' => 'required|max:255',
            'id_category' => 'required',
            'product_rate' => 'required',
            'product_desc' => 'required|max:255',
        ]);
        Internets::create($validatedData);
        return redirect('/dashboard')->with('success', 'Berita berhasil ditambahkan');
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
        //
    }
}
