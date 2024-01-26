<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\User;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Route::get();

        return view('admin.routes.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usersWithType2 = User::where('type', 2)->pluck('name', 'id');

        return view('admin.routes.create', compact('usersWithType2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'route_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_location' => 'nullable|string|max:255',
            'end_location' => 'nullable|string|max:255',
            'active' => 'required|boolean',
        ]);

        // Crear un nuevo modelo y asignar valores
        $route = new Route();
        $route->user_id = $request->input('user_id');
        $route->route_name = $request->input('route_name');
        $route->description = $request->input('description');
        $route->start_location = $request->input('start_location');
        $route->end_location = $request->input('end_location');
        $route->active = $request->input('active');

        // Guardar el modelo en la base de datos
        $route->save();

        // Redireccionar a la vista de detalles o a donde sea necesario
        return redirect()->route('backend.route.index')
            ->with('success', 'Ruta creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $route = Route::find($id);
        return view('admin.routes.show',compact('route'));
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
