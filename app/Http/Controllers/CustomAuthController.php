<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.registration");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);
        $user = new User();
        $user->naam = $request->name;
        $user->email = $request->email;
        $user->wachtwoord = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'Gelukt!');
        } else {
            return back()->with('fail','Oei, er ging iets mis...');
        }
    }
    public function loginUser(Request $request){
        
    }
}
