<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'numero' => 'required|string',
            'mensaje' => 'required|string',
        ]);

        // Crear un nuevo mensaje con los datos recibidos
        Mensaje::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'numero' => $request->numero,
            'company' => $request->company,
            'mensaje' => $request->mensaje,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
