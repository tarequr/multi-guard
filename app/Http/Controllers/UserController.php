<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }

    public function userCreate(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email'  => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed|string|min:8'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('user.dashboard');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function showUserLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email'  => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('web')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect()->intended('/user/dashboard');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('user.login');
    }
}
