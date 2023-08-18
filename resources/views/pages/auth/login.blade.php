@extends('master.layout')

@section('header')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="stylesheet" href="{{asset('css/flash-message.css')}}">
@endsection

@section('content')

@section('navbar')
    @include('partials.navbar')
@endsection

<x-flash-message />
<div class="row-container">
    <div class="form-container">
        <div class="items-container">
             <h1>Login</h1>
             <p>Login to an account to post Gigs</p>
             <div class="group">
                <form class=form-class action="/login" method="POST">
                    @csrf
                    <label for="email">Email</label>
                    <input class="email" name="email" id="email" type="email">
             </div>
             @error('email')
             <p class="text-red-500 text-xs mt-1">{{$message}}</p>
             @enderror
             <div class="group">
                <label for="password">Password</label>
                <input class="password" name="password" id="password" type="password">
             </div>
             @error('password')
             <p class="text-red-500 text-xs mt-1">{{$message}}</p>
             @enderror
             <div class="group">
                <input type="submit">
             </div>
             <div>Already have an account? <a href="">Login</a></div>
        </div>
    </div>
    </form>
</div>

@endsection
