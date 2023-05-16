@extends('layouts.app')

@section('title', 'creating')
@section('content')


    <form method="POST" action="{{ route('comics.store') }}">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">Src</label>
            <input type="text" class="form-control" id="src">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
