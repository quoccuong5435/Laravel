<?php
use App\Room;
namespace App\Http\Controllers;
use App\Hotel;
use Illuminate\Http\Request;

class Rooms_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $dsroom = Room::all();
        return view('room', compact('dsroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_room');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $room = new Room;
        // $room -> hotel_id = $request->hotel_id;
        // $room -> room_type_id = $request->room_type_id;
        // $room -> room_number = $request->room_number;
        // $room -> avatar_room = $request->avatar_room;
        // $room -> description_room = $request->description_room;
        // $room -> room_status_id = $request->room_status_id;
        // $room -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsroom = Room::find($id);
        return view('room',compact('dsroom'));
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
        // $dsroom = Room::find($id);
        // $room -> hotel_id = $request->hotel_id;
        // $room -> room_type_id = $request->room_type_id;
        // $room -> room_number = $request->room_number;
        // $room -> avatar_room = $request->avatar_room;
        // $room -> description_room = $request->description_room;
        // $room -> room_status_id = $request->room_status_id;
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
