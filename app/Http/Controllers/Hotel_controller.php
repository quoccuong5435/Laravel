<?php

namespace App\Http\Controllers;
use App\Hotel;
use Illuminate\Http\Request;

class Hotel_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dshotel = Hotel::all();
        return view('hotel',compact('dshotel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_hotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $hotel = new Hotel;
        // $hotel -> name_hotel = $request->name_hotel;
        // $hotel -> phone_hotel = $request->phone_hotel;
        // $hotel -> email_hotel = $request->email_hotel;
        // $hotel -> avatar_hotel = $request->avatar_hotel;
        // $hotel -> address_hotel = $request->address_hotel;
        // $hotel -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $dshotel = Hotel::find($id);
        // return view('hotel',compact('dshotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        // $dshotel = Hotel::find($id);
        // $hotel -> name_hotel = $request->name_hotel;
        // $hotel -> phone_hotel = $request->phone_hotel;
        // $hotel -> email_hotel = $request->email_hotel;
        // $hotel -> avatar_hotel = $request->avatar_hotel;
        // $hotel -> address_hotel = $request->address_hotel;
        // $hotel -> save();

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
