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





    <h1 class="text-center">Modifier un client</h1>


    <form action="{{ route('client.update', $client->id) }}" method="POST">

    <div class="row">
        @method('PATCH')
        @csrf
        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom" value="{{ $client->nom }}">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="prenom" value="{{ $client->prenom }}">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputAdresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresse" value="{{ $client->adresse }}">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputTelephone" class="form-label">Telephone</label>
          <input type="text" class="form-control" name="telephone" value="{{ $client->telephone }}">
        </div>
        <div class="col-lg-12 mt-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" value="{{ $client->email }}">


        </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Modifier</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
