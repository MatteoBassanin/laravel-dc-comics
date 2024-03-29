@extends('layouts.app')

@section('title', 'editing')

@section('content')
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Src</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series', $comic->series) }}">
            @error('series')
                <div class="invalid-feedback">Attenzione errore
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price', $comic->price) }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type', $comic->type) }}">
            @error('type')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-secondary">Torna indietro</a>
    </form>
@endsection
