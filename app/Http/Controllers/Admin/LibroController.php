<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Libro;
use App\Models\Clasificacion;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clasificaciones = Clasificacion::all();

        return view('admin.libro.addEdit', compact('clasificaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->validated()) {
            $image_path = '';
                if ($request->hasFile('image')) {
            $image_path = $request->file('imagen')->store('imagen', 'public');
            
            Libro::create($request->validated());
        }

            return redirect()->route('admin.index')->with([
                'success' => 'El libro se ha registrado correctamente'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Libro::where('id', $id)->get();

        return view('admin.libro.details', compact('book'));
        //abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view('admin.libro.edit')->with([
            $libro
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
