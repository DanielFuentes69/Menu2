@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Menu</title>
</head>
<body>
    <div class="container"  style="
width:30%">
    <h1>Agregar Menu</h1>
    <div class="form-group">
    <form method="POST" action="{{ route('menu.store')}}">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre del Menu" class="form-control" id="formGroupExampleInput"><br>
        <input type="submit" name="Guardar" class="btn btn-primary">
        <a href="{{ route('categoria.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
    </form>
    </div>
    </div>
</body>
</html>
@endsection
