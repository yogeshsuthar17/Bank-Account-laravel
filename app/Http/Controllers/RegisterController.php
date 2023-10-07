<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
     
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        );
        $user = User::create($data);
        auth()->login($user);
        return redirect()->route('bank-account.index')->with('success', "Account successfully registered.");
    }
}
