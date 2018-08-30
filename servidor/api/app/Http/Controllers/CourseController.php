<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
  
    public function index()
    {
        return Course::all();
    }

    
    public function store(Request $request)
    {
        Course::create($request->all());
        return ['created'=>true];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Course::find($id);
    }

  

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->update($request->all());
        return ['updated'=>true];
    }

   
    public function destroy($id)
    {
        Course::destroy($id);
        return ['deleted'=>true];
    }
}
