<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoboticsKit;

class RoboticsKitController extends Controller
{
    public function index()
    {
        return response()->json(RoboticsKit::all());
    }

    public function store(Request $request)
    {
        $kit = RoboticsKit::create($request->all());
        return response()->json($kit);
    }

    public function show($id)
    {
        return response()->json(RoboticsKit::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $kit = RoboticsKit::findOrFail($id);
        $kit->update($request->all());
        return response()->json($kit);
    }

    public function destroy($id)
    {
        RoboticsKit::destroy($id);
        return response()->json(['message' => 'Kit deleted']);
    }
}
