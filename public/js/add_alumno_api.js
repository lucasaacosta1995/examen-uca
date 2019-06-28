// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('#addAlumnoPersonaId').select2({
        placeholder:'Seleccione una persona',
        allowClear: true,
        width: '100%'
    });
    $('#addAlumnoFacultadId').select2({
        placeholder:'Seleccione una facultad',
        allowClear: true,
        width: '100%'
    });
    $('#addAlumnoCarreraId').select2({
        placeholder:'Seleccione una carrera',
        allowClear: true,
        width: '100%'
    });
    $('#addAlumnoComisionId').select2({
        placeholder:'Seleccione una comision',
        allowClear: true,
        width: '100%'
    });
    $('#addAlumnoNotaId').select2({
        placeholder:'Seleccione una nota',
        allowClear: true,
        width: '100%'
    });
});

$("#modalAddAlumno").on("hidden.bs.modal", function () {
    if($("#alumno_id_add").val() > 0){
        location.reload();
    }
});


$("#formModalAddAlumnos").submit(function(e){
    $("#alumno_id_add").val(0);
    $("#addAlumnoSuccessSave").html('');
    $("#addAlumnoSuccessSave").hide();
    $("#addAlumnoErrorSave").html('');
    $("#addAlumnoErrorSave").hide();
    e.preventDefault();
    $.ajax({
        url: baseUrl+'/api/alumno/addAlumno',
        type: 'POST',
        dataType:'json',
        data:{'api_token':apiToken,
            'persona_id':$("#addAlumnoPersonaId").val(),'comision_id':$("#addAlumnoComisionId").val(),'nota_id':$("#addAlumnoNotaId").val()},
        success: function(data) {
            if(data.status){
                $("#alumno_id_add").val(data.id);
                $("#btnCancelarAddAlumnoModal").hide();
                $("#btnCerrarAddAlumnoModal").show();
                $("#addAlumnoSuccessSave").html(data.message);
                $("#addAlumnoSuccessSave").show();
                $("#btnGuardarCrearAlumnoApiModal").hide();
            }
            else{
                $("#addAlumnoErrorSave").html(data.message);
                $("#addAlumnoErrorSave").show();
            }
        },
        error: function(error) {
            $("#addAlumnoErrorSave").html('Ocurrio un error.');
            $("#addAlumnoErrorSave").show();
        }
    });



});

function getListComisionesByCursoId(idCurso){
    $("#addAlumnoComisionId").html('<option value="">Seleccione...</option>');
    $.ajax({
        url: baseUrl+'/api/comision/getListComisionesByCursoId',
        type: 'GET',
        dataType:'json',
        data:{'api_token':apiToken,'curso_id':idCurso},
        success: function(data) {
            if(data.contador > 0){
                $.each(data.registros,function(e,i){
                    let htmlTmp = '<option value="'+i.id+'">'+i.title+'</option>';
                    $("#addAlumnoComisionId").append(htmlTmp);
                });
            }
        },
        error: function(e) {
        }
    });
}

function getListCursoByFacultadId(idFacultad){
    $("#addAlumnoCarreraId").html('<option value="">Seleccione...</option>');
    $.ajax({
        url: baseUrl+'/api/curso/getListCursoByFacultadId',
        type: 'GET',
        dataType:'json',
        data:{'api_token':apiToken,'facultad_id':idFacultad},
        success: function(data) {
            if(data.contador > 0){
                $.each(data.registros,function(e,i){
                    let htmlTmp = '<option value="'+i.id+'">'+i.title+'</option>';
                    $("#addAlumnoCarreraId").append(htmlTmp);
                });
            }
        },
        error: function(e) {
        }
    });
}
function openModalAddAlumno(){
    $('#addAlumnoFacultadId').select2("val"," ");
    $('#addAlumnoCarreraId').select2("val"," ");
    $('#addAlumnoComisionId').select2("val"," ");
    $('#addAlumnoNotaId').select2("val"," ");
    $("#alumno_id_add").val(0);
    $("#formModalAddAlumnos").trigger("reset");
    $("#addAlumnoPersonaId").html('<option value="">Seleccione...</option>');
    $.ajax({
        url: baseUrl+'/api/persona/getListPersonasApi',
        type: 'GET',
        dataType:'json',
        data:{'api_token':apiToken},
        success: function(data) {
            if(data.contador > 0){
                $.each(data.registros,function(e,i){
                    let htmlTmp = '<option value="'+i.id+'">'+i.title+'</option>';
                    $("#addAlumnoPersonaId").append(htmlTmp);
                });
            }
            $("#modalAddAlumno").modal("show");
        },
        error: function(e) {
        }
    });
}
