<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PrecommandeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function save(Request $request)
    {
        if (Auth::check()) {
            try {
                DB::insert('INSERT INTO dbo.precommandes (sector_activities,nb_machine,card_number,date_expiration,cvv) values (?, ?, ?, ?, ?)', [
                    $request->sector_activities,
                    $request->nb_machine,
                    bcrypt($request->card_number),
                    $request->date_expiration,
                    $request->cvv
                ]);

                return json_encode(["status" => 0, "message" => "Données bien enregistré"]);
            } catch (\Exception $e) {
                return json_encode(["status" => 1, "message" => "Erreur lors de l'enregistrement", "item" => $e]);
            }
        } else {
            $request->session()->put('sector_activities', $request->sector_activities);
            $request->session()->put('nb_machine', $request->nb_machine);
            $request->session()->put('card_number', $request->card_number);
            $request->session()->put('date_expiration', $request->date_expiration);
            $request->session()->put('cvv', $request->cvv);
            $request->session()->put('user_precommande', $request->user_precommande);
            
            return json_encode(["status" => 2, "message" => "L'utilisateur n'est pas connecté"]);
        }
    }
}
