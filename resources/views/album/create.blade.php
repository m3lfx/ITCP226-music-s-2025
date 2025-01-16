@extends('layouts.base')
@section('body')
    <div class="container-lg">
        {{-- {{dd($artists)}} --}}
        <form action="{{ url('/albums') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Album title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="title">

            </div>

            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" name="genre" class="form-control" id="genre" aria-describedby="genre">

            </div>

            <div class="mb-3">
                <label for="date_released" class="form-label">Date Released</label>
                <input type="date" name="date_released" class="form-control" id="date_released"
                    aria-describedby="image_path">

            </div>
            <label for="artist" class="form-label">Artist</label>
            <select class="form-select" name="artist_id" "Default select example" id="artist">
                <option selected>Open this select menu</option>
                @foreach($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach


            </select>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
