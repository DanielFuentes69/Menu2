@extends('layouts.app')

@section('content')
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
<a href="{{ route('pedidos.index') }}"><button type="button" class="btn btn-danger">Volver</button></a>
   <h1>Lista de Facturas</h1>
            <br>
<form method="POST" action="{{ action('PedidoController@saveFactura') }}">
@csrf
<input type="hidden" name="pedido_id" value="{{ $pedido_id }}" />
<div class="container-fluid">
<div class="table-responsive">
            <table class="table table-striped jambo_table bulk_action">
            <thead>
             <tr>
<td></td>
<td scope="col">Id</td>
<td scope="col">Numero Factura</td>
<td scope="col">Cliente</td>
<td scope="col">Vendedor</td>
<td scope="col">Fecha Factura</td>
<td scope="col">Total</td>
</tr>
</thead>
<tbody>
 @foreach($facturas as $f)
<tr>
<td>
<input type="radio" name="factura_id" value="{{$f->id}}" />
</td>          
<td>{{$f->id}}</td>
<td>{{$f->codigo}}</td>
<td>{{$f->cliente_id}}</td>
<td>{{$f->vendedor_id}}</td>
<td>{{$f->fecha}}</td>
<td>{{$f->total}}</td>  
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
</body>
</html>
@endsection