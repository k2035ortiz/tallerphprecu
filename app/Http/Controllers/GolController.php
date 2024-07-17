<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gol;
use Illuminate\Http\Request;

class GolController extends Controller
{
    public function create()
    {
        return view('goles.create');
    }

    public function store(Request $request)
    {
        $goles = new Gol();
        $goles->minuto = $request->input('minuto');
        $goles->desc = $request->input('desc');
       
        $goles->save();
        
        return $goles;
    }

    public function index()
    {
        $goles = Gol::orderBy('id', 'desc')->get();
        return view('goles.listar', compact('goles'));
    }

    public function show(Gol $goles) {
        return view('goles.show', compact('goles'));
    }

    public function destroy(Gol $goles) {
        $goles->delete();
        return redirect()->route('goles.index');
    }

    public function edit (Gol $goles){
    
        return view ('goles.edit',compact('goles'));

    }

    public function update(Request $request,Gol $goles ){

       
        $goles->minuto = $request->input('minuto');
        $goles->desc = $request->input('desc');
        $goles->save();
        return redirect()->route('goles.index');

    }
}
