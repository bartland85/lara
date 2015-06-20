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
<hr>
<div class="row">
    <div class="col-lg-12">

        {!! Form::open(['method'=>'POST', 'route'=>'comment.store', 'id'=>'comment-form', 'class'=>'form-inline']) !!}
            <div class="form-group">
                <p>{{ trans('gen.write_comment') }}</p>
                <label for="author">{{ trans('gen.your_name') }}</label>
                {!! Form::text('author', null, ['class'=>'form-control', 'size'=>'15']) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('body', null, ['size'=>'120x5', 'class'=>'form-control']) !!}
                {!! Form::hidden('postID', $post->id) !!}
            </div>
            <div class="form-group">
                {!! Form::submit(trans('gen.submit_comment'), ['class'=>'btn btn-default']) !!}
            </div>
        {!! Form::close() !!}

    </div>
</div>


@endsection