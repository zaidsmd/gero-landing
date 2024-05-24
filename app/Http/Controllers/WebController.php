<?php

namespace App\Http\Controllers;

use App\Mail\DemandeEnvoyee;
use App\Mail\NouvelleDemande;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function tarification()
    {
        return view('tarification');
    }

    public function demo_form(Request $request)
    {
        $validatedData = $request->validate([
            'entreprise' => 'required|string|max:255',
            'telephone' => 'required|string|max:14',
            'email' => 'required|email|max:255',
        ]);

        $demande = Demande::create($validatedData);
        Mail::to($demande->email)->send(new DemandeEnvoyee($demande->entreprise));
        Mail::to($demande->email)->send(new NouvelleDemande($demande->entreprise, $demande->telephone, $demande->email));
        return redirect()->route('index')->with('success', 'Demande envoyé avec succès');

    }
}
