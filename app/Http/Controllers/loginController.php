<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class loginController extends Controller
{
    public function register(){
        return view('login.signin');
    }
    public function registerpost(Request $request){

        $validatedData = $request -> validate([
            'name'=> 'required|max:255',
            'email'=> 'required|max:255|unique:users|regex:/(.+)@(.+)\.(.+)/i',
            'birth_date'=> 'required',
            'nomor_telepon'=> 'required',
            'password'=> 'required'
        ]);
        $validatedData['password']=Hash::make($validatedData['password']);

        $user=User::create($validatedData);
        auth()->login($user);

        return redirect('/');
    }
    public function login(){
        return view('dashbroad.dashbroad',
        ["title"=>'setting']);
    }

    public function loginpost(Request $request){
        $credetials = [
            'email' => $request->loginemail,
            'password' => $request->loginpassword,
        ];
        if (Auth::attempt($credetials)) {
            $request -> session()->regenerate();
            // $user=Auth::user();
            // $id=Auth::id();
            return redirect()->intended('dashbroad');
        }else{
            return redirect('register')->with('LoginEror', 'Login gagal!!!');
        }

    }

    public function logout(){
        Auth::logout();
        return view('welcome');
    }

    // public function index(){
    //     $userData   = user::all();
    //     return view('index')->with('user', $userData);
    // }
}