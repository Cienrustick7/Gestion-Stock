<?php

namespace App\Http\Controllers;

use App\Models\produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produit = produits::all();
        return view('Produits.liste', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produits.ajout');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle'=>'required',
            'stock'=>'required',
            'image'=>'required',




        ]);
        $produit = new produits();
        $produit->libelle = $request->libelle;
        $produit->stock = $request->stock;
        $produit->image = $request->image->store('photo', 'public');
        $produit->save();

        return redirect()->route('produit.index')->with('status', 'Le produit a été ajouté avec succes.');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produit.details',[

            'produit' => produits::find($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = produits::find($id);
        return view('produits.edit', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produit = produits::find($id);

        $produit->update([
            'libelle'=>$request->libelle,
            'stock'=>$request->stock,
            'image'=>$request->image->store('photo', 'public'),


        ]);


        return redirect()->route('produit.index')->with('status', 'le produit a été modifié avec succes.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit =  produits::find($id);
        $produit->delete();
        return redirect()->route('produit.index')->with('status', 'le produit a été supprimé avec succes.');

    }
}
