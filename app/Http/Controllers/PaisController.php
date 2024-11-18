<?php
namespace App\Http\Controllers;
use App\Models\Pais;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    
    public function index()
    {
        return response()->json(Pais::all());
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
{
    
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
