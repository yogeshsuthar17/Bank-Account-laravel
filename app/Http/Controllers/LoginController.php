<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('bank-account.index')->with('success', 'Login successfully!');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid email or password']);
    }
    

    public function logout()
    {
        auth()->user()->tokens()->delete();
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
