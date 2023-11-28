@extends('layouts.mainlayout')
@section('content')

<div>

  @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
<ul>
@foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{ $error }}</li>
@endforeach





    <h1 class="text-center">Modifier une sortie</h1>


    <form action="{{ route('sortie.update', $sortie->id) }}" method="POST">

    <div class="row">
        @method('PATCH')
        @csrf
    
        <div class="col-lg-6 mt-3">
          <label for="inputQuantite" class="form-label">Quantite</label>
          <input type="text" class="form-control" name="quantite" value="{{ $sortie->quantite }}">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputDate" class="form-label">Date</label>
            <input type="date" class="form-control" name="date" value="{{ $sortie->date }}">
        </div>

        <div class="col-lg-12 mt-3">
          <label for="inputProduit" class="form-label">produit</label>
          <input type="text" class="form-control" name="produit" value="{{ $sortie->produit }}">
        </div>


        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Modifier</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
