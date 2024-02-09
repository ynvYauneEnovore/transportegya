<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cargos;
use Illuminate\Http\RedirectResponse;


class CargoController extends Controller
{
    public function index()
    {
        $data = Cargos::get();
        return view('admin.directorio.index', compact('data'));
    }

    public function create()
    {
        $afiliados = User::pluck('name', 'id');

        return view('admin.directorio.create', compact('afiliados'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'afiliado_id' => 'required|exists:users,id',
        ]);

        // Crear un nuevo modelo y asignar valores
        $aportes = new Cargos();
        $aportes->user_id = $request->input('afiliado_id');
        $aportes->nombre = $request->input('nombre');
        $aportes->descripcion = $request->input('descripcion');

        // Guardar el modelo en la base de datos
        $aportes->save();

        // Redireccionar a la vista de detalles o a donde sea necesario
        return redirect()->route('backend.cargo.index')
            ->with('success', 'Ruta creada exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        Cargos::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Cargo eliminado exitosamente');
    }
}
