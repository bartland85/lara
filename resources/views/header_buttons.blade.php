@if($loggedIn)

<a href="/lara/public/user/{{ $user->id }}">My account</a> |
<a href="/lara/public/post/create">Add new post</a> |
<a href="/lara/public/auth/logout">Sign Out</a>

@endif