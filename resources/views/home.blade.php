@extends('layouts.main')

@section('page_title')
    Home
@endsection

@section('jumbo')
    <section class="jumbo">
        <h1 class="title">
            Trains
        </h1>
    </section>
@endsection

@section('content')
    <main>
        <section>
            <table class="trains-table">
                <thead>
                    <tr>
                        <th scope="col">Code</th>
                        <th scope="col">Company</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Departure Time</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Arrival Time</th>
                        <th scope="col">Delay</th>
                        <th scope="col">Cancelled</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $train)
                        <tr>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->transport_company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ date('d/m/Y H:i', strtotime($train->departure_time)) }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ date('d/m/Y H:i', strtotime($train->arrival_time)) }}</td>
                            <td>{{ $train->delay ? $train->delay . '\'' : 'On time' }}</td>
                            <td>{{ $train->is_cancelled ? 'Yes' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection
