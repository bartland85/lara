<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Bart's Blog</title>

    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('/js/scripts.js') }}"></script>
    <script src="{{ asset('/js/MagnificPopup/mp.js') }}"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="{{ asset('/js/Summernote/summernote.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/Summernote/summernote.min.js') }}"></script>
    @section('js')
    @endsection

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/MagnificPopup/mp.css') }}"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    @section('css')
    @endsection


</head>
<body>
<div class ="container">
    <div class="row">
        <div class="header">
            @section('header')
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="logo"><a href="/lara/public/">{{ $settings->blogsName }}</a></div>
            </div>
            <div class="col-lg-2 col-md-10 col-sm-12 col-xs-12 login_buttons">
                @include('language_select')
            </div>
            <div class="col-lg-2 col-md-10 col-sm-12 col-xs-12 login_buttons">
                @include('header_buttons')
            </div>
            @show
        </div>
    </div>
    <div class="row">
        <div class="top_menu">
            @section('top_menu')
            @show
        </div>
    </div>

    <div class="row main">

        @section('main')
        @show

    </div>
    <div class="row">
        <div class="footer">
            @section('footer')
            footer
            @show
        </div>
    </div>
    <div class="row">
        <div>
            @section('copyright')
            Copyright 2015 by Barto
            @show
        </div>
    </div>
</div>
</body>
</html>