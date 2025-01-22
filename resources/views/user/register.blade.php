@extends('layouts.base')

@section('body')
    <div class="container-lg">
        <form action="{{route('user.register')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname" id="fname" aria-describedby="name">
            </div>

            <div class="mb-3">
                <label for="lname" class="form-label">last Name</label>
                <input type="text" class="form-control" name="lname" id="lname" aria-describedby="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="name">
            </div>

            <div class="mb-3">
                <label for="pass" class="form-label">password</label>
                <input type="password" class="form-control" name="password" id="pass" aria-describedby="name">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">address</label>
                <input type="text" class="form-control" name="address" id="address" aria-describedby="country">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">user Image</label>
                <input type="text" class="form-control" name="img_path" id="image" aria-describedby="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
@endsection
