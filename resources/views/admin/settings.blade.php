@extends('base')

@section('main')


<form method="POST">
    <div class="form-group">
        <label for="blogsName">Blog's name</label>
        <input type="text" class="form-control" id="blogsName" name="blogsName" placeholder="Enter blog's name" value="{{ $settings->blogsName }}">
    </div>

    <table>
    @foreach($avlLangs as $lang)
        <tr><td>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="languages[]" value="{{ $lang }}" {{ dTools::checked(in_array($lang, $settings->languages)) }} > {{ $lang }}
                </label>
            </div>
        </td></tr>
    @endforeach
    </table>
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <button type="submit" class="btn btn-default">Save settings</button>
</form>

@endsection