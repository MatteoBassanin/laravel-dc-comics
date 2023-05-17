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


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $comic->id }}">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $comic->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-warning">
                                                DELETE
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- #modal{{ $comic->id }} --}}

                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
