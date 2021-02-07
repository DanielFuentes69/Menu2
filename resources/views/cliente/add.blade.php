@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
</head>
<body>
    <div class="container"  style="
width:30%">
<h1>Agregar de Cliente</h1>
    <form method="POST" action="{{route('cliente.store')}}">
        @csrf
        <label for="formGroupExampleInput">Nombre:</label>
        <input type="text" name="nombre" class="form-control" placeholder="Digite el Nombre"><br>
        <label for="formGroupExampleInput">Apellido:</label>
        <input type="text" name="apellido" class="form-control" placeholder="Digite el Apellido"><br>
        <label for="formGroupExampleInput">Documento:</label>
        <input type="number" name="documento" class="form-control" placeholder="Digite el Documento"><br>
        <label for="formGroupExampleInput">Telefono:</label>
        <input type="text" name="telefono" class="form-control" placeholder="Digite el Telefono"><br>
        <label for="formGroupExampleInput">Direccion:</label>
        <input type="text" name="direccion" class="form-control" placeholder="Digite el Direccion"><br>
        <label for="formGroupExampleInput">Email:</label>
        <input type="text" name="email" class="form-control" placeholder="Digite el Email"><br>
        <input type="submit" name="Agregar" class="btn btn-primary">
        <a href="{{ route('cliente.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
    </form> 
</body>
</html>
@endsection
