@extends('layouts.app')

@section('title', 'comics')
@section('content')

    <a href="{{ route('comics.create') }}" class="btn btn-primary">Add Comic</a>

    <div class="d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" type="button"
                        class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
