@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
               <div class="card-body">
                  <p><img class="w-100 h-100 top-image" src="{{url('/assets/images/chris-liverani-NDfqqq_7QWM-unsplash.jpg')}}"></p>
               </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column ml-auto mt-5">
                    <h2 class="sec__two-header">
                        WHAT WE DO
                    </h2><br>
                    <p class="sec__two-paragrapgh">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut.Lorem ipsum dolor sit amet,
                        consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut.
                    </p><br><br>
                    <a class="btn btn-info top__button" href="/estimate" role="button">Get an Estimate</a>
                </div>
                </div>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="d-flex flex-column ml-auto mt-5">
                <h2 class="sec__two-header">
                    HOW IT WORKS

                </h2><br>
                <p class="sec__two-paragrapgh">
                    1. Get an Estimate for your Forest Investment
                </p><br>
                <p class="sec__two-paragrapgh">
                    2. Create an Account
                </p><br>
                <p class="sec__two-paragrapgh">
                    3. Get Paid when your investment matures
                </p><br>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <p><img class="w-100 h-100 top-image" src="{{url('/assets/images/christian-dubovan-Y_x747Yshlw-unsplash.jpg')}}"></p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
