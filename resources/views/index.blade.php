@extends('base')

@section('container')

@foreach($posts as $post)
<div class="post_date">{{ $post->datetime }}</div>
<div class="post_title"><a href="post/{{ $post->id }}">{{ $post->title }}</a></div>



<div class="post_text">
    @if($post->adult)
        for adults
    @else
        {!! str_limit($post->text, 500, '...<a href="post/{{ $post->id }}">(read more)</a>') !!}
    @endif
</div>

@include('post_edit_buttons')

<hr>
@endforeach

@stop
