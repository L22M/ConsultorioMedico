<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientess = paciente::all();
        return view('paciente.index', compact('pacientess'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarioss = usuarios::all();
        return view('paciente.create', compact('usuarioss'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'sexo' => 'required|string|max:10',
            'fechaNacimiento' => 'required|date',
            'edad' => 'required|integer',
            'idNum' => 'required|string|max:255',
            'aseguradora' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'otros' => 'nullable|string|max:255',
            'usuario_id' => 'required|exists:usuarios,id',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
            'sexo.required' => 'El campo sexo es obligatorio.',
            'sexo.max' => 'El sexo no puede tener más de :max caracteres.',
            'fechaNacimiento.required' => 'El campo fecha de nacimiento es obligatorio.',
            'fechaNacimiento.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'edad.required' => 'El campo edad es obligatorio.',
            'edad.integer' => 'La edad debe ser un número entero.',
            'idNum.required' => 'El campo ID es obligatorio.',
            'idNum.max' => 'El ID no puede tener más de :max caracteres.',
            'aseguradora.required' => 'El campo aseguradora es obligatorio.',
            'aseguradora.max' => 'La aseguradora no puede tener más de :max caracteres.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El email debe ser una dirección de correo electrónico válida.',
            'email.max' => 'El email no puede tener más de :max caracteres.',
            'domicilio.required' => 'El campo domicilio es obligatorio.',
            'domicilio.max' => 'El domicilio no puede tener más de :max caracteres.',
            'telefono.required' => 'El campo teléfono es obligatorio.',
            'telefono.max' => 'El teléfono no puede tener más de :max caracteres.',
            'otros.max' => 'El campo otros no puede tener más de :max caracteres.',
            'usuario_id.required' => 'El campo usuario es obligatorio.',
            'usuario_id.exists' => 'El usuario seleccionado no existe.',
        ]);

        Paciente::create($validatedData);

        return redirect()->route('paciente.index');
    
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
        $paciente = paciente::findOrFail($id);
        $usuarioss = usuarios::all();
        return view('paciente.edit', compact('paciente', 'usuarioss'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pacientess = paciente::findOrFail($id);
        $pacientess->update($request->all());
        return redirect()->route('paciente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        paciente::destroy($id);
        return redirect()->route('paciente.index');
    }
}
