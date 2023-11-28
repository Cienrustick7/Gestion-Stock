@extends('layouts.mainlayout')
@section('content')




   <h1 class="text-center">Ajouter un nouvel Client</h1>

    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <form action="{{ route('client.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="prenom">
        </div>

        <div class="col-lg-6 mt-3">
          <label for="inputAdresse" class="form-label">Adresse</label>
          <input type="text" class="form-control" name="adresse">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputTelephone" class="form-label">Telephone</label>
            <input type="text" class="form-control" name="telephone">
          </div>

        <div class="col-lg-12 mt-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="text" class="form-control" name="email">
        </div>


        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
