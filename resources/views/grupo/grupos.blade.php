@extends('master')

@section('contenido')

    <h1>Listado de alumnos</h1><hr>
        <a href="{{ url('/grupo/registrar') }}" class="btn btn-secondary">Registrar Alumno</a><br><br>
    
        <table class="table table-hover">
            <thead>
                <th>ID</th>
                <th>Clave</th>
                <th>Especialidad</th>
                <th>Descripcion</th>
                <th>Semestre</th>
                <th>Turno</th>
                <th>Opciones</th>
            </thead>
            <tbody>
                @foreach ($grupos as $a)
                <tr>
                    <td>{{ $a->id}}</td>
                    <td>{{ $a->clave}}</td>
                    <td>{{ $a->especialidad_id}}</td>
                    <td>{{ $a->descripcion}}</td>
                    <td>{{ $a->semestre}}</td>
                    <td>{{ $a->turno}}</td>
                    <td>
                        <a href="{{url('/grupo/editarGrupo')}}/{{$a->id}}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{url('/grupo/eliminargrupo')}}/{{$a->id}}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
    <div class="text-center">
        {{$grupos->links()}}
    </div>

    <style>
        div nav ul{
            justify-content: center;
        }
    </style>
@stop