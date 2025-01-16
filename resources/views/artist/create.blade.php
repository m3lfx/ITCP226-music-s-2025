@extends('layouts.base')
@section('body')
<div class="container-lg">
    <form action="{{url('artists/store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Artist name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" name="country" class="form-control" id="country" aria-describedby="country">

        </div>

        <div class="mb-3">
            <label for="image_path" class="form-label">Image</label>
            <input type="text" name="img_path" class="form-control" id="image_path" aria-describedby="image_path">

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
