@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Menu</title>
</head>
<body>
    <div class="container"  style="
width:30%">
    <h1>Agregar Pedido</h1>
    <div class="form-group">
    <form method="POST" action="{{route('pedidos.store')}}">
        @csrf
        <input type="text" name="estado" placeholder="Estado" class="form-control" id="formGroupExampleInput"><br>
        <input type="number" name="subtotal" placeholder="Subtotal" class="form-control" id="formGroupExampleInput"><br>
        <input type="number" name="cantidad" placeholder="Cantidad" class="form-control" id="formGroupExampleInput"><br>
        <input type="date" name="fecha" placeholder="Fecha" class="form-control" id="formGroupExampleInput"><br>
        <textarea type="text" name="comentario" rows="3" cols="8" placeholder="Comentarios" class="form-control" id="formGroupExampleInput"></textarea><br>
        <input type="submit" name="Guardar" class="btn btn-primary">
        <a href="{{ route('pedidos.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
    </form>
    </div>
    </div>
</body>
</html>
@endsection
