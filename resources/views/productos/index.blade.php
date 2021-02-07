@extends('layouts.plantilla')
@section('content')

    <!-- End Sidebar -->
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
                            <a>Productos</a>
                        </li>
                    </ul>
                </div>
                <div align="center">
                    <h1>Lista de Productos</h1>
                    <a href="{{ route('home') }}"><img src="senasoft/img/home.png" width="48"></a>
                    <a href="{{ route('productos.create') }}"><img src="senasoft/img/agregar.png" width="50"></a>
                    <table class="table table-hover">
                        <thead class="bg-info">
                            <tr>
                                <td>Id</td>
                                <td>Nombre</td>
                                <td>Precio</td>
                                <td>Cantidad</td>
                                <td>Categoria</td>
                                <td>Opciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $producto->name }}</td>
                                    <td>{{ $producto->precio }}</td>
                                    <td>{{ $producto->cantidad }}</td>
                                    <td>{{ $producto->categoria->nombre }}</td>
                                    <td>
                                        <form method="POST"
                                            action="{{ route('productos.destroy', ['producto' => $producto->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="Eliminar" class="btn btn-danger">
                                        </form>
                                        <form action="{{ route('productos.edit', ['producto' => $producto->id]) }}">
                                            <input type="submit" value="Editar" class="btn btn-warning">
                                        </form>
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
