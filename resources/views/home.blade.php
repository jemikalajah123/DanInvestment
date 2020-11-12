@extends('layouts.app')

@section('content')
<div class="container">
    @if ( count($investment) > 0)
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Your Investment Deals') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <table class="table table-responsive table-striped">
                            <tr>
                                <th>Amount Invested</th>
                                <th>New Earning</th>
                                <th>Start Date</th>
                                <th>Pay Day</th>
                            </tr>
                            @foreach ($investment as $item)
                                <tr>
                                    <td>{{$item['present_value']}}</td>
                                    <td>{{$item['future_value']}}</td>
                                    <td>{{$item['created_at']}}</td>
                                    <td>{{$item['pay_day']}}</td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
    @else
        <p>No Investment found</p>
    @endif
</div>

@endsection
