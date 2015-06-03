@extends('base')

@section('container')

<form method="POST" id="post-edit-form" action="/lara/public/{{ $post->id ? 'post/'.$post->id : 'post' }}">
    <div class="form-group">
        <label for="title">Post's title: </label>
        <input type="text" class="form-control" name="title" value="{{ $post->title }}">
    </div>

    <div class="form-group">
        <label for="text">Post's text: </label>
       <textarea class="form-control" id="text" name="text">{{ $post->text }}</textarea>
    </div>
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    @if($post->id)
        <input type="hidden" name="_method" value="PUT" />
    @endif
    <input type="submit" class="btn btn-primary btn-lg" value="Save">
</form>

@endsection