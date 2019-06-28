function getAlumnoChangeNota(id){
    $("#btnCancelarNotaModal").show();
    $("#btnCerrarNotaModal").hide();
    $("#btnGuardarNotaModal").show();
    $("#notaSuccessSave").hide();
    $("#notasNombre").html();
    $("#alumno_id").val(id);
    $("#notasCurso").html();
    $("#notasCatedraTurnoSemestre").html();
    $("#notasComision").html();
    $("#notasModal").val(13);
    $.ajax({
        url: baseUrl+'/api/alumno/getAlumno',
        type: 'GET',
        dataType:'json',
        data:{'id':id,'api_token':apiToken},
        success: function(data) {
            $("#notasNombre").html("<strong>Persona: </strong>"+data.nombre);
            $("#notasComision").html("<strong>Nº comision: </strong>"+data.comision);

            $("#notasCurso").html("<strong>Curso: </strong>"+data.curso);
            $("#notasCatedraTurnoSemestre").html("<strong>"+data.catedra_turno_semestre+"</strong>");
            $("#notasModal").val(data.nota);
            $("#modalNotasAlumno").modal("show");
        },
        error: function(e) {
        }
    });
}

function guardarNotaAlumno(){
    $("#notaSuccessSave").hide();
    $("#btnGuardarNotaModal").show();
    $.ajax({
        url: baseUrl+'/api/alumno/saveNotaAlumno',
        type: 'POST',
        dataType:'json',
        data:{'id':$("#alumno_id").val(),'api_token':apiToken,'nota':$("#notasModal").val()},
        success: function(data) {
            $("#btnCancelarNotaModal").hide();
            $("#btnCerrarNotaModal").show();
            $("#alumno_id").val(0);
            $("#notaSuccessSave").show();
            $("#btnGuardarNotaModal").hide();

        },
        error: function(e) {
        }
    });
}

$("#modalNotasAlumno").on("hidden.bs.modal", function () {
    if($("#alumno_id").val() == 0){
        location.reload();
    }
});
