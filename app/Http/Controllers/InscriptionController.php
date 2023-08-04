<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InscriptionController extends Controller
{
    function register(){
        return view('demo/inscription');
    }

    function doregister(RegisterRequest $request ){
        if (User::where('email', $request->email)->first()){
            return redirect()->back()->with('email_error', 'Email déja existant !')->withInput();
        }
        else {
            if ($request->password == $request->ConfMotDePasse){
                user::create([
                    'name'=>$request->name,
                    'first_name'=>$request->first_name,
                    'email'=>$request->email,
                    'password'=>$request->password,
                    'admin'=>'0'
                ]);     
                $credentials=$request->validated();
                Auth::attempt($credentials);
                $request->session()->regenerate();  
                return redirect()->intended('index');
            }
            else{   
                return redirect()->back()->with('motdepasse_error', 'veuillez entrez le même mot de passe dans les deux champs')->withInput();
            }

        } 
    }
}
