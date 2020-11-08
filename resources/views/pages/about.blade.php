@extends('layouts.app')

@section('content')

    <h1 class="text-center mt-3"><?php echo $title; ?></h1>
    <p> <strong>Dan Investments, is the easiest and quickest way to invest in Forex Trading .</strong></p>
    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.  It is a great idea to invest with us today ......so get to work....
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
                    <p class="my-2" style="color: #32E0C4;"><strong>Nefemi Omotola</strong></p>
                    <span style="color: #938F91; font-weight:700">lagos</span>
                    <p style="color: #C4C4C4">Nigeria</p>
                </div>
            </div>
            <div class="row">
                <p class="mb-5">This is the best forex investment platform, i have worked with...</p>
            </div>
        </div>
        <div class="w-100 mt-n5 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class="w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Jennifer Oakley</strong></p>
                    <span style="color: #938F91; font-weight:700">Chicago</span>
                    <p style="color: #C4C4C4">United states</p>
                </div>
            </div>
            <div class="row">
                <p class="mb-5">I love DanInvestment, it is quick and efficent to use.</p>
            </div>
        </div>
        <div class="w-100 mt-n5 mb-2 col-sm col-md-4 ">
            <div class="d-flex ">
                <div class="image-sizing my-2 mr-4" style=" height: 100px; max-width: 100px;">
                    <img class=" w-100 h-100" src="https://source.unsplash.com/user/erondu" />
                </div>
                <div class="">
                    <p class="my-2" style="color: #32E0C4;"><strong>Nwafor Livingstone</strong></p>
                    <span style="color: #938F91; font-weight:700;">Abuja</span>
                    <p style="color: #C4C4C4">Nigeria</p>
                </div>
            </div>
            <div class="row">
                <p class="mb-5">Thank you for making my money work for me.</p>
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
