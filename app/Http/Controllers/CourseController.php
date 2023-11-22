<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Http\Requests\StorecourseRequest;
use App\Http\Requests\UpdatecourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     
    public function index()
    {
        //
    }

    *
     * Show the form for creating a new resource.
     
    public function create()
    {
        //
    }

    *
     * Store a newly created resource in storage.
     
    public function store(StorecourseRequest $request)
    {
        //
    }

    *
     * Display the specified resource.
     
    public function show(course $course)
    {
        //
    }

    *
     * Show the form for editing the specified resource.
     
    public function edit(course $course)
    {
        //
    }

    *
     * Update the specified resource in storage.
     
    public function update(UpdatecourseRequest $request, course $course)
    {
        //
    }

    *
     * Remove the specified resource from storage.
     
    public function destroy(course $course)
    {
        //
    }*/

    function createCourse(Request $request){

        $request->validate([
            'name'=>'required',
        ]);

        $course =Course::create ([
            'name'=>$request->name,
        ]);

        $course = Course::find($course->id);
        if(!$course){
             return response(
                 [
                     "message"=>"failed",
       ]);
       }else{
             return response(
                 [
                     "message"=>"success",
                     "book"=>$course,
         ]);
         }
    }
}
