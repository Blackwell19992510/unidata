<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use App\Http\Requests\StoreclassroomRequest;
use App\Http\Requests\UpdateclassroomRequest;
use Illuminate\Http\Request;

class ClassroomController extends Controller
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
     
    public function store(StoreclassroomRequest $request)
    {
        //
    }

    *
     * Display the specified resource.
     
    public function show(classroom $classroom)
    {
        //
    }

    *
     * Show the form for editing the specified resource.
     
    public function edit(classroom $classroom)
    {
        //
    }

    *
     * Update the specified resource in storage.
     
    public function update(UpdateclassroomRequest $request, classroom $classroom)
    {
        //
    }

    *
     * Remove the specified resource from storage.
     
    public function destroy(classroom $classroom)
    {
        //
    }*/

    function createClassroom(Request $request){

        $request->validate([
            'name'=>'required',
            'building'=>'rquired',
        ]);

        $classroom =Classroom::create ([
            'name'=>$request->name,
            'building'=>$request->building,
        ]);

        $classroom = Classroom::find($classroom->id);
        if(!$classroom){
             return response(
                 [
                     "message"=>"failed",
       ]);
       }else{
             return response(
                 [
                     "message"=>"success",
                     "book"=>$classroom,
         ]);
         }
    }
}
