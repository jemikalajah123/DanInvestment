@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 p-5 mt-5 mb-5" style="border: 1px ;padding: 2px;box-shadow: 5px 10px #6C757D;">
                <div class="d-flex flex-column ml-auto mt-5">
                    <h2 class="sec__two-header">
                        Get Estimate
                    </h2><br>
                    {!! Form::open(['action' => 'PagesController@estimate', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('amount', 'Amount')}}
                        {{Form::number('amount', '', ['class' => 'form-control', 'placeholder' => 'Enter Amount', 'required' => 'required'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('interest', 'Interest')}}
                        {{Form::number('interest', '', ['class' => 'form-control', 'placeholder' => 'Enter Interest', 'required' => 'required'])}}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('start', 'Start Date')}}
                                {{Form::date('start', '', ['class' => 'form-control', 'placeholder' => 'Select Start date', 'required' => 'required'])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('end', 'End Date')}}
                                {{Form::date('end', '', ['class' => 'form-control', 'placeholder' => 'Select End date', 'required' => 'required'])}}
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3" style="border: 1px solid black">
                        <p class="mt-2">You will earn <strong> {{ $earn ?? '0.00' }}  </strong>with an investment of <strong> {{ $amount ?? '0.00' }}   </strong></p>

                    </div>

                    {{Form::submit('Submit', ['class' => 'btn btn-info mb-3 mt-4'])}}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6 p-5 mt-5 mb-5" style="border: 1px ;padding: 2px;box-shadow: 5px 10px #6C757D;">
                <div class="d-flex flex-column ml-auto mt-5">
                    <h2 class="sec__two-header">
                        Invest now
                    </h2><br>
                    {!! Form::open(['action' => 'PagesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="form-group">
                        {{Form::label('title', 'Amount')}}
                        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Amount'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('interest', 'Interest')}}
                        {{Form::number('interest', '', ['class' => 'form-control', 'placeholder' => '25% per annum','disabled' => 'disabled',])}}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('start', 'Start Date')}}
                                {{Form::date('start', '', ['class' => 'form-control', 'disabled' => 'disabled',])}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{Form::label('end', 'End Date')}}
                                {{Form::date('end', '', ['class' => 'form-control', 'disabled' => 'disabled',])}}
                            </div>
                        </div>
                    </div>

                    {{Form::submit('Submit', ['class' => 'btn btn-success mb-3 mt-4'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection
