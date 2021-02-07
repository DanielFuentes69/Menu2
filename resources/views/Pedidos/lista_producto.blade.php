@extends('layouts.app')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sena Web Php|2020</title>
</head>
<body>
    <div class="container" align="center"  style="
width:60%">
    <h1>Ver Producto</h1>
<a href="{{ route('pedidos.index') }}"><button type="button" class="btn btn-danger">Volver</button></a>
            <h1>Lista de Productos</h1>
            <br>
            <form method="POST" action="{{ action('PedidoController@saveProductoP') }}">
            @csrf
            <input type="hidden" name="pedido_id" value="{{ $pedido_id }}" />
<div class="container-fluid">
<div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
             <tr>
<td></td>
<td>Id</td>
<td>Nombre</td>
<td>Precio</td>
<td>Cantidad</td>
</tr>
</thead>
<tbody>
@foreach($productos as $pr)
<tr>
<td>
<input type="checkbox" name="productos_id[]" value="{{$pr->id}}" />
</td>
<td>{{$pr->id}}</td>
<td>{{$pr->name}}</td>
<td>{{$pr->precio}}</td>
<td>{{$pr->cantidad}}</td>
</tr>
@endforeach
</tbody>
</table>
<tr>
     <button class="fa fa-floppy-o btn btn-success" style="font-size: 17px;">Guardar</button>
</tr>
</form>
</div>
</div>
</div>
</body>
</html>
