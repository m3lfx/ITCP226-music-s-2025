@extends('layouts.base')
@section('body')
    <a href="{{ url('/artists/create') }}" class="btn btn-primary btn-sm " tabindex="-1" role="button" aria-disabled="true">Add
        artist</a>
    <div class="container-lg">
        <table class="table stripe hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">country</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>{{ $artist->id }}</td>
                        <td>{{ $artist->name }}</td>
                        <td>{{ $artist->country }}</td>
                        <td>{{ $artist->img_path }}</td>
                        <td>
                            <a href="{{ route('artist.edit', ['id' => $artist->id]) }}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>

                            <a href="{{ route('artist.delete', ['id' => $artist->id]) }}"><i class="fa-solid fa-trash"
                                    style="color:red"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $artists->links() }}
    </div>


@stop
