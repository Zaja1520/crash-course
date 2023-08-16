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
    {{-- pass the data to the job-listings component --}}
    <x-job-listings :job="$job"/>
    @endforeach
</div>
@endsection