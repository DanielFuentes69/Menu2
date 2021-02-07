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
                            <a>Relos</a>
                        </li>
                    </ul>
                </div>
                <div align="center">
                    <h1>Lista de Roles</h1>
                    <a href="{{ route('home') }}"><img src="senasoft/img/home.png" width="48"></a>
                    <a href="{{ route('role.create') }}"><img src="senasoft/img/agregar.png" width="50"></a>
                    <table class="table table-hover">
                        <thead class="bg-info">
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td>Option</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>
                                        <form action="{{ route('role.edit', ['role' => $role->id]) }}">
                                            <input type="submit" value="Editar" class="btn btn-primary" />
                                        </form>
                                        <form method="POST" action="{{ route('role.destroy', ['role' => $role->id]) }}">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <input type="submit" value="Eliminar" class="btn btn-danger">
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
