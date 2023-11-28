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





    <h1 class="text-center">Modifier un Fournisseur</h1>


    <form action="{{ route('fournisseur.update', $fournisseur->id) }}" method="POST">

    <div class="row">
        @method('PATCH')
        @csrf
        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" value="{{ $fournisseur->nom }}">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="prenom" value="{{ $fournisseur->prenom }}">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputMatricule" class="form-label">Matricule_fisc</label>
            <input type="text" class="form-control" name="prenom" value="{{ $fournisseur->matricule_fisc }}">
          </div>
        <div class="col-lg-6 mt-3">
            <label for="inputAdresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse" value="{{ $fournisseur->adresse }}">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputTelephone" class="form-label">Telephone</label>
          <input type="text" class="form-control" name="telephone" value="{{ $fournisseur->telephone }}">
        </div>
        <div class="col-lg-12 mt-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" value="{{ $fournisseur->email }}">


        </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Modifier</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
