<?php

namespace App\Http\Controllers;

use App\Art;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Art::latest()->paginate(10);
  
        return view('arts.index',compact('arts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('arts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'source' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
        ]);

        $image = new Art;
        $imageName = time().'.'.$request->source->extension();  
        $request->source->move(public_path('uploads'), $imageName);

        $image->source = $imageName;
        $image->name = $request->input('name');
        $image->category = $request->input('category');
        $image->save();

    
   
        return redirect()->route('arts.index')
                        ->with('success','Art created successfully.');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function show(Art $art)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function edit(Art $art)
    {
        return view('arts.edit',compact('art'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Art $art)
    {
        $request->validate([
            'name' => 'required',
            'source' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
        ]);
  
        $image = new Art;
        $imageName = time().'.'.$request->source->extension();  
        $request->source->move(public_path('uploads'), $imageName);

        $image->source = $imageName;
        $image->name = $request->input('name');
        $image->category = $request->input('category');
        $image->save();
  
        return redirect()->route('arts.index')
                        ->with('success','Art updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Art  $art
     * @return \Illuminate\Http\Response
     */
    public function destroy(Art $art)
    {
        $art->delete();
  
        return redirect()->route('arts.index')
                        ->with('success','Art deleted successfully');
    }
}
