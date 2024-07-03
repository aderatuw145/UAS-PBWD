<?php

namespace App\Http\Controllers;

use App\Models\RoomAvailability;
use Illuminate\Http\Request;

class RoomAvailabilityController extends Controller
{
     public function index()
    {
        $availability = RoomAvailability::all();
        return response()->json($availability);
    }

    public function show($id)
    {
        $availability = RoomAvailability::findOrFail($id);
        return response()->json($availability);
    }
    public function store(Request $request)

{
    $availability = RoomAvailability::create($request->all());
    return response()->json($availability, 201);
}

public function update(Request $request, $id)

{
    $availability = RoomAvailability::findOrFail($id);
    $availability->update($request->all());
    return response()->json($availability, 200);

}

public function destroy($id)

{
    RoomAvailability::findOrFail($id)->delete();
    return response()->json(null, 204);
}
}