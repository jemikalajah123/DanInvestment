@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-3"><?php echo $title; ?></h1>
    <p> <strong>Dan Investments, is the easiest and quickest way to invest in Forex Trading .</strong></p>
    <p>Dan investment is a financial company that deals in Forex. We are a company that guarantees financial security and also gives our customers 20% return on  investment not less than N50,000.
        Dan investment is a company that seeks to reach out to clients and also deliver maximally in terms of financial security. We are a company you want to invest in and want to keep investing in.Join Us Now
        <a class="btn btn-info btn-sm" href="/register" role="button">Register</a> </p><br>
    <h2 class="sec__two-header text-center">
        What Customers are saying?
    </h2><br>
    <div class="d-flex justify-content-center p-5 row">
        <div class=" w-100 mt-n5 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class="w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Temitope Bello</strong></p>
                    <span style="color: #938F91; font-weight:700">lagos</span>
                    <p style="color: #C4C4C4">Nigeria</p>
                </div>
            </div>
            <div class="row">
                <p class="mb-5">I invested with Dan Investment and it has to be the best things that has happened to me this year.
                    They are reliable, safe and secure.</p>
            </div>
        </div>
        <div class="w-100 mt-n5 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class="w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Michael Ifeanyi</strong></p>
                    <span style="color: #938F91; font-weight:700">Chicago</span>
                    <p style="color: #C4C4C4">United states</p>
                </div>
            </div>
            <div class="row">
                <p class="mb-5">Investing with Dan Investment is the best thing you could do for yourself in terms of financial safety.
                    They deliver when expected and they are trustworthy.</p>
            </div>
        </div>
        <div class="w-100 mt-n5 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class=" w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Korede Akanbi</strong></p>
                    <span style="color: #938F91; font-weight:700;">Abuja</span>
                    <p style="color: #C4C4C4">Nigeria</p>
                </div>
            </div>
            <div class="row">
                <p class="mb-5">I have alot of fears investing online, but investing with Dan Investment isn't something I regret.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-n3">
        <div class="col-md-4  mt-1 mb-2" >
            <div class="d-flex flex-column ml-auto mt-5">
                <img class="w-100 h-75 " style="border: 2px #6C757D solid; border-radius: 10px;" src="{{url('/assets/images/stephen-dawson-qwtCeJ5cLYs-unsplash.jpg')}}">
            </div>
        </div>
        <div class="col-md-8  mt-1 mb-2" style="border: 1px ;padding: 2px;box-shadow: 5px 10px #6C757D;">
            <div class="d-flex flex-column ml-auto text-center mt-1">
                <h2 class="sec__two-header text-center">
                    FAQs
                </h2><br>
                <p>How does it work?</p>
                <span class="mt-n3  ">You invest a particular amount with us for 25 working days and then get 20% of your capital at the end</span><br>
                <p>What is the least amount that can be invested?</p>
                <span class="mt-n3 ">The Least amount that can be invested is N50,000</span><br>
                <p>How risky is investing?</p>
                <span class="mt-n3 ">The Forex market is quite risky so if a  loss is invited both parties bare the loss</span><br>
                <p>Can I register for 3months at a go?</p>
                <span class="mt-n3 ">No, but once your date is due you can rollover</span><br>

            </div>
        </div>
    </div>

@endsection
