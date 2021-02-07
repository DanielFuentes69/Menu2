@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Producto</title>
</head>
<body>
	<div class="container"  style="
width:30%">
<h1>editar de Producto</h1>
	<form method="POST" action="{{route('productos.update', ['producto'=>$producto->id])}}">
		@csrf
		{{method_field('PUT')}}
		<label for="formGroupExampleInput">Nombre:</label>
		<input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{$producto->name}}" /><br>
		<label for="formGroupExampleInput">Precio:</label>
		<input type="boolean" class="form-control" id="formGroupExampleInput" name="precio" value="{{$producto->precio}}" /><br>
		<label for="formGroupExampleInput">Cantidad:</label>
		<input type="text" class="form-control" id="formGroupExampleInput" name="cantidad" value="{{$producto->cantidad}}" /><br>
		<label for="txtCategoria">Categoria:</label>
		<select name="categoria_id" class="form-control" id="txtCategoria" required>
			<option></option>
			@foreach ($categorias as $c)
				<option value="{{ $c->id }}" 
				@if ($c->id==$producto->categoria_id)
				{{ "selected" }}
				@endif
				>{{ $c->nombre }}</option>
			@endforeach
		</select><br>
		<input type="submit" name="Enviar" class="btn btn-primary">
		<a href="{{ route('productos.index') }}"><button type="button" class="btn btn-danger">Cancelar</button></a>

	</form>

</div>	
</body>
</html>
@endsection