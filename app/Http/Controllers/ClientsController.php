<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = clients::all();
        return view('Clients.liste', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clients.ajout');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'email'=>'required',



        ]);
        $client = new clients();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;
        $client->telephone = $request->telephone;
        $client->email = $request->email;
        $client->save();

        return redirect()->route('client.index')->with('status', 'Le client a été ajouté avec succes.');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('client.details',[

            'client' => clients::find($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = clients::find($id);
        return view('Clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = clients::find($id);

        $client->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            'email'=>$request->email,


        ]);


        return redirect()->route('client.index')->with('status', 'le client a été modifié avec succes.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client =  clients::find($id);
        $client->delete();
        return redirect()->route('client.index')->with('status', 'le client a été supprimé avec succes.');

    }
}
