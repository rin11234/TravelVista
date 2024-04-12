<?php

namespace App\Http\Controllers\Fe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationNewController extends Controller
{
    public function destinationsNew(){
        return view('fe.destinations');
    }
}
