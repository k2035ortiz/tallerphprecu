<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function create()
    {
        return view('partido.create');
    }

    public function store(Request $request)
    {
        $partido = new Partido();
        $partido->fecha = $request->input('fecha');
        $partido->goles_casa = $request->input('goles_casa');
        $partido->goles_fuera = $request->input('goles_fuera');
       
       
        $partido->save();
        
        return $partido;
    }

    public function index()
    {
        $partido = Partido::orderBy('id', 'desc')->get();
        return view('partido.listar', compact('partido'));
    }

    public function show(Partido $partido) {
        return view('partido.show', compact('partido'));
    }

    public function destroy(Partido $partido) {
        $partido->delete();
        return redirect()->route('partido.index');
    }

    public function edit (Partido $partido){
    
        return view ('partido.edit',compact('partido'));

    }

    public function update(Request $request,Partido $partido ){

       
        $partido->fecha = $request->input('fecha');
        $partido->goles_casa = $request->input('goles_casa');
        $partido->goles_fuera = $request->input('goles_fuera');
       
        $partido->save();
        return redirect()->route('partido.index');

    }
}
