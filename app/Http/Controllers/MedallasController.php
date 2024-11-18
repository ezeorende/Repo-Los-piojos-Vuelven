<?php



namespace App\Http\Controllers;

use App\Models\Medalla;

class MedallasController extends Controller
{
    public function index()
    {
        return response()->json(Medalla::all());
    }
}



/*

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedallasController extends Controller
{
   public function index()
   {
       // Obtener todas las medallas
       $medallas = Medalla::all();

       // Retornar la lista como JSON
       return response()->json($medallas);
   }

}

*/