@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
</head>
<body>
    <div class="container"  style="
width:30%">
    <h1>Editar Categoria</h1>
    <form method="POST" action="{{ route('categoria.update',['categorium'=>$categoria->id]) }}">
        @csrf
        {{ method_field('PUT') }}
        <input type="text" name="nombre" value="{{ $categoria->nombre }}" class="form-control" id="formGroupExampleInput">
        <input type="submit" name="Guardar" class="btn btn-primary">
        <a href="{{ route('curso.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>
    </form>
</div>
</body>
</html>
@endsection