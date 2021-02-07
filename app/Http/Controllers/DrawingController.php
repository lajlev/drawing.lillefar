<?php

namespace App\Http\Controllers;

use App\Models\drawing;
use Illuminate\Http\Request;

class DrawingController extends Controller
{
   
    public function index()
    {
        $drawings = Drawing::all();
        return view('drawings.index', ['drawings' => $drawings]);
    }

    
    public function create()
    {
        return view('drawings.create');
    }

    
    public function store(Request $request)
    {
        var_dump(request('title'));
    }

    
    public function show(drawing $drawing)
    {
        return view('drawings.show', ['drawing' => $drawing]);
    }

    
    // public function edit(drawing $drawing)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drawing  $drawing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drawing $drawing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drawing  $drawing
     * @return \Illuminate\Http\Response
     */
    public function destroy(drawing $drawing)
    {
        //
    }
}
