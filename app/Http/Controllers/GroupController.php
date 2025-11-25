<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        return response()->json(Group::all());
    }

    public function store(Request $request)
    {
        $group = Group::create($request->all());
        return response()->json($group);
    }

    public function show($id)
    {
        return response()->json(Group::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $group->update($request->all());
        return response()->json($group);
    }

    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return response()->json(['message' => 'Group deleted successfully']);
    }
}
