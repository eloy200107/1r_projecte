<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;

class MesaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // Obtener la lista de mesas desde la base de datos
        $mesas = Mesa::all();

        return view('reserva', compact('mesas'));
    }

    public function reservar(Request $request)
    {
        $mesa_id = $request->input('mesa_id');
        $usuario = $request->input('usuario');

        // Verificar si la mesa está disponible
        $mesa = Mesa::find($mesa_id);

        if (!$mesa) {
            return redirect()->route('reserva')->with('error', 'Mesa no encontrada.');
        }

        if ($mesa->reservada) {
            return redirect()->route('reserva')->with('error', 'Mesa ya reservada.');
        }

        // Realizar la reserva
        $mesa->reservada = true;
        $mesa->save();

        // Registrar la reserva en la base de datos
        Mesa::create([
            'nombre' => $mesa->nombre,
            'reservada' => true,
        ]);

        return redirect()->route('reserva')->with('success', 'Reserva exitosa.');
    }

}
?>

