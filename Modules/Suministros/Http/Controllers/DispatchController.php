<?php

namespace Modules\Suministros\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Suministros\Entities\Dispatch;
use Modules\Suministros\Entities\Article;
use Illuminate\Support\Facades\Auth;
use Modules\Suministros\Entities\Supply;
use Modules\Suministros\Entities\DispatchDetail;

class DispatchController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $dispatch=Dispatch::All();
        return view('suministros::dispatch.index', ['dispatch' => $dispatch]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('suministros::dispatch.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $dispatch = new Dispatch();
        $dispatch->concepto = $request->concepto;
        $dispatch->tipo = $request->tipo;
        $dispatch->fecha = $request->fecha;
        $dispatch->responsable = Auth::user()->id;
        $dispatch->beneficiario = $request->beneficiario;
        $dispatch->observacion = $request->observacion;
        $dispatch->save();
        return view('suministros::dispatch.show', ['dispatch'=>$dispatch]);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $dispatch = Dispatch::find($id);
        return view('suministros::dispatch.show', compact('dispatch'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $dispatch = Dispatch::find($id);
        $articles=Article::All();
        return view('suministros::dispatch.edit', ['dispatch' => $dispatch,'articles' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $dispatch = new DispatchDetail();
        $dispatch->dispatch = $id;
        $dispatch->supply = $request->codigo;
        $dispatch->cantidad = $request->cantidad;
        $dispatch->save();
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(Dispatch $dispatch)
    {
        $dispatch->delete();
        return redirect()->route('dispatch.index');
    }
}
