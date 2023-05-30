@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des événements</h1>
                <a href="{{ route('events.create') }}" class="btn btn-primary">Ajouter un événement</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->start_date }}</td>
                                <td>{{ $event->end_date }}</td>
                                <td>{{$event->desc}}</td>
                                <td>{{ $event->price}}$</td>
                                <td>
                                    <button  class="btn btn-primary"><a style="text-decoration: none ; color:white" href="{{ route('events.edit', $event->id) }}">Modifier l'événement</a></button>
                                    <button type="submit" class="btn btn-danger"><a style="text-decoration: none ; color:white" href="{{ route('events.destroy', $event->id) }}" >sprimer l'événement</a></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
