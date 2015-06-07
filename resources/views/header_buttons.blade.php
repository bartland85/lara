@if($loggedIn)

<a href="/lara/public/user/{{ $user->id }}">{{ trans('gen.my_account') }}</a> |
<a href="/lara/public/post/create">{{ trans('gen.add_new_post') }}</a> |
<a href="/lara/public/auth/logout">{{ trans('gen.logout') }}</a>

@endif