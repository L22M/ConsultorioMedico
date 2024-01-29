<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\rol_usuario;

class Rol_usuarioController extends Controller
{
    public function index()
    {
        $rol_usuarioss = rol_usuario::all();
        return view('rol_usuario.index', compact('rol_usuarioss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarioss = usuarios::all();
        return view('rol_usuario.create', compact('usuarioss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            
            'usuario_id' => 'required|exists:usuarios,id',
            'nombreRol' => 'required|max:25',
        ], [
            
            'usuario_id.required' => 'El ID del usuario es obligatorio.',
            'usuario_id.exists' => 'El ID del usuario no existe en la tabla usuarios.',
            'nombreRol.required' => 'El nombreRol es obligatorio.',
            'nombreRol.max' => 'El nombreRol no puede tener más de :max caracteres.',
        ]);
    
        
        rol_usuario::create($validatedData);
    
        return redirect()->route('rol_usuario.index');
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
    public function edit(int $id)
    {
        $rol_usuario = rol_usuario::findOrFail($id);
        $usuarioss = usuarios::all();
        return view('rol_usuario.edit', compact('rol_usuario', 'usuarioss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'nombreRol' => 'required|max:25',
        ]);
    
        $rol_usuario = rol_usuario::findOrFail($id);
        $rol_usuario->update($validatedData);
    
        return redirect()->route('rol_usuario.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        rol_usuario::destroy($id);
        return redirect()->route('rol_usuario.index');
    }
}
