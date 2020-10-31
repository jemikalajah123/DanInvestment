@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1> {{$title}} </h1>
        <p>Hey, this is a community of writters and bloggers. Everyone can blog, as long as you can Write.<strong> Get in Now!</strong></p>
        <p>See the latest blog post <a class="btn btn-success btn-sm" href="/posts" role="button">Here</a></p>
        <p>Your first or next Blog post experience begins after a One minute registration. Please your feedback would be greatly appreciated.
        </p>
        @if (Auth::guest())
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
@endsection 


