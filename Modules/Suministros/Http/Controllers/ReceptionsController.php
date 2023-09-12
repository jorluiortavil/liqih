<?php

namespace Modules\Suministros\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Suministros\Entities\Reception;
use Illuminate\Support\Facades\Auth;

class ReceptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $receptions=Reception::All();
        return view('suministros::reception.index', ['receptions' => $receptions]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('suministros::reception.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $reception = new Reception();
        $reception->concepto = $request->concepto;
        $reception->tipo = $request->tipo;
        $reception->fecha = $request->fecha;
        $reception->nota = $request->nnota;
        $reception->responsable = Auth::user()->id;
        $reception->proveedor = $request->proveedor;
        $reception->observacion = $request->observacion;
        $reception->save();
        return view('suministros::reception.show', ['receptions'=>$reception]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $receptions = Reception::find($id);
        return view('suministros::reception.show', compact('receptions'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('suministros::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Reception $reception)
    {
        $reception->delete();
        return redirect()->route('reception.index');
    }
}
