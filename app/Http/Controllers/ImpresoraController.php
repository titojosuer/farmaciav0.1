<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\impresora;
use App\Http\Requests\ImpresoraUpdateRequest;

class ImpresoraController extends Controller
{
    public function index(){
      $impresora = impresora::where('id',1)->firstOrFail();
      return view('impresora.index',compact('impresora'));
    }
    public function update(ImpresoraUpdateRequest $request, impresora $impresora){
      $impresora->update($request->all());
      return redirect()->route('impresora.index');
    }
}
