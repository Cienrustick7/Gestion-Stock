@extends('layouts.mainlayout')
@section('content')


@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">

           <div class="text-center">
            <p>LISTE DES PRODUITS</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">libelle</th>
                  <th scope="col">stock</th>
                  <th scope="col">image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($produit as $prod )
                  <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->libelle }}</td>
                    <td>{{ $prod->stock }}</td>
                    <td><img src="{{ asset('storage') . '/' .  $prod->image }}" alt="" style="width: 20%"></td>
                    <td>
                    <a href="{{ route('produit.show', $prod->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('produit.edit', $prod->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ url('supprimer-produit/' .$prod->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                    </td>
                  @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection
