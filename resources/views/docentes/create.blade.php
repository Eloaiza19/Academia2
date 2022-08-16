@extends('layouts.app')

@section('titulo', 'crear docente')

@section('contenido')

    <form action="/docentes" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $alerta)
            <div class="alert alert-danger" role="alert">
                <ul>
                    <li>{{$alerta}}</li>
                </ul>
            </div>
            @endforeach
        @endif

        <h2>Aqui puedes inscribirte como docente</h2>
        <div class="form-group">
            <label for="nombre">Nombre del Docentes</label>
            <input id="nombre" class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellido del Docentes</label>
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
            <label for="fotoPerfil">Foto Personal</label>
            <br>
            <input id="fotoPerfil" type="file" name="fotoPerfil">
        </div>
        <div class="form-group">
            <label for="doc_identidad">Cargue su Documento de identidad</label>
            <br>
            <input id="doc_identidad" type="file" name="doc_identidad">
        </div>
        <br>
        <button class="btn btn-dark" type="submit">Guardar Datos</button>
    </form>
@endsection
