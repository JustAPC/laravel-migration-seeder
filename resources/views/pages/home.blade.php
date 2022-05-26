@extends('layouts.layout')

@section('content')
    <div class="container pt-5">
        <div class="row rows-col-4">
            @foreach ($trains as $item)
                <div class="card mb-5" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Compagnia: </strong>{{ $item->agency }}</li>
                        <li class="list-group-item"><strong>Partenza: </strong>{{ $item->departure_station }}</li>
                        <li class="list-group-item"><strong>Arrivo: </strong>{{ $item->arrival_station }}</li>
                        <li class="list-group-item"><strong>Giorno: </strong>{{ $item->departure_day }}</li>
                        <li class="list-group-item"><strong>Arrivo: </strong>{{ $item->arrival_time }}</li>
                        <li class="list-group-item"><strong>Codice: </strong>{{ $item->train_code }}</li>
                        <li class="list-group-item"><strong>In orario: </strong>{{ $item->on_time }}</li>
                        <li class="list-group-item"><strong>Cancellato: </strong>{{ $item->deleted }}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
