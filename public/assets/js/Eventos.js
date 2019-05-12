$(document).ready(function(){
    $(".programa").click(function(){
        var form = "";
        var titulo = $("#modalTitle");
        var body = $("#bodyModal");
        form+='<form><div class="row"><div class="col"><input type="text" id="nomprog" class="form-control" placeholder="Nombre del programa"></div></div>';
       form+='<div class="row mt-4"><div class="col"><input type="text" class="form-control" id="nomdep" placeholder="Nombre de la dependencia"></div><div class="col"><input type="text" class="form-control" id="responsable" placeholder="Responsable"></div></div></form>';
       form+='<div class="row mt-4"><div class="col"><textarea rows="4" class="form-control" id="descriprog" placeholder="Descrpicion"></textarea></div></div>';
       form+='<div class="row mt-4 justify-content-center"><input class="btn btn-info" id="imagenprog" name="uploadedfile" type="file" /></div>';
       body.html(form);
       titulo.html('Editar Programas de Sociales');
    });
    $("#rgProg").click(function(){
        var nombre = $("#nomprog").val();
        var apellido = $("#nomdep").val();
        var responsable = $("#responsable").val();
        var nomdep = $("#nomdep").val();
        var imagenprog = $("#imagenprog").val();
        $.ajax({
            url:"/gestor/gestor/ajaxProgramas",
            method:'POST',
            data:{
            "_token":"{{ csrf_token() }}",
            nombre:nombre,
            apellido:apellido,
            edad:e1dad
            },
            success:function(data){
                $("#myModal").modal('show');
                $("#nombre").val('');
                $("#apellido").val('');
                $("#edad").val('');
        }
        });
    });
});
