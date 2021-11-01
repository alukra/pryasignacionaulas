@extends('layout.layout')

@section('title', 'Usuarios')

@section('main')
    <div class="ibox-content">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{url('usuario/'. $usuario->id ) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" value="{{ $usuario->id }}" />
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input class="form-control" name="usuario" value="{{ $usuario->usuario }}" >
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input class="form-control" name="correo" type="email" value="{{ $usuario->correo }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" value="{{ $usuario->nombre }}" >
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input class="form-control" name="telefono" value="{{ $usuario->telefono }}">
            </div>
            <select class="form-control m-b" name="rol_id">
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}" @if($rol->id == $usuario->rol_id) selected @endif> {{ $rol->nombre}}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection