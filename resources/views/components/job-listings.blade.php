{{--storage for the job listings data--}}
@props(['job']) 
{{-- pass the components in the card component --}}
    <x-card> 
    <div class="job-image-container"><img src="{{asset('images/no-image.png')}}" alt=""></div>
    <div class="job-preview-info">
        <h2>
        <a href="/job-info/{{$job->id}}">{{ $job->title }}</a>
        </h2>
        <div>{{$job->company}}</div>
        <ul class="horizontal-list">
            <li><a href="#">laravel</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">Backend</a></li>
        </ul>
        <div><img src="{{asset('images/location.png')}}" alt=""
            style="height: 15px; width: 15px;"
            >{{$job->location}}</div>
        </div>
    </x-card>