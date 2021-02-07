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
                            <a>Categorias</a>
                        </li>
                    </ul>
                </div>
                <div align="center">
                    <h1>Lista de Categorias</h1>
                    <a href="{{ route('home') }}"><img src="senasoft/img/home.png" width="48"></a>
                    <a href="{{ route('categoria.create') }}"><img src="senasoft/img/agregar.png" width="50"></a>
                    <table class="table table-hover">
                        <thead class="bg-info">
                            <tr>
                                <td>Id</td>
                                <td>Nombre de la Categoria</td>
                                <td>Opciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->id }}</td>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>
                                        <form action="{{ route('categoria.edit', ['categorium' => $categoria->id]) }}">
                                            <input type="submit" value="Editar" class="btn btn-primary">
                                        </form>
                                        <form method="POST"
                                            action="{{ route('categoria.destroy', ['categorium' => $categoria->id]) }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class=" btn btn-danger">Eliminar</button>
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
