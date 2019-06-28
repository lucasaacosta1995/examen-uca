<!-- Modal -->
<div class="modal fade" id="modalNotasAlumno" tabindex="-1" role="dialog" aria-labelledby="modalNotasAlumnoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cargar Nota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="alumno_id" value="">
                <p id="notasNombre"></p>
                <p id="notasCurso"></p>
                <p id="notasComision"></p>
                <p id="notasCatedraTurnoSemestre"></p>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Nota</label>
                    <select class="form-control" id="notasModal" name="notasModal">
                        <option value="">Seleccione una nota</option>
                        @foreach ($notas as $nota)
                            <option value="{{$nota->id}}">{{$nota->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="alert alert-success" role="alert" id="notaSuccessSave" style="display: none;">
                    Nota cargada!
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCancelarNotaModal">Cancelar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCerrarNotaModal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="btnGuardarNotaModal" onclick="guardarNotaAlumno();">Guardar</button>
            </div>
        </div>
    </div>
</div>
