@extends('layouts.plantilla')
@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Tu Menú</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="{{ url('/home') }}">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a >Pedidos</a>
                        </li>
                    </ul>
                </div>
                <div align="center">
                    <h1>Lista de Pedidos</h1>
                    <a href="{{ route('home') }}"><img src="senasoft/img/home.png" width="48"></a>
                    <a href="{{ route('pedidos.create') }}"><img src="senasoft/img/agregar.png" width="50"></a>
                    <table class="table table-hover">
                        <thead class="bg-info">
                            <tr>
                                <td>Id</td>
                                <td>Estado</td>
                                <td>Subtotal</td>
                                <td>Cantidad</td>
                                <td>Fecha</td>
                                <td>Comentarios</td>
                                <td>Opciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pedido->estado }}</td>
                                    <td>{{ $pedido->subtotal }}</td>
                                    <td>{{ $pedido->cantidad }}</td>
                                    <td>{{ $pedido->fecha }}</td>
                                    <td>{{ $pedido->comentario }}</td>
                                    <td>
                                        <form action="{{ route('pedidos.edit', ['pedido' => $pedido->id]) }}">
                                            <input type="submit" value="Editar" class="btn btn-primary">
                                        </form>
                                        <form method="POST"
                                            action="{{ route('pedidos.destroy', ['pedido' => $pedido->id]) }}">
                                            {{ csrf_field('DELETE') }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                        <a method="get"
                                            href="{{ route('pedidos.showProductoP', ['pedido_id' => $pedido->id]) }}"
                                            class=" fa fa-eye btn btn-warning">Ver Productos</a>
                                        <a method="get"
                                            href="{{ route('pedidos.showFactura', ['pedido_id' => $pedido->id]) }}"
                                            class=" fa fa-eye btn btn-warning">Ver Facturas</a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
