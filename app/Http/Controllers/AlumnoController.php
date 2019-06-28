<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Catedra;
use App\Curso;
use App\EstadoAlumno;
use App\Facultad;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->flash();
        $alumnos = new Alumno;

        $alumnos = $alumnos->with(['persona','comision.curso']);
        $filtroActive = false;
        if($request->has('nombre') && !empty($request->nombre) && !is_null($request->nombre)){
            $alumnos = $alumnos->whereHas('persona', function ($query) use ($request) {
                $query->where('nombre', 'LIKE', '%'.$request->nombre.'%');
            });
            $filtroActive = true;
        }

        if($request->has('nota') && !empty($request->nota) && !is_null($request->nota)){
            $alumnos = $alumnos->where('nota_id', '=', $request->nota);
            $filtroActive = true;
        }
        if($request->has('apellido') && !empty($request->apellido) && !is_null($request->apellido)){
            $alumnos = $alumnos->whereHas('persona', function ($query) use ($request) {
                $query->where('apellido', 'LIKE', '%'.$request->apellido.'%');
            });
            $filtroActive = true;
        }
        if($request->has('documento') && !empty($request->documento) && !is_null($request->documento)){
            $alumnos = $alumnos->whereHas('persona', function ($query) use ($request) {
                $query->where('documento', '=', $request->documento);
            });
            $filtroActive = true;
        }
        if($request->has('curso') && !empty($request->curso) && !is_null($request->curso)){
            $alumnos = $alumnos->whereHas('comision', function ($query) use ($request) {
                $query->where('curso_id', '=', $request->curso);
            });
            $filtroActive = true;
        }
        if($request->has('catedra') && !empty($request->catedra) && !is_null($request->catedra)){
            $alumnos = $alumnos->whereHas('comision', function ($query) use ($request) {
                $query->where('catedra_id', '=', $request->catedra);
            });
            $filtroActive = true;
        }
        if($request->has('estado') && !empty($request->estado) && !is_null($request->estado)){
            $alumnos = $alumnos->where('estado_id', '=', $request->estado);
            $filtroActive = true;
        }
        if($request->has('turno') && !empty($request->turno) && !is_null($request->turno)){
            $alumnos = $alumnos->whereHas('comision', function ($query) use ($request) {
                $query->where('turno', '=', $request->turno);
            });
            $filtroActive = true;
        }
        if($request->has('semestre') && !empty($request->semestre) && !is_null($request->semestre)){
            $alumnos = $alumnos->whereHas('comision', function ($query) use ($request) {
                $query->where('semestre', '=', $request->semestre);
            });
            $filtroActive = true;
        }
        if($request->has('anio') && !empty($request->anio) && !is_null($request->anio)){
            $alumnos = $alumnos->whereHas('comision', function ($query) use ($request) {
                $query->where('anio', '=', $request->anio);
            });
            $filtroActive = true;
        }
        if($request->has('facultad') && !empty($request->facultad) && !is_null($request->facultad)){
            $alumnos = $alumnos->whereHas('comision', function ($query) use ($request) {
                $query->whereHas('curso', function ($query2) use ($request) {
                    $query2->where('facultad_id', '=', $request->facultad);
                });
            });
            $filtroActive = true;
        }

        $alumnos = $alumnos->orderBy('id','desc')->paginate(10);

        $cursos = Curso::orderBy('nombre','asc')->get();
        $facultades = Facultad::orderBy('nombre','asc')->get();
        $catedras = Catedra::orderBy('nombre','asc')->get();
        $notas = Nota::all();
        $estados = EstadoAlumno::all();

        $turnos = ['M'=>'Mañana','T'=>'Tarde','N'=>'Noche'];
        $semestres = [1=>'1',2=>'2'];
        $anios = ['2018'=>'2018','2019'=>'2019'];

        return view('alumnos.index',compact('alumnos'))
            ->with('cursos',$cursos)
            ->with('facultades',$facultades)
            ->with('notas',$notas)
            ->with('turnos',$turnos)
            ->with('estados',$estados)
            ->with('filtroActive',$filtroActive)
            ->with('semestres',$semestres)
            ->with('anios',$anios)
            ->with('catedras',$catedras);

    }

    public function addAlumno(Request $request){
        if($request->has('persona_id') && $request->has('comision_id') && $request->has('nota_id')){

            $existeAlumno = Alumno::where('persona_id','=',$request->persona_id)->where('comision_id','=',$request->comision_id)->first();

            if(isset($existeAlumno->id)){
                return response()->json(['message'=>'La persona seleccionada ya se encuentra en la comision asignada.','status'=>false],200);
            }
            $alumno = new Alumno;
            $alumno->persona_id = $request->persona_id;
            $alumno->comision_id = $request->comision_id;
            $alumno->nota_id = $request->nota_id;
            $alumno->estado_id = 1;

            if($alumno->save()){
                return response()->json(['message'=>'Alumno creado!, id: '.$alumno->id,'status'=>true,'id'=>$alumno->id],200);
            }
            else{
                return response()->json(['message'=>'Ocurrio un error al guardar el alumno.','status'=>false],400);
            }
        }
        else{
            return response()->json(['message'=>'Faltan parametros.','status'=>false],400);
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
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */

    public function saveNotaAlumno(Request $request){
        if($request->has('id')){
            $alumno = Alumno::find($request->id);
        }
        if(isset($alumno->id)){
            if($request->has('nota')){
                $alumno->nota_id = $request->nota;
                if($alumno->save()){
                    return response()
                        ->json(['message'=>'La nota fue cargada con exito.'],200);
                }
                else{
                    return response()
                        ->json(['message'=>'Error al guardar.'],404);
                }
            }
            else{
                return response()
                    ->json(['message'=>'No se encontro el alumno'],404);
            }
        }
        else{
            return response()
                ->json(['message'=>'No se encontro el alumno'],404);
        }
    }

    public function getAlumnoApi(Request $request){

        if($request->has('id')){
            $alumno = Alumno::find($request->id);
        }

        if(isset($alumno->id)){
            $alumnoResp = array(
                'nombre'=>$alumno->persona->nombre." ".$alumno->persona->apellido,
                'curso'=>$alumno->comision->curso->nombre,
                'comision'=>$alumno->comision->id,
                'catedra_turno_semestre'=>$alumno->comision->catedra->nombre.", Turno: ".$alumno->comision->turno.", Semestre: ".$alumno->comision->semestre." ".$alumno->comision->anio,
                'nota'=>$alumno->nota_id
            );
            return response()
                ->json($alumnoResp,200);
        }
        else{
            return response()
                ->json(['message'=>'No se encontro el alumno'],404);
        }

    }


    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
