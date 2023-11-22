<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   /* public function index()
    {
        //
    }*/

    /**
     * Show the form for creating a new resource.(creating new student)
     */
    function createStudent(Request $request)
    {   
        //validate inputs
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'age'=>'required',
        ]);

        $student =Student::create ([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'age'=>$request->age,
        ]);

        $student = Student::find($student->id);
        if(!$student){
             return response(
                 [
                     "message"=>"failed",
       ]);
       }else{
             return response(
                 [
                     "message"=>"success",
                     "book"=>$student,
         ]);
         }
    }

    /**
     * Store a newly created resource in storage.
     */
   /* public function store(StorestudentRequest $request)
    {
        //
    }*/

    /**
     * Display the specified resource.
     */
    /*public function show(student $student)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(student $student)
    {
        //
    }*/

    /**
     * Update the specified resource in storage.
     */
    /*public function update(UpdatestudentRequest $request, student $student)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(student $student)
    {
        //
    }*/
}
