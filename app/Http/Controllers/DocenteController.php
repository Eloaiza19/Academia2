<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeDocenteRequest;
use App\Models\Docentes;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentesitos = Docentes::all();
        return view('docentes.index', compact('docentesitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeDocenteRequest $request)
    {

        $docentesitos = new Docentes();
        $docentesitos->nombre = $request->input('nombre');
        $docentesitos->apellidos = $request->input('apellidos');
        $docentesitos->tituloUniversitario = $request->input('tituloUniversitario');
        $docentesitos->edad = $request->input('edad');
        $docentesitos->fecha_contrato = $request->input('fecha_contrato');
        if($request->hasFile('fotoPerfil','doc_identidad')){
            $docentesitos->fotoPerfil = $request->file('fotoPerfil')->store('public/docentes');
            $docentesitos->doc_identidad = $request->file('doc_identidad')->store('public/docentes');
        }
        $docentesitos->save();

        return view('docentes.add');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $docentesitos = Docentes::find($id);
        return view('docentes.show', compact('docentesitos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docentesitos = Docentes::find($id);
        return view('docentes.edit', compact('docentesitos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docentesitos = Docentes::find($id);
        $docentesitos -> fill($request -> except('imagen'));
        if($request -> hasFile('imagen')){
            $docentesitos -> imagen = $request -> file('imagen') -> store('public/docentes');
        }
        $docentesitos -> save();
        return view('docentes.act');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentesitos = Docentes::find($id);
        $urlImagenBD = $docentesitos->fotoPerfil;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD);
        $rutaCompleta = public_path() . $nombreImagen;
        unlink($rutaCompleta);
        $docentesitos->delete();
        return view('docentes.delete');
    }
}
