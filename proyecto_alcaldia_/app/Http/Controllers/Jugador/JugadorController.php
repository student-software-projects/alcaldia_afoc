<?php

namespace App\Http\Controllers\Jugador;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Models\Localidad;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function create(){
        $equipos=Equipo::all();
        return view('jugador.create', compact('equipos'));
    }
    public function store(Request $request){
        Jugador::create($request->all());
        return redirect()->route('jugador.index')->with([
            'message'=>'Se ha creado correctamente el jugador',
            'type'=>'success'
        ]);
    }

    public function index(){

        $jugadores = Jugador::select('jugadores.id', 'jugadores.nombres',
            'jugadores.apellidos','jugadores.numero_camisa','jugadores.apodo','equipos.nombre_equipo')
            ->join('equipos','jugadores.equipo_id','=','equipos.id')->get();

        return view('jugador.index',compact('jugadores'));
    }

    public function show($id)
    {
        $jugadores = Jugador::select('jugadores.id', 'jugadores.nombres',
            'jugadores.apellidos','jugadores.numero_camisa','jugadores.apodo',
            'equipos.nombre_equipo','jugadores.created_at','jugadores.updated_at')
            ->join('equipos', 'jugadores.equipo_id', '=', 'equipos.id')
            ->where('jugadores.id', '=', $id)
            ->get();

        return view('jugador.show', compact('jugadores'));
    }

    public function edit($id)
    {
        $jugadores = Jugador::select('jugadores.id', 'jugadores.nombres',
            'jugadores.apellidos','jugadores.numero_camisa','jugadores.apodo',
            'equipos.nombre_equipo','jugadores.created_at','jugadores.updated_at')
            ->join('equipos', 'jugadores.equipo_id', '=', 'equipos.id')
            ->where('jugadores.id', '=', $id)
            ->get();
        $equipos=Equipo::all();
        return view('jugador.edit')->with(compact('jugadores'))->with(compact('equipos'));
    }

    public function update(Request $request, $id){
        $jugadores=Jugador::find($id)->update($request->all());
        return redirect()->route('jugador.index')->with([
            'message'=>'Se ha actualizado correctamente el jugador',
            'type'=>'warning'
        ]);
    }

    public function destroy($id){
        $jugadores=Jugador::find($id)->delete();
        return redirect()->route('jugador.index')->with([
            'message'=>'Se ha eliminado correctamente el jugador',
            'type'=>'danger'
        ]);
    }
}
