@extends('layouts.app')

@section('titulo', 'Agregar Estudiante')

@section('contenido')

<h2 class="text-start mx-3 mt-5 pt-3">Crear Estudiante Nuevo </h2>

    <div class="container2 form bg-light text-dark rounded">
        <div class="row">
            <div class="col-sm-4 mx-5 pb-3 rounded">
                <form action="/estudiantes" method="POST" class="" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $alert)
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    <li>{{$alert}}</li>
                                </ul>
                            </div>
                        @endforeach
                    @endif
                    <h5>Documento de identidad</h5>
                    <br>
                        <div class="form-group row">
                            <label for="document_type" class="col-sm-6 col-form-label">Tipo de documento *</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="document_type" name="document_type">
                                    <option>Seleccionar</option>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="CE">CE</option>
                                    <option value="PAS">PAS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="numero_documento" class="col-sm-6 col-form-label">Numero de Documento*</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="numero_documento" id="numero_documento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="documento_identidad" class="col-sm-6 col-form-label">Cargue Documento de Identidad *</label>
                            <div class="col-sm-6">
                                <input type="file" class="hidden" id="documento_identidad" name="documento_identidad" accept="application/pdf" title="Examinar"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pais_expedicion" class="col-sm-6 col-form-label">País de expedición *</label>
                            <div class="col-sm-6">
                                <select class="form-control" name="pais_expedicion" id="pais_expedicion">
                                    <option>Seleccionar</option>
                                    @foreach ( $pais as $estado)
                                        <option value="">{{ $estado->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="departamento_expedicion" class="col-sm-6 col-form-label">Departamento de Expedicion*</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="departamento_expedicion" name="departamento_expedicion">
                                    <option>Seleccionar</option>
                                    @foreach ( $departamento as $depa)
                                        <option value="">{{ $depa->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="municipio_expedicion" class="col-sm-6 col-form-label">Municipio de Expedicion *</label>
                            <div class="col-sm-6">
                                <select class="form-control" id="municipio_expedicion" name="municipio_expedicion">
                                    <option>Seleccionar</option>
                                    @foreach ( $municipio as $ciudad)
                                        <option value="{{ $ciudad->id }}">{{ $ciudad->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fecha_expedicion" class="col-sm-6 col-form-label">Fecha de expedición *</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="fecha_expedicion" id="fecha_expedicion">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm rounded">
                    </div>
                    <div class="col-sm-5 mx-5 px-1 pb-3 rounded">
                        <h5>Datos de identificación</h5>
                        <br>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-6 col-form-label">Nombres *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellido1" class="col-sm-6 col-form-label">Primer apellido *</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="apellido1" name="apellido1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellido2" class="col-sm-6 col-form-label">Segundo apellido</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="apellido2" name=apellido2>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="genero" class="col-sm-6 col-form-label">Género *</label>
                        <div class="col-sm-6">
                            <select class="form-control" class="document_type" id="genero" name="genero">
                                <option>Seleccionar</option>
                                <option value="M">M</option>
                                <option value="F">F</option>
                                <option value="OTRO">OTRO</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fecha_nacimiento" class="col-sm-6 col-form-label">Fecha de nacimiento *</label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pais_nacimiento" class="col-sm-6 col-form-label">País de nacimiento *</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="pais_nacimiento" id="pais_nacimiento">
                                <option>Seleccionar</option>
                                @foreach ( $pais as $estado)
                                    <option value="">{{ $estado->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="departamento_nacimiento" class="col-sm-6 col-form-label">Departamento de nacimiento *</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="departamento_nacimiento" id="departamento_nacimiento">
                                <option>Seleccionar</option>
                                @foreach ( $departamento as $depa)
                                    <option value="">{{ $depa->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="municipio_nacimiento" class="col-sm-6 col-form-label">Municipio de nacimiento *</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="municipio_nacimiento" id="municipio_nacimiento">
                                <option>Seleccionar</option>
                                @foreach ( $municipio as $ciudad)
                                    <option value="{{ $ciudad->id }}">{{ $ciudad->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="estrato" class="col-sm-6 col-form-label">Estrato socioeconómico *</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="estrato" id="estrato">
                                <option>Seleccionar</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="curso" class="col-sm-6 col-form-label">Curso</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="curso" id="curso">
                                <option>Seleccionar</option>
                                @foreach ( $curso as $grado)
                                    <option value="{{ $grado->id }}">{{ $grado->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="buttons">
                        <a href="/estudiantes/" class="btn btn-secondary">Regresar</a>
                        <button type="submit" class="btn btn-success" value="Guardar">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<br>

@endsection
