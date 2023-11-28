<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use App\Models\factures;
use App\Models\produits;

class FacturesController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $facture = factures::all();
            return view('Factures.liste', compact('facture'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $produit = produits::all();
            $client = clients::all();
            return view('Factures.ajout', compact('produit', 'client'));

        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $request->validate([
                'date'=>'required',
                'total_ht'=>'required',
                'total_tva'=>'required',
                'total_ttc'=>'required',
                'produits_id'=>'required',
                'clients_id'=>'required',

            ]);
            $facture = new factures();
            $facture->date = $request->date;
            $facture->total_ht = $request->total_ht;
            $facture->total_tva = $request->total_tva;
            $facture->total_ttc = $request->total_ttc;
            $facture->produits_id = $request->produits_id;
            $facture->clients_id = $request->clients_id;
            $facture->save();

            return redirect()->route('facture.index')->with('status', 'La facture a été ajouté avec succes.');




        }

        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            return view('Factures.details',[

                'facture' => factures::find($id)

            ]);

        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $facture = factures::find($id);
            return view('Factures.edit', compact('facture'));
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $facture = factures::find($id);

            $facture->update([
                'date'=>$request->date,
                'total_ht'=>$request->total_ht,
                'total_tva'=>$request->total_tva,
                'total_ttc'=>$request->total_ttc,
                'produits_id'=>$request->produits_id,
                'clients_id'=>$request->clients_id,
            ]);
            return redirect()->route('facture.index')->with('status', 'la facture a été modifié avec succes.');

        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $facture =  factures::find($id);
            $facture->delete();
            return redirect()->route('facture.index')->with('status', 'la facture a été supprimé avec succes.');

        }
    }


