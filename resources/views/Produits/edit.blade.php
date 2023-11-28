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





    <h1 class="text-center">modifier un produit</h1>


    <form action="{{ route('produit.update', $produit->id) }}" method="POST">

    <div class="row">
        @method('PATCH')
        @csrf
        <div class="col-lg-6 mt-3">
          <label for="inputLibelle" class="form-label">libelle</label>
          <input type="text" class="form-control" name="libelle" value="{{ $produit->libelle }}">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputStock" class="form-label">Stock</label>
          <input type="text" class="form-control" name="stock" value="{{ $produit->stock }}">
        </div>
        <div class="col-lg-6 mt-3">
            <label for="inputImage" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" value="{{ $produit->image }}">
          </div>

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">modifier</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
