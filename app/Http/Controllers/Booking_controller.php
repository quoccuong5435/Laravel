<?php

namespace App\Http\Controllers;
use App\Booking;
use Illuminate\Http\Request;

class Booking_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$booking =  new Booking;
        // $booking -> hotel_id = $request->hotel_id;
        // $booking -> guest_id = $request->guest_id;
        // $booking -> room_count = $request->room_count;
        // $booking -> date_from = $request->date_from;
        // $booking -> date_to = $request->date_to;
        // $booking -> booking_status_id = $request->booking_status_id;
        // $room -> save();
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
        // $booking =  Booking::find($id);
        // $booking -> hotel_id = $request->hotel_id;
        // $booking -> guest_id = $request->guest_id;
        // $booking -> room_count = $request->room_count;
        // $booking -> date_from = $request->date_from;
        // $booking -> date_to = $request->date_to;
        // $booking -> booking_status_id = $request->booking_status_id;
        // $room -> save();
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
