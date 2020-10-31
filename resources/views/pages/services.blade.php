@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    <img style="width: 100%" src="/storage/cover_images/aboutTech.jpg">
    <br><br>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">{{$service}}</li>      
            @endforeach
        </ul>

    @endif
@endsection

