@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sena Web Php|2020</title>
</head>
<body >

    <div class="container" align="center"  style="
width:60%">
    <h1>Ver Pedido</h1>
<a href="{{ route('pedidos.index') }}"><button type="button" class="btn btn-danger">Volver</button></a>
   <div class="container-fluid">
             <div class="table-responsive">
             <table class="table table-hover">
 <tr>
<td>Id</td>
<td>
{{ $pedido->id }}
</td>
</tr>
<tr>
<td>Estado</td>
<td>
{{ $pedido->estado }}
</td>
</tr>
<tr>
<td>Subtotal</td>
<td>
{{ $pedido->subtotal}}
</td>
</tr>
<tr>
<td>Cantidad</td>
<td>
{{ $pedido->cantidad}}
</td>
</tr>
<tr>
<td>Fecha</td>
<td>
{{ $pedido->fecha}}
</td>
</tr>
<tr>
<td>Comentarios</td>
<td>
{{ $pedido->comentario}}
</td>
</tr>
</thead>
</table>
</div>
<br>
<h1> Lista de Facturas Asociados al Pedido</h1>
@if (Auth::user()->tieneRole('Admin'))
<a class="fas fa-plus btn btn-success" href="{{ route('pedidos.addFactura', ['pedido_id'=>$pedido->id]) }}">Agregar Factura</a>
@endif
@if ($pedido->factura)
<table class="table table-striped jambo_table bulk_action">
<thead>
<tr>
<td scope="col">Id</td>
<td scope="col">Numero Factura</td>
<td scope="col">Cliente</td>
<td scope="col">Vendedor</td>
<td scope="col">Fecha Factura</td>
<td scope="col">Total</td>
@if (Auth::user()->tieneRole('Admin'))
<td>Opciones</td>
@endif
</tr>
</thead>
<tbody>
<tr>
 <td>{{$pedido->factura->id}}</td>
 <td>{{$pedido->factura->codigo}}</td>
 <td>{{$pedido->factura->cliente_id}}</td>
 <td>{{$pedido->factura->vendedor_id}}</td>
 <td>{{$pedido->factura->fecha}}</td>
 <td>{{$pedido->factura->total}}</td>
@if (Auth::user()->tieneRole('Admin'))
<td>
<form method="POST" action="{{ route('pedidos.deleteFactura', ['pedido_id'=>$pedido->id,'factura_id'=>$pedido->factura->id]) }}">
{{ csrf_field() }}
 <input type="hidden" name="_method" value="DELETE">
 <button class="fa fa-trash btn btn-danger btn-sm">Eliminar</button>
</form>
</td>
@endif
@else
<h2>El Pedido no tiene ninguna Factura</h2>
@endif
</tr>
          </tbody>       
    </table>
    </div>
  </div>
</body>
</html>
@endsection
