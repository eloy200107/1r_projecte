<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bar;

class contactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
{
    $bars = Bar::all();
    return view('contacto', compact('bars'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        $bars = Bar::findOrFail($id);
        return view('editcont', compact('bars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'direction' => 'required' ,
            'telefon' => 'required' ,
            'email' => 'required' 

          ]);
  
          $bars = Bar::findOrFail($id);
          $bars->update($request->all());
      
          return redirect()->to('/contacto')
          ->with('success','carta actualitzada correctament');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo  "eliminar carta" .$id;
        $bars = Bar::findOrFail($id);
        try{
          $result = $bars->delete();
        }
        catch(\Iluminate\Database\QueryException $e) {
          return redirect()->to('/contacto')
          ->with('error','Error esborrant la carta');
        }
        return redirect()->to('/contacto')
        ->with('success','Carta esborrada correctament');
    }

}

