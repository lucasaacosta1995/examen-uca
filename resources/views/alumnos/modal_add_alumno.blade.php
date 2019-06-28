<!-- Modal -->
<style>
    .minSelect21{

    }
</style>
<div class="modal fade" id="modalAddAlumno" tabindex="-1" role="dialog" aria-labelledby="modalAddAlumno" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crear alumno</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="formModalAddAlumnos" {{ route('users.reset_api_token') }}>
                @csrf
                <input type="hidden" id="alumno_id_add" value="0" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Persona</label>
                                <select class="form-control minSelect21" name="persona_id_add_alumno" id="addAlumnoPersonaId" required ></select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Facultad</label>
                                <select class="form-control minSelect21" name="facultad_id_add_alumno" onchange="getListCursoByFacultadId(this.value)"  required id="addAlumnoFacultadId">
                                    <option value="">Seleccione una facultad</option>
                                    @foreach ($facultades as $facultad)
                                        <option value="{{$facultad->id}}">{{$facultad->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Carrera</label>
                                <select class="form-control minSelect21" name="carrera_id_add_alumno" onchange="getListComisionesByCursoId(this.value)"  required id="addAlumnoCarreraId">
                                    <option value="">Seleccione un curso</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Comision</label>
                                <select class="form-control minSelect21" name="comision_id_add_alumno" id="addAlumnoComisionId" required >

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Nota</label>
                                <select class="form-control" id="addAlumnoNotaId" name="nota_id_modal_alumno">
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
                    </div>

                    <div class="alert alert-success" role="alert" id="addAlumnoSuccessSave" style="display: none;">
                    </div>
                    <div class="alert alert-danger" role="alert" id="addAlumnoErrorSave" style="display: none;">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCancelarAddAlumnoModal">Cancelar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCerrarAddAlumnoModal" style="display: none;">Cerrar</button>
                    <button type="submit" class="btn btn-primary" id="btnGuardarCrearAlumnoApiModal">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>

