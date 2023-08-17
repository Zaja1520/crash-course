@extends('master.layout')

@section('header')
    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
    <link rel="stylesheet" href="{{asset('css/flash-message.css')}}">
@endsection

@section('content')

@section('navbar')
    @include('partials.navbar')
@endsection

<x-flash-message />
<div class="row">
    <div class="form-container">
        <div class="items-container">
             <h1>Register<br>Create an account to post Gigs</h1>
             <div class="group">
                <form action="" method="POST">
                    @csrf
                <label for="name">Name</label>
                <input class="name" name="name" id="name" type="text">
                @error('name')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
             </div>
             <div class="group">
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
             <div class="password2">
                <label for="password2">Confirm Password</label>
                <input class="password2" name="password_confirmation" id="password2" type="password">
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

@section('script')
    <script src="//unpkg.com/alpinejs" defer></script>
@endsection