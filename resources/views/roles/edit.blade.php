@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
<div class="container mt-2">
    <form action="{{ route('roles.update',$role->id) }}" method="POST">
        @csrf
        <div class="row">
            <label for="" class="form-label col-sm-2 py-2">Nombre Rol</label>
            <input type="text" name="name" class="form-control col-sm-6" value="{{ $role->name }}"/>
            <div class="col-sm-4 py-1">
               <button class="btn btn-sm btn-secondary ml-2">ACTUALIZAR</button>
               <a class="btn btn-secondary btn-sm ml-2" href="{{ route('roles.index') }}">REGRESAR</a>
            </div>
        </div>
    </form>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
