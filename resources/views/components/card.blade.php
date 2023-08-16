{{-- $attributes merge pass attributes of parent --}}
<div class="card" {{$attributes->merge(['style' => ''])}}> 
    {{-- take the job listings --}}
    {{$slot}}
</div>