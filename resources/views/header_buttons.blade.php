@if($loggedIn)

<a href="user/{{ $user->id }}">My account</a> | <a href="post/create">Add new post</a> | <a href="auth/logout">Sign Out</a>

@else
{{--<a href="auth/login">Sign In</a> | <a href="auth/register">Sign Up</a>--}}

@endif