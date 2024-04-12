<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Destinations;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourPakageController extends Controller
{
    public function tourPakage(){
        $featuredTour = Tour::where('stock',1)->get();
        $destinationNew = Destinations::orderby('created_at','desc')->take(4)->get();
        $destinations = Destinations::all();
        $tourTypes = Tour::all();
        return view('fe.tours',compact('destinationNew','featuredTour','destinations','tourTypes'));
    }
}
