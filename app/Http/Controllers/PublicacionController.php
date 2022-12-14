<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publicacion;

class PublicacionController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicacions= Publicacion::all();
        return view('publicacion.index')->with('publicacions',$publicacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:100',
            'resumen' => 'required|max:1000',
            'contenido' => 'required|max:10000',
            'foto' => 'required|max:100',
        ]);

        $publicaciones = new Publicacion();
        $publicaciones->titulo = $request->get('titulo');
        $publicaciones->resumen = $request->get('resumen');
        $publicaciones->contenido = $request->get('contenido');
        $publicaciones->foto = $request->get('foto');
        $publicaciones->save();

        return redirect('/publicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::find($id);
        return view('publicacion.edit')->with('publicacion',$publicacion);
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
        $publicacion = Publicacion::find($id);
        $publicacion->titulo = $request->get('titulo');
        $publicacion->resumen = $request->get('resumen');
        $publicacion->contenido = $request->get('contenido');
        $publicacion->foto = $request->get('foto');
        $publicacion->save();

        return redirect('/publicaciones');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);

        $publicacion= Publicacion::findOrFail($id);


        if ($publicacion->delete()) {
            return redirect('/publicaciones')->withSuccess('El proyecto se ha eliminado con exito.');
        }

        return response()->json([
            'mensaje' => 'Error al eliminar el proyecto.'
        ]);
    }
}

