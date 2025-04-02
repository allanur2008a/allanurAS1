<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function index()
    {
        return Product::with(['restaurant','category'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'restaurant_id' => 'required|exists;restaurants,id',
            'category_id' => 'required|exists:categories,id',
            'name' => 'requires|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeeric'
        ]);

        return Product::create($validated);

    }
}
//    /**
//     * Display a listing of the resource.
//     */
//    public function index()
//    {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     */
//    public function show(string $id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit(string $id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, string $id)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(string $id)
//    {
//        //
//    }
//}
