<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function allClients()
    {
        $clients = Client::all();
        return view('clients.index', ['clients' => $clients]);
    }

    public function edit($id)
    {
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'Company' => 'required|max:255',
            'phone' => 'required',
            'mail' => 'required',
            'adress' => 'required',
            'tva' => 'required',
            'Invoice' => 'required',
        ]);

        $client = Client::find($id);

        if (!$client) {
            abort(404);
        }

        $client->Company = $validatedData['Company'];
        $client->phone = $validatedData['phone'];
        $client->mail = $validatedData['mail'];
        $client->adress = $validatedData['adress'];
        $client->tva = $validatedData['tva'];
        $client->Invoice = $validatedData['Invoice'];

        // Enregistrer les modifications dans la base de données
        $client->save();

        return redirect('/clients/index');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Le client a été supprimée.');
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->Company = $request->input('Company');
        $client->phone = $request->input('phone');
        $client->mail = $request->input('mail');
        $client->adress = $request->input('adress');
        $client->tva = $request->input('tva');
        $client->Invoice = $request->input('Invoice');
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Le client a été crée !');
    }
}