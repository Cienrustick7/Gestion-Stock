<?php

namespace App\Http\Controllers;

use App\Models\clients;
use App\Models\entre;
use App\Models\factures;
use App\Models\produits;
use App\Models\sorties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function accueil()
    {
        return view('Auth');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        return view('Auth')->with('status', 'identifiant ou mot de passe incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return view('Auth');
    }

    public function dashboard()
    {
        $client = clients::all();
        $produit = produits::all();
        $facture = factures::all();
        $entre = entre::all();
        $sortie = sorties::all();
        return view ('dashboard', compact('client', 'produit', 'facture', 'entre', 'sortie'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
