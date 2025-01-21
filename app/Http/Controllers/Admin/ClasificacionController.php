<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clasificacion;
use App\Http\Requests\AddClasificacionRequest;
use App\Http\Requests\UpdateClasificacionRequest;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.clasificacion.index')->with([
            'clasificaciones' => Clasificacion::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clasificacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddClasificacionRequest $request)
    {
        if($request->validated()) {
            Clasificacion::create($request->validated());

            return redirect()->route('admin.clasificacion.index')->with([
                'success' => 'La clasificación se ha registrado correctamente'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Clasificacion $clasificacion)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clasificacion $clasificacion)
    {
        return view('admin.clasificacion.edit')->with([
            $clasificacion
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClasificacionRequest $request, Clasificacion $clasificacion)
    {
        if($request->validated()) {
            $clasificacion->update($request->validated());
        }

        return redirect()->route('admin.clasificacion.index')->with([
            'success' => 'La clasificación se ha actualizado correctamente'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clasificacion $clasificacion)
    {
        $clasificacion->delete();

        return redirect()->route('admin.clasificacion.index')->with([
            'success' => 'La clasificación se ha eliminado correctamente'
        ]);
    }
}
