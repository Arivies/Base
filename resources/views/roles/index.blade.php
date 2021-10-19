@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <div class="container">
        <div class="d-flex flex-row ">
            <div class="p-2 col-2" style="height: 45px;">
                <h1>Roles</h1>
            </div>
            <div class="p-2 col-sm-10" style="height: 45px;">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success py-2" style="height: 45px;" id="msg">
                        <strong>{{ $mensaje }}</strong>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('content')

<div class="container mt-1">
    <a class="btn btn-sm btn-secondary" href="{{ route('roles.create') }}">Agregar Rol</a>
    <a class="btn btn-sm btn-secondary" href="{{ route('admin') }}">Regresar</a>
    <table class="table mt-3">
        <thead>
            <th>Nombre Rol</th>
            <th class="d-flex justify-content-end">acciones</th>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{$role->name}}</td>
                    <td class="d-flex justify-content-end">
                        <a class="btn btn-sm btn-info"  href="{{ route('roles.show',$role->id ) }}">VER</a>
                        <a class="btn btn-sm btn-warning ml-1" href="{{ route('roles.edit',$role->id ) }}">EDITAR</a>
                        <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger ml-1"> ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$roles->links()}}
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $("#msg").fadeOut(7000);
        });
    </script>
@stop
