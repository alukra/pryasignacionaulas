@extends('layout.layout')

@section('title', 'Docentes')

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

        <form action="{{url('docente') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" >
            </div>
            <div class="mb-3">
                <label class="form-label">DUI</label>
                <input class="form-control" name="dni" >
            </div>
            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <input class="form-control" name="telefono" >
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" type="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <textarea name="direccion" class="form-control"></textarea>
            </div>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection