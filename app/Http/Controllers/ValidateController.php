<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidateController extends Controller
{
    //
    function validation(Request $request)
    {
        $baskets= Panier::where('statut', 0)->where('id', Auth::user()->id)->get();
        foreach ($baskets as $basket)
        {
            $id_panier=$basket->id_panier;
            Panier::where('id_panier', $id_panier)->update(['statut'=>1, "LieuLivraison"=>$request->LieuLivraison, "MoyenPaiement"=>$request->MoyenPaiement]);
        }
        return redirect()->intended('panier'); 
        
    }
}
