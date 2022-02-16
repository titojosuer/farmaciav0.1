<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproveedoresRequest;
use App\Http\Requests\UpdateproveedoresRequest;
use App\Models\proveedores;
use App\Repositories\proveedoresRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Yajra\DataTables\DataTables;
use Flash;
use Response;

class proveedoresController extends AppBaseController
{
    /** @var  proveedoresRepository */
    private $proveedoresRepository;

    public function __construct(proveedoresRepository $proveedoresRepo)
    {
        $this->proveedoresRepository = $proveedoresRepo;
    }

    /**
     * Display a listing of the proveedores.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $proveedores = $this->proveedoresRepository->all();
             
        if ($request->ajax()) {

            $model = proveedores::all();
    
            return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('acciones',function (proveedores $proveedor){
              return $this->getActionColumn($proveedor);
            })
            ->rawColumns(['acciones'])
            ->make(true);
    
        }
            return view('proveedores.index');
    }

    protected function getActionColumn($proveedor): string
    {
        $showUrl = route('proveedores.show', $proveedor->id);
        $editUrl = route('proveedores.edit', $proveedor->id);
        $deleteUrl = route('proveedores.delete', $proveedor->id);
        return "<a class='btn btn-ghost-info' data-value='$proveedor->id' href='$showUrl' ><i class='fa fa-eye text-primary'></i></a> 
                        <a class='btn btn-ghost-success' data-value='$proveedor->id' href='$editUrl'><i class='fa fa-edit text-success'></i></a>
                        <a data-toggle='modal' id='smallButton' data-target='#smallModal' data-attr='$deleteUrl' title='Eliminar Cliente'
                        class='btn btn-ghost-secondary'><i class='fa fa-trash text-danger fa-lg'></i>
                       </a>";
    }
        // return view('proveedores.index')
        //     ->with('proveedores', $proveedores);
    // }

    /**
     * Show the form for creating a new proveedores.
     *
     * @return Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created proveedores in storage.
     *
     * @param CreateproveedoresRequest $request
     *
     * @return Response
     */
    public function store(CreateproveedoresRequest $request)
    {
        $input = $request->all();

        $proveedores = $this->proveedoresRepository->create($input);

        Flash::success('Proveedores saved successfully.');

        return redirect(route('proveedores.index'));
    }

    /**
     * Display the specified proveedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $proveedores = $this->proveedoresRepository->find($id);

        if (empty($proveedores)) {
            Flash::error('Proveedores not found');

            return redirect(route('proveedores.index'));
        }

        return view('proveedores.show')->with('proveedores', $proveedores);
    }

    /**
     * Show the form for editing the specified proveedores.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $proveedores = $this->proveedoresRepository->find($id);

        if (empty($proveedores)) {
            Flash::error('Proveedores not found');

            return redirect(route('proveedores.index'));
        }

        return view('proveedores.edit')->with('proveedores', $proveedores);
    }

    /**
     * Update the specified proveedores in storage.
     *
     * @param int $id
     * @param UpdateproveedoresRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproveedoresRequest $request)
    {
        $proveedores = $this->proveedoresRepository->find($id);

        if (empty($proveedores)) {
            Flash::error('Proveedores not found');

            return redirect(route('proveedores.index'));
        }

        $proveedores = $this->proveedoresRepository->update($request->all(), $id);

        Flash::success('Proveedores updated successfully.');

        return redirect(route('proveedores.index'));
    }

    /**
     * Remove the specified proveedores from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $proveedores = $this->proveedoresRepository->find($id);

        if (empty($proveedores)) {
            Flash::error('Proveedores not found');

            return redirect(route('proveedores.index'));
        }

        $this->proveedoresRepository->delete($id);

        Flash::success('Proveedores deleted successfully.');

        return redirect(route('proveedores.index'));
    }

    public function delete($id)
    {
    $proveedores = $this->proveedoresRepository->find($id);
    return view('proveedores.delete', compact('proveedores'));
  }
}
