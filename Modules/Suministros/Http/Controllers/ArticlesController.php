<?php

namespace Modules\Suministros\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Suministros\Entities\Article;
use Modules\Suministros\Entities\Reception;
use Modules\Suministros\Entities\ReceptionDetail;
use Modules\Suministros\Entities\Supply;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function details(Request $request) {
        dd($request);
        $details = Supply :: where('codigo',$request)->get();
        return response()->json(['details' => $details]);
      
      }
    public function index()
    {
        $articles=Article::All();
        return view('suministros::articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('suministros::articles.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $reception = new ReceptionDetail();
        $reception-> reception= $request->reception;
        $reception->supply = $request->nombre;
        $reception->cantidad = $request->cantidad;
        $reception->proveedor = $request->proveedor;
        $reception->lote = $request->lote;
        $reception->caducidad = $request->caducidad;
        $reception->save();
        $article= new Article();
        $article->supply = $request->nombre;
        $article->cantidad = $request->cantidad;
        $article->proveedor = $request->proveedor;
        $article->lote = $request->lote;
        $article->caducidad = $request->caducidad;
        $article->almacen = $request->almacen;
        $article->estante = $request->estante;
        $article->indice = $request->indice;
        $article->save();
        return redirect()->back();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('suministros::show');
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
    public function destroy($id)
    {
        //
    }
}
