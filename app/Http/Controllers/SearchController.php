<?php

namespace App\Http\Controllers;

use App\Models\Destinations;
use App\Models\Tour;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
{
    $destinations = Destinations::all(); // Truy vấn tất cả các điểm đến từ cơ sở dữ liệu
    return view('home', compact('destinations')); // Chuyển dữ liệu $destinations đến view
}
public function search(Request $request){
    if(isset($request->search)){
        $search = $request->search;
        $featuredTour = Tour::where('title', 'like', '%' . $search . '%')
                            ->where('stock', 1)
                            ->get();
        $destinationNew = Destinations::orderby('created_at','desc')->take(4)->get();
        $destinations = Destinations::all();
        $tourTypes = Tour::all();
        return view('fe.search', compact('destinationNew', 'featuredTour', 'destinations', 'tourTypes', 'search'));
    } else {
        return redirect()->to('/');
    }
}

}
