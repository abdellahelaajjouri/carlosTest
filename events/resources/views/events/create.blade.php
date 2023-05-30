@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Créer un nouvel événement</h1>
                <form action="{{ route('events.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                        @error('title')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="start_date">Date de début</label>
                        <input type="date" name="start_date" id="start_date" class="form-control" required>
                        @error('start_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="end_date">Date de fin</label>
                        <input type="date" name="end_date" id="end_date" class="form-control" required>
                        @error('end_date')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" class="form-control" required></textarea>
                        @error('desc')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Prix</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Créer l'événement</button>
                </form>
            </div>
        </div>
    </div>
@endsection
