<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use App\Models\Models\Category;
use App\Models\Tour;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\TryCatch;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::all();
        return view('admin.tour.index',compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destinations::all();
        return view('admin.tour.add',compact('destinations'));
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
            $tour = Tour::create($data);

            return redirect()->route('tours.index')->with('success', 'Thành công');
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
    public function search($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $destinations = Destinations::all();
        return view('admin.tour.edit',compact('tour','destinations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        try{
        $tour->update($request->except('photo'));
        if($request->hasFile('photo')){
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('/public/images',$fileName);
            $tour->update(['image' =>$fileName]);
           } else {
            $fileName = null; // If no main photo is provided
            }

        return redirect()->route('tours.index')->with('success','thanh cong');
       }catch(\Throwable $h){
        return redirect()->back()->with('error','that bai');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        $tour->delete();
        return redirect()->route('tours.index')->with('success','xoa thanh cong');
    }

}
