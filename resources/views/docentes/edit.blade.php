@extends('layouts.app')

@section('titulo', 'editar docente')

@section('contenido')

    <form action="/docentes/{{$docentesitos -> id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <br>
        <h2>Aqui puedes actualizar tu información</h2>
        <div class="form-group">
            <label for="nombre">Nombre del Docente</label>
            <input id="nombre" class="form-control" type="text" name="nombre" value="{{$docentesitos -> nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellido del Docente</label>
            <input id="apellidos" class="form-control" type="text" name="apellidos">
        </div>
        <div class="form-group">
            <label for="tituloUniversitario">Titulo Universitario</label>
            <input id="tituloUniversitario" class="form-control" type="text" name="tituloUniversitario">
        </div>
        <div class="form-group">
            <label for="edad">Edad del Docente</label>
            <input id="edad" class="form-control" type="number" name="edad">
        </div>
        <div class="form-group">
            <label for="fecha_contrato">Fecha Contrato</label>
            <input id="fecha_contrato" class="form-control" type="date" name="fecha_contrato">
        </div>
        <div class="form-group">
            <label for="fotoPerfil">Foto</label>
            <br>
            <img style="height: 80px; width:90px" src="{{Storage::url($docentesitos->fotoPerfil) }}" class="card-img-top" alt="...">
        </div>
        <div class="form-group">
            <label for="doc_identidad">Cargue documento de identidad</label>
            <br>
            <input id="doc_identidad" type="file" name="doc_identidad">
        </div>
        <br>
        <button class="btn btn-dark" type="submit">Actualizar</button>
    </form>

@endsection
