<?php

namespace App\Http\Controllers;

use App\Comision;
use Illuminate\Http\Request;

class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getListComisionesByCursoId(Request $request){
        if($request->has('curso_id')){
            $cursoId = $request->curso_id;
            $comisiones = Comision::where('curso_id','=',$cursoId)
            ->with(['catedra', 'curso' => function($query) use ($cursoId) {
                $query->orderBy('nombre','asc')->get();
            }])->get();
            $comisionesResp = array();
            $contador = 0;
            foreach ($comisiones as $comision){
                $contador++;
                $title = "Nº".$comision->id;
                if(isset($comision->curso->id)){
                    $title .= " - ".$comision->curso->nombre;
                }
                if(isset($comision->catedra->id)){
                    $title .= " | Catedra: ".$comision->catedra->nombre;
                }
                $title.= " | Turno: ".$comision->turno.", Semestre: ".$comision->semestre.", Año: ".$comision->anio;
                $comisionesResp['registros'][] = array('id'=>$comision->id,'title'=>$title);
            }
            $comisionesResp['contador'] = $contador;
            return response()->json($comisionesResp,200);

        }
        else{
            return response()->json(['message'=>'Falta parametro curso_id.'],400);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function show(Comision $comision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function edit(Comision $comision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comision $comision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comision  $comision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comision $comision)
    {
        //
    }
}
