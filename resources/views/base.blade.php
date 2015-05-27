<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Bart's Blog</title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

</head>
<body>
<div class ="container">
    <div class="row">
        <div class="header">
            @section('header')
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="logo"><a href="/blog/">Bart's Blog</a></div>
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
        <div class="col-md-10 col-sm-1 col-xs-1">
            @section('container')
            @show
        </div>

        <div class="col-md-2 col-sm-1 col-xs-1">
            @section('right_column')
            @show
        </div>
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