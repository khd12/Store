<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('FinaL-Groupa.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carts=cart::all();

        return view('Final-Groupa.create',compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();

        $product->product=$request->product;
        $product->quantity= $request->quantity;
        $product->price= $request->price ;
        $product->total= $request->total ;


          $product->save();

          return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $carts=cart::all();
        $category_name= Category::Where('id',$product->category_id)->first();

        return view('Final-Groupa.edit',compact('product', 'carts', 'cart_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $product =Product::find($id);

        $product->name=$request->name;
        $product->quantity= $request->quantity;
        $product->price= $request->price ;
        $product->total= $request->Cart ;


          $product->save();

          return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::find($id)->delete;
      return redirect()->back();
    }
}