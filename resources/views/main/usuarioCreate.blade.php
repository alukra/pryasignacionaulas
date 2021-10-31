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

        <form action="{{url('usuario') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input class="form-control" name="usuario" >
            </div>
            <div class="mb-3">
                <label class="form-label">contraseña</label>
                <input class="form-control" name="password" type="password" >
            </div>
            <div class="mb-3">
                <label class="form-label">repetir contraseña</label>
                <input class="form-control" name="password_confirmation" type="password" >
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input class="form-control" name="correo" type="email" >
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" >
            </div>
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input class="form-control" name="telefono" >
            </div>
            <select class="form-control m-b" name="rol_id">
                @foreach ($roles as $rol)
                    <option value="{{ $rol->id }}"> {{ $rol->nombre}}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection