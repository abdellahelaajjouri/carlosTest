@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Modifier l'événement</h1>
                <form action="{{ route('events.update' , $event->id) }}" method="post">
                    @csrf
                    @method("put")
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $event->title }}" required>
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="start_date">Date de début</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $event->start_date }}">
                        @error('start_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="end_date">Date de fin</label>
                        <input type="date" name="end_date" id="end_date"class="form-control" value="{{ $event->end_date }}">
                        @error('end_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea   class="form-control" name="desc" id="desc">
                            {{ $event->desc }}
                        </textarea>
                        @error('desc')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ $event->price }}">
                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Mettre à jour l'événement</button>
                </form>
            </div>
        </div>
    </div>
@endsection
