@extends('layouts.mainlayout')
@section('content')




   <h1 class="text-center">Ajouter un nouvel Produit</h1>

    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif

    <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputLibelle" class="form-label">libelle</label>
          <input type="text" class="form-control" name="libelle">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputStock" class="form-label">stock</label>
            <input type="number" class="form-control" name="stock">

          </div>

        <div class="col-lg-12 mt-3">
            <label for="inputImage" class="form-label">image</label>
            <input type="file" class="form-control" name="image">
          </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
      </div>
    </form>
@endsection
