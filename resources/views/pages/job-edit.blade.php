@extends('master.layout')

@section('header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{asset('css/job-create.css')}}">
    <link rel="stylesheet" href="{{asset('css/flash-message.css')}}">
@endsection

@section('navbar')
    @include('partials.navbar')
@endsection
@section('content')
<x-flash-message />
      <header class="text-center header">
        <h2 class="text-2xl font-bold uppercase mb-1">Create a Gig</h2>
        <p class="mb-4">Post a gig to find a developer</p>
      </header>
      <div class="card-container">
      <form class="form" method="POST" action="/job-listings/edit/{{$job->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-container">
        <div class="mb-6">
          <label for="company" class="inline-block text-lg mb-2">Company Name</label>
          {{-- keep old data --}}
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
            value="{{$job->company}}" /> 
  
          @error('company')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Job Title</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
            placeholder="Example: Senior Laravel Developer" value="{{$job->title}}" />
  
          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="location" class="inline-block text-lg mb-2">Job Location</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
            placeholder="Example: Remote, Boston MA, etc" value="{{$job->location}}" /> {{-- keep old data --}}
  
          @error('location')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="email" class="inline-block text-lg mb-2">
            Contact Email
          </label>
          {{-- keep old data --}}
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{$job->email}}" />
  
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="website" class="inline-block text-lg mb-2">
            Website/Application URL
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
            value="{{$job->website}}" /> {{-- keep old data --}}
  
          @error('website')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">
            Tags (Comma Separated)
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
            placeholder="Example: Laravel, Backend, Postgres, etc" value="{{$job->tags}}" />{{-- keep old data --}}
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
          </label>
          <input type="file" value="{{$job->logo}}" class="border border-gray-200 rounded p-2 w-full" name="logo" />

          <div class="job-image-container"><img style="height: 50px; width: 50px;" src="{{$job->logo ? asset('storage/' . $job->logo) : asset('images/no-image.png')}}" alt=""></div>
  
          @error('logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Job Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="Include tasks, requirements, salary, etc">{{$job->description}}</textarea>{{-- keep old data --}}
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6 button-container">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Update Gig
          </button>
          <a href="../../job-listings/" class="text-black ml-4"> Back </a>
        </div>
        
        </div>
      </form>
    </div>
    @endsection

    @section('script')
    <script src="//unpkg.com/alpinejs" defer></script>
    @endsection