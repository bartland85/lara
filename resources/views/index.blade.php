@extends('base')

@section('container')

@foreach($posts as $post)
<div class="post_date">{{ $post->datetime }}</div>
<div class="post_title"><a href="post/{{ $post->id }}">{{ $post->title }}</a></div>
<div class="post_text">{{ $post->text }}</div>

<hr>
@endforeach

@stop
