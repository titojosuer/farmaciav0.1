<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\proveedores;
use App\Models\productos;
use App\Http\Requests\CreateproductosRequest;
use App\Http\Requests\UpdateproductosRequest;
use App\Repositories\productosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class productosController extends AppBaseController
{
    /** @var  productosRepository */
    private $productosRepository;

    public function __construct(productosRepository $productosRepo)
    {
        $this->productosRepository = $productosRepo;
    }

    /**
     * Display a listing of the productos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $productos = $this->productosRepository->all();

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new productos.
     *
     * @return Response
     */
    public function create()
    {
       $categorias = Categoria::get();
       $proveedores = proveedores::get();
        return view('productos.create', compact('categorias','proveedores'));
    }

    /**
     * Store a newly created productos in storage.
     *
     * @param CreateproductosRequest $request
     *
     * @return Response
     */
    public function store(CreateproductosRequest $request)
    {
        if($request->hasFile('image')){
          $file = $request->file('image');
          $image_name = time().'_'.$file->getClientOriginalName();
          $file->move(public_path("/image"),$image_name);
        }

        $producto = productos::create($request->all() +
        ['imagen'=>$image_name,
      ]);


        return redirect(route('productos.index'));
    }

    /**
     * Display the specified productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('productos', $productos);
    }

    /**
     * Show the form for editing the specified productos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
      $productos = $this->productosRepository->find($id);
      $categorias = Categoria::get();
      $proveedores = proveedores::get();
        return view('productos.edit',compact('productos','categorias','proveedores'));
    }

    /**
     * Update the specified productos in storage.
     *
     * @param int $id
     * @param UpdateproductosRequest $request
     *
     * @return Response
     */
    public function update(UpdateproductosRequest $request, $id)
    {
      $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        if($request->hasFile('image')){
          $file = $request->file('image');
          $image_name = time().'_'.$file->getClientOriginalName();
          $file->move(public_path("/image"),$image_name);
        }

      //   $producto = productos::create($request->all() +
      //   ['imagen'=>$image_name,
      // ]);
      //
        $productos = $this->productosRepository->update($request->all()+
        ['imagen'=>$image_name],$id );

        Flash::success('Productos updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified productos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            Flash::error('Productos not found');

            return redirect(route('productos.index'));
        }

        $this->productosRepository->delete($id);

        Flash::success('Productos deleted successfully.');

        return redirect(route('productos.index'));
    }
}
