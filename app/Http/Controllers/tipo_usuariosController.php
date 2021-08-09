<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtipo_usuariosRequest;
use App\Http\Requests\Updatetipo_usuariosRequest;
use App\Repositories\tipo_usuariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tipo_usuariosController extends AppBaseController
{
    /** @var  tipo_usuariosRepository */
    private $tipoUsuariosRepository;

    public function __construct(tipo_usuariosRepository $tipoUsuariosRepo)
    {
        $this->tipoUsuariosRepository = $tipoUsuariosRepo;
    }

    /**
     * Display a listing of the tipo_usuarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoUsuarios = $this->tipoUsuariosRepository->all();

        return view('tipo_usuarios.index')
            ->with('tipoUsuarios', $tipoUsuarios);
    }

    /**
     * Show the form for creating a new tipo_usuarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_usuarios.create');
    }

    /**
     * Store a newly created tipo_usuarios in storage.
     *
     * @param Createtipo_usuariosRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_usuariosRequest $request)
    {
        $input = $request->all();

        $tipoUsuarios = $this->tipoUsuariosRepository->create($input);

        Flash::success('Tipo Usuarios saved successfully.');

        return redirect(route('tipoUsuarios.index'));
    }

    /**
     * Display the specified tipo_usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoUsuarios = $this->tipoUsuariosRepository->find($id);

        if (empty($tipoUsuarios)) {
            Flash::error('Tipo Usuarios not found');

            return redirect(route('tipoUsuarios.index'));
        }

        return view('tipo_usuarios.show')->with('tipoUsuarios', $tipoUsuarios);
    }

    /**
     * Show the form for editing the specified tipo_usuarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoUsuarios = $this->tipoUsuariosRepository->find($id);

        if (empty($tipoUsuarios)) {
            Flash::error('Tipo Usuarios not found');

            return redirect(route('tipoUsuarios.index'));
        }

        return view('tipo_usuarios.edit')->with('tipoUsuarios', $tipoUsuarios);
    }

    /**
     * Update the specified tipo_usuarios in storage.
     *
     * @param int $id
     * @param Updatetipo_usuariosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_usuariosRequest $request)
    {
        $tipoUsuarios = $this->tipoUsuariosRepository->find($id);

        if (empty($tipoUsuarios)) {
            Flash::error('Tipo Usuarios not found');

            return redirect(route('tipoUsuarios.index'));
        }

        $tipoUsuarios = $this->tipoUsuariosRepository->update($request->all(), $id);

        Flash::success('Tipo Usuarios updated successfully.');

        return redirect(route('tipoUsuarios.index'));
    }

    /**
     * Remove the specified tipo_usuarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoUsuarios = $this->tipoUsuariosRepository->find($id);

        if (empty($tipoUsuarios)) {
            Flash::error('Tipo Usuarios not found');

            return redirect(route('tipoUsuarios.index'));
        }

        $this->tipoUsuariosRepository->delete($id);

        Flash::success('Tipo Usuarios deleted successfully.');

        return redirect(route('tipoUsuarios.index'));
    }
}
