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
        return view('mesas', compact('mesas'));
    }

    public function reservar(Mesa $mesa)
    {
    
        // Obtiene el usuario actual que está realizando la reserva
        $usuarioReserva = auth()->user(); 
    
        // Marca la mesa como reservada y guarda el nombre de usuario que la reservó
        $mesa->reservada = true;
        $mesa->user_id = $usuarioReserva->id;
        $mesa->save();
    
        return redirect('/mesas')->with('success', 'Mesa reservada exitosamente');
    }

    public function edit(string $id)
    {
        $mesa = Mesa::findOrFail($id);
        return view('editmesa', compact('mesa'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
          'reservada' => 'required' ,
          
        ]);

        $mesa = Mesa::findOrFail($id);

        $mesa->update($request->all());
    
       return redirect()->to('/mesas')
          ->with('success','Mesa actualizada correctamente');
    }

}
?>

