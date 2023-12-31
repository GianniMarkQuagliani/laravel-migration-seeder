@extends('layouts.main')

@section('content')
    <main class="my-5">
        <div class="container">
            <h1 class="text-center mb-3">Lista Treni</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Codice</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Date</th>
                    <th scope="col">Departure time</th>
                    <th scope="col">Arrival time</th>
                    <th scope="col">In Time</th>
                    <th scope="col">Deleted</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{$train->id}}</th>
                        <td>{{$train->Codice_Treno}}</td>
                        <td>{{$train->Azienda}}</td>
                        <td>{{$train->Stazione_di_partenza}}</td>
                        <td>{{$train->Stazione_di_arrivo}}</td>
                        <td>{{$train->date}}</td>
                        <td>{{$train->Orario_di_partenza}}</td>
                        <td>{{$train->Orario_di_arrivo}}</td>
                        <td>{{$train->In_orario ? 'True' : 'False'}}</td>
                        <td>{{$train->Cancellato ? 'True' : 'False'}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </main>
@endsection
