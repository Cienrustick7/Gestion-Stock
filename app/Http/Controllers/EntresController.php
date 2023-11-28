<?php

namespace App\Http\Controllers;

use App\Models\entre;
use App\Models\produits;
use Illuminate\Http\Request;

class EntresController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entre = entre::all();
        return view('Entrés.liste', compact('entre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produit = produits::all();
        return view('Entrés.ajout', compact('produit'));

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
        $entre = new entre();
        $entre->quantite = $request->quantite;
        $entre->date = $request->date;
        $entre->produits_id = $request->produits_id;
        $entre->save();

        return redirect()->route('entre.index')->with('status', ' entré a été ajouté avec succes.');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('entre.details',[

            'entre' => entre::find($id)

        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $entre = entre::find($id);
        return view('Entrés.edit', compact('entre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $entre = entre::find($id);

        $entre->update([

            'quantite'=>$request->quantite,
            'date'=>$request->date,
            'produits_id'=>$request->produits_id,

        ]);


        return redirect()->route('entre.index')->with('status', ' entré a été modifié avec succes.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $entre =  entre::find($id);
        $entre->delete();
        return redirect()->route('entre.index')->with('status', 'entré a été supprimé avec succes.');

    }
}
