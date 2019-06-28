@extends('layouts.uca')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Alumnos</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <button type="button" class="btn btn-sm btn-success" title="Agregar alumno" onclick="openModalAddAlumno()"><i class="fa fa-plus-circle"></i> Alumno</button>
                </div>
            </div>
        </div>

        <div class="row  mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-1">
                        <button class="btn btn-primary float-right" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="@if(!$filtroActive) false @else true @endif" aria-controls="collapseExample">
                            <i class="fa fa-search"></i> Filtros
                        </button>
                        <div class="collapse @if($filtroActive) show @endif" id="collapseExample">
                            <div class="card card-body border-0">
                                <form id="formBuscadorAlumnos" autocomplete="off" class="form-horizontal form-label-left input_mask" action="{{ route('alumnos.index') }}" method="GET">
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="{{old('nombre')}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Apellido</label>
                                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder=""  value="{{old('apellido')}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Documento</label>
                                                <input type="text" class="form-control" id="documento" name="documento" placeholder="" value="{{old('documento')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Facultad</label>
                                                <select class="form-control" id="facultad" name="facultad">
                                                    <option value="">Seleccione una facultad</option>
                                                    @foreach ($facultades as $facultad)
                                                        @if(old('facultad') == $facultad->id)
                                                            <option value="{{$facultad->id}}" selected>{{$facultad->nombre}}</option>
                                                        @else
                                                            <option value="{{$facultad->id}}">{{$facultad->nombre}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Curso</label>
                                                <select class="form-control" id="curso" name="curso">
                                                    <option value="">Seleccione un curso</option>
                                                    @foreach ($cursos as $curso)
                                                        @if(old('curso') == $curso->id)
                                                            <option value="{{$curso->id}}" selected>{{$curso->nombre}}</option>
                                                        @else
                                                            <option value="{{$curso->id}}">{{$curso->nombre}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Catedra</label>
                                                <select class="form-control" id="catedra" name="catedra">
                                                    <option value="">Seleccione una catedra</option>
                                                    @foreach ($catedras as $catedra)
                                                        @if(old('catedra') == $catedra->id)
                                                            <option value="{{$catedra->id}}" selected>{{$catedra->nombre}}</option>
                                                        @else
                                                            <option value="{{$catedra->id}}">{{$catedra->nombre}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Turno</label>
                                                <select class="form-control" id="turno" name="turno">
                                                    <option value="">Seleccione un turno</option>
                                                    @foreach ($turnos as $idTurno => $turno)
                                                        @if(old('turno') == $idTurno)
                                                            <option value="{{$idTurno}}" selected>{{$turno}}</option>
                                                        @else
                                                            <option value="{{$idTurno}}">{{$turno}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Semestre</label>
                                                <select class="form-control" id="semestre" name="semestre">
                                                    <option value="">Seleccione un año</option>
                                                    @foreach ($semestres as $idSemestre => $semestre)
                                                        @if(old('semestre') == $idSemestre)
                                                            <option value="{{$idSemestre}}" selected>{{$semestre}}</option>
                                                        @else
                                                            <option value="{{$idSemestre}}">{{$semestre}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Año</label>
                                                <select class="form-control" id="anio" name="anio">
                                                    <option value="">Seleccione un año</option>
                                                    @foreach ($anios as $idAnio => $anio)
                                                        @if(old('anio') == $idAnio)
                                                            <option value="{{$idAnio}}" selected>{{$anio}}</option>
                                                        @else
                                                            <option value="{{$idAnio}}">{{$anio}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Nota</label>
                                                <select class="form-control" id="nota" name="nota">
                                                    <option value="">Seleccione una nota</option>
                                                    @foreach ($notas as $nota)
                                                        @if(old('nota') == $nota->id)
                                                            <option value="{{$nota->id}}" selected>{{$nota->descripcion}}</option>
                                                        @else
                                                            <option value="{{$nota->id}}">{{$nota->descripcion}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-4 col-sm-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Estado</label>
                                                <select class="form-control" id="estado" name="estado">
                                                    <option value="">Seleccione un estado</option>
                                                    @foreach ($estados as $estado)
                                                        @if(old('estado') == $estado->id)
                                                            <option value="{{$estado->id}}" selected>{{$estado->descripcion}}</option>
                                                        @else
                                                            <option value="{{$estado->id}}">{{$estado->descripcion}}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-12 col-sm-12">
                                            <button type="submit" class="btn  btn-info">Buscar</button>
                                            <a href="{{ request()->url() }}" class="btn btn-default">Limpiar filtros</a>
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead class="thead-dark">
                    <tr class="achicar2">
                        <th scope="col">#</th>
                        <th scope="col">Datos persona</th>
                        <th scope="col">Datos Curso</th>
                        <th scope="col">Facultad</th>
                        <th scope="col">Catedra</th>
                        <th scope="col">Turno</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Año</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alumnos as $alumno)
                        <tr class="achicar1">
                            <th scope="row">{{$alumno->id}}</th>
                            <td>{{$alumno->persona->nombre}} {{$alumno->persona->Apellido}} </br> {{$alumno->persona->documento}}</td>
                            <td>{{$alumno->comision->curso->nombre}} </br> Nº comision {{$alumno->comision->id}}</td>
                            <td>{{$alumno->comision->curso->facultad->nombre}}</td>
                            <td>{{$alumno->comision->catedra->nombre}}</td>
                            <td>{{$alumno->comision->turno}}</td>
                            <td>{{$alumno->comision->semestre}}</td>
                            <td>{{$alumno->comision->anio}}</td>
                            <td>{{$alumno->estado->descripcion}}</td>
                            <td>{{$alumno->nota->descripcion}}</td>
                            <td>
                                @if($alumno->estado_id != 2)
                                    <button type="button" class="btn btn-sm btn-info" title="Cambiar nota alumno" onclick="getAlumnoChangeNota({{$alumno->id}})">
                                        <i class="fas fa-clipboard"></i>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $alumnos->links() }}
            </div>
        </div>



    </div>
    @include('alumnos.modal_notas')
    @include('alumnos.modal_add_alumno')


@endsection
@section('scripts')
    <script src="{{ asset('js/notas_alumno.js') }}" ></script>
    <script src="{{ asset('js/add_alumno_api.js') }}" ></script>

@endsection
