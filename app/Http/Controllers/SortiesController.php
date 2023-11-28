<?php

namespace App\Http\Controllers;

use App\Models\produits;
use App\Models\sorties;
use Illuminate\Http\Request;

class SortiesController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sortie = sorties::all();
        return view('Sorties.liste', compact('sortie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produit = produits::all();
        return view('Sorties.ajout', compact('produit'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'quantite'=>'required',
            'date'=>'required',
            'produits_id'=>'required',




        ]);
        $sortie = new sorties();
        $sortie->quantite = $request->quantite;
        $sortie->date = $request->date;
        $sortie->produits_id = $request->produits_id;
        $sortie->save();

        return redirect()->route('sortie.index')->with('status', ' la sortie a été ajouté avec succes.');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Sorties.details',[

            'sortie' => sorties::find($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sortie = sorties::find($id);
        return view('Sorties.edit', compact('sortie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sortie = sorties::find($id);

        $sortie->update([
            'quantite'=>$request->quantite,
            'date'=>$request->date,
            'produits_id'=>$request->produits_id,

        ]);


        return redirect()->route('sortie.index')->with('status', ' la sortie a été modifié avec succes.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sortie =  sorties::find($id);
        $sortie->delete();
        return redirect()->route('sortie.index')->with('status', 'la sortie a été supprimé avec succes.');

    }
}
