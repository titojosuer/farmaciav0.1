<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaboratorioStoreRequest;
use App\Http\Requests\LaboratorioUpdateRequest;
use App\Models\Laboratorio;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laboratorios = Laboratorio::get();
        return view('laboratorios.index', compact('laboratorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('laboratorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaboratorioStoreRequest $request)
    {
        Laboratorio::create($request->all());
        return redirect()->route('laboratorios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(Laboratorio $laboratorio)
    {
      return view('laboratorios.show', compact('laboratorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Laboratorio $laboratorio)
    {
        return view('laboratorios.edit', compact('laboratorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update($id, LaboratorioUpdateRequest $request)
    {

          $laboratorios = $this->laboratoriosRepository->find($id);

          if (empty($laboratorios)) {
              Flash::error('Laboratorio no encontrada');

              return redirect(route('laboratorios.index'));
          }

          $laboratorios = $this->laboratoriosRepository->update($request->all(), $id);

          Flash::success('Laboratorio actualizada con exito.');

          return redirect(route('laboratorios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laboratorio $laboratorio)
    {
        $laboratorio->delete();
        return redirect()->route('laboratorios.index');
    }
}
