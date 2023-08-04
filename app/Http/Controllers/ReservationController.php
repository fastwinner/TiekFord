<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    function CreeReservation(Request $request)
    {
        Reservation::create([
            'NombrePersonne'=>$request->NombrePersonne,
            'DateReservation'=>$request->date,
            'SpecialRequest'=>$request->SpecialRequest,
            'HeureReservation'=>$request->time
        ]);
        return redirect()->intended('panier');
    }

    function modifier(string $id, Request $request)
    {
        Reservation::where('id_reservation', $id)->update([
            'NombrePersonne'=>$request->NombrePersonne,
            'DateReservation'=>$request->date,
            'SpecialRequest'=>$request->SpecialRequest,
            'HeureReservation'=>$request->time
        ]);
        return redirect()->intended('panier');
    }
}
