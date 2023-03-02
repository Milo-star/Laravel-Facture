<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;

class FactureController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function allClients()
    {
        $factures = Facture::all();
        return view('factures.index', ['factures' => $factures]);
    }

    public function edit($id)
    {
        $facture = Facture::find($id);
        return view('factures.edit', compact('facture'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'reference' => 'required|max:255',
            'titre' => 'required',
            'description' => 'required',
            'tva' => 'required',
            'price' => 'required',
        ]);
    
        // Trouver la facture à mettre à jour
        $facture = Facture::find($id);
    
        if (!$facture) {
            abort(404);
        }
    
        // Mettre à jour les données de la facture
        $facture->reference = $validatedData['reference'];
        $facture->titre = $validatedData['titre'];
        $facture->description = $validatedData['description'];
        $facture->tva = $validatedData['tva'];
        $facture->price = $validatedData['price'];
    
        // Enregistrer les modifications dans la base de données
        $facture->save();
    
        // Rediriger l'utilisateur vers la page de la liste des factures
        return redirect('/factures/index');
    }
    

}