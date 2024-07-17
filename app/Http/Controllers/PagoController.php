<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function create()
    {
        return view('pago.create');
    }

    public function store(Request $request)
    {
        $pago = new Pago();
        $pago->numero = $request->input('numero');
        $pago->concepto = $request->input('concepto');
        $pago->fecha_pago = $request->input('fecha_pago');
        $pago->cantidad = $request->input('cantidad');
       
        $pago->save();
        
        return $pago;
    }

    public function index()
    {
        $pago = Pago::orderBy('id', 'desc')->get();
        return view('pago.listar', compact('pago'));
    }

    public function show(Pago $pago) {
        return view('pago.show', compact('pago'));
    }

    public function destroy(Pago $pago) {
        $pago->delete();
        return redirect()->route('pago.index');
    }

    public function edit (Pago $pago){
    
        return view ('pago.edit',compact('pago'));

    }

    public function update(Request $request,Pago $pago ){

       
        $pago->numero = $request->input('numero');
        $pago->concepto = $request->input('concepto');
        $pago->fecha_pago = $request->input('fecha_pago');
        $pago->cantidad = $request->input('cantidad');
        $pago->save();
        return redirect()->route('pago.index');

    }
}
