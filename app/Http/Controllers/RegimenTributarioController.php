<?php

namespace App\Http\Controllers;

use App\Models\regimenTributario;
use App\Http\Requests\regimenTributarioStoreRequest;
use App\Http\Requests\regimenTributarioUpdateRequest;
use Illuminate\Http\Request;
use Flash;
use Response;

class RegimenTributarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $regimenTributario = regimenTributario::get();
      return view('ventas.regimenTributario.index', compact('regimenTributario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.regimenTributario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(regimenTributarioStoreRequest $request)
    {
      regimenTributario::create($request->all());
      return redirect()->route('regimenTributario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\regimenTributario  $regimenTributario
     * @return \Illuminate\Http\Response
     */
    public function show(regimenTributario $regimenTributario)
    {
        return view('ventas.regimenTributario.show', compact('regimenTributario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regimenTributario  $regimenTributario
     * @return \Illuminate\Http\Response
     */
    public function edit(regimenTributario $regimenTributario)
    {
      return view('ventas.regimenTributario.edit', compact('regimenTributario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\regimenTributario  $regimenTributario
     * @return \Illuminate\Http\Response
     */
    public function update(regimenTributarioUpdateRequest $request, regimenTributario $regimenTributario)
    {
      $regimenTributario ->update($request->all());
      return redirect(route('regimenTributario.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regimenTributario  $regimenTributario
     * @return \Illuminate\Http\Response
     */
    public function destroy(regimenTributario $regimenTributario)
    {
      $regimenTributario->delete();
      return redirect()->route('ventas.regimenTributario.index');
    }
}
