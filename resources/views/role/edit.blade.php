<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('role.update',['role'=>$role->id]) }}">
    @csrf
    {{ method_field('PUT') }}
    Name:<input type="text" name="name" value="{{ $role->name }}" /><br>
    Description:<input type="text" name="description" value="{{ $role->description }}" /><br>
    <input type="submit" value="Enviar" />
    </form>
</body>
</html>