@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Id:<input disabled type="text" name="id" value="{{ $user->id }}" /><br>
    Name:<input disabled type="text" name="name" value="{{ $user->name }}" /><br>
    Description:<input disabled type="text" name="description" value="{{ $user->email }}" /><br>
    Role Name:<input disabled type="text" name="description" value="{{ $user->roles()->first()->name }}" />
    <form method="post" action="{{ action('UserController@cambiarRole') }}">
    @csrf
    @if (Auth::user()->tieneRole('Admin'))
        <input type="hidden" name="user_id" value="{{ $user->id }}" />
        <input type="submit" value="Cambiar Role" />
    @endif
    </form>
    <br>


</body>
</html>
@endsection
