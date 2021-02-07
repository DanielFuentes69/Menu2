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
                            <a >Menú</a>
                        </li>
                    </ul>
                </div>
                <div align="center">
                    <h1>Lista de Menus</h1>
                    <a href="{{ route('home') }}"><img src="senasoft/img/home.png" width="48"></a>
                    <a href="{{ route('menu.create') }}"><img src="senasoft/img/agregar.png" width="50"></a>
                    <table class="table table-hover">
                        <thead class="bg-info">
                            <tr>
                                <td>Id</td>
                                <td>Nombre del Menu</td>
                                <td>Opciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($menus as $m)
                                <tr>
                                    <td>{{ $m->id }}</td>
                                    <td>{{ $m->nombre }}</td>
                                    <td>
                                        <form action="{{ route('menu.edit', ['menu' => $m->id]) }}">
                                            <input type="submit" value="Editar" class="btn btn-primary">
                                        </form>
                                        <form method="POST" action="{{ route('menu.destroy', ['menu' => $m->id]) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class=" btn btn-danger">Eliminar</button>
                                        </form>
                                        <a method="get" href="{{ route('menu.showProducto', ['menu_id' => $m->id]) }}"
                                            class=" fa fa-eye btn btn-warning">Ver Productos</a>

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
