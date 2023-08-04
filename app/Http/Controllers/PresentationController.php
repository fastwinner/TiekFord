<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Etab;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresentationController extends Controller
{
    function Presentation()
    {
        return view('presentation');
    }
    
    function responsable()
    {
        return view('responsable');
    }

    function doregister(RegisterRequest $request )
    {
        if (User::where('email', $request->email)->first())
        {
            return redirect()->back()->with('email_error', 'Email déja existant !')->withInput();
        }
        else 
        {
            if ($request->password == $request->ConfMotDePasse)
            {
                User::create([
                    'name'=>$request->name,
                    'first_name'=>$request->first_name,
                    'email'=>$request->email,
                    'password'=>$request->password,
                    'admin'=>'1'
                ]);
                $user = User::where('email', $request->email)->first();
                Etab::create([
                    'nom_etab'=>$request->NomEtab,
                    'id'=> $user->id,
                ]);    
                $credentials=$request->validated();
                Auth::attempt($credentials);
                $request->session()->regenerate();  
                return redirect()->intended('index');   
            }
            else
            {   
                return redirect()->back()->with('motdepasse_error', 'veuillez entrez le même mot de passe dans les deux champs')->withInput();
            }
        }
    }
    function redirect(){
        return view('admin/index');
    } 
}
