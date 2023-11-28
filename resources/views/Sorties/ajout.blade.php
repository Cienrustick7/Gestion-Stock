@extends('layouts.mainlayout')
@section('content')




   <h1 class="text-center">Ajouter une nouvelle Sortie</h1>

    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <form action="{{ route('sortie.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
            <label for="inputQuantite" class="form-label">quantié</label>
            <input type="number" class="form-control" name="quantite">

          </div>

        <div class="col-lg-6 mt-3">
            <label for="inputDate" class="form-label">date</label>
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-lg-12 mt-3">
            <label for="inputProduit" class="form-label">Produit</label>
            <select class="form-control" name="produits_id">

                <option>Selectionner un produit</option>;
                @foreach ( $produit as $prod)
                    <option value="{{ $prod->id}}">{{ $prod->libelle  }} </option>

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
