@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-3"><?php echo $title; ?></h1>
    <p> <strong>Dan Investments, is the easiest and quickest way to invest in Forex Trading .</strong></p>
    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.  It is a great idea to invest with us today ......so get to work....
        <a class="btn btn-info btn-sm" href="/register" role="button">Register</a> </p>

    <img class="w-100 h-75 " style="border: #1f6fb2" src="{{url('/assets/images/stephen-dawson-qwtCeJ5cLYs-unsplash.jpg')}}">
@endsection
