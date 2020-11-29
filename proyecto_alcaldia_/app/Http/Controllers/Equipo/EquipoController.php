<?php

namespace App\Http\Controllers\Equipo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Localidad;

class EquipoController extends Controller
{
    public function create(){
        $localidades=Localidad::all();
        return view('equipo.create', compact('localidades'));
    }
    public function store(Request $request){
        Equipo::create($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Se ha creado correctamente el equipo',
            'type'=>'success'
        ]);
    }

    public function index(){

        $equipos = Equipo::select('equipos.id', 'equipos.nombre_equipo',
            'equipos.logo','localidades.localidad')
            ->join('localidades','equipos.localidad_id','=','localidades.id')->get();

        return view('equipo.index',compact('equipos'));
    }

    public function show($id)
    {
        $equipos = Equipo::select('equipos.id', 'equipos.nombre_equipo',
            'equipos.logo', 'localidades.localidad','equipos.created_at', 'equipos.updated_at')
            ->join('localidades', 'equipos.localidad_id', '=', 'localidades.id')
            ->where('equipos.id', '=', $id)
            ->get();

        return view('equipo.show', compact('equipos'));
    }

    public function edit($id)
    {
        $equipos = Equipo::select('equipos.id', 'equipos.nombre_equipo',
            'equipos.logo', 'localidades.localidad','equipos.created_at', 'equipos.updated_at')
            ->join('localidades', 'equipos.localidad_id', '=', 'localidades.id')
            ->where('equipos.id', '=', $id)
            ->get();
        $localidades=Localidad::all();
        return view('equipo.edit')->with(compact('equipos'))->with(compact('localidades'));
    }

    public function update(Request $request, $id){
        $equipos=Equipo::find($id)->update($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Se ha actualizado correctamente el equipo',
            'type'=>'warning'
        ]);
    }

    public function destroy($id){
        $equipos=Equipo::find($id)->delete();
        return redirect()->route('equipo.index')->with([
            'message'=>'Se ha eliminado correctamente el equipo',
            'type'=>'danger'
        ]);
    }
}
