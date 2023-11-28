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
            <p>LISTE DES ENTRES</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">quantite</th>
                  <th scope="col">date</th>
                  <th scope="col">propduit</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($entre as $ent )
                  <tr>
                    <td>{{ $ent->id }}</td>
                    <td>{{ $ent->quantite }}</td>
                    <td>{{ $ent->date }}</td>
                    <td>{{ $ent->produit->libelle }}</td>

                <td>
                    @if (Auth::user()->roles_id == '1')
                    <a href="{{ route('entre.show', $ent->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('entre.edit', $ent->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ url('supprimer-entre/' .$ent->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
                    @else
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
