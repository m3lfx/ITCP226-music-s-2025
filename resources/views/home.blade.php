@extends('layouts.base')

@section('head')
    @parent
    <link rel="stylesheet" href="another.css" />
@stop

@section('body')
    <h1>Hurray!</h1>
    <p>We have a template!</p>
@stop

@section('content')
    <h1>artist</h1>
 
    {{-- <h2>{{dump($artist)}}</h2> --}}
    <h2>{{$artist->name}}</h2>
    <h2>{{$artist->country}}</h2>
    <h2>{{$artist->img_path}}</h2>
@endsection

