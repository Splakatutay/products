<?php

namespace Rcborinaga\Products\Http\Controllers;

use Illuminate\Http\Request;
use Rcborinaga\Products\Models\Product;     

class ProductController extends Controller
{

    public function index()
    {
        
        $products = Product::all();

        return view('products.index', compact('products'));

    }


    public function create() {

        return view('products.create');

    }
    
    public function show()
    {
        //
    }
    
    public function store(Request $request)
    {

        $product = Product::create([
            'name'          => $request->name ,
            'quantity'      => $request->quantity ,
            'description'   => $request->description
        ]);

        return redirect('/products');

    }
}