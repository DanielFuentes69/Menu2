@extends('layouts.plantilla')
@section('content')
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">DataTables.Net</h4>
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
                            <a >Clientes</a>
                        </li>
                    </ul>
                </div>
                <div align="center">
                    <h1>Lista de Clientes</h1>
                    <a href="{{ route('home') }}"><img src="senasoft/img/home.png" width="48"></a>
                    <a href="{{ route('cliente.create') }}"><img src="senasoft/img/agregar.png" width="50"></a>
                    <table class="table table-hover ">
                        <thead class="bg-info">
                            <tr>
                                <th >Id</th>
                                <th >Nombre</th>
                                <th >Apellido</th>
                                <th >Documento</th>
                                <th >Telefono</th>
                                <th >Direccion</th>
                                <th >Email</th>
                                <th >Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cliente as $c)
                                <tr>
                                    <td scope="row">{{ $c->id }}</td>
                                    <td>{{ $c->nombre }}</td>
                                    <td>{{ $c->apellido }}</td>
                                    <td>{{ $c->documento }}</td>
                                    <td>{{ $c->telefono }}</td>
                                    <td>{{ $c->direccion }}</td>
                                    <td>{{ $c->email }}</td>
                                    <td>
                                        <form action="{{ route('cliente.edit', ['cliente' => $c->id]) }}">
                                            <input type="submit" value="Editar Cliente" class="btn btn-primary">
                                        </form>
                                        <form method="POST" action="{{ route('cliente.destroy', ['cliente' => $c->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="Eliminar Cliente" class="btn btn-danger">
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
    </div>
    </div>
    </div>
    </div>

@endsection
