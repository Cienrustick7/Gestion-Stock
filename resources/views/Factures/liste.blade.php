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
            <p>LISTE DES FACTURES</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Date</th>
                  <th scope="col">Total_HT</th>
                  <th scope="col">Total_TVA</th>
                  <th scope="col">Total_TTC</th>
                  <th scope="col">produit</th>
                  <th scope="col">client</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($facture as $fac )
                  <tr>
                    <td>{{ $fac->id }}</td>
                    <td>{{ $fac->date }}</td>
                    <td>{{ $fac->total_ht }}</td>
                    <td>{{ $fac->total_tva }}</td>
                    <td>{{ $fac->total_ttc }}</td>
                    <td>{{ $fac->produit->libelle }}</td>
                    <td>{{ $fac->client->nom->prenom }}</td>

                    <td>
                     @if (Auth::user()->roles_id == '1')
                    <a href="{{ route('facture.show', $fac->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('facture.edit', $fac->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ url('supprimer-facture/' .$fac->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>
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
