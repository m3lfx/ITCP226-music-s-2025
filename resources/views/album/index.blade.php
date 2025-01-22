@extends('layouts.base')

@section('body')
    <div class="container-lg">
        {{-- {{dd($albums)}} --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Album id</th>
                    <th scope="col">Album title</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Date Released</th>
                    <th scope="col">artist name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                    <tr>
                        <td>{{ $album->album_id }}</td>
                        <td>{{ $album->title }}</td>
                        <td>{{ $album->genre }}</td>
                        <td>{{ $album->date_released }}</td>
                        <td>{{ $album->name }}</td>
                        <td><a href="{{ route('albums.edit', $album->album_id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                        </td>
                        {{-- <td><a href="{{route('albums.destroy', $album->album_id)}}" style="color:red"><i class="fa-regular fa-trash-can" ></i></a></td> --}}
                        <td>
                            <i class="fa-regular fa-trash-can">
                                <form action="{{ route('albums.destroy', $album->album_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </form>
                            </i>

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
