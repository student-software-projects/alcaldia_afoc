<?php

namespace App\Http\Controllers\Localidad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadController extends Controller
{
    public function index(){
        $localidad=Localidad::all();
        return view('localidad.index',compact('localidad'));
    }
    public function create(){
        return view('localidad.create');
    }

    public function store(Request $request){
        $localidad=Localidad::create($request->all());
        return redirect()->route('localidad.index')->with([
            'message'=>'Se ha creado correctamente la localidad',
            'type'=>'success'
        ]);
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $localidad=Localidad::find($id);
        return view('localidad.show',compact('localidad'));
    }

    public function edit($id){
        $localidad=Localidad::find($id);
        return view('localidad.edit',compact('localidad'));
    }
    public function update(Request $request, $id){
        $localidad=Localidad::find($id)->update($request->all());
        return redirect()->route('localidad.index')->with([
            'message'=>'Se ha actualizado correctamente la localidad',
            'type'=>'warning'
        ]);
    }

    public function destroy($id){
        $localidad=Localidad::find($id)->delete();
        return redirect()->route('product_type.index')->with([
            'message'=>'Se ha eliminado correctamente la localidad',
            'type'=>'danger'
        ]);
    }
}
