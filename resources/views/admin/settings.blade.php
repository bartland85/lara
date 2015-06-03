@extends('base')

@section('main')

<form method="POST">
    <div class="form-group">
        <label for="blogsName">Blog's name</label>
        <input type="text" class="form-control" id="blogsName" name="blogsName" placeholder="Enter blog's name" value="{{ $settings->blogsName }}">
    </div>

    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <button type="submit" class="btn btn-default">Save settings</button>
</form>

@endsection