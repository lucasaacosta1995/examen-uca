<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
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

    public function getListCursoByFacultadId(Request $request){
        if($request->has('facultad_id')){
            $facultadId = $request->facultad_id;
            $cursos = Curso::where('facultad_id','=',$facultadId)->orderBy('nombre','asc')->get();
            $cursosResp = array();
            $contador = 0;
            foreach ($cursos as $curso){
                if($curso->comisiones()->count() == 0){
                    continue;
                }
                $contador++;
                $cursosResp['registros'][] = array('id'=>$curso->id,'title'=>$curso->nombre);
            }
            $cursosResp['contador'] = $contador;
            return response()->json($cursosResp,200);

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
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        //
    }
}
