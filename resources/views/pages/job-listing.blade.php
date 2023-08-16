@extends('master.layout')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        .job-container{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }
        .card{
            display: grid;
            grid-template-columns: 150px 1fr;
        }
    </style>
@endsection

@section('content')

<div class="job-container">
    @foreach ($jobs as $job)
    <div class="card" style="background-color: pink;">
    <div><img src="{{asset('assets/images/logo.png')}}" alt=""></div>
    <div>
        <h2>
        <a href="/job-listings/{{$job->id}}">{{ $job->title }}</a>
        </h2>
        <div>{{$job->company}}</div>
        <p>{{ $job->description }}</p>
        <div>{{$job->location}}</div></div>
    </div>
    @endforeach
</div>
@endsection