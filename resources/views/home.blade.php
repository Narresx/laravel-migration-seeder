@extends('layouts.layout')

@section('content')
    <section class="container d-flex flex-wrap">
        @foreach ($trains as $train)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $train->agency }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Departure Station: {{ $train->departure_station }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Arrival Station: {{ $train->arrival_station }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Departure Time: {{ $train->departure_time }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Arrival Time: {{ $train->arrival_time }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Train Code: {{ $train->train_code }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Carreges: {{ $train->carreges }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">On Time: {{ $train->on_time }}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Deleted: {{ $train->deleted }}</h6>

                </div>
            </div>
        @endforeach
    </section>
@endsection
