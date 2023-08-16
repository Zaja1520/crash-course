@extends('master.layout')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

@include('partials.hero')
@include('partials.search')
<div class="job-container">
    @foreach ($jobs as $job)
    <div class="card" >
    <div class="job-image-container"><img src="{{asset('images/no-image.png')}}" alt=""></div>
    <div class="job-preview-info">
        <h2>
        <a href="/job-info/{{$job->id}}">{{ $job->title }}</a>
        </h2>
        <div>{{$job->company}}</div>
        <ul class="horizontal-list">
            <li><a href="#">laravel</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">Backend</a></li>
        </ul>
        <div><img src="{{asset('images/location.png')}}" alt=""
            style="height: 15px; width: 15px;"
            >{{$job->location}}</div>
        </div>
    </div>
    @endforeach
</div>
@endsection