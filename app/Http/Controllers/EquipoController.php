<?php

namespace App\Http\Controllers;
use App\Models\equipo;


class EquipoController extends Controller
{
    
    public function index()
    {
        return response()->json(equipo::all());
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
