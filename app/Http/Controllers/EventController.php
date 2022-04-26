<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Room;
use App\Models\Session;
use App\Models\EventTicket;
use Illuminate\Support\Facades\DB;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $events = Event::all()->orderBy('date', 'asc')->get();
        $events = DB::table('events')
                ->orderBy('date', 'desc')
                ->get();
        // return response()->json([
        //     'events' => $events
        // ],200);
        return view('eventIndex', compact('events'));
    }

    public function details($id)
    {
        $events = Event::where('id',$id)->with('room','channels', 'event_tickets', 'session')->get();
        // return response()->json([
        //     'event_details'=>$events
        // ], 200);
        return view('eventDetail', compact('events'));



        // $events = DB::table('events')
        // ->where('slug', '=', $id)
        // ->get();

        // $event_tickets = DB::table('event_tickets')
        // ->where('event_id', '=', $id)
        // ->get();


        // $channels = DB::table('channels')
        // ->where('event_id', '=', $id)
        // ->get();

        // return $event_ticket;
        // if($request->has('slug')){
        //     $slug = Album::where('slug',$request->query('slug'))->get();
        // }
        // return $slug;
        // return view('eventDetail', compact(['events', 'event_tickets', 'channels']));
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
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
        //
    }
}
