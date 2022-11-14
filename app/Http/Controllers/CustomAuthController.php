<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = user::where('email','=', $request->email)->first();
        if ($user){
            if(hash::check($request->password,$user->wachtwoord)){
                $request-> session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'onjuist wachtwoord.');
            }
        }else{
            return back()->with('fail', 'email is niet geregistreerd.');
        }
    }
    public function dashboard(){
//        dd("dashboard");
//        if (session::has('loginId')){
            $data = user::where('id','=',session::get('loginId'))->first();
            return view('dashboard', compact('data'));
//        }
//        abort(404);
    }
    public function logout(){
        if (session::has('loginId')){
            session::pull('loginId');
            return redirect('login');
        }
    }
}
