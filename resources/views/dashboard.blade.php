@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-5 mb-5">
                    <div class="card">
                        <div class="card-header">{{ __('All Investment Deals') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ( count($investment) > 0)
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>User id</th>
                                        <th>Amount Invested</th>
                                        <th>New Earning</th>
                                        <th>Start Date</th>
                                        <th>Pay Day</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @foreach ($investment as $item)
                                        <tr>
                                            <td>{{$item->user_id}}</td>
                                            <td>{{$item->present_value}}</td>
                                            <td>{{$item->future_value}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>{{$item->pay_day}}</td>
                                            <td>
                                                {!! Form::open(['action' => ['AdminController@sendEmail', $item->id,$item->user_id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                                {{Form::hidden('_method', 'PUT')}}
                                                {{Form::submit('Email Payment Info', ['class' => 'btn btn-info'])}}
                                                {!! Form::close() !!}
                                            </td>
                                            <td>
                                                {!! Form::open(['action' => ['AdminController@updatePayment', $item->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                                                {{Form::hidden('_method', 'PUT')}}
                                                {{Form::submit('Confirm Payout', ['class' => 'btn btn-info'])}}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                            @else
                                 <p>No Investment found</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            {{$investment->links()}}
    </div>

@endsection

