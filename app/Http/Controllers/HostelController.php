<?php

namespace App\Http\Controllers;

use App\Models\hostel;
use App\Http\Requests\StorehostelRequest;
use App\Http\Requests\UpdatehostelRequest;
use Illuminate\Http\Request;

class HostelController extends Controller
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
     
    public function store(StorehostelRequest $request)
    {
        //
    }

    *
     * Display the specified resource.
     
    public function show(hostel $hostel)
    {
        //
    }

    *
     * Show the form for editing the specified resource.
     
    public function edit(hostel $hostel)
    {
        //
    }

    *
     * Update the specified resource in storage.
     
    public function update(UpdatehostelRequest $request, hostel $hostel)
    {
        //
    }

    *
     * Remove the specified resource from storage.
     
    public function destroy(hostel $hostel)
    {
        //
    }*/
    function createHostel(Request $request){

        $request->validate([
            'name'=>'required',
        ]);

        $hostel =Hostel::create ([
            'name'=>$request->name,
        ]);

        $hostel = Hostel::find($hostel->id);
        if(!$hostel){
             return response(
                 [
                     "message"=>"failed",
       ]);
       }else{
             return response(
                 [
                     "message"=>"success",
                     "book"=>$hostel,
         ]);
         }
    }
}
