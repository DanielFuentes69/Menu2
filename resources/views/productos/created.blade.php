@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear Producto</title>
</head>
<body>
    <div class="container"  style="
width:30%">
<h1>Add de Producto</h1>
	<form method="POST" action="{{route('productos.store')}}">
		@csrf
		<label for="formGroupExampleInput">Nombre:</label>
        <input type="text" name="name" class="form-control"  placeholder="Digite el Nombre"><br>
        <label for="formGroupExampleInput">Precio:</label>
        <input type="number" name="precio" class="form-control"  placeholder="Digite el Precio"><br>
        <label for="formGroupExampleInput">Cantidad:</label>
        <input type="text" name="cantidad" class="form-control"  placeholder="Digite el cantidad"><br>
        <label for="formGroupExampleInput">Foto:</label>
        <input type="text" name="foto" class="form-control"  placeholder="Digite el nombre de la foto"><br>
		<label for="txtCategoria">Categoria:</label>
		<select name="categoria_id" class="form-control" id="txtCategoria" required>
			<option></option>
			@foreach ($categorias as $c)
				<option value="{{ $c->id }}">{{ $c->nombre }}</option>
			@endforeach
		</select><br>

		<input type="submit" name="Agregar" class="btn btn-primary">
		<a href="{{ route('productos.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>

	</form>


</body>
</html>
@endsection
