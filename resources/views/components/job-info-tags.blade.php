@props(['tagsCsv'])

@php
    $tags = explode(', ', $tagsCsv);
@endphp
<div class="tags-container">
@foreach ($tags as $tag)
    <a href="/?tag={{$tag}}">{{ $tag }}</a>
@endforeach
</div>