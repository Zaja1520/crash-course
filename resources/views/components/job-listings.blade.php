{{--storage for the job listings data--}}
@props(['job']) 
{{-- pass the components in the card component --}}
    <x-card style="padding:20px;">  {{-- pass the attributes to the card component --}}
    <div class="job-image-container"><img src="{{$job->logo ? asset('storage/' . $job->logo) : asset('images/no-image.png')}}" alt=""></div>
    <div class="job-preview-info">
        <h2>
        <a href="/job-info/{{$job->id}}">{{ $job->title }}</a>
        </h2>
        <div>{{$job->company}}</div>
        <x-listings-tag :tagsCsv="$job->tags"/>
        <div><img src="{{asset('images/location.png')}}" alt=""
            style="height: 15px; width: 15px;"
            >{{$job->location}}</div>
        </div>
    </x-card>