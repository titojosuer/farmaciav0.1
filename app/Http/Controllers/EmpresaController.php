<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empresa;
use App\Http\Requests\EmpresaUpdateRequest;

class EmpresaController extends Controller
{
    public function index(Request $request){
    $empresas = empresa::where('id',1)->firstOrFail();
    return view('empresas.index', compact('empresas'));
    }

    public function update(EmpresaUpdateRequest $request, empresa $empresa){
      if($request->hasFile('picture')){
        $file = $request->file('picture');
        $image_name = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("/image"),$image_name);
      }
      $empresa->update($request->all()+['logo'=>$image_name,]);
      return redirect()->route('empresas.index');
    }
}
