<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products=Product::latest()->where("categories_id",request()->query('category_id'))->get(); ovo bi koristili za neke grupacije ali na all ne prikazuje se jer je id={} kad klinemo na all zato ide novi query
        $products=Product::latest()->where(function($query){
            if($categoryId=request()->query("category_id")){
                $query->where("categories_id",$categoryId);
            }
        })->get();

        $categories=Categories::all();
        return view('products.index',compact('products','categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Categories::all();
        $product= new Product();
        return view('products.createnewproduct',compact('categories','product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name'=>['required','string','max:50'],
        //     'description'=>'string | max:80',
        //     'quantity'=>['numeric'],
        //     'price'=>['numeric']
        // ]);
        $product=Product::create($request->all());
        return redirect()->route('products.index')->with('message', 'Product created successfully'); 
       
        // $product = new Product();
        // $product->product_name = $request->input('name');
        // $product->product_description = $request->input('description');
        // $product->product_quantity = $request->input('quantity');
        // $product->product_price = $request->input('price');
        // $product->save();

        // return redirect()->route('products.index')->with('success', 'Product created successfully'); 
       
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=Product::findOrFail($id);
        return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $product=Product::findOrFail($id);
        $categories=Categories::all();
        return view('products.editproduct',compact('product','categories'));
    
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $product=Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('message', 'Product updated successfully'); 
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product=Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('message', 'Product dleted successfully');
    }
   
}
