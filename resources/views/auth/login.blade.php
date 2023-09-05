@extends('base')

@section('content')

<div class="container col-md-6 offset-md-3 mt-5">

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{session('message')}}</div>
    @endif

    <h1 class="text-center">Login</h1>
    <form action="{{'/'}}" method="POST">
        {{csrf_field()}}
        <div>
            <label for="email">Email</label>
            <input type="email" name="" id="email" class="form-control" placeholder="Enter your email">
        </div>
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="mt-2">
            <label for="password">Password</label>
            <input type="password" name="" id="password" class="form-control" placeholder="Enter your password">
        </div>
        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror

        <div class="d-flex mt-5">
            <div class="flex-grow-1">
                <a href="{{'/register'}}">Don't have an account yet?</a>
            </div>
            <button class="btn btn-primary px-5" type="submit">Login</button>
        </div>
    </form>
</div>

@endsection
