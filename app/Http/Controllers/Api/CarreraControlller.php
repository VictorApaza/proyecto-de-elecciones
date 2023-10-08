<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Facultad;



class CarreraControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $car = Carrera::all();
        return $car;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carrera = new Carrera();
        $carrera->IDFACUL = $request->IDFACUL;
        $carrera->NOMBRECAR = $request->NOMBRECAR;
        $carrera->EMAILCAR = $request->EMAILCAR;
 
        $carrera->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $carrera = Carrera::find($id);
        return $carrera;
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
        $carrera = Carrera::findOrFail($request->id);
        $carrera->IDFACUL = $request->IDFACUL;
        $carrera->NOMBRECAR = $request->NOMBRECAR;
        $carrera->EMAILCAR = $request->EMAILCAR;
 
        $carrera->save();
        return $carrera;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $carrera = Carrera::destroy($id);
        return $carrera;
    }
}
