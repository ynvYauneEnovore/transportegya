<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assist;
use Illuminate\Http\RedirectResponse;

class AssistsController extends Controller
{
    // Mostrar todas las asistencias
    public function index()
    {
        $asistencias = Assist::get();
        return view('affiliate.assists.index', compact('asistencias'));
    }

    // Mostrar el formulario para crear una nueva asistencia
    public function create()
    {
        return view('asistencias.create');
    }

    // Almacenar una nueva asistencia en la base de datos
    public function store(Request $request): RedirectResponse
    {
        // Valida los datos del formulario según tus necesidades
        $request->validate([
            'fecha' => 'required|date',
            'hora_entrada' => 'nullable|date_format:H:i',
            'hora_salida' => 'nullable|date_format:H:i',
        ]);

        // Crea una nueva instancia de Asistencia y guarda en la base de datos
        Assist::create([
            'user_id' => auth()->user()->id, // O asigna el usuario correspondiente
            'fecha' => $request->input('fecha'),
            'hora_entrada' => $request->input('hora_entrada'),
            'hora_salida' => $request->input('hora_salida'),
        ]);

        return redirect()->route('assists.index')->with('success', 'Asistencia registrada exitosamente.');
    }

    // Mostrar los detalles de una asistencia específica
    public function show(Asistencia $asistencia)
    {
        return view('asistencias.show', compact('asistencia'));
    }

    // Mostrar el formulario para editar una asistencia
    public function edit(Asistencia $asistencia)
    {
        return view('asistencias.edit', compact('asistencia'));
    }

    // Actualizar una asistencia en la base de datos
    public function update(Request $request, Asistencia $asistencia)
    {
        // Valida los datos del formulario según tus necesidades
        $request->validate([
            'fecha' => 'required|date',
            'hora_entrada' => 'nullable|date_format:H:i',
            'hora_salida' => 'nullable|date_format:H:i',
        ]);

        // Actualiza los campos de la asistencia
        $asistencia->update([
            'fecha' => $request->input('fecha'),
            'hora_entrada' => $request->input('hora_entrada'),
            'hora_salida' => $request->input('hora_salida'),
        ]);

        return redirect()->route('asistencias.index')->with('success', 'Asistencia actualizada exitosamente.');
    }

    // Eliminar una asistencia de la base de datos
    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();
        return redirect()->route('asistencias.index')->with('success', 'Asistencia eliminada exitosamente.');
    }
}
