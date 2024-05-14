<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('fe.login');
    }
    public function register(){
        return view('fe.register');
    }
    public function postRegister(Request $request){
        // Merge một key mới vào request với mật khẩu đã được hash
        $request->merge(['password' => Hash::make($request->password)]);

        try {
            // Tạo mới người dùng với mật khẩu đã được hash
            User::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
        }

        // Chuyển hướng sau khi đăng ký
        return redirect()->route('login');

    }
    public function postLogin(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index')->with('success','đăng kí thành công');
        }
        return redirect()->back()->with('error','đăng kí thất bại');

    }
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

}
