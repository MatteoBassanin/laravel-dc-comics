@extends('layouts.app')

@section('title', 'Info')
@section('content')
    {{ $comic->title }}


    <div class="card" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $comic->price }}</li>
            <li class="list-group-item">{{ $comic->series }}</li>
            <li class="list-group-item">{{ $comic->sale_date }}</li>
        </ul>

    </div>

    <a href="{{ route('comics.index') }}" type="button" class="btn btn-primary">Torna indietro</a>
@endsection
