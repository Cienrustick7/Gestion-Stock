<?php

namespace App\Http\Controllers;

use App\Models\fournisseurs;
use Illuminate\Http\Request;

class FournisseursController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fournisseur = fournisseurs::all();
        return view('Fournisseurs.liste', compact('fournisseur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Fournisseurs.ajout');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'matricule_fisc'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'email'=>'required',

        ]);
        $fournisseur = new fournisseurs();
        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->matricule_fisc = $request->matricule_fisc;
        $fournisseur->adresse = $request->adresse;
        $fournisseur->telephone = $request->telephone;
        $fournisseur->email = $request->email;
        $fournisseur->save();

        return redirect()->route('fournisseur.index')->with('status', 'Le fournisseur a été ajouté avec succes.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('fournisseur.details',[

            'fournisseur' => fournisseurs::find($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fournisseur = fournisseurs::find($id);
        return view('Fournisseurs.edit', compact('fournisseur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fournisseur = fournisseurs::find($id);

        $fournisseur->update([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'matricule_fisc'=>$request->matricule_fisc,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone,
            'email'=>$request->email,


        ]);


        return redirect()->route('fournisseur.index')->with('status', 'le fournisseur a été modifié avec succes.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fournisseur =  fournisseurs::find($id);
        $fournisseur->delete();
        return redirect()->route('fournisseur.index')->with('status', 'le fournisseur a été supprimé avec succes.');

    }
}
