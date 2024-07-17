<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Origen;
use Illuminate\Http\Request;

class OrigenController extends Controller
{
    public function create()
    {
        return view('origen.create');
    }

    public function store(Request $request)
    {
        $origen = new Origen();
        $origen->nombre = $request->input('nombre');
        $origen->otros_datos = $request->input('otros_datos');
       
        $origen->save();
        
        return $origen;
    }

    public function index()
    {
        $origen = Origen::orderBy('id', 'desc')->get();
        return view('origen.listar', compact('origen'));
    }

    public function show(Origen $origen) {
        return view('origen.show', compact('origen'));
    }

    public function destroy(Origen $origen) {
        $origen->delete();
        return redirect()->route('origen.index');
    }

    public function edit (Origen $origen){
    
        return view ('origen.edit',compact('origen'));

    }

    public function update(Request $request,Origen $origen ){

       
        $origen->nombre = $request->input('nombre');
        $origen->otros_datos = $request->input('otros_datos');
        $origen->save();
        return redirect()->route('origen.index');

    }
}
