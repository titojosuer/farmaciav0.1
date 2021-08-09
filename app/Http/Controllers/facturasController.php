<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefacturasRequest;
use App\Http\Requests\UpdatefacturasRequest;
use App\Repositories\facturasRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class facturasController extends AppBaseController
{
    /** @var  facturasRepository */
    private $facturasRepository;

    public function __construct(facturasRepository $facturasRepo)
    {
        $this->facturasRepository = $facturasRepo;
    }

    /**
     * Display a listing of the facturas.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $facturas = $this->facturasRepository->all();

        return view('facturas.index')
            ->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new facturas.
     *
     * @return Response
     */
    public function create()
    {
        return view('facturas.create');
    }

    /**
     * Store a newly created facturas in storage.
     *
     * @param CreatefacturasRequest $request
     *
     * @return Response
     */
    public function store(CreatefacturasRequest $request)
    {
        $input = $request->all();

        $facturas = $this->facturasRepository->create($input);

        Flash::success('Facturas saved successfully.');

        return redirect(route('facturas.index'));
    }

    /**
     * Display the specified facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        return view('facturas.show')->with('facturas', $facturas);
    }

    /**
     * Show the form for editing the specified facturas.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        return view('facturas.edit')->with('facturas', $facturas);
    }

    /**
     * Update the specified facturas in storage.
     *
     * @param int $id
     * @param UpdatefacturasRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefacturasRequest $request)
    {
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        $facturas = $this->facturasRepository->update($request->all(), $id);

        Flash::success('Facturas updated successfully.');

        return redirect(route('facturas.index'));
    }

    /**
     * Remove the specified facturas from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facturas = $this->facturasRepository->find($id);

        if (empty($facturas)) {
            Flash::error('Facturas not found');

            return redirect(route('facturas.index'));
        }

        $this->facturasRepository->delete($id);

        Flash::success('Facturas deleted successfully.');

        return redirect(route('facturas.index'));
    }
}
