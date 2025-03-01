<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room; 
class RoomController extends Controller
{  
    public function index()

{
   $rooms = Room::all();
    return response()->json($rooms);
    
}

public function show($id)
{
    $room =Room::findOrFail($id);
    return response()->json($room);

}

public function store(Request $request)
{
    $room = Room::create($request->all());
    return response()->json($room, 201);

}
public function update (Request $request, $id)
{
    $room = Room::findOrFail($id);
    $room->update($request->all());
    return response()->json($room, 200);

}
public function destroy($id)
{
    room::findOrFail($id)->delete();
    return response()->json(null, 204);


}
}
