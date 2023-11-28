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
            <p>LISTE DES FOURNISSEURS</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">Matricule_fisc</th>
                  <th scope="col">adresse</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($fournisseur as $four )
                  <tr>
                    <td>{{ $four->id }}</td>
                    <td>{{ $four->nom }}</td>
                    <td>{{ $four->prenom }}</td>
                    <td>{{ $four->matricule_fisc }}</td>
                    <td>{{ $four->adresse }}</td>
                    <td>{{ $four->telephone }}</td>
                    <td>{{ $four->email }}</td>

                    <td>
                      <a href="{{ route('fournisseur.show', $four->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('fournisseur.edit', $four->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ url('supprimer-fournisseur/' .$four->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
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
