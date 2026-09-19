<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Listar todos los médicos
    public function index()
    {
        return response()->json(Doctor::all());
    }

    // Registrar un nuevo médico
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'required|string|max:20',
        ]);

        $doctor = Doctor::create($validated);

        return response()->json([
            'message' => 'Médico creado exitosamente',
            'doctor' => $doctor
        ], 201);
    }

    // Mostrar un médico específico por ID
    public function show($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['message' => 'Médico no encontrado'], 404);
        }

        return response()->json($doctor);
    }

    // Actualizar la información de un médico
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['message' => 'Médico no encontrado'], 404);
        }

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'specialty' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:doctors,email,' . $id,
            'phone' => 'sometimes|required|string|max:20',
        ]);

        $doctor->update($validated);

        return response()->json([
            'message' => 'Médico actualizado exitosamente',
            'doctor' => $doctor
        ]);
    }

    // Eliminar un médico
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return response()->json(['message' => 'Médico no encontrado'], 404);
        }

        $doctor->delete();

        return response()->json(['message' => 'Médico eliminado exitosamente']);
    }
}