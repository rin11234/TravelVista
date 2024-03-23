<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Destinations;
use App\Models\Tour;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $featuredTour = Tour::where('stock',1)->get();
        $destinationNew = Destinations::orderby('created_at','desc')->take(4)->get();
        return view('fe.home',compact('destinationNew','featuredTour'));
    }
    public function detail($id) {
        // Tìm tour dựa trên ID
        $tour = Tour::findOrFail($id);
        //Tous liên quan
        $related = Tour::where('destination_id',$tour->destination_id)->take(5)->get();
        $destinationNew = Destinations::orderby('created_at','desc')->take(4)->get();
        return view('fe.details', compact('tour','related','destinationNew'));
    }
public function booking(Request $request) {
    // Validate form data
    $validatedData = $request->validate([
        'fullname' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|string|email|max:255',
        'adult' => 'required|integer|min:1',
        'children' => 'nullable|integer|min:0',
        'start_date_book' => 'nullable|date',
        'message' => 'nullable|string',
        'tour_id' => 'required|exists:tours,id', // Ensure tour_id exists in tours table
    ]);

    $booking = Booking::create($validatedData);

    // Redirect back with a success message or any other action
    return redirect()->back()->with('success', 'Booking successful!');
}

}
