<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('role.store') }}">
    @csrf
    Name:<input type="text" name="name" /><br>
    Description:<input type="text" name="description" /><br>
    <input type="submit" value="Enviar" />
    </form>
</body>
</html>