<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){

        $categories = Category::all();

        // Pass the categories data to the view for display
        return view('admin.index', compact('categories'));
    }
    public function logon(){
        return view('admin.logon');
    }
    public function postLogon(Request $request){
       if(Auth::attempt(['email' => $request->email, 'password' => $request->password , 'role'=>1])){
        return redirect()->route('index');
       }
       return redirect()->back();
    }
    public function logOut(){
        Auth::logout();
        return redirect()->route('logon');
    }
}
