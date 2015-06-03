@extends('base')

@section('main')
    <table class="table table-hover">
        <thead>
        <tr class="league_gothic theme_color medium">
            <td>ID</td>
            <td>Name</td>
            <td>E-mail</td>
            <td>Register Date</td>
            <td>Administrator</td>
            <td></td>
        </tr>

        </thead>
        <tbody>
    @foreach($users as $user)

        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->admin }}</td>
            <td><a href="/lara/public/admin/user/{{ $user->id }}/edit" class="user-edit-button">edit</a></td>
        </tr>


    @endforeach
        </tbody>
</table>
@endsection