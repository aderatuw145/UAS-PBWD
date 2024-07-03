<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;


class PatienController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);

    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return response()->json($patient);

    }

    public function store(Request $request)
    {
        $patient = Patient::create($request->all());
        return response()->json($patient, 201);

    }
public function update(Request $request, $id)
{
    $patient = Patient::findOrFail($id);
    $patient->update($request->all());
    return response()->json($patient, 200);

}

public function destroy($id)
{
    Patient::findOrFail($id)->delete();
    return response()->json(null, 204) ;
}
}
