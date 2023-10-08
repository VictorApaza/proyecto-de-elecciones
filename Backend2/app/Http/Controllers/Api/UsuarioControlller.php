<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\TipoDeUsuario;


class UsuarioControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usr = Usuario::all();
        return $usr;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //}
      

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario = new Usuario();
        $usuario->IDTIPOUS = $request->IDTIPOUS;
        $usuario->NOMBREUS = $request->NOMBREUS;
        $usuario->APELLIDOSUS = $request->APELLIDOSUS;
        $usuario->TELEFONO = $request->TELEFONO;
       $usuario->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $usuario = Usuario::find($id);
        return $usuario;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $usuario = Usuario::findOrFail($request->IDUS);
        $usuario->IDTIPOUS = $request->IDTIPOUS;
        $usuario->NOMBREUS = $request->NOMBREUS;
        $usuario->APELLIDOSUS = $request->APELLIDOSUS;
        $usuario->TELEFONO = $request->TELEFONO;

        $usuario->save();
        return $usuario;
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $usuario = Usuario::destroy($id);
         return $usuario;
    }
}


