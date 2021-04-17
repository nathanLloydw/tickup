<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Product;
use App\Models\Bar;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return Inertia::render('Events/index', ['events' => $events]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event($id)
    {
        $event = Event::find($id);

        if($event)
        {
            return Inertia::render('Events/event', ['event' => $event]);
        }

        return '404 NOT FOUND!';
    }

    public function product_list($id)
    {
        $event = Event::find($id);
        $products = DB::table('products')->join('bar_products','products.product_id','=','bar_products.product_id')
                                        ->join('bars','bars.bar_id','=','bar_products.bar_id')
                                        ->where('event_id',$id)->get();

        if($event)
        {
            return Inertia::render('Products/index', ['event'=>$event,'products'=>$products]);
        }

        return '404 NOT FOUND!';
    }

    public function ticket_list($id)
    {
        $event = Event::find($id);

        return Inertia::render('Tickets/index',['event' => $event]);
    }

    public function bar_list($id)
    {
        $event = Event::find($id);
        $bars = DB::table('Bars')->where('event_id',$event->event_id)->get();

        return Inertia::render('Bars/index',['event' => $event,'bars'=>$bars]);
    }

    public function order_list($id)
    {
        $event = Event::find($id);

        return Inertia::render('Orders/index',['event' => $event]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Events/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEvent = new Event;
        $newEvent->event_name = $request->event['event_name'];
        $newEvent->event_description = $request->event['event_description'];
        $newEvent->event_venue = $request->event['event_venue'];
        $newEvent->event_organiser = 'n/a';
        $newEvent->event_date = (new Carbon($request->event['event_date']))->format('d/m/y');
        $newEvent->event_start_time = $request->event['start_date'];
        $newEvent->event_finish_time = $request->event['end_date'];
        $newEvent->event_age_limit = $request->event['event_agelimit'];
        $newEvent->event_country = $request->event['event_country'];
        $newEvent->event_address = $request->event['event_address'];
        $newEvent->event_postcode = $request->event['event_postcode'];
        $newEvent->event_banner = 'n/a';
        $newEvent->event_time_zone = 0;
        $newEvent->currency = 'GBP';
        $newEvent->transaction_fee = 0;
        $newEvent->created_at = Carbon::now();
        $newEvent->updated_at = Carbon::now();

        $newEvent->save();

        return $newEvent;
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
            Event::find($request->input('id'))->update($request->all());
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
        $event = Event::find($id);

        if($event)
        {
            $event->delete();
            return "Item Deleted";
        }

        return "Item not found";
    }
}
