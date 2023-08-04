<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Plat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;



class PanierController extends Controller
{
    function ajoutpanier(string $id, Request $request)
    {
    
       if (Auth::user())
       {  
            $user=Auth::user();
            if ($panier=(Panier::where('id', $user->id)->where('id_plat',$id)->where('statut', 0))->first())
            {
                if($request->quantité)
                {
                $new_quantité=$request->quantité;
                Panier::where('id_panier', $panier->id_panier)->update(['quantité' => $new_quantité]);
                }
                if($request->sup)
                {
                    $pan=(Panier::where('id', $user->id)->where('id_plat',$id)->where('statut', 0)->delete());
                }
            }
            else{
                Panier::create([
                    'id' => $user->id,
                    'id_plat'=>$id,
                    'quantité' => $request->quantité,
                ]);
            }
            return redirect()->intended('panier');
        }
        else
       {
        return redirect()->intended('connexion');
       }
    }

    function panier()
    {
        $user=Auth::user();
        $panier = Panier::where('id', $user->id)->where('statut', 0)->get();
        return view("demo/panier", ["panier"=>$panier]);
        
    }

    function AffichagePlat(string $id){
        $plat=Plat::where('id_plat', $id)->first();
        if ($user=Auth::user()){
            $panier=(Panier::where('id', $user->id)->where('id_plat',$id))->where('statut', 0)->first();
            return(view('demo/commander', ['plat'=>$plat, "panier"=>$panier]));
        }
        else
        {
            return (view('demo/commander', ['plat'=>$plat, "panier"=>0]));
        }

    }
    
}
