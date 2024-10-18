@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')

<div class="container text-center mt-5">


    <h1>
        Laravel Migration Seeder
    </h1>

    <table class="table table-striped text-center mt-5 mx-auto border border-3">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Data di partenza</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In orario</th>
            <th scope="col">Cancellato</th>

          </tr>

        </thead>

        <tbody>

            @foreach ($trains as $train )
                <tr>
                    <th>{{ $train->id }}</th>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departureStation }}</td>
                    <td>{{ $train->arrivalStation }}</td>
                    <td>{{ $train->departureDate }}</td>
                    <td>{{ $train->departureTime }}</td>
                    <td>{{ $train->arrivalTime }}</td>
                    <td>{{ $train->trainCode }}</td>
                    <td>{{ $train->numberOfCarriages }}</td>
                    <td>{{ $train->onTime? 'si' : 'no'}}</td>
                    <td>{{ $train->deleted? 'si' : 'no' }}</td>

                </tr>

            @endforeach

        </tbody>

    </table>


</div>


@endsection
