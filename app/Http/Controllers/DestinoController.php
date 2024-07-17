<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function create()
    {
        return view('trabajo.create');
    }

    public function store(Request $request)
    {
        $trabajo = new Destino();
        $trabajo->nombre = $request->input('nombre');
        $trabajo->otros_datos = $request->input('otros_datos');
       
        $trabajo->save();
        
        return $trabajo;
    }

    public function index()
    {
        $trabajos = Destino::orderBy('id', 'desc')->get();
        return view('trabajo.listar', compact('trabajos'));
    }

    public function show(Destino $trabajo) {
        return view('trabajo.show', compact('trabajo'));
    }

    public function destroy(Destino $trabajo) {
        $trabajo->delete();
        return redirect()->route('trabajo.index');
    }

    public function edit (Destino $trabajo){
    
        return view ('trabajo.edit',compact('trabajo'));

    }

    public function update(Request $request,Destino $trabajo ){

       
        $trabajo->nombre = $request->input('nombre');
        $trabajo->otros_datos = $request->input('otros_datos');
        $trabajo->save();
        return redirect()->route('trabajo.index');

    }
}
