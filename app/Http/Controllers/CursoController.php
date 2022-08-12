<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeCursoRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Traemos toda la informacion de la tabla Cursos a través del modelo y el metodo all() */
        $cursito = Curso::all();
        /*Se adjunta cursito a la vista para poderlo usar */
        return view('cursos.index', compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeCursoRequest $request)
    {
        //Implementamos validaciones
        // $validacionDatos = $request->validate([
        //     'nombre' => 'required|max:10',
        //     'imagen' => 'required|image'

        // ]);


        //Se devuelve la peticion hecha al servidor
        // return $request->all();
        $cursito = new Curso(); //Crear una instancia de la clase Curso
        $cursito->nombre = $request->input('nombre');
        $cursito->description = $request->input('description');
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->duracion = $request->input('duracion');
        $cursito->save();/*Con el comando save se registra la info en la bd*/


        return 'Guardado exitosamente';
        //return $request->input('nombre');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.show', compact('cursito'));
        // return 'El id de este curso es: ' . $id;
        // return view('cursos.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.edit', compact('cursito'));
        //return 'El id del curso que desea actualizar es: ' . $id;
        //return 'La informacion que usted quiere actualizar, se varia asi en formato array: ' . $cursito;
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
        $cursito = Curso::find($id);
        // return $cursito;
        //Llenar la tabla cursos representada por la instancia con todo lo que viene desde el request
        //$cursito->fill($request->all());
        $cursito->fill($request->except('imagen'));
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->save();
        return 'La actualizacion fue exitosa';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursito = Curso::find($id);
        // return $cursito;
        $urlImagenBD = $cursito->imagen;
        // return $urlImagenBD;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        // return $nombreImagen;
        $rutaCompleta = public_path().$nombreImagen;
        // return $rutaCompleta;
        unlink($rutaCompleta);
        $cursito ->delete();
        return 'Eliminado';
    }
}
