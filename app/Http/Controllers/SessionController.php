<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function addSessionArray(Request $request)
    {
        $request->session()->put('sector_activities', $request->sector_activities);
        $request->session()->put('nb_machine', $request->nb_machine);
        $request->session()->put('card_number', $request->card_number);
        $request->session()->put('date_expiration', $request->date_expiration);
        $request->session()->put('cvv', $request->cvv);
        

        return json_encode(["status" => "2", "message" => "L'utilisateur n'est pas connecté"]);
    }

    public function ckeckSessionArray(Request $request)
    {
        var_dump(session('sector_activities'));
        var_dump(session('nb_machine'));
        var_dump(session('card_number'));
        var_dump(session('date_expiration'));
        var_dump(session('cvv'));
    }
}
