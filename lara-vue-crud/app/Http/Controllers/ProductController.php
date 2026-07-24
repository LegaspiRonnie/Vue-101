<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return Inertia::render('products/Index', compact('products'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('products/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $data = $request->validate([
            'name' => "required|string|max:255",
            'price' => "required|numeric|min:0",
            'description' => "nullable|string"
        ]);

        try {
            // throw new \Exception('Test exception');

            Product::create($data);

            return redirect()->route('products.index')
                ->with('message', 'Product Added Successfully!');
        } catch (\Throwable $e) {
            return redirect()->route('products.index')
                ->with('error', 'Failed to add product.');
        }


        // if($data) {
        //     return 'success';
        // }
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
