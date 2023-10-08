<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrenteControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $frent = Frente::all();
        return $frent;

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
        //
        $frente = new Frente();
        $frente->IDCARRERA = $request->IDCARRERA;
        $frente->IDFACUL = $request->IDFACUL;
        $frente->NOMBREFRENT = $request->NOMBREFRENT;
       $frente->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
