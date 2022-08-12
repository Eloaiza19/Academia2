@extends('layouts.app')

@section('titulo', 'Formulario Docente')

@section('contenido')

    <h2>Listado de Docentes</h2>
    <div class="row">
        @foreach ($docentesitos as $item)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem; margin: 20px">
                    <img src="{{Storage::url($item -> fotoPerfil) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item -> nombre}}</h5>
                        <a href="/docentes/{{$item -> id}}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
