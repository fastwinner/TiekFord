<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    
    function login(){
        /*
         User::create([
        'name'=>'kpangni',
        'first_name'=>'akoua',
        'email'=>'akoua.kpangni20@inphb.ci',
        'password'=> Hash::make('0000'),
        'admin'=>'1'
    ]);
        */
        
        return view('demo/connexion');
    }

    function dologin(LoginRequest $request){
        if (user::where('email', $request->email)->first()){
            $credentials=$request->validated();
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('index');       
            }
            else{
                return redirect("connexion")->with('password_error', 'Mot de passe incorrect')->onlyInput('email');
            }
        }
        else{
            return redirect("connexion")->withErrors([
                'email'=> "Email invalide"
            ])->onlyInput('email');
        }

    }

    function Logout(){
        Auth::logout();
        return view('demo/index');
    }

    function redirect(){
        return view('demo/index');
    }
}
