@extends('base')

@section('container')

<div class="row">
    <div class="col col-lg-10"><h1>{{ $post->title }}</h1></div>
    <div class="col col-lg-2">
        {{ $post->created_at->format('Y-m-d') }}<br>
        {{ $post->author }}
    </div>
</div>
<div class="row">
<hr>
<div class="col col-lg-12">{!! $post->text !!}</div>
</div>
<div class="row">
    <div class="col-lg-12">{{ $post->author }}</div>
</div>


@endsection