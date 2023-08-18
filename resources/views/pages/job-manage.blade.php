@extends('master.layout')

@section('navbar')
    @include('partials.navbar')
@endsection
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{asset('css/manage.css')}}">
@endsection

@section('content')
    <div class="container" style="margin: 20px;">
        <div class="header"><h1>Manage Gigs</h1></div>
        <div class="row">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- loop through passed data --}}
                    @foreach ($jobs as $job)
                    <tr>
                        <td>{{$job->title}}</td>
                        <td class="button-container">
                            {{-- href="../job-listings/edit/{{$job->id}} --}}
                            <button type="button" class="btn btn-primary">
                                <a class="text-light" href="../job-listings/edit/{{$job->id}}">Edit</a>
                            </button>
                            <button type="button" class="btn btn-dark">
                                <a class="text-light" href="../job-listings/delete/{{$job->id}}">Delete</a>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>new DataTable('#example');</script>
@endsection