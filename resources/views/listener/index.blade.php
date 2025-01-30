@extends('layouts.base')

@section('body')
    <div class="container-lg">
        {{-- {{dd($listeners)}} --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Listener id</th>
                    <th scope="col">first name</th>
                    <th scope="col">last Name</th>
                    <th scope="col">address</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listeners as $listener)
                    <tr>
                        <td>{{ $listener->id }}</td>
                        <td>{{ $listener->fname }}</td>
                        <td>{{ $listener->lname }}</td>
                        <td>{{ $listener->address }}</td>
                        <td> <img src="{{ Storage::url($listener->img_path) }}" alt="Avatar" class="img-fluid my-5"
                                style="width: 80px;" /></td>
                        @if ($listener->deleted_at === null)
                            <td><a href="{{ route('listeners.edit', $listener->id) }}"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                            </td>

                            <td>

                                <form action="{{ route('listeners.destroy', $listener->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-primary"> <i
                                            class="fa-regular fa-trash-can"></i></button>
                                    <a href="#!"><i class="fa-solid fa-rotate-left" style="color:gray"></i></a>

                                </form>
                                </i>
                            </td>
                        @else
                            <td><a href="#!"><i class="fa-regular fa-pen-to-square" style="color:gray"></i></a>
                            </td>

                            <td><button type="submit" class="btn btn-primary"><i class="fa-regular fa-trash-can"
                                        style="color:gray"></i></button>
                                <a href="{{ route('listeners.restore', $listener->id) }}"><i class="fa-solid fa-rotate-left"
                                        style="color:blue"></i></a>


                            </td>
                        @endif



                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
