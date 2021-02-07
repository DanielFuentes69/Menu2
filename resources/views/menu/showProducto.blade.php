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

        <div class="container" align="center" style="
    width:60%">
            <h1>Ver Menus</h1>
            <a href="{{ route('menu.index') }}"><button type="button" class="btn btn-danger">Volver</button></a>
            <table class="table table-hover">
                <thead class="bg-info">
                    <tr>
                        <td>Id</td>
                        <td>Nombre del Menu</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $menu->id }}</td>
                        <td>{{ $menu->nombre }}</td>
                        <td>
                            @if (Auth::user()->tieneRole('Admin'))
                                <a class="btn btn-success"
                                    href="{{ route('menu.addProductoM', ['menu_id' => $menu->id]) }}">Agregar Productos</a>
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
                    @foreach ($menu->productos as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->precio }}</td>
                            <td>{{ $p->cantidad }}</td>

                            @if (Auth::user()->tieneRole('Admin'))
                                <td>
                                    <form method="POST"
                                        action="{{ route('menu.deleteProductoM', ['menu_id' => $menu->id, 'producto_id' => $p->id]) }}">
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
