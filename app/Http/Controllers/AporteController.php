<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Aporte;

class AporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Aporte::get();
        return view('admin.aportes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $afiliados = User::where('type', 2)->pluck('name', 'id');

        return view('admin.aportes.create', compact('afiliados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          // Validar los datos del formulario
          $request->validate([
            'afiliado_id' => 'required|exists:users,id',
            'monto' => 'required|numeric',
        ]);

        // Crear un nuevo modelo y asignar valores
        $aportes = new Aporte();
        $aportes->afiliado_id = $request->input('afiliado_id');
        $aportes->monto = $request->input('monto');
        
        // Guardar el modelo en la base de datos
        $aportes->save();

        // Redireccionar a la vista de detalles o a donde sea necesario
        return redirect()->route('backend.aporte.index')
            ->with('success', 'Ruta creada exitosamente');
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
