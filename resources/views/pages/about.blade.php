@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-3"><?php echo $title; ?></h1>
    <p> <strong>Dan Investments, is the easiest and quickest way to invest in Forex Trading .</strong></p>
    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.  It is a great idea to invest with us today ......so get to work....
        <a class="btn btn-info btn-sm" href="/register" role="button">Register</a> </p>
    <div class="d-flex justify-content-center row">
        <div class=" w-100 mt-3 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class="rounded-circle w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Nefemi Omotola</strong></p>
                    <span style="color: #938F91; font-weight:700">lagos</span>
                    <p style="color: #C4C4C4">Nigeria</p>
                </div>
            </div>
        </div>
        <div class="w-100 mt-3 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class="rounded-circle w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Jennifer Oakley</strong></p>
                    <span style="color: #938F91; font-weight:700">Chicago</span>
                    <p style="color: #C4C4C4">United states</p>
                </div>
            </div>
        </div>
        <div class="w-100 mt-3 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class="rounded-circle w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Jennifer Oakley</strong></p>
                    <span style="color: #938F91; font-weight:700;">Chicago</span>
                    <p style="color: #C4C4C4">United states</p>
                </div>
            </div>
        </div>
    </div>

{{--    <img class="w-100 h-75 " style="border: #1f6fb2" src="{{url('/assets/images/stephen-dawson-qwtCeJ5cLYs-unsplash.jpg')}}">--}}
@endsection
