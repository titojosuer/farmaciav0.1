<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Laboratorio;
use App\Models\proveedores;
use App\Models\productos;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CreateproductosRequest;
use App\Http\Requests\UpdateproductosRequest;
use App\Repositories\productosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class productosController extends AppBaseController
{
    /** @var  productosRepository */
    private $productosRepository;

    public function __construct(productosRepository $productosRepo)
    {
        $this->productosRepository = $productosRepo;
        // $this->middleware('auth');
        // $this->middleware('can:productos.create')->only(['create','store']);
        // $this->middleware('can:productos.index')->only(['index']);
        // $this->middleware('can:productos.edit')->only(['edit','update']);
        // $this->middleware('can:productos.show')->only(['show']);
        // $this->middleware('can:productos.destroy')->only(['destroy']);

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
      $productos = productos::paginate(10);
      return view('productos.index', compact('productos'));

    }

    /**
     * Show the form for creating a new productos.
     *
     * @return Response
     */
    public function create()
    {
       $categorias = Categoria::get();
       $laboratorios = Laboratorio::get();
       $proveedores = proveedores::get();
        return view('productos.create', compact('categorias','proveedores','laboratorios'));
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
        } else {
          $image_name = "Por defecto";
        }

        $producto = productos::create($request->all() +
        ['imagen'=>$image_name,
      ]);

      $producto->update(['codigo'=>$producto->id]);
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
      // dd($productos);
      $categorias = Categoria::get();
      $laboratorios = Laboratorio::get();
      $proveedores = proveedores::get();
      //  dd($categorias);
      return view('productos.edit',compact('productos','categorias','proveedores','laboratorios'));
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
        }else{
          $image_name = "Por defecto";
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

    public function cambiar_estado($id)
    {
      $productos = $this->productosRepository->find($id);
      if($productos->estado=='ACTIVO'){
          $productos->update(['estado'=>'DESACTIVADO']);
          return redirect()->back();
      }else{
          $productos->update(['estado'=>'ACTIVO']);
          return redirect()->back();
      }
    }

    public function delete($id)
      {
      $productos = $this->productosRepository->find($id);
      return view('productos.delete', compact('productos'));
    }

    public function get_productos_by_barcode(Request $request){
      if($request->ajax()){
        $productos = productos::where('codigo',$request->codigo)->firstOrFail();
        return response()->json($productos);
      }
    }

    public function get_productos_by_id(Request $request){
      if($request->ajax()){
        $productos = productos::findorFail($request->producto_id);
        return response()->json($productos);
      }
    }
}
