<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function create()
    {
        return view('colaborador.create');
    }

    public function store(Request $request)
    {
        $colaborador = new Colaborador();
        $colaborador->nombre = $request->input('nombre');
       
        $colaborador->save();
        
        return $colaborador;
    }

    public function index()
    {
        $colaborador = Colaborador::orderBy('id', 'desc')->get();
        return view('colaborador.listar', compact('colaborador'));
    }

    public function show(Colaborador $trabajo) {
        return view('colaborador.show', compact('colaborador'));
    }

    public function destroy(Colaborador $colaborador) {
        $colaborador->delete();
        return redirect()->route('colaborador.index');
    }

    public function edit (Colaborador $colaborador){
    
        return view ('colaborador.edit',compact('colaborador'));

    }

    public function update(Request $request,Colaborador $colaborador ){

       
        $colaborador->nombre = $request->input('nombre');
       
        $colaborador->save();
        return redirect()->route('colaborador.index');

    }
}
