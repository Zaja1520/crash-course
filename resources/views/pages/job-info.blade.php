@extends('master.layout')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{ asset('css/jobprofile.css') }}">
@endsection
@section('content')
<div class="back-row"><a href="/job-listings"><img src="{{asset('images/back.png')}}" alt="">back</a></div>
<div class="row">
    <div></div>
    <div class="card-container">
        <div><img src="{{asset('images/no-image.png')}}" alt=""></div>
        <div><span style="font-size: 2em;">{{ $job->title }}</span></div>
        <div><h3>{{ $job->company }}</h3></div>
        <x-job-info-tags :tagsCsv="$job->tags" />
        <div>
            <img src="{{asset('images/location.png')}}" alt=""
            style="height: 15px; width: 15px;"
            >{{$job->location}}
        </div>
        <div><h2>Job Description</h2></div>
        <div><p>{{$job->description}}</p></div>
        <div class="button-row"><button class="button-5" role="button">Contact Employer</button></div>
    </div>
    <div></div>
</div>
@endsection