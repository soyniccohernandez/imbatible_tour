<?php

namespace App\Http\Controllers;

use App\Models\Interesado;
use Illuminate\Http\Request;

class InteresadoController extends Controller
{

    /**
     * Mostrar la lista de interesados.
     */
    public function index(Request $request)
    {
        $query = Interesado::query();

        // Filtrar si hay búsqueda
        if ($request->has('q') && $request->q != '') {
            $q = $request->q;
            $query->where('nombre', 'like', "%$q%")
                ->orWhere('telefono', 'like', "%$q%")
                ->orWhere('correo', 'like', "%$q%");
        }

        // Obtener resultados ordenados por fecha, con paginación
        $interesados = $query->orderBy('created_at', 'desc')->paginate(10);

        // Retornar la vista con los datos
        return view('interesados.index', compact('interesados'));
    }

    /**
     * Guardar un nuevo interesado.
     */
    public function store(Request $request)
    {
        try {
            // Validar los datos
            $validated = $request->validate([
                'nombre' => 'required|string|max:255',
                'telefono' => 'required|string|max:20',
                'correo' => 'required|email|unique:interesados,correo',
                'autorizaContacto' => 'required|boolean',
            ]);

            // Crear registro
            $interesado = Interesado::create($validated);

            return response()->json([
                'message' => '¡Interesado registrado con éxito!',
                'data' => $interesado,
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'errors' => $e->errors()
            ], 422);
        }
    }
}
