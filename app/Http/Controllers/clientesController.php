<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateclientesRequest;
use App\Http\Requests\UpdateclientesRequest;
use App\Repositories\clientesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Flash;
use Response;

class clientesController extends AppBaseController
{
    /** @var  clientesRepository */
    private $clientesRepository;

    public function __construct(clientesRepository $clientesRepo)
    {
        $this->clientesRepository = $clientesRepo;
    }

    /**
     * Display a listing of the clientes.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $clientes = $this->clientesRepository->all();
        
        if ($request->ajax()) {
        
            $model = $this->clientesRepository->all();
    
            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('acciones',function ($row){
              return $this->getActionColumn($row);
            })
            ->rawColumns(['acciones'])
            ->make(true);
    
        }
            return view('clientes.index');
        // return view('clientes.index')
        //     ->with('clientes', $clientes);
    }

    protected function getActionColumn($row): string
    {
        $showUrl = route('clientes.show', $row->id);
        $editUrl = route('clientes.edit', $row->id);
        $deleteUrl = route('clientes.delete', $row->id);
        return "<a class='btn btn-ghost-info' data-value='$row->id' href='$showUrl' ><i class='fa fa-eye text-primary'></i></a> 
                        <a class='btn btn-ghost-success' data-value='$row->id' href='$editUrl'><i class='fa fa-edit text-success'></i></a>
                        <a data-toggle='modal' id='smallButton' data-target='#smallModal' data-attr='$deleteUrl' title='Eliminar Cliente'
                        class='btn btn-ghost-secondary'><i class='fa fa-trash text-danger fa-lg'></i>
                       </a>";
    }
    /**
     * Show the form for creating a new clientes.
     *
     * @return Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created clientes in storage.
     *
     * @param CreateclientesRequest $request
     *
     * @return Response
     */
    public function store(CreateclientesRequest $request)
    {
        $input = $request->all();

        $clientes = $this->clientesRepository->create($input);

        Flash::success('Clientes saved successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Display the specified clientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientes = $this->clientesRepository->find($id);

        if (empty($clientes)) {
            Flash::error('Clientes not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.show')->with('clientes', $clientes);
    }

    /**
     * Show the form for editing the specified clientes.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientes = $this->clientesRepository->find($id);
        if (empty($clientes)) {
            Flash::error('Clientes not found');

            return redirect(route('clientes.index'));
        }

        return view('clientes.edit')->with('clientes', $clientes);
    }

    /**
     * Update the specified clientes in storage.
     *
     * @param int $id
     * @param UpdateclientesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateclientesRequest $request)
    {
        $clientes = $this->clientesRepository->find($id);

        if (empty($clientes)) {
            Flash::error('Clientes not found');

            return redirect(route('clientes.index'));
        }

        $clientes = $this->clientesRepository->update($request->all(), $id);

        Flash::success('Clientes updated successfully.');

        return redirect(route('clientes.index'));
    }

    /**
     * Remove the specified clientes from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientes = $this->clientesRepository->find($id);

        if (empty($clientes)) {
            Flash::error('Clientes not found');

            return redirect(route('clientes.index'));
        }

        $this->clientesRepository->delete($id);

        Flash::success('Clientes deleted successfully.');

        return redirect(route('clientes.index'));
    }

    public function delete($id)
      {
      $clientes = $this->clientesRepository->find($id);
      return view('clientes.delete', compact('clientes'));
    }
}
