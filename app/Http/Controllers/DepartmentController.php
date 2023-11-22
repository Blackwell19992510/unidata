<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Http\Requests\StoredepartmentRequest;
use App\Http\Requests\UpdatedepartmentRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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
     
    public function store(StoredepartmentRequest $request)
    {
        //
    }

    *
     * Display the specified resource.
     
    public function show(department $department)
    {
        //
    }

    *
     * Show the form for editing the specified resource.
     
    public function edit(department $department)
    {
        //
    }

    *
     * Update the specified resource in storage.
     
    public function update(UpdatedepartmentRequest $request, department $department)
    {
        //
    }

    *
     * Remove the specified resource from storage.
     
    public function destroy(department $department)
    {
        //
    }*/

    function createDepatmnt(Request $request){

        $request->validate([
            'name'=>'required',
            'head_of_department'=>'required',
        ]);

        $department =Department::create ([
            'name'=>$request->name,
            'head_of_department'=>$request->head_of_department,
        ]);

        $department = Department::find($department->id);
        if(!$department){
             return response(
                 [
                     "message"=>"failed",
       ]);
       }else{
             return response(
                 [
                     "message"=>"success",
                     "book"=>$department,
         ]);
         }
    }
}
