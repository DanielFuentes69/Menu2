<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Lista de Roles</h1>
<form method="POST" action="{{ action('UserController@guardarRole') }}">
    @csrf
    <input type="hidden" name="user_id" value="{{ $user_id }}" />
    <table border="1">
    <thead>
        <tr>
            <td></td>
            <td>Id</td>
            <td>Name</td>
            <td>Description</td>
            
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
            <td>
            <input type="radio" name="role_id" value="{{$role->id}}" /></td>
            <td>{{$role->id}}</td>
            <td>{{$role->name}}</td>
            <td>{{$role->description}}</td>
            
        </tr>
        @endforeach
    </tbody>
    </table>
    <input type="submit" value="Asignar Role" />
    </form>
</body>
</html>