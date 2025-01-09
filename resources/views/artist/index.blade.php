@extends('layouts.base')
@section('body')
    <table class="table stripe hover">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">country</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artists as $artist)
                <tr>
                    <td>{{ $artist->id }}</td>
                    <td>{{ $artist->name }}</td>
                    <td>{{ $artist->country }}</td>
                    <td>{{ $artist->img_path }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
