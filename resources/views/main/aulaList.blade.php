@extends('layout.layout')

@section('title', 'Aulas')

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
                    <th>nombre</th>
                    <th>ubicación</th>
                    <th>capacidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aulas as $aula)
                    <tr>
                        <td>{{ $aula->nombre}}</td>
                        <td>{{ $aula->ubicacion}}</td>
                        <td>{{ $aula->capacidad}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('aula/'. $aula->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('aula/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection