<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bar;
use App\Models\Event;
use App\Models\Event_product;
use Illuminate\Support\Carbon;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class BarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bars = Bar::all();
        return Inertia::render('Bars/index', ['bars' => $bars]);
    }

    public function product_list($id)
    {
        $bar = Bar::find($id);
        $event = Event::find($bar->event_id);
        $products = DB::table('products')->join('bar_products','products.product_id','=','bar_products.product_id')
                                        ->where('bar_id',$bar->bar_id)->get();

        if($bar)
        {
            return Inertia::render('Products/index', ['event'=>$event,'bar' => $bar,'products'=>$products]);
        }

        return '404 NOT FOUND!';
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
        $newBar = new Bar;
        $newBar->event_id = $request->bar['event_id'];
        $newBar->bar_name = $request->bar['bar_name'];
        $newBar->food = $request->bar['food'];
        $newBar->drink = $request->bar['drink'];
        $newBar->location = $request->bar['location'];
        $newBar->size = $request->bar['size'];

        $newBar->save();

        return $newBar;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bar = Bar::find($id);

        if($bar)
        {
            $bar->delete();
            return "Item Deleted";
        }

        return "Item not found";
    }
}
