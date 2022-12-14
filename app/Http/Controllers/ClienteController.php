<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
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
        $clientes= Cliente::all();
        return view('cliente.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('cliente.create');
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

            'codigo' => 'required|string|max:100',
            'empresa' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'direccion' => 'required|string|max:100',
        ]);


        $clientes = new Cliente();
        $clientes->codigo = $request->get('codigo');
        $clientes->empresa = $request->get('empresa');
        $clientes->email = $request->get('email');
        $clientes->direccion = $request->get('direccion');
        $clientes->save();

        return redirect('/clientes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
return view('cliente.ver', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
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
        $request->validate([
            'codigo' => 'required|string|max:100',
            'empresa' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'direccion' => 'required|string|max:100',
        ]);


        $cliente = Cliente::find($id);

        $cliente->codigo = $request->get('codigo');
        $cliente->empresa = $request->get('empresa');
        $cliente->email = $request->get('email');
        $cliente->direccion= $request->get('direccion');

        $cliente->save();
        return redirect('/clientes');
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

        $cliente= Cliente::findOrFail($id);


        if ($cliente->delete()) {
            return redirect('/clientes')->withSuccess('El proyecto se ha eliminado con exito.');
        }

        return response()->json([
            'mensaje' => 'Error al eliminar el proyecto.'
        ]);
    }
}
