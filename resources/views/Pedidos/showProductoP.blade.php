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
    <h1>Ver Pedidos</h1>
<a href="{{ route('pedidos.index') }}"><button type="button" class="btn btn-danger">Volver</button></a>
    <table class="table table-hover">
            <thead class="bg-info">
                <tr>
                    <td>Id</td>
                    <td>Estado</td>
                    <td>SubTotal</td>
                    <td>Cantidad</td>
                    <td>Fecha</td>
                    <td>Opciones</td>
                </tr>
            </thead>
            <tbody>
               <tr>
                <td>{{$pedido->id}}</td>
                <td>{{$pedido->estado}}</td>
                <td>{{$pedido->subtotal}}</td>
                <td>{{$pedido->cantidad}}</td>
                <td>{{$pedido->fecha}}</td>
                <td>
                @if (Auth::user()->tieneRole('Admin'))
                    <a class="btn btn-success" href="{{ route('pedidos.addProductoP',['pedido_id'=>$pedido->id])}}">Agregar Productos</a>
                @endif
                </td>

               </tr>
          </tbody>
        
    </table>
    <br>
    <h1>Lista de Productos</h1><br>
    <table class="table table-hover">
            <thead class="bg-info">
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    @if (Auth::user()->tieneRole('Admin'))
                    <td>Opciones</td>
                    @endif
                </tr>
            </thead>
            <tbody>
               @foreach($pedido->productos as $p)
               <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->cantidad}}</td>
                    <td>{{$p->comentario}}</td>
                @if (Auth::user()->tieneRole('Admin'))
                <td>
<form method="POST" action="{{ route('pedidos.deleteProductoP', ['pedido_id'=>$pedido->id, 'producto_id'=>$p->id]) }}">
{{ csrf_field() }}
 <input type="hidden" name="_method" value="DELETE">
 <button class="fa fa-trash btn btn-danger btn-sm">Eliminar</button>
</form>
</td>
@endif
</tr>
@endforeach
          </tbody>
        
    </table>
    </div>
</body>
</html>
@endsection


