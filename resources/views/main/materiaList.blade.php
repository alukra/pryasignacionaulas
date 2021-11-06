@extends('layout.layout')

@section('title', 'Materias')

@section('cssExtra')
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
@show

@section('scriptExtra')
<script src="js/plugins/dataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
            $('.table').DataTable({
                pageLength: 25,
                responsive: true
            });
        });
</script>
@show

@section('main')
    <div class="ibox-content">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Ciclo</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                    <tr>
                        <td>{{ $materia->codigo}}</td>
                        <td>{{ $materia->nombre }}</td>
                        <td>{{ $materia->ciclo }}</td>
                        <td>{{ $materia->carrera }}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('materia/'. $materia->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('materia/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection