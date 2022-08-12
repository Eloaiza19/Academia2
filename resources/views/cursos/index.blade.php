@extends('layouts.app')

@section('titulo', 'Lista Cursos')

@section('contenido')

    <h2>Listado de Cursos</h2>

    {{--Foreach sirve para iterar arrays. Es decir permite ciclos--}}
    <div class="row">
        @foreach ($cursito as $item)
            <div class="col-sm">
                <div class="card text-center m-3" style="width: 18rem;">
                    <img style="height: 200px" src="{{Storage::url($item->imagen) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->nombre}}</h5>
                        {{-- <p class="card-text">{{$item->description}}</p>
                        <p class="card-text">{{$item->duracion}}</p> --}}
                        <a href="/cursos/{{$item->id}}" class="btn btn-primary">Ver Detalle</a>
                    </div>
                </div>
            </div>{{--Cierro el col--}}
        @endforeach
    </div>{{--Cierro el row--}}

    {{--La doble llave sirve para interpolar.
        Interpolar es traer una variable de otro lenguaje al
        lenguaje que se esta usando actualmente--}}
@endsection
