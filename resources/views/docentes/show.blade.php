@extends('layouts.app')

@section('titulo', 'eliminar docente')

@section('contenido')


    <div class="text-center">
        <img class="card-img-top" style="height: 250px; width:250px" src="{{Storage::url($docentesitos -> fotoPerfil) }}" class="card-img-top" alt="">
        <br><br>
        <iframe width="400" height="400" src="{{Storage::url($docentesitos -> doc_identidad)}}" frameborder="0"></iframe>
        <br>
        <p class="card-text">Nombre: {{$docentesitos -> nombre}}</p>
        <p class="card-text">Apellidos: {{$docentesitos -> apellidos}}</p>
        <p class="card-text">Titulo: {{$docentesitos -> tituloUniversitario}}</p>
        <p class="card-text">Edad: {{$docentesitos -> edad}}</p>
        <p class="card-text">Fecha: {{$docentesitos -> fecha_contrato}}</p>

        <a href="/docentes/{{$docentesitos ->id }}/edit" class="btn btn-info">Actualizar</a>

        <br><br>
            <form class="form-group" action="/docentes/{{$docentesitos->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>

@endsection

