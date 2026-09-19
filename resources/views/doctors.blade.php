@extends('layout')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Listado de Médicos</h2>
    
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-blue-100 text-blue-900 border-b">
                <th class="p-3">ID</th>
                <th class="p-3">Nombre</th>
                <th class="p-3">Especialidad</th>
                <th class="p-3">Correo</th>
                <th class="p-3">Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr class="border-b hover:bg-gray-50">
                <td class="p-3">{{ $doctor->id }}</td>
                <td class="p-3 font-medium">{{ $doctor->name }}</td>
                <td class="p-3">{{ $doctor->specialty }}</td>
                <td class="p-3">{{ $doctor->email }}</td>
                <td class="p-3">{{ $doctor->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection