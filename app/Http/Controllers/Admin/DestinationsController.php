<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use App\Models\Models\Category;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destinations::all();
        return view('admin.destinations.index',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.destinations.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('photo') ) {
            $fileName = $request->photo->getClientOriginalName();
            // Store the main photo in the storage/app/public/images directory
            $request->photo->storeAs('public/images', $fileName);
        } else {
            $fileName = null; // If no main photo is provided
        }
        // dd($fileName);
        $data = $request->all();
        $data['image'] = $fileName;

        try {
            // Create a new product
            $destination = Destinations::create($data);

            return redirect()->route('destinations.index')->with('success', 'Thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Thất bại: ' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Destinations $destination)
    {
        $categories = Category::all();
        return view('admin.destinations.edit',compact('destination','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destinations $destination)
{
    try {
        $destination->update($request->except('photo')); // Update the destination with form data except photo

        // Check if a new photo file is uploaded
        if ($request->hasFile('photo')) {
            $fileName = $request->photo->getClientOriginalName();
            // Store the photo in the storage/app/public/images directory
            $request->photo->storeAs('public/images', $fileName);
            // Update the image attribute of the destination with the new file name
            $destination->update(['image' => $fileName]);
        }

        return redirect()->route('destinations.index')->with('success', 'Thành công');
    } catch (\Throwable $th) {
        return redirect()->back()->with('error', 'Thất bại: ' . $th->getMessage());
    }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destinations $destination)
    {
        $destination->delete();
        return redirect()->route('destinations.index')->with('success', 'Thành công');
    }
}
