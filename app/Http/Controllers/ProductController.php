<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;


class ProductController extends Controller
{
    //
    public function index()
{
    $data = Product::all();
    return response()->json(
        [
            'message' => 'Student get successfully',
            'get data by' => 'Tanyaluk',
            'data' => $data
        ],
        201
    );
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'id_prod' => 'required|string|max:15',
            'name_prod' => 'required|string|max:50',
            'detail_prod' => 'required|string',
            'price' => 'required|double',
            'stock_prod' => 'required|string'
         ]);

        Product::create($validated);
        //สร้างtableใหม่ในการส่งข้อมูลจาก post
        return response()->json(['message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductController $productController)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductController $productController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductController $productController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductController $productController)
    {
        //
    }


}
