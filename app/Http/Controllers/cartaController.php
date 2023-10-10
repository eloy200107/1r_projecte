<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class cartaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carta= Menu::all();
        return view('index', compact('carta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
          ]);
          carta::create($request->all());
          return redirect()->route('posts.index')
            ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
          'name' => 'required' ,  
        ]);

        $carta = Carta::findOrFail($id);
        $carta->update($request->all());
    
        return redirect()->route('index')
        ->with('success','carta actualitzada correctament');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      echo  "eliminar carta" .$id;
      $carta = Carta::findOrFail($id);
      try{
        $result = $carta->delete();
      }
      catch(\Iluminate\Database\QueryException $e) {
        return redirect()->route('index')
        ->with('error','Error esborrant la carta');
      }
      return redirect()->route('index')
      ->with('success','Carta esborrada correctament');
    }

}

