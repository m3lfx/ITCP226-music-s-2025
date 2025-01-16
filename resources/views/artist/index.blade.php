@extends('layouts.base')
@section('body')
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

                        <a href="{{ route('artist.delete', ['id' => $artist->id]) }}"><i
                                class="fa-solid fa-trash" style="color:red"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
