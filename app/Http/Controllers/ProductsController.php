<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Event_product;
use Illuminate\Support\Carbon;
use Inertia\Inertia;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return Inertia::render('Products/index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProduct = new Product;
        $newProduct->product_name = $request->product['product_name'];
        $newProduct->base_price = $request->product['base_price'];
        $newProduct->cost_price = $request->product['cost_price'];
        $newProduct->stock = $request->product['stock'];

        $newProduct->save();

        if($request->product['event_id'])
        {
            $event_product = new Event_product;
            $event_product->event_id =  $request->product['event_id'];
            $event_product->product_id = $newProduct->product_id;

            $event_product->save();
        }

        return $newProduct;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), 
        [
            'title' => ['required'],
            'body' => ['required'],
        ])->validate();

        if ($request->has('id')) 
        {
            Product::find($request->input('id'))->update($request->all());
            return redirect()->back()->with('message', 'Post Updated Successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if($product)
        {
            $product->delete();
            return "Item Deleted";
        }

        return "Item not found";
    }
}
