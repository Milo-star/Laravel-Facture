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

    public function allFactures()
    {
        $factures = Facture::all();
        return view('factures.index', ['factures' => $factures]);
    }

    public function edit($id)
    {
        $facture = Facture::find($id);
        return view('factures.edit', compact('facture'));
    }

    public function update (Request $request, string $id)
    {
      $facture = Facture::find($id);
      $facture->titre = $request->input('titre');
      $facture->reference = $request->input('reference');
      $facture->description = $request->input('description');
      $facture->tva = $request->input('tva');
      $facture->price = $request->input('price');
      $facture->total = $facture->price * (1 + $facture->tva / 100);
      $facture->save();
    
      return redirect('/factures/index');
    }

    public function destroy($id)
    {
        $invoice = Facture::findOrFail($id);
        $invoice->delete();

        return redirect()->route('factures.index')->with('success', 'La facture a été supprimée.');
    }

    public function create()
    {
        return view('factures.create');
    }

    public function store(Request $request)
    {
        // Vérifier si tous les champs ont été remplis
        $fields = ['reference', 'titre', 'price', 'description', 'tva', 'client'];
        foreach ($fields as $field) {
            if (!$request->filled($field)) {
                return redirect()->back()->withInput()->withErrors(['error' => 'Veuillez remplir tous les champs']);
            }
        }
    
        // Créer la facture
        $facture = new Facture();
        $facture->reference = $request->input('reference');
        $facture->titre = $request->input('titre');
        $facture->price = $request->input('price');
        $facture->description = $request->input('description');
        $facture->tva = $request->input('tva');
        $facture->total = $facture->getTotalAttribute();
        $facture->client = $request->input('client');
        $facture->save();
    
        return redirect()->route('factures.index');
    }
}
