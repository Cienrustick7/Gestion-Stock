@extends('layouts.mainlayout')
@section('content')




   <h1 class="text-center">Ajouter une nouvelle Facture</h1>

    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <form action="{{ route('facture.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputDate" class="form-label">Date</label>
          <input type="date" class="form-control" name="date">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputTotal" class="form-label">Total_HT</label>
          <input type="number" class="form-control" name="total">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputTotal" class="form-label">Total_TVA</label>
          <input type="number" class="form-control" name="total">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputTotal" class="form-label">Total_TTC</label>
            <input type="number" class="form-control" name="total">
          </div>

        <div class="col-lg-6 mt-3">
            <label for="inputProduit" class="form-label">Produit</label>
            <select class="form-control" name="produits_id">

                <option>Selectionner un produit</option>;
                @foreach ( $produit as $prod)
                    <option value="{{ $prod->id}}">{{ $prod->libelle  }} </option>

                @endforeach
            </select>
        </div>
            <div class="col-lg-6 mt-3">
                <label for="inputClient" class="form-label">Client</label>
                <select class="form-control" name="clients_id">

                    <option>Selectionner un client</option>;
                    @foreach ( $client as $cli)
                        <option value="{{ $cli->id}}">{{ $cli->nom  }}{{ $cli->prenom  }} </option>

                    @endforeach
                </select>
            </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
