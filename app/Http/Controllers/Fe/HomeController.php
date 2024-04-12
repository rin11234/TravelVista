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
        $destinations = Destinations::all();
        $tourTypes = Tour::all();
        return view('fe.home',compact('destinationNew','featuredTour','destinations','tourTypes'));
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
        $request->validate([
            'fullname' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'adult' => 'required|integer',
            // Thêm các quy tắc kiểm định cho các trường khác nếu cần
        ]);

        // Lấy tour_id từ yêu cầu
        $tourId = $request->input('tour_id');

        // Tạo một đối tượng Booking từ dữ liệu biểu mẫu và tour_id
        $bookingData = $request->except('tour_id');
        $bookingData['tour_id'] = $tourId;
        $booking = Booking::create($bookingData);
        // Redirect về trang trước với thông báo thành công hoặc bất kỳ hành động nào khác
        return redirect()->back()->with('success', 'Booking successful!');
    }


}