<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\GolController;
use App\Http\Controllers\OrigenController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PartidoController;




use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//crud de gol punto 3
Route::get('goles/create',[GolController::class,'create']);
Route::post('goles/store', [GolController::class,'store'])->name('goles.store');
 Route::get('goles/listar',[GolController::class,'index'])->name('goles.index');
 Route::get('goles/{goles}',[GolController::class,'show'])->name('goles.show');
 Route::put('goles/{goles}',[GolController::class,'update'])->name('goles.update');//nuevo
 Route::delete('goles/{goles}',[GolController::class,'destroy'])->name('goles.destroy');
 Route::get('goles/{goles}/editar',[GolController::class,'edit'])->name('goles.edit');

//crud de partido punto 3
Route::get('partido/create',[PartidoController::class,'create']);
Route::post('partido/store', [PartidoController::class,'store'])->name('partido.store');
 Route::get('partido/listar',[PartidoController::class,'index'])->name('partido.index');
 Route::get('partido/{partido}',[PartidoController::class,'show'])->name('partido.show');
 Route::put('partido/{partido}',[PartidoController::class,'update'])->name('partido.update');//nuevo
 Route::delete('partido/{partido}',[PartidoController::class,'destroy'])->name('partido.destroy');
 Route::get('partido/{partido}/editar',[PartidoController::class,'edit'])->name('partido.edit');



//crud de destino punto 2
Route::get('trabajo/create',[DestinoController::class,'create']);
Route::post('destino/store', [DestinoController::class,'store'])->name('Destino.store');
 Route::get('trabajo/listar',[DestinoController::class,'index'])->name('trabajo.index');
 Route::get('trabajo/{trabajo}',[DestinoController::class,'show'])->name('trabajo.show');
 Route::put('trabajo/{trabajo}',[DestinoController::class,'update'])->name('trabajo.update');//nuevo
 Route::delete('trabajo/{trabajo}',[DestinoController::class,'destroy'])->name('trabajo.destroy');
 Route::get('trabajo/{trabajo}/editar',[DestinoController::class,'edit'])->name('trabajo.edit');


 
//crud de origen punto 2
Route::get('origen/create',[OrigenController::class,'create']);
Route::post('origen/store', [OrigenController::class,'store'])->name('origen.store');
 Route::get('origen/listar',[OrigenController::class,'index'])->name('origen.index');
 Route::get('origen/{origen}',[OrigenController::class,'show'])->name('origen.show');
 Route::put('origen/{origen}',[OrigenController::class,'update'])->name('origen.update');//nuevo
 Route::delete('origen/{origen}',[OrigenController::class,'destroy'])->name('origen.destroy');
 Route::get('origen/{origen}/editar',[OrigenController::class,'edit'])->name('origen.edit');



//crud de colaborador punto 1
Route::get('colaborador/create',[ColaboradorController::class,'create']);
Route::post('colaborador/store', [ColaboradorController::class,'store'])->name('colaborador.store');
 Route::get('colaborador/listar',[ColaboradorController::class,'index'])->name('colaborador.index');
 Route::get('colaborador/{colaborador}',[ColaboradorController::class,'show'])->name('colaborador.show');
 Route::put('colaborador/{colaborador}',[ColaboradorController::class,'update'])->name('colaborador.update');//nuevo
 Route::delete('colaborador/{colaborador}',[ColaboradorController::class,'destroy'])->name('colaborador.destroy');
 Route::get('colaborador/{colaborador}/editar',[ColaboradorController::class,'edit'])->name('colaborador.edit');

//crud de pago punto 1
Route::get('pago/create',[PagoController::class,'create']);
Route::post('pago/store', [PagoController::class,'store'])->name('pago.store');
 Route::get('pago/listar',[PagoController::class,'index'])->name('pago.index');
 Route::get('pago/{pago}',[PagoController::class,'show'])->name('pago.show');
 Route::put('pago/{pago}',[PagoController::class,'update'])->name('pago.update');//nuevo
 Route::delete('pago/{pago}',[PagoController::class,'destroy'])->name('pago.destroy');
 Route::get('pago/{pago}/editar',[PagoController::class,'edit'])->name('pago.edit');



