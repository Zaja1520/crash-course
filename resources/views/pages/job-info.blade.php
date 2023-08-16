@extends('master.layout')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <style>
        .row{
            display: grid;
            place-items: center;
            background-color: #f1f1f1;
            padding: 5px;
            grid-template-columns: 30px 1fr 30px;
        }
        .card-container{
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
        }
        img{
            width: 20%;
            height: 20%;
        }
        .tags-containger a{
            text-decoration: none;
        }
        <!-- HTML !-->

/* CSS */
.button-5 {
  align-items: center;
  background-clip: padding-box;
  background-color: #fb8332;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}

.button-5:hover,
.button-5:focus {
  background-color: #fb8332;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-5:hover {
  transform: translateY(-1px);
}

.button-5:active {
  background-color: #c85000;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}
.button-row{
    padding:15px;
}
.button-row button{
    width: 300px;
    border: 0px;
    background-color: #fb8332;
}
.tags-container {
    margin: 13px 0px;
}
.tags-container a {
    background-color: rgb(23, 21, 21);
    border-radius: 6px;
    color: white;
    font-size: 14px;
    padding: 5px;
}
.back-row {
    align-items: center;
    padding: 10px;
}
.back-row img {
    height: 20px;
    width: 20px;
    margin-right: 2px;
}
    </style>
@endsection
@section('content')
<div class="back-row"><a href="/job-listings"><img src="{{asset('images/back.png')}}" alt="">back</a></div>
<div class="row">
    <div></div>
    <div class="card-container">
        <div><img src="{{asset('images/no-image.png')}}" alt=""></div>
        <div><span style="font-size: 2em;">{{ $job->title }}</span></div>
        <div><h3>{{ $job->company }}</h3></div>
        <div class="tags-container"><a href="">{{ $job->tags }}</a></div>
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