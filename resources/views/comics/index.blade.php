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
                    <div class="d-flex">
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" type="button"
                            class="btn btn-primary me-1">Dettagli</a>
                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" type="button"
                            class="btn btn-warning me-1">Modifica</a>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
