<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $categories = Category::all();

        // Pass the categories data to the view for display
        return view('admin.category.index', compact('categories'));
    }
}
