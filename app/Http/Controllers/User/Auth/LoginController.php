<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('user.auth.login');
    }

    public function loginProccess(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt(['email' =>$request->email, 'password' => $request->password, 'status'=>1]))
        {
            $request->session()->regenerate();
            return redirect()->route('user.dashboard');
        }
        session()->flash('msg_class','danger');
        session()->flash('msg','The provided credentials do not match our records.');                
        return redirect()->route('user.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    }
}
