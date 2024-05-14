<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('fe.forgot-password');
    }
    public function submitForgotPasswordForm(){
        return redirect()->route('veriFicationEmmail1');
    }
    public function veriFication1(){
        return view('fe.verification');
    }
}
