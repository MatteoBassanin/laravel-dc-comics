@extends('layouts.app')

@section('title', 'comics')
@section('content')
    @foreach ($comics as $comic)
        <div class="card" style="width: 18rem;">
            <img src="" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>

            </div>
        </div>
    @endforeach
@endsection
