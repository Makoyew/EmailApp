@extends('base')

@section('content')

<div class="container col-md-6 offset-md-3 mt-5">
    <h1 class="text-center">Register</h1>
    <form action="{{'/register'}}" method="POST">
        {{csrf_field()}}
        <div>
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name">
        </div>
        @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
        </div>
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mt-2">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
        </div>
        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mt-2">
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm your password">
        </div>
        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror

        <div class="d-flex mt-5">
            <div class="flex-grow-1">
                <a href="{{'/'}}">Already have an account?</a>
            </div>
            <button class="btn btn-primary px-5" type="submit">Register</button>
        </div>
    </form>
</div>

@endsection
