<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return response()->json(Course::all());
    }

    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return response()->json($course);
    }

    public function show($id)
    {
        return response()->json(Course::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return response()->json($course);
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return response()->json(['message' => 'Course deleted']);
    }
}
