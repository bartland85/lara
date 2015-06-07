@if($loggedIn and $user->id == $post->user_id)
<a href="/lara/public/post/{{ $post->id }}/edit">edit</a><br>
<a href="/lara/public/post/{{ $post->id }}">delete</a><br>
@endif