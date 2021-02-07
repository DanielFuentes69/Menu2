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
    <h1>Agregar Mesa</h1>
    <div class="form-group">
    <form method="POST" action="{{route('mesas.store')}}">
        @csrf
        <input type="text" name="nombre" placeholder="Mesas" class="form-control" id="formGroupExampleInput"><br>
        <input type="submit" name="Guardar" class="btn btn-primary">
        <a href="{{ route('mesas.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
    </form>
    </div>
    </div>
</body>
</html>
@endsection
