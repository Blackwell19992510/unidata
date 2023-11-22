<?php

namespace App\Http\Controllers;

use App\Models\lecturer;
use App\Http\Requests\StorelecturerRequest;
use App\Http\Requests\UpdatelecturerRequest;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   /* public function index()
    {
        //
    }

    *
     * Show the form for creating a new resource.
     */
    function createLecturer(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phonenumber'=>'required',
        ]);

        $lecturer =Lecturer::create ([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phonenumber'=>$request->phonenumber,
        ]);

        $lecturer = Lecturer::find($lecturer->id);
        if(!$lecturer){
             return response(
                 [
                     "message"=>"failed",
       ]);
       }else{
             return response(
                 [
                     "message"=>"success",
                     "book"=>$lecturer,
         ]);
         }
    }

    /**
     * Store a newly created resource in storage.
     */
   /* public function store(StorelecturerRequest $request)
    {
        //
    }

    *
     * Display the specified resource.
     
    public function show(lecturer $lecturer)
    {
        //
    }

    *
     * Show the form for editing the specified resource.
     
    public function edit(lecturer $lecturer)
    {
        //
    }

    *
     * Update the specified resource in storage.
     
    public function update(UpdatelecturerRequest $request, lecturer $lecturer)
    {
        //
    }

    *
     * Remove the specified resource from storage.
     
    public function destroy(lecturer $lecturer)
    {
        //
    }*/
}
