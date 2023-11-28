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
            <p>LISTE DES CLIENTS</p>
        </div>
            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prenom</th>
                  <th scope="col">adresse</th>
                  <th scope="col">Telephone</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tbody>
                  @foreach ($client as $cli )
                  <tr>
                    <td>{{ $cli->id }}</td>
                    <td>{{ $cli->nom }}</td>
                    <td>{{ $cli->prenom }}</td>
                    <td>{{ $cli->adresse }}</td>
                    <td>{{ $cli->telephone }}</td>
                    <td>{{ $cli->email }}</td>

                    <td>
                        
                      <a href="{{ route('client.show', $cli->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ route('client.edit', $cli->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ url('supprimer-client/' .$cli->id) }}" class="btn btn-danger"> <i class="bi bi-trash"></i></a>

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
