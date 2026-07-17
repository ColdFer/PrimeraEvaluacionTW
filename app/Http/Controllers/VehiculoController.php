<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();

        return view('vehiculos.index', compact('vehiculos'));
    }
    public function create()
    {
        return view('vehiculos.create');
    }
    public function store(Request $request)
    {
        Vehiculo::create([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'color' => $request->color,
            'anio' => $request->anio
        ]);

        return redirect('/vehiculos');
    }
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);

        return view('vehiculos.edit', compact('vehiculo'));
    }
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);

        $vehiculo->update([
            'placa' => $request->placa,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'color' => $request->color,
            'anio' => $request->anio
        ]);

        return redirect('/vehiculos');
    }
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);

        $vehiculo->delete();

        return redirect('/vehiculos');
    }
}
