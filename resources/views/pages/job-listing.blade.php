@extends('master.layout')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flash-message.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
@endsection

@section('content')
{{-- call the component --}}
<x-flash-message />
@include('partials.hero')
@include('partials.search')
<div class="job-container">
    @if (count($jobs) > 0) 
    @foreach ($jobs as $job)
    {{-- pass the data to the job-listings component --}}
    <x-job-listings :job="$job"/>
    @endforeach
    @else
        <p>no listing found</p>
    @endif
</div>
<div class="pagination">
    {{$jobs->links()}}
</div>
@endsection

@section('script')
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection