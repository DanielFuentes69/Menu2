@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <div class="container"  style="
width:30%">
<h1>editar de Cliente</h1>
    <form method="POST" action="{{route('cliente.update', ['cliente'=>$cliente->id])}}">
        @csrf
        {{method_field('PUT')}}
        <label for="formGroupExampleInput">Nombre:</label>
        <input type="text" name="nombre" class="form-control" value="{{$cliente->nombre}}"><br>
        <label for="formGroupExampleInput">Apellido:</label>
        <input type="text" name="apellido" class="form-control" value="{{$cliente->apellido}}"><br>
        <label for="formGroupExampleInput">Documento:</label>
        <input type="number" name="documento" class="form-control" value="{{$cliente->documento}}"><br>
        <label for="formGroupExampleInput">Telefono:</label>
        <input type="text" name="telefono" class="form-control" value="{{$cliente->telefono}}"><br>
        <label for="formGroupExampleInput">Direccion:</label>
        <input type="text" name="direccion" class="form-control" value="{{$cliente->direccion}}"><br>
        <label for="formGroupExampleInput">Email:</label>
        <input type="text" name="email" class="form-control" value="{{$cliente->email}}"><br>
        <input type="submit" name="Enviar" class="btn btn-primary">
        <a href="{{ route('cliente.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>

    </form>

</div>  
</body>
</html>
@endsection