@extends('layouts.app')

    @section('content')
    <div class="p-5 mb-4 bg-light rounded-3 text-center">

        <h1>{{ $title }}</h1>
        <p>this is Laravel application</p>
        <p> <a class="btn btn-primary btn-lg" role="button" href="/login">Login</a>
            <a class="btn btn-success btn-lg" role="button" href="signup">Signup</a> </p>
    </div>
    @endsection
